<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">O</div>
                        </div>
                        <div class="media-body">
                            <h1>Order History</h1>
                            <p class="opacity-75">Please Check History To Track Order Status.</p>
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
                        <div class="table-responsive p-t-10">
                            <table id="example"class="table" style="width:100%">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th>#</th>
                                        <th>Ordered At</th>
                                        <th>Quantity</th>
                                        <th class="text-right">Price</th>
                                        <th class="text-right">Total</th>
                                        <th>Receipt</th>
                                        <th>Delivery Option</th>
                                        <th>Status</th>
                                        <th>Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1; foreach($records as $record) { ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $record['created_at'] ?></td>
                                        <td><?php echo $record['quantity'] ?></td>
                                        <td class="text-right"><?php echo number_format($record['price'], 2) ?></td>
                                        <td class="text-right"><?php echo number_format($record['total_price'], 2) ?></td>
                                        <td><a href="<?php echo base_url().$record['receipt_file_path'] ?>" target="_blank" class="btn btn-sm ml-2 mr-2 btn-light text-primary">View Receipt</a></td>
                                        <td>
                                            <?php if($record['delivery_option'] == 1) {
                                                echo "Self Pick Up";
                                            } else {
                                                echo "Delivery Service";
                                                echo "<br /><br />";
                                                echo $record['receiver']."<br />";
                                                echo $record['mobile']."<br />";
                                                echo $record['addressline1']."<br />";
                                                echo $record['addressline2'] == "" ? "" : $record['addressline2']."<br />";
                                                echo $record['postcode']." ".$record['city'];
                                                echo $record['state']."<br />";
                                                echo $record['country']."<br />";
                                            } ?>
                                        </td>
                                        <td>
                                            <?php if($record['is_approved'] == 0 && $record['is_rejected'] == 0) { ?>
                                                <span class="badge badge-soft-info">Pending</span>
                                            <?php } else if($record['is_approved'] == 1 && $record['is_rejected'] == 0) { ?>
                                                <span class="badge badge-soft-success">Approved</span>
                                            <?php } else if($record['is_approved'] == 0 && $record['is_rejected'] == 1) { ?>
                                                <span class="badge badge-soft-danger">Rejected</span>
                                            <?php } ?>
                                        </td>
                                        <td><?php echo $record['remark'] ?></td>
                                    </tr>
                                    <?php $id++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
