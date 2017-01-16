<?php
/**
 * BuddyPress - Groups Loop
 *
 * Querystring is set via AJAX in _inc/ajax.php - bp_legacy_theme_object_filter().
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

?>
        <?php

        $gamesArray =  bp_get_new_group_games();
        $languagesArray = bp_get_new_group_languages();
        ?>

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
                                         <?php bp_group_total_members($group = false); ?>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-title"><?php bp_group_name() ?></div>

                                    <div class="group_custom_fields">
                                        <?php

                                        $group_game_num = bp_group_game();
                                        $group_game_int = (int)$group_game_num;
                                        foreach($gamesArray as $key => $value){
                                            if($key === $group_game_int){
                                                echo "<span class='group_game rlgame'>" . $value->game . "</span>";
                                                break;
                                            }
                                        }

                                        $group_language_num = bp_group_language();
                                        $group_language_int = (int)$group_language_num;

                                        foreach($languagesArray as $key => $value){
                                            if($key === $group_game_int){
                                                echo "<span class='group_language'>" . $value->language . "</span>";
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
