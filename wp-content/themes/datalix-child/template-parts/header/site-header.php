<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<!--<header id="masthead" class="--><?php //echo esc_attr( $wrapper_classes ); ?><!--">-->
<!--	--><?php //get_template_part( 'template-parts/header/site-branding' ); ?>
<!--	--><?php //get_template_part( 'template-parts/header/site-nav' ); ?>
<!--</header>-->
<!-- #masthead -->


<div class="fluid-container main-header">
    <div class="container custom-container">
        <div class="row header-menu">
            <div class="col-8 left-menu">
                <a href="https://stg.datalix.com/">
                    <img src="https://stg.datalix.com/wp-content/themes/datalix-child/assets/img/datalix.png" class="logo">
                </a>
<!--                <div class="menu-items">-->
<!--                    <a href="" id="services-drop">Solutions</a>-->
<!--                    <div id="services">-->
<!--                        <a href="services/lead-generation.html" class="sub-item">-->
<!--                            <img style="width: 28px;" src="https://stg.datalix.com/wp-content/themes/datalix-child/assets/img/search.svg">-->
<!---->
<!--                            <div class="data">-->
<!--                                <div class="title">Lead Generation</div>-->
<!--                                <div class="sub-title">Lorem ipsum dolor sit amet.</div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <a href="services/data-entry.html" class="sub-item">-->
<!--                            <img style="width: 28px;" src="https://stg.datalix.com/wp-content/themes/datalix-child/assets/img/insurance.svg">-->
<!--                            <div class="data">-->
<!--                                <div class="title">Data Entry</div>-->
<!--                                <div class="sub-title">Lorem ipsum dolor sit amet.</div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <a href="services/data-cleansing.html" class="sub-item">-->
<!--                            <img style="width: 28px;" src="https://stg.datalix.com/wp-content/themes/datalix-child/assets/img/insurance.svg">-->
<!--                            <div class="data">-->
<!--                                <div class="title">Data Cleasing</div>-->
<!--                                <div class="sub-title">Lorem ipsum dolor sit amet.</div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <a href="services/outbound-automation.html" class="sub-item">-->
<!--                            <img style="width: 28px;" src="https://stg.datalix.com/wp-content/themes/datalix-child/assets/img/insurance.svg">-->
<!--                            <div class="data">-->
<!--                                <div class="title">Outbound Automation</div>-->
<!--                                <div class="sub-title">Lorem ipsum dolor sit amet.</div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <a href="pricing">Pricing</a>-->
<!--                    <a href="" id="about-drop">Why Datalix?</a>-->
<!--                    <div id="about">-->
<!--                        <div class="sub-item">-->
<!--                            <img style="width: 28px;" src="https://stg.datalix.com/wp-content/themes/datalix-child/assets/img/insurance.svg">-->
<!--                            <div class="data">-->
<!--                                <div class="title">Careers</div>-->
<!--                                <div class="sub-title">Lorem ipsum dolor sit amet.</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <a href="contact-us" class="sub-item">-->
<!--                            <img style="width: 28px;" src="https://stg.datalix.com/wp-content/themes/datalix-child/assets/img/insurance.svg">-->
<!--                            <div class="data">-->
<!--                                <div class="title">Contact Us</div>-->
<!--                                <div class="sub-title">Lorem ipsum dolor sit amet.</div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!--                                           <a href="">Contact</a>-->
<!--                                            <a href="">Join our team <span>Hiring Now!</span></a>-->
<!--                </div>-->
            </div>
            <div class="col right-menu">
                <a href="https://app.datalix.com/" target="_blank" class="outline-btn">Login</a>
                <a href="https://app.datalix.com/auth/register" target="_blank" style="margin-left: 15px;">Sign Up</a>
            </div>
        </div>
    </div>
</div>