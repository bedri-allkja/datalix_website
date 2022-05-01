<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>


    <div class="fluid-container main" style="background-position: top; margin: 0;">
        <div class="container custom-container">
            <br><br><br><br>
            <div class="row features">
                <div class="col-7 feature-details" style="padding-right: 50px">
                    <div class="sub-title">#Contact Us</div>
                    <div class="title" style="line-height: 1.3; margin-bottom: 15px;">Don’t hesitate to <br>
                        contact us for any information.
                    </div>
                    <div class="description">
                        We are focused on improving sales outcomes by
                        providing personalized data around niche data segments
                        and combining this data with multi-channel prospecting campaigns.
                    </div>
                    <br>
                </div>

                <div class="col-5 feature-image text-right" style="position: relative;">
                    <img src="http://localhost/datalix-website/wp-content/themes/datalix-child/assets/img/services.png" style="margin-bottom: 0; margin-top: -30px; width: 80%">
                </div>
            </div>
            <br><br>
        </div>
    </div>

    <div class="fluid-container" style="background-color: #132646; margin: 0;">
        <br>
        <br>
        <br>
        <div class="container custom-container">
            <div class="row">
                <div class="col contact-info" style="display: flex; flex-direction: column; justify-content: center;">
                    <div style="font-size: 40px;  font-weight: 600;">Don’t hesitate to <br>
                        contact us for any information.</div>
                    <br>
                    <div class="description">
                        Fill in your contact info and one of our awesome lead specialists will reach right back out to you!
                    </div>
                    <br>

                    <div style="margin-top: 25px" class="icons">
                        <div><i class="fa fa-envelope" aria-hidden="true"></i> info@entalgo.net</div>
                        <div><i class="fa fa-map-marker" style="font-size: 20px;"></i> Concord Center, St. Kavaja, Tirana, Albania</div>
                        <div><i class="fa fa-phone" style="font-size: 20px;"></i> 203.548.7726</div>
                    </div>
                </div>

                <div class="col-5">
                    <div class="text-left"
                         style="background: #FFF; z-index:1; width: 90%; padding: 40px; border-radius: 10px;">

                        <form role="form" method="post" id="reused_form">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" placeholder="Name" class="form-control"
                                       id="name" name="name" required maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="name">Company:</label>
                                <input type="text" placeholder="Company" class="form-control"
                                       id="company" name="name" required maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="name">Email:</label>
                                <input type="email" placeholder="Email Address" class="form-control"
                                       id="email" name="email" required maxlength="50">
                            </div>

                            <div class="form-group">
                                <label for="name">Message:</label>
                                <textarea class="form-control" type="textarea" name="message"
                                          id="message" placeholder="Your Message Here"
                                          maxlength="6000" rows="4"></textarea>
                            </div>

                            <!--                            <div class="row" style="margin-bottom:30px;">-->
                            <!--                                <div class="col-sm-5">-->
                            <!--                                    <img src="captcha.php" id="captcha_image"/>-->
                            <!--                                    <br/> <a id="captcha_reload" href="#">reload</a>-->
                            <!--                                </div>-->
                            <!--                                <div class="col-sm-6">-->
                            <!--                                    <label for="email">Enter the code from the image here:</label>-->
                            <!--                                    <input type="text" class="form-control" required id="captcha" name="captcha" >-->
                            <!--                                </div>-->
                            <!--                            </div>-->


                            <button type="submit" class="btn btn-success"
                                    style="width: 100%; width: 100%; box-shadow: 3px 1px 10px #14e3dc6b; background-color: #14e3dc; border-color: #14e3dc; padding: 13px;"
                                    id="btnContactUs">Submit
                            </button>

                        </form>
                        <div id="success_message" style="width:100%; height:100%; display:none; ">
                            <h3>Sent your message successfully!</h3>
                        </div>
                        <div id="error_message"
                             style="width:100%; height:100%; display:none; ">
                            <h3>Error</h3>
                            Sorry there was an error sending your form.

                        </div>
                    </div>
                </div>
            </div>

            <br><br><br>
            <div class="light-hr"></div>

            <br><br><br>
            <div class="row" style="color: #ffffff;">
                <div class="col-6 feature-box">
                    <img src="http://localhost/datalix-website/wp-content/themes/datalix-child/assets/img/Group 425.svg" style="width: 100%">
                </div>

                <div class="col feature-box" style="display: flex; flex-direction: column; justify-content: center;">
                    <div class="row">
                        <div class="col-12">
                            <div style="font-size: 28px; font-weight: 600;">Trusted by companies<br>
                                in Europe and United States</div>

                            <div class="subtitle">
                                Contact emails validated each month for Leadium clients.
                                Ensuring less than 2% total bounce rate on outbound prospecting.
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-6 feature-box">
                            <div class="focused-text">250k</div>
                            <div class="subtitle">
                                Contact emails validated each month for Leadium clients.
                                Ensuring less than 2% total bounce rate on outbound prospecting.
                            </div>
                        </div>
                        <div class="col-6 feature-box">
                            <div class="focused-text">250k</div>
                            <div class="subtitle">
                                Contact emails validated each month for Leadium clients.
                                Ensuring less than 2% total bounce rate on outbound prospecting.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br><br><br>
            <div class="light-hr"></div>

            <br><br><br>
            <div class="row" style="color: #ffffff;">
                <div class="col-12 feature-box">
                    <div style="font-size: 30px;  font-weight: 600;">Data Quality</div>
                    <div class="subtitle">Our experienced data team utilizes advanced technology and follows a strict
                        quality assurance process to verify every data point we source.
                        This ensures you receive unmatched quality and accuracy for every lead.
                    </div>
                </div>
            </div>

            <br><br><br>
            <div class="row">
                <div class="col feature-box">
                    <div class="focused-text">250k</div>
                    <div class="subtitle">
                        Contact emails validated each month for Leadium clients.
                        Ensuring less than 2% total bounce rate on outbound prospecting.
                    </div>
                </div>

                <div class="col feature-box">
                    <div class="focused-text">$220M</div>
                    <div class="subtitle">Pipeline revenue driven from prospecting to Leadium sourced contact data</div>
                </div>

                <div class="col feature-box">
                    <div class="focused-text">0%</div>
                    <div class="subtitle">
                        Leadium ensures zero contact duplication.
                        We dedupe leads against your live database so you never reach out to the same person twice.
                    </div>
                </div>

                <div class="col feature-box">
                    <div class="focused-text">10.5M</div>
                    <div class="subtitle">Unique leads generated for clients ranging in target industries & contact
                        personas.
                    </div>
                </div>
            </div>
            <br>
            <br>

        </div>

        <br>
        <br>
        <br>


    </div>

<?php get_footer(); ?>