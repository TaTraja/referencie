<!-- ==================== Start header ==================== -->

<header class="works-header fixed-slider hfixd valign">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-11 static">
                <div class="capt mt-50">
                    <div class="parlx">
                        <h2 class="custom-font"><span>TaTraja</span>Collaborate with us</h2>
                        <p></p>
                    </div>

                    <div class="bactxt custom-font valign">
                        <span class="full-width">Collab</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End header ==================== -->



<!-- ==================== Start main-content ==================== -->

<div class="main-content">
<!-- ==================== Start about ==================== -->


    <div class="hero-sec section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cont">
                        <div class="sub-title">
                            <h6></h6>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <h3 class="main-title wow" data-splitting>Who are we looking for?</h3>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            Do you have a passion for what you do? Do you want to improve and use your skill? That's exactly what we're looking for!
                             <br>
                             If you take photos, paint, design, sculpt, model, edit and record videos, program, or play a musical instrument and sing,
                             we have a place just for you.
                             We are actively looking for projects that you are suitable for, but we also provide events, exhibitions, concerts and performances. We are just looking for any
                             an opportunity for our members to self-realize. If the word "freelance" says anything to you, log in and we will help you build your portfolio on our website,
                             where you will be able to show your work to people and clients around the world.  
                            
                        </p>
                        <!--                        <a href="#0" class="simple-btn mt-40">Download C.V</a>-->
                    </div>
                </div>
                <div class="col-lg-6 valign">
                    <div class="skills-box full-width">
                        <div class="skill-item">
                            <h4 class="custom-font-green">Photography, video and their composition</h4>
                            <h6 class="custom-font">Do you have an analog or digital camera at home? Don't be afraid to use it professionally! <br>
                                 With us, you will also use your camera and the ability to edit video. It all depends on your style and skill.</h6>

                            <br>
                            <h4 class="custom-font-green">Design</h4>
                            <h6 class="custom-font">Do you paint, draw, design and have a sense of detail? <br>
                                                    Take your hobbies to the next level and show the world what you can do.</h6>
                            <br>
                            <h4 class="custom-font-green">Programming</h4>
                            <h6 class="custom-font">Do you know programming in various languages and do you like challenges? 
                                Front-end and back-end programming of websites and applications,
                             games on different platforms. You will learn all this with us, or you will use what you have known for a long time.</h6>
                            <br>
                            <h4 class="custom-font-green">Music and singing</h4>
                            <h6 class="custom-font">Do you play a musical instrument, can you sing, or do you want to start a band? You can definitely do it with us and our boats.
                                                     Composition, mastering, arranging concerts and performances is our pleasure.</h6>

                        </div>

                    </div>
                </div>
            </div>
            <!-- comment -->
            <br>
            <br>
            
        </div>
    </div>

    <!-- ==================== End about ==================== -->

    <!-- ==================== Start Contact ==================== -->

    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form md-mb50">

                        <h3 class="extra-title mb-50 custom-font-green">Work with us.</h3>
                        <?php $attributes = array("class" => "form-horizontal", "name" => "Contact");
                        echo form_open("collaborate/collab", $attributes);?>
<!--                            <form id="contact-form" method="post" action="<?php echo base_url(); ?>Contact.php">-->

                            <div class="messages"></div>

                            <div class="controls">
                                <p>Fill this information and we will reach to you shortly.</p>
                                <div class="form-group">
                                    <input id="form_name" type="text" name="first_name" placeholder="First name" value="<?php echo !empty($postData['first_name'])?$postData['first_name']:''; ?>"
                                           required="required">
                                    
                                </div>
                                <div class="form-group">
                                    <input id="form_name" type="text" name="last_name" placeholder="Last name" value="<?php echo !empty($postData['last_name'])?$postData['last_name']:''; ?>"
                                           required="required">
                                </div>
                                <div class="form-group">
                                    <p>Date of birth</p>
                                    <input id="form_email" type="date" name="birth" placeholder="Date of birth" value="<?php echo !empty($postData['birth'])?$postData['birth']:''; ?>"
                                           required="required">
                                    <i>MM/DD/YYYY</i>
                                </div>
                                <p>Adress info</p>
                                <div class="form-group">
                                    <input id="form_email" type="text" name="street" placeholder="Street" value="<?php echo !empty($postData['street'])?$postData['street']:''; ?>"
                                           required="required">
                                </div>
                                <div class="form-group">
                                    <input id="form_email" type="text" name="city" placeholder="City" value="<?php echo !empty($postData['city'])?$postData['city']:''; ?>"
                                           required="required">
                                </div>
                                <div class="form-group">
                                    <input id="form_email" type="text" name="country" placeholder="Country" value="<?php echo !empty($postData['country'])?$postData['country']:''; ?>"
                                           required="required">
                                </div>
                                <div class="form-group">
                                    <input id="form_email" type="text" name="zip" placeholder="ZIP" value="<?php echo !empty($postData['zip'])?$postData['zip']:''; ?>"
                                           required="required">
                                </div>
                                <p>Contact info</p>
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" placeholder="Email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>"
                                           required="required">
                                </div>
                                <div class="form-group">
                                    <input id="form_email" type="text" name="number" placeholder="Phone number" value="<?php echo !empty($postData['number'])?$postData['number']:''; ?>"
                                           required="required">
                                    <i>SK +421, CZ +420 etc..</i>
                                </div>
                                <div class="form-group">
                                    <input id="form_email" type="text" name="instagram" placeholder="@ Instagram" value="<?php echo !empty($postData['instagram'])?$postData['instagram']:''; ?>"
                                           required="required">
                                    <i>The profile must be public at the time the form is submitted</i>
                                </div>
                                <div class="form-group">
                                    <input id="form_email" type="text" name="other" placeholder="Other profiles (separate with a comma if there are more)" value="<?php echo !empty($postData['other'])?$postData['other']:''; ?>">
                                </div>
                                <i>LinkedIn, Behance, Deviant art, SoundCloud and so on</i>
                                <div class="form-group">
                                    <textarea id="form_message" name="message" placeholder="Tell us something about yourself and your projects / skills" rows="5" value="<?php echo !empty($postData['message'])?$postData['message']:''; ?>"
                                              required="required"></textarea>
                                </div>
<!--                                <div class="form-group">
                                    <input type="file" accept=".png, .jpg, .jpeg" id="form_upload" name="photo" placeholder="Upload photo" rows="4" value="<?php echo !empty($postData['message'])?$postData['message']:''; ?>"
                                              required="required">
                                    <p>Upload only .jpg, .jpeg, .png files</p>
                                </div>-->
<!--                                <p>By submitting this form, you are accepting TOS </p>-->
<!--                                <input type="submit" name="contactSubmit" class="btn-curve btn-lit" value="Submit">-->
                                <button type="submit" value="Submit" name="contactSubmit" class="btn-curve btn-lit"><span>Send</span></button>

                            </div>
                            <?php echo form_close(); ?>
                            <small><small><i>By submitting this form, you agree to the use of your personal data in accordance with the GDPR</i></small></small>
                            
<!--                        </form>-->
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="cont-info">
                        <h4 class="extra-title mb-50">Contact info.</h4>
                        <h3 class="custom-font wow" data-splitting>Send us a message.
                        </h3>
                        <div class="item mb-40">
                            <h5><a href="#0">tatraja.art@gmail.com</a></h5>
                            <h5></h5>
                        </div>
                        <h3 class="custom-font wow" data-splitting>Visit our social networks.
                        </h3>
                        <div class="item">
                            <h6><span>Instagram TaTraja :&nbsp; </span><a href="https://www.instagram.com/tatraja.art/"> @tatraja.art</a></h6>
                            <h6><span>Instagram Vlad :&nbsp; </span><a href="https://www.instagram.com/vladimir_shoots/"> @vladimir_shoots</a></h6>
                            <h6><span>Instagram Dima :&nbsp; </span><a href="https://www.instagram.com/dm3films/"> @dm3films</a></h6>
                            <h6><span>Instagram Robo :&nbsp; </span><a href="https://www.instagram.com/rob.fir/"> @rob.fir</a></li>
                        </div>
                        <div class="social mt-50">
                            <a href="https://t.me/tatraja" class="icon">
                                <i class="fab fa-telegram fa-lg"></i>
                            </a>
                            <a href="https://www.reddit.com/r/TaTraja/" class="icon">
                                <i class="fab fa-reddit fa-lg"></i>
                            </a>
                            <a href="https://discord.gg/9bx6y44d" class="icon">
                                <i class="fab fa-discord fa-lg"></i>
                            </a>
                            <a href="https://www.patreon.com/TaTraja" class="icon">
                                <i class="fab fa-patreon fa-lg"></i>
                            </a>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- ==================== End Contact ==================== -->
