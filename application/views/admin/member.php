<link rel='stylesheet' href='<?php echo base_url() ?>assets/vendor/autocomplete/autocomplete.css'/>
<script src="<?php echo base_url() ?>assets/vendor/autocomplete/autocomplete.js"></script>

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
                            <h1>Member Listing</h1>
                            <p class="opacity-75">Details Of All Members.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  pull-up">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="accordion " id="accordionExample">
                            <div class="card-header" style="display: none;"></div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <a href="#!" class="d-block collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Search
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <form id="form-search-member">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="account_name">Username</label>
                                                    <input type="text" class="form-control" id="account_name" value="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="fname">Full Name</label>
                                                    <input type="text" class="form-control" id="fname" value="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="sponsor_id">Introducer ID</label>
                                                    <input type="text" class="form-control" id="sponsor_id" value="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="ic">Identity Card</label>
                                                    <input type="text" class="form-control" id="ic" value="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="rank">Rank</label>
                                                    <select class="form-control" id="rank">
                                                        <option value="">-</option>
                                                        <option value="0"><?php echo getRank(0) ?></option>
                                                        <option value="1"><?php echo getRank(1) ?></option>
                                                        <option value="2"><?php echo getRank(2) ?></option>
                                                        <option value="3"><?php echo getRank(3) ?></option>
                                                        <option value="4"><?php echo getRank(4) ?></option>
                                                        <option value="5"><?php echo getRank(5) ?></option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="locked">Locked</label>
                                                    <select class="form-control" id="locked">
                                                        <option value="">-</option>
                                                        <option value="is_login_locked">Login</option>
                                                        <option value="is_wr_locked">Withdrawal</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary llc_submit">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-b-30">
                    <div class="card-header">
                        <div class="card-title">Members Information</div>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills nav-justified" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="home" aria-selected="true" data-column="account">Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link show" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="profile" aria-selected="false" data-column="personal">Personal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link show" id="bank-tab" data-toggle="tab" href="#bank" role="tab" aria-controls="contact" aria-selected="false" data-column="bank">Bank</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link show" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-selected="false" data-column="address">Address</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="" role="tabpanel" aria-labelledby="">
                                <div class="table-responsive p-t-10">
                                    <table id="example"class="table" style="width:100%">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th style="min-width: 100px;">Joined At</th>
                                                <th>Username</th>
                                                <th class="all account">Introducer ID</th>
                                                <th class="all account">Rank</th>
                                                <th class="all account">Wallet</th>
                                                <th class="all personal" style="min-width: 200px;">Full Name</th>
                                                <th class="all personal" style="min-width: 100px;">Email</th>
                                                <th class="all personal">Mobile</th>
                                                <th class="all personal" style="min-width: 100px;">Identity Card</th>
                                                <th class="all personal" style="min-width: 100px;">IC File</th>
                                                <th class="all personal">Status</th>
                                                <th class="all bank" style="min-width: 150px;">Bank Name</th>
                                                <th class="all bank" style="min-width: 200px;">Account Holder</th>
                                                <th class="all bank" style="min-width: 150px;">Account Number</th>
                                                <th class="all bank" style="min-width: 200px;">Branch Address</th>
                                                <th class="all bank" style="min-width: 100px;">Swift Code</th>
                                                <th class="all bank" style="min-width: 100px;">Bank File</th>
                                                <th class="all address" style="min-width: 200px;">Address 1</th>
                                                <th class="all address" style="min-width: 200px;">Address 2</th>
                                                <th class="all address">Postcode</th>
                                                <th class="all address">City</th>
                                                <th class="all address">State</th>
                                                <th class="all address">Country</th>
                                                <th class="all account">Login</th>
                                                <th class="all account">Withdrawal</th>
                                                <th class="all account" style="min-width: 150px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($members as $member) { ?>
                                            <tr style="text-align: center;">
                                                <td><?php echo date("Y-m-d", strtotime($member['created_at'])) ?></td>
                                                <td><?php echo $member['account_name'] ?></td>
                                                <td class="all account"><?php echo $member['sponsor_id'] ?></td>
                                                <td class="all account"><?php echo getRank($member['rank']) ?></td>
                                                <td class="all account"><?php echo number_format($member['cash_wallet'], 2) ?></td>
                                                <td class="all personal"><?php echo $member['fname'] ?></td>
                                                <td class="all personal"><?php echo $member['email'] ?></td>
                                                <td class="all personal"><?php echo $member['mobile'] ?></td>
                                                <td class="all personal"><?php echo $member['ic'] ?></td>
                                                <td class="all personal"><?php if($member['ic_file_path'] != '') { ?><a href="<?php echo base_url().$member['ic_file_path'] ?>" target="_blank" class="btn btn-sm ml-2 mr-2 btn-light text-primary">View File</a><?php } ?></td>
                                                <td class="all personal">
                                                    <?php if($member['ic_status'] == 1) { ?>
                                                        <span class="badge badge-soft-success">Verified</span>
                                                    <?php } else if($member['ic_status'] == 2) { ?>
                                                        <span class="badge badge-soft-danger">Rejected</span>
                                                    <?php } else { ?>
                                                        <span class="badge badge-soft-info">Pending</span>
                                                    <?php } ?>
                                                </td>
                                                <td class="all bank"><?php echo $member['bank_name'] ?></td>
                                                <td class="all bank"><?php echo $member['bank_account_name'] ?></td>
                                                <td class="all bank"><?php echo $member['bank_account_number'] ?></td>
                                                <td class="all bank"><?php echo $member['branch_address'] ?></td>
                                                <td class="all bank"><?php echo $member['bank_swift_code'] ?></td>
                                                <td class="all bank"><?php if($member['bank_file_path'] != '') { ?><a href="<?php echo base_url().$member['bank_file_path'] ?>" target="_blank" class="btn btn-sm ml-2 mr-2 btn-light text-primary">View File</a><?php } ?></td>
                                                <td class="all address"><?php echo $member['addressline1'] ?></td>
                                                <td class="all address"><?php echo $member['addressline2'] ?></td>
                                                <td class="all address"><?php echo $member['postcode'] ?></td>
                                                <td class="all address"><?php echo $member['city'] ?></td>
                                                <td class="all address"><?php echo $member['state'] ?></td>
                                                <td class="all address"><?php echo $member['country'] ?></td>
                                                <td class="all account">
                                                    <button class="btn btn-sm btn-danger btn-disable btn-action" data-action="disable" data-type="lg" data-id="<?php echo $member['id'] ?>" style="width: 80px;<?php if($member['is_login_locked'] == 1) { ?>display: none;<?php } ?>">Disable</button>
                                                    <button class="btn btn-sm btn-success btn-enable btn-action" data-action="enable" data-type="lg" data-id="<?php echo $member['id'] ?>" style="width: 80px;<?php if($member['is_login_locked'] == 0) { ?>display: none;<?php } ?>">Enable</button>
                                                </td>
                                                <td class="all account">
                                                    <button class="btn btn-sm btn-danger btn-disable btn-action" data-action="disable" data-type="wr" data-id="<?php echo $member['id'] ?>" style="width: 80px;<?php if($member['is_wr_locked'] == 1) { ?>display: none;<?php } ?>">Disable</button>
                                                    <button class="btn btn-sm btn-success btn-enable btn-action" data-action="enable" data-type="wr" data-id="<?php echo $member['id'] ?>" style="width: 80px;<?php if($member['is_wr_locked'] == 0) { ?>display: none;<?php } ?>">Enable</button>
                                                </td>
                                                <td class="all account">
                                                    <a class="btn btn-sm btn-primary" href="<?php echo base_url() ?>board/loginMember/<?php echo $member['id'] ?>">Login</a>
                                                    <a class="btn btn-sm btn-primary" href="<?php echo base_url() ?>board/members/edit/<?php echo $member['account_name'] ?>">Edit</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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
var names = [<?php $comma = false; foreach ($members as $key => $n) { if($comma) echo ','; echo "'".$n['account_name']."'"; $comma = true; } ?>];
$('#account_name').autocomplete({
    source:[names],
    minLength: 3
});

var column = 'account';
$(".all").css("display", "none");
$(".account").show();

$("#account-tab, #personal-tab, #bank-tab, #address-tab").click(function() {
    $(".all").css("display", "none");
    $("."+$(this).data("column")).show();
    column = $(this).data("column");
});
$('#example').on('draw.dt', function() { 
    $(".all").css("display", "none");
    $("."+column).show();
});

$(".btn-action").click(function() {
    var btn = $(this);
    var action = $(this).data('action');
    
    var formData = new FormData();
    formData.append("id", $(this).data("id"));
    formData.append("type", $(this).data('type'));
    formData.append("action", $(this).data('action'));
    
    LLC.callServer('user/updateMemberStatus', formData, function(resp) {
        LLC.processResp(resp, function() {
            LLC.displaySuccess(resp.data);
            if(action == 'disable') {
                btn.parents("td").find(".btn-enable").slideDown();
                btn.parents("td").find(".btn-disable").slideUp();
            } else {
                btn.parents("td").find(".btn-enable").slideUp();
                btn.parents("td").find(".btn-disable").slideDown();
            }
        });
    }, this);
    return false;
});
 
$("#form-search-member").submit(function() {
    var param = [];
    if($("#account_name").val() != '') {
        param.push("account_name="+$("#account_name").val());
    }
    if($("#fname").val() != '') {
        param.push("fname="+$("#fname").val());
    }
    if($("#sponsor_id").val() != '') {
        param.push("sponsor_id="+$("#sponsor_id").val());
    }
    if($("#ic").val() != '') {
        param.push("ic="+$("#ic").val());
    }
    if($("#rank").val() != '') {
        param.push("rank="+$("#rank").val());
    }
    if($("#locked").val() != '') {
        param.push($("#locked").val()+"=1");
    }
    location = '<?php echo base_url() ?>board/members/listing?'+param.join('&');
    return false;
});

<?php if(isset($_GET['account_name'])) echo "$('#account_name').val('$_GET[account_name]');" ?>
<?php if(isset($_GET['fname'])) echo "$('#fname').val('$_GET[fname]');" ?>
<?php if(isset($_GET['sponsor_id'])) echo "$('#sponsor_id').val('$_GET[sponsor_id]');" ?>
<?php if(isset($_GET['ic'])) echo "$('#ic').val('$_GET[ic]');" ?>
<?php if(isset($_GET['rank'])) echo "$('#rank').val('$_GET[rank]');" ?>
<?php if(isset($_GET['is_login_locked'])) echo "$('#locked').val('is_login_locked');" ?>
<?php if(isset($_GET['is_wr_locked'])) echo "$('#locked').val('is_wr_locked');" ?>
</script>
