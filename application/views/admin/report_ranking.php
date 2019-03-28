<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">R</div>
                        </div>
                        <div class="media-body">
                            <h1>Rank Change Report</h1>
                            <p class="opacity-75">Report That Show Datetime Of Member Rank Change.</p>
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
                                        <th>Username</th>
                                        <th>From</th>
                                        <th>To</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1; foreach($members as $member) { ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $member['created_at'] ?></td>
                                        <td><?php echo $member['account_name'] ?></td>
                                        <td><?php echo getRank($member['from_rank']) ?></td>
                                        <td><?php echo getRank($member['to_rank']) ?></td>
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
<script>
    $('.llc_submit').click(function() {
        location = '<?php echo base_url() ?>board/members/genealogy/'+$("#account_name").val();
    });
</script>
