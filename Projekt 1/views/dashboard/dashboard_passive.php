<!-- Content Body Start -->
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3><?php echo ucwords($product->product_name); ?></h3>
            </div>
        </div><!-- Page Heading End -->


    </div><!-- Page Headings End -->
    <!-- Top Report Wrap Start -->
    <div class="row">
        <!-- Top Report Start -->


        <div class="col-xlg-6 col-md-6 col-6 mb-30">
            <div class="top-report">

                <!-- Head -->
                <div class="head">
                    <h4>Deposit</h4>
                    <!--<a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>-->
                </div>

                <!-- Content -->
                <div class="content">
                    <h5>&nbsp;</h5>
                    <h2><?php echo $deposit->value; ?> USD</h2>
                </div>

            </div>

        </div>

        <div class="col-xlg-6 col-md-6 col-6 mb-30">
            <div class="top-report">

                <!-- Head -->
                <div class="head">
                    <h4>Balance</h4>
                    <!--<a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>-->
                </div>

                <!-- Content -->
                <div class="content">
                    <h5>&nbsp;</h5>
                    <h2><?php echo $balance; ?> USD</h2>
                </div>

            </div>

        </div>
        <!--Passive 1 Start-->
        <!--                     Revenue Statistics Chart Start 
                        <div class="col-md-12 mb-30">
                            <div class="box">
                                <div class="box-head">
                                    <h4 class="title">Revenue Statistics</h4>
                                </div>
                                <div class="box-body">
                                    <div class="chart-legends-1 row">
                                        
                                        <div class="chart-legend-1 col-12 col-sm-4">
                                            <h5 class="title">Total Revenue</h5>
                                            <h3 class="value text-secondary">$5000,000</h3>
                                        </div>
                                        <div class="chart-legend-1 col-12 col-sm-4">
                                            <h5 class="title">Revenue percentage</h5>
                                            <h3 class="value text-primary">10000,000</h3>
                                        </div>
                                       
                                    </div>
                                    <div class="chartjs-revenue-statistics-chart">
                                        <canvas id="chartjs-revenue-statistics-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div> Revenue Statistics Chart End -->

        <!--Responsive Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Transaction history</h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Product</th>
                                    <th>Transaction type</th>
                                    <th>Value of transaction</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($transaction_history as $transaction) { ?>
                                    <tr>
                                        <td><b><?php echo date("d. M Y", strtotime($transaction->timestamp)); ?></b></td>
                                        <td><?php echo ucwords($product->product_name); ?></td>
                                        <td><?php echo ucwords($transaction->type); ?></td>
                                        <td><?php echo $transaction->value; ?> USD</td>
                                        <td><span class="badge badge-outline badge-success">completed</span></td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--Responsive Table End-->
        <!--Responsive Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Monthly revenue</h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Product</th>
                                    <th>Monthly %</th>
                                    <th>Monthly Revenue</th>
                                    <!--<th>Balance</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($revenues as $revenue) { ?>
                                    <tr>
                                        <td><b><?php echo date("d. M Y", strtotime($revenue->timestamp)); ?></b></td>
                                        <td><?php echo ucwords($product->product_name); ?></td>
                                        <td>4%</td>
                                        <td><?php echo $revenue->value; ?> USD</td>
                                        <!--<td> USD</td>-->

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--Responsive Table End-->
        <!--Passive 1 End-->
    </div>
    <!-- Top Report end  -->  








    <!--Timeline / Activities Start-->
    <div class="row">            
        <div class="col-xlg-12 col-md-12 col-12 mb-30">
            <div class="top-report">                
                <div class="col-xlg-12 col-12 mb-20">
                    <div class="box box-border-less p-0">

                        <div class="box-head">
                            <h3 class="title">Timeline / Activities</h3>
                        </div>
                    </div>
                    <br>

                    <div class="box-body">

                        <div class="timeline-wrap row mbn-20">
                            <div class="timeline-wrap row mbn-20">
                                <div class="col-12 mb-50"><span class="timeline-date">20 November 2021</span></div>

                                <div class="col-12 mb-50">
                                    <ul class="timeline-list">

                                        <li>
                                            <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                            <div class="details">
                                                <h5 class="title"><a href="#">Update 1.0.3 </a></h5>
                                                <div class="content">
                                                    <p>Hello, update here! Thank you for your patience, we are developing our new system and app. Whats new?
                                                        <br> - Visal graphic UI and Graphs
                                                        <br> - Reset your password - an email will arrive with resetting link
                                                        <br> - Overall speed upgrades and optimalizations</p>
                                                </div>
                                                <span class="time">Info update</span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                
                                <div class="col-12 mb-50"><span class="timeline-date">19 September 2021</span></div>

                                <div class="col-12 mb-50">
                                    <ul class="timeline-list">

                                        <li>
                                            <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                            <div class="details">
                                                <h5 class="title"><a href="#">Update 1.0.2 </a></h5>
                                                <div class="content">
                                                    <p>Hello, update here! Withdrawals and Deposits are now available also with dynamic tables for your transactions and revenues. For future updates we are prepairing:
                                                        <br> - Visal graphic UI and Graphs
                                                        <br> - Affiliate
                                                        <br> - Overall user experience and much more...</p>
                                                </div>
                                                <span class="time">Info update</span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                                <div class="col-12 mb-20"><span class="timeline-date">10 September 2021</span></div>

                                <div class="col-12 mb-20">
                                    <ul class="timeline-list">

                                        <li>
                                            <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                            <div class="details">
                                                <h5 class="title"><a href="#">Update 1.0.1 : new functions are here. </a></h5>
                                                <div class="content">
                                                    <p>Hello, update here! Now you can have all necessary information in your dashboard. For future updates we are prepairing:
                                                        <br> - Visal graphic UI, Real time views
                                                        <br> - Depositing and withdrawing
                                                        <br> - Overall user experience and much more...</p>
                                                </div>
                                                <span class="time">Info update</span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                
                                <div class="col-12 mb-50"><span class="timeline-date">21 August 2021</span></div>

                    <div class="col-12 mb-50">
                        <ul class="timeline-list">

                            <li>
                                <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                <div class="details">
                                    <h5 class="title"><a href="#">New office arrives</a></h5>
                                    <div class="content">
                                        <p>Welcome to APEX Future`s new office. We are prepairing all necessary functions for your best experience. We are going to update you about all future updates.</p>
                                    </div>
                                    <span class="time">Info update</span>
                                </div>
                            </li>

                        </ul>
                    </div>
                                
                                
                                

                            </div>
                        </div>
                    </div>


                    <!--                                        <li>
                                                                <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                                                <div class="details">
                                                                    <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                                                    <div class="gallery">
                                                                        <div class="row mbn-30">
                    
                                                                            <div class="col-md-4 col-sm-6 col-12 mb-30"><a href="#"><img src="assets/images/gallery/profile-gallery-1.jpg" alt=""></a></div>
                                                                            <div class="col-md-4 col-sm-6 col-12 mb-30"><a href="#"><img src="assets/images/gallery/profile-gallery-2.jpg" alt=""></a></div>
                                                                            <div class="col-md-4 col-sm-6 col-12 mb-30"><a href="#"><img src="assets/images/gallery/profile-gallery-3.jpg" alt=""></a></div>
                    
                                                                        </div>
                                                                    </div>
                                                                    <span class="time">65 min ago</span>
                                                                </div>
                                                            </li>-->

                    <!--                                        <li>
                                                                <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                                                <div class="details">
                                                                    <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                                                    <div class="video">
                                                                        <a href="#"><i class="zmdi zmdi-play"></i></a>
                                                                    </div>
                                                                    <span class="time">3 hour ago</span>
                                                                </div>
                                                            </li>-->
                    

    <!--                                <div class="col-12 mb-50"><span class="timeline-date">12 february 2018</span></div>

                                    <div class="col-12 mb-50">
                                        <ul class="timeline-list">

                                            <li>
                                                <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                                <div class="details">
                                                    <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                                    <div class="content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id dolores, assumenda quaerat inventore atque dolore sapiente doloribus iusto quisquam ullam autem labore, laborum beatae repudiandae! Recusandae ullam cumque, non temporibus?</p>
                                                    </div>
                                                    <span class="time">at 7pm</span>
                                                </div>
                                            </li>

                                            <li>
                                                <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                                <div class="details">
                                                    <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                                    <div class="gallery">
                                                        <div class="row mbn-30">

                                                            <div class="col-12 mb-30"><a href="#"><img src="assets/images/gallery/profile-gallery-4.jpg" alt=""></a></div>

                                                        </div>
                                                    </div>
                                                    <span class="time">at 12:30pm</span>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>-->

                </div>

            </div>

        </div>
    </div>
<!--Timeline / Activities End-->


</div>    
</div>        
</div>            
<!-- Footer -->
<div class="footer">
    <!--                            <div class="progess">
                                    <div class="progess-bar" style="width: 92%;"></div>
                                </div>-->
<!--                                    <p>92% of unique visitor</p>-->
</div>

</div>

</div><!-- Top Report End -->
</div><!-- Top Report Wrap End -->

<div class="row mbn-30">

    <!-- Revenue Statistics Chart Start -->
    <!--                <div class="col-12 mb-30">
                        <div class="box">
                            <div class="box-head">
                                <h4 class="title">Revenue Statistics</h4>
                            </div>
                            <div class="box-body">
    
                                <div class="chart-legends-1 row">
                                    <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                                        <h5>Passive safety</h5>
                                        <h3 class="text-secondary">$15,752.00</h3>
                                    </div>
                                    <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                                        <h5>Hybrid</h5>
                                        <h3 class="text-primary">$7,400.00</h3>
                                    </div>
                                    <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                                        <h5>Crypto savings</h5>
                                        <h3 class="text-warning">5,000.00</h3>
                                    </div>
                                    <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                                        <h5>Affiliate</h5>
                                        <h3 class="text-info">4,000.00</h3>
                                    </div>
                                </div>
    
                                <div class="chartjs-revenue-statistics-chart-2">
                                    <canvas id="chartjs-revenue-statistics-chart-2"></canvas>
                                </div>
    
                            </div>
                        </div>
                    </div>-->
    <!-- Revenue Statistics Chart End -->

    <!--                 Top Selling Country Start 
                    <div class="col-xlg-7 col-12 mb-30">
                        <div class="box">
                            <div class="box-head">
                                <h4 class="title">Top Selling Country</h4>
                            </div>
                            <div class="box-body">
                                <div id="vmap-world-2" class="vmap vmap-world-2"></div>
                            </div>
                        </div>
                    </div> Top Selling Country End 
    
                     Recent Transaction Start -->
    <!--                <div class="col-12 mb-30">
                        <div class="box">
                            <div class="box-head">
                                <h4 class="title">Transaction History</h4>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table table-selectable table-vertical-middle">
    
                                         Table Head Start 
                                        <thead>
                                            <tr>
                                                
                                                <th><span>Date</span></th>
                                                <th><span>Type</span></th>
                                                <th><span>Amount</span></th>
                                                <th><span>Remaining</span></th>
                                                <th><span>Pricing</span></th>
                                                <th><span>USD</span></th>
                                                <th><span>Fees(%)</span></th>
                                                <th>Status</th>
                                               
                                            </tr>
                                        </thead> Table Head End 
    
                                         Table Body Start 
                                        <tbody>
                                            <tr>
                                            
                                                <td><span>13 April 2019</span></td>
                                                <td><span>Sell</span></td>
                                                <td><span>7520.11</span></td>
                                                <td><span>0.1256</span></td>
                                                <td><span>1124.55</span></td>
                                                <td><span>7520.11</span></td>
                                                <td><span>89%</span></td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                               
                                            </tr>
                                            
                                           
                                        </tbody> Table Body End 
    
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> Recent Transaction End -->

</div>

</div><!-- Content Body End -->

