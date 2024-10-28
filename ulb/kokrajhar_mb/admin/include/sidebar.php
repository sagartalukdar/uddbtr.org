<aside id="layout-menu" class="layout-menu menu-vertical menu " style="background-color: hsl(289, 28%, 92%);">

  
  <div class="app-brand demo ">
    <a href="index" class="app-brand-link">
      <span class="app-brand-logo demo">
    <img src="../../../assets/images/logo/logo.png" style="max-width: 70px">
    </a>
  </div>

  <div class="menu-inner-shadow"></div>  

  <style>
    .menu-item a{
      color:#25aee3 !important;
    }
  </style>
  
  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-header small text-uppercase"><span class="Dashboard" data-i18n="Dashboard"></span></li>
    <li class="menu-item">
      <a href="index" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
      <!--   <span class="badge badge-center rounded-pill bg-danger ms-auto">5</span> -->
      </a>
      
    </li>
    <?php 
    if ($userType=="ADMIN") {
      
    ?>
        <li class="menu-item">
            <a href="../../../admin/index" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div class="text-truncate" data-i18n="Go to Main Dashboard">Go to Main Dashboard</div>
            <!--   <span class="badge badge-center rounded-pill bg-danger ms-auto">5</span> -->
            </a>
            
          </li>
    <?php }?>
    <!-- Layouts -->
    

    


    <!-- Apps & Pages -->
    <?php 
    if ($userType=="EO" || $userType=="ADMIN") {
     

    ?>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="User Management">User Management</span>
    </li>
    
    
        <!-- Academy menu end -->
    
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div class="text-truncate" data-i18n="Users">Users</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="manage-users" class="menu-link">
            <div class="text-truncate" data-i18n="Manage Users">Manage Users</div>
          </a>
        </li>
        
      </ul>
    </li>
    <?php }?>

    <!-- Components -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text" data-i18n="Schemes and Notices Management">Schemes and Notices Management</span></li>
    <!-- Cards -->
    <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div class="text-truncate" data-i18n=" Schemes"> Schemes </div>
        
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="manage-schemes" class="menu-link">
            <div class="text-truncate" data-i18n="Manage Schemes">Manage Schemes</div>
          </a>
        </li>
        <!--<li class="menu-item">-->
        <!--  <a href="add-notice" class="menu-link">-->
        <!--    <div class="text-truncate" data-i18n="Manage Notices">Manage Notices </div>-->
        <!--  </a>-->
        <!--</li>-->

       
        <?php if ($userType == 'EO' || $userType == 'ADMIN') { ?>
        <li class="menu-item">
            <a href="verify-scheme-details" class="menu-link">
                <div class="text-truncate" data-i18n="Verify Schemes Details">Verify Schemes Details</div>
            </a>
        </li>
        <li class="menu-item">
          <a href="manage-scheme-details" class="menu-link">
            <div class="text-truncate" data-i18n="Manage Scheme Details">Manage Scheme Details</div>
          </a>
        </li>
    <?php } elseif ($userType == 'CP') { ?>
        <li class="menu-item">
            <a href="manage-scheme-details" class="menu-link">
                <div class="text-truncate" data-i18n="Add/View Schemes Details">Add/View Schemes Details</div>
            </a>
        </li>
    <?php } ?>
         <li class="menu-item">
          <a href="view-schemes" class="menu-link">
            <div class="text-truncate" data-i18n="View Schemes">View Schemes</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-collection"></i>       
        <div class="text-truncate" data-i18n="Notices / Updates">Notices / Updates</div>        
      </a>
         <ul class="menu-sub">
            
            <li class="menu-item">
              <a href="add-recent-updates" class="menu-link">
                <div class="text-truncate" data-i18n="Manage Updates">Manage Updates </div>
              </a>
            </li>
            
          </ul>
    </li>
    <!-- User interface -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="Website Management">Website Management</span>
    </li>  
    <!-- Academy menu end -->
    
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons fa-solid fa-house"></i>
        <div class="text-truncate" data-i18n="Home">Home</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="add-aboutUs" class="menu-link">
            <div class="text-truncate" data-i18n="About Us">About Us</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="add-home-slider" class="menu-link">
            <div class="text-truncate" data-i18n="Home page Slider">Home page Slider</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="add-chair-person-message" class="menu-link">
            <div class="text-truncate" data-i18n="Chair Person's Message">Chair Person's Message</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="add-home-sliderCard" class="menu-link">
            <div class="text-truncate" data-i18n="Home Sliding Cards">Home Sliding Cards</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="add-bottom-scrolling-image" class="menu-link">
            <div class="text-truncate" data-i18n="Bottom Slider Image">Bottom Slider Image</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="add-usefull-link" class="menu-link">
            <div class="text-truncate" data-i18n="Useful Links">Useful Links</div>
          </a>
        </li>

      </ul>
    </li>
    

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons fa-solid fa-circle-info" style="color: #4723b3;"></i>
        <div class="text-truncate" data-i18n="Objectives-Overview">Objectives-Overview</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="add-department-overview" class="menu-link">
            <div class="text-truncate" data-i18n="Overview">Overview</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="add-Objectives" class="menu-link">
            <div class="text-truncate" data-i18n="Objectives">Objectives</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="add-organization-info" class="menu-link">
            <div class="text-truncate" data-i18n="Organization info">Organization info</div>
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons fa-regular fa-newspaper" style="color: #7e1150;"></i>
        <div class="text-truncate" data-i18n="Media">Media</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="add-news-events" class="menu-link">
            <div class="text-truncate" data-i18n="News-Events">News-Events</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="add-gallery" class="menu-link">
            <div class="text-truncate" data-i18n="Gallery">Gallery</div>
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="add-contact-details" class="menu-link">
        <i class="menu-icon tf-icons fa-solid fa-id-card" style="color: #3d856d;"></i>
        <div class="text-truncate" data-i18n="Contact-details">Contact-details</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons fa-solid fa-chart-simple" style="color: #aa7c18;"></i>
        <div class="text-truncate" data-i18n="Others Management">Others Management</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="add-department-dignities" class="menu-link">            
            <div class="text-truncate" data-i18n="Department Dignities">Department Dignities</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="add-introduction" class="menu-link">
            <div class="text-truncate" data-i18n="Add introduction">Add introduction</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="add-history" class="menu-link">
            <div class="text-truncate" data-i18n="History">History</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="add-vision-goals" class="menu-link">
            <div class="text-truncate" data-i18n="Vision and Goals">Vision and Goals</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="add-population-info" class="menu-link">
            <div class="text-truncate" data-i18n="Population Information">Population Information</div>
          </a>
        </li>
      </ul>
    </li>  
    
  </ul>
  
  

</aside>