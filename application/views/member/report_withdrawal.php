<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">W</div>
                        </div>
                        <div class="media-body">
                            <h1>Withdrawal History</h1>
                            <p class="opacity-75">Records For All Withdrawal Transactions.</p>
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
                                        <th>Created At</th>
                                        <th>Amount</th>
                                        <th>Fee</th>
                                        <th>Bank Details</th>
                                        <th>Status</th>
                                        <th>Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1; foreach($records as $record) { ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $record['created_at'] ?></td>
                                        <td><?php echo number_format($record['amount'], 2) ?></td>
                                        <td><?php echo number_format($record['withdrawal_fee'], 2) ?></td>
                                        <td>
                                            <?php echo $record['b_name'] ?><br />
                                            <?php echo $record['b_acc_name'] ?><br />
                                            <?php echo $record['b_acc_num'] ?><br />
                                            <?php echo $record['b_branch_add'] ?><br />
                                            <?php echo $record['b_swift'] ?>
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
