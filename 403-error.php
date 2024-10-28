<?php include("include/head.php");?>

<body>
    <?php include("include/preloader.php");?>
    <?php include("include/header.php");?>
    <main>


  <style>
    section {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #495057;
      margin: 0px;
      padding: 0px;
    }
    .error-container {
      max-width: 600px;
      margin: auto;
      text-align: center;
      padding: 50px 20px;
      /*background-color: #fff;*/
      /*box-shadow: 0 4px 6px rgba(0,0,0,0.1);*/
      border-radius: 8px;
    }
    .error-heading {
      font-size: 6rem;
      font-weight: bold;
      color: #dc3545;
    }
    .error-message {
      font-size: 1.5rem;
      margin-top: 20px;
      color: #6c757d;
    }
    .error-actions {
      margin-top: 30px;
    }
    .btn {
      padding: 12px 30px;
      font-size: 1.2rem;
      font-weight: bold;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .btn-secondary {
      background-color: #6c757d;
      border-color: #6c757d;
    }
    .btn-secondary:hover {
      background-color: #5a6268;
      border-color: #545b62;
    }
    .footer {
      margin-top: 50px;
      text-align: center;
      color: #6c757d;
    }
  </style>
</head>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="error-container">
          <div class="error-heading">403</div>
          <div class="error-message">Sorry, access denied ! :(</div>
          <div class="error-actions">
            <a href="index" class="btn btn-primary mt-30">Go to Home Page</a>
            
          </div>
        </div>
      </div>
    </div>
    <!--<div class="row">-->
    <!--  <div class="col-md-12 footer">-->
    <!--    &copy; 2024 uddbtr.org All rights reserved.-->
    <!--  </div>-->
    <!--</div>-->
  </div>
</section>
<?php include("include/footer.php");?>
    </main>
</body>
</html>
