<?php 

/**
 * Template Name: Homepage
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header("homepage"); ?>

        <div id="content">
            <section class="callout-top">
                <div id="callout-wrapper">
                        <h3>JOIN HITTRAX STATSCENTER</h3>
                        <h5>TRACK YOUR STATS AT THE  NEXT LEVEL WITH HITTRAX  ADVANCED MEMBERSHIP </h5>
                       <ul>
                           <li>View full batting or pitching history</li>
                           <li>Review performance trends over time</li>
                           <li>Explore regional and national rankings</li>
                           <li>Desktop and Mobile StatsCenter access</li>
                       </ul>
                       <div class="button"><a href="">SIGN UP NOW</a></div> 
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-apps.png" alt="" class="apps">
                </div>
            </section>
            <section class="callout-bottom">
                <div class="callout-wrapper">
                    <h3>INCLUDES ACCESS TO ALL HITTRAX STATS AND DATA</h3>
                    <ul class="graphics clearfix">
                        <li>
                            <h4>SPRAY CHARTS</h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Spray-Chart-Graphic.png" alt="">
                        </li>
                        <li>
                            <h4>HOT ZONES</h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Hot-Zones-Graphic.png" alt="">
                        </li>
                        <li>
                            <h4>TRENDS</h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Trends-Graphic.png" alt="">
                        </li>
                        <li>
                            <h4>LEADERBOARDS</h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Leaderboard-Graphic.png" alt="">
                        </li>
                    </ul>
                    <ul class="bottomButtons clearfix">
                        <li><a href="#">LEARN MORE ABOUT HITTRAX</a></li>
                        <li><a href="#">FIND A FACILITY NEAR ME</a></li>
                    </ul>
                </div>
            </section>
           
       </div>
<?php get_footer(); ?>
