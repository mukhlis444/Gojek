
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport"content='width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
  <title>Gojek IIlkomp</title>
  <link rel="stylesheet" href="ladun/css/auth.css">
  <link rel="stylesheet"
href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script
src="https://ajax.loogleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
  <div class="lowin lowin-red">
    <div class="lowin-brand">
      <img src="asset/img/logo.png" alt="logo">
    </div>
    <div class="lowin-wrapper">
      <div class="lowin-box lowin-login">
        <div class="lowin-box-inner">

            <p>Gojek IIkomp<br/>
            Member Register Page</p>

        <div class="lowin-box-inner"id='divFormDaftar'>

             <p>Let's create your account</p>
             <div class="lowin-group">
               <label>Name</label>
               <input type="email"
autocomplete="email"id='txtEmail' name="email"class="lowin-input">
           </div>
        <div class="lowin-group">
          <label>Password</label>
          <input type="password"
name="password"id='txtPassword'
autocomplete="current-password" class="lowin-input">
         </div
         <div class="lowin-group">
            <label>Password</label>
            <input type="password"
name="password" id='txtPassword'
autocomplete="current-password" class="lowin-input">
          </div>
       <div style='text-align:center;padding-bottom:
12px;'id=divCapcha'>

        </div>
        <div style='text-align:center;padding-bottom:
12px;'id='statLogin'>
        </div>
            <button class="lowin-btn"
id='btnDaftar'>Sign Up</button>
           
           <div class="text-foot">
             Already have an account? <a
href="index.html" class="login-link">Login</a>
            </div>

         </div>



         </div>
       </div>

    </div>

    <fooster class="lowin-footer">
      Gojek IIkomp
    </footer>
  </div>


  <script scr="ladun/js/auth.js"></scipt>
  <script>
    Auth.init({
      login-url:'#login'
      forgot-url:#url:'forgot'
    });
   </scprit>
</body>
</html>