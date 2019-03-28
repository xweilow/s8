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
                            <h1>Approved Withdrawal</h1>
                            <p class="opacity-75">Withdrawal Transactions That Have Been Paid By The Company.</p>
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
                                        <th>Amount</th>
                                        <th style="min-width: 300px;">Bank Details</th>
                                        <th style="min-width: 200px;">Approval Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1; foreach($records as $record) { ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $record['created_at'] ?></td>
                                        <td><?php echo $record['account_name'] ?></td>
                                        <td><?php echo $record['amount'] ?></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Bank Name
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo $record['b_name'] ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Account Holder
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo $record['b_acc_name'] ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Account Number
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo $record['b_acc_num'] ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Branch Address
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo $record['b_branch_add'] ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Swift Code
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo $record['b_swift'] ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $record['approved_at'] ?><br />
                                            <?php echo $record['remark'] ?>
                                        </td>
                                    </tr>
                                    <?php $id++; } ?>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>