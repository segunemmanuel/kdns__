

  <h4 class="text-center"><?php display_message(); ?></h4>

<div class="container-fluid mt--6">
      <div class="row justify-content-center">
      <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="border-0">
          
              <div class="row">
                <div class="col-lg-4 col-md-6">
            <h3>All gig</h3>
                    <div>
                      <!-- <i class="ni ni-active-40"></i> -->
                      <!-- <span>active-40</span> -->
                    </div>
                  </button>
                </div>


                <div class="col-lg-4 col-md-6">
                              <h3>My gigs</h3>

                    <div>
                      <!-- <i class="ni ni-active-40"></i> -->
                      <!-- <span>active-40</span> -->
                    </div>
                  </button>
                </div>



                <div class="col-lg-4 col-md-6">
                              <h3>Rejected gigs</h3>

                    <div>
                      <!-- <i class="ni ni-active-40"></i> -->
                      <!-- <span>active-40</span> -->
                    </div>
                  </button>
                </div>


              </div>
            </div>
          </div>

            <div class="row">
           <div class="col-md 2">
<div class="mb-3 input-group">
  <div class="input-group-prepend">
    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Freelance</button>
     </div>
</div>
</div>


<div class="col-md 2">
<div class="mb-2 input-group">
  <div class="input-group-prepend">
    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img class="img-responsive" src="../././public/assets/img/loc.svg">Keywords</button>
     </div>
</div>
  
</div>


<div class="col-md 2">
<div class="mb-2 input-group">
  <div class="input-group-prepend">
    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img class="img-responsive" src="../././public/assets/img/glo.svg">Location</button>
     </div>
</div>
</div>



<div class="col-md 2">
<div class="mb-2 input-group">
  <div class="input-group-prepend">
    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img class="img-responsive" src="../././public/assets/img/wol.svg">Remote friendly</button>
     </div>
</div>
</div>


<div class="col-md 2">
<div class="mb-2 input-group">
  <div class="input-group-prepend">
    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img class="img-responsive" src="../././public/assets/img/pal.svg">  
    Design</button>
     </div>
</div>
</div>



<div class="col-md 2">
<div class="mb-2 input-group">
  <div class="input-group-prepend">
    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img class="img-responsive" src="../././public/assets/img/brief.svg">  
    Contract</button>
     </div>
</div>
</div>

</div>


            <!-- Light table -->
            <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th> </th>
                <th>Role</th>
                <th>Company</th>
                <th>Data</th>
                <th>Salary(&#36;)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           <?php get_jobs();?>
        </tbody>
        <tfoot>
            <tr>
            <th> </th>
                <th>Role</th>
                <th>Company</th>
                <th>Data</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
            </div>
            <!-- Card footer -->
</div>
            
          </div>
        </div>
      </div>
      <!-- Footer -->

    </div>