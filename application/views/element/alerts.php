<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-12 text-white p-t-40 p-b-90">
                    <h4><span class="btn btn-white-translucent"><i class="mdi mdi-alert-circle-outline "></i></span>
                        Alerts
                    </h4>
                    <p class="opacity-75 ">
                        Provide contextual feedback messages for typical user actions with the handful of available
                        and flexible alert messages.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container pull-up">
        <div class="row">
            <div class="col-lg-6 m-b-30">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            Alerts
                        </h5>
                        <p class="m-b-0 text-muted">
                            Using the alert JavaScript plugin, it’s possible create alerts pinned to page
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="form-group floating-label ">
                            <label>Message</label>
                            <input id="option-message" type="email" class="form-control" placeholder="Enter Message" value="Oh, Snap something went wrong!!">
                        </div>
                        <div class="form-group floating-label ">
                            <label>Message</label>
                            <select id="option-type" class="custom-select">
                                <option value="danger" selected>danger</option>
                                <option value="info" >info</option>
                                <option value="primary" >primary</option>
                                <option value="warning" >warning</option>
                                <option value="success" >success</option>
                                <option value="default" >default</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="cstm-switch">
                            <input type="checkbox" id="option-dismiss" checked name="option" value="1" class="cstm-switch-input">
                            <span class="cstm-switch-indicator "></span>
                            <span class="cstm-switch-description">Dismissible </span>
                            </label>
                        </div>
                        <div>
                            <button id="generateAlert" class="btn btn-primary">Generate Alert</button>
                        </div>
                    </div>
                </div>
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            Alerts
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="font-secondary">Simple Alerts</p>
                        <div class="alert alert-secondary" role="alert">
                            A simple secondary alert—check it out!
                        </div>
                        <div class="alert alert-success" role="alert">
                            A simple success alert—check it out!
                        </div>
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert—check it out!
                        </div>
                        <div class="alert alert-warning" role="alert">
                            A simple warning alert—check it out!
                        </div>
                        <div class="alert alert-info" role="alert">
                            A simple info alert—check it out!
                        </div>
                        <div class="alert alert-light" role="alert">
                            A simple light alert—check it out!
                        </div>
                        <div class="alert alert-dark" role="alert">
                            A simple dark alert—check it out!
                        </div>
                    </div>
                </div>
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            Custom Alerts
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-border-info  alert-dismissible fade show" role="alert">
                            <div class="d-flex">
                                <div class="icon">
                                    <i class="icon mdi mdi-alert-circle-outline"></i>
                                </div>
                                <div class="content">
                                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-border-success  alert-dismissible fade show" role="alert">
                            <div class="d-flex">
                                <div class="icon">
                                    <i class="icon mdi mdi-check-circle-outline"></i>
                                </div>
                                <div class="content">
                                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-border-warning  alert-dismissible fade show" role="alert">
                            <div class="d-flex">
                                <div class="icon">
                                    <i class="icon mdi mdi-alert-circle-outline"></i>
                                </div>
                                <div class="content">
                                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-border-danger  alert-dismissible fade show" role="alert">
                            <div class="d-flex">
                                <div class="icon">
                                    <i class="icon mdi mdi-alert-octagram"></i>
                                </div>
                                <div class="content">
                                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b-30">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            Dismissing Alerts
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            Additional content
                        </h5>
                        <p class="m-b-0 text-muted">
                            Alerts can also contain additional HTML elements like headings, paragraphs and dividers.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is
                                going to run a bit longer so that you can see how spacing within an alert works with
                                this kind of content.
                            </p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things
                                nice and tidy.
                            </p>
                        </div>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is
                                going to run a bit longer so that you can see how spacing within an alert works with
                                this kind of content.
                            </p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things
                                nice and tidy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>