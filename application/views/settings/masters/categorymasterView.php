
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Category</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                             <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Category Lists</span>
                              <a href='<?php echo base_url()?>Setting/addcategoryMaster'> <h5 class="card-header1"> Add Category </h5></a>
                              <a href="<?php echo base_url()?>Setting/bulkcategoryMaster"> <h5 class="card-header1"> Bulk Categories </h5> </a>
                                </div>
                            </div>
                               
                                 
<div class="card">
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Brand Name</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Category Alias Name</th>  
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                        $i = 1;
                                         if($categories){
                                             foreach($categories as $category){
                                               ?> 
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $category->brand_Name;?></td>
                                                <td><?php echo $category->category_Name;?></td>
                                                <td><?php echo $category->category_Alias;?></td>
                                                <td></td>
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
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
</div>
</div>

<script>
         <!--
            function display() {
               alert("Hello World")
            }
         //-->
      </script>