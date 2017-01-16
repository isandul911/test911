<?php
/**
 *
 * Template Name: homePage
 *
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 *
 */

get_header(); ?>

    <div class="right_side_wrapper">
        <div class="header"></div>

        <?php
        bp_group_create_button();
        ?>



        <?php
        $gamesArray =  bp_get_new_group_games();
        $languagesArray = bp_get_new_group_languages();
        ?>

        <div class="filter_wrapper">
            <div class="filters">
                <ul>
                    <li class="search_game">GAME</li>
                    <li class="search_rank">RANK</li>
                    <li class="search_language">COUNTRY</li>
                </ul>
            </div>
            <section id="filters_games" class="filters_games filter_box">
                <ul>
                    <li class="all_games"><span>All Games</span></li>

                    <?php
                    foreach($gamesArray as $key => $value){
                        echo "<li class='game_search game_search". $value->id ."'><a href='#'><span>".$value->game."</span></a></li>";
                    }
                    ?>
                </ul>
            </section>

            <section id="filters_rank" class="filters_rank filter_box">

                <div class="rank_wrapper">
                    min rank
                    <select name="min_rank" size="1">
                        <option value="">Silver</option>
                        <option value="">Gold</option>
                        <option value="">Bronze</option>
                        <option value="">All ranks</option>
                    </select>
                    max rank
                    <select name="max-rank" size="1">
                        <option value="">Silver</option>
                        <option value="">Gold</option>
                        <option value="">Bronze</option>
                        <option value="">All ranks</option>
                    </select>
                </div>



            </section>
            <section id="filters_language" class="filters_language filter_box">

                <div class="language_wrapper">
                    Select country
                    <select name="group-language" size="1">
<!--                        <option value=""></option>-->
                        <?php
                        foreach ($languagesArray as $key => $value):
                            echo '<option value="' . $value->id . '">' . $value->language . '</option>'; //close your tags!!
                        endforeach;
                        ?>
                    </select>
                </div>
            </section>
        </div>

        <script>
            jQuery(document).ready(function(){
                jQuery(".filters_rank").hide();
                jQuery(".filters_language").hide();
                jQuery(".filters ul li").click(function(){
                    console.log(jQuery(this));
                    jQuery(this).addClass("active");
                    jQuery('.filter_box').hide().eq(jQuery(this).index()).show();
                })
            })
        </script>


        <div class="content_wrapper">
            <div class="content_groups_wrapper">

                <?php
                $plugin_dir = ABSPATH . 'wp-content/plugins/buddypress/bp-templates/bp-legacy/buddypress/groups/';
                include( $plugin_dir . 'groups-loop.php');
                ?>

            </div>

            <div class="content_tegs">
                <?php do_action('bp_before_directory_groups_content'); ?>
            </div>

            <div class="clearfix"></div>
        </div>
    </div><!-- .wrap -->

    <div class="clearfix"></div>

<?php get_footer();
