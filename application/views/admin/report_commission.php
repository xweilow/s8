<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">C</div>
                        </div>
                        <div class="media-body">
                            <h1>Commission Report</h1>
                            <p class="opacity-75">Report For Commission Breakdown.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  pull-up">
        <div class="row">
            <div class="col-lg-6">
                <div class="card m-b-30">
                    <div class="card-header">
                        <div class="card-title">Account Details</div>
                    </div>
                    <div class="list-group list  list-group-flush">
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title rounded-circle bg-success">U</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name"><?php echo isset($member) ? $member['account_name'] : '-' ?></div>
                                <div class="text-muted">Username</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title rounded-circle bg-primary">R</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name"><?php echo isset($member) ? getRank($member['account_name']) : '-' ?></div>
                                <div class="text-muted">Rank</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title rounded-circle bg-warning">T</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name"><?php echo isset($member) ? number_format($totalComm, 2) : '-' ?></div>
                                <div class="text-muted">Total Commission</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php if(isset($_SESSION['errmsg'])) { ?>
                <div class="alert alert-border-danger alert-dismissible fade show" role="alert">
                    <div class="d-flex">
                        <div class="icon">
                            <i class="icon mdi mdi-alert-octagram"></i>
                        </div>
                        <div class="content" style="margin-top: 7px;">
                            <?php echo $_SESSION['errmsg']; unset($_SESSION['errmsg']); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!--widget card begin-->
                <div class="card m-b-30">
                    <div class="card-header">
                        <div class="card-title">Search</div>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="account_name">Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="account_name" required list="members">
                                <datalist id='members'>
                                    <?php foreach ($members as $key => $n) { ?>
                                    <option>
                                        <?php echo $n['account_name'] ?>
                                    </option>
                                    <?php } ?>
                                </datalist>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary llc_submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                        <th>Username</th>
                                        <th>From User</th>
                                        <th style='text-align: right;'>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1; foreach($records as $record) { ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $record['created_at'] ?></td>
                                        <td><?php echo $record['account_name'] ?></td>
                                        <td><?php echo $record['account_name_2'] ?></td>
                                        <td style='text-align: right;'><?php echo number_format($record['amount'], 2) ?></td>
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
<script>
    $('.llc_submit').click(function() {
        location = '<?php echo base_url() ?>board/reports/commission/'+$("#account_name").val();
    });
</script>
