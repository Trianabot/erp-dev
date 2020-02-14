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
                            <h2 class="pageheader-title">New Sales Order </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Sales" class="breadcrumb-link">Sales</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">New Sales Order</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row" >
                
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card p-10"  >
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
                               <?php echo form_open(base_url()."Distributor/Neworder");?>
                               <input type="hidden" name="order_By" id="order_By" value="admin">
                               <div class="row"> 
                                 <div class="col-xs-12 col-sm-6 col-md-4 nopadding"> 
                                     <div class="form-group">
                                            <label> Voucher No </label>
                                            <input type="text" name="Voucher_No" id="Voucher_No" class="form-control"> 
                                     </div>
                                        
                                 </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4"> 
                                     <div class="form-group">
                                            <label> Date </label>
                                            <input type="text" name="sale_Date" id="sale_Date" class="form-control"> 
                                     </div>
                                        
                                 </div>
                               </div>
                               <div class="row"> 
                                 <div class="col-xs-12 col-sm-4 col-md-4 nopadding"> 
                                     <div class="form-group">
                                            <label> Branch </label>
                                            <select name="Branch" id="Branch" class="progControlSelect2 form-control">
                                                <option> Select Branch</option>
                                                <?php 
                                                foreach($branchs as $branch){
                                                    ?> 
                                                <option> <?php echo $branch->branch_Master;?></option>    
                                                    <?php
                                                }
                                                ?>
                                            </select> 
                                     </div>
                                 </div>
                                   <div class="col-xs-12 col-sm-4 col-md-4"> 
                                       <div class="form-group">
                                           <label> Party </label>
                                           <select name="Party" id="Party" class="progControlSelect2 form-control">
                                                <option> Select Party</option>
                                                <?php 
                                                foreach($suppliers as $supp){
                                                    ?> 
                                                <option> <?php echo $supp->supp_Master;?></option>    
                                                    <?php
                                                }
                                                ?>
                                            </select> 
                                       </div>

                                   </div>
                                   <div class="col-xs-12 col-sm-4 col-md-4"> 
                                       <div class="form-group">
                                           <label> Division </label>
                                           <select name="Division" id="Division" class="progControlSelect2 form-control">
                                                <option> Select Division</option>
                                                <?php 
                                                foreach($divisions as $division){
                                                    ?> 
                                                <option> <?php echo $division->division_Master;?></option>    
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
                                <select name="sale_ProductName" id="sale_ProductName" class="progControlSelect2 form-control">
                                    <option value="0">Select Product</option>
                                           <?php 
                                            foreach($products as $product){
                                                
                                            $res = $product->Name;
                                            $arr = explode(",",$res);
                                            $result = array_filter($arr);
                                                
                                                 foreach($result as $key => $value){
                                                    ?> 
                                                        <option value="<?php echo $value;?>"><?php echo $value?></option>
                                                    <?php
                                                }       
                                                
                                               

                                            }
                                        
                                            ?>
                                    </select>
                                <label for="sale_ProductName" class="Net_Landing1">Product Code</label>
                            </td>
                            <td class="w-120">
                                <input type="text" class="form-control" name="saleprod_Name" id="saleprod_Name" readonly>
                                <label for="product_Name" class="Net_Landing1">Product name</label>
                            </td>
                            <td class="w-120">
                                <input type="text" class="form-control" name="saleproduct_Quantity" id="saleproduct_Quantity">
                                <label for="Quantity" class="Net_Landing1">Qty</label>
                            </td>
                            <td class="w-120">
                                <input type="text" class="form-control text-right" name="saleproduct_UnitRate" id="saleproduct_UnitRate">
                                <label for="Unit_Rate" class="Net_Landing1">Unit Rate (₹)</label>
                            </td>
                            
                            <td class="w-120">
                                <input type="text" class="form-control text-right" name="Net_Amount" id="Net_Amount" readonly="">
                                <label for="lname" class="Net_Landing1">Net Amount</label>
                            </td>
                            <td class="w-120">
                                <input type="text" class="form-control text-right" name="Net_Landing" id="Net_Landing" readonly="">
                                <label for="Net_Landing" class="Net_Landing1">Net Landing Price</label>
                            </td>
                             <td class="w-120">
                                <input type="text" class="form-control text-right" name="Discount_Perunit" id="Discount_Perunit" readonly="">
                                <label for="Discount_Perunit" class="Net_Landing1">Discount Per Unit</label>
                            </td>
                            
                            
                            <td class="show-btns w-120" style="display:none">
                                <button id="buttonAddItem" type="button" class="btn btn-info btn-lg btn-round btn-pill-right waves-effect waves-classic btn-salesadd float-left btn_sales">Add  &nbsp;</button>
                            </td>
                            <td class="show-btns w-120" style="display:none">
                                <button id="buttonClear" type="button" class="btn btn-danger btn-lg btn-round btn-pill-left waves-effect waves-classic float-left btn_sales">Clear</button>
                            </td>
                           
                   
                            
                            
                        </tr>
                        <tr>
                           
                        </tr>
                        <tbody class="salestable_Body"> 
                        
                        </tbody>
                        
                        </table>
                </div>
                                   

                                   

                               
                               <!--<div class="col-md-12">-->
                               <!--    <button id="btnSubmit" type="submit" class="btn btn-animate btn-animate-side btn-primary waves-effect waves-classic float-right">-->
                               <!--        <span><i class="icon md-shopping-cart" aria-hidden="true"></i> Save Order </span>-->
                               <!--    </button>-->
                               <!--</div>-->
                               </div>
                            </div>
                            
                        </div>
                </div>
              
</div>



