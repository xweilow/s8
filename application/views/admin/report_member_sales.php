<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">M</div>
                        </div>
                        <div class="media-body">
                            <h1>Member & Sales Report</h1>
                            <p class="opacity-75">Report That Summarize Each Member's Downline Count And Sales.</p>
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
                                        <th>Referrer Count</th>
                                        <th>Own Sales (Boxes)</th>
                                        <th>Total Sales (Boxes)</th>
                                        <th>Rank</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1; foreach($members as $member) { ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $member['created_at'] ?></td>
                                        <td><?php echo $member['sponsor_id'] ?></td>
                                        <td><?php echo $member['downline'] ?></td>
                                        <td><?php echo $member['ownSales'] ?></td>
                                        <td><?php echo $member['totalSales'] ?></td>
                                        <td><?php echo $member['rank'] ?></td>
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
