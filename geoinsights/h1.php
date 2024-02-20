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
                    <h3 class="card-title mb-2">Facies Models <span class="card-subtitle">Gulf of Mexico</span></h3> 
                    <style>
                        .map {
                            display: inline-block;
                            margin: 1em auto;
                            position: relative;
                            border: 1px solid grey;
                        }

                        .map img {
                            max-width: 100%;
                            display: block;
                        }

                        .map svg {
                            color: #c22f25;
                            width: 32px;
                            height: 32px;
                        }

                        .map p {
                            color: #000;
                            font-size: .75rem;
                            font-weight: bold;
                            line-height: .85rem;
                            margin: 0;
                            padding: 4px 10px;
                            background-color: #f9f9f9;
                            border: 1px solid #000;
                            border-radius: 15px;
                        }

                        .rpin {
                            position: absolute;
                            display: block;
                            height: 5%;
                        }

                        .rpin:hover {
                            cursor: pointer;
                        }

                        .code-som {
                            bottom: 55.9282%;
                            left: 70.5994%;
                        }

                        .code-fault {
                            bottom: 40.858%;
                            left: 35.716%;
                        }

                        .code-facies {
                            bottom: 55.2392%;
                            left: 49.4641%;
                        }

                        .code-product {
                            bottom: 37.9065%;
                            left: 52.2945%;
                        }
                    </style>
                    <div class="map"><img src="assets/img/Gulf-of-Mexico-Map-cropped-2.png">
                        <div class="rpin code-som" data-toggle="tooltip" data-placement="top" title="2 results found">
                            <p>Channel</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor" /></svg>
                        </div>
                        <div class="rpin code-fault" data-toggle="tooltip" data-placement="top" title="4 results found">
                            <p>Channel</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor" /></svg>
                        </div>
                        <div class="rpin code-facies" data-toggle="tooltip" data-placement="top" title="1 results found">
                            <p>Sand Bar</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor" /></svg>
                        </div>
                        <div class="rpin code-product" data-toggle="tooltip" data-placement="top" title="6 results found">
                            <p>Deep Water Fan</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor" /></svg>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function(){
                            $('[data-toggle="tooltip"]').tooltip(); 
                        });
                    </script>                   
                  </div>
                  <div class="card-footer">
                  <a href="a.php" class="btn btn-primary btn-sm">Back to Dashboard</a>
                  <a href="h1.php" class="btn btn-primary btn-sm">View Full Screen    &nbsp;
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-external-link" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" /><path d="M11 13l9 -9" /><path d="M15 4h5v5" /></svg>

                  </a>                  
                  <a href="h.php" class="btn btn-warning btn-sm">Change Model</a>
                  <a href="c.php" class="btn btn-warning btn-sm">Change Data Set</a>
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
        <td>Channel 1</td>
        <td class="text-secondary">
          52
        </td>
      </tr>
      <tr>
        <td>Deep Water Fan</td>
        <td class="text-secondary">
          2052
        </td>
      </tr>      
      <tr>
        <td>Channel 4</td>
        <td class="text-secondary">
          189
        </td>
      </tr>          
      <tr>
        <td>Sand Bar</td>
        <td class="text-secondary">
          189
        </td>
      </tr>                  
    </tbody>
  </table>
</div>
<div class="card-footer">
                    Current Selection: &ge; 50 MBEQ
                  </div>

    </div>


              <div class="card mb-3">
                  <!-- 
                  <div class="card-header">
                    <h3 class="card-title">View Dataset <span class="card-subtitle">Application</span></h3>
                  </div>
                  -->
                  <div class="card-body">
                    <h3 class="card-title mb-2">Select Model</h3>
                    
                    <a href="h1.php" class="btn btn-ghost-primary btn-sm">SOM Recipes</a> <br>
                    <a href="h1.php" class="btn btn-ghost-primary btn-sm">Fault Models</a><br>
                    <a href="h1.php" class="btn btn-ghost-success btn-sm">Facies Models</a><br>
                    <a href="h1.php" class="btn btn-ghost-primary btn-sm">Production Profile Models</a>
                    <p class="mt-1"><small>Note: Application runs with new models when selected.</small></p>

                  </div>

                  <div class="card-footer">
                    <a href="g.php" class="btn btn-primary btn-sm mb-1">App Builder</a>  
                    <a href="#" class="btn btn-primary btn-sm mb-1">Advanced Options</a>
                    <a href="#" class="btn btn-primary btn-sm mb-1">View History</a>
                    <a href="h.php" class="btn btn-warning btn-sm mb-1">Change Model</a>
                    <a href="c.php" class="btn btn-warning btn-sm mb-1">Change Application</a>
                  </div>                  


                </div>

    <!-- AI Prompt -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
    <fieldset class="form-fieldset">  
      <div class="mb-3">
        <label class="form-label required">AI Prompt</label>
        <textarea class="form-control" name="example-textarea" placeholder="Please type or speak your command." rows="6"></textarea>
      </div>
      <a href="#" class="btn btn-primary btn-sm mb-1">Compute</a>
      <a href="#" class="btn !btn-light btn-sm mb-1">&nbsp;
        <i class="ti ti-microphone"></i>&nbsp;
      </a>
    </fieldset>  


              
            </div>
          </div>
        </div>
      <?php include 'include/footer.php'; ?>