<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">

       <script src="{{ url('js/visibility.js') }}"></script>
    </head>

    <!-- ////////////////////////////////////////////////////////////// -->


    <body >
    
      <div class="split left">
         <div class="centered1">
            <br><br><br><br><br><br><br><br><br>
                   <h1>
                       Mediffy 
                  </h1>
                  
                  <div class="main">
                     <h3 class="hellife">
                                    <span >H</span>
                                      <span >E</span>
                                           <span >L</span>
                                                <span >L</span>
                                                      <span>O</span>
                               &nbsp; &nbsp;
                                                          <span >L</span>
                                                              <span >I</span>
                                                                  <span >F</span>
                                                                      <span >E</span>
                  </h3>
                  </div>
                  
                  <br><br><br><br>
                  <br>

                  <div>
                  <button class="button button1" style="vertical-align:middle" onclick="docformvisibility()"><span>DOCTOR LOGIN</span></button>
                  
                  <button class="button button2" style="vertical-align:middle" onclick="patformvisibility()"><span>PATIENT LOGIN</span></button>
               
                  <button class="button button3" style="vertical-align:middle" onclick="pharformvisibility()"><span>PHARMACY LOGIN</span></button>

                  
                  </div>       
               
          </div>
      </div>     
         
      <div class="split right">
         <div class="centered2">
      <div id="fly-in">  
         <div><span>Built</span>For</div>
         <div><span>Doctors</span></div>
            <div><span>Patients </span></div>
               <div><span>and</span> </div>
               <div><span>Pharmacies</span></div>
   </div>

                   <!-- DOCTOR FORM--->   
            <div class="login-box" id="doc">
               <h2> Doctor Login</h2>
               <form action="" id="docform">
                  <div class="user-box">
                     <input type="text" name="" required="">
                     <label>Doctor Id</label>
                  </div>
                  <div class="user-box">
                     <input type="password" name="" required="">
                     <label>Password</label>
                  </div>
                  <a href="">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     LOGIN
                  </a>
                  <br><br>
                  <button>Create an Account</button>
               
               </form>
            </div>

            <!--PATIENT FORM--->

            <div class="login-box" id="pat">
               <h2> Patient Login</h2>
               <form action="" id="patform">
                  <div class="user-box">
                     <input type="text" name="" required="">
                     <label>Patient Id</label>
                  </div>
                  <div class="user-box">
                     <input type="password" name="" required="">
                     <label>Password</label>
                  </div>
                  <a href="">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     LOGIN
                  </a>
               </form>
            </div>

            <!--PHARMACY FORM--->

            <div class="login-box" id="phar">
               <h2> Pharmacy Login</h2>
               <form action="" id="patform">
                  <div class="user-box">
                     <input type="text" name="" required="">
                     <label>Pharmacy Id</label>
                  </div>
                  <div class="user-box">
                     <input type="password" name="" required="">
                     <label>Password</label>
                  </div>
                  <a href="">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     LOGIN
                  </a>
               </form>
            </div>
            
                     
          </div>
      </div>
                     
        
    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBIsrgbJgPyqDisL0geph63F7S7PryKj3A",
    authDomain: "mediffy-23dd4.firebaseapp.com",
    databaseURL: "https://mediffy-23dd4.firebaseio.com",
    projectId: "mediffy-23dd4",
    storageBucket: "mediffy-23dd4.appspot.com",
    messagingSenderId: "948931671513",
    appId: "1:948931671513:web:60a07a606fbf77a41995c8",
    measurementId: "G-NMQ2VNRSH6"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

    </body>
</html>
