      <?php include 'include/header.php'; ?>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-lg-9">

              <!--
                <div class="text-center">
                  <p><img src="images/paradise2a.png"></img></p>
                </div>
    -->

              
              <div class="card mb-3" style="min-height: 500px;">

                  <div class="card-body">
                    <h3 class="card-title mb-2">ThoughtFlow Builder <span class="card-subtitle"></span></h3> 
                    <p><img src="images/paradise2a.png"></img></p>
                  </div>
                  <div class="card-footer">
                  <a href="m.php" class="btn btn-warning btn-sm">Use This ThoughtFlow</a>
                  <a href="m.php" class="btn btn-primary btn-sm">Change ThoughtFlow</a>  
                  <a href="lm1.php" class="btn btn-primary btn-sm">Back to Dashboard</a>

                  <!-- <a href="#" class="btn btn-primary btn-sm">View Full Screen    &nbsp;
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-external-link" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" /><path d="M11 13l9 -9" /><path d="M15 4h5v5" /></svg>

                  </a>                  
                  <a href="#" class="btn btn-warning btn-sm">Change Data Set</a> -->
                  </div>

                </div>
              


                







              







              </div>
              
              
              <div class="col-lg-3">



              <div class="card mb-3">
                  <!--
                  <div class="card-header">
                    <h3 class="card-title">Card title <span class="card-subtitle">Subtitle</span></h3>
                  </div>
    -->

                  <div class="card-body">

                    <h3 class="card-title">Builder <span class="card-subtitle pull-right">Apps & ThoughtFlows</span></h3>

                    <p class="text-warning"><b>Note: Using current location and data set.</b></p>
                    <p>Your Application or ThoughtFlow will use the currently selected location and data set when run, 
                      unless you change it in settings.</p>

                  </div>

                  <div class="card-footer bg-cyan-lt">
                    <a href="m.php" class="btn btn-warning btn-sm">Use This ThoughtFlow</a>  
                    <a href="m.php" class="btn btn-primary btn-sm">Change ThoughtFlow</a>  
                    <!--
                    <a href="lm2.php" class="btn btn-primary btn-sm mb-1">Build ThoughtFlow</a>  
                    <a href="m.php" class="btn btn-primary btn-sm mb-1">Build Application</a> -->
                    <a href="m.php" class="btn btn-primary btn-sm mb-1 pull-right">Settings</a>
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
                      <li class="step-item active">Select Application</li>
                      <li class="step-item">Select Recipes &amp; Models</li>
                      <li class="step-item">Select Parameters</li>
                      <li class="step-item">View Result</li>
                    </ul>
                  </div>
                </div>

                <!--
              <div class="card mb-3">
                  
                  <div class="card-header bg-cyan">
                    <h3 class="card-title">View Dataset <span class="card-subtitle">Application</span></h3>
                  </div>
                  
                  <div class="card-body">
                    <h3 class="card-title mb-2">Select Parameters</h3>
                    
                    <a href="#" class="btn btn-ghost-success btn-sm">None (Defaults)</a> <br>
                    <a href="#" class="btn btn-ghost-primary btn-sm">Adjust the Gain</a><br>
                    <a href="#" class="btn btn-ghost-primary btn-sm">Relative Amplitude Variation</a><br>
                    <a href="#" class="btn btn-ghost-primary btn-sm">Amplitude Scale Change</a>
                    <p class="mt-1"><small>Note: Context sensitive menu. Application runs with new parameters when selected.</small></p>

                  </div>

                  <div class="card-footer">
                    <a href="#" class="btn btn-primary btn-sm mb-1">App Builder</a>  
                    <a href="#" class="btn btn-primary btn-sm mb-1">Advanced Options</a>
                    <a href="#" class="btn btn-primary btn-sm mb-1">View History</a>
                    <a href="#" class="btn btn-warning btn-sm mb-1">Change Application</a>
                  </div>                  


                </div>
    -->
                
    <!-- AI Prompt -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
    <fieldset class="form-fieldset">  
      <div class="mb-3">
        <label class="form-label required">AI Prompt</label>
        <textarea class="form-control" name="example-textarea" placeholder="Please type or speak your command." rows="4" style="font-size: 20px;"></textarea>
      </div>
      <a href="#" class="btn btn-primary btn-sm mb-1">Compute</a>
      <a href="#" class="btn !btn-light btn-sm mb-1">&nbsp;
        <i class="ti ti-microphone"></i>&nbsp;
      </a>
    </fieldset>                  


                

              </div>


              
            </div>
          </div>
        </div>
      <?php include 'include/footer.php'; ?>