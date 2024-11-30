<?php
  
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Auth</title>
    <!-- fontawesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <style>
         *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
         }

         body{
            background: #001F3F;
            color: #F5F5F5;
         }

         .authContainer{
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            /* text-align: center; */
            margin-top: 30px;
            background: #384B70;
            border-radius: 8px;
         }


         .loginForm{
            margin-top: 40px;
         }

         .formInput{
            width: 50%;
            padding: 8px;
            border: 1px solid #fff;
            margin-top: 10px;
            border-radius: 8px;
         }

         .passwordWrapper{
            position: relative;
         }
         
         .eyeIcon{
            position: absolute;
            top: 62%;
            left: 352px;
            color: #000;
            transform: translateY(-50%);
            cursor: pointer;
         }

      </style>
 </head>
 <body>
 
   <div class="authContainer">
      <div>
         <div>
            <h2>Simple Auth Example <i style="margin-left: 20px; color: red;" class="fa-solid fa-right-to-bracket"></i></h2>

            <p style="margin-top: 20px;">Hello stranger, Login blew <i style="margin-left: 10px;" class="fa-solid fa-hand-point-down"></i></p>
         </div>
        
         <div class="loginForm">
         <form action="">
            <div>
               <label style="font-weight: bold" for="userName"> User Name <i style="margin-left: 10px;" class="fa-solid fa-user"></i></label> <br>

               <input class="formInput" type="text" name="userName" placeholder="Enter your username">

            </div>

            <div style="margin-top: 20px">
               <label style="font-weight: bold" for="userName"> Password <i style="margin-left: 10px;" class="fa-solid fa-lock"></i> </label> <br>

              <div class="passwordWrapper">
              <input id="passwordField" class="formInput" type="password" name="userName" placeholder="Enter your password">

              <i id="eyeIcon" class="fa-solid fa-eye eyeIcon"></i>
              </div>

            </div>
         </form>
         </div>
      </div>
   </div>
   
<script>

   const passwordField =document.getElementById('passwordField');

   const eyeIcon =document.getElementById('eyeIcon');

   eyeIcon.addEventListener('click', () => {
      // toggle password visibilty //
      if( passwordField.type === 'password' ){
         passwordField.type = 'text';
         eyeIcon.classList.remove('fa-eye');
         eyeIcon.classList.add('fa-eye-slash');
      }else {
         passwordField.type = 'password';
         eyeIcon.classList.remove('fa-eye-slash');
         eyeIcon.classList.add('fa-eye');
      }
   })

</script>
 </body>
 </html>