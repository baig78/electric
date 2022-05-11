
<?php include('header.php'); ?>


    


    <!-- Under Nav Start -->
    <!-- <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Our Office</h5>
                            <p class="m-0">Suite # 200, 1000 Crawford Pl, Mount Laurel NJ 08054, United States.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Email Us</h5>
                            <p class="m-0">sales@rheomite.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Call Us</h5>
                            <p class="m-0">856-666-3448</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Under Nav End -->


    <!-- Page Header Start -->
    <div> <img src="img/contact_us.png" alt="" style="height: 400px;">

        <div class="container py-5" style="position: relative;margin-bottom: 0px !important;">
            <div class="row align-items-center py-4" style="width: 80%;margin-left: 10%;position: absolute;bottom: 30px; background: black;
            opacity: 0.7;">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Contact Us</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="index.html">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header Start -->


        <!-- Contact Start -->
        <div class="container-fluid bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                            <div class="d-inline-flex border border-secondary p-4 mb-4">
                                <h1 class="flaticon-office font-weight-normal text-secondary m-0 mr-3"></h1>
                                <div class="d-flex flex-column">
                                    <h4>Our Office</h4>
                                    <p class="m-0 text-white text-grey">Suite # 200, 1000 Crawford Pl, Mount Laurel NJ 08054, United States.</p>
                                </div>
                            </div>
                            <div class="d-inline-flex border border-secondary p-4 mb-4">
                                <h1 class="flaticon-email font-weight-normal text-secondary m-0 mr-3"></h1>
                                <div class="d-flex flex-column">
                                    <h4>Email Us</h4>
                                    <p class="m-0 text-white text-grey">sales@rheomite.com</p>
                                </div>
                            </div>
                            <div class="d-inline-flex border border-secondary p-4">
                                <h1 class="flaticon-telephone font-weight-normal text-secondary m-0 mr-3"></h1>
                                <div class="d-flex flex-column">
                                    <h4>Call Us</h4>
                                    <p class="m-0 text-white text-grey">+01 8 56 666 3448</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->




        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

        <?php include('footer.php'); ?>


