<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

<!--	--><?php //get_template_part( 'template-parts/footer/footer-widgets' ); ?>

    <div class="container page-container">
        <br><br>
        <div class="row features">
            <div class="col-6 feature-details">
                <div class="sub-title">#StayInTouch</div>
                <div class="title">Get Started</div>
                <div class="description">
                    Need to quickly ramp up your Lead pipeline? <br>
                    Contact us today to find out how Datalix can help.
                </div>
                <div class="btn-section">
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                           placeholder="Enter your email">
                    <a href="">Get Started</a>
                </div>
            </div>

            <div class="col-6 feature-image">
                <img src="https://stg.datalix.com/wp-content/themes/datalix-child/assets/img/call-to-action.svg">
            </div>
        </div>

        <br>
        <br>
        <br>
    </div>

    <div class="fluid-container" style="background-color: #090952">
        <div class="container page-container footer">
            <div class="row">
                <div class="col-6">
                    <div style="display: flex; justify-content: flex-start; flex-direction: column;">
                        <img src="https://stg.datalix.com/wp-content/themes/datalix-child/assets/img/datalix-white.png" style="width: 130px;">
                        <div style="font-size: 14px; max-width: 600px; margin-top: 20px; opacity: .8; line-height: 1.8;">
                            We create qualified sales opportunities by providing personalized data around niche data
                            segments and combining this data with multi-channel prospecting campaigns.
                        </div>
                        <div style="font-size: 14px; text-align: left; margin-top: 25px">
                            Designed with <i class="fa fa-heart" style="color: #e91e63;" aria-hidden="true"></i> by
                            Datalix dev team.
                        </div>
                    </div>

                </div>

                <div class="col-2">
                    <div style="opacity: .7">Our Services</div>

                    <div style="display: flex; flex-direction: column; margin-top: 25px; line-height: 2;">
                        <a href="#" style="font-size: 14px; text-transform: none; color: white;">Lead Generation</a>
                        <a href="#" style="font-size: 14px; text-transform: none; color: white;">Data Cleansing</a>
                        <a href="#" style="font-size: 14px; text-transform: none; color: white;">Data Entry</a>
                        <a href="#" style="font-size: 14px; text-transform: none; color: white;">Outbound Automation</a>
                    </div>
                </div>
                <div class="col-2">
                    <div style="opacity: .7">Why Datalix</div>

                    <div style="display: flex; flex-direction: column; margin-top: 25px; line-height: 1.8;">
                        <a href="#" style="font-size: 14px; text-transform: none; color: white;">Pricing</a>
                        <a href="#" style="font-size: 14px; text-transform: none; color: white;">Careers</a>
                        <a href="#" style="font-size: 14px; text-transform: none; color: white;">Blog</a>
                        <a href="#" style="font-size: 14px; text-transform: none; color: white;">Success Stories</a>
                    </div>
                </div>
                <div class="col-2">
                    <div style="opacity: .7">Contact Us</div>

                    <div style="display: flex; flex-direction: column; margin-top: 25px; line-height: 1.8;">
                        <a href="#" style="font-size: 14px; text-transform: none; color: white;">Tirana, Albania</a>
                        <a href="#" style="font-size: 14px; text-transform: none; color: white;">Bethpage, NY</a>
                        <a href="#" style="font-size: 14px; text-transform: none; color: white;">203.548.7726</a>
                        <a href="#" style="font-size: 14px; text-transform: none; color: white;">info@datalix.com</a>
                    </div>
                </div>
            </div>

            <div class="light-hr"></div>

            <div class="row">
                <div class="col-6">
                    <div class="footer-bttm-text">Copyright © <span class="footer-span text-span-6">Datalix, LLC.</span>
                        2021 &nbsp;| &nbsp;All rights reserved. &nbsp;| &nbsp;<a href="https://stg.datalix.com/wp-content/themes/datalix-child/privacy-policy"
                                                                                 class="link-2"><span
                                    class="text-span-6" style="color: white;">Privacy</span></a></div>
                </div>

                <div class="col-6">
                    <div class="social-media">
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <!--                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
                        <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
