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
                            <h1>Member Edit - <?php echo $member['account_name'] ?></h1>
                            <p class="opacity-75">Please fill in according to member's real identity information.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pull-up">
        <div class="row">
            <div class="col-lg-12 m-b-30">
                <div class="alert alert-border-danger alert-dismissible fade show" role="alert">
                    <div class="d-flex">
                        <div class="icon">
                            <i class="icon mdi mdi-alert-octagram"></i>
                        </div>
                        <div class="content" style="margin-top: 7px;">
                            Note: If Member's Identity/Bank Information Has Been Verified, Editing Their Details Will Not Change Their Verification Status.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!--card ends-->
                <div class="card m-b-30">
                    <div class="card-body ">
                        <div class="p-t-15 p-b-15  border-bottom border-bottom-dashed">
                            <div class="row ">
                                <div class="col-md-5 my-auto">
                                    <h4 class="m-0">Personal Information Verification</h4>
                                </div>
                                <div class="col-md-7 text-right">
                                    <h6 class="text-primary text-right m-0">
                                        <?php if($member['ic_file_path'] == '') { ?>
                                            <h6 class="text-primary text-right m-0">Pending Upload</h6>
                                        <?php } else if($member['ic_file_path'] != '' && $member['ic_status'] == 0) { ?>
                                            <h6 class="text-primary text-right m-0">Pending Verification</h6>
                                        <?php } else if($member['ic_status'] == 1) { ?>
                                            <h6 class="text-success text-right m-0">Verified</h6>
                                        <?php } else if($member['ic_status'] == 2) { ?>
                                            <h6 class="text-danger text-right m-0">Verification Failed</h6>
                                        <?php } ?>
                                    </h6>
                                    <?php if($member['ic_status'] == 2 && $member['ic_remark'] != '') { ?>
                                    <p class="text-muted m-0 ">
                                        <?php echo $member['ic_remark'] ?>
                                    </p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15 p-b-15">
                            <div class="row ">
                                <div class="col-md-5 my-auto">
                                    <h4 class="m-0">Bank Information Verification</h4>
                                </div>
                                <div class="col-md-7 text-right">
                                    <h6 class="text-primary text-right">
                                        <?php if($member['bank_file_path'] == '') { ?>
                                            <h6 class="text-primary text-right m-0">Pending Upload</h6>
                                        <?php } else if($member['bank_file_path'] != '' && $member['bank_status'] == 0) { ?>
                                            <h6 class="text-primary text-right m-0">Pending Verification</h6>
                                        <?php } else if($member['bank_status'] == 1) { ?>
                                            <h6 class="text-success text-right m-0">Verified</h6>
                                        <?php } else if($member['bank_status'] == 2) { ?>
                                            <h6 class="text-danger text-right m-0">Verification Failed</h6>
                                        <?php } ?>
                                    </h6>
                                    <?php if($member['bank_status'] == 2 && $member['bank_remark'] != '') { ?>
                                    <p class="text-muted m-0 ">
                                        <?php echo $member['bank_remark'] ?>
                                    </p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--card begins-->
                <div class="card m-b-30">
                    <div class="card-header">
                        <div class="card-title">Details</div>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="profile">
                            <div class="card">
                                <div class="card-header" id="personal">
                                    <h5 class="mb-0">
                                        <a href="#!" class="d-block" data-toggle="collapse" data-target="#personal-tab" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="mdi mdi-account"></i> Personal Information
                                        </a>
                                    </h5>
                                </div>

                                <div id="personal-tab" class="collapse show" aria-labelledby="personal" data-parent="#profile">
                                    <div class="card-body">
                                        <form id="form-personal">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="fname">Full Name</label>
                                                    <input type="text" class="form-control" id="fname" value="<?php echo $member['fname'] ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" value="<?php echo $member['email'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="mobile">Mobile</label>
                                                    <input type="text" class="form-control" id="mobile" value="<?php echo $member['mobile'] ?>">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="ic">Identity Card</label>
                                                    <input type="text" class="form-control" id="ic" value="<?php echo $member['ic'] ?>">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="ic_file_path">Upload Identity Card</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="ic_file_path">
                                                        <label class="custom-file-label" for="ic_file_path">Choose file</label>
                                                        <?php if($member['ic_file_path'] != '') { ?>
                                                            <span class="help-block">Last Upload: <a href="<?php echo base_url().$member['ic_file_path'] ?>" target="_blank" class="btn btn-sm ml-2 mr-2 btn-light text-primary">View File</a></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success llc_submit">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="bank">
                                    <h5 class="mb-0">
                                        <a href="#!" class="d-block collapsed" data-toggle="collapse" data-target="#bank-tab" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="mdi mdi-office-building"></i> Bank Information
                                        </a>
                                    </h5>
                                </div>
                                <div id="bank-tab" class="collapse" aria-labelledby="bank" data-parent="#profile">
                                    <div class="card-body">
                                        <form id="form-bank">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="bank_account_name">Bank Account Holder</label>
                                                    <input type="text" class="form-control" id="bank_account_name" value="<?php echo $member['bank_account_name'] ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="bank_account_number">Bank Account Number</label>
                                                    <input type="text" class="form-control" id="bank_account_number" value="<?php echo $member['bank_account_number'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="bank_name">Bank Name</label>
                                                    <input type="text" class="form-control" id="bank_name" value="<?php echo $member['bank_name'] ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="branch_address">Bank Branch</label>
                                                    <input type="text" class="form-control" id="branch_address" value="<?php echo $member['branch_address'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="bank_swift_code">Bank SWIFT Code</label>
                                                    <input type="text" class="form-control" id="bank_swift_code" value="<?php echo $member['bank_swift_code'] ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="bank_file_path">Upload Bankbook</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="bank_file_path">
                                                        <label class="custom-file-label" for="bank_file_path">Choose file</label>
                                                        <?php if($member['bank_file_path'] != '') { ?>
                                                            <span class="help-block" style="margin-top: 5px;">Last Upload: <a href="<?php echo base_url().$member['bank_file_path'] ?>" target="_blank" class="btn btn-sm ml-2 mr-2 btn-light text-primary">View File</a></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success llc_submit">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="address">
                                    <h5 class="mb-0">
                                        <a href="#!" class="d-block collapsed" data-toggle="collapse" data-target="#address-tab" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="mdi mdi-home"></i> Address Information
                                        </a>
                                    </h5>
                                </div>
                                <div id="address-tab" class="collapse" aria-labelledby="address" data-parent="#profile">
                                    <div class="card-body">
                                        <form id="form-address">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="addressline1">Address 1</label>
                                                    <input type="text" class="form-control" id="addressline1" value="<?php echo $member['addressline1'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="addressline2">Address 2</label>
                                                    <input type="text" class="form-control" id="addressline2" value="<?php echo $member['addressline2'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="postcode">Postcode</label>
                                                    <input type="text" class="form-control" id="postcode" value="<?php echo $member['postcode'] ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="city">City</label>
                                                    <input type="text" class="form-control" id="city" value="<?php echo $member['city'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="state">State</label>
                                                    <select class="form-control" id="state" required>
                                                        <option value=''>-</option>
                                                        <?php foreach($states as $s) { ?>
                                                        <option value='<?php echo $s['id'] ?>' <?php if($member['state'] == $s['id']) { echo "selected"; } ?>><?php echo $s['name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="country">Country </label>
                                                    <input type="text" class="form-control" id="country" value="Malaysia" disabled>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success llc_submit">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('#form-personal').submit(function() {
        if($("#ic_file_path")[0].files.length > 0 && !LLC.checkFileExtension($('#ic_file_path').val())) {
            LLC.displayError("Invalid File Format");
            return false;
        }
        
        var formData = new FormData();
        formData.append("account_name", '<?php echo $member['account_name'] ?>');
        formData.append("fname", $('#fname').val());
        formData.append("email", $('#email').val());
        formData.append("mobile", $('#mobile').val());
        formData.append("ic", $('#ic').val());
        formData.append("ic_file_path", $("#ic_file_path")[0].files[0]);
        
        LLC.callServer('user/adminUpdatePersonalInfo', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                setTimeout(function() { location.reload(); }, 1500);
            });
        }, this);
        return false;
    });
    $('#form-bank').submit(function() {
        if($("#bank_file_path")[0].files.length > 0 && !LLC.checkFileExtension($('#bank_file_path').val())) {
            LLC.displayError("Invalid File Format");
            return false;
        }
        
        var formData = new FormData();
        formData.append("account_name", '<?php echo $member['account_name'] ?>');
        formData.append("bank_account_name", $('#bank_account_name').val());
        formData.append("bank_account_number", $('#bank_account_number').val());
        formData.append("bank_name", $('#bank_name').val());
        formData.append("branch_address", $('#branch_address').val());
        formData.append("bank_swift_code", $('#bank_swift_code').val());
        formData.append("bank_file_path", $("#bank_file_path")[0].files[0]);
        
        LLC.callServer('user/adminUpdateBankInfo', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                setTimeout(function() { location.reload(); }, 1500);
            });
        }, this);
        return false;
    });
    $('#form-address').submit(function() {
        var formData = new FormData();
        formData.append("account_name", '<?php echo $member['account_name'] ?>');
        formData.append("addressline1", $('#addressline1').val());
        formData.append("addressline2", $('#addressline2').val());
        formData.append("city", $('#city').val());
        formData.append("postcode", $('#postcode').val());
        formData.append("state", $('#state').val());
        formData.append("country", $('#country').val());
        
        LLC.callServer('user/adminUpdateAddressInfo', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
            });
        }, this);
        return false;
    });
</script>