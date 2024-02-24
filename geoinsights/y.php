      <?php include 'include/header.php'; ?>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-lg-6">



              <div class="card mb-3" style="min-height: 500px;">
                  <!--
                  <div class="card-header">
                    <h3 class="card-title">Card title <span class="card-subtitle">Subtitle</span></h3>
                  </div>
                  -->
                  <div class="card-body">
                    <h3 class="card-title mb-2">Stacked Seismic Volume <span class="card-subtitle">Channel and Fan</span></h3> 

                    <p><img src="images/geo-potential-wells-sticks.png" height="750"></img></p>

                    <?php /*

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

                        .map .svgline {
                            color: #fff;
                            width: 32px;
                            height: 64px;
                            transform: scale(1, 3) rotate(350deg);
                            opacity: .6;
                            margin: 28px 0 0 0;
                        }

                        .map .svgline:hover, .map .svgbubble:hover {
                            cursor: pointer;
                        }

                        .map .svgbubble {
                            color: #000;
                            animation-iteration-count: 1;                        
                            transform: rotate(180deg);
                            opacity: .9;         
                            display: block;  
                            position: relative;              
                        }

                        .map .svgbubble-facies {
                            width: 32px;
                            height: 64px;
                            margin: 0 0 0 -5px; 
                            animation: growAnimationFacies ease 3s;
                        }                     

                        @keyframes growAnimationFacies {
                          0% {
                            width: 0;
                            margin: 0 0 0 12px;
                            top: 15px;
                          }
                          100% {
                            width: 32px;
                            margin: 0 0 0 -5px;
                            top: 0;
                          }
                        }      
                        
                        .map .svgbubble-som {
                            width: 24px;
                            height: 48px;
                            margin: 0 0 0 0; 
                            animation: growAnimationSom ease 3s;
                            top: -5px;
                        } 

                        @keyframes growAnimationSom {
                          0% {
                            width: 0;
                            margin: 0 0 0 11px;
                            top: 5px;
                          }
                          100% {
                            width: 24px;
                            margin: 0 0 0 0;
                            top: -5px;
                          }
                        }                         
                        
                        .map .svgbubble-fault {
                            width: 16px;
                            height: 32px;
                            margin: 0 0 0 4px; 
                            animation: growAnimationFault ease 3s;
                            top: -10px;
                        } 

                        @keyframes growAnimationFault {
                          0% {
                            width: 0;
                            margin: 0 0 0 10px;
                            top: 0;
                          }
                          100% {
                            width: 16px;
                            margin: 0 0 0 4px;
                            top: -10px;
                          }
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

                        .code-som {
                            bottom: 79.9282%;
                            left: 50.5994%;
                        }

                        .code-fault {
                            bottom: 65.858%;
                            left: 32.716%;
                        }

                        .code-facies {
                            bottom: 70.2392%;
                            left: 45.4641%;
                        }
                    </style>
                    <div class="map"><img src="images/3D-view-of-fault-and-channel.jpg">
                        <div class="rpin code-som">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-droplet-filled svgbubble svgbubble-som" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-toggle="tooltip" data-placement="top" title="Channel 4: 189 MBEQ"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.708 2.372a2.382 2.382 0 0 0 -.71 .686l-4.892 7.26c-1.981 3.314 -1.22 7.466 1.767 9.882c2.969 2.402 7.286 2.402 10.254 0c2.987 -2.416 3.748 -6.569 1.795 -9.836l-4.919 -7.306c-.722 -1.075 -2.192 -1.376 -3.295 -.686z" stroke-width="0" fill="currentColor" /></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-minus-vertical svgline" width="24" height="24" viewBox="0 0 24 48" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-toggle="tooltip" data-placement="top" title="Channel 4: 189 MBEQ"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5v14" /></svg>
                        </div>
                        <div class="rpin code-fault">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-droplet-filled svgbubble svgbubble-fault" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-toggle="tooltip" data-placement="top" title="Channel 1: 52 MBEQ"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.708 2.372a2.382 2.382 0 0 0 -.71 .686l-4.892 7.26c-1.981 3.314 -1.22 7.466 1.767 9.882c2.969 2.402 7.286 2.402 10.254 0c2.987 -2.416 3.748 -6.569 1.795 -9.836l-4.919 -7.306c-.722 -1.075 -2.192 -1.376 -3.295 -.686z" stroke-width="0" fill="currentColor" /></svg>  
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-minus-vertical svgline" width="24" height="24" viewBox="0 0 24 48" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-toggle="tooltip" data-placement="top" title="Channel 1: 52 MBEQ"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5v14" /></svg>
                        </div>
                        <div class="rpin code-facies">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-droplet-filled svgbubble svgbubble-facies" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-toggle="tooltip" data-placement="top" title="Channel 2: 2052 MBEQ"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.708 2.372a2.382 2.382 0 0 0 -.71 .686l-4.892 7.26c-1.981 3.314 -1.22 7.466 1.767 9.882c2.969 2.402 7.286 2.402 10.254 0c2.987 -2.416 3.748 -6.569 1.795 -9.836l-4.919 -7.306c-.722 -1.075 -2.192 -1.376 -3.295 -.686z" stroke-width="0" fill="currentColor" /></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-minus-vertical svgline" width="24" height="24" viewBox="0 0 24 48" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-toggle="tooltip" data-placement="top" title="Channel 2: 2052 MBEQ"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5v14" /></svg>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function(){
                            $('[data-toggle="tooltip"]').tooltip(); 
                        });
                    </script>              
                    */ ?>
                  </div>
                  <div class="card-footer">
                  <a href="#" class="btn btn-primary btn-sm">Back to Dashboard</a>
                  <a href="#" class="btn btn-primary btn-sm">View Full Screen    &nbsp;
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-external-link" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" /><path d="M11 13l9 -9" /><path d="M15 4h5v5" /></svg>

                  </a>                  
                  <a href="#" class="btn btn-warning btn-sm">Change Data Set</a>
                  </div>

                </div>



              </div>
              
              
              <div class="col-lg-6">


              <div class="card mb-3">
  <div class="card-body">
    <div id="chart-demo-area" class="chart-lg"></div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/libs/apexcharts/dist/apexcharts.min.js" defer></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-demo-area'), {
      chart: {
        type: "area",
        fontFamily: 'inherit',
        height: 240,
        parentHeightOffset: 0,
        toolbar: {
          show: false,
        },
        animations: {
          enabled: false
        },
      },
      dataLabels: {
        enabled: false,
      },
      fill: {
        opacity: .16,
        type: 'solid'
      },
      stroke: {
        width: 2,
        lineCap: "round",
        curve: "smooth",
      },
      series: [{
        name: "Proposed Well 1",
        data: [0, 25, 42, 65, 64, 60]
      }, 
      {
        name: "Proposed Well 2",
        data: [0, 10, 40, 39, 52, 34]
      }, 
      {
        name: "Proposed Well 3",
        data: [0, 45, 52, 44, 42, 42]
      }, 
      {
        name: "Proposed Well 4",
        data: [0, 60, 55, 45, 38, 30]
      }],
      tooltip: {
        theme: 'dark'
      },
      grid: {
        padding: {
          top: -20,
          right: 0,
          left: -4,
          bottom: -4
        },
        strokeDashArray: 4,
      },
      xaxis: {
        labels: {
          padding: 0,
        },
        tooltip: {
          enabled: false
        },
        axisBorder: {
          show: false,
        },
        type: 'label',
      },
      yaxis: {
        labels: {
          padding: 4
        },
      },
      labels: [
        'Year 0', 'Year 1', 'Year 2', 'Year 3', 'Year 4', 'Year 5'
      ],
      colors: [tabler.getColor("primary"), tabler.getColor("purple"), tabler.getColor("success"), tabler.getColor("info")],
      legend: {
        show: true,
        position: 'bottom',
        offsetY: 12,
        markers: {
          width: 10,
          height: 10,
          radius: 100,
        },
        itemMargin: {
          horizontal: 8,
          vertical: 8
        },
      },
    })).render();
  });
</script>



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
        <td>Proposed Well 1</td>
        <td class="text-secondary">
          52
        </td>
      </tr>
      <tr>
        <td>Proposed Well 2</td>
        <td class="text-secondary">
          87
        </td>
      </tr>      
      <tr>
        <td>Proposed Well 3</td>
        <td class="text-secondary">
          189
        </td>
      </tr>       
      <tr>
        <td>Proposed Well 4</td>
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
                    Current Prompt: Select new  well locations (3-5)  and generate production history for 5 years for optimal production
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
        </div>
      <?php include 'include/footer.php'; ?>