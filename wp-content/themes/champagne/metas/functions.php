<?php

class ChampagneMetabox {

    private $id;
    private $title;
    private $post_type;
    private $fields=array();
    public function __construct($id,$title,$post_type)
    {
        add_action('admin_init',array(&$this,'create'));
        add_action('save_post',array(&$this,'save'));
        $this->id=$id;
        $this->title=$title;
        $this->post_type=$post_type;
    }

    public function create()
    {
        if(function_exists('add_meta_box')){
            add_meta_box($this->id,$this->title,array(&$this,'render'),$this->post_type);
                }
    }

    public function save($post_id)
    {
        if(
           (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
            ||  (defined("DOING_AJAX") && DOING_AJAX)
        )
        {
            return false;
        }
        foreach($this->fields as $field){
            $id=$field['id'];
            if(isset($_POST[$id]))
            {  
                         
                if(get_post_meta($post_id,$id)){
                    if($_POST[$id]===''){
                        delete_post_meta($post_id,$id);
                    }
                    else{
                        update_post_meta($post_id,$id,$_POST[$id]);
                    }
                }
                else{
                    if($_POST[$id]!=='')
                    {
                        add_post_meta($post_id,$id,$_POST[$id]);
                    }
                }
            }
        }
    }

    public function render()
    {
        global $post;
        foreach($this->fields as $field){
            extract($field);
            $value = get_post_meta($post->ID,$id,true);
            if($value==''){
                $value=$default;
            }
            require __DIR__.'/'. $type.'.php';
        }
    }
    public function add($id,$label,$type='text',$default='')
    {
        $this->fields[]=[
            'id'=>$id,
            'label'=>$label,
            'type'=>$type,
            'default'=>$default,
        ];
        return $this;
    }
}



$box=new ChampagneMetabox('champagne','Information','post');
$box->add('tag1','Tag 1 : ');
$box->add('tag2','Tag 2 : ');
$box->add('tag3','Tag 3 :');
$box->add('tag4','Tag 4 : ');
$box->add('arrow1','Fleche 1 : ','textarea');
$box->add('arrow2','Fleche 2 : ','textarea');
$box->add('arrow3','Fleche 3 : ','textarea');
$box->add('arrow4','Fleche 4 : ','textarea');


