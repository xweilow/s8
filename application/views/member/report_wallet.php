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
                            <h1>Wallet History</h1>
                            <p class="opacity-75">Breakdown And Details Of Wallet Transactions.</p>
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
                                        <th>From Account</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1; foreach($transactions as $transaction) { ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $transaction['created_at'] ?></td>
                                        <td><?php echo $transaction['account_name_2'] ?></td>
                                        <td><?php echo $transaction['description2'] ?></td>
                                        <td><?php echo number_format($transaction['amount'], 2) ?></td>
                                        <td><?php echo number_format($total, 2) ?></td>
                                    </tr>
                                    <?php $id++; $total -= $transaction['amount']; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
