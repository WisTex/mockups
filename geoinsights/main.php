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
                    <a href="#" class="btn btn-primary btn-sm">View Map</a>
                    <a href="#" class="btn btn-warning btn-sm">Change Location</a>
                  </div>
                </div>

                


                <div class="card mb-3">
                  <!--
                  <div class="card-header">
                    <h3 class="card-title">Card title <span class="card-subtitle">Subtitle</span></h3>
                  </div>
                  -->
                  <div class="card-body">
                    <h3 class="card-title mb-2">Progress <!-- <span class="card-subtitle">Processing in Cloud</span> -->
                    <span class="status status-cyan pull-right">
                      <span class="status-dot status-dot-animated"></span>
                        Processing in Cloud
                      </span>
                    </h3>
                    <div class="progress progress-lg">
                      <div class="progress-bar progress-bar-indeterminate"></div>
                    </div>
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
                    
                    <a href="#" class="btn btn-ghost-success btn-sm">None (Defaults)</a> <br>
                    <a href="#" class="btn btn-ghost-primary btn-sm">Adjust the Gain</a><br>
                    <a href="#" class="btn btn-ghost-primary btn-sm">Relative Amplitude Variation</a><br>
                    <a href="#" class="btn btn-ghost-primary btn-sm">Amplitude Scale Change</a>
                    <p class="mt-1"><small>Note: Context sensitive menu. Application runs with new parameters when selected.</small></p>

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
                      <li class="step-item">Select Data Set: Stacked Seismic Volume</li>
                      <li class="step-item">Select Application: View Dataset</li>
                      <li class="step-item active">Select Parameters: Default</li>
                      <li class="step-item">View Result</li>
                    </ul>
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
                      <li class="step-item">Select Data Set: Stacked Seismic Volume</li>
                      <li class="step-item">Select Application: View Dataset</li>
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
                    <p><img src="images/seismic-image-1.png"></img></p>
                  </div>
                  <div class="card-footer">
                  <a href="#" class="btn btn-primary btn-sm">View Full Screen</a>
                  <a href="#" class="btn btn-warning btn-sm">Change Data Set</a>
                  </div>

                </div>
                
                


                

              </div>


              
            </div>
          </div>
        </div>
      <?php include 'include/footer.php'; ?>