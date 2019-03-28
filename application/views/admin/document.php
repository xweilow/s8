<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">D</div>
                        </div>
                        <div class="media-body">
                            <h1>Document Approval</h1>
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
                                        <th style="min-width: 100px;">Joined At</th>
                                        <th>Username</th>
                                        <th style="min-width: 300px;">Identity Details</th>
                                        <th style="min-width: 300px;">Bank Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1; foreach($members as $member) { ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $id ?></td>
                                        <td><?php echo date('Y-m-d', strtotime($member['created_at'])) ?></td>
                                        <td><?php echo $member['account_name'] ?></td>
                                        <td>
                                            <div class="row m-b-10">
                                                <div class="col-12">
                                                    <div class="pending-tab" <?php if($member['ic_status'] != 0) { echo "style='display: none;'"; } ?>>
                                                        <button class="btn btn-sm btn-success btn-action" style="width: 80px;" data-id="<?php echo $member['id'] ?>" data-action="approve" data-type="ic">Approve</button>
                                                        <button class="btn btn-sm btn-danger btn-action" style="width: 80px;" data-id="<?php echo $member['id'] ?>" data-action="reject" data-type="ic">Reject</button>
                                                        <input type="text" class="form-control remark" placeholder="Remark" style="margin-top: 5px;">
                                                    </div>
                                                    <div class="approved-tab" <?php if($member['ic_status'] != 1) { echo "style='display: none;'"; } ?>>
                                                        <span class="badge badge-soft-success">Approved</span>
                                                    </div>
                                                    <div class="rejected-tab" <?php if($member['ic_status'] != 2) { echo "style='display: none;'"; } ?>>
                                                        <span class="badge badge-soft-danger">Rejected</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Name
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo $member['fname'] ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Identity Card
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo $member['ic'] ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    File
                                                </div>
                                                <div class="col-6 text-right">
                                                    <a href="<?php echo base_url().$member['ic_file_path'] ?>" target="_blank" class="btn btn-sm ml-2 btn-light text-primary">View File</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row m-b-10">
                                                <div class="col-12">
                                                    <div class="pending-tab" <?php if($member['bank_status'] != 0) { echo "style='display: none;'"; } ?>>
                                                        <button class="btn btn-sm btn-success btn-action" style="width: 80px;" data-id="<?php echo $member['id'] ?>" data-action="approve" data-type="bank">Approve</button>
                                                        <button class="btn btn-sm btn-danger btn-action" style="width: 80px;" data-id="<?php echo $member['id'] ?>" data-action="reject" data-type="bank">Reject</button>
                                                        <input type="text" class="form-control remark" placeholder="Remark" style="margin-top: 5px;">
                                                    </div>
                                                    <div class="approved-tab" <?php if($member['bank_status'] != 1) { echo "style='display: none;'"; } ?>>
                                                        <span class="badge badge-soft-success">Approved</span>
                                                    </div>
                                                    <div class="rejected-tab" <?php if($member['bank_status'] != 2) { echo "style='display: none;'"; } ?>>
                                                        <span class="badge badge-soft-danger">Rejected</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Bank Name
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo $member['bank_name'] ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Account Holder
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo $member['bank_account_name'] ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Account Number
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo $member['bank_account_number'] ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Branch Address
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo $member['branch_address'] ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Swift Code
                                                </div>
                                                <div class="col-6 text-right">
                                                    <?php echo $member['bank_swift_code'] ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    File
                                                </div>
                                                <div class="col-6 text-right">
                                                    <a href="<?php echo base_url().$member['bank_file_path'] ?>" target="_blank" class="btn btn-sm ml-2 btn-light text-primary">View File</a>
                                                </div>
                                            </div>
                                        </td>
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
    $('.btn-action').click(function() {
        var btn = $(this);
        var action = $(this).data("action");
        
        var formData = new FormData();
        formData.append("document_type", $(this).data("type"));
        formData.append("action", $(this).data("action"));
        formData.append("id", $(this).data("id"));
        formData.append("remark", $(this).parents("td").find(".remark").val());
        
        LLC.callServer('user/updateMemberDocument', formData, function(resp) {
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
