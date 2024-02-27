<?php include 'include/header.php'; ?>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-lg-4">

                                                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                      <div class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md icon-tabler icon-tabler-map-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11 18l-2 -1l-6 3v-13l6 -3l6 3l6 -3v7.5" /><path d="M9 4v13" /><path d="M15 7v5" /><path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M20.2 20.2l1.8 1.8" /></svg>
                      </div>
                      <div>
                        <small class="text-secondary">Location</small>
                        <h3 class="lh-1">Gulf of Mexico</h3>
                      </div>
                    </div>
                    <p><img src="images/Gulf-of-Mexico-Map.png"></img></p>

                  </div>
<!--
                  <div class="ribbon bg-green">
                  Selected
                  </div>
    -->
                  <div class="card-footer">
                    <a href="map.php" class="btn btn-primary btn-sm">View Map</a>
                    <a href="map.php" class="btn btn-warning btn-sm">Change Location</a>
                  </div>
                </div>


                <div class="card mb-3">
                  <!--
                  <div class="card-header">
                    <h3 class="card-title">Card title <span class="card-subtitle">Subtitle</span></h3>
                  </div>
                  -->
                  <div class="card-body">
                    <h3 class="card-title mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.657 18c-2.572 0 -4.657 -2.007 -4.657 -4.483c0 -2.475 2.085 -4.482 4.657 -4.482c.393 -1.762 1.794 -3.2 3.675 -3.773c1.88 -.572 3.956 -.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99c1.913 0 3.464 1.56 3.464 3.486c0 1.927 -1.551 3.487 -3.465 3.487h-11.878" /></svg> 
                      Cloud Processing 
                       <!-- <span class="card-subtitle">Processing in Cloud</span> -->
                    <span class="status status-success pull-right">
                      <span class="status-dot status-dot-animated"></span>
                        Processing Complete
                      </span>
                    </h3>

                    <div class="progress mt-3 mb-2">
  <div class="progress-bar" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-label="100% Complete">
    <span class="visually-hidden">100% Complete</span>
  </div>
</div>

                    <a href="d3a.php" class="btn btn-success btn-sm mt-2">Show Results</a>  
                  </div>
                </div>  

                <div class="card mb-3">
                  <!-- 
                  <div class="card-header">
                    <h3 class="card-title">View Dataset <span class="card-subtitle">Application</span></h3>
                  </div>
                  -->
                  <div class="card-body">
                    <h3 class="card-title mb-2">Select Parameters <span class="card-subtitle pull-right">App: View Dataset</span></h3>
                    
                    <a href="d1.php" class="btn btn-ghost-primary btn-sm">Defaults</a> <br>
                    <a href="d2.php" class="btn btn-ghost-primary btn-sm">Adjust the Gain</a><br>
                    <a href="d2.php" class="btn btn-ghost-primary btn-sm">Relative Amplitude Variation</a><br>
                    <a href="d4.php" class="btn btn-ghost-success btn-sm">Amplitude Scale Change</a> <small>(Complete)</small>
                    <p class="mt-1"><small>Note: View Dataset  Application runs with new parameters when selected.</small></p>

                  </div>

                  <div class="card-footer">
                    <a href="#" class="btn btn-primary btn-sm">App Builder</a>  
                    <a href="#" class="btn btn-primary btn-sm">Advanced Options</a>
                    <a href="#" class="btn btn-primary btn-sm">View History</a>
                    <a href="#" class="btn btn-warning btn-sm">Change Application</a>
                  </div>                  
                </div>                


                <div class="card mb-3">
                  <!--
                  <div class="card-header">
                    <h3 class="card-title">Card title <span class="card-subtitle">Subtitle</span></h3>
                  </div>
                -->

                  <div class="card-body">
                    <ul class="steps steps-counter steps-vertical">
                      <li class="step-item">Select Location: Gulf of Mexico</li>
                      <li class="step-item">Select Data Set: Stacked Seisimic Volume</li>
                      <li class="step-item">Select Application: View Dataset</li>
                      <li class="step-item">Select Recipes &amp; Models: N/A</li>
                      <li class="step-item">Select Parameters: Amplitude Scale Change</li>
                      <li class="step-item active">View Result</li>
                    </ul>
                  </div>
                </div>


              </div>
              
              
              <div class="col-lg-8">





              <div class="card mb-3" style="min-height: 500px;">
                  <!--
                  <div class="card-header">
                    <h3 class="card-title">Card title <span class="card-subtitle">Subtitle</span></h3>
                  </div>
                  -->
                  <div class="card-body">
                    <h3 class="card-title mb-2">Stacked Seismic Volume <span class="card-subtitle">Gulf of Mexico</span></h3> 
                    <p><img src="images/seismic-image-d1.png"></img></p>
                  </div>
                  <div class="card-footer">
                  <a href="#" class="btn btn-primary btn-sm">View Larger Version</a>
                  <a href="#" class="btn btn-primary btn-sm">View Full Screen    &nbsp;
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-external-link" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" /><path d="M11 13l9 -9" /><path d="M15 4h5v5" /></svg>

                  </a>
                  <a href="#" class="btn btn-warning btn-sm">Change Data Set</a>
                  </div>

                </div>
                
                


                

              </div>


              
            </div>
          </div>
        </div>
      <?php include 'include/footer.php'; ?>