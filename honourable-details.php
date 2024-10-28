<?php include("include/head.php");

include('classes/Crud.php');
$crud=new Crud();

$bottomScroll=$crud->Read("bottom_scrolling_imges","1 order by `id` desc");
if(isset($_GET['hid'])){
    $id=base64_decode($_GET['hid']);
    $hon=$crud->Read("honourable_dignities","`id` =$id");
}
?>

<body>

  <?php include("include/header.php");?>
  <main>

    <section class="breadcrumbs-area" style="background-color:none;">
        <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0.0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">Honourable details</h1>
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="#0" class="single active">Honourable-details </a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <section class="testimonial-area pt-25">
        <div class="container">
            
            <div class="row g-0">
                <div class="col-lg-12 col-12">
                    <div class="swiper h-calc testimonialTwo-active swiper-fade swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-5226c9dbaf1bbc68" aria-live="off">
                            <div class="swiper-slide testimonial-card-two h-calc swiper-slide-visible swiper-slide-fully-visible swiper-slide-active" role="group" aria-label="1 / 1" style="width: 390px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                               
                                <div class="faqs-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                
                                                <div class="row">
                                                <?php
                                                    if($hon){
                                                ?>
                                                    <div class="col-lg-8 col-md-6 col-12">
                                                        <div class="testimonial-footer">
                                                            <div class="all-user">
                                                                <div class="happy-user">
                                                      
                                                                    <img src="admin/<?= $hon[0]['image']; ?>" alt="UDD">                                            

                                                                </div>
                    
                                                                <div class="user-info">
                                                                    <p class="name"><?= $hon[0]['name']; ?></p>
                                                                    <p class="designation"><?= $hon[0]['designation']; ?></p>                                                                   
                                                         
                                                                    <div class="social-section mt-3">                                               
                                                                        <div class="social-list">                                               
                                                                            <div class="socials">
                                                                                <?php
                                                                                    if($hon[0]['facebook']){
                                                                                    ?>
                                                                                    <a href="<?= $hon[0]['facebook']; ?>" style="margin: 0.6rem;" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                                    <?php
                                                                                    }
                                                                                ?>
                                                                            </div>
                                                                            <div class="socials">
                                                                                <?php
                                                                                    if($hon[0]['youtube']){
                                                                                    ?>
                                                                                <a href="<?= $hon[0]['youtube']; ?>" style="margin: 0.6rem;" target="_blank"><i class="fab fa-youtube"></i></a>
                                                                                <?php
                                                                                    }
                                                                                ?>
                                                                            </div>
                                                                        
                                                                            <div class="socials">
                                                                                <?php
                                                                                    if($hon[0]['instagram']){
                                                                                    ?>
                                                                                <a href="<?= $hon[0]['instagram']; ?>" style="margin: 0.6rem;" target="_blank"><i class="fab fa-instagram"></i></a>
                                                                                <?php
                                                                                    }
                                                                                ?>
                                                                            </div>

                                                                            <div class="socials">
                                                                                <?php
                                                                                    if($hon[0]['twitter']){
                                                                                    ?>
                                                                                <a href="<?= $hon[0]['twitter']; ?>" style="margin: 0.6rem;" target="_blank"><i class="fab fa-twitter"></i></a>
                                                                                <?php
                                                                                    }
                                                                                ?>
                                                                            </div>

                                                                        </div>
                                                                    </div>  
                                                                </div>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="testimonial-body">
                                                            <p class="pera" style="text-align: justify;">
                                                                <?= strip_tags($hon[0]['description']); ?>
                                                            </p>
                                                        </div>
                                                    </div> 

                                                    <?php
                                                        }else{
                                                    ?>
                                                  
                                                    <div class="col-lg-8 col-md-6 col-12">
                                                        <div class="testimonial-footer">
                                                            <div class="all-user">

                                                                <div class="happy-user">
                                                                <img src="admin/img/black.png" alt="UDD">
                                                                </div>    

                                                                <div class="user-info">
                                                                    <p class="name">Honours Name</p>
                                                                    <p class="designation">Designation </p>
                                                
                                                                    <div class="social-section mt-3">                                               
                                                                        <div class="social-list">                                               
                                                                            <div class="socials">                                                    
                                                                            <a href="#0" style="margin: 0.6rem;"><i class="fab fa-facebook-f"></i></a>
                                                                            </div>
                                                                            <div class="socials">
                                                                            <a href="#0" style="margin: 0.6rem;"><i class="fab fa-youtube"></i></a>                                                  
                                                                            </div>
                                                                        
                                                                            <div class="socials">
                                                                            <a href="#0" style="margin: 0.6rem;"><i class="fab fa-instagram"></i></a>                                                    
                                                                            </div>

                                                                            <div class="socials">
                                                                            <a href="#0" style="margin: 0.6rem;"><i class="fab fa-twitter"></i></a>                                                   
                                                                            </div>
                                                                        </div>
                                                                    </div>  
                                                                </div>
                                                            </div>
                                                        </div>

                                                        
                                                        <div class="testimonial-body">
                                                            <p class="pera" style="text-align: justify;">
                                                               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae ab, ea cumque dignissimos minima libero temporibus inventore sit nam culpa tempore dolorem blanditiis labore necessitatibus harum. Laudantium voluptates obcaecati quis nostrum reiciendis!

                                                               Lorem ipsum dolor sit amet consectetur adipisicing elit. ssimus labore ea. Eius rerum soluta delectus beatae neque cupiditate. Ea.
                                                            </p>
                                                        </div>
                                                    </div> 

                                                    <?php    
                                                        }
                                                    ?>            

                                                    <div class="col-lg-4" style="background-color: #f9f8f6;">
                                                        <div class="swiper testimonialThree-active">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide testimonial-card p-0">
                                                              
                                                                        <div class="image-wrapper">
                                                                        <img src="admin/img/map/btrmap.png" class="img-fluid" alt="Image">
                                                                        </div>
                                                                
                                                                    <div class="testimonial-body">
                                                                        
                                                                        <p class="name text-center" style="color: #60aef6;font-size: 30px;font-weight: 700;line-height: 1.2;">BTR, ASSAM</p>
                                                                        <p class="pera">
                                                                            <ul>
                                                                                <li><strong>Established:</strong><span style="font-size: 15px"> 9 February, 2003</span></li>
                                                                                <li><strong>Govt. Type:</strong> <span style="font-size: 15px"> Autonomus Administrative Region</span></li>
                                                                                <li><strong>Body:</strong> <span style="font-size: 15px"> Autonomus Administrative Region</span></li>
                                                                                <li><strong>Total Area:</strong> <span style="font-size: 15px"> 8,970 Km2</span></li>
                                                                                <li><strong>Official Languages:</strong> <span style="font-size: 15px"> Bodo, English, Assamese</span></li>
                                                                            </ul>
                                                                        </p>
                                                                    </div>
                                                                    
                                                                </div>                                                                
                                                            </div>
                                                            <div class="swiper-pagination"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                               
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                          
                         
                        </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
               
            </div>
        </div>
    </section>
   



    
  </main>

  <?php include('include/imgAndArnoimotion.php') ?>


 


  <!-- Footer S t a r t -->
  <?php include("include/footer.php");?>


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

  <script>
    // Function to truncate the title to 50 words
    function truncateTitle(titleElement) {
      var titleText = titleElement.innerText;
      var words = titleText.split(' ');
      if (words.length > 50) {
        var truncatedText = words.slice(0, 50).join(' ') + '...';
        titleElement.innerText = truncatedText;
      }
    }

    // Truncate the title
    var titleElement = document.querySelector('.title a');
    truncateTitle(titleElement);

    // Add event listener to the "View More" button
    document.getElementById('view-more-btn').addEventListener('click', function (event) {
      event.preventDefault(); // Prevent the default action of following the link
      window.location.href = this.getAttribute('href'); // Redirect to the link's href attribute
    });
  </script>



  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const videoContainers = document.querySelectorAll('.video-container');
      videoContainers.forEach(container => {
        const url = container.getAttribute('data-url');
        const videoId = extractVideoId(url);
        const startTime = extractStartTime(url);
        const embedUrl = `https://www.youtube.com/embed/${videoId}?rel=0&showinfo=0${startTime ? '&start=' + startTime : ''}`;

        const iframe = document.createElement('iframe');
        iframe.setAttribute('src', embedUrl);
        iframe.setAttribute('frameborder', '0');
        iframe.setAttribute('allowfullscreen', 'true');
        iframe.style.width = '100%';
        iframe.style.height = '100%'; // Make iframe height fill the container
        container.appendChild(iframe);
      });
    });

    function extractVideoId(url) {
      const match = url.match(/[?&]v=([^&]+)/);
      return match ? match[1] : null;
    }

    function extractStartTime(url) {
      const match = url.match(/[?&]t=(\d+)/);
      return match ? match[1] : null;
    }
  </script>



</body>

</html>