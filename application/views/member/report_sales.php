<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">F</div>
                        </div>
                        <div class="media-body">
                            <h1>First Level Sales History</h1>
                            <p class="opacity-75">Your Direct Downline Sales That Affect Your Ranking.</p>
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
                                        <th>Joined At</th>
                                        <th>Username</th>
                                        <th>Sales (Boxes)</th>
                                        <th>Rank</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1; foreach($downlines as $downline) { ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $downline['created_at'] ?></td>
                                        <td><?php echo $downline['account_name'] ?></td>
                                        <td><?php echo $downline['own_sales'] ?></td>
                                        <td><?php echo getRank($downline['rank']) ?></td>
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
