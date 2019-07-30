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
                            <h1>Website Enquiry Management</h1>
                            <p class="opacity-75">All Enquiry Will Be Displayed Here.</p>
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
                                            <b>Subject: <?php echo $record['subject'] ?></b>
                                            <br />
                                            <i>Received At: <?php echo $record['created_at'] ?></i>
                                        </td>
                                        <td style="text-align: center;">
                                            <div class="row m-b-10">
                                                <div class="col-12">
                                                    <button type="button" class="btn btn-sm btn-primary btn-edit" data-toggle="modal" data-id="<?php echo $record['id'] ?>" style='width: 80px;'>View</button>
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
                                <label for="subject">Subject:</label>
                                <input type="text" class="form-control" id="subject" readonly>
                                <input type="hidden" id="enquiry_id">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="fname">Full Name</label>
                                <input type="text" class="form-control" id="fname" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="message">Message</label>
                                <textarea name="" id="message" class="form-control" readonly></textarea>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    $('.btn-edit').click(function() {
        var formData = new FormData();
        formData.append("id", $(this).data("id"));
        
        LLC.callServer('production/getWebEnquiry', formData, function(resp) {
            LLC.processResp(resp, function() {
                $("#enquiry_id").val(resp.data.id);
                $("#label").html("Received At: "+resp.data.created_at);
                $("#subject").val(resp.data.subject);
                $("#fname").val(resp.data.fname);
                $("#message").val(resp.data.message);
                $("#email").val(resp.data.email);

                $('#editModal').modal('show'); 
            });
        }, this);
        return false;
    });
</script>
