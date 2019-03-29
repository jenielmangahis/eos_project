@extends('layouts.user')

@section('content')
 <!-- Page Wrapper -->
 <div id="wrapper">
<style>
.td_values{border: #cbd2d8 2px solid; box-shadow: inset 0 0 0 -1px red; font-size:15px; padding:5px; background:#A5D056; font-family: 'Orbitron';}
</style>
@include('partials.user.sidebar')



<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>



      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter">3+</span>
          </a>
          <!-- Dropdown - Alerts -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
              Alerts Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-primary">
                  <i class="fas fa-file-alt text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">December 12, 2019</div>
                <span class="font-weight-bold">A new monthly report is ready to download!</span>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-success">
                  <i class="fas fa-donate text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">December 7, 2019</div>
                $290.29 has been deposited into your account!
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-warning">
                  <i class="fas fa-exclamation-triangle text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">December 2, 2019</div>
                Spending Alert: We've noticed unusually high spending for your account.
              </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
          </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
            <span class="badge badge-danger badge-counter">7</span>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
              Message Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                <div class="status-indicator bg-success"></div>
              </div>
              <div class="font-weight-bold">
                <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                <div class="small text-gray-500">Emily Fowler · 58m</div>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                <div class="status-indicator"></div>
              </div>
              <div>
                <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                <div class="small text-gray-500">Jae Chun · 1d</div>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                <div class="status-indicator bg-warning"></div>
              </div>
              <div>
                <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                <div class="small text-gray-500">Morgan Alvarez · 2d</div>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                <div class="status-indicator bg-success"></div>
              </div>
              <div>
                <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                <div class="small text-gray-500">Chicken the Dog · 2w</div>
              </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
          </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</span>
            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
              Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">



     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Motion Levels</h1>
        
       
      </div>


      <!-- Content Row -->
      <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">

    
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Zones[Edit]</h6>
            </div>
            <div class="card-body">
              
<table width="100%" cellspacing="2" cellpadding="1" class="responsive">
	<tr><center><td class="msg"  colspan="4"></td></center></tr>
    <tr><center><td colspan="4"><br><br></td></center></tr>
  <tr>
  	<td width="60%">
    
    <table width="100%" cellpadding="1">
      <tr>
        <td align="center"><canvas id="z_temp_gauge"></canvas></td>
        <td align="center"><canvas id="z_humi_gauge"></canvas></td>
      </tr>
      <tr>
        <td align="center">Zone Temperature:&nbsp;<span id="ztemp" style="color:#C33; font-size:20px;"></span>&nbsp;&deg;F</td>
        <td align="center">Zone Humidity:&nbsp;<span id="zhumi" style="color:#C33; font-size:20px;"></span>&nbsp;PPM</td>
      </tr><tr height="15px"></tr>
      <tr>
        <td align="center"><canvas id="z_co2_gauge"></canvas></td>
        <td align="center"><canvas id="z_amoni_gauge"></canvas></td>
      </tr>
      <tr>
        <td align="center">Zone CO2 Level:&nbsp;<span id="zco2" style="color:#C33; font-size:20px;"></span>&nbsp;PPM</td>
        <td align="center">Zone Ammonia:&nbsp;<span id="zamoni" style="color:#C33; font-size:20px;"></span>&nbsp;PPM</td>
      </tr><tr height="15px"></tr>
      <tr>
        <td align="center"><canvas id="z_sound_gauge"></canvas></td>
        <td align="center"><canvas id="z_motion_gauge"></canvas></td>
      </tr>
      <tr>
        <td align="center">Zone Sound Level:&nbsp;<span id="zsound" style="color:#C33; font-size:20px;"></span>&nbsp;Decibels</td>
        <td align="center">Zone Motion Level:&nbsp;<span id="zmotion" style="color:#C33; font-size:20px;"></span>&nbsp;per 10 Seconds</td>
      </tr>
    </table>
    </td>


    <td valign="top" width="40%">
	<table width="100%" cellpadding="1">
	<tr><td width="50%"><b>Ambient Temperature:</td><td><div style="width:50px; display: inline-block;" id="amtemp" class="td_values"></div>&nbsp;&nbsp;&deg;F</td></tr>
	<tr><td><b>Ambient Humidity:</td><td><div style="width:50px; display: inline-block;" id="amhumi" class="td_values"></div>&nbsp;&nbsp;%</td></tr>
	<tr><td><b>Cavity Temperature:</td><td><div style="width:50px; display: inline-block;" id="cavtemp" class="td_values"></div>&nbsp;&nbsp;&deg;F</td></tr>
	<tr><td><b>Cavity Humidity:</td><td><div style="width:50px; display: inline-block;" id="cavhumi" class="td_values"></div>&nbsp;&nbsp;%</td></tr>
	<tr><td><b>Fan Temperature:</td><td><div style="width:50px; display: inline-block;" id="fantemp" class="td_values"></div>&nbsp;&nbsp;&deg;F</td></tr>
	
	<tr height="20%"><td> </td><td> </td></tr> 
	
	<tr><td><span style="color:#930; font-size:20px;"><b>Turn On Manual Control to the Fan*</b></span></td><td>  <input type="checkbox" name="override" class="override"></td></tr>
	<tr><td><span class="notice">*This setting should be off to work the Fan automatically</span></td><td>  <input type = "radio" value = "ON" name="fan"  />ON&nbsp;&nbsp;<input type = "radio" value = "OFF" name="fan"  />OFF</td></tr>
	</table>
	</td>
	
	</tr>
</table>



<br><br><br><span>(Updating every 2 seconds)</span>



            </div>
          </div>

          <!-- Color System -->
          <!--<div class="row">
            <div class="col-lg-6 mb-4">
              <div class="card bg-primary text-white shadow">
                <div class="card-body">
                  Primary
                  <div class="text-white-50 small">#4e73df</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  Success
                  <div class="text-white-50 small">#1cc88a</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-info text-white shadow">
                <div class="card-body">
                  Info
                  <div class="text-white-50 small">#36b9cc</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-warning text-white shadow">
                <div class="card-body">
                  Warning
                  <div class="text-white-50 small">#f6c23e</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-danger text-white shadow">
                <div class="card-body">
                  Danger
                  <div class="text-white-50 small">#e74a3b</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-secondary text-white shadow">
                <div class="card-body">
                  Secondary
                  <div class="text-white-50 small">#858796</div>
                </div>
              </div>
            </div>
          </div>-->

        </div>

        <div class="col-lg-6 mb-4">

          <!-- Illustrations -->
          <!--<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
            </div>
            <div class="card-body">
              <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
              </div>
              <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
              <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
            </div>
          </div>-->

          <!-- Approach -->
          <!--<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
            </div>
            <div class="card-body">
              <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
              <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
            </div>
          </div>-->

        </div>
      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; GSHTechnologies 2019</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <a class="btn btn-primary" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>


    </div>
  </div>
</div>
</div>


<script>
// zone temperature
var opts1 = {
  angle: -0.2, // The span of the gauge arc
  lineWidth: 0.2, // The line thickness
  radiusScale: 1, // Relative radius
  pointer: {
  length: 0.6, // // Relative to gauge radius
  strokeWidth: 0.035, // The thickness
  color: '#000000', // Fill color
  },
	fontSize:24,
staticLabels: {
  font: "12px sans-serif",  // Specifies font
  labels: [0,50,100, 150],  // Print labels at these values
  color: "#000000",  // Optional: Label text color
  fractionDigits: 0  // Optional: Numerical precision. 0=round off.
},
  staticZones: [
    {strokeStyle: "#F03E3E", min: 0, max: 50},
    {strokeStyle: "#FFDD00", min: 50, max: 100},
    {strokeStyle: "#30B32D", min: 100, max: 150},
  ],

  limitMax: false,     // If false, max value increases automatically if value > maxValue
  limitMin: false,     // If true, the min value of the gauge will be fixed
  colorStart: '#6FADCF',   // Colors
  colorStop: '#8FC0DA',    // just experiment with them
  strokeColor: '#E0E0E0',  // to see which ones work best for you
  generateGradient: true,
  highDpiSupport: true,     // High resolution support
};
var target1 = document.getElementById('z_temp_gauge'); // your canvas element
var gauge1 = new Gauge(target1).setOptions(opts1); // create sexy gauge!
gauge1.maxValue = 150; // set max gauge value
gauge1.setMinValue(0);  // Prefer setter over gauge.minValue = 0
gauge1.animationSpeed = 32; // set animation speed (32 is default value)

// zone humidity
var opts2 = {
  angle: -0.2, // The span of the gauge arc
  lineWidth: 0.2, // The line thickness
  radiusScale: 1, // Relative radius
  pointer: {
  length: 0.6, // // Relative to gauge radius
  strokeWidth: 0.035, // The thickness
  color: '#000000', // Fill color
  },
	fontSize:24,
staticLabels: {
  font: "12px sans-serif",  // Specifies font
  labels: [0,33,66, 100],  // Print labels at these values
  color: "#000000",  // Optional: Label text color
  fractionDigits: 0  // Optional: Numerical precision. 0=round off.
},
  staticZones: [
    {strokeStyle: "#30B32D", min: 0, max: 33},
    {strokeStyle: "#FFDD00", min: 33, max: 66},
    {strokeStyle: "#F03E3E", min: 66, max: 100},
  ],

  limitMax: false,     // If false, max value increases automatically if value > maxValue
  limitMin: false,     // If true, the min value of the gauge will be fixed
  colorStart: '#6FADCF',   // Colors
  colorStop: '#8FC0DA',    // just experiment with them
  strokeColor: '#E0E0E0',  // to see which ones work best for you
  generateGradient: true,
  highDpiSupport: true,     // High resolution support
};
var target2 = document.getElementById('z_humi_gauge'); // your canvas element
var gauge2 = new Gauge(target2).setOptions(opts2); // create sexy gauge!
gauge2.maxValue = 100; // set max gauge value
gauge2.setMinValue(0);  // Prefer setter over gauge.minValue = 0
gauge2.animationSpeed = 32; // set animation speed (32 is default value)

// zone co2
var opts3 = {
  angle: -0.2, // The span of the gauge arc
  lineWidth: 0.2, // The line thickness
  radiusScale: 1, // Relative radius
  pointer: {
  length: 0.6, // // Relative to gauge radius
  strokeWidth: 0.035, // The thickness
  color: '#000000', // Fill color
  },
	fontSize:24,
staticLabels: {
  font: "12px sans-serif",  // Specifies font
  labels: [0,1650,3300, 5000],  // Print labels at these values
  color: "#000000",  // Optional: Label text color
  fractionDigits: 0  // Optional: Numerical precision. 0=round off.
},
  staticZones: [
    {strokeStyle: "#30B32D", min: 0, max: 1650},
    {strokeStyle: "#FFDD00", min: 1650, max: 3300},
    {strokeStyle: "#F03E3E", min: 3300, max: 5000},
  ],

  limitMax: false,     // If false, max value increases automatically if value > maxValue
  limitMin: false,     // If true, the min value of the gauge will be fixed
  colorStart: '#6FADCF',   // Colors
  colorStop: '#8FC0DA',    // just experiment with them
  strokeColor: '#E0E0E0',  // to see which ones work best for you
  generateGradient: true,
  highDpiSupport: true,     // High resolution support
};
var target3 = document.getElementById('z_co2_gauge'); // your canvas element
var gauge3 = new Gauge(target3).setOptions(opts3); // create sexy gauge!
gauge3.maxValue = 5000; // set max gauge value
gauge3.setMinValue(0);  // Prefer setter over gauge.minValue = 0
gauge3.animationSpeed = 32; // set animation speed (32 is default value)

// zone amonia
var opts4 = {
  angle: -0.2, // The span of the gauge arc
  lineWidth: 0.2, // The line thickness
  radiusScale: 1, // Relative radius
  pointer: {
  length: 0.6, // // Relative to gauge radius
  strokeWidth: 0.035, // The thickness
  color: '#000000', // Fill color
  },
	fontSize:24,
staticLabels: {
  font: "12px sans-serif",  // Specifies font
  labels: [0,17,33, 50],  // Print labels at these values
  color: "#000000",  // Optional: Label text color
  fractionDigits: 0  // Optional: Numerical precision. 0=round off.
},
  staticZones: [
    {strokeStyle: "#30B32D", min: 0, max: 17},
    {strokeStyle: "#FFDD00", min: 17, max: 33},
    {strokeStyle: "#F03E3E", min: 33, max: 50},
  ],

  limitMax: false,     // If false, max value increases automatically if value > maxValue
  limitMin: false,     // If true, the min value of the gauge will be fixed
  colorStart: '#6FADCF',   // Colors
  colorStop: '#8FC0DA',    // just experiment with them
  strokeColor: '#E0E0E0',  // to see which ones work best for you
  generateGradient: true,
  highDpiSupport: true,     // High resolution support
};
var target4 = document.getElementById('z_amoni_gauge'); // your canvas element
var gauge4 = new Gauge(target4).setOptions(opts4); // create sexy gauge!
gauge4.maxValue = 50; // set max gauge value
gauge4.setMinValue(0);  // Prefer setter over gauge.minValue = 0
gauge4.animationSpeed = 32; // set animation speed (32 is default value)

// zone sound
var opts5 = {
  angle: -0.2, // The span of the gauge arc
  lineWidth: 0.2, // The line thickness
  radiusScale: 1, // Relative radius
  pointer: {
  length: 0.6, // // Relative to gauge radius
  strokeWidth: 0.035, // The thickness
  color: '#000000', // Fill color
  },
	fontSize:24,
staticLabels: {
  font: "12px sans-serif",  // Specifies font
  labels: [0,33,66, 100],  // Print labels at these values
  color: "#000000",  // Optional: Label text color
  fractionDigits: 0  // Optional: Numerical precision. 0=round off.
},
  staticZones: [
    {strokeStyle: "#30B32D", min: 0, max: 33},
    {strokeStyle: "#FFDD00", min: 33, max: 66},
    {strokeStyle: "#F03E3E", min: 66, max: 100},
  ],

  limitMax: false,     // If false, max value increases automatically if value > maxValue
  limitMin: false,     // If true, the min value of the gauge will be fixed
  colorStart: '#6FADCF',   // Colors
  colorStop: '#8FC0DA',    // just experiment with them
  strokeColor: '#E0E0E0',  // to see which ones work best for you
  generateGradient: true,
  highDpiSupport: true,     // High resolution support
};
var target5 = document.getElementById('z_sound_gauge'); // your canvas element
var gauge5 = new Gauge(target5).setOptions(opts5); // create sexy gauge!
gauge5.maxValue = 100; // set max gauge value
gauge5.setMinValue(0);  // Prefer setter over gauge.minValue = 0
gauge5.animationSpeed = 32; // set animation speed (32 is default value)

// zone motion
var opts6 = {
  angle: -0.2, // The span of the gauge arc
  lineWidth: 0.2, // The line thickness
  radiusScale: 1, // Relative radius
  pointer: {
  length: 0.6, // // Relative to gauge radius
  strokeWidth: 0.035, // The thickness
  color: '#000000', // Fill color
  },
	fontSize:24,
staticLabels: {
  font: "12px sans-serif",  // Specifies font
  labels: [0,5,10, 15],  // Print labels at these values
  color: "#000000",  // Optional: Label text color
  fractionDigits: 0  // Optional: Numerical precision. 0=round off.
},
  staticZones: [
    {strokeStyle: "#30B32D", min: 0, max: 5},
    {strokeStyle: "#FFDD00", min: 5, max: 10},
    {strokeStyle: "#F03E3E", min: 10, max: 15},
  ],

  limitMax: false,     // If false, max value increases automatically if value > maxValue
  limitMin: false,     // If true, the min value of the gauge will be fixed
  colorStart: '#6FADCF',   // Colors
  colorStop: '#8FC0DA',    // just experiment with them
  strokeColor: '#E0E0E0',  // to see which ones work best for you
  generateGradient: true,
  highDpiSupport: true,     // High resolution support
};
var target6 = document.getElementById('z_motion_gauge'); // your canvas element
var gauge6 = new Gauge(target6).setOptions(opts6); // create sexy gauge!
gauge6.maxValue = 15; // set max gauge value
gauge6.setMinValue(0);  // Prefer setter over gauge.minValue = 0
gauge6.animationSpeed = 32; // set animation speed (32 is default value)



setInterval(
  function()
  {	
		var r =$('input[name=fan]:checked').val();
		if($('.override').is(':checked')){ 
			var s='1';
			$('input[name=fan]').prop('disabled', false);
			} else { 
			var s='0'; $('input[name=fan]').prop('disabled', 'disabled');
			}
			
$.ajax({
				 type:    'GET',
                 url:     '/sv',
                 data: { val : r, override : s },
                 cache:   false,
                 success: function(data){
                     var sensor_values = data.split(",");
					// alert(data);
               //  }
      //  });
		
  		var ts = Math.round((new Date()).getTime() / 1000); 
		if((ts-sensor_values[1])>80){$(".msg").html("<span style='color:#F00'>Syncronizing  . . .</span>");} 
			else {$(".msg").text("Updating in Real Time...");}
   // $.getJSON('/show_values',function(data) {
	//	var sensor_values = data.result.split(",");
    $("#ztemp").text(sensor_values[2]);
		$("#zhumi").text(sensor_values[3]);
		$("#zamoni").text(sensor_values[4]);
		$("#zco2").text(sensor_values[5]);
		$("#zsound").text(sensor_values[6]);
		$("#zmotion").text(sensor_values[7]);
		$("#amtemp").text(sensor_values[8]);
		$("#amhumi").text(sensor_values[9]);
		$("#cavtemp").text(sensor_values[10]);
		$("#cavhumi").text(sensor_values[11]);
		$("#fantemp").text(sensor_values[12]);
	 // $("#humi").text(data.var2);
	//  document.write(data);
		//alert(data.sensor_values);
		gauge1.set(sensor_values[2]);
		gauge2.set(sensor_values[3]);
		gauge3.set(sensor_values[5]);
		gauge4.set(sensor_values[4]);
		gauge5.set(sensor_values[6]);
		gauge6.set(sensor_values[7]);
		}
	 });

  },
1000);

</script>

@endsection
