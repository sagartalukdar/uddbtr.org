<?php include("include/head.php");
include('classes/Crud.php');
$crud=new Crud();
$videos=$crud->Read("news_events","`url`!='' order by `id` desc");
?>

<body>
    <?php include("include/preloader.php");?>
  <?php include("include/header.php");?>
  <main>
     <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area" style="background-color:none;">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Video Gallery</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                    class="single active">Video Gallery</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->

    <style>
   
   body{
    background-color:gainsboro;
   }

      .main-container{
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: center;
      align-items: center;
      margin: 50px 0;
      }

      .video-container {
        margin-bottom: 20px;
        padding: 5px;
        height: 250px;
        /*background: white;*/
        display: inline-block;
      }

      .responsive-video {
        position: relative;
        display: block;
        width: 100%;
        height: 100%;
        padding-bottom: 56.25%;
      }

      .responsive-video iframe,
      .responsive-video video {
        position: absolute;
        width: 100%;
        height: 100%;
      }

    </style>

    <h3 class="text-center mt-30 text-white" style="text-shadow: 3px 3px 10px rgba(128, 0, 0, 1);">Urban Development Department Video Gallery</h3>
    <div class="main-container">

      <?php
        if($videos){
          foreach($videos as $vid){
      ?>
       <div class="video-container" data-url="<?= $vid['url']; ?>"></div>
      <?php
          }
        }else{
          for($i=0;$i<7;$i++){
      ?>
      
      <div class="video-container" data-url="https://www.youtube.com/watch?v=9C9lRcetrUI[[&t=5s"></div>

      <?php
          }
        }
      ?>
    

    </div>


    <div >
        <img src="assets/images/style-images/aronai_pattern-removebg-preview.png" height="60px" width="100%" alt="">
    </div>      

  </main>


 

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