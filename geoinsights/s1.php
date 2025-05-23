      <?php include 'include/header.php'; ?>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-lg-9">



              <div class="card mb-3" style="min-height: 500px;">
                  <!--
                  <div class="card-header">
                    <h3 class="card-title">Card title <span class="card-subtitle">Subtitle</span></h3>
                  </div>
                  -->
                  <div class="card-body">
                    <h3 class="card-title mb-2">Stacked Seismic Volume <span class="card-subtitle">Channel and Fan</span></h3> 
                    <p><img src="images/crosssection1a.png"></img></p>
                  </div>
                  <div class="card-footer">
                  <a href="#" class="btn btn-primary btn-sm">Back to Dashboard</a>
                  
                  <a href="#" class="btn btn-primary btn-sm">View Full Screen    &nbsp;
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-external-link" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" /><path d="M11 13l9 -9" /><path d="M15 4h5v5" /></svg>

                  </a>                  
                  <a href="t.php" class="btn btn-success btn-sm">Well Log Cross Section</a>
                  <a href="#" class="btn btn-warning btn-sm">Change Data Set</a>
                  </div>

                </div>



              </div>
              
              
              <div class="col-lg-3">



              <div class="card mb-3">
              
                  <div class="card-header">
                    <h3 class="card-title">Fans &amp; Channels <span class="card-subtitle">MBEQ</span></h3>
                  </div>
              
              
              <div class="table-responsive">
  <table class="table table-vcenter">
    <thead>
      <tr>
        <th>Name</th>
        <th>MBEQ</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Miocene 1</td>
        <td class="text-secondary">
          52
        </td>
      </tr>

      <tr>
        <td>Miocene 2</td>
        <td class="text-secondary">
          110
        </td>
      </tr>            
    </tbody>
  </table>
</div>
<div class="card-footer">
                    Current Selection: &ge; 50 MBEQ
                  </div>
                  <div class="card-footer">
                    Current Prompt: Select 3 top producing well cross sections.
                  </div>       
                  <!--
                  <div class="card-footer">
                    <a href="t.php" class="btn btn-success btn-sm">Well Log Cross Section</a>
                  </div>       
    --> 
    <div class="card-footer">
  <a href="w.php" class="btn btn-success btn-sm mb-1">Go Back to Selected Data</a>
                  </div>                          
    </div>


                     

    <!-- AI Prompt -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
    <fieldset class="form-fieldset">  
      <div class="mb-3">
        <label class="form-label required">AI Prompt</label>
        <textarea class="form-control" name="example-textarea" placeholder="Please type or speak your command." rows="4" style="font-size: 20px;">Show me the middle Miocene producing sands.</textarea>
      </div>
      <a href="t.php" class="btn btn-info btn-sm mb-1">Compute</a>
      <a href="t.php" class="btn !btn-light btn-sm mb-1">&nbsp;
        <i class="ti ti-microphone"></i>&nbsp;
      </a>
    </fieldset>  
                
            


                

              </div>


              
            </div>
          </div>
        </div>
      <?php include 'include/footer.php'; ?>