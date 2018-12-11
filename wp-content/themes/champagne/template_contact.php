<?php /* template Name: contact */?>
<?php get_header();?>

<div class="row">
<div class="col-sm-7">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84114.06961216836!2d3.7636311395660016!3d48.79020057744537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e930c6c06bcbe7%3A0x900e723c6988fb3f!2s9+Rue+de+la+Libert%C3%A9%2C+51120+Reuves%2C+France!5e0!3m2!1sfr!2s!4v1542542916711"  frameborder="0" style="border:0;width:100%;min-height:350px" allowfullscreen></iframe>
    </div> <!– /.col –>
    <div class="col-sm-5">

        <table>
        <tr><td style="vertical-align: top;padding-right: 15px;">Nos coordonnées : </td><td> 9 Rue de la Liberté<br> 51120 Reuves<br> France</<td>
        </tr>
        </table>

<p><strong>Ouvert tous les jours.</strong></p>
<p>Nous vous conseillons de <strong>nous prévenir de votre visite</strong> ; nous nous rendrons ainsi disponible et pourrons vous réserver le meilleur accueil.</p>
<p>Horaires d’ouverture :</p>
<ul>
<li>Du lundi au vendredi : de 9 h à 18 h</li>
<li>Le samedi et le dimanche : de 10 h à 17 h</li>
</ul>
<p>Plusieurs formules possibles:</p>
<ul>
<li>Dégustations 3 cuvées</li>
<li>Dégustations 5 cuvées</li>
<li>Dégustation + visite vignes</li>
<li>Dégustation + visite coopérative</li>
</ul>
<p>N’hésitez pas à nous contacter pour plus de renseignements.</p>

    </div> <!– /.col –>
</div> <!– /.row –>

<div class="row">
<div class="col-sm-12">
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('contentSimple', get_post_format());
    }
}
?>
</div> <!– /.col –>
</div> <!– /.row –>

<?php get_footer();?>