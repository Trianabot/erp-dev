
        
   
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Product HSN </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products" class="breadcrumb-link">Products</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products/ProductHSN" class="breadcrumb-link">Products HSN</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Product HSN List</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                            <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Product HSN Lists</span>
                               
                                <a href="<?php echo base_url()?>Products/addproductHSN"> <h5 class="card-header1">  Add HSN </h5> </a>
                                </div>
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">S No</th>
                                                <th scope="col">Product HSN</th>
                                                <th scope="col">GST</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        if($hsncodes){
                                            $i=1;
                                            foreach($hsncodes as $hsn){
                                                ?> 
                                                <tr> 
                                                    <td> <?php echo $i;?> </td>
                                                    <td> <?php echo $hsn->producthsn_Code;?> </td>
                                                    <td> <?php echo $hsn->product_GST.'%';?> </td>
                                                    <td> 
                                                        <a href="<?php echo base_url()?>Products/edithsnCode/<?php echo $hsn->producthsn_Id;?>" class="editbtn"> Edit </a>
                                                        <a href="<?php echo base_url()?>Products/deletehsnCode/<?php echo $hsn->producthsn_Id;?>" class="deletebtn"> Delete </a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
</div>
</div>

           