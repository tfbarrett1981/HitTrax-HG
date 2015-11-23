<?php 

/**
 * Template Name: Owner Subscribed
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

	<div id="content">
<h2 id="forgotPassword">FORGOT YOUR PASSOWRD?</h2>
            <hr>
            <p class="passwordText">Can’t remember your password? No problem! Enter the email address used for your HitTrax account, and we’ll get things straightened out.</p>
            <div class="passwordInputBox"><img src="<?php echo get_template_directory_uri(); ?>/img/email-icon.png" alt="">&nbsp;<input type="text" placeholder="Your Email Address"></div>
            <div class="buttonBorder center">
                <input type="submit" value="SUBMIT" class="submitButton">
            </div>
            <div class="hidden" id="foundAccount">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Check.png" alt="">
                <p>We’ve found your HitTrax account. Please check your email for further instructions</p>
            </div>
            <div id="noAccount" class="hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Nope.png" alt="">
                <p>Sorry, we can’t find that HitTrax account. Please try using a different email address.</p>
            </div><br /><br />
</div>
<?php get_footer(); ?>
