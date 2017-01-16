ALTER TABLE `wp_bp_groups` ADD `game_id` INT(11) NULL DEFAULT NULL AFTER `date_created`;
ALTER TABLE `wp_bp_groups` ADD `language_id` INT(11) NULL DEFAULT NULL AFTER `game_id`;
