
<link href="http://localhost/MVC_Planet.Dev/public/assets/css/admin-style.css" rel="stylesheet">
<link href="http://localhost/MVC_Planet.Dev/public/assets/css/home-style.css" rel="stylesheet">
<section  class="myBackground " style="height:100vh;">
  
  <div class="px-4 py-5 px-md-5 text-center text-lg-start">
    <div class="container" style="margin-top:80px">
      <div class="row gx-lg-5 align-items-center text-center justify-content-center">
        

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-3 ">
              <form method="post" action="http://localhost/MVC_Planet.Dev/login"  onsubmit="return validateForm()">
                <p class="text-danger"></p>
               
               <h3 class="pb-5">Login </h3>

              
                <div class="form-outline mb-4 px-5">
                <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email"  id="email" name="email" onkeyup="validateInput(this)" class="form-control text-center"/>
                  <span class="error-message text-danger" id="email-error"></span>
                 
                </div>

               
                <div class="form-outline mb-4 px-5">
                <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" id="password" name="password" onkeyup="validateInput(this)" class="form-control text-center" />
                  <span class="error-message text-danger" id="password-error"></span>
                 
                </div>
                <button type="submit" class="btn btn-main"
						 name="login">Login Now</button>

        
              </form>
    
              <script src="http://localhost/MVC_Planet.Dev/public/assets/js/login.js"></script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>