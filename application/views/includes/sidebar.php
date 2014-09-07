<!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="<?php echo $dashboard ?>">
                            <a href="<?php echo base_url();?>index.php/site/index">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        

                        <li class="treeview <?php echo $company ?>">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Company</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>index.php/site/add_co"><i class="fa fa-angle-double-right"></i> Add Company</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/all_co"><i class="fa fa-angle-double-right"></i> Edit/View Companies</a></li>
                            </ul>
                        </li>

                        <li class="treeview <?php echo $products ?>">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Products</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>index.php/site/add_pro"><i class="fa fa-angle-double-right"></i> Add Product</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/all_items"><i class="fa fa-angle-double-right"></i> Edit/View Products</a></li>
                            </ul>
                        </li>

                        <li class="treeview <?php echo $employee ?>">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Employee</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                           
                            <ul class="treeview-menu">
                             <li style="<?php echo $hide_usr; ?>"><a href="<?php echo base_url();?>index.php/site/add_usr"><i class="fa fa-angle-double-right"></i> Add User</a></li>
                           
                           
                                <li><a href="<?php echo base_url();?>index.php/site/all_emp"><i class="fa fa-angle-double-right"></i>Employee List</a></li>
                
                            </ul>
                        </li>
                        <li class="treeview <?php echo $bank ?>">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>BANK</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                
                                <li><a href="<?php echo base_url();?>index.php/site/add_bank"><i class="fa fa-angle-double-right"></i> Add Bank</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/all_bank"><i class="fa fa-angle-double-right"></i> Edit/Delete Banks</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/bank_cust"><i class="fa fa-angle-double-right"></i> Customer Transaction</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/bank_supp"><i class="fa fa-angle-double-right"></i> Supplier Transaction</a></li>
                                <!-- <li><a href="<?php echo base_url();?>index.php/site/bank_trans"><i class="fa fa-angle-double-right"></i> Add Bank Transaction</a></li> -->
                                <li><a href="<?php echo base_url();?>index.php/site/b_ledger"><i class="fa fa-angle-double-right"></i> Bank Ledger</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/all_bv"><i class="fa fa-angle-double-right"></i> Edit/Delete Bank Vouchers</a></li>

                            </ul>
                        </li>
                        <li class="treeview <?php echo $invoice ?>">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Invoices</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>index.php/site/sales_frm"><i class="fa fa-angle-double-right"></i> Sales Form</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/purchase_frm"><i class="fa fa-angle-double-right"></i> Purchase Form</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/voucher_frm"><i class="fa fa-angle-double-right"></i> Journal Voucher</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/gen_sales_inv"><i class="fa fa-angle-double-right"></i> Sales Invoice</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/gen_purchase_inv"><i class="fa fa-angle-double-right"></i> Purchase Invoice</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/gen_challan"><i class="fa fa-angle-double-right"></i> Delivery Challan</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/gen_sales_tax_inv"><i class="fa fa-angle-double-right"></i> Sales Tax Invoice</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/all_inv"><i class="fa fa-angle-double-right"></i> View/Edit Invoice</a></li>
                                <!-- <li><a href="<?php echo base_url();?>index.php/site/inv_form"><i class="fa fa-angle-double-right"></i> Invoice Form</a></li> -->
                            </ul>
                        </li>
                        <li class="treeview <?php echo $sales ?>">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Sale Account</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>index.php/site/acc_sale"><i class="fa fa-angle-double-right"></i> Sale Account</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/acc_sale_gst"><i class="fa fa-angle-double-right"></i> Sale GST Account</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/acc_sale_customer"><i class="fa fa-angle-double-right"></i> Customer Account</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/acc_sale_op_bal"><i class="fa fa-angle-double-right"></i> Sale Opening Balance</a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php echo $purchase ?>">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Purchase Account</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>index.php/site/acc_purchase"><i class="fa fa-angle-double-right"></i> Purchase Account</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/acc_purchase_gst"><i class="fa fa-angle-double-right"></i> Purchase GST Account</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/acc_purchase_supplier"><i class="fa fa-angle-double-right"></i> Supplier Account</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/acc_purchase_op_bal"><i class="fa fa-angle-double-right"></i> Purchase Opening Balance</a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php echo $ledger ?>">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Ledger</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>index.php/site/acc_ledger"><i class="fa fa-angle-double-right"></i> Accounts Ledger</a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php echo $inv_list ?>">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Invoice List</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>index.php/site/sale_list"><i class="fa fa-angle-double-right"></i> Sales List</a></li>
                                <li><a href="<?php echo base_url();?>index.php/site/purchase_list"><i class="fa fa-angle-double-right"></i> Purchase List</a></li>
                            </ul>
                        </li>

                        <li class="treeview <?php echo $tools ?>">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Tools</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                 <li><a href="<?php echo base_url();?>index.php/site/set_credit_limit"><i class="fa fa-angle-double-right"></i> Set Credit Limit</a></li>
                            </ul>
                        </li>
                
                        <li class="<?php echo $scan_doc; ?>">
                            <a href="<?php echo base_url();?>index.php/site/scan_doc">
                                <i class="fa fa-dashboard"></i> <span>Scan Documents</span>
                            </a>
                        </li>

                        <li class="<?php echo $calendar ?>">
                            <a href="<?php echo base_url();?>index.php/site/calendar">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                            </a>
                        </li>
                        <!-- <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>