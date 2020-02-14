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

<div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Sales</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Distributors" ><i class="fa fa-fw fa-user-circle"></i>Overview</a>                            
                        </li>

                                        <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Distributors/orders" ><i class="fa fa-fw fa-user-circle"></i> Orders History</a>
                            </li>

                            <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Distributors/neworder" ><i class="fa fa-fw fa-user-circle"></i> New Order</a>
                            </li>
                        
                      
                            <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Distributors/shipment" ><i class="fa fa-fw fa-user-circle"></i> Shipment </a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>



        
        
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
             
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">New Order </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Orders" class="breadcrumb-link">Orders</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Distributor/Listorders" class="breadcrumb-link">List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">New Order</li>
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
                               <?php echo form_open(base_url()."Distributors/neworder");?>
                               <div class="row"> 
                                 <div class="col-xs-12 col-sm-4 col-md-4"> 
                                    
                                            <input type="hidden" name="distributor_Name" id="distributor_Name" value="<?php echo $distributor->distributor_Id;?>">
                                            <input type="hidden" name="order_By" id="order_By" value="<?php echo $distributor->distributor_Id;?>">
                                        <!-- <select class="custom-select" id="distributor_Name" name="distributor_Name">
                                       
                                        </select> -->
                                     
                                        <div class="distributorBasic"> 
                                                    <h5> Company Name : <?php echo $distributor->comporganization_Name;?></h5>
                                                    <h5> Contact Person: <?php echo $distributor->contact_Person;?></h5>  
                                                    <h5> Contact Number: <?php echo $distributor->dist_Mobile;?> </h5> 
                                                    <h5> GSTIn : <?php echo $distributor->dist_GSTIN;?></h5>
                                                    <h5> Address : <?php echo $distributor->dist_Address1;?></h5> 
                                        </div>
                                </div>
                                   
                                   
                                 <div class="col-xs-12 col-sm-4 col-md-4"> 
                                            <h4> <div class="custom-control custom-checkbox mb-3 d-flex">
                                                <input type="checkbox" class="checkShip custom-control-input" id="same_Shipping" name="same_Shipping" onchange="valueChanged()" value="1">
                                                <label class="custom-control-label" for="same_Shipping">
                                                        <div>Same</div>                                                        
                                                </label>

                                                <div class="row"> 
                                                    <div class="ship_Section"> 
                                                        <h4> Ship To  </h4>
                                                        <div class="form-group"> 
                                                                <label > Name: </label>
                                                                <input type="text" name="shipping_Personname" id="shipping_Personname" class="form-control">
                                                        </div>
                                                       
                                                       <div class="form-group">
                                                            <label>Address</label>
                                                        
                                                                <textarea id="shipping_Address" name="shipping_Address" class="form-control"></textarea>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                </div> 
                                            </h4> 
                                 </div>
                                   
                                   
                                 <div class="col-xs-12 col-sm-4 col-md-4"> 
                                            <div class="row"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <h5> Invoice Date</h5>
                                                    <input type="text" class="form-control" name="invoice_Date" id="invoice_Date">
                                               <span class="text-danger"><?php echo form_error("invoice_Date");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <h5>Invoice Ref Number </h5>
                                                    <input type="text" class="form-control" name="invocie_RefNumber" id="invoice_RefNumber">
                                               
                                                </div>
                                            </div>

                                            <div class="row m-17"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <h5> Invoice Due</h5>
                                                    <select class="form-control" name="invoice_Due" id="invoice_Due"> 
                                                        <option> Due on Receipt </option>
                                                        <option> After 7 days </option>
                                                        <option> After 15 days </option>
                                                        <option> After 30 days </option>
                                                        <option> After 45 days </option>
                                                        <option> After 60 days </option>
                                                        <option> Custom </option>
                                                    </select>
                                               
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <h5>Delivery Date </h5>
                                                    <input type="text" class="form-control" name="delivery_Date" id="delivery_Date">
                                               
                                                </div>
                                            </div>
                                 </div>
                                   
                                   
                <div class="col-md-12" style="padding-top: 30px;" >                   
                <div class="row"> 
                        <table class="table-responsive"> 
                        <tr>
                            <td>
                                <select class="form-control select2" id="product_Name" name="product_Name">
                                    
                                    <option value="0">Select Product</option>
                                    <?php 
                                    foreach($products as $product){
                                        ?> 
                                        <option value="<?php echo $product->product_Id;?>"><?php echo $product->product_Name;?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                <label for="lname">Product</label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="product_HSN" id="product_HSN" readonly="">
                                <label for="lname">HSN</label>
                            </td>
                            <td class="w-120">
                                <input type="text" class="form-control" name="product_Qty" id="product_Qty">
                                <label for="lname">Qty</label>
                            </td>
                            <td>
                                <input type="text" class="form-control text-right" name="product_Unitprice" id="product_Unitprice" readonly="">
                                <label for="lname">Unit Price (₹)</label>
                            </td>
                            <td>
                                <input type="text" class="form-control text-right" name="product_Value" id="product_Value" readonly="">
                            <label for="lname">Taxable Value (₹)</label>
                            </td>
                            <td class="w-120">
                                <input type="text" class="form-control text-right" name="product_GST" id="product_GST" readonly="">
                                
                                <input type="hidden" name="inputGST" id="inputGST">
                                <label for="lname">GST (%)</label>
                            </td>
                            <td>
                                <input type="text" class="form-control text-right" name="product_Discount" id="product_Discount">
                                <input type="hidden" name="inputDiscount" id="inputDiscount">
                                <label for="lname">Discount</label>
                            </td>
                            <td>
                                <input type="text" class="form-control text-right" name="product_Total" id="product_Total" readonly="">
                            <label for="lname">Total</label>
                            </td>
                            
                            <td>
                            <td colspan="12" class="text-center show-buttons" style="display:none">
                                <button id="buttonClearItems" type="button" class="btn btn-danger btn-lg btn-round btn-pill-left waves-effect waves-classic">Clear</button>
                                <button id="buttonAddItem" type="button" class="btn btn-info btn-lg btn-round btn-pill-right waves-effect waves-classic btn-add">Add  &nbsp;</button>
                            </td>
                           
                    </button>
                                </td>
                            
                        </tr>
                        <tr>
                           
                        </tr>
                        <tbody class="table_Body"> 
                        
                        </tbody>
                        </table>
                </div>
              </div>
                                   

                                   

<div class="col-md-12 m-top">
                <div class="text-right clearfix">
                    <div class="float-right">
                    <div class="form-group row">
                        <label for="totalAmount" class="col-3 col-lg-4 col-form-label text-right">Sub Total:</label>
                            <div class="col-9 col-lg-8">
                             <input type="text" id="totalAmount" name="totalAmount" placeholder=" ₹ 0" class="form-control">
                              </div>
                            </div>
                        
                        <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-4 col-form-label text-right">GST: </label>
                            <div class="col-9 col-lg-8">
                             <input type="text" id="totalGST" name="totalGST" class="form-control">
                              </div>
                            </div>
                        
                        <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-4 col-form-label text-right">Discount:</label>
                            <div class="col-9 col-lg-8">
                             <input type="text"  id="totalDiscount" name="totalDiscount" class="form-control">
                              </div>
                            </div>
                        
                        <div class="page-invoice-amount form-group row">
                            
                            <div class="col-3 col-lg-6 text-left">
                        <p class="">Grand Total: ₹&nbsp;<span class="orderTotal">0</span></p></div>
                        <div class="col-9 col-lg-6">
                             <input id="final_Result" name="final_Result" placeholder="₹ 0" class="form-control">
                              </div>
                        </div>
                    </div>
                </div>
                </div>
<div class="col-md-12">
<button id="btnSubmit" type="submit" class="btn btn-animate btn-animate-side btn-primary waves-effect waves-classic float-right">
                        <span><i class="icon md-shopping-cart" aria-hidden="true"></i> Save Order </span>
                    </button>
</div>
                               </div>
                            </div>
                            
                        </div>
                </div>
              
</div>
</div>

<script type="text/javascript"> 


function valueChanged()
{
    if($('.checkShip').is(":checked"))   
        //$(".ship_Section").hide();
        $('.ship_Section').fadeOut();
        else
        $(".ship_Section").fadeIn();        
}
</script>
