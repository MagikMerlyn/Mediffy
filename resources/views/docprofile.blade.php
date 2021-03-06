
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="{{asset('css/patprofile.css')}}">
 <head>
 <script src="{{ url('js/patprofile.js') }}"></script>
 </head>
 <body>
    <div class="main-content">
      <!-- Top navbar -->
      <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
          <!-- Brand -->
          <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">Doctor profile</a>
          <!-- Form -->
          <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Google Search" type="text">
              </div>
            </div>
          </form>
          <!-- User -->
          <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="/img/sulupropic.jpg">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Dr Gokul P B</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                <div class=" dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="../examples/profile.html" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="../examples/profile.html" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="../examples/profile.html" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="../examples/profile.html" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Header -->
      <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 400px; background-image: url(img/home.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
          <div class="row">
            <div class="col-lg-7 col-md-10">
              <h2 class="display-2 text-white ">Hello&nbsp;Dr&nbsp;Sulu</h2>
              <p></p>
              <!-- <p class="text-white mt-0 mb-5">(BIO) sOME DATA TO BE ADDED.................................................................................</p>-->
            
            </div>
          </div>
        </div>
      </div>
      <!-- Page content -->

      <div class="container-fluid mt--7">
        <div class="row">
          <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
            <div class="card card-profile shadow">
              <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                  <div class="card-profile-image">
                    <a href="#">
                      <img src="/img/sulupropic.jpg" class="rounded-circle">
                    </a>
                  </div>
                </div>
              </div>
    <br>
              <div class="card-body pt-0 pt-md-4">
                <div class="row">
                  <div class="col">
                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                      
                    </div>
                  </div>
                </div><br>
                <br>
                <div class="text-center">
                  <h3>
                    Dr Gokul P B<span class="font-weight-light">, 23</span>
                  </h3>
                  <div class="h5 font-weight-300">
                    <i class="ni location_pin mr-2"></i> Kodungalloor,Kerala
                  </div>
                  <div class="h5 mt-4">
                    <i class="ni business_briefcase-24 mr-2"></i>Oncologist
                  </div>
                  <div>
                    <i class="ni education_hat mr-2"></i>Kodungalloor Medical College
                  </div>
                  <hr class="my-4">    
               <a href="#">docsulu@gmail.com</a>
                </div>
              </div>
            </div>
            
            <!-- Patient details-->
            <br>
              
                  <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                      <div class="col-lg-3 order-lg-2">
                      </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                       <div class="text-center">
                        <h2>
                          Prescriptions<span class="font-weight-light"></span>
                        </h2>
                        <input class="form-control" placeholder="Patient ID" type="text">
                        <br>
                        <a href="#!" class="btn btn-sm btn-primary">Submit</a>
                    
                        <hr class="my-4">
                      </div>
                    </div>
                  </div>

          <!-- Existing Patient-->
                <br>
                  <div class="card card-profile shadow" >
                    <div class="row justify-content-center">
                      <div class="col-lg-3 order-lg-2">
                      </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                       <div class="text-center">
                      
                        
                    
                        <hr class="my-4">

                        

                      </div>
                    </div>
                  </div>
                  
                  

          </div>

          <!-- Doc Details-->

          <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow">
              <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">My account</h3>
                  </div>
                  <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-primary">Edit Profile</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form>
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-username">Full Name</label>
                          <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="Gokul P B">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">Email address</label>
                          <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="docsulu@gmail.com">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-first-name">First name</label>
                          <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Gokul">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">Last name</label>
                          <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="P B">
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr class="my-4">
                  <h6 class="heading-small text-muted mb-4">Contact information</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-address">Address</label>
                          <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Kodungalloor" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-city">City</label>
                          <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="Thrissur">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-country">Country</label>
                          <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="India">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label" for="input-country">Postal code</label>
                          <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                  <h6 class="heading-small text-muted mb-4">About me</h6>
                  <div class="pl-lg-4">
                    <div class="form-group focused">
                      <label>About Me</label>
                      <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">Psycho</textarea>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>


    
    </div>

    

    <footer class="footer">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6 m-auto text-center">
          <div class="copyright">
            <p>Made with <a href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">laravel</a> by Magik Merlyn</p>
          </div>
        </div>
      </div>
    </footer>



    
  </body>