<?php
/*
 * Template file for Ajax Login By WordPressaHolic
 *
 * To safely override this template just duplicate it to
 * the root of your theme/child theme. Doing this will
 * preserve your changes across any updates to this plugin.
*/
?>

<!-- Membership (login / registration) lightbox markup begins -->
<div class="membership-lightbox-items" style="display: none;">

	<!-- Registration -->
	<div class="registration-lightbox membership-lightbox" data-action="alw_register">
		<div class="register-lightbox-header">
		</div>

		<span class="membership-lightbox-heading"><?php _e( 'Hi! Want to joint us?', 'ajax-login-by-wph' ) ?></span>
		<span class="register-lightbox-byline"><?php _e( 'Awesome, you\'re just a quick form away.', 'ajax-login-by-wph' ) ?></span>

		<input class="membership-lightbox-first-name" data-key="first_name" name="first_name" placeholder="<?php _e( 'First name', 'ajax-login-by-wph' ) ?>" />
		<input class="membership-lightbox-last-name" data-key="last_name" name="last_name" placeholder="<?php _e( 'Last name', 'ajax-login-by-wph' ) ?>"/>
		<input class="membership-lightbox-last-name" data-key="username" name="username" placeholder="<?php _e( 'Username (lowercase)', 'ajax-login-by-wph' ) ?>"/>
		<input class="membership-lightbox-email" type="email" data-key="email" name="email" placeholder="<?php _e( 'Email', 'ajax-login-by-wph' ) ?>" />
		<input class="membership-lightbox-password" type="password" data-key="password" name="password" placeholder="<?php _e( 'Password', 'ajax-login-by-wph' ) ?>" />

		<span class="alw-agreement-links" ><?php _e( 'By creating an account you agree to our', 'ajax-login-by-wph' ) ?><br>
		<a href="<?php echo get_home_url( ); ?>/terms-of-use/" target="_blank" class="alw-terms-and-conditions" ><?php _e( 'Terms and Conditions', 'ajax-login-by-wph' ) ?></a> <span class="alw-links-and"><?php _e( 'and', 'ajax-login-by-wph' ) ?></span> <a href="<?php echo get_home_url( ); ?>/privacy-policy/" target="_blank" class="alw-privacy-policy" ><?php _e( 'Privacy Policy', 'ajax-login-by-wph' ) ?></a></span>

		<input type="submit" value="<?php _e( 'Set Up Your Account', 'ajax-login-by-wph' ) ?>" name="subscribe"  class="button register-lightbox-submit" />

		<span class="membership-ligtbox-error"><?php _e( 'Sorry, registration failed. Incorrect details.', 'ajax-login-by-wph' ) ?></span>

		<span class="membership-lightbox-footer"><?php _e( 'Already a member?', 'ajax-login-by-wph' ) ?> <a class="login-lightbox-trigger" data-mfp-src=".login-lightbox" href="#" target="_blank" ><?php _e( 'Sign in here', 'ajax-login-by-wph' ) ?></a></span>
	</div>

	<!-- Registration Done -->
	<div class="registration-done-lightbox membership-lightbox">
		<div class="register-lightbox-header">
		</div>

		<span class="membership-lightbox-heading"><?php _e( 'Welcome', 'ajax-login-by-wph' ) ?>, <span class="membership-lightbox-first-name">{{first_name}}</span>!</span>
		<span class="register-lightbox-byline"><?php _e( 'As a starting point we recommend new members discover the following features that are now unlocked for you:', 'ajax-login-by-wph' ) ?></span>

		<div class="register-lightbox-item">
			<strong><span class="membership-lightbox-number"><?php _e( '1', 'ajax-login-by-wph' ) ?> </span><?php _e( 'Visit and Edit you profile -', 'ajax-login-by-wph' ) ?> <a href="<?php echo get_home_url( ); ?>/profile" target="_blank" ><?php _e( 'HERE', 'ajax-login-by-wph' ) ?></a></strong>
			<span><?php _e( 'Add a bio, upload an avatar, update your password', 'ajax-login-by-wph' ) ?></span>
		</div>

		<input type="submit" value="<?php _e( 'OKAY, GOT IT!', 'ajax-login-by-wph' ) ?>" name="submit" class="button registration-done-lightbox-submit" />
	</div>

	<!-- Login -->
	<div class="login-lightbox membership-lightbox" data-action="alw_login">
		<div class="register-lightbox-header">
		</div>

		<span class="membership-lightbox-heading"><?php _e( 'Great to have you back!', 'ajax-login-by-wph' ) ?></span>

		<input class="membership-lightbox-email" type="email" data-key="email" name="email" placeholder="<?php _e( 'Email / Username', 'ajax-login-by-wph' ) ?>" />
		<input class="membership-lightbox-password" type="password" data-key="password" name="password" placeholder="<?php _e( 'Password', 'ajax-login-by-wph' ) ?>" />

		<input type="submit" value="<?php _e( 'SIGN IN', 'ajax-login-by-wph' ) ?>" name="submit"  class="button login-lightbox-submit" />

		<span class="membership-ligtbox-error"><?php _e( 'Sorry, login failed. Incorrect email, and/or password.', 'ajax-login-by-wph' ) ?></span>

		<span class="membership-lightbox-footer"><?php _e( 'Forgot your password?', 'ajax-login-by-wph' ) ?> <a class="forgot-password-lightbox-trigger" data-mfp-src=".forgot-password-lightbox" href="#" target="_blank" ><?php _e( 'Click here', 'ajax-login-by-wph' ) ?></a></span>
		<span class="membership-lightbox-footer"><?php _e( 'New here?', 'ajax-login-by-wph' ) ?> <a class="registration-lightbox-trigger" data-mfp-src=".registration-lightbox" href="#" target="_blank" ><?php _e( 'Create an account', 'ajax-login-by-wph' ) ?></a></span>
	</div>

	<!-- Forgot Password -->
	<div class="forgot-password-lightbox membership-lightbox" data-action="alw_forgot_password">
		<div class="register-lightbox-header">
		</div>

		<span class="membership-lightbox-heading"><?php _e( 'Forgot your password?', 'ajax-login-by-wph' ) ?></span>
		<span class="register-lightbox-byline"><?php _e( 'Just enter your username or account associated email address below and we\'ll mail you a password reset link.', 'ajax-login-by-wph' ) ?></span>

		<input class="membership-lightbox-email" type="email" data-key="email" name="email" placeholder="<?php _e( 'Email / Username', 'ajax-login-by-wph' ) ?>" />
		<input type="submit" value="<?php _e( 'SUBMIT', 'ajax-login-by-wph' ) ?>" name="submit"  class="button forgot-password-lightbox-submit" />

		<span class="membership-ligtbox-error"><?php _e( 'Sorry, login failed. Incorrect email, and/or password.', 'ajax-login-by-wph' ) ?></span>

	</div>

</div>
<!-- Membership (login / registration) lightbox markup ends -->
