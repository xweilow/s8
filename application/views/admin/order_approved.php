<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">A</div>
                        </div>
                        <div class="media-body">
                            <h1>Approved Orders</h1>
                            <p class="opacity-75">Orders That Have Been Approved And Processed By The Company.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  pull-up">
        <div class="row">
            <div class="col-12">
                <div class="card" style="margin-bottom: 50px;">
                    <div class="card-body">
                        <div class="table-responsive p-t-10 overflow-auto">
                            <table id="example"class="table" style="width:100%">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th>#</th>
                                        <th style="min-width: 100px;">Created At</th>
                                        <th>Username</th>
                                        <th style="min-width: 250px;">Order Details</th>
                                        <th style="min-width: 200px;">Delivery Option</th>
                                        <th style="min-width: 200px; text-align: center;">Approval Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($records as $record) { ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $record['id'] ?></td>
                                        <td><?php echo $record['created_at'] ?></td>
                                        <td><?php echo $record['account_name'] ?></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Quantity (Boxes)
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo $record['quantity'] ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Price/Box (RM)
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo number_format($record['price'], 2) ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Total Price (RM)
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo number_format($record['total_price'], 2) ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Receipt
                                                </div>
                                                <div class="col-6 text-right">
                                                    <a href="<?php echo base_url().$record['receipt_file_path'] ?>" target="_blank" class="btn btn-sm ml-2 btn-light text-primary">View Receipt</a>
                                                </div>
                                            </div>
                                        </td>
                                        <?php if($record['delivery_option'] == 1) { ?>
                                        <td>Self Pick-Up</td>
                                        <?php } else { ?>
                                        <td class="text-left">
                                            <?php echo $record['receiver'] ?><br />
                                            <?php echo $record['mobile'] ?><br />
                                            <?php echo $record['addressline1'] ?><br />
                                            <?php echo $record['addressline2'] == '' ? '' : $record['addressline2'].'<br />' ?>
                                            <?php echo $record['postcode'].' '.$record['city'] ?><br />
                                            <?php echo $record['state'] ?><br />
                                            <?php echo $record['country'] ?>
                                        </td>
                                        <?php } ?>
                                        <td style="text-align: center;">
                                            <?php echo $record['approved_at'] ?><br />
                                            <?php echo $record['remark'] ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>