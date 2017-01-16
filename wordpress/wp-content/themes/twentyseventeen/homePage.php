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
//        global $wpdb;
//        $bp    = buddypress();
//        $get_games = $wpdb->get_results( "SELECT id, game FROM wp_gp_games" );
//        $get_languages = $wpdb->get_results( "SELECT id, language FROM wp_gp_languages" );
        ?>


        <?php
//        bp_group_create_button();
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


        <?php
//        $args = array(
//            'type' => 'popular',
//            'max' => 10,
//            'user_id' => $user_id,
//            'meta_query' => true,
//        );
//        function game_class($number = false)
//        {
//            $gameclassarray = array('rlgame', 'dota', 'lol', 'cs', 'ow');
//            return $gameclassarray[$number];
//        }

//        $bpgames = array('Rocket League', 'Dota2', 'League Of Legends', 'CS:GO', 'Overwatch');
//        $bplaguages = array('United States', 'Afghanistan', 'Algeria', 'Andorra', 'Argentina', 'Australia', 'Bahamas', 'Bahrain', 'Belize', 'Benin', 'Bolivia', 'Cambodia');

        ?>

        <div class="content_wrapper">
            <div class="content_groups_wrapper">

                <?php
                $plugin_dir = ABSPATH . 'wp-content/plugins/buddypress/bp-templates/bp-legacy/buddypress/groups/';
                include( $plugin_dir . 'groups-loop.php');
                ?>

<!--                --><?php //if (bp_has_groups($args)) : ?>
<!--                    <div id="groups-list" class="item-list section group">-->
<!--                        --><?php //while (bp_groups()) : bp_the_group(); ?>
<!--                            <div class="col span_1_of_3">-->
<!--                                <div class="item-avatar">-->
<!--                                    <div-->
<!--                                        class="group_avatar">--><?php //bp_group_avatar('type=full&width=50&height=50') ?><!--</div>-->
<!--                                    <a href="--><?php //bp_group_permalink() ?><!--" class="item-avatar-hover">-->
<!--                                        <span class="joinGroupAvatar">Join Group</span>-->
<!--                                    </a>-->
<!---->
<!--                                    <div class="members">-->
<!--                                        0 / --><?php //bp_group_total_members($group = false); ?>
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="item-title">--><?php //bp_group_name() ?><!--</div>-->
<!---->
<!--                                    <div class="group_custom_fields">-->
<!--                                        --><?php
//
//                                        $group_game_num = bp_group_game();
//                                        $group_game_int = (int)$group_game_num;
//
//                                        $gamekey = array_search($group_game_int, $bpgames);
//                                        foreach($bpgames as $key => $value){
//                                            if($key === $group_game_int){
//                                                echo "<span class='group_game ". game_class($group_game_int)."'>" . $bpgames[$group_game_int] . "</span>";
//                                                break;
//                                            }
//                                        }
//
//                                        $group_language_num = bp_group_language();
//                                        $group_language_int = (int)$group_language_num;
//                                        $languagekey = array_search($group_language_int, $bpgames);
//                                        foreach($bplaguages as $key => $value){
//                                            if($key === $group_game_int){
//                                                echo "<span class='group_language'>" . $bplaguages[$group_language_int] . "</span>";
//                                                break;
//                                            }
//                                        }
//
//                                        ?>
<!--                                        <div class="clearfix"></div>-->
<!--                                    </div>-->
<!--                                    <div class="tags">-->
<!--                                        --><?php
//                                        $group = false;
//                                        $gtags = explode(',', gtags_get_group_tags($group));
//                                        $tagArray = array();
//                                        $result = count($gtags);
//                                        //							echo $result;
//                                        $index = 0;
//                                        foreach ($gtags as $key => $value) {
//                                            $index++;
//                                            if ($index <= 4) {
//                                                echo "<span>" . $gtags[$key] . "</span>";
//                                            }
//                                        }
//                                        echo "<div class='clearfix'></div>"
//                                        ?>
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="action">-->
<!--                                    --><?php //bp_group_join_button() ?>
<!--                                </div>-->
<!--                                <div class="clear"></div>-->
<!--                            </div>-->
<!--                        --><?php //endwhile; ?>
<!--                    </div>-->
<!--                    --><?php //do_action('bp_after_groups_loop') ?>
<!--                --><?php //else: ?>
<!--                    <div id="message" class="info">-->
<!--                        <p>--><?php //_e('There were no groups found.', 'buddypress') ?><!--</p>-->
<!--                    </div>-->
<!---->
<!--                --><?php //endif; ?>

            </div>

            <div class="content_tegs">
                <?php do_action('bp_before_directory_groups_content'); ?>
            </div>

            <div class="clearfix"></div>
        </div>
    </div><!-- .wrap -->

    <div class="clearfix"></div>

<?php get_footer();
