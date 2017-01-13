<?php 
/*
 * This is the page users will see logged out. 
 * You can edit this, but for upgrade safety you should copy and modify this file into your template folder.
 * The location from within your template folder is plugins/login-with-ajax/ (create these directories if they don't exist)
*/
?>
	<div class="lwa lwa-default"><?php //class must be here, and if this is a template, class name should be that of template directory ?>
	<?php // here guest & login signup menu ?>
	<div class="lwa-guest lwa-guest-menu">
	   <img class="guest-avatar" src="/wp-content/uploads/avatars/guest.png" />
	   <span>Guest</span>
           <a href="<?php echo esc_attr(LoginWithAjax::$url_login);    ?>" class="lwa-links-login lwa-links-modal"><?php esc_html_e('Log in' ,'login-with-ajax') ?></a>
           <a href="<?php echo esc_attr(LoginWithAjax::$url_register); ?>" class="lwa-links-register lwa-links-modal"><?php esc_html_e('Sign in','login-with-ajax') ?></a>
	</div>
	<?php // login ?>
	<div class="lwa-login lwa-login-default lwa-modal" style="display:none;">
        <form class="lwa-form" action="<?php echo esc_attr(LoginWithAjax::$url_login); ?>" method="post">
          <div>
            <div class="lwa-form-title">
		Login
            </div>
            <div class="lwa-username-input">
                <input type="text" name="log" placeholder="username or email" />
            </div>
            <div class="lwa-password-input">
                <input type="password" name="pwd" placeholder="password" />
            <div>
            <div class="lwa-submit-button">
                        <input type="submit" name="wp-submit" id="lwa_wp-submit" value="<?php esc_attr_e('Log In', 'login-with-ajax'); ?>" tabindex="100" style="float:right" />
                        <input type="hidden" name="lwa_profile_link" value="<?php echo esc_attr($lwa_data['profile_link']); ?>" />
                        <input type="hidden" name="login-with-ajax" value="login" />
			<?php if( !empty($lwa_data['redirect']) ): ?>
				<input type="hidden" name="redirect_to" value="<?php echo esc_url($lwa_data['redirect']); ?>" />
			<?php endif; ?>
            </div>
            <div class="lwa-submit-links">
               <input id="rememberme" name="rememberme" type="checkbox" class="lwa-rememberme" value="forever" style="float:left" /> <label for="rememberme"><?php esc_html_e( 'Remember Me','login-with-ajax' ) ?></label>
            </div>
        </form>
	</div>

	<?php // register ?>
	<?php if( get_option('users_can_register') && !empty($lwa_data['registration']) && $lwa_data['registration'] == 1 ): ?>
	<div class="lwa-register lwa-register-default lwa-modal" style="display:none;">
	<form class="lwa-form" action="<?php echo esc_attr(LoginWithAjax::$url_register); ?>" method="post">
		<div class="lwa-form-title">
			Create account
		</div>
		<div>
			<input type="text" name="user_login" id="user_login" class="input" size="20" tabindex="10" placeholder="nick"/></label>
		</div>
		<div>
			<input type="text" name="user_email" id="user_email" class="input" size="25" tabindex="20" placeholder="e-mail"/>
		</div>
		<div>
			<input type="password" name="user_password" id="user_password" class="input" size="20" tabindex="30" placeholder="password" />
		</div>
		<div class="lwa-submit-button">
			<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="<?php esc_attr_e('Next', 'login-with-ajax'); ?>" tabindex="100" style="float:right" />
		</div>
		<div>
	        	<input type="hidden" name="login-with-ajax" value="register" />
			<?php do_action('register_form'); ?>
			<?php do_action('lwa_register_form'); ?>
	        </div>
	</form>
	</div>

	<?php // remember ?>
        <?php if( !empty($lwa_data['remember']) && $lwa_data['remember'] == 1 ): ?>
	<div class="lwa-remember lwa-remember-default lwa-modal" style="display:none;">
         <form class="lwa-form" action="<?php echo esc_attr(LoginWithAjax::$url_remember) ?>" method="post"">
	   <div>
            <span class="lwa-status"></span>
            <table>
                <tr>
                    <td>
                        <strong><?php esc_html_e("Forgotten Password", 'login-with-ajax'); ?></strong>         
                    </td>
                </tr>
                <tr>
                    <td class="lwa-remember-email">  
                        <?php $msg = __("Enter username or email", 'login-with-ajax'); ?>
                        <input type="text" name="user_login" class="lwa-user-remember" value="<?php echo esc_attr($msg); ?>" onfocus="if(this.value == '<?php echo esc_attr($msg); ?>'){this.value = '';}" onblur="if(this.value == ''){this.value = '<?php echo esc_attr($msg); ?>'}" />
                        <?php do_action('lostpassword_form'); ?>
                    </td>
                </tr>
                <tr class="lwa-submit-button">
                    <td class="lwa-remember-buttons">
                        <input type="submit" value="<?php esc_attr_e("Get New Password", 'login-with-ajax'); ?>" class="lwa-button-remember" style="float:right" />
                        <a href="#" class="lwa-links-remember-cancel"><?php esc_html_e("Cancel", 'login-with-ajax'); ?></a>
                        <input type="hidden" name="login-with-ajax" value="remember" />
                    </td>
                </tr>
            </table>
            </div>
        </form>
	</div>
        <?php endif; ?>

		<?php endif; ?>
	</div>