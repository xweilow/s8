<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-12 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">WB</div>
                        </div>
                        <div class="media-body">
                            <h1>Website Banners Management</h1>
                            <p class="opacity-75">Latest Banners Will Be Displayed On Landing Page Website.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  pull-up">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createNews" style='margin-bottom: 10px;'>Add Banner</button>
                <div class="card" style="margin-bottom: 50px;">
                    <div class="card-body">
                        <div class="table-responsive p-t-10 overflow-auto">
                            <table id="example"class="table" style="width:100%">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th style="text-align: center; width: 50px;">#</th>
                                        <th>Content</th>
                                        <th style="text-align: center; width: 200px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1; foreach($records as $record) { ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $id ?></td>
                                        <td style="text-align: left;">
                                            <b><?php echo $record['title'] ?></b>
                                            <br />
                                            <i>Posted At: <?php echo $record['created_at'] ?></i>
                                            <br />
                                            Sort: <?php echo $record['sort'] ?>
                                            <br />
                                            <?php if($record['banner_desktop'] != '') { ?>
                                            <span class="help-block">Banner Desktop Last Uploaded: <a href="<?php echo base_url().$record['banner_desktop'] ?>" target="_blank" class="btn btn-sm ml-2 mr-2 btn-light text-primary">View File</a></span>
                                            <?php } ?>
                                            <?php if($record['banner_mobile'] != '') { ?>
                                            <br /><span class="help-block">Banner Mobile Last Uploaded: <a href="<?php echo base_url().$record['banner_mobile'] ?>" target="_blank" class="btn btn-sm ml-2 mr-2 btn-light text-primary">View File</a></span>
                                            <?php } ?>
                                            <?php if($record['is_visible'] != '') { ?>
                                            <br /><span class="help-block">Is Visible: <?= $record['is_visible']==1?'Yes':'No'; ?></span>
                                            <?php } ?>
                                        </td>
                                        <td style="text-align: center;">
                                            <div class="row m-b-10">
                                                <div class="col-12">
                                                    <button type="button" class="btn btn-sm btn-primary btn-edit" data-toggle="modal" data-id="<?php echo $record['id'] ?>" style='width: 80px;'>Edit</button>
                                                    <button type="button" class="btn btn-sm btn-danger btn-delete" data-id="<?php echo $record['id'] ?>" style='width: 80px;'>Delete</button>
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
<div class="modal fade" id="createNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-align-top-left" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Banners</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <fieldset>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="title">Title<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" required>
                                <input type="hidden" id="news_id">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="banner_desktop">Banner Desktop<span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="banner_desktop" required>
                                    <label class="custom-file-label" for="banner_desktop">Choose file</label>
                                </div>
                                <small class="form-text text-muted">Recommended Size: 1920 x 1080 pixels</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="banner_mobile">Banner Mobile</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="banner_mobile">
                                    <label class="custom-file-label" for="banner_mobile">Choose file</label>
                                </div>
                                <small class="form-text text-muted">Recommended Width: 768 pixels, Height: No Limits</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="sort">Sort</label>
                                <input type="text" class="form-control" id="sort">
                                <small class="form-text text-muted">Banners will sort accordingly, the largest number will be at last, fill in number.</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="cstm-switch">
                                    <input type="checkbox" id="is_visible" checked="" name="option" value="1" class="cstm-switch-input">
                                    <span class="cstm-switch-indicator bg-success "></span>
                                    <span class="cstm-switch-description">Visible</span>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary btn-create-news">Create</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-align-top-left" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="label"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <fieldset>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="edit_title" required>
                                <input type="hidden" id="banner_id">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="edit_banner_desktop">Banner Desktop<span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="edit_banner_desktop">
                                    <label class="custom-file-label" for="edit_banner_desktop">Choose file</label>
                                    <span class="help-block banner_desktop_lastuploaded">Last Upload: <a id="current_banner_desktop" href="" target="_blank" class="btn btn-sm ml-2 mr-2 btn-light text-primary">View File</a></span>
                                    <input type="hidden" id="current_banner_desktop_value">
                                </div>
                                <small class="form-text text-muted">Recommended Size: 1920 x 1080 pixels</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="edit_banner_mobile">Banner Mobile</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="edit_banner_mobile">
                                    <label class="custom-file-label" for="edit_banner_mobile">Choose file</label>
                                    <span class="help-block banner_mobile_lastuploaded">Last Upload: <a id="current_banner_mobile" href="" target="_blank" class="btn btn-sm ml-2 mr-2 btn-light text-primary">View File</a></span>
                                </div>
                                <small class="form-text text-muted">Recommended Width: 768 pixels, Height: No Limits</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="edit_sort">Sort</label>
                                <input type="text" class="form-control" id="edit_sort">
                                <small class="form-text text-muted">Banners will sort accordingly, the largest number will be at last, fill in number.</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="cstm-switch">
                                    <input type="checkbox" id="edit_is_visible" checked="" name="option" value="1" class="cstm-switch-input">
                                    <span class="cstm-switch-indicator bg-success "></span>
                                    <span class="cstm-switch-description">Visible</span>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary llc_submit btn-edit-news">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
    var b_url = "<?= base_url(); ?>";
    $('.btn-edit').click(function() {
        var formData = new FormData();
        formData.append("id", $(this).data("id"));
        
        LLC.callServer('production/getWebBanner', formData, function(resp) {
            LLC.processResp(resp, function() {
                $("#banner_id").val(resp.data.id);
                $("#label").html("<i>Posted At: "+resp.data.created_at+"</i>");
                $("#edit_title").val(resp.data.title);
                $("#current_banner_mobile").attr("href", b_url+resp.data.banner_mobile);
                $("#current_banner_desktop").attr("href", b_url+resp.data.banner_desktop);
                $("#current_banner_desktop_value").val(resp.data.banner_desktop);
                $("#edit_sort").val(resp.data.sort);
                $("#edit_is_visible").val(resp.data.is_visible);

                if(resp.data.banner_mobile == '') {
                    $(".banner_mobile_lastuploaded").hide();
                } else {
                    $(".banner_mobile_lastuploaded").show();
                }

                if(resp.data.is_visible == 0) {
                    $("#edit_is_visible").prop('checked', false);
                } else {
                    $("#edit_is_visible").prop('checked', true);
                }
                $('#editModal').modal('show'); 
            });
        }, this);
        return false;
    });
    $('.btn-delete').click(function() {
        if( ! confirm("Do you really want to delete this banner?") ){
            return false;
        }
        var formData = new FormData();
        formData.append("id", $(this).data("id"));
        
        LLC.callServer('production/deleteWebBanner', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                setTimeout(function() { location.reload() }, 3000);
            });
        }, this);
        return false;
    });
    $('.btn-edit-news').click(function() {
        if($('#edit_title').val() == '' || ($("#edit_banner_desktop")[0].files.length == 0 && $("#current_banner_desktop_value").val() == '')) {
            LLC.displayError('Please fill in required fields.');
            return false;
        }
        if($('#edit_is_visible').prop('checked')) {
            $("#edit_is_visible").val('1');
        } else {
            $("#edit_is_visible").val('0');
        }
        var formData = new FormData();
        formData.append("id", $("#banner_id").val());
        formData.append("title", $("#edit_title").val());
        formData.append("banner_desktop", $("#edit_banner_desktop")[0].files[0]);
        formData.append("banner_mobile", $("#edit_banner_mobile")[0].files[0]);
        formData.append("sort", $("#edit_sort").val());
        formData.append("is_visible", $("#edit_is_visible").val());
        
        LLC.callServer('production/editWebBanner', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                setTimeout(function() { location.reload() }, 3000);
            });
        }, this);
        return false;
    });
    $('.btn-create-news').click(function() {
        if($('#title').val() == '' || $("#banner_desktop")[0].files.length == 0) {
            LLC.displayError('Please fill in required fields.');
            return false;
        }
        if($('#is_visible').prop('checked')) {
            $("#is_visible").val('1');
        } else {
            $("#is_visible").val('0');
        }
        var formData = new FormData();
        formData.append("title", $("#title").val());
        formData.append("banner_desktop", $("#banner_desktop")[0].files[0]);
        formData.append("banner_mobile", $("#banner_mobile")[0].files[0]);
        formData.append("sort", $("#sort").val());
        formData.append("is_visible", $("#is_visible").val());
        
        LLC.callServer('production/addWebBanner', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                setTimeout(function() { location.reload() }, 3000);
            });
        }, this);
        return false;
    });
</script>
