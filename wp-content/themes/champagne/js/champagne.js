$(function() {
    $(".menu-bottle .list-group-item.title").off("click").on("click", function() {
        cat = $(this).data('id');
        //hide other
        if (cat == 5) {
            hide = 4;
        } else {
            hide = 5;
        }
        $(".menu-bottle .list-group-item[data-parent='" + hide + "']").slideUp("slow");
        //show its
        $(".menu-bottle .list-group-item[data-parent='" + cat + "']").slideDown("slow");
    });
});