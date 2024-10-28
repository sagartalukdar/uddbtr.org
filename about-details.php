<?php include("include/head.php");
include('classes/Crud.php');
$crud=new Crud();

$bottomScroll=$crud->Read("bottom_scrolling_imges","1 order by `id` desc");

$objectives=$crud->Read("objectives","1 order by `id` desc");
$chd=$crud->Read("chd_message","1 order by `id` desc");


if(isset($_GET['s'])){
    $s=$_GET['s'];

    if($s=='aboutUs'){
        $aboutUs=$crud->Read("about_us","1 order by `id` desc");
    }
    if($s=='chdMessage'){
        $chdMessage=$crud->Read("chd_message","1 order by `id` desc");
    }
}else {
    header('Location: index.php');
    exit(); // It is a good practice to call exit after a header redirection
}
?>
<body>
   
    <?php include("include/header.php");?>
    <main>
        <section class="breadcrumbs-area" style="background-color:none;">
                
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                    <?php if($s=="chdMessage"){
                        echo "CHD Message";
                    } else if($s=="aboutUs"){
                        echo "About US";
                    } else if($s=="ourObjective"){
                        echo "UDD Objective";
                    }
                    else if($s=="OOD"){
                        echo "Department Overview ";
                    }
                    else if($s=="History"){
                        echo "Department History";
                    }
                    else if($s=="btrAssam"){
                        echo "BTR, Assam";
                    }
                    
                    
                    ?>
                </h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single active">
                            
                            <?php if($s=="chdMessage"){
                                echo "CHD Message";
                            } else if($s=="aboutUs"){
                                echo "About US";
                            } else if($s=="ourObjective"){
                                echo "Urban Development Department Objective";
                            }
                            else if($s=="OOD"){
                                echo "Overview Of the Department";
                            }
                            else if($s=="History"){
                                echo "History of Urban Development Department";
                            }
                            else if($s=="btrAssam"){
                                echo "BTR, Assam";
                            }
                            
                            
                            ?>  
                            </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Destination area S t a r t -->
        <section class="tour-details-section section-padding2" style="padding-top: 30px;">
            <div class="tour-details-area">

               
                <div class="tour-details-container">
                    <div class="container">

                        <!-- Details Heading -->
                        <div class=" d-flex justify-content-center">
                            <div class="d-flex flex-column">
                                <h4 class="title">
                                    <?php if($s=="chdMessage"){
                                        echo "Message from Council Head of Department";
                                    } else if($s=="aboutUs"){
                                        echo "About US";
                                    } else if($s=="ourObjective"){
                                        echo "Urban Development Department Objective";
                                    }
                                    else if($s=="OOD"){
                                        echo "Overview Of the Department";
                                    }
                                    else if($s=="History"){
                                        echo "History of Urban Development Department";
                                    }
                                    else if($s=="btrAssam"){
                                        echo "BTR, Assam";
                                    }
                                    
                                    ?>
                                </h4>
                            
                            </div>
                        
                        </div>
                        <!-- / Details Heading -->
                     

                        <div class="mt-30">
                            <div class="row g-4" style="text-align: justify !important;">

                                <!-- left content -->
                                <?php if($s=="chdMessage" && $chdMessage){ ?>
                                     
                                    <div class="col-xl-4 col-lg-5">
                                        <div class="date-travel-card position-sticky top-0">
                                        
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div style="height: 270px; width: 270px; " >
                                                    <img style="height: 100%; width: 100%; object-fit: contain;" src="admin/<?= $chdMessage[0]['image']; ?>" alt="">
                                                </div>
                                                
                                            </div>

                                            <div class="border border-2 mt-10"></div>

                                            <h4 class="heading-card text-center" style="color: rgb(112, 183, 231) !important;">
                                                <?= $chdMessage[0]['name']; ?>
                                            </h4>
                                        
                                        </div>
                                    </div>

                                    <?php } else if($s=="aboutUs" && $aboutUs){ ?>

                                        <div class="col-xl-4 col-lg-5">
                                            <div class="date-travel-card position-sticky top-0">
                                            
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div style="height: 270px; width: 270px; " >
                                                        <img style="height: 100%; width: 100%; object-fit: contain;" src="admin/<?= $aboutUs[0]['image']; ?>" alt="">
                                                    </div>
                                                    
                                                </div>

                                                <div class="border border-2 mt-10"></div>

                                                <h4 class="heading-card text-center" style="color: rgb(112, 183, 231) !important;">
                                                    <?= $aboutUs[0]['head']; ?>
                                                </h4>
                                            
                                            </div>
                                        </div>

                                    <?php } else if($s=="ourObjective"){ ?>
                                       

                                       <div class="col-xl-4 col-lg-5">
                                        
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div style="height: 270px; width: 270px; " >
                                                       
                                                        <?php
                                                        if($chd){
                                                      ?>
                                                         <img style="max-width:250px;object-fit: cover; border-radius: 16px; box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;" src="admin/<?= $chd[0]['image']; ?>" alt="chd">                           
                                                      <?php
                                                        }else{
                                                      ?>
                                                        <img style="height: 100%; width: 100%; object-fit: contain;" src="admin/img/black.png" alt="chd">
                                                      <?php
                                                        }
                                                      ?>
                                                    </div>
                                                    
                                                </div>


                                                <h4 class="heading-card text-center mt-10" style="color:hwb(189.2 6.7% 6.3%) !important">
                                                    CHD : <?= $chd[0]['name']; ?>
                                                </h4>

                                                <!--<div class="wrapper">-->
                                                <!--    <a href="#0" >-->
                                                <!--        <span style="font-weight: bold; font-size: large;">Follow On :</span>-->
                                                <!--    </a>-->
                                                <!--    <a href="https://www.facebook.com/@uddbtr" target="_blank" class="icon facebook" >-->
                                                <!--      <div class="tooltip">Facebook</div>-->
                                                <!--      <span><i class="fab fa-facebook-f"></i></span>-->
                                                <!--    </a>-->
                                                <!--    <a href="https://x.com/uddbtr" target="_blank" class="icon twitter">-->
                                                <!--      <div class="tooltip">Twitter</div>-->
                                                <!--      <span><i class="fab fa-twitter"></i></span>-->
                                                <!--    </a>-->
                                                <!--    <a href="https://www.instagram.com/uddbtr/" target="_blank" class="icon instagram">-->
                                                <!--      <div class="tooltip">Instagram</div>-->
                                                <!--      <span><i class="fab fa-instagram"></i></span>-->
                                                <!--    </a>-->
                                                   
                                                <!--</div>-->
                                            
                                            
                                        </div>


                                   <?php }
                                    else if($s=="OOD"){
                                        echo "Overview Of the Department";
                                    }
                                    else if($s=="History"){
                                        echo "History of Urban Development Department";
                                    }
                                    else if($s=="btrAssam"){
                                        echo "BTR, Assam";
                                    }
                                    
                                ?>   


                                <!-- right content -->
                                <div class="col-xl-8 col-lg-7">
 
                                    <!-- About tour -->
                                    <div class="tour-details-content">

                                    <?php if($s=="chdMessage" && $chdMessage){ ?>

                                        <p class="pera t-justify">
                                            <?= $chdMessage[0]['message']; ?>
                                        </p>

                                   <?php }else if($s=="aboutUs" && $aboutUs){ ?>
                                    
                                    <p class="pera t-justify">
                                        <?= $aboutUs[0]['description']; ?>
                                    </p>

                                  <?php }  else if($s=="ourObjective") { ?>

                                         
                                            <!-- Single Listing -->
                                            <ul class="experience listing listing2 d-flex flex-column gap-15">

                                                <?php
                                                   if($objectives){
                                                    $c=0;
                                                    foreach($objectives as $obj){
                                                ?>

                                                <li class="single-list">
                                                    <i class="ri-shield-check-line"></i>
                                                    <p class="pera"><?= ++$c .'. '.$obj['objective']; ?></p>
                                                </li>    

                                                <?php        
                                                    }
                                                   }else{
                                                    for($u=1;$u<6;$u++){
                                                ?>
                                                <li class="single-list">
                                                    <i class="ri-shield-check-line"></i>
                                                    <p class="pera"><?= $u .'. '; ?>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet exercitationem ipsum ullam tempore!
                                                </p>
                                                </li>                        
                                                <?php
                                                    }
                                                   }
                                                ?>                                                      
                                     
                                            </ul>

                                    <?php  } else if($s=="OOD"){ ?>
                                        <p class="pera t-justify">
                                        The Urban Development Department (UDD) was established vide Govt. Notification No. AR. 17/2002/33 on the 9th of June 2002 after amalgamating the erstwhile departments of Municipal Administration and Town & Country Planning. There are four (4) Directorates/Boards under Urban Development Department viz. Directorate of Municipal Administration, Directorate of Town & Country Planning, Assam Urban Water & Sewage Board and Assam State Housing Board. These Offices look after the affairs of urban local bodies of the state other than Guwahati Municipal Corporation. The main function of the Urban Development Department is coordination between the urban local bodies of the state  and discahrging the statutory ressponsibilities under the provisions of the Assam Municipal Act 1956.The other functions include administering the provisions of the Assam Town & Country Planning Act 1958 by way of publishing the Master Plan of each and every urban area of the state. Schemes for development of the urban local bodies are sanctioned by the Department, sponsored to Government of India wherever necessary.    
                                        </p>
                                    <?php  } else if($s=="History"){
                                    ?>

                                        <p class="pera t-justify">
                                        Bodoland Territorial Region (BTR) is an autonomous region within the    state of Assam with the total population of 31,55,395 residing in 8970 sq km area. Like any other part of our great country, urbanization is posing problems in BTR as well.

                                        Currently urban population of BTR is 1,50,530 (04.77% of the total population) and IS still increasing. The Region currently has 09 (nine) Municipal Boards (Kokrajhar, Fakiragram, Gossaigaon, Basugaon, Kajalgaon, Bijni, Goreswar, Tangla and Udalguri) and 01(one) Development Authority (Kokrajhar) to provide qualitative municipal services in Urban Areas.

                                        The urban Development Department of Bodoland Territorial Council (BTC), in close partnership with ULBs is striving to find innovative and advanced technological solutions to urban problems of the region like; integrated urban transport, Sanitation, Solid Waste Management, Urban Infrastructure, Urban Housing, Urban Planning, Financial Sustainability of ULBs and general Urban Governance.

                                        The task is gigantic; but the Department find it to be achievable through the active community involvement and hard work and sincere efforts of all officers and employees of the department.

                                        Visitors of this website are humbly requested to give their valuable suggestions and feed back to assist the Department of Urban Development in its "pursuit of excellence." 
                                        </p>
                                  
                                    <?php  } else if($s=="btrAssam"){
                                    ?>

                                        <p class="pera t-justify">
                                        The Bodoland Territorial Council was constituted under the Sixth Schedule to the Constitution of India in the year 2003 after the signing of Memorandum of Settlement on 10th February 2003 between the Government of India, the Government of Assam and Bodo Liberation Tigers, to fulfill economic, educational and linguistic aspiration and the preservation of land-rights, socio-cultural and ethnic identity of the Bodos; and to speed up the infrastructure in BTC area.

                                        The Council aims at bringing about accelerated progress to one of the most backward region of the state of Assam with special focus on the development of the Bodo people in the field of education, preservation of land rights, linguistic aspiration, culture and its ethnic identity.

                                        Above all, the BTC has placed emphasis on development of the economic infrastructure of entire area for the uplift of the downtrodden people irrespective of caste, creed and religion living in this part of the country.

                                        Communities Residing In Btc Area Are
                                        Bodos , Assamese , Bengalis, Koch-Rajbongshis, Rabhas, Garos , Adivasis, Muslims and Nepalies, etc.

                                        Natural Endowment In The Council Area
                                        The Council area is endowed with snow-fed rivers flowing down from the Himalayas and joining the Brahmaputra and with beautiful hills, flora and fauna and attractive tourists’ spots. 1/3rd of the Council area is covered with forests and designated reserve forests and wildlife sanctuaries.

                                        The Council area is basically an agriculture belt where various crops are grown, among which the main one is paddy.
       
                                        </p>
                                  
                                    <?php  }

                                        ?>

                                
                                    </div>
                                    <!-- / About tour -->

                                </div> 

                                <div class="col-12">
                                      <!-- Tour Include Exclude -->
                                      <div class="tour-include-exclude radius-6" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <div class="includ-exclude-point">
                                            <h4 class="title text-blue">Main areas of focus:</h4>
                                            <ul class="expect-list">
                                                <li class="list">Urban planning including town planning.</li>
                                                <li class="list">Regulation of land-use and construction of buildings.</li>
                                                <li class="list">Planning for economic and social development.</li>
                                                <li class="list">Roads and bridges.</li>
                                                <li class="list">Water supply for domestic, industrial and commercial purposes.</li>
                                                <li class="list">Public health, sanitation conservancy and solid waste management.</li>
                                                <li class="list">Fire services.</li>
                                                <li class="list">Urban forestry, protection of the environment and promotion of ecological aspects.</li>
                                                <li class="list">Safeguarding the interests of weaker sections of society, including the handicapped and mentally retarded</li>
                                            </ul>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="includ-exclude-point">
                                            <h4 class="title text-blue">To Develop UDD:</h4>
                                            <ul class="expect-list">
                                                <li class="list">Slum improvement and upgradation.</li>
                                                <li class="list">Urban poverty alleviation.</li>
                                                <li class="list">Provision of urban amenities and facilities such as parks, gardens, playgrounds.</li>
                                                <li class="list">Promotion of cultural, educational and aesthetic aspects.</li>
                                                <li class="list">Burials and burial grounds; cremations, cremation grounds; and electric crematoriums.</li>
                                                <li class="list">Cattle pounds; prevention of cruelty to animals.</li>
                                                <li class="list">Vital statistics including registration of births and deaths.</li>
                                                <li class="list">Public amenities including street lighting, parking lots, bus stops and public conveniences.</li>
                                                <li class="list">Regulation of slaughter houses and tanneries.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- / Tour Include Exclude -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Destination -->
  
        <?php include('include/imgAndArnoimotion.php') ?>
                

        </main>

    <!-- Footer S t a r t -->
    <?php include("include/footer.php");?>

    <!-- Scroll Up  -->
    <!-- <div class="progressParent" id="back-top">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div> -->
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
    function visitULB() {
        var district = document.querySelector('.district-dropdown').value;
        var ulb = document.querySelector('.ulb-dropdown').value.replace(/ /g, '').toLowerCase(); // Convert to lowercase and remove spaces
        if (district && ulb) {
            var url = ulb + ".assamurban.in";
            window.location.href = "http://" + url;
        } else {
            alert("Please select both District and ULB.");
        }
    }
</script>
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
    document.getElementById('view-more-btn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default action of following the link
        window.location.href = this.getAttribute('href'); // Redirect to the link's href attribute
    });
 


<script>
    // Get all elements with the class name "clickSuggession"
    const clickServiceElements = document.getElementsByClassName("clickService");

    // Iterate over the elements and add an event listener to each
    for (let i = 0; i < clickServiceElements.length; i++) {
        clickServiceElements[i].addEventListener("click", function(event) {
            console.log("suggestion clicked");

            // Prevent the default action to stay on the current page
            event.preventDefault();
            
            // Access the parent <a> element
            const parentLink = event.target.closest('a');
            
            // Retrieve the data attribute from the parent <a> element
            const data = parentLink.getAttribute('data-citizenService');
            console.log("Data attribute value: ", data);

            // Set the value of the serviceSubject input field
            document.getElementById("serviceSubject").value = data;

            document.getElementById("serviceSubject").style.fontSize ="20px"

            // Set the text of the subject h4 element
            document.getElementById("subject").innerText = "Give Your " + data;
        });
    }
</script>

</body>

</html> 




