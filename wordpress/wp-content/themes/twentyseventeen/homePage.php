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

        <div class="filter_wrapper">
            <div class="filters">
                <ul>
                    <li>GAME</li>
                    <li>RANK</li>
                    <li>COUNTRY</li>
                </ul>
            </div>
            <div class="filters_item">
                <ul>
                    <li class="all_games"><span>All Games</span></li>
                    <li class="game_search game_searchRL"><span>Rocket League</span></li>
                    <li class="game_search game_searchD2"><span>Dota2</span></li>
                    <li class="game_search game_searchLOL"><span>League Of Legends</span></li>
                    <li class="game_search game_searchSCGO"><span>CS:GO</span></li>
                    <li class="game_search game_searchOW"><span>Overwatch</span></li>
                </ul>
            </div>
        </div>


        <?php
        $args = array(
            'type' => 'popular',
            'max' => 10,
            'user_id' => $user_id,
            'meta_query' => true,
        );
        function game_class($number = false)
        {
            $gameclassarray = array('rlgame', 'dota', 'lol', 'cs', 'ow');
            return $gameclassarray[$number];
        }

        $bpgames = array('Rocket League', 'Dota2', 'League Of Legends', 'CS:GO', 'Overwatch');
        $bplaguages = array('United States', 'Afghanistan', 'Algeria', 'Andorra', 'Argentina', 'Australia', 'Bahamas', 'Bahrain', 'Belize', 'Benin', 'Bolivia', 'Cambodia');

        ?>

        <div class="content_wrapper">
            <div class="content_groups_wrapper">
                <?php if (bp_has_groups($args)) : ?>
                    <div id="groups-list" class="item-list section group">
                        <?php while (bp_groups()) : bp_the_group(); ?>
                            <div class="col span_1_of_3">
                                <div class="item-avatar">
                                    <div
                                        class="group_avatar"><?php bp_group_avatar('type=full&width=50&height=50') ?></div>
                                    <a href="<?php bp_group_permalink() ?>" class="item-avatar-hover">
                                        <span class="joinGroupAvatar">Join Group</span>
                                    </a>

                                    <div class="members">
                                        0 / <?php bp_group_total_members($group = false); ?>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-title"><?php bp_group_name() ?></div>

                                    <div class="group_custom_fields">
                                        <?php

                                        $group_game_num = bp_group_game();
                                        $group_game_int = (int)$group_game_num;

                                        $gamekey = array_search($group_game_int, $bpgames);
                                        foreach($bpgames as $key => $value){
                                            if($key === $group_game_int){
                                                echo "<span class='group_game ". game_class($group_game_int)."'>" . $bpgames[$group_game_int] . "</span>";
                                                break;
                                            }
                                        }

                                        $group_language_num = bp_group_language();
                                        $group_language_int = (int)$group_language_num;
                                        $languagekey = array_search($group_language_int, $bpgames);
                                        foreach($bplaguages as $key => $value){
                                            if($key === $group_game_int){
                                                echo "<span class='group_language'>" . $bplaguages[$group_language_int] . "</span>";
                                                break;
                                            }
                                        }

                                        ?>
                                        <div class="clearfix"></div>

                                    </div>

                                    <div class="tags">
                                        <?php
                                        $group = false;
                                        $gtags = explode(',', gtags_get_group_tags($group));
                                        $tagArray = array();
                                        $result = count($gtags);
                                        //							echo $result;
                                        $index = 0;
                                        foreach ($gtags as $key => $value) {
                                            $index++;
                                            if ($index <= 4) {
                                                echo "<span>" . $gtags[$key] . "</span>";
                                            }
                                        }
                                        echo "<div class='clearfix'></div>"
                                        ?>
                                    </div>
                                </div>
                                <div class="action">
                                    <?php bp_group_join_button() ?>
                                </div>
                                <div class="clear"></div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php do_action('bp_after_groups_loop') ?>
                <?php else: ?>
                    <div id="message" class="info">
                        <p><?php _e('There were no groups found.', 'buddypress') ?></p>
                    </div>

                <?php endif; ?>

            </div>

            <div class="content_tegs">
                <?php do_action('bp_before_directory_groups_content'); ?>
            </div>

            <div class="clearfix"></div>
        </div>
    </div><!-- .wrap -->

    <div class="clearfix"></div>

<?php get_footer();
