<style>
    .col-md-12 {
        padding-left: 0px;
    }
</style>
<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">N</div>
                        </div>
                        <div class="media-body">
                            <h1>New Order</h1>
                            <p class="opacity-75">Create New Order To Up Rank.</p>
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
                            New Order Is Only Available After Identity Verification.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php if($pendingOrder > 0) { ?>
                <div class="alert alert-border-danger alert-dismissible fade show" role="alert">
                    <div class="d-flex">
                        <div class="icon">
                            <i class="icon mdi mdi-alert-octagram"></i>
                        </div>
                        <div class="content" style="margin-top: 7px;">
                            You Have Stock Order Pending For Approval.
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
                        <form id="form-order">
                            <fieldset <?php if($ic_status != 1 || $pendingOrder > 0) { echo "disabled"; } ?>>
                                <div class="form-row">
                                    <div class="form-group col-md-6 m-b-0">
                                        <div class="form-group col-md-12">
                                            <label for="">Downline Pending Order (Boxes)</label>
                                            <input type="text" class="form-control text-center" id="" value="<?php echo $downlinePendingOrder ?>" disabled>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Purchase Limit (Boxes)</label>
                                            <input type="text" class="form-control text-center" id="" value="<?php echo $limit ?>" disabled>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Price Per Box (RM)</label>
                                            <input type="text" class="form-control text-center" id="" value="<?php echo $price ?>" disabled>
                                        </div>
                                        <div class="form-group col-md-12 m-b-0">
                                            <label for="quantity">Order Quantity (Boxes) <span class="text-danger">*</span></label>
                                            <div class="row text-center">
                                                <div class="col-md-8 m-b-10">
                                                    <input type="number" class="form-control text-center" id="quantity" value="0" required disabled>
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <button type="button" class="btn m-b-15 ml-2 mr-2 btn-rounded-circle btn-dark btn-minus"><i class="mdi mdi-minus"></i></button>
                                                    <button type="button" class="btn m-b-15 btn-rounded-circle btn-dark btn-plus"><i class="mdi mdi-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="total_price">Total Price (RM)</label>
                                            <input type="text" class="form-control text-center" id="total_price" value="0" disabled>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="receipt">Upload Receipt <span class="text-danger">*</span></label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="receipt">
                                                <label class="custom-file-label" for="receipt">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group col-md-12">
                                            <label for="delivery_type">Delivery Option <span class="text-danger">*</span></label>
                                            <select class="form-control" id="delivery_type" required>
                                                <option value="">-</option>
                                                <option value="1">Self Pick Up</option>
                                                <option value="2">Delivery Service</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 deliver-tab" style="display: none;">
                                            <label for="receiver">Receiver <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="receiver" value="<?php echo $fname ?>">
                                        </div>
                                        <div class="form-group col-md-12 deliver-tab" style="display: none;">
                                            <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="mobile" value="<?php echo $mobile ?>">
                                        </div>
                                        <div class="form-group col-md-12 deliver-tab" style="display: none;">
                                            <label for="addressline1">Addressline1 <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="addressline1" value="<?php echo $addressline1 ?>">
                                        </div>
                                        <div class="form-group col-md-12 deliver-tab" style="display: none;">
                                            <label for="addressline2">Addressline2</label>
                                            <input type="text" class="form-control" id="addressline2" value="<?php echo $addressline2 ?>">
                                        </div>
                                        <div class="form-group col-md-12 deliver-tab" style="display: none;">
                                            <label for="city">City <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="city" value="<?php echo $city ?>">
                                        </div>
                                        <div class="form-group col-md-12 deliver-tab" style="display: none;">
                                            <label for="postcode">Postcode <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="postcode" value="<?php echo $postcode ?>">
                                        </div>
                                        <div class="form-group col-md-12 deliver-tab" style="display: none;">
                                            <label for="state">State <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="state" value="<?php echo $state ?>">
                                        </div>
                                        <div class="form-group col-md-12 deliver-tab" style="display: none;">
                                            <label for="country">Country <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="country" value="<?php echo $country ?>">
                                        </div>
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
    $("#delivery_type").on("change", function() {
        if($(this).val() == 2) {
            $(".deliver-tab").slideDown();
        } else {
            $(".deliver-tab").slideUp();
        }
    });
    $(".btn-minus").click(function() {
        var qty = $("#quantity").val();
        if(qty <= 0) {
            $("#quantity").val(0);
        } else {
            $("#quantity").val(Number(qty)-10);
        }
        updatePrice();
    });
    $(".btn-plus").click(function() {
        var qty = $("#quantity").val();
        if(qty >= <?php echo $limit ?>) {
            $("#quantity").val(<?php echo $limit ?>);
        } else {
            $("#quantity").val(Number(qty)+10);
        }
        updatePrice();
    });
    function updatePrice() {
        $("#total_price").val(Number($("#quantity").val())*Number(<?php echo $price ?>));
    }
    $('#form-order').submit(function() {
        if($('#quantity').val() == '' || $('#delivery_type').val() == '' || $("#receipt")[0].files.length == 0) {
            LLC.displayError("Please Fill In All Required Fields");
            return false;
        }
        if($('#delivery_type').val() == 2) {
            if($('#receiver').val() == '' || $('#mobile').val() == '' || $('#addressline1').val() == '' || $('#city').val() == '' || $('#postcode').val() == '' || $('#state').val() == '' || $('#country').val() == '') {
                LLC.displayError("Please Fill In All Required Fields");
                return false;
            }
        }
        if($("#receipt")[0].files.length > 0 && !LLC.checkFileExtension($('#receipt').val())) {
            LLC.displayError("Invalid File Format");
            return false;
        }
        
        var formData = new FormData();
        formData.append("quantity", $('#quantity').val());
        formData.append("delivery_type", $('#delivery_type').val());
        formData.append("receiver", $('#receiver').val());
        formData.append("mobile", $('#mobile').val());
        formData.append("addressline1", $('#addressline1').val());
        formData.append("addressline2", $('#addressline2').val());
        formData.append("city", $('#city').val());
        formData.append("postcode", $('#postcode').val());
        formData.append("state", $('#state').val());
        formData.append("country", $('#country').val());
        formData.append("receipt", $("#receipt")[0].files[0]);
        
        LLC.callServer('production/createOrder', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                setTimeout(function() { location = "<?php echo base_url() ?>panel/reports/orders"; }, 3000);
            });
        }, this);
        return false;
    });
</script>