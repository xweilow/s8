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
                            <h1>Withdrawal Approval</h1>
                            <p class="opacity-75">Check Details Carefully Before Proceed To Approval.</p>
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
                                        <th style="text-align: center;">Action</th>
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
                                        <td style="text-align: center;">
                                            <div class="row m-b-10">
                                                <div class="col-12">
                                                    <div class="pending-tab">
                                                        <button class="btn btn-sm btn-success btn-action" style="width: 80px;" data-id="<?php echo $record['id'] ?>" data-action="approve">Approve</button>
                                                        <button class="btn btn-sm btn-danger btn-action" style="width: 80px;" data-id="<?php echo $record['id'] ?>" data-action="reject">Reject</button>
                                                        <input type="text" class="form-control remark" placeholder="Remark" style="margin-top: 5px;">
                                                    </div>
                                                    <div class="approved-tab" style='display: none;'>
                                                        <span class="badge badge-soft-success">Approved</span>
                                                    </div>
                                                    <div class="rejected-tab" style='display: none;'>
                                                        <span class="badge badge-soft-danger">Rejected</span>
                                                    </div>
                                                </div>
                                            </div>
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
<script>
    $('.btn-action').click(function() {
        var btn = $(this);
        var action = $(this).data("action");
        
        var formData = new FormData();
        formData.append("action", $(this).data("action"));
        formData.append("id", $(this).data("id"));
        formData.append("remark", $(this).parents("td").find(".remark").val());
        
        LLC.callServer('production/updateWithdrawalStatus', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                btn.parents("td").find(".pending-tab").hide();
                if(action == 'approve') {
                    btn.parents("td").find(".approved-tab").show();
                } else {
                    btn.parents("td").find(".rejected-tab").show();
                }
            });
        }, this);
        return false;
    });
</script>
