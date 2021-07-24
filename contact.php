<?php include 'header.php';?>
    <main>
        <section id="contact-wrapper" class="text-center client">
            <div class="container-fluid">
                <h2 class="section-title">CONTACT US</h2>
                <div class="row">
                    <div class="col-md-4 no-pad">
                        <div class="contact-item">
                            <img src="http://npmmachinery.com/public/images/mail-icon.png">
                            <h4>EMAIL</h4>
                            <a href="mailto:sales@vpackmachinery.in">sales@vpackmachinery.in</a>
                        </div>
                    </div>
                    <div class="col-md-4 no-pad">
                        <div class="contact-item">
                            <img src="http://npmmachinery.com/public/images/add-icon.png">
                            <h4>ADDRESS</h4>
                            <p>Plot No. 177,<br> Radheshyam Industrial Estate, </br> Opp. GVMM, S.P. Ring Road,<br> Ahmedabad – 382415, Gujarat, <br>India.</p>
                        </div>
                    </div>
                    <div class="col-md-4 no-pad">
                        <div class="contact-item last-child">
                            <img src="http://npmmachinery.com/public/images/mail-icon.png">
                            <h4>CALL US</h4>
                            <p><a href="tel:919512007086">+91 9016775450</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="home-subscription" class="text-center">
            <div class="container">
                <h2>GET IN TOUCH</h2>
                <div class="col-lg-10 offset-lg-1 col-md-12" id="contact-form">
                    <form action="http://npmmachinery.com/views/contactengine.php" name="request-quote" id="#commentForm" method="post" onsubmit="return validate()">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <input type="text" name="Fname" value="" placeholder="Full Name*" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <input type="text" name="Company" value="" placeholder="Company*" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <input type="email" name="Email" value="" placeholder="Email*" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 phone">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-4">
                                        <input type="number" value="" placeholder="+91" required>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-8">
                                        <input type="number" name="Phone" value="" placeholder="Phone*" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <input type="text" name="add1" placeholder="Address 1" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <input type="text" name="add2" placeholder="Address 2" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                <input type="text" name="country" value="" placeholder="Country*" required>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                <input type="text" name="state" value="" placeholder="State*" required>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                <input type="text" name="city" value="" placeholder="City*" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <textarea name="message" placeholder=Comments></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 captcha">
                                <div class="row">
                                   <div class="col-lg-10 col-md-10"><input type="text" name="captcha" id="captcha" class="frm-contact" placeholder="Fill the given value" maxlength="6" size="6" required="required"/></div>
                                   <div class="col-lg-2 col-md-2"> <img src="http://npmmachinery.com/views/captcha.php"  style="border: 1px solid #000;width: 100%;margin-top: 15px;"/></div>
                                 </div>
                            </div>
                            <p class="red-color">* indicates required field</p>
                            <input type="submit" value="SUMBIT" class="npm-btn">
                        </div>
                    </form>
            </div>
        </section>
        <section id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14686.816884648866!2d72.66518733014772!3d23.034629909149647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e87081d553ff3%3A0x2083ac800395785f!2sV-PACK%20MACHINERY%20-%20LIQUID%20FILLING%2C%20CAPPING%2C%20STICKER%20LABELING%20MACHINE!5e0!3m2!1sen!2sin!4v1627137635819!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen loading="lazy"></iframe>
        </section>
<?php include 'footer.php';?>
