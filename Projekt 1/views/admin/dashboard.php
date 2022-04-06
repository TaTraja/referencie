<!-- Content Body Start -->
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>&nbsp;</h3>
                <h3>At a glance</h3>
            </div>
        </div><!-- Page Heading End -->



    </div><!-- Page Headings End -->
    <!-- Top Report Wrap Start -->
    <div class="row">
        >

        <!-- Top Report Start -->
        <div class="col-xlg-3 col-md-6 col-12 mb-30">
            <div class="top-report">

                <!-- Head -->
                <div class="head">
                    <h4>Passive safety</h4>
                    <!--<a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>-->
                </div>

                <!-- Content -->
                <div class="content">
                    <h5>Active products</h5>
                    <h4><?php echo $active_passive_safety_products_count; ?></h4>
                    <h5>Total value: </h5>
                    <h4><?php echo $passive_products_value; ?> USD</h4>

                </div>

                <!-- Footer -->
                <div class="footer">

                    <p></p>
                </div>

            </div>
        </div><!-- Top Report End -->

        <!-- Top Report Start -->
        <div class="col-xlg-3 col-md-6 col-12 mb-30">
            <div class="top-report">

                <!-- Head -->
                <div class="head">
                    <h4>Hybrid</h4>

                </div>

                <!-- Content -->
                <div class="content">
                    <h5>Active products</h5>
                    <h4><?php echo $active_hybrid_products_count; ?></h4>
                    <h5>Total value: </h5>
                    <h4><?php echo $hybrid_products_value; ?> USD</h4>

                </div>


                <!-- Footer -->
                <div class="footer">

                    <p></p>
                </div>

            </div>
        </div><!-- Top Report End -->
        <!-- Top Report Start -->
        <div class="col-xlg-6 col-md-6 col-12 mb-30">
            <div class="top-report">

                <!-- Head -->
                <div class="head">
                    <h4>Hybrid next month revenue </h4>

                </div>

                <!-- Content -->
                <div class="content">
                    <h5>Dopisuj vzdy 10teho</h5>

                    <input name="nextRevenue" type='text' class="form-control danger" placeholder="New month revenue for hybrid">
                    <a href="<?php echo base_url(); ?>admin/_update_hybrid_revenue/<?php echo $nextRevenue; ?>" class="button button-outline button-info"><span>New</span></a>

                </div>


                <!-- Footer -->
                <div class="footer">
                    
                    <p></p>
                </div>

            </div>
        </div><!-- Top Report End -->

        
    </div>
    <!-- Top Report Wrap End -->

    <div class="row mbn-30">

       
        <!--Hoverable Rows Light Start-->
        <div class="col-lg-12 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Pending withdrawal requests</h4>
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                            <?php if (!empty($withdrawal_requests)) { ?>
                                <tr>
                                    <th>Request</th>
                                    <th>Username</th>
                                    <th>Product name</th>
                                    <th>Email</th>
                                    <th>Withdrawal</th>
                                    <th>Wallet</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            <?php }
                            ?>
                        </thead>
                        <tbody>
                            <?php
                            if (empty($withdrawal_requests)) {
                                echo "No pending withdrawal requests at the moment";
                            } else {
                                foreach ($withdrawal_requests as $request) {
                            ?>
                                    <tr>
                                        <th><?php echo $request->id; ?></th>
                                        <td><?php echo $request->username; ?></td>
                                        <td><?php echo $request->product_name; ?></td>
                                        <td><?php echo $request->email; ?></td>
                                        <td><?php echo $request->value; ?> USD</td>
                                        <td><span id="wallet_clipboard_<?php echo $request->id; ?>"><?php echo $request->wallet; ?></span> <button class="button button-primary button-clipboard mb-0 mt-15" data-clipboard-target="#wallet_clipboard_<?php echo $request->id; ?>">Copy</button> </td>
                                        <td>Withdrawal</td>
                                        <td><?php echo $request->request_timestamp; ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/accept-withdrawal-request/<?php echo $request->id; ?>/<?php echo $request->value; ?>" class="button button-outline button-info"><span>Accept</span></a>
                                            <a href="<?php echo base_url(); ?>admin/reject-withdrawal-request/<?php echo $request->id; ?>" class="button button-outline button-secondary"><span>Reject</span></a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--Hoverable Rows Light End-->


        <!--Hoverable Rows Light Start-->
        <div class="col-lg-12 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Pending deposit requests</h4>
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                            <?php if (!empty($investment_requests)) { ?>
                                <tr>
                                    <th>Request</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Product name</th>
                                    <th>Wallet</th>
                                    <th>Type</th>
                                    <th>USD</th>
                                    <th>BTC</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            <?php }
                            ?>
                        </thead>
                        <tbody>
                            <?php
                            if (empty($investment_requests)) {
                                echo "No pending investment requests at the moment";
                            } else {
                                foreach ($investment_requests as $request) {
                            ?>


                                    <tr>
                                        <form action="<?php echo base_url('form/admin-send-wallet-id-to-client'); ?>" method="POST">
                                            <input type="hidden" name="request_id" value="<?php echo $request->id; ?>">
                                            <input type="hidden" name="request_value" value="<?php echo $request->value; ?>">
                                            <input type="hidden" name="user_id" value="<?php echo $request->user_id; ?>">
                                            <th><?php echo $request->id; ?></th>
                                            <td><?php echo $request->username; ?></td>
                                            <td><?php echo $request->email; ?></td>
                                            <td><?php echo $request->product_name; ?></td>
                                            <td><input name="wallet" type='text' class="form-control danger" placeholder="Paste Wallet here"></td>
                                            <td><?php echo $request->deposit; ?> </td>
                                            <td><?php echo $request->value; ?></td>
                                            <td><input name="value_btc" type='text' class="form-control danger" placeholder="Paste BTC value here"></td>
                                            <td><?php echo $request->request_timestamp; ?></td>
                                            <td>
                                                <input type="submit" value="Send Wallet" class="button button-outline button-info">

                                                <!--<a id="accept_<?php echo $request->id; ?>" href="<?php echo base_url(); ?>admin/accept-investment-request/<?php echo $request->id; ?>/<?php echo $request->value; ?>" class="button button-outline button-info"><span>Accept</span></a>-->
                                                <a href="<?php echo base_url(); ?>admin/reject-investment-request/<?php echo $request->id; ?>" class="button button-outline button-secondary"><span>Reject</span></a>
                                            </td>
                                        </form>
                                    </tr>
                            <?php
                                }
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--Hoverable Rows Light End-->


        <!--Hoverable Rows Light Start-->
        <div class="col-lg-12 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Pending deposit confirmations</h4>
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                            <?php if (!empty($investment_confirmations)) { ?>
                                <tr>
                                    <th>Request</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Product name</th>
                                    <!--                                    <th>Wallet</th>-->
                                    <th>Type</th>
                                    <th>USD</th>
                                    <!--                                    <th>BTC</th>-->
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            <?php }
                            ?>
                        </thead>
                        <tbody>
                            <?php
                            if (empty($investment_confirmations)) {
                                echo "No pending investment requests at the moment";
                            } else {
                                foreach ($investment_confirmations as $confirmation) {
                            ?>


                                    <tr>

                                        <input type="hidden" name="request_id" value="<?php echo $confirmation->id; ?>">
                                        <input type="hidden" name="request_value" value="<?php echo $confirmation->value; ?>">
                                        <input type="hidden" name="user_id" value="<?php echo $confirmation->user_id; ?>">
                                        <th><?php echo $confirmation->id; ?></th>
                                        <td><?php echo $confirmation->username; ?></td>
                                        <td><?php echo $confirmation->email; ?></td>
                                        <td><?php echo $confirmation->product_name; ?></td>

                                        <td><?php echo $confirmation->deposit; ?> </td>
                                        <td><?php echo $confirmation->value; ?></td>

                                        <td><?php echo $confirmation->request_timestamp; ?></td>
                                        <td>


                                            <a href="<?php echo base_url(); ?>admin/accept-investment-request/<?php echo $confirmation->id; ?>/<?php echo $confirmation->value; ?>" class="button button-outline button-info"><span>Accept</span></a>
                                            <a href="<?php echo base_url(); ?>admin/reject-investment-request/<?php echo $confirmation->id; ?>" class="button button-outline button-secondary"><span>Reject</span></a>
                                        </td>
                                        </form>
                                    </tr>
                            <?php
                                }
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--Hoverable Rows Light End-->


        <!--</div> Recent Transaction End -->

    </div>

</div><!-- Content Body End -->