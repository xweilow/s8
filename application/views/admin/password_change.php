<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">U</div>
                        </div>
                        <div class="media-body">
                            <h1>Update Password</h1>
                            <p class="opacity-75">Please check member details carefully before proceed your action.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  pull-up">
        <div class="row">
            <div class="col-lg-8">
                <!--widget card begin-->
                <div class="card m-b-30">
                    <div class="card-header">
                        <div class="card-title">Details</div>
                    </div>
                    <div class="card-body ">
                        <form id="form-password">
                            <fieldset>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
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
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="password">New Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password" required disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password2">Repeat New Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password2" required disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="remark">Remark</label>
                                        <input type="text" class="form-control" id="remark" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary llc_submit" disabled>Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 m-b-30">
                <div class="card m-b-30">
                    <div class="card-header">
                        <div class="card-title">Account Details</div>
                    </div>
                    <div class="list-group list  list-group-flush">
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title rounded-circle bg-primary">J</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name created_at">-</div>
                                <div class="text-muted">Joined At</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title rounded-circle bg-success">U</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name account_name">-</div>
                                <div class="text-muted">Username</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm">
                                    <div class="avatar-title rounded-circle bg-warning">F</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name fname">-</div>
                                <div class="text-muted">Full Name</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title rounded-circle bg-danger">M</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name mobile">-</div>
                                <div class="text-muted">Mobile</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title rounded-circle bg-secondary">I</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name ic">-</div>
                                <div class="text-muted">Identity Card</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var members = <?php echo json_encode($members) ?>;
    $('#account_name').on('input', function() {
        $('#password').val('');
        $('#password2').val('');
        $('#remark').val('');
        
        $('.account_name').text('-');
        $('.created_at').text('-');
        $('.fname').text('-');
        $('.mobile').text('-');
        $('.ic').text('-');

        $('#password').prop('disabled', true);
        $('#password2').prop('disabled', true);
        $('#remark').prop('disabled', true);
        $('.llc_submit').prop('disabled', true);
                
        $.each(members, function(i, member) {
            if($('#account_name').val() == member.account_name) {
                $('.account_name').text(member.account_name);
                $('.created_at').text(member.created_at);
                $('.fname').text(member.fname);
                $('.mobile').text(member.mobile);
                $('.ic').text(member.ic);
                
                $('#password').prop('disabled', false);
                $('#password2').prop('disabled', false);
                $('#remark').prop('disabled', false);
                $('.llc_submit').prop('disabled', false);
                
                return false;
            }
        });
    });
    $('#form-password').submit(function() {
        if($('#account_name').val() == '' || $('#password').val() == '' || $('#password2').val() == '') {
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
        formData.append("account_name", $('#account_name').val().toLowerCase());
        formData.append("password", $('#password').val());
        formData.append("remark", $('#remark').val());
        
        LLC.callServer('user/adminUpdatePassword', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                setTimeout(function() { location.reload(); }, 3000);
            });
        }, this);
        return false;
    });
</script>