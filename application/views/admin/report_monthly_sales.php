<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">S</div>
                        </div>
                        <div class="media-body">
                            <h1>Sales Monthly Report</h1>
                            <p class="opacity-75">Report That Show Monthly Details Of Stock Order. </p>
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
                                        <th>Year</th>
                                        <th>Month</th>
                                        <th>Count</th>
                                        <th>Total (Boxes)</th>
                                        <th>Boxes*40</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1; foreach($sales as $s) { ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $s['year'] ?></td>
                                        <td><?php echo $s['month'] ?></td>
                                        <td><?php echo $s['count'] ?></td>
                                        <td><?php echo $s['quantity'] ?></td>
                                        <td><?php echo $s['quantity']*40 ?></td>
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
