<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">A</div>
                        </div>
                        <div class="media-body">
                            <h1>Account Registration</h1>
                            <p class="opacity-75">Please fill in referrer's information to proceed new account registration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  pull-up">
        <div class="row">
            <div class="col-lg-12">
                <?php if($ic_status != 1) { ?>
                <div class="alert alert-border-danger alert-dismissible fade show" role="alert">
                    <div class="d-flex">
                        <div class="icon">
                            <i class="icon mdi mdi-alert-octagram"></i>
                        </div>
                        <div class="content" style="margin-top: 7px;">
                            New Account Registration Is Only Available After Identity Verification.
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
                        <div class="card-title">Details</div>
                    </div>
                    <div class="card-body ">
                        <form id="form-registration">
                            <fieldset <?php if($ic_status != 1) { echo "disabled"; } ?>>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="sponsor_id">Introducer ID <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="sponsor_id" value="<?php echo AN() ?>" required disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="account_name">Username <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="account_name" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="password">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password2">Repeat Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password2" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="fname">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="fname" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="ic">Identity Card <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="ic" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="mobile" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary llc_submit">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('#account_name').on('focus', function() {
        $(this).removeClass('is-valid');
        $(this).removeClass('is-invalid');
    });
    $('#account_name').on('blur', function() {
        $(this).removeClass('is-valid');
        $(this).removeClass('is-invalid');
        
        var formData = new FormData();
        formData.append("account_name", $('#account_name').val());
        
        LLC.callServer('user/checkAccountName', formData, function(resp) {
            LLC.processResp(resp, function() {
                $('#account_name').addClass('is-valid');
            }, function() {
                $('#account_name').addClass('is-invalid');
            });
        }, this);
    })
    $('#form-registration').submit(function() {
        if($('#account_name').val() == '' || $('#password').val() == '' || $('#sec_password').val() == '' || $('#fname').val() == '' || $('#email').val() == '' || $('#mobile').val() == '' || $('#ic').val() == '') {
            LLC.displayError("Please Fill In All Fields");
            return false;
        }
        if (!/^[A-Za-z0-9]*$/.test($('#account_name').val())) {
			LLC.displayError("Username Can Only Consists Of A-z And Number");
            return false;
		}
        if($('#account_name').val().length < 4 || $('#account_name').val().length > 10) {
            LLC.displayError("Username Length Should Be Within 4 To 10 Characters");
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
        if(!LLC.checkEmailFormat($('#email').val())) {
            LLC.displayError("Invalid Email Format");
            return false;
        }
        
        var formData = new FormData();
        formData.append("account_name", $('#account_name').val().toLowerCase());
        formData.append("password", $('#password').val());
        formData.append("fname", $('#fname').val());
        formData.append("email", $('#email').val());
        formData.append("mobile", $('#mobile').val());
        formData.append("ic", $('#ic').val());
        
        LLC.callServer('user/signUp', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                setTimeout(function() { location.reload(); }, 3000);
            });
        }, this);
        return false;
    });
</script>