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
</style>

<div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                   
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Orders" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-rocket"></i> Orders History </a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Distributor/Listorders" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>
                                            </li>
                                    
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Retailer/Listretailerorders" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>            
                                            </li>
                                           
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?=($this->uri->segment(2)==='Newretailerorder')?'active':''?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> New Orders </a>
                                <div id="submenu-2" class="<?=($this->uri->segment(2)==='Newretailerorder')?'collapse':''?> submenu" style="">
                                    <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Distributor/Neworder" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>
                                            </li>
                                    
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Retailer/Newretailerorder" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>            
                                            </li>
                                           
                                    </ul>
                                </div>
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


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card p-10">
                              
                               
                               <div class="row"> 
                                 <div class="col-xs-12 col-sm-3 col-md-3"> 
                                       
                                        <img src="http://localhost/erp/assets/icon2/skyzen.png" alt="" class="w-99">
                                        <address>
                            #16/87/1, Moula Nagar,
                            <br>Gollapudi, Vijayawada-520 012
                            <br>Andhra Pradesh
                            <br>
                            <abbr title="GSTIN">GSTIN:</abbr>&nbsp;&nbsp;<span class="h4 f-18">37ABCDE1234FZ1</span>
                        </address>
                                </div>
                                 <div class="col-xs-12 col-sm-5 col-md-5"> 
                                 <div class="row">
                                 <div class="col-md-4">
                                 <h4> Bill To </h4>
                                 </div>
                                 <div class="col-md-8">
                                 <h4> <div class="custom-control custom-checkbox mb-3">
      <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
      <label class="custom-control-label" for="customCheck"><div>Same</div><div> Ship </div> To</label>
    </div> </h4> 
                                 </div>
                                 </div>
                                 <select class="custom-select" id="gender2">
          <option selected>Select Retailer</option>
         
        </select>        
                                 </div>
                                 <div class="col-xs-12 col-sm-4 col-md-4"> 
                                            <div class="row"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <h5> Invoice Date</h5>
                                                    <input type="text" class="form-control" placeholder="Date">
                                               
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <h5>Invoice Ref Number </h5>
                                                    <input type="text" class="form-control" placeholder="">
                                               
                                                </div>
                                            </div>

                                            <div class="row m-17"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <h5> Invoice Due</h5>
                                                    <input type="text" class="form-control" placeholder="">
                                               
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <h5>Delivery Date </h5>
                                                    <input type="text" class="form-control" placeholder="">
                                               
                                                </div>
                                            </div>
                                 </div>
                                 <div class="page-invoice-table table-responsive">
                    <table id="tableOrderItems" class="table table-hover text-right">
                        <thead>
                        <tr>
                            <th class="text-left"></th>
                            <th class="text-left w-350">Item</th>
                            <th class="text-right">HSN</th>
                            <th class="text-right w-120">Qty</th>
                            <th class="text-right">UoM</th>
                            <th class="text-right">Unit Price (₹)</th>
                            <th class="text-right">Taxable Value (₹)</th>
                            <th class="text-right w-120">GST (%)</th>
                                                        <th class="text-right">Discount (₹)</th>
                            <th class="text-right">Total (₹)</th>
                        </tr>
                        </thead>
                        <tbody>
                                                </tbody>
                        <tfoot>
                        <tr>
                            <td></td>
                            <td>
                                <select class="form-control select2" id="inputTableItem">
                                    <option>Select Product</option>
                                                                        <option value="21">STARWYN LED 32</option>
                                                                        <option value="22">STARWYN LED 32 SMART</option>
                                                                        <option value="23">STARWYN LED 40 SMART</option>
                                                                        <option value="24">STARWYN LED 40</option>
                                                                        <option value="25">STARWYN LED 24</option>
                                                                        <option value="26">SKYZEN LED M 24 D</option>
                                                                        <option value="27">SKYZEN LED M32</option>
                                                                        <option value="28">SKYZEN LED M32 SMART</option>
                                                                        <option value="29">SKYZEN WM SD 68</option>
                                                                        <option value="30">SKYZEN WM SD 81</option>
                                                                        <option value="31">SKYZEN WM SD 90</option>
                                                                        <option value="32">WASHER -SZ-802 PLUS BLUE</option>
                                                                        <option value="33">WASHER SZ-W802PLUS-MAROON</option>
                                                                        <option value="34">WASHER SZ-W801PLUS-BLUE</option>
                                                                        <option value="35">WASHER SZ-W801PLUS-GREY</option>
                                                                        <option value="36">WASHER SZ-W801PLUS -MAROON</option>
                                                                        <option value="37">WASHER SZ-W802 PLUS-GREY</option>
                                                                        <option value="38">SZ-WASHER-802</option>
                                                                        <option value="39">SKYZEN LED V24D</option>
                                                                        <option value="40">SKYZEN LED V24E</option>
                                                                        <option value="41">SKYZEN LED M32M</option>
                                                                        <option value="42">SKYZEN LED M32SM</option>
                                                                        <option value="43">SKYZEN LED VQ32</option>
                                                                        <option value="44">SKYZEN LED VVIVO 32 S</option>
                                                                        <option value="45">SKYZEN LED V40</option>
                                                                        <option value="46">SKYZEN LED V40S</option>
                                                                        <option value="47">SKYZEN LED M42</option>
                                                                        <option value="48">SKYZEN LED M42S</option>
                                                                        <option value="49">SKYZEN LED M50S</option>
                                                                        <option value="50">SKYZEN LED V55S</option>
                                                                        <option value="51">SKYZEN LED V65S</option>
                                                                        <option value="52">SKYZEN WATER DIS TAPS 21B FSR</option>
                                                                        <option value="53">SKYZEN LED M55S</option>
                                                                        <option value="54">SKYZEN LED M65S</option>
                                                                        <option value="55">SKYZEN WATER DIS TAPS 21B FS</option>
                                                                        <option value="56">SKYZEN LED V51</option>
                                                                        <option value="57">FRES  HIPPO CHILL</option>
                                                                        <option value="58">SKYZEN WATER DIS TAPS 21B FSC</option>
                                                                        <option value="59">SKYZEN WM SD 85</option>
                                                                        <option value="60">SKY SMILE</option>
                                                                        <option value="61">Hippo Chill 4500</option>
                                                                        <option value="62">Super Cool 16 AL</option>
                                                                        <option value="63">Thunder Cool 18 AL</option>
                                                                        <option value="64">Smart Cool 18AL</option>
                                                                        <option value="65">Smart Cool 18ALH</option>
                                                                        <option value="66">Smart Cool 18ALR</option>
                                                                        <option value="67">Smart Cool 18ALR-H</option>
                                                                        <option value="68">Smart Cool 18ALR-BT</option>
                                                                        <option value="69">Smart Cool 18ALR-BTH</option>
                                                                        <option value="70">Smart Cool INV-R</option>
                                                                        <option value="71">Vibrant 18AL/HPL</option>
                                                                        <option value="72">Vibrant 18AL/HPL-R</option>
                                                                        <option value="73">Vibrant 18AL/HPL-H</option>
                                                                        <option value="74">Vibrant INV-R</option>
                                                                        <option value="75">Vibrant INV-RH</option>
                                                                        <option value="76">Mini Cute</option>
                                                                        <option value="77">Pearl</option>
                                                                        <option value="78">Trendy</option>
                                                                        <option value="79">Evaporative Cooler</option>
                                                                        <option value="80">Super 5000</option>
                                                                        <option value="81">Super Silent 6300</option>
                                                                        <option value="82">Vibrant 5000</option>
                                                                        <option value="83">Vibrant 5000 HC</option>
                                                                        <option value="84">Vibrant 5000 R</option>
                                                                        <option value="85">Vibrant 5000 HCR</option>
                                                                        <option value="86">FRES SMILE</option>
                                                                        <option value="87">Smart Cool 18 ALR - H LCD</option>
                                                                        <option value="88">Smart Cool 18 ALR LCD</option>
                                                                        <option value="89">Vibrant 18AL-R H</option>
                                                                        <option value="90">MINI CUTE REMOTE</option>
                                                                        <option value="91">SMARTCOOL INV-RH USB</option>
                                                                        <option value="92">SKY SMARTCOOL INV-RH LCD</option>
                                                                        <option value="93">SKY LED V INTEL40S</option>
                                                                        <option value="94">THUNDER COLL 18 AL LIGHT</option>
                                                                        <option value="95">SKYZEN WM SD 72R</option>
                                                                        <option value="96">SKYZEN WM SD 75 P</option>
                                                                        <option value="97">SKYZEN LED M40</option>
                                                                        <option value="98">SKYZEN LED M32G</option>
                                                                        <option value="99">SMARTCOOL 18ALRH BT LCD USB</option>
                                                                        <option value="100">SMARTCOOL  18ALR-H-USB</option>
                                                                        <option value="101">SKY WASHER SZ900</option>
                                                                        <option value="102">SMARTCOOL 18ALR LCDH USB</option>
                                                                    </select>
                            </td>
                            <td><input type="text" class="form-control" id="inputTableHSN" readonly=""></td>
                            <td class="w-120"><input type="number" class="form-control" id="inputTableQty"></td>
                            <td><input type="text" class="form-control" id="inputTableUoM"></td>
                            <td><input type="text" class="form-control text-right" id="inputTableUnitPrice"></td>

                            <td><input type="text" class="form-control text-right" id="inputTableTaxValue" readonly=""></td>
                            <td class="w-120">
                                <input type="text" class="form-control text-right" id="inputTableGST" readonly="">
                                <input type="hidden" id="inputTableGSTValue" value="">
                            </td>
                            <td>
                                <input type="text" class="form-control text-right" id="inputTableDiscount">
                                <input type="hidden" id="inputTableDiscountTotal">
                            </td>
                            <td><input type="text" class="form-control text-right" id="inputTableTotal" readonly=""></td>
                        </tr>
                        <tr>
                            <td colspan="12" class="text-center show-buttons" style="display: none;">
                                <button id="buttonClearItems" type="button" class="btn btn-danger btn-lg btn-round btn-pill-left waves-effect waves-classic">Clear</button>
                                <button id="buttonAddItem" type="button" class="btn btn-info btn-lg btn-round btn-pill-right waves-effect waves-classic">Add  &nbsp;</button>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
<div class="col-md-12 m-top">
                <div class="text-right clearfix">
                    <div class="float-right">
                        <p>Sub Total: ₹&nbsp;<span class="orderSubTotal">0</span></p>
                        <p>GST: ₹&nbsp;<span class="orderGST">0</span></p>
                        <p>Discount: ₹&nbsp;<span class="orderDiscount">0</span></p>
                        <p class="page-invoice-amount">Grand Total: ₹&nbsp;<span class="orderTotal">0</span></p>
                        <input type="hidden" id="Tax" name="order[tax]" value="">
                        <input type="hidden" id="OrderDiscountTotal" name="order[discount]" value="">
                        <input type="hidden" id="GrandTotal" name="order[grandtotal]" value="">
                    </div>
                </div>
                </div>
<div class="col-md-12">
<button id="btnSubmit" type="submit" class="btn btn-animate btn-animate-side btn-primary waves-effect waves-classic float-right">
                        <span><i class="icon md-shopping-cart" aria-hidden="true"></i> Save Invoice</span>
                    </button>
</div>
                               </div>
                            </div>
                            
                        </div>
                </div>
              
</div>
</div>

                