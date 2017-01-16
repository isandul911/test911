<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

</div><!-- #page -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="copyright">
        Groups.gg international Limited 2017
    </div>
    <div class="footer_menu">
        <ul>
            <li>Terms of Use </li>
            <li>Privacy Policy</li>
        </ul>
    </div>
<?php
//    get_sidebar();
?>
</footer>

<script>
    jQuery(document).ready(function(){
        jQuery(".left_side_wrapper").height(jQuery("#page").innerHeight());
        window.onresize = function(event) {
            jQuery(".left_side_wrapper").height(jQuery("#page").innerHeight());
        };

        jQuery(window).change(function(){
            jQuery(".left_side_wrapper").height(jQuery("#page").innerHeight());
        });

    })
</script>

<?php wp_footer(); ?>

</body>
</html>
