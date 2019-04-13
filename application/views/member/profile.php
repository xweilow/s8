<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">P</div>
                        </div>
                        <div class="media-body">
                            <h1>Profile</h1>
                            <p class="opacity-75">Please fill in according to your real identity information. Verification is needed before any transaction is to be made within system.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pull-up">
        <div class="row">
            <div class="col-lg-12 m-b-30">
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
                                        <?php if($ic_file_path == '') { ?>
                                            <h6 class="text-primary text-right m-0">Pending Upload</h6>
                                        <?php } else if($ic_file_path != '' && $ic_status == 0) { ?>
                                            <h6 class="text-primary text-right m-0">Pending Verification</h6>
                                        <?php } else if($ic_status == 1) { ?>
                                            <h6 class="text-success text-right m-0">Verified</h6>
                                        <?php } else if($ic_status == 2) { ?>
                                            <h6 class="text-danger text-right m-0">Verification Failed</h6>
                                        <?php } ?>
                                    </h6>
                                    <?php if($ic_status == 2 && $ic_remark != '') { ?>
                                    <p class="text-muted m-0 ">
                                        <?php echo $ic_remark ?>
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
                                        <?php if($bank_file_path == '') { ?>
                                            <h6 class="text-primary text-right m-0">Pending Upload</h6>
                                        <?php } else if($bank_file_path != '' && $bank_status == 0) { ?>
                                            <h6 class="text-primary text-right m-0">Pending Verification</h6>
                                        <?php } else if($bank_status == 1) { ?>
                                            <h6 class="text-success text-right m-0">Verified</h6>
                                        <?php } else if($bank_status == 2) { ?>
                                            <h6 class="text-danger text-right m-0">Verification Failed</h6>
                                        <?php } ?>
                                    </h6>
                                    <?php if($bank_status == 2 && $bank_remark != '') { ?>
                                    <p class="text-muted m-0 ">
                                        <?php echo $bank_remark ?>
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
                                                    <label for="fname">Full Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="fname" value="<?php echo $fname ?>" required <?php if($ic_status == 1) { echo "disabled"; } ?>>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="email" value="<?php echo $email ?>" required <?php if($ic_status == 1) { echo "disabled"; } ?>>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="mobile" value="<?php echo $mobile ?>" required <?php if($ic_status == 1) { echo "disabled"; } ?>>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="ic">Identity Card <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="ic" value="<?php echo $ic ?>" required <?php if($ic_status == 1) { echo "disabled"; } ?>>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="ic_file_path">Upload Identity Card <span class="text-danger">*</span></label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="ic_file_path" <?php if($ic_status == 1) { echo "disabled"; } ?>>
                                                        <label class="custom-file-label" for="ic_file_path">Choose file</label>
                                                        <?php if($ic_file_path != '') { ?>
                                                            <span class="help-block">Last Upload: <a href="<?php echo base_url().$ic_file_path ?>" target="_blank" class="btn btn-sm ml-2 mr-2 btn-light text-primary">View File</a></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success llc_submit" <?php if($ic_status == 1) { echo "disabled"; } ?>>Update</button>
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
                                                    <label for="bank_account_name">Bank Account Holder <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="bank_account_name" value="<?php echo $bank_account_name ?>" required <?php if($bank_status == 1) { echo "disabled"; } ?>>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="bank_account_number">Bank Account Number <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="bank_account_number" value="<?php echo $bank_account_number ?>" required <?php if($bank_status == 1) { echo "disabled"; } ?>>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="bank_name">Bank Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="bank_name" value="<?php echo $bank_name ?>" required <?php if($bank_status == 1) { echo "disabled"; } ?>>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="branch_address">Bank Branch <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="branch_address" value="<?php echo $branch_address ?>" required <?php if($bank_status == 1) { echo "disabled"; } ?>>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="bank_swift_code">Bank SWIFT Code</label>
                                                    <input type="text" class="form-control" id="bank_swift_code" value="<?php echo $bank_swift_code ?>" <?php if($bank_status == 1) { echo "disabled"; } ?>>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="bank_file_path">Upload Bankbook <span class="text-danger">*</span></label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="bank_file_path" <?php if($bank_status == 1) { echo "disabled"; } ?>>
                                                        <label class="custom-file-label" for="bank_file_path">Choose file</label>
                                                        <?php if($bank_file_path != '') { ?>
                                                            <span class="help-block" style="margin-top: 5px;">Last Upload: <a href="<?php echo base_url().$bank_file_path ?>" target="_blank" class="btn btn-sm ml-2 mr-2 btn-light text-primary">View File</a></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success llc_submit" <?php if($bank_status == 1) { echo "disabled"; } ?>>Update</button>
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
                                                    <label for="addressline1">Address 1 <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="addressline1" value="<?php echo $addressline1 ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="addressline2">Address 2</label>
                                                    <input type="text" class="form-control" id="addressline2" value="<?php echo $addressline2 ?>">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="postcode">Postcode <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="postcode" value="<?php echo $postcode ?>" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="city">City <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="city" value="<?php echo $city ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="state">State <span class="text-danger">*</span></label>
                                                    <select class="form-control" id="state" required>
                                                        <option value=''>-</option>
                                                        <?php foreach($states as $s) { ?>
                                                        <option value='<?php echo $s['id'] ?>' <?php if($state == $s['id']) { echo "selected"; } ?>><?php echo $s['name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="country">Country <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="country" value="Malaysia" required disabled>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success llc_submit">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="pass">
                                    <h5 class="mb-0">
                                        <a href="#!" class="d-block collapsed" data-toggle="collapse" data-target="#pass-tab" aria-expanded="false" aria-controls="collapseFour">
                                            <i class="mdi mdi-lock"></i> Password
                                        </a>
                                    </h5>
                                </div>
                                <div id="pass-tab" class="collapse" aria-labelledby="pass" data-parent="#profile">
                                    <div class="card-body">
                                        <form id="form-password">
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="curr_password">Current Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="curr_password" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="password">New Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="password" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="password2">Repeat New Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="password2" required>
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
        if($('#fname').val() == '' || $('#email').val() == '' || $('#mobile').val() == '' || $('#ic').val() == '' || ($("#ic_file_path")[0].files.length == 0 && '<?php echo $ic_file_path ?>' == '')) {
            LLC.displayError("Please Fill In All Fields");
            return false;
        }
        if(!LLC.checkEmailFormat($('#email').val())) {
            LLC.displayError("Invalid Email Format");
            return false;
        }
        if($("#ic_file_path")[0].files.length > 0 && !LLC.checkFileExtension($('#ic_file_path').val())) {
            LLC.displayError("Invalid File Format");
            return false;
        }
        
        var formData = new FormData();
        formData.append("fname", $('#fname').val());
        formData.append("email", $('#email').val());
        formData.append("mobile", $('#mobile').val());
        formData.append("ic", $('#ic').val());
        formData.append("ic_file_path", $("#ic_file_path")[0].files[0]);
        
        LLC.callServer('user/updatePersonalInfo', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                setTimeout(function() { location.reload(); }, 1500);
            });
        }, this);
        return false;
    });
    $('#form-bank').submit(function() {
        if($('#bank_account_name').val() == '' || $('#bank_account_number').val() == '' || $('#bank_name').val() == '' || $('#branch_address').val() == '' || ($("#bank_file_path")[0].files.length == 0 && '<?php echo $bank_file_path ?>' == '')) {
            LLC.displayError("Please Fill In All Required Fields");
            return false;
        }
        if($("#bank_file_path")[0].files.length > 0 && !LLC.checkFileExtension($('#bank_file_path').val())) {
            LLC.displayError("Invalid File Format");
            return false;
        }
        
        var formData = new FormData();
        formData.append("bank_account_name", $('#bank_account_name').val());
        formData.append("bank_account_number", $('#bank_account_number').val());
        formData.append("bank_name", $('#bank_name').val());
        formData.append("branch_address", $('#branch_address').val());
        formData.append("bank_swift_code", $('#bank_swift_code').val());
        formData.append("bank_file_path", $("#bank_file_path")[0].files[0]);
        
        LLC.callServer('user/updateBankInfo', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                setTimeout(function() { location.reload(); }, 1500);
            });
        }, this);
        return false;
    });
    $('#form-address').submit(function() {
        if($('#addressline1').val() == '' || $('#city').val() == '' || $('#postcode').val() == '' || $('#state').val() == '' || $('#country').val() == '') {
            LLC.displayError("Please Fill In All Required Fields");
            return false;
        }
        
        var formData = new FormData();
        formData.append("addressline1", $('#addressline1').val());
        formData.append("addressline2", $('#addressline2').val());
        formData.append("city", $('#city').val());
        formData.append("postcode", $('#postcode').val());
        formData.append("state", $('#state').val());
        formData.append("country", $('#country').val());
        
        LLC.callServer('user/updateAddressInfo', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
            });
        }, this);
        return false;
    });
    $('#form-password').submit(function() {
        if($('#curr_password').val() == '' || $('#password').val() == '' || $('#password2').val() == '') {
            LLC.displayError("Please Fill In All Required Fields");
            return false;
        }
        if($('#password').val().length < 6) {
            LLC.displayError("Password Should Be At Least 6 Characters");
            return false;
        }
        if($('#password').val() != $('#password2').val()) {
            LLC.displayError("Please Make Sure Repeated Password Is Correct");
            return false;
        }
        
        var formData = new FormData();
        formData.append("curr_password", $('#curr_password').val());
        formData.append("password", $('#password').val());
        
        LLC.callServer('user/updatePassword', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                $('#form-password input').val('');
            });
        }, this);
        return false;
    });
</script>