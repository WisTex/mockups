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

                        .map .svgbubble {
                            color: #008000;
                            animation-iteration-count: 1;                        
                            transform: rotate(180deg);
                            opacity: .9;         
                            display: block;  
                            position: relative;              
                        }

                        .map .svgbubble-well4 {
                            width: 60px;
                            height: 120px;
                            margin: 0 0 0 -5px; 
                            animation: growAnimationWell4 ease 5s;
                        }                     

                        @keyframes growAnimationWell4 {
                          0% {
                            width: 0;
                            margin: 0 0 0 25px;
                            top: 23px;
                          }
                          100% {
                            width: 60px;
                            margin: 0 0 0 -5px;
                            top: 0;
                          }
                        }

                        .map .svgbubble-well3 {
                            width: 50px;
                            height: 100px;
                            margin: 0 0 0 -5px; 
                            animation: growAnimationWell3 ease 4s;
                        }                     

                        @keyframes growAnimationWell3 {
                          0% {
                            width: 0;
                            margin: 0 0 0 19px;
                            top: 20px;
                          }
                          100% {
                            width: 50px;
                            margin: 0 0 0 -5px;
                            top: 0;
                          }
                        }      
                        
                        .map .svgbubble-well2 {
                            width: 40px;
                            height: 80px;
                            margin: 0 0 0 0; 
                            animation: growAnimationWell2 ease 3s;
                            top: 0;
                        } 

                        @keyframes growAnimationWell2 {
                          0% {
                            width: 0;
                            margin: 0 0 0 19px;
                            top: 15px;
                          }
                          100% {
                            width: 40px;
                            margin: 0 0 0 0;
                            top: 0;
                          }
                        }                         
                        
                        .map .svgbubble-well1 {
                            width: 30px;
                            height: 60px;
                            margin: 0 0 0 4px; 
                            animation: growAnimationWell1 ease 2s;
                            top: -10px;
                        } 

                        @keyframes growAnimationWell1 {
                          0% {
                            width: 0;
                            margin: 0 0 0 18px;
                            top: 0;
                          }
                          100% {
                            width: 30px;
                            margin: 0 0 0 4px;
                            top: -10px;
                          }
                        } 

                        .map p {
                            color: #000;
                            font-size: .75rem;
                            font-weight: bold;
                            line-height: .85rem;
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

                        .code-well2 {
                            bottom: 66.0022%;
                            left: 61.4594%;
                        }

                        .code-well2 p {
                          margin: 0 0 -17px 0;
                        }

                        .code-well1 {
                            bottom: 87.028%;
                            left: 34.986%;
                        }

                        .code-well1 p {
                          margin: 0 0 -1px 0;
                        }

                        .code-well3 {
                            bottom: 36.8112%;
                            left: 77.4641%;
                        }

                        .code-well3 p {
                          margin: 0 0 -23px 0;
                        }

                        .code-well4 {
                            bottom: 78.1192%;
                            left: 23.7991%;
                        }

                        .code-well4 p {
                          margin: 0 0 -28px 0;
                        }
                    </style>
                    <div class="map"><img src="images/geo-potential-wells-sticks.png" width="667">
                        <div class="rpin code-well2">
                          <p><a href="y.php">Proposed Well 2</a></p>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-droplet-filled svgbubble svgbubble-well2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-toggle="tooltip" data-placement="top" title="Channel 4: 189 MBEQ"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.708 2.372a2.382 2.382 0 0 0 -.71 .686l-4.892 7.26c-1.981 3.314 -1.22 7.466 1.767 9.882c2.969 2.402 7.286 2.402 10.254 0c2.987 -2.416 3.748 -6.569 1.795 -9.836l-4.919 -7.306c-.722 -1.075 -2.192 -1.376 -3.295 -.686z" stroke="#bbb" stroke-width=".8" fill="currentColor" /></svg>
                        </div>
                        <div class="rpin code-well1">
                          <p><a href="y.php">Proposed Well 1</a></p>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-droplet-filled svgbubble svgbubble-well1" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-toggle="tooltip" data-placement="top" title="Channel 1: 52 MBEQ"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.708 2.372a2.382 2.382 0 0 0 -.71 .686l-4.892 7.26c-1.981 3.314 -1.22 7.466 1.767 9.882c2.969 2.402 7.286 2.402 10.254 0c2.987 -2.416 3.748 -6.569 1.795 -9.836l-4.919 -7.306c-.722 -1.075 -2.192 -1.376 -3.295 -.686z" stroke="#bbb" stroke-width="1" fill="currentColor" /></svg>
                        </div>
                        <div class="rpin code-well3">
                          <p><a href="y.php">Proposed Well 3</a></p>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-droplet-filled svgbubble svgbubble-well3" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-toggle="tooltip" data-placement="top" title="Channel 2: 2052 MBEQ"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.708 2.372a2.382 2.382 0 0 0 -.71 .686l-4.892 7.26c-1.981 3.314 -1.22 7.466 1.767 9.882c2.969 2.402 7.286 2.402 10.254 0c2.987 -2.416 3.748 -6.569 1.795 -9.836l-4.919 -7.306c-.722 -1.075 -2.192 -1.376 -3.295 -.686z" stroke="#bbb" stroke-width=".6" fill="currentColor" /></svg>
                        </div>
                        <div class="rpin code-well4">
                          <p><a href="y.php">Proposed Well 4</a></p>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-droplet-filled svgbubble svgbubble-well4" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-toggle="tooltip" data-placement="top" title="Channel 2: 2052 MBEQ"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.708 2.372a2.382 2.382 0 0 0 -.71 .686l-4.892 7.26c-1.981 3.314 -1.22 7.466 1.767 9.882c2.969 2.402 7.286 2.402 10.254 0c2.987 -2.416 3.748 -6.569 1.795 -9.836l-4.919 -7.306c-.722 -1.075 -2.192 -1.376 -3.295 -.686z" stroke="#bbb" stroke-width=".5" fill="currentColor" /></svg>
                        </div>                        
                    </div>
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
          enabled: true,
          animateGradually: {
            enabled: true,
            delay: 400
          },
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
      colors: [tabler.getColor("azure"), tabler.getColor("red"), "#ffee00", tabler.getColor("purple")],
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




<div class="alert alert-success bg-success-lt" role="alert">
  <h4 class="alert-title">Suggested AI Prompt</h4>
  <a href="z.php" class="btn btn-info btn-sm pull-right">Run</a>
  <div class="text-secondary">Do you want to apply this to the entire U.S. Deep Water Gulf of Mexico?</div>
  
</div>

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
          60
        </td>
      </tr>      
      <tr>
        <td>Proposed Well 3</td>
        <td class="text-secondary">
          67
        </td>
      </tr>       
      <tr>
        <td>Proposed Well 4</td>
        <td class="text-secondary">
          75
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