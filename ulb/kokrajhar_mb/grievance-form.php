<?php include("include/head.php");?>
        
    <body>
        <?php include("include/header.php");?>
    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area breadcrumb-bg">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Contact</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index.html" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->

        <!-- Contact area S t a r t -->
        <section class="contact-area section-padding2">
            <div class="position-relative contact-bg-before">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-9">
                            <div class="contact-card">
                                <h4 class="contact-heading">Feel Free to Write us Anytime</h4>
                                <form method="post" class="contact-form">
                                    <div class="row g-4">
                                        <div class="col-sm-6">
                                            <input class="custom-form" type="text" placeholder="Enter your name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="custom-form" type="text" placeholder="Enter your email">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="custom-form" type="text" placeholder="Your Phone">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="custom-form" type="text" placeholder="Select subject">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea class="custom-form-textarea" id="exampleFormControlTextarea1"
                                                rows="3" placeholder="Enter your message..."></textarea>
                                        </div>
                                    </div>
                                    <div class="mt-40">
                                       <div class="sign-btn">
                                            <button class="button-signin">
                                              SUBMIT
                                              <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                                <path
                                                  clip-rule="evenodd"
                                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                                  fill-rule="evenodd"
                                                ></path>
                                              </svg>
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Contact-->

        <!-- Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d893.2806107065503!2d90.278099!3d26.419525!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37588a9e2b94aa41%3A0xa299cdaf9d347cbb!2sKokrajhar%20Development%20Authority!5e0!3m2!1sen!2sin!4v1718086347862!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   
        <!-- / Map -->
    </main>

    <!-- Footer S t a r t -->
<?php include("include/footer.php");?>
    <!--/ End-of Footer -->

    <!-- Scroll Up  -->
    <div class="progressParent" id="back-top">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Add an search-overlay element -->
    <div class="search-overlay"></div>
    <!-- jquery-->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="assets/js/plugin.js"></script>
    <!-- Main js-->
    <script src="assets/js/main.js"></script>
</body>

</html>