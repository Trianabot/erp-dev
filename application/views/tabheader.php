<div class="dashboard-header" style="z-index: 9999999;margin-top:5px; ">
                <div class="container-fluid fixed-top" style="background:#fff, z-index: 99999;top:55px" >
                    <div class="row" style="border-bottom:2px solid #3663fe;">
                        
                        
                        
                        <?php 
                       $role = $this->session->userdata('userrole');
                        if($role == 2){
                            ?> 
                                <div class="col-md-12" style="padding:0px 0px 0px 0px;background:#fff;">
                            <div class="">
                                <ul class="nav-btn" style="padding: 0px;">
                                
                               <li class="<?=($this->uri->segment(1)==='Crm')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Crm" class="" style="">CRM</a></li>                   
                                
                                    </ul>
                            </div>
                        </div>
                                <?php
                        }else if($role == 7){
                              ?> 
                                <div class="col-md-12" style="padding:0px 0px 0px 0px;background:#fff;">
                            <div class="">
                                <ul class="nav-btn" style="padding: 0px;">
                                
                               <li class="<?=($this->uri->segment(1)==='Asp')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Asp" class="" style="">ASP</a></li>                   
                                
                                    </ul>
                            </div>
                        </div>
                                <?php
                            
                        }else if($role == 1) {
                            ?> 
                             <div class="col-md-12" style="padding:0px 0px 0px 0px;background:#fff;">
                            <div class="">
                                <ul class="nav-btn" style="padding: 0px;">
                                <li class=" <?=($this->uri->segment(1)==='Products')?'active':''?> p-tb-10 p-lr-20"><a href="<?php echo base_url()?>Products">Products</a></li>
                                <li class="<?=($this->uri->segment(1)==='Stock')?'active':''?> p-tb-10 p-lr-20"><a href="<?php echo base_url()?>Stock">Stock</a></li>
                                <li class=" <?= ( ($this->uri->segment(1)==='Orders') ||($this->uri->segment(1)==='Distributor') || ($this->uri->segment(1)==='Retailer'))?'active':''?> p-tb-10 p-lr-20"><a href="<?php echo base_url()?>Orders" class="" style="">Orders</a></li>
                                <li class="<?=($this->uri->segment(1)==='Dealers')?'active':''?> p-tb-10 p-lr-20"><a href="<?php echo base_url()?>Dealers" class="" style="">Marketing</a></li>
                                <li class="<?=($this->uri->segment(1)==='Sales')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Sales">Sales</a></li>
                                <li class="<?=($this->uri->segment(1)==='Purchase')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Purchase" class="" style="">Purchase</a></li>
                                <li class="<?=($this->uri->segment(1)==='Finance')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Finance" class="" style="">Finance</a></li>
                               <li class="<?=($this->uri->segment(1)==='Crm')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Crm" class="" style="">CRM</a></li>                   
                                <li class="<?=($this->uri->segment(1)==='Billing')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Billing" class="" style="">Billing</a></li>
                                <li class="<?=($this->uri->segment(1)==='Employee')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Employee" class="" style="">Employees</a></li>
                                
                                <li class="<?=($this->uri->segment(1)==='Expense')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Expense" class="" style="">Expenses</a></li>
                                <li class="<?=($this->uri->segment(1)==='Plant')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Plant" class="" style="">Plant</a></li>
                                  <li class="<?=($this->uri->segment(1)==='Schemes')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Schemes" class="" style="">Schemes</a></li>
                                <li class="<?=($this->uri->segment(1)==='Setting')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Setting" class="" style="">Setting</a></li>                                
                                    </ul>
                            </div>
                        </div>   
                             <?php
                        }else if($role == 9){
                            ?> 
                                <div class="col-md-12" style="padding:0px 0px 0px 0px;background:#fff;">
                            <div class="">
                                <ul class="nav-btn" style="padding: 0px;">
                                
                               <li class="<?=($this->uri->segment(1)==='Coordinate')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Asp" class="" style="">Co-Ordinate</a></li>                   
                                
                                    </ul>
                            </div>
                        </div>
                            <?php
                        }else if($role == 8){
                            ?> 
                                <div class="col-md-12" style="padding:0px 0px 0px 0px;background:#fff;">
                            <div class="">
                                <ul class="nav-btn" style="padding: 0px;">
                                
                               <li class="<?=($this->uri->segment(1)==='ServiceEngineer')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>ServiceEngineer" class="" style="">Service Engineer</a></li>                   
                                
                                    </ul>
                            </div>
                        </div>
                            <?php
                        }else if($role == 4){
                             ?> 
                                <div class="col-md-12" style="padding:0px 0px 0px 0px;background:#fff;">
                            <div class="">
                                <ul class="nav-btn" style="padding: 0px;">
                                
                               <li class="<?=($this->uri->segment(1)==='Retailer')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Retailer" class="" style="">Retailer</a></li>                   
                                
                                    </ul>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>