<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
<link href="<?php echo base_url();?>asset/login/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>asset/login/custom.min.css" rel="stylesheet">
  
 </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
           <form class="form-signin" action="<?= site_url('login/cek_login')?>" method="post">  
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="npp" placeholder="NPP" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div><input type="submit" class="btn btn-default submit" value="Log in">
<!---
                <a class="reset_pass" href="#" onclick="return confirm('email: kae@venus.com  pass: admin')">Lost your password?</a>
-->			  
				
              </div>

              <div class="clearfix"></div>
              <div class="separator">

            <?php
            $message = $this->session->flashdata('notif');
            if($message){
            echo '<p class="alert alert-danger text-center">'.$message .'</p>';
            }?>
<!---
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1> Venus Multimedia</h1>
                  <p>©2017 All Rights Reserved. Designed is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
                <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
-->
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
