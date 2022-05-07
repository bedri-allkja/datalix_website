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
        <div class="col-lg-6 col-md-6 col-sm-12 feature-details">
            <div class="sub-title">#WhatAreYouWaitingFor?</div>
            <div class="title">Get Started</div>
            <div class="description">
                Technographic data results in more targeted prospecting. <br>
                10x your Sales pipeline! Start you free trial today (no credit cards required).
            </div>
            <div class="btn-section">
<!--                <input type="email" class="form-control" id="exampleFormControlInput1"-->
<!--                       placeholder="Enter your email">-->
                <a href="https://app.datalix.com/auth/register" target="_blank">Start Free Trial</a>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 feature-image">
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
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="company-info">
                    <img class="logo" src="https://stg.datalix.com/wp-content/themes/datalix-child/assets/img/datalix-white.png">
                    <div style="font-size: 14px; max-width: 600px; margin-top: 20px; opacity: .8; line-height: 1.8;">
                        Datalix is a Data as a Service (DaaS) company, providing technographic data for Sales,
                        Marketing, Customer Success, and Partnerships teams on millions of websites.
                    </div>
                    <div class="signature">
                        Designed with <i class="fa fa-heart" style="color: #e91e63;" aria-hidden="true"></i> by
                        Datalix dev team.
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-2 col-lg-12"></div>
            <div class="col-lg-2 col-md-4 col-lg-12 contact-col">
                <div class="title">Contact Us</div>

                <div class="links">
                    <a href="mailto:info@datalix.com" style="font-size: 14px; text-transform: none; color: white;">info@datalix.com</a>
                </div>
            </div>
        </div>

        <div class="light-hr"></div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="footer-bttm-text">Copyright © <span class="footer-span text-span-6">Datalix, LLC.</span>
                    2022 &nbsp;| &nbsp;All rights reserved.
                    <a href="https://stg.datalix.com/privacy-policy" class="link-2">
                        <span class="text-span-6" style="color: white;">Privacy</span></a> &nbsp;| &nbsp;

                    <a href="https://stg.datalix.com/privacy-policy" class="link-2">
                        <span class="text-span-6" style="color: white;">Terms</span></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
<!--                <div class="social-media">-->
<!--                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>-->
<!--                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
<!--                    <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>-->
<!--                    <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>-->
<!--                </div>-->
            </div>
        </div>
        <br>
    </div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
