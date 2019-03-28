<link rel='stylesheet' href='<?php echo base_url() ?>assets/vendor/autocomplete/autocomplete.css'/>
<script src="<?php echo base_url() ?>assets/vendor/autocomplete/autocomplete.js"></script>
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
                            <h1>Update Wallet</h1>
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
                                        <input type="text" class="form-control" id="account_name" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="password">Transaction Type <span class="text-danger">*</span></label>
                                        <select class="form-control" id="type" required disabled>
                                            <option value="">-</option>
                                            <option value="deposit">Deposit</option>
                                            <option value="deduct">Deduct</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="amount">Amount <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="amount" step="0.01" required disabled>
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
                                    <div class="avatar-title rounded-circle bg-danger">W</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name cash_wallet">-</div>
                                <div class="text-muted">Wallet Amount</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var names = [<?php $comma = false; foreach ($members as $key => $n) { if($comma) echo ','; echo "'".$n['account_name']."'"; $comma = true; } ?>];
    <?php /*
    var names2 = [<?php $comma = false; foreach ($downlineNames as $key => $n) { if($comma) echo ','; echo "'".$n['an']."'"; $comma = true; } foreach (explode(',', $sponsor_upline_ids) as $upline) { if($upline == '') { break; } if($comma) echo ','; echo "'".$upline."'"; $comma = true; } ?>]*/ ?>

    $('#account_name').autocomplete({
        source:[names],
        minLength: 3
    });

    var members = <?php echo json_encode($members) ?>;
    $('#account_name').on('input', function() {
        $('#type').val('');
        $('#amount').val('');
        $('#remark').val('');
        
        $('.account_name').text('-');
        $('.created_at').text('-');
        $('.fname').text('-');
        $('.cash_wallet').text('-');

        $('#type').prop('disabled', true);
        $('#amount').prop('disabled', true);
        $('#remark').prop('disabled', true);
        $('.llc_submit').prop('disabled', true);
                
        $.each(members, function(i, member) {
            if($('#account_name').val() == member.account_name) {
                $('.account_name').text(member.account_name);
                $('.created_at').text(member.created_at);
                $('.fname').text(member.fname);
                $('.cash_wallet').text(member.cash_wallet);
                
                $('#type').prop('disabled', false);
                $('#amount').prop('disabled', false);
                $('#remark').prop('disabled', false);
                $('.llc_submit').prop('disabled', false);
                
                return false;
            }
        });
    });
    $('#form-password').submit(function() {
        if($('#account_name').val() == '' || $('#type').val() == '' || $('#amount').val() == '') {
            LLC.displayError("Please Fill In All Required Fields");
            return false;
        }
        if($('#amount').val() <= 0) {
            LLC.displayError("Please Input Valid Positive Amount");
            return false;
        }
        
        var formData = new FormData();
        formData.append("account_name", $('#account_name').val().toLowerCase());
        formData.append("type", $('#type').val());
        formData.append("amount", $('#amount').val());
        formData.append("remark", $('#remark').val());
        
        LLC.callServer('production/updateWalletAmount', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                setTimeout(function() { location.reload(); }, 3000);
            });
        }, this);
        return false;
    });
</script>