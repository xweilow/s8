<style>
    .avatar-img2 {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }
</style>
<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">

                <div class="col-md-10 mx-auto text-center text-white p-b-30">
                    <div class="m-b-20">
                        <div class="avatar avatar-xl my-auto">
                            <img class="avatar-img2" src="<?php echo base_url() ?>img/logo.png" alt="">
                        </div>
                    </div>
                    <h1>Panel</h1>
                </div>

            </div>
        </div>
    </div>
    <div class="container pull-up">
        <div class="row">
            <div class="col-lg-3 col-md-6 m-b-30">
                <div class="card card-hover">
                    <div class="card-body">
                        <div class="text-center p-t-20">
                            <div class="avatar-lg avatar">
                                <div class="avatar-title rounded-circle badge-soft-info"><i class="mdi mdi-wallet h1 m-0"></i></div>

                            </div>
                            <div class="text-center">
                                <h1 class="fw-600 p-t-20"><?php echo number_format($cash_wallet, 2) ?></h1>
                                <p class="text-muted fw-600">Wallet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 m-b-30">
                <div class="card card-hover">
                    <div class="card-body">
                        <div class="text-center p-t-20">
                            <div class="avatar-lg avatar">
                                <div class="avatar-title rounded-circle badge-soft-dark"><i class="mdi mdi-cart h1 m-0"></i></div>

                            </div>
                            <div class="text-center">
                                <h1 class="fw-600 p-t-20"><?php echo $own_sales ?></h1>
                                <p class="text-muted fw-600">My Sales</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 m-b-30">
                <div class="card card-hover">
                    <div class="card-body">
                        <div class="text-center p-t-20">
                            <div class="avatar-lg avatar">
                                <div class="avatar-title rounded-circle badge-soft-success"><i class="mdi mdi-cash-usd h1 m-0"></i></div>

                            </div>
                            <div class="text-center">
                                <h1 class="fw-600 p-t-20"><?php echo number_format($totalComm, 2) ?></h1>
                                <p class="text-muted fw-600">Total Commission</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 m-b-30">
                <div class="card card-hover">
                    <div class="card-body">
                        <div class="text-center p-t-20">
                            <div class="avatar-lg avatar">
                                <div class="avatar-title rounded-circle badge-soft-danger"><i class="mdi mdi-account-multiple h1 m-0"></i></div>

                            </div>
                            <div class="text-center">
                                <h1 class="fw-600 p-t-20"><?php echo $downlineCount ?></h1>
                                <p class="text-muted fw-600">Total Referral</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card m-b-30">
                    <div class="card-header m-b-5 m-t-5">
                        <h5 class="card-title m-b-0"><?php echo $news['title'] ?></h5>
                    </div>
                    <div class="card-body">
                        <?php echo $news['content'] ?>
                    </div>
                    <div class="card-footer">
                        <i>Posted At:</i> <?php echo date("Y-m-d", strtotime($news['created_at'])) ?>
                    </div>
                </div>
                <div class="card m-b-30">
                    <div class="card-body">
                        <h3 class="m-b-20">🎯 Uprank Progress</h3>
                        <p class="m-b-5">
                            <span class="text-muted">My Rank: </span>
                            <span class="text-success fw-600"> <?php echo getRank($rank) ?></span>
                        </p>
                        <?php if($rank < 5) { ?>
                        <p>
                            <span class="text-muted">My Accumulated Sales: </span>
                            <span class="text-success fw-600"> <?php echo $total_sales ?> Box(es)</span>
                        </p>
                        <?php } ?>
                        <hr>
                        <?php foreach($rankDetails as $r) { ?>
                        <div class="m-b-10">
                            <div class="row">
                                <div class="col">
                                    <p class="m-b-5 text-info"><?php echo $r['name'] ?> <span class="text-muted"><?php echo $r['uprank_limit'] ?> Boxes</span></p>
                                </div>
                                <div class="col-auto text-right">
                                    <div class="<?php echo $r['percentage'] == 100 ? 'text-success' : 'text-muted' ?>"><?php echo $r['percentage'] ?>% Complete</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="progress">
                                    <div class="progress-bar <?php echo $r['percentage'] == 100 ? 'bg-success' : 'bg-warning' ?>" role="progressbar" style="width: <?php echo $r['percentage'] ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 m-b-30">
                <div class="card m-b-30">
                    <div class="card-body m-t-10">
                        <div class="text-center">
                            <div>
                                <span class="h3 fw-600">Ranking</span>
                            </div>

                        </div>
                    </div>
                    <div class="card-media m-b-20" style="text-align: center;">
                        <img src="<?php echo base_url() ?>img/rank<?php echo $rank ?>.png" alt="" style="width: 85%;">
                    </div>
                </div>
                <div class="card m-b-30">
                    <div class="card-header">
                        <h3>Account Details</h3>
                    </div>
                    <div class="list-group list  list-group-flush">
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title rounded-circle bg-primary">D</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name"><?php echo date("Y-m-d", strtotime($created_at)) ?></div>
                                <div class="text-muted">Joined At</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title rounded-circle bg-success"><?php echo strtoupper(AN()[0]) ?></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name"><?php echo AN() ?></div>
                                <div class="text-muted">My Username</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title rounded-circle bg-warning"><?php echo $sponsor_id != '' ? strtoupper($sponsor_id[0]) : 'S' ?></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name"><?php echo $sponsor_id ?></div>
                                <div class="text-muted">Introducer ID</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>