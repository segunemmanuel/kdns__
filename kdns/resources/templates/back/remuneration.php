
<div class="container-fluid mt--6">
      <div class="row">
      
        <div class="col-xl-8 order-xl-2">
          <div class="card rem">
         
            <div class="card-body">

            <?php if(isset($_POST['submit'])){
              insert_gigs_basic_infos();
          }
              ?>




              <form action="" method="post">

              <?php if(isset($_POST['submit1'])){
           insert_gigs_basic_info();
          }
              ?>
<?php
echo $_SESSION['role'];

?>

                <div class="pl-lg-4">
                <label class="form-control-label" for="input-username">Salary</label>

                  <div class="row">

                    <div class="col-lg-6">

                      <div class="form-group">
                        <input type="number" id="input-username" name="min" class="form-control" placeholder="Mininium">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input type="number" id="input-email" name="max" class="form-control" placeholder="Maximium">
                      </div>
                    </div>
                  </div>
                
                </div>
                <div class="row">
<div class="col-lg-6 final">
<button type="button" class="btn btn-default">Cancel</button>
<button  type="submit"  name="submit1" class="btn btn-default">Submit</button>
</div>
</div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-xl-4 order-xl-1">
          <div class="card card-nav" style="padding: 20px;">
      
      <ul class="navbar-nav" style="padding: 20px;">
            <li class="nav-item">
              <a class="nav-link active" href="index.php?basic">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Basic data</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?gig2">
                <i class="ni ni-planet text-orange"></i>
                
                <span class="nav-link-text">Remenuration</span>
              </a>
            </li>
  
           
          </ul>


              </div>
            </div>
          </div>
        </div>
