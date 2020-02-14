


        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Set Sales target </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Sales target</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                    
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <?php
    if($this->session->tempdata("upd_succ"))

    {

        echo "<div class='alert alert-success'>".$this->session->tempdata("upd_succ")."</div>";

    }

                                        ?>
                            <?php
    if($this->session->tempdata("upd_error"))

    {

        echo "<div class='alert alert-warning'>".$this->session->tempdata("upd_succ")."</div>";

    }

                                        ?>
                            </div>
                        </div>
                         
                        
                       
                    </div>
                </div>
