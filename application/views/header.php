<?php 
if(!$this->session->has_userdata("email"))
{
redirect(base_url()."login");
}

 
                                       
                                        //$name = $result->first_name();
                                           

?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Skyzen</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
    <link href="<?php echo base_url()?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/libs/css/tbstyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/fonts/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/jqueryui/dataTables.jqueryui.css"> -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
     <link href="<?php echo base_url()?>assets/libs/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
     <link rel="stylesheet" href="<?php echo base_url()?>assets/libs/css/jquery.multiselect.css">
     <style>
          .dataTables_wrapper {
    position: relative;
    clear: both;
    *zoom: 1;
    zoom: 1;
  
}
div.container { max-width: 1200px }
.error {
    color: red;
}


     </style>
      <script type="text/javascript">
    var baseURL= "<?php echo base_url();?>";
    </script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg fixed-top">
                <?php 
$role = $this->session->userdata('userrole');
if($role == 1){
    ?> 
        <a class="navbar-brand" href="<?php echo base_url()?>Home"><img src="<?php echo base_url()?>assets/icon2/skyzen.png" alt="" style="width: 18%;"></a>
        <?php
    //redirect(base_url()."Login");
}else if($role == 2) {
     ?> 
        <a class="navbar-brand" href="<?php echo base_url()?>Crm"><img src="<?php echo base_url()?>assets/icon2/skyzen.png" alt="" style="width: 18%;"></a>
        <?php
}else if($role == 7){
     ?> 
        <a class="navbar-brand" href="<?php echo base_url()?>Asp"><img src="<?php echo base_url()?>assets/icon2/skyzen.png" alt="" style="width: 18%;"></a>
        <?php
}else if($role == 9){
    ?> 
       <a class="navbar-brand" href="<?php echo base_url()?>Coordinate"><img src="<?php echo base_url()?>assets/icon2/skyzen.png" alt="" style="width: 18%;"></a>         
    <?php
}else if($role == 8){
    ?> 
       <a class="navbar-brand" href="<?php echo base_url()?>ServiceEngineer"><img src="<?php echo base_url()?>assets/icon2/skyzen.png" alt="" style="width: 18%;"></a>         
    <?php
}else if($role == 4){
    ?> 
       <a class="navbar-brand" href="<?php echo base_url()?>Retailer"><img src="<?php echo base_url()?>assets/icon2/skyzen.png" alt="" style="width: 18%;"></a>         
    <?php
}
?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url()?>assets/images/atar.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2" style="margin-top:38px;">
                                <div class="nav-user-info">
                                    <?php 
                                    if($role == 1){
                                        ?> 
                                        <h5 class="mb-0 text-white nav-user-name">Admin</h5>
                                        <?php
                                    }else if($role == 2){
                                        ?> 
                                        <h5 class="mb-0 text-white nav-user-name">CRM</h5>
                                        <?php
                                    }else if($role == 7){
                                         $id = $this->session->userdata('id');
                                        $query = $this->db->query("select * from users where id=$id");
                                        $result = $query->row();
                                        ?> 
                                       
                                        <h5 class="mb-0 text-white nav-user-name">
                                            <?php echo $result->contact_Person;?>
                                        </h5>
                                        <?php
                                    }else if($role == 9){
                                         $id = $this->session->userdata('id');
                                        $query = $this->db->query("select * from users where id=$id");
                                        $result = $query->row();
                                        ?> 
                                       
                                        <h5 class="mb-0 text-white nav-user-name">
                                            <?php echo $result->contact_Person;?>
                                        </h5>
                                        <?php
                                    }else if($role == 8){
                                         $id = $this->session->userdata('id');
                                        $query = $this->db->query("select * from users where id=$id");
                                        $result = $query->row();
                                        ?> 
                                       
                                        <h5 class="mb-0 text-white nav-user-name">
                                            <?php echo $result->contact_Person;?>
                                        </h5>
                                        <?php
                                    }else if($role == 4){
                                         $id = $this->session->userdata('id');
                                        $query = $this->db->query("select * from users where id=$id");
                                        $result = $query->row();
                                        ?> 
                                       
                                        <h5 class="mb-0 text-white nav-user-name">
                                            <?php echo $result->contact_Person;?>
                                        </h5>
                                        <?php
                                    }
                                    ?>
                                    
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Profile Setting</a>
                                <a class="dropdown-item" href="<?php echo base_url()?>Login/logout"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                        
                        
                         
                        
                    </ul>
                </div>
            </nav>
        </div>

             
        
        