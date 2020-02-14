<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo base_url()?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
 .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('<?php echo base_url()?>assets/images/load.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
</style>
   
<script type="text/javascript">
$(window).load(function() {
     function show_popup(){
      $(".loader").fadeOut("slow");
   };
   window.setTimeout( show_popup, 5000 ); // 5 seconds
    //$(".loader").fadeOut("slow")    ;
});
</script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ====================== ======================================== -->
     <!-- <div class="loader"></div> -->
    <div class="splash-container">
        <div class="card ">    
            <div class="card-header text-center"><a href="#"><img class="logo-img" src="<?php echo base_url()?>assets/icon2/skyzen.png" alt="logo" style="width:80px;"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                    <?php 
                        if($this->session->tempdata("username_error"))
                        {
                            ?>
                          <div class="alert alert-danger">
                              <?php echo $this->session->tempdata("username_error"); ?>
                          </div>
                          <?php
                        }
                        if($this->session->tempdata("pwd_error"))
                        {
                            ?>
                          <div class="alert alert-danger">
                              <?php echo $this->session->tempdata("pwd_error"); ?>
                          </div>
                          <?php
                        }

                    ?>
                <?php echo form_open(base_url()."Login");?>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="email" id="email" type="text" placeholder="Email" autocomplete="off" value="<?php if(get_cookie('email')){echo $this->input->cookie('email');}?>" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password" value="<?php if(get_cookie('password')){echo $this->input->cookie('password');}?>" required>
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="remember" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" name="loginSubmit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                <?php echo form_close();?>
            </div>
           
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

</body>
 
</html>