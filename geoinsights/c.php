<?php include 'include/header.php'; ?>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-lg-3">

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
                    <ul class="steps steps-counter steps-vertical">
                      <li class="step-item">Select Location: Gulf of Mexico</li>
                      <li class="step-item active">Select Data Set</li>
                      <li class="step-item">Select Application</li>
                      <li class="step-item">Select Recipes &amp; Models</li>
                      <li class="step-item">Select Parameters</li>
                      <li class="step-item">View Result</li>
                    </ul>
                  </div>
                </div>


              </div>
              
              
              <div class="col-lg-9">





                <div class="card mb-3" style="min-height: 800px;">
                  <!--
                  <div class="card-header">
                    <h3 class="card-title">Card title <span class="card-subtitle">Subtitle</span></h3>
                  </div>
                  -->
                  <div class="card-body">
                    <h3 class="card-title mb-2">Select Data Set <span class="card-subtitle"></span></h3> 

                    <p>Select a data set to continue. You can also choose to load the data in the Seismic Viewer App or create a new custom application.</p>

      <div class="container-xl">
        <div class="row row-deck row-cards">
          <div class="col-4">
            <div class="card">
            
              <div class="card-body" style="height: 10rem">
              <div class="card-status-top bg-info"></div>
                <h3 class="card-title mb-2">Stacked Seismic Volume <span class="card-subtitle pull-right">Data</span></h3> 
                <p>Geophysical Insights</p>
                
                <p>
                  <a href="d1.php" class="btn btn-primary btn-sm">Select</a>
                  <a href="d1.php" class="btn btn-primary btn-sm">Seismic Viewer</a>
                  <a href="m.php" class="btn btn-primary btn-sm">App Builder</a>
                </p>
            
              </div>
            </div>
          </div>
          <div class="col-4">
          <div class="card">
              <div class="card-body" style="height: 10rem">
              <div class="card-status-top bg-info"></div>
                <h3 class="card-title mb-2">Multiple Azimuth Gathers <span class="card-subtitle pull-right">Data</span></h3> 
                <p>Geophysical Insights</p>
                <p>
                  <a href="d1.php" class="btn btn-primary btn-sm">Select</a>
                  <a href="d1.php" class="btn btn-primary btn-sm">Seismic Viewer</a>
                  <a href="m.php" class="btn btn-primary btn-sm">App Builder</a>
                </p>
            
              </div>
            </div>
          </div>
<!--
          <div class="col-4">
            <div class="card">
              <div class="card-body" style="height: 10rem"></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <div class="card-body" style="height: 10rem"></div>
            </div>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-body" style="height: 10rem"></div>
            </div>
          </div>
-->
        </div>
      </div>




<!--
                    <div style="background-color:#ddd; width:95%; position:absolute; left:0; top:60px; bottom:20px; right: 0; font-size:1.5rem; color:#333; text-align:center; margin-left: auto; margin-right: auto;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" style="width:25%;height:25%;margin-top:125px;color:#333;"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8h.01" /><path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" /><path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" /></svg>
                        <p>Select Data Set</p>
                    </div>
-->
                  </div>
                  <div class="card-footer">
                  <a href="d1.php" class="btn btn-primary btn-sm">Import Data Set</a>
                  <!--
                  <a href="d1.php" class="btn btn-primary btn-sm">Multiple Azimuth Gathers</a>
-->
                  </div>

                </div>
                
                


                

              </div>


              
            </div>
          </div>
        </div>
      <?php include 'include/footer.php'; ?>