<?php 
if($this->uri->segment(1) ==='Products'){
    
    ?> 
<div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                   
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                       <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url()?>Products" ><i class="fa fa-eye" aria-hidden="true"></i> Overview</a>
                            </li> 
                        <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-rocket"></i> Product Settings </a>
                                <div id="submenu-3" class="<?=( ( $this->uri->segment(2) !=='Category' && $this->uri->segment(2) !=='Brand' && $this->uri->segment(2) !=='addBrand' && $this->uri->segment(2) !=='editBrand' && $this->uri->segment(2) !=='Subcategory' && $this->uri->segment(2) !=='addCategory' && $this->uri->segment(2) !=='editCategory' && $this->uri->segment(2) !=='addSubCategory' && $this->uri->segment(2) !=='editSubcategory' && $this->uri->segment(2) !=='ProductHSN' && $this->uri->segment(2) !=='addproductHSN'  && $this->uri->segment(2) !=='edithsnCode' ) ?'collapse': '')?> submenu">
                                    <ul class="nav flex-column">
                                    <li class="nav-item">
                                          <a class="nav-link" href="<?php echo base_url()?>Products/Brand" ><i class="fa fa-fw fa-user-circle"></i>Brand</a>
                                    </li>
                            
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Products/Category" ><i class="fa fa-fw fa-user-circle"></i>Category</a>            
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Products/Subcategory" ><i class="fa fa-fw fa-user-circle"></i>Sub Category</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Products/ProductHSN" ><i class="fa fa-fw fa-user-circle"></i>Products HSN</a>
                                    </li>
                                    
                                    </ul>
                                </div>
                            </li>

                        <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='Lists')?'active':''?>" href="<?php echo base_url()?>Products/Lists" ><i class="fa fa-fw fa-user-circle"></i>Products List</a>
                            </li>
<!-- 
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url()?>Products/ProductHSN" ><i class="fa fa-fw fa-user-circle"></i>Products HSN</a>
                            </li> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    <?php
}else if($this->uri->segment(1) ==='Stock'){
    ?>

<div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Stock</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(1)==='Stock')?'active':''?>" href="<?php echo base_url()?>Stock" ><i class="fa fa-eye" aria-hidden="true"></i>Overview</a>
                                
                            </li>

                            <!-- <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='Warehouse')?'active':''?>" href="<?php echo base_url()?>Stock/Warehouse" ><i class="fa fa-fw fa-user-circle"></i>Warehouse</a>
                                
                            </li> -->
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-rocket"></i> Manufacture Stock</a>
                                 <div id="submenu-1" class="<?=(( $this->uri->segment(2) !=='skyzenproductStock' && $this->uri->segment(2) !=='skyzenpartStock') ?'collapse': '')?> submenu" style="">
                                <!--<div id="submenu-1" class="collapse submenu" style="">-->
                                    <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Stock/skyzenproductStock" ><i class="fa fa-fw fa-user-circle"></i>Product</a>
                                            </li>
                                    
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Stock/skyzenpartStock" ><i class="fa fa-fw fa-user-circle"></i>Parts</a>            
                                            </li>
                                           
                                    </ul>
                                </div>
                            </li>
                            
                            <!--<li class="nav-item">-->
                            <!--    <a class="nav-link <?=($this->uri->segment(2)==='distributorStock')?'active':''?>" href="<?php echo base_url()?>Stock/distributorStock" ><i class="fa fa-fw fa-user-circle"></i>At Distributor</a>-->
                                
                            <!--</li>-->
                            
                            <!--<li class="nav-item ">-->
                            <!--    <a class="nav-link <?=($this->uri->segment(2)==='retailerStock')?'active':''?>" href="<?php echo base_url()?>Stock/retailerStock" ><i class="fa fa-fw fa-user-circle"></i>At Retailer</a>-->
                            <!--</li>-->
                            
                            <!--<li class="nav-item ">-->
                            <!--    <a class="nav-link <?=($this->uri->segment(2)==='retailerStock')?'active':''?>" href="<?php echo base_url()?>Stock/aspStock" ><i class="fa fa-fw fa-user-circle"></i>At Asp</a>-->
                            <!--</li>-->
                            
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    <?php
}else if($this->uri->segment(1) ==='Orders'){
    ?> 
        <div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                   
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                    <a class="nav-link <?=($this->uri->segment(1)==='Orders')?'active':''?>" href="<?php echo base_url()?>Orders" ><i class="fa fa-eye" aria-hidden="true"></i>Overview</a>
                            </li>
<!--
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-rocket"></i> Distributors</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Orders/distributororder" ><i class="fa fa-fw fa-user-circle"></i>Distributor Order</a>
                                            </li>
                                    
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Orders/ditributorHistory" ><i class="fa fa-fw fa-user-circle"></i>History</a>            
                                            </li>
                                           
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> Retailer</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Orders/retailerorder" ><i class="fa fa-fw fa-user-circle"></i>Retailer Order</a>
                                            </li>
                                    
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Orders/retailerHistory" ><i class="fa fa-fw fa-user-circle"></i>Retailer History</a>            
                                            </li>
                                           
                                    </ul>
                                </div>
                            </li>
-->
                    <!--    <li class="nav-item">-->
                    <!--            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-rocket"></i> Orders History</a>-->
                    <!--            <div id="submenu-1" class="collapse submenu" style="">-->
                    <!--                <ul class="nav flex-column">-->
                    <!--                        <li class="nav-item">-->
                    <!--                            <a class="nav-link" href="<?php echo base_url()?>Distributor/Listorders" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>-->
                    <!--                        </li>-->
                                    
                    <!--                        <li class="nav-item">-->
                    <!--                            <a class="nav-link" href="<?php echo base_url()?>Retailer/Listretailerorders" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>            -->
                    <!--                        </li>-->
                                           
                    <!--                </ul>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--    <li class="nav-item">-->
                    <!--            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> New Orders </a>-->
                    <!--            <div id="submenu-2" class="collapse submenu" style="">-->
                    <!--                <ul class="nav flex-column">-->
                    <!--                        <li class="nav-item">-->
                    <!--                            <a class="nav-link" href="<?php echo base_url()?>Distributor/Neworder" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>-->
                    <!--                        </li>-->
                                    
                    <!--                        <li class="nav-item">-->
                    <!--                            <a class="nav-link" href="<?php echo base_url()?>Retailer/Newretailerorder" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>            -->
                    <!--                        </li>-->
                                           
                    <!--                </ul>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--        <li class="nav-item">-->
                    <!--<a class="nav-link" href="<?php echo base_url()?>Orders/Shipment" ><i class="fa fa-fw fa-user-circle"></i> Shipment </a>-->
                    <!--        </li>-->
 <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Orders/Listorders" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>
                                            </li>
                        
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    <?php
}else if($this->uri->segment(1) ==='Crm'){
    ?> 
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
                            <a class="nav-link <?=($this->uri->segment(1)==='Crm')?'active':''?>" href="<?php echo base_url()?>Crm" ><i class="fa fa-eye" aria-hidden="true"></i> Overview </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-cogs"></i> Service Calls </a>
                                <div id="submenu-3" class="<?=(( $this->uri->segment(2) !=='raiseTicket' && $this->uri->segment(2) !=='ticketHistory') ?'collapse': '')?> submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                         <a class="nav-link <?=($this->uri->segment(2)==='raiseTicket')?'active':''?>" href="<?php echo base_url()?>Crm/raiseTicket" ><i class="fa fa-fw fa-user-circle"></i> Raise Ticket </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link <?=($this->uri->segment(2)==='ticketHistory')?'active':''?>" href="<?php echo base_url()?>Crm/ticketHistory" ><i class="fa fa-fw fa-user-circle"></i> Ticket History </a>         
                                    </li>
                                    
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> ASP </a>
                                <div id="submenu-2" class="<?=(( $this->uri->segment(2) !=='Asp' && $this->uri->segment(2) !=='Asptechnician' && $this->uri->segment(2) !=='Stockview') ?'collapse': '')?> submenu" style="">
                                    
                                    
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                         <a class="nav-link <?=($this->uri->segment(2)==='Asp')?'active':''?>" href="<?php echo base_url()?>Crm/Asp" ><i class="fa fa-fw fa-user-circle"></i> ASP </a>
                                    </li>
                                    <li class="nav-item">
                                         <a class="nav-link <?=($this->uri->segment(2)==='Asptechnician')?'active':''?>" href="<?php echo base_url()?>Crm/Asptechnician" ><i class="fa fa-fw fa-user-circle"></i> ASP Technician </a>
                                    </li>
                                    <!--<li class="nav-item">-->
                                    <!--    <a class="nav-link" href="<?php echo base_url()?>Crm/Serviceengineer" ><i class="fa fa-fw fa-user-circle"></i> Service Engineer </a>         -->
                                    <!--</li>-->
                                    
<!--
                                    <li class="nav-item">
                                        <a class="nav-link <?=($this->uri->segment(2)==='Stockview')?'active':''?>" href="<?php echo base_url()?>Crm/Stockview" ><i class="fa fa-fw fa-user-circle"></i> Stock View </a>         
                                    </li>
-->
                                    
                                    </ul>
                                </div>
                            </li>
                              <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Crm/travelExpense" ><i class="fa fa-inr" aria-hidden="true"></i> Travel Expenses </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link <?=($this->uri->segment(2)==='register_sale')?'active':''?>" href="<?php echo base_url()?>Crm/register_sale" ><i class="fa fa-history" aria-hidden="true"></i> Sales History </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link <?=($this->uri->segment(2)==='isd')?'active':''?>" href="<?php echo base_url()?>Crm/isd" ><i class="fa fa-list" aria-hidden="true"></i> ISD </a>
                            </li>
                             
                            
                           
                             <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Crm/asporders" ><i class="fa fa-fw fa-user-circle"></i> Asp Orders </a>
                            </li>
                             
                             <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Crm/aspPayment" ><i class="fa fa-fw fa-user-circle"></i> Payment </a>
                            </li>
                             
                             <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Crm/aspBillings" ><i class="fa fa-fw fa-user-circle"></i> Sales </a>
                            </li>
                          
                          <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> Cheques </a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    
                                    
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                         <a class="nav-link" href="<?php echo base_url()?>Crm/receiveCheque" ><i class="fa fa-fw fa-user-circle"></i> Received Cheques </a>
                                    </li>
                                    <li class="nav-item">
                                         <a class="nav-link" href="<?php echo base_url()?>Crm/intransistCheque" ><i class="fa fa-fw fa-user-circle"></i> In transist </a>
                                    </li>
                                    
                                    
                                    </ul>
                                </div>
                            </li>
                            
                          <!--<li class="nav-item">-->
                          <!--  <a class="nav-link" href="<?php echo base_url()?>Crm/billingPayment" ><i class="fa fa-fw fa-user-circle"></i> Billings Payment</a>-->
                          <!--  </li>-->
                            
                          <!--  <li class="nav-item">-->
                          <!--  <a class="nav-link" href="<?php echo base_url()?>Crm/chequeTrack" ><i class="fa fa-fw fa-user-circle"></i> Cheque Tracking </a>-->
                          <!--  </li>-->

                        </ul>
                        
                        
                    </div>
                </nav>
            </div>
        </div>
    <?php
}else if($this->uri->segment(1) ==='Setting'){
    ?> 
        
        <div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Service</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
        <li class="nav-item">
                <a class="nav-link <?=($this->uri->segment(2)==='roles')?'active':''?>" href="<?php echo base_url()?>Setting/roles" ><i class="fa fa-fw fa-user-circle"></i> Roles </a>
        </li>
        <li class="nav-item">
                <a class="nav-link <?=($this->uri->segment(2)==='Setting')?'active':''?>" href="<?php echo base_url()?>Setting/users" ><i class="fa fa-fw fa-user-circle"></i>Users/Logins</a>
         </li>
         <li class="nav-item">
                <a class="nav-link <?=($this->uri->segment(2)==='voucher')?'active':''?>" href="<?php echo base_url()?>Setting/voucher" ><i class="fa fa-fw fa-user-circle"></i>Voucher Type</a>
         </li>
                            
        <li class="nav-item">
             <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i> Masters </a>
             <div id="submenu-4" class="<?=(( $this->uri->segment(2) !=='branch' && $this->uri->segment(2) !=='supplier' && $this->uri->segment(2) !=='division' && $this->uri->segment(2) !=='products' && $this->uri->segment(2) !=='partsmaster' && $this->uri->segment(2) !=='custbalance' && $this->uri->segment(2) !=='dealers' && $this->uri->segment(2) !=='executive' && $this->uri->segment(2) !== 'citymasters' && $this->uri->segment(2) !== 'addcityMaster') ?'collapse': '')?> submenu" style="">
                 <ul class="nav flex-column">
                     
<!--
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/products" ><i class="fa fa-fw fa-user-circle"></i>Sjyzen Products</a>                      
                     </li>
-->
                     
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/productMaster" ><i class="fa fa-fw fa-user-circle"></i>Skyzen Products</a>                      
                     </li>
                     
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/partMaster" ><i class="fa fa-fw fa-user-circle"></i>Skyzen Parts</a>                      
                     </li>
                     
                     <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url() ?>Setting/aspMaster" ><i class="fa fa-fw fa-user-circle"></i>Asp</a> 
                     </li>
                     
                     <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url() ?>Setting/distributorMaster" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a> 
                     </li>
                     
                     <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url() ?>Setting/executiveMaster" ><i class="fa fa-fw fa-user-circle"></i>Executive</a> 
                     </li>
                     
                     <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url() ?>Setting/dealersMaster" ><i class="fa fa-fw fa-user-circle"></i>Dealers/Retailer</a> 
                     </li>
                     
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>Setting/categoryMaster" ><i class="fa fa-fw fa-user-circle"></i>Category</a> 
                     </li>
                     
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/branch" ><i class="fa fa-fw fa-user-circle"></i>Branch</a>                      
                     </li>

                      <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/location" ><i class="fa fa-fw fa-user-circle"></i>Location</a>                      
                     </li>
                     
                     
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/supplier" ><i class="fa fa-fw fa-user-circle"></i>Supplier</a>                              
                     </li>
                     
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/division" ><i class="fa fa-fw fa-user-circle"></i>Divsion</a>                              
                     </li>
                     <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url() ?>Setting/exedistretCity" ><i class="fa fa-fw fa-user-circle"></i>Executive Retailer City</a>
                     </li>
                     <!-- <li class="nav-item ">-->
                     <!--    <a class="nav-link" href="<?php echo base_url() ?>Setting/products" ><i class="fa fa-fw fa-user-circle"></i>Products</a>                              -->
                     <!--</li>-->
                     <!--     <li class="nav-item ">-->
                     <!--    <a class="nav-link" href="<?php echo base_url() ?>Setting/product" ><i class="fa fa-fw fa-user-circle"></i>Products</a>                              -->
                     <!--</li>-->
                     
                     
                     <!--<li class="nav-item ">-->
                     <!--    <a class="nav-link" href="<?php echo base_url() ?>Setting/partsmaster" ><i class="fa fa-fw fa-user-circle"></i>Sky Parts Master</a>                              -->
                     <!--</li>-->
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/partmasters" ><i class="fa fa-fw fa-user-circle"></i>Parts Master</a>                              
                     </li>
                      <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/custbalance" ><i class="fa fa-fw fa-user-circle"></i>Customer Balance</a>                              
                     </li>
                     <!-- <li class="nav-item ">-->
                     <!--    <a class="nav-link" href="<?php echo base_url() ?>Setting/dealers" ><i class="fa fa-fw fa-user-circle"></i>Dealers</a>                              -->
                     <!--</li>-->
                     <!--<li class="nav-item ">-->
                     <!--    <a class="nav-link" href="<?php echo base_url() ?>Setting/executive" ><i class="fa fa-fw fa-user-circle"></i>Executive</a>                              -->
                     <!--</li>-->
                     
                     <!--<li class="nav-item ">-->
                     <!--    <a class="nav-link" href="<?php echo base_url() ?>Setting/citymasters" ><i class="fa fa-fw fa-user-circle"></i>City Master</a>                              -->
                     <!--</li>-->
                     <!--<li class="nav-item ">-->
                     <!--    <a class="nav-link" href="<?php echo base_url() ?>Setting/aspLocation" ><i class="fa fa-fw fa-user-circle"></i>ASP Location</a>                              -->
                     <!--</li>-->
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/productComplaint" ><i class="fa fa-fw fa-user-circle"></i>Product Complaint</a>                              
                     </li>
                     
                 </ul>
             </div>
         </li>
         
          <li class="nav-item">
             <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fa-rocket"></i> Ledger Reporting </a>
             <div id="submenu-5" class="<?=(( $this->uri->segment(2) !=='creditNotes' && $this->uri->segment(2) !=='debitNotes' && $this->uri->segment(2) !=='journalEntries' && $this->uri->segment(2) !=='ledger' && $this->uri->segment(2) !=='purchase' && $this->uri->segment(2) !=='purchasereturn' && $this->uri->segment(2) !=='receipts' && $this->uri->segment(2) !=='sales' && $this->uri->segment(2) !=='salesreturn') ?'collapse': '')?> submenu" style="">
                 <ul class="nav flex-column">
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/creditNotes" ><i class="fa fa-fw fa-user-circle"></i>Credit Notes</a>                      
                     </li>

                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/debitNotes" ><i class="fa fa-fw fa-user-circle"></i>Debite Notes</a>                              
                     </li>
                     
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/journalEntries" ><i class="fa fa-fw fa-user-circle"></i>Journal Entries</a>                              
                     </li>
                     
                      <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/ledger" ><i class="fa fa-fw fa-user-circle"></i>Ledger</a>                              
                     </li>
                     
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/purchase" ><i class="fa fa-fw fa-user-circle"></i>Purchase</a>                              
                     </li>
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/purchasereturn" ><i class="fa fa-fw fa-user-circle"></i>Purchase Return</a>                              
                     </li>
                      <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/receipts" ><i class="fa fa-fw fa-user-circle"></i>Receipts</a>                              
                     </li>
                     
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/sales" ><i class="fa fa-fw fa-user-circle"></i>Sales</a>                              
                     </li>
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/salesreturn" ><i class="fa fa-fw fa-user-circle"></i>Sales Return</a>                              
                     </li>
                 </ul>
             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fa fa-fw fa-rocket"></i> Rule Engine </a>
             <div id="submenu-6" class="<?=(( $this->uri->segment(2) !=='collectionTarget' && $this->uri->segment(2) !=='setsalesTarget' && $this->uri->segment(2) !=='generalRules' && $this->uri->segment(2) !=='specificRules') ?'collapse': '')?> submenu" style="">
                 <ul class="nav flex-column">
                    <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/collectionTarget" ><i class="fa fa-fw fa-user-circle"></i>Set Collection Target</a>                              
                     </li>
                     <li class="nav-item ">
                         <a class="nav-link" href="<?php echo base_url() ?>Setting/setsalesTarget" ><i class="fa fa-fw fa-user-circle"></i>Set Sales Target</a>                              
                     </li>
                     
                     <li class="nav-item">
                                 <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fa fa-fw fa-rocket"></i> Travel Expenses </a>
                         
                                <div id="submenu-7" class="<?=(( $this->uri->segment(2) !=='generalRules' && $this->uri->segment(2) !=='specificRules') ?'collapse': '')?> submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() ?>Setting/generalRules" ><i class="fa fa-fw fa-user-circle"></i>General Rules</a>                              
                                        </li>
                                        <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() ?>Setting/specificRules" ><i class="fa fa-fw fa-user-circle"></i>Specific Rules</a>                              
                                        </li>
                                    </ul>
                                </div>
                     </li>
                     
                 </ul>
             </div>
         </li>
                          
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    <?php
}else if($this->uri->segment(1) ==='Plant'){
    ?> 

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
                                <a class="nav-link <?=($this->uri->segment(1)==='Plant')?'active':''?>" href="<?php echo base_url()?>Plant/manufacturing_details" ><i class="fa fa-fw fa-user-circle"></i> Manufacturing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url()?>Plant/defects" ><i class="fa fa-fw fa-user-circle"></i> Defects & Rejects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url()?>Plant/barcodes" ><i class="fa fa-fw fa-user-circle"></i> Bar Codes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url()?>Plant/orders_recieved" ><i class="fa fa-fw fa-user-circle"></i> Orders Recieved </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url()?>Plant/shipment" ><i class="fa fa-fw fa-user-circle"></i> Shipment </a>
                            </li>
                      
              
                        <!--<li class="nav-item">-->
                        <!--        <a class="nav-link <?=($this->uri->segment(2)==='distributor')?'active':''?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i> New Sales </a>-->
                        <!--        <div id="submenu-4" class="collapse submenu" style="">-->
                        <!--            <ul class="nav flex-column">-->
                        <!--                <li class="nav-item ">-->
                        <!--                    <a class="nav-link" href="<?php echo base_url()?>Sales/DistributorSale" ><i class="fa fa-fw fa-user-circle"></i>Distributor Sales</a>                      -->
                        <!--                </li>-->
                                        
                        <!--                <li class="nav-item ">-->
                        <!--                    <a class="nav-link" href="<?php echo base_url()?>Sales/RetailerSales" ><i class="fa fa-fw fa-user-circle"></i>Retailer Sales</a>                              -->
                        <!--                </li>-->
                        <!--            </ul>-->
                        <!--        </div>-->
                        <!--</li>-->

                   

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    <?php
}else if($this->uri->segment(1) ==='Sales'){
    ?> 
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
                            <a class="nav-link" href="<?php echo base_url()?>Sales" ><i class="fa fa-eye" aria-hidden="true"></i> Overview </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> Sales </a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                         <a class="nav-link" href="<?php echo base_url()?>Sales/newSales" ><i class="fa fa-fw fa-user-circle"></i> Sales </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Sales/salesDeliveries" ><i class="fa fa-fw fa-user-circle"></i> Deliveries </a>         
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Sales/deliveryReturn" ><i class="fa fa-fw fa-user-circle"></i> Delivery Returns </a>         
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Sales/salesReturn"><i class="fa fa-fw fa-user-circle"></i> Sales Returns  </a>         
                                    </li>
                                     <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Sales/pendingDeliveries" ><i class="fa fa-fw fa-user-circle"></i> Pending Deliveries  </a>         
                                    </li>  
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Sales/pickLists" ><i class="fa fa-fw fa-user-circle"></i> Pick Lists  </a>         
                                    </li>
                                    </ul>
                                </div>
                            </li>

                       
              
<!--
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Sales/SalesExecutive" ><i class="fa fa-fw fa-user-circle"></i> Sales Executive Track </a>
                            </li>
-->
                         <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Sales/salesexecutiveTrack"><i class="fa fa-fw fa-user-circle"></i> Sales Executive Track </a>
                            </li>
                         <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url() ?>Sales/newSale" ><i class="fa fa-fw fa-user-circle"></i> New Sale </a>
                            </li>
                   

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    <?php
}else if($this->uri->segment(1) ==='Asp'){
    ?> 
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
                            <a class="nav-link" href="<?php echo base_url()?>Asp" ><i class="fa fa-eye" aria-hidden="true"></i> Overview </a>
                            </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Asp/ordersHisotry" ><i class="fa fa-fw fa-user-circle"></i> Orders </a>
                            </li>
                             
<!--
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-rocket"></i> Orders </a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                         <a class="nav-link" href="<?php echo base_url()?>Asp/newOrders" ><i class="fa fa-fw fa-user-circle"></i> New Orders </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Asp/ordersHisotry" ><i class="fa fa-fw fa-user-circle"></i> Orders History </a>         
                                    </li>
                                    
                                    </ul>
                                </div>
                            </li>
-->
                             <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Asp/ticketHistory" ><i class="fa fa-fw fa-user-circle"></i> Ticket History </a>
                            </li>
                            
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Asp/technician" ><i class="fa fa-fw fa-user-circle"></i> Technician </a>
                            </li>
                             
<!--
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Asp/aspTickets" ><i class="fa fa-fw fa-user-circle"></i> Assign Tickets  </a>
                            </li>
-->
                            
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Asp/asppartStock" ><i class="fa fa-fw fa-user-circle"></i> Asp Part Stock  </a>
                            </li>
                          
                           <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Asp/invoicePayment" ><i class="fa fa-fw fa-user-circle"></i> Payment  </a>
                            </li>
                           
                        </ul>
                        
                        
                    </div>
                </nav>
            </div>
        </div>
    <?php
}else if($this->uri->segment(1) ==='ServiceEngineer'){
    ?> 
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
                            <a class="nav-link" href="<?php echo base_url()?>ServiceEngineer" ><i class="fa fa-eye" aria-hidden="true"></i> Overview </a>
                            </li>
                          
                 
                             <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>ServiceEngineer/ticketHistory" ><i class="fa fa-fw fa-user-circle"></i> Ticket History </a>
                            </li>
                             
 
                          

                        </ul>
                        
                        
                    </div>
                </nav>
            </div>
        </div>
    <?php
}else if($this->uri->segment(1) ==='Schemes'){
    ?> 
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
                            <a class="nav-link" href="<?php echo base_url()?>Schemes" ><i class="fa fa-eye" aria-hidden="true"></i> Overview </a>
                            </li>
                          
                 
                             <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Schemes/schmes" ><i class="fa fa-fw fa-user-circle"></i> Schemes List </a>
                            </li>
                            
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Schemes/test1" ><i class="fa fa-fw fa-user-circle"></i> Test1 </a>
                            </li>
                            
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Schemes/test2" ><i class="fa fa-fw fa-user-circle"></i> Test2 </a>
                            </li>
                             
 
                          

                        </ul>
                        
                        
                    </div>
                </nav>
            </div>
        </div>
    <?php
}else if($this->uri->segment(1) ==='Retailer'){
    ?> 
    <div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Retailer</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Retailer" ><i class="fa fa-eye" aria-hidden="true"></i> Overview </a>
                            </li>
                          
                 
                            
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Retailer/billings" ><i class="fa fa-fw fa-user-circle"></i> Billings  </a>
                            </li>
                        
                         <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Retailer/billingPayment" ><i class="fa fa-fw fa-user-circle"></i> Billings Payment </a>
                            </li>
                        
                          

                        </ul>
                        
                        
                    </div>
                </nav>
            </div>
        </div>
    <?php
}else if($this->uri->segment(1) ==='Billing'){
     ?> 
    <div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Billing</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Billing" ><i class="fa fa-eye" aria-hidden="true"></i> Overview </a>
                            </li>
                          
                 
                            
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Billing" ><i class="fa fa-fw fa-user-circle"></i> Details  </a>
                            </li>
                        

                        </ul>
                        
                        
                    </div>
                </nav>
            </div>
        </div>
    <?php
}
?>


