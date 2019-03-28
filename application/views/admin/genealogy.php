<link rel='stylesheet' href='<?php echo base_url() ?>assets/vendor/autocomplete/autocomplete.css'/>
<script src="<?php echo base_url() ?>assets/vendor/autocomplete/autocomplete.js"></script>

<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">G</div>
                        </div>
                        <div class="media-body">
                            <h1>Genealogy</h1>
                            <p class="opacity-75">Team that build career together.</p>
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
                                <div class="name"><?php echo $member['account_name'] ?></div>
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
                                <div class="name"><?php echo getRank($member['rank']) ?></div>
                                <div class="text-muted">Rank</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title rounded-circle bg-warning">D</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name"><?php echo $directDownlines ?></div>
                                <div class="text-muted">Direct Downline Count</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title rounded-circle bg-danger">D</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name"><?php echo sizeof($downlines) ?></div>
                                <div class="text-muted">Downline Count</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title rounded-circle bg-secondary">A</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name ic"><?php echo $member['total_sales'] ?></div>
                                <div class="text-muted">Accumulated Sales</div>
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
                                <label for="account_name">Upline ID <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="account_name" required>
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
                                        <th>Joined At</th>
                                        <th>Username</th>
                                        <th>Upline ID</th>
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
                                        <td><?php echo $downline['sponsor_id'] ?></td>
                                        <td><?php echo $downline['total_sales'] ?></td>
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
<script>
    $('.llc_submit').click(function() {
        location = '<?php echo base_url() ?>board/members/genealogy/'+$("#account_name").val();
    });

    var names = [<?php $comma = false; foreach ($members as $key => $n) { if($comma) echo ','; echo "'".$n['account_name']."'"; $comma = true; } ?>];

    $('#account_name').autocomplete({
        source:[names],
        minLength: 3
    });
</script>
