<link rel='stylesheet' href='<?php echo base_url() ?>assets/vendor/summernote/summernote-bs4.css'/>
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
                            <h1>News Management</h1>
                            <p class="opacity-75">Latest News Will Be Displayed On Member's Dashboard.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  pull-up">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createNews" style='margin-bottom: 10px;'>Add News</button>
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
                                            <br /><br />
                                            <?php $content = strip_tags($record['content']); echo strlen($content) > 100 ? substr($content,0,100)."..." : $content; ?>
                                        </td>
                                        <td style="text-align: center;">
                                            <div class="row m-b-10">
                                                <div class="col-12">
                                                    <button class="btn btn-sm btn-primary btn-edit" data-toggle="modal" data-id="<?php echo $record['id'] ?>" style='width: 80px;'>Edit</button>
                                                    <button class="btn btn-sm btn-danger btn-delete" data-id="<?php echo $record['id'] ?>" style='width: 80px;'>Delete</button>
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
<div class="modal fade" id="createNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-align-top-left" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create News</h5>
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
                                <input type="text" class="form-control title" required>
                                <input type="hidden" id="news_id">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="new_content">Content<span class="text-danger">*</span></label>
                                <textarea class="form-control content" id="summernote2" rows='10' name='content'></textarea>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
                                <input type="text" class="form-control" id="title" required>
                                <input type="hidden" id="news_id">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="content">Content <span class="text-danger">*</span></label>
                                <!--<div id="summernote"></div>-->
                                <textarea class="form-control" id='summernote' rows='10' name='content'></textarea>
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
    $('.btn-edit').click(function() {
        var formData = new FormData();
        formData.append("id", $(this).data("id"));
        
        LLC.callServer('production/getNews', formData, function(resp) {
            LLC.processResp(resp, function() {
                $("#news_id").val(resp.data.id);
                $("#label").html("<i>Posted At: "+resp.data.created_at+"</i>");
                $("#title").val(resp.data.title);
                $('#summernote').val(resp.data.content);
                $('#editModal').modal('show'); 
            });
        }, this);
        return false;
    });
    $('.btn-delete').click(function() {
        var formData = new FormData();
        formData.append("id", $(this).data("id"));
        
        LLC.callServer('production/deleteNews', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                setTimeout(function() { location.reload() }, 3000);
            });
        }, this);
        return false;
    });
    $('.btn-edit-news').click(function() {
        var formData = new FormData();
        formData.append("id", $("#news_id").val());
        formData.append("title", $("#title").val());
        formData.append("content", $("#summernote").val());
        
        LLC.callServer('production/editNews', formData, function(resp) {
            LLC.processResp(resp, function() {
                LLC.displaySuccess(resp.data);
                setTimeout(function() { location.reload() }, 3000);
            });
        }, this);
        return false;
    });
</script>
<!--<script src='<?php echo base_url() ?>js/bundle.js'></script>
<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-66116118-3'); </script>
<script src='<?php echo base_url() ?>js/bundle2.js'></script>-->
