<!doctype html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="login.css">
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<form action="includes\formhnadler.php" method="post">
<form action="control.php" method="post">
    <div id="loader">
        <div class="Ripple">
            <div class="loader">
              <div></div>
              <div></div>
            </div>
        </div>
      </div>
    
<div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
<main id="pageContent">
    <div class="section">
        <div class="container">
          <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
              <div class="section pb-5 pt-5 pt-sm-2 text-center">
                <h6 class="mb-0 pb-3"><span class="LI">Log In </span><span class="LI">Sign Up</span></h6>
                      <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                      <label for="reg-log"></label>
                <div class="card-3d-wrap mx-auto">
                  <div class="card-3d-wrapper">
                    <div class="card-front">
                      <div class="center-wrap">
                        <div class="section text-center">
                          <h4 class="mb-4 pb-3">Log In</h4>
                          <div class="form-group">
                            <input type="email" name="email" class="form-style" placeholder="Email">
                            <i class="input-icon uil uil-at"></i>
                          </div>	
                          <div class="form-group mt-2">
                            <input type="password" name="password" class="form-style" placeholder="Password">
                            <i class="input-icon uil uil-lock-alt"></i>
                          </div>
                          <button type="submit"><a href="index.html" class="btn mt-4">Login</a></button>
                          <p class="mb-0 mt-4 text-center"><a href="#" class="link">Forgot your password?</a></p>
                            </div>
                          </div>
                        </div>
                    <div class="card-back">
                      <div class="center-wrap">
                        <div class="section text-center">
                          <h4 class="mb-3 pb-3">Sign Up</h4>
                          <div class="form-group">
                            <input type="text" name="fullname" class="form-style"  placeholder="Full Name" >
                            <i class="input-icon uil uil-user"></i>
                          </div>	
                          <div class="form-group mt-2">
                            <input type="tel"name="Phone_Number" class="form-style" placeholder="Phone Number" >
                            <i class="input-icon uil uil-phone"></i>
                          </div>	
                          <div class="form-group mt-2">
                            <input type="email" name="EMAIL" class="form-style" placeholder="Email">
                            <i class="input-icon uil uil-at"></i>
                          </div>
                          <div class="form-group mt-2">
                            <input type="password" name="password" class="form-style" placeholder="Password" >
                            <i class="input-icon uil uil-lock-alt"></i>
                          </div>
                          <button type="submit"><a href="login.php" class="btn mt-4">Register</a></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <script src="login.js"></script>
</main>

</body>
</html>
