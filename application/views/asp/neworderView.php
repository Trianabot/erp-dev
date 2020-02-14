<style>
.p-10{
    padding:27px !important;
}
.w-99{
    width:99px !important;
}
.f-18{
    font-size: 18px;
}
h5{
    margin-bottom:0px !important;
}
.m-17{
    margin-top:17px;
}
.text-right{
    text-align:right !important;
}
.float-right{
    float:right !important;
}
.m-top{
    margin-top:30px;
}
.page-invoice-amount {
    margin-bottom: 40px;
    padding-top: 10px;
    font-size: 20px;
    border-top: 1px solid #dee2e6;
}
    
    .ship_Section{
        padding-left: 40px;
    }    
    
 #distprodutName{
    width: 150px;
 }   
 #inputTableUnitPrice{
    width: 96px;
 }
   
.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}
    .dealer{
      float: left;
  width: 40%;
  margin-top: 6px;
        
    }
    
.dealer-name{
  float: left;
  width: 60%;
  margin-top: 6px;
        
    }
select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem + -2px);
}

    
</style>





        
        
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
             
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">New Order </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Asp" class="breadcrumb-link">Orders</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">New Order</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="row margin0 grey">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <span class="table-title">New Order</span>

                                <a href="<?php echo base_url()?>Asp/ordersHisotry"> <h5 class="card-header1">  View Orders  </h5> </a>
                                </div>
                                </div>
                                
                                
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        
                                        <div class="card p-10">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                              <?php
                                                if($this->session->tempdata("add_success"))
                                                {
                                                echo "<div class='alert alert-success succ-msg' role='alert'>".$this->session->tempdata("add_success")."</div>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                            
                                        
                                            <?php echo form_open(base_url()."Asp/newOrders");?>
                               <input type="hidden" name="order_By" id="order_By" value="admin">
                               <div class="row"> 
                                 
                                    <div class="col-xs-12 col-sm-4 col-md-4"> 
<!--
                                     <div class="form-group">
                                            <label> Date </label>
                                            <input type="text" name="asporderDate" id="asporder_Date" class="form-control"> 
                                     </div>
-->
                                        
                                        <div class="form-group">
                                            <label> Order Date </label>
                                            <input type="text" name="asporder_Date" id="Voucher_No1" class="form-control" autocomplete='off'> 
                                            <span class='text-danger'><?php echo form_error("asporder_Date");?></span>
                                     </div>
                                        
                                 </div>
                                
                                   <div class="col-xs-12 col-sm-4 col-md-4 nopadding"> 
                                     <div class="form-group">
                                            <label> Brand Name </label>
                                         <select name="partbrand_Name" id="partbrand_Name" class="form-control">
                                            <option value='0'>Select Brand</option>
                                            <option value='Skyzen'>Skyzen</option>
                                         </select>
                                         <span class='text-danger'><?php echo form_error('partbrand_Name');?></span>
                                     </div>
                                        
                                 </div>
                                   
                                 <div class="col-xs-12 col-sm-4 col-md-4"> 
                                       <div class="form-group">
                                           <label> Product Category</label>
                                           <select name="asppartCategory_Name" id="asppartCategory_Name" class="form-control">
                                                <option> Select Product Category</option>
                                                <?php 
                                               
                                                foreach($products as $product){
                                                    ?> 
                                                <option value='<?php echo $product->Category;?>'> <?php echo $product->Category;?></option>    
                                                    <?php
                                                }
                                                ?>
                                            </select>  
                                       </div>

                                   </div>
                                   
                               </div>
                             
                      
                <div class="row"> 
                        <table class="table-responsive"> 
                        <tr>
                            <td class="w-120">
                                <select name="parts_Id" id="asp_sparepartName" class="form-control">
                                    
                                    </select>
                                <label for="asp_ProductName" class="Net_Landing1">Parts</label>
                            </td>
                            
                            <td class="w-120">
                                <input type="text" class="form-control" name="aspproduct_Quantity" id="aspproduct_Quantity">
                                <label for="aspproduct_Quantity" class="Net_Landing1">Qty</label>
                            </td>
                            <td class="w-120">
                                <input type="text" class="form-control text-right" name="aspproduct_UnitRate" id="aspproduct_UnitRate" readonly="readonly">
                                <label for="Unit_Rate" class="Net_Landing1">Unit Rate (₹)</label>
                            </td>
                            
                            <td class="w-120">
                                <input type="text" class="form-control text-right" name="aspNet_Amount" id="aspNet_Amount" readonly="">
                                <label for="lname" class="Net_Landing1">Net Amount</label>
                            </td>
                            <td class="w-120">
                                <input type="text" class="form-control text-right" name="aspNet_Landing" id="aspNet_Landing" readonly="">
                                <label for="Net_Landing" class="Net_Landing1">Net Landing Price</label>
                            </td>
                             <td class="w-120">
                                <input type="text" class="form-control text-right" name="aspDiscount_Perunit" id="aspDiscount_Perunit" readonly="">
                                <label for="Discount_Perunit" class="Net_Landing1">Discount Per Unit</label>
                            </td>
                            
                            
                            <td class="show-btns w-120" style="display:none">
                                <button id="buttonAddItem" type="button" class="btn btn-info btn-lg btn-round btn-pill-right waves-effect waves-classic btn-asporderadd float-left">Add  &nbsp;</button>
                            </td>
                            <td class="show-btns w-120" style="display:none">
                                <button id="buttonClear" type="button" class="btn btn-danger btn-lg btn-round btn-pill-left waves-effect waves-classic float-left">Clear</button>
                            </td>
                           
                   
                            
                            
                        </tr>
                        <tr>
                           
                        </tr>
                        <tbody class="aspordertable_Body"> 
                        
                        </tbody>
                        
                        </table>
                </div>
                <div class="row">
                    <div class='col-xs-12 col-sm-12 col-md-12'>
                        <div class="form-group">
                            <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
                        </div>
                    </div>
                </div>
                <?php echo form_close();?>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            
                
                  
                
                
                
                
                </div>
              
</div>

<div class="modal fade" id="orderaspModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">                   
                    <h4 class="modal-title">Order Status</h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center"><?php echo $this->session->flashdata('addorder_success')?></h5>
                    <h5 class="text-center">
                        <?php echo $this->session->userdata('neworder')?></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

