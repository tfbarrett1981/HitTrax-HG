<?php 

/**
 * Template Name: Reset
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

	<div id="content">
<h2 id="forgotPasswordReset">PASSWORD RESET</h2>
            <hr>
            <div class="hidden" id="resetSuccess">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Check.png" alt="">
                <p>Your HitTrax password has been reset. You can now login to your account using your email address and this new password.</p>
            </div>
            <div id="resetFail" class="hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Nope.png" alt="">
                <p>Your new HitTrax password must be at least 6 characters.</p>
            </div>
            
            <p class="passwordText">Please create a new password for your HitTrax account. Your new password must be at least 6 characters, and is case sensitive.</p>
            <div class="passwordInputBox"><img src="<?php echo get_template_directory_uri(); ?>/img/lock.png" alt="">&nbsp;<input type="text" placeholder="Type your new password"></div>
            <div class="passwordInputBox"><img src="<?php echo get_template_directory_uri(); ?>/img/lock.png" alt="">&nbsp;<input type="text" placeholder="Confirm your new password"></div>
            <div class="buttonBorder center">
                <input type="submit" value="RESET MY PASSWORD" class="submitButton">
            </div><br /><br />
            </div>
<?php get_footer(); ?>
