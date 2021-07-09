<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT. DS . "header.php");?>

<body>
  <!-- Sidenav -->
<?php include(TEMPLATE_FRONT. DS . "side_nav.php");?>
  
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->

<?php include(TEMPLATE_FRONT. DS . "top_nav.php");?>


    <!-- Header -->
    <!-- Header -->
    <div class="pb-6 header bg-primary">
      <div class="container-fluid">
        <div class="header-body">
          <div class="py-4 row align-items-center">
            <div class="col-lg-6 col-7">
              <h6 class="mb-0 text-white h2 d-inline-block gig">Gigs</h6>
            </div>
            <div class="text-right col-lg-6 col-5 new-gig">
              <a href="index.php?basic" class="btn btn-sm btn-neutral">New gig <span>+</span></a>
            </div>
          </div>
          <!-- Card stats -->
          
        </div>
      </div>
    </div>
    <!-- Page content -->

    <?php 

if($_SERVER['REQUEST_URI'] == "/kdns/public" ||  $_SERVER ['REQUEST_URI'] == "/kdns/public/index.php") {
 include(TEMPLATE_BACK. DS . "admin_content.php");
 }



 if(isset($_GET['gigs'])){
  include (TEMPLATE_BACK. "/gigs.php");
 
  }
 
  if(isset($_GET['new'])){
    include (TEMPLATE_BACK. "/basic.php");
   
    }
   

     
  if(isset($_GET['gig2'])){
    include (TEMPLATE_BACK. "/remuneration.php");
   
    }


    if(isset($_GET['basic'])){
      include (TEMPLATE_BACK. "/basic.php");
     
      }
     


 ?>

  </div>
  <!-- Argon Scripts -->
  <?php include(TEMPLATE_FRONT. DS . "footer.php");?>
