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

        <?php // foreach ($products as $product) {
        ?>
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
                    <h2><?php echo $hybrid_deposit; ?> USD</h2>
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
                    <h2><?php echo $new_balance; ?> USD</h2>
                </div>

            </div>

        </div>



        <!--HYBRID 4 Start-->


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
                                    <th>Growth in Percentate</th>
                                    <th>This month's revenue</th>
                                    <th>Total revenue</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($revenues as $revenue) { ?>
                                    <tr>
                                        <td><b><?php echo date("d. M Y", strtotime($revenue->timestamp)); ?></b></td>
                                        <td><?php echo ucwords($product->product_name); ?></td>
                                        <td><?php echo ucwords($revenue->percentage); ?>%</td>
                                        <td><?php echo $revenue->value_revenue; ?> USD</td>
                                        <td><?php echo $revenue->value_balance; ?> USD</td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--Responsive Table End-->
        <!--HYBRID 4 End-->
    </div>
    <!-- Top Report end  -->
    <!--Timeline / Activities Start-->
    



</div>
</div>
</div>