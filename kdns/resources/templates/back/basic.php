<h4>
      <?php display_message(); ?>
      </h4>

      
<div class="container-fluid mt--6">
      <div class="row">
    
        <div class="col-xl-8 order-xl-2">
          <div class="card">
            <div class="card-body">


              <form method="post" action="index.php?gig2">

          
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Role</label>
                        <input type="text" id="input-username" name="role" class="form-control" placeholder="Role" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Company</label>
                        <input type="text" id="input-email" name="company" class="form-control" placeholder="Company" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Location</label>
                        <input type="text" id="input-first-name" name="country" class="form-control" placeholder="Country" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Address</label>
                        <input type="text" id="input-last-name" name="state" class="form-control" placeholder="State/Region" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                        <input id="input-address" class="form-control" name="address" placeholder="Address" required>
                      </div>
                    </div>
                    </div>
                </div>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Add tags</label>
                        <input id="input-address" name="tags" class="form-control" placeholder="Add tags" required>
                      </div>
                    </div>
                  </div>
                
                </div>

<div class="row">
<div class="col-lg-6 final">
<button type="button" class="btn btn-default">Cancel</button>
<button  type="submit"  name="submit" class="btn btn-default">Submit</button>
</div>
</div>
                
              </form>
            </div>
          </div>
        </div>







        <div class="col-xl-4 order-xl-1">
          <div class="card card-nav rem" >
  
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
