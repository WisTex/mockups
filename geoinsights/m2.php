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
                        
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md icon-tabler icon-tabler-app-window" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M6 8h.01" /><path d="M9 8h.01" /></svg>
                      </div>
                      <div>
                        <small class="text-secondary">App Builder</small>
                        <h3 class="lh-1">Create New App</h3>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label required">Name</label>
                      <input type="text" class="form-control" autocomplete="off"/>
                    </div>
                    <div class="mb-3">
                              <div class="form-label required">Data</div>
                              <select class="form-select" >
                                <option value="1">Current Data Set</option>
                                <option value="2">Stacked Seismic Volume</option>
                                <option value="3">Multiple Azimuth Gathers</option>
                              </select>
                            </div>                    
                    


                    
                    
                    
                    
                  </div>
<!--
                  <div class="ribbon bg-green">
                  Selected
                  </div>
    -->
    <!--
                  <div class="card-footer">
                    <a href="map.php" class="btn btn-primary btn-sm">View Map</a>
                    
                  </div>
    -->
                </div>

                <div class="card" style="min-height: 510px;">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
      <li class="nav-item">
        <a href="#tabs-home-ex2" class="nav-link active" data-bs-toggle="tab">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-app-window me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M6 8h.01" /><path d="M9 8h.01" />
      </svg> Applets</a>
      </li>
      <li class="nav-item">
        <a href="#tabs-profile-ex2" class="nav-link" data-bs-toggle="tab">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-analyze me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 11a8.1 8.1 0 0 0 -6.986 -6.918a8.095 8.095 0 0 0 -8.019 3.918" /><path d="M4 13a8.1 8.1 0 0 0 15 3" /><path d="M19 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M5 8m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>  
          Models &amp; Recipes</a>
      </li>
      <li class="nav-item">
        <a href="#tabs-thought-ex2" class="nav-link" data-bs-toggle="tab">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bulb me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7" /><path d="M9 16a5 5 0 1 1 6 0a3.5 3.5 0 0 0 -1 3a2 2 0 0 1 -4 0a3.5 3.5 0 0 0 -1 -3" /><path d="M9.7 17l4.6 0" /></svg>  
         ThoughtFlows</a>
      </li>      
      <li class="nav-item ms-auto">
        <a href="#tabs-settings-ex2" class="nav-link" title="Settings" data-bs-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
            <circle cx="12" cy="12" r="3" />
          </svg>
        </a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content">
      <div class="tab-pane active show" id="tabs-home-ex2">
        <h4>Applets</h4>
        <div>
          <p>Some of the apps include:</p>

          <style>
            .dragItem {
              padding: 15px 45px;
            }
            
            #dropzone {
              padding: 20px;
              border: 1px solid #eee;
              background: #f9f9f9;
              min-height: 640px;
              margin-top: 20px;
              z-index: 0;
              border-radius: 10px;
            }

            #dropzone.active {
              outline: 1px solid red;
            }

            #dropzone.hover {
              outline: 1px solid green;
            }

            .drop-item {
              cursor: pointer;
              margin-bottom: 10px;
              background-color: rgb(255, 255, 255);
              padding: 35px 20px;
              border-radius: 3px;
              border: 1px solid rgb(204, 204, 204);
              position: relative;
            }

            .drop-item .remove {
              position: absolute;
              top: 24px;
              right: 14px;
            }

            .drop-item .remove svg {
              margin: 0;
            }
          </style>

          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="drag"><a class="btn btn-default dragItem">PCA</a></p>
                <p class="drag"><a class="btn btn-default dragItem">SOM</a></p>
                <p class="drag"><a class="btn btn-default dragItem">Geobodies</a></p>
                <p class="drag"><a class="btn btn-default dragItem">Faults</a></p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="tab-pane" id="tabs-profile-ex2">
        <h4>Models &amp; Recipes</h4>
        <div>
        <p>Some of the recipes include:</p>

        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="drag"><a class="btn btn-default dragItem">Plio-Peleistocene</a></p>
              <p class="drag"><a class="btn btn-default dragItem">Shallow Mioscene</a></p>
              <p class="drag"><a class="btn btn-default dragItem">Middle Mioscene</a></p>
              <p class="drag"><a class="btn btn-default dragItem">Deep Mioscece</a></p>
              <p class="drag"><a class="btn btn-default dragItem">Wilcox</a></p>
            </div>
          </div>
        </div>

        </div>
      </div>
      <div class="tab-pane" id="tabs-thought-ex2">
        <h4>Thoughtflows</h4>
        <div>Not used in this demo. Tab might be deleted.</div>
      </div>      
      <div class="tab-pane" id="tabs-settings-ex2">
        <h4>Settings</h4>
        <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
      </div>
    </div>
  </div>
</div>
                







              








              </div>
              
              
              <div class="col-lg-8">





                <div class="card mb-3" style="min-height: 800px;">
                  <!--
                  <div class="card-header">
                    <h3 class="card-title">Card title <span class="card-subtitle">Subtitle</span></h3>
                  </div>
                  -->
                  <div class="card-body">
                    <h3 class="card-title mb-2">Application Builder <span class="card-subtitle">Canvas</span></h3> 
                    
                    <!-- dropzone goes here. -->
                    <div id="dropzone"></div>

                  </div>
                  <div class="card-footer">

                  <a href="n.php" class="btn btn-primary btn-sm">Save</a>
                  <a href="n.php" class="btn btn-info btn-sm">Save &amp; Run</a>
                  <a href="n.php" class="btn btn-danger btn-sm pull-right">Delete</a>
                  </div>

                </div>
                
                
                <script>
                  const appBuilderPlaceholderTxt = "Please drag an element from the left pane and drop it here.";

                  $('.drag').draggable({ 
                    appendTo: 'body',
                    helper: 'clone'
                  });

                  $('#dropzone').html(appBuilderPlaceholderTxt);
                  $('#dropzone').droppable({
                    activeClass: 'active',
                    hoverClass: 'hover',
                    accept: ":not(.ui-sortable-helper)", // Reject clones generated by sortable
                    drop: function (e, ui) {
                      const phPattern = new RegExp(appBuilderPlaceholderTxt);
                      if (phPattern.test($(this).html()))
                      {
                        $(this).html(($(this).html()).replace(phPattern, ""));
                      }                
                      var $el = $('<div class="drop-item"><details><summary>' + ui.draggable.text() + '</summary></details></div>');
                      $el.append($('<button type="button" class="btn btn-default btn-xs remove"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg></button>').click(function() { const appBuilder = $(this).parent().parent(); $(this).parent().detach(); if (appBuilder.html() == "") appBuilder.html(appBuilderPlaceholderTxt); }) );
                      $(this).append($el);
                    }
                  }).sortable({
                    items: '.drop-item',
                    sort: function() {
                      // gets added unintentionally by droppable interacting with sortable
                      // using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options
                      $(this).removeClass("active");
                    }
                  });
                </script>

                

              </div>


              
            </div>
          </div>
        </div>
      <?php include 'include/footer.php'; ?>