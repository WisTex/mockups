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
              padding: 15px 105px 15px 10.5px;
              background: linear-gradient(to right, #213856, #213856 2rem, #fff 1rem, #fff 100%);
              filter: drop-shadow(1px 2px 2px #bbb);
              border-color: #b5b5b5;
            }

            .dragItem:hover {
              background: linear-gradient(to right, #213856, #213856 2rem, #f5f8fc 1rem, #f5f8fc 100%);
            }

            .btn.dragItem .icon {
              margin: 0 15px 0 -4px;
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

            .drop-item, .drop-item-child {
              cursor: pointer;
              margin-bottom: 10px;
              background: linear-gradient(to right, #213856, #213856 4rem, rgb(255, 255, 255) 1rem, rgb(255, 255, 255) 100%);
              padding: 35px 20px;
              border-radius: 3px;
              position: relative;
              text-indent: 8%;
              font-size: 1rem;
              filter: drop-shadow(2px 2px 2px #999);
            }

            .drop-item:hover, .drop-item-child:hover {
              /*filter: none;
              box-shadow: inset gray 0px 0px 30px -12px;*/
            }

            .drop-item-child {
              background: linear-gradient(to right, #3d5a80, #3d5a80 4rem, #f5f9ff 1rem, #f5f9ff 100%);
              left: 2%;
              width: 98%;
            }

            .drop-item .remove, .drop-item-child .remove {
              position: absolute;
              top: 30px;
              right: 18px;
            }

            .drop-item .remove svg, .drop-item-child .remove svg {
              margin: 0;
            }

            .drop-item-icon {
              margin: 0 0 5px 0;
            }

            .drop-item-icon svg {
              width: 30px;
              height: 100%;
              margin: 0 30px 0 -8.25%;
            }

            .drop-item-icon svg:nth-child(2) {
              width: 24px;
              height: 100%;
              margin: 0;
            }
          </style>

          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="drag"><a class="btn btn-default dragItem"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-app-window" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M6 8h.01" /><path d="M9 8h.01" /></svg>PCA</a></p>
                <p class="drag"><a class="btn btn-default dragItem"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-app-window" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M6 8h.01" /><path d="M9 8h.01" /></svg>SOM</a></p>
                <p class="drag"><a class="btn btn-default dragItem"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-app-window" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M6 8h.01" /><path d="M9 8h.01" /></svg>Geobodies</a></p>
                <p class="drag"><a class="btn btn-default dragItem"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-app-window" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M6 8h.01" /><path d="M9 8h.01" /></svg>Faults</a></p>
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
              <p class="drag"><a class="btn btn-default dragItem"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-analyze" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 11a8.1 8.1 0 0 0 -6.986 -6.918a8.095 8.095 0 0 0 -8.019 3.918" /><path d="M4 13a8.1 8.1 0 0 0 15 3" /><path d="M19 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M5 8m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>Plio-Peleistocene</a></p>
              <p class="drag"><a class="btn btn-default dragItem"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-analyze" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 11a8.1 8.1 0 0 0 -6.986 -6.918a8.095 8.095 0 0 0 -8.019 3.918" /><path d="M4 13a8.1 8.1 0 0 0 15 3" /><path d="M19 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M5 8m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>Shallow Miocene</a></p>
              <p class="drag"><a class="btn btn-default dragItem"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-analyze" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 11a8.1 8.1 0 0 0 -6.986 -6.918a8.095 8.095 0 0 0 -8.019 3.918" /><path d="M4 13a8.1 8.1 0 0 0 15 3" /><path d="M19 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M5 8m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>Middle Miocene</a></p>
              <p class="drag"><a class="btn btn-default dragItem"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-analyze" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 11a8.1 8.1 0 0 0 -6.986 -6.918a8.095 8.095 0 0 0 -8.019 3.918" /><path d="M4 13a8.1 8.1 0 0 0 15 3" /><path d="M19 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M5 8m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>Deep Miocene</a></p>
              <p class="drag"><a class="btn btn-default dragItem"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-analyze" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 11a8.1 8.1 0 0 0 -6.986 -6.918a8.095 8.095 0 0 0 -8.019 3.918" /><path d="M4 13a8.1 8.1 0 0 0 15 3" /><path d="M19 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M5 8m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>Wilcox</a></p>
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
                  (function() {
                    const appBuilderPlaceholderTxt = "Please drag an element from the left pane and drop it here.";
                    const applets = ['PCA', 'SOM', 'Geobodies', 'Faults'];
                    const recipes = ['Plio-Peleistocene', 'Shallow Miocene', 'Middle Miocene', 'Deep Miocene', 'Wilcox'];
                    const appendDropItem = function(dropzone, summaryTxt, itemHasChildren) {
                      let clonedDropItem = $('.drop-item')[0].cloneNode(true);
                      if (itemHasChildren) {
                        $(clonedDropItem).addClass('drop-item-child');
                      }
                      $(clonedDropItem).css('display', 'block');
                      $(clonedDropItem).find('div').html(summaryTxt.replace('</svg>', '</svg><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-caret-right-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6c0 -.852 .986 -1.297 1.623 -.783l.084 .076l6 6a1 1 0 0 1 .083 1.32l-.083 .094l-6 6l-.094 .083l-.077 .054l-.096 .054l-.036 .017l-.067 .027l-.108 .032l-.053 .01l-.06 .01l-.057 .004l-.059 .002l-.059 -.002l-.058 -.005l-.06 -.009l-.052 -.01l-.108 -.032l-.067 -.027l-.132 -.07l-.09 -.065l-.081 -.073l-.083 -.094l-.054 -.077l-.054 -.096l-.017 -.036l-.027 -.067l-.032 -.108l-.01 -.053l-.01 -.06l-.004 -.057l-.002 -12.059z" stroke-width="0" fill="currentColor" /></svg>'));
                      $(clonedDropItem).on('click', deleteDropItem);
                      dropzone.append(clonedDropItem);
                    };
                    const deleteDropItem = function() {
                      let appBuilder = $(this).parent(); 
                      $(this).detach(); 
                      if (appBuilder.html() == "") {
                        appBuilder.html(appBuilderPlaceholderTxt);
                      }
                    };
                    let currentBackground;
                    
                    $('.drag').draggable({ 
                      appendTo: 'body',
                      helper: 'clone',
                      drag: function(e, ui) {
                        $('.drop-item-child').each(function(){
                          let mouseX = ui.position.left;
                          let mouseY = ui.position.top;
                          if (mouseX >= $(this).offset().left - 20 && mouseX <= $(this).offset().left + $(this).width() + 20 && mouseY >= $(this).offset().top - 35 && mouseY <= $(this).offset().top + $(this).height() + 35) {
                            //console.log('The coordinates are within the element');
                            $('.drop-item-child').css({
                                'opacity': '.80', 
                                'background': 'linear-gradient(to right, #4e658a, #4e658a 4rem, #f2f6fa 1rem, #f2f6fa 100%'
                            });
                          }
                          else {
                            $('.drop-item-child').css({
                              'opacity': '1',
                              'background': 'linear-gradient(to right, #3d5a80, #3d5a80 4rem, #f5f9ff 1rem, #f5f9ff 100%)'
                            });
                          }
                        });
                      }
                    });
                    $('#dropzone').html(appBuilderPlaceholderTxt);
                    $('#dropzone').droppable({
                      activeClass: 'active',
                      hoverClass: 'hover',
                      accept: ":not(.ui-sortable-helper)", // Reject clones generated by sortable
                      drop: function (e, ui) {
                        let phPattern = new RegExp(appBuilderPlaceholderTxt);
                        if (phPattern.test($(this).html())) {
                          $(this).html(($(this).html()).replace(phPattern, ""));
                        }
                        let dragItemTxt = ui.draggable.text().trim();
                        //console.log(ui.draggable.find('a').html());
                        if (dragItemTxt == recipes[2]) {
                          $('.drop-item-child').each(function(){
                            $(this).find('div').html("<b>" + $(this).find('div').html() + " (" + dragItemTxt + ")</b>");
                            $('.drop-item-child').css('opacity', '1');
                            $('.drop-item-child').css('background', 'linear-gradient(to right, #3d5a80, #3d5a80 4rem, #e8f1ff 1rem, #e8f1ff 100%)');
                          });
                        }
                        else {
                          appendDropItem($(this), ui.draggable.find('a').html(), false);
                        }
                        if (dragItemTxt == applets[2]) {
                          let itemChildren = applets.slice(0, 2);
                          for (let i=0; i<itemChildren.length; i++) {
                            appendDropItem($(this), $('.dragItem').html().replace(/(\w+)$/, "") + itemChildren[i], true);
                          }                        
                        }
                      }
                    }).sortable({
                      items: '.drop-item',
                      sort: function() {
                        // gets added unintentionally by droppable interacting with sortable
                        // using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options
                        $(this).removeClass("active");
                      }
                    });
                  })();
                </script>

                <div class="drop-item" style="display:none">
                  <div class="drop-item-icon"></div>
                  <button type="button" class="btn btn-danger btn-xs remove">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                  </button>
                </div>

              </div>


              
            </div>
          </div>
        </div>
      <?php include 'include/footer.php'; ?>