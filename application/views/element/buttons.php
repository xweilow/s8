<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="col-12 text-white p-t-40 p-b-90">
                    <h4><span class="btn btn-white-translucent"><i class="mdi mdi-shape-circle-plus "></i></span>
                        Buttons</h4>
                    <p class="opacity-75 ">
                        Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for
                        multiple sizes, states, and more.
                    </p>


                </div>
            </div>
        </div>
        <div class="container pull-up">
            <div class="row">
                <div class="col-lg-4 m-b-30">
                    <!--card begins-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="card-title">Buttons</div>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-primary">Primary</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-secondary">Secondary</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-success">Success</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-danger">Danger</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-warning">Warning</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-info">Info</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-light">Light</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-dark">Dark</button>

                            <button type="button" class="btn btn-link m-b-15 ml-2 mr-2">Link</button>
                        </div>
                    </div>
                    <!--card ends-->

                    <!--card begins-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="card-title"> Checkbox and radio buttons</div>
                        </div>
                        <div class="card-body">
                            <div class=" m-b-30">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-secondary active">
                                        Active
                                        <input type="radio"  checked>
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input type="radio" > Radio
                                    </label>

                                    <label class="btn btn-secondary">
                                        <input type="radio" > Radio
                                    </label>

                                </div>
                            </div>

                            <div class=" m-b-30">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-info active">
                                        Active
                                        <input type="checkbox"  checked>
                                    </label>
                                    <label class="btn btn-info">
                                        <input type="checkbox" > Checkbox
                                    </label>

                                    <label class="btn btn-info">
                                        <input type="checkbox" > Checkbox
                                    </label>

                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false"
                                     >
                                Single toggle
                            </button>
                        </div>
                    </div>
                    <!--card ends-->
    <!--card begins-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="card-title"> Button states</div>
                        </div>
                        <div class="card-body">
                            <p>
                                <button class="btn btn-dark" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                    <span class="sr-only">Loading...</span>
                                </button>
                                <button class="btn btn-dark" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </button>
                            </p>
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                <span class="sr-only">Loading...</span>
                            </button>
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Loading...
                            </button>

                        </div>
                    </div>
                    <!--card ends-->

                    <!--card begins-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="card-title">Button Group</div>
                        </div>
                        <div class="card-body">
                            <div class="m-b-30">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Left</button>
                                    <button type="button" class="btn btn-secondary">Middle</button>
                                    <button type="button" class="btn btn-secondary">Right</button>
                                </div>
                            </div>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-secondary">1</button>
                                    <button type="button" class="btn btn-secondary">2</button>
                                    <button type="button" class="btn btn-secondary">3</button>
                                    <button type="button" class="btn btn-secondary">4</button>
                                </div>
                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-secondary">5</button>
                                    <button type="button" class="btn btn-secondary">6</button>
                                    <button type="button" class="btn btn-secondary">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-secondary">8</button>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-secondary">1</button>
                                    <button type="button" class="btn btn-secondary">2</button>

                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button"
                                                class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card ends-->

                </div>
                <div class="col-lg-4 m-b-30">
                    <!--card begins-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="card-title"> Buttons Size Large</div>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-lg m-b-15 ml-2 mr-2 btn-primary">Primary</button>
                            <button type="button" class="btn btn-lg m-b-15 ml-2 mr-2 btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-lg m-b-15 ml-2 mr-2 btn-success">Success</button>
                            <button type="button" class="btn btn-lg m-b-15 ml-2 mr-2 btn-danger">Danger</button>
                            <button type="button" class="btn btn-lg m-b-15 ml-2 mr-2 btn-warning">Warning</button>
                            <button type="button" class="btn btn-lg m-b-15 ml-2 mr-2 btn-info">Info</button>
                            <button type="button" class="btn btn-lg m-b-15 ml-2 mr-2 btn-light">Light</button>
                            <button type="button" class="btn btn-lg m-b-15 ml-2 mr-2 btn-dark">Dark</button>

                            <button type="button" class="btn btn-lg btn-link m-b-15 ml-2 mr-2">Link</button>
                        </div>
                    </div>
                    <!--card ends-->

                    <!--card begins-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="card-title"> Buttons Size Small</div>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-sm m-b-15 ml-2 mr-2 btn-primary"> Primary</button>
                            <button type="button" class="btn btn-sm m-b-15 ml-2 mr-2 btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-sm m-b-15 ml-2 mr-2 btn-success">Success</button>
                            <button type="button" class="btn btn-sm m-b-15 ml-2 mr-2 btn-danger">Danger</button>
                            <button type="button" class="btn btn-sm m-b-15 ml-2 mr-2 btn-warning">Warning</button>
                            <button type="button" class="btn btn-sm m-b-15 ml-2 mr-2 btn-info">Info</button>
                            <button type="button" class="btn btn-sm m-b-15 ml-2 mr-2 btn-light">Light</button>
                            <button type="button" class="btn btn-sm m-b-15 ml-2 mr-2 btn-dark">Dark</button>

                            <button type="button" class="btn btn-sm btn-link m-b-15 ml-2 mr-2">Link</button>
                        </div>
                    </div>
                    <!--card ends-->

                    <!--card begins-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="card-title">Rounded Buttons </div>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-rounded btn-primary">Primary</button>

                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-rounded btn-success">Success</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-rounded btn-danger">Danger</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-rounded btn-warning">Warning</button>
                            <hr>
                            <p>Rounded on either ends</p>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-rounded-left
                            btn-info">rounded left</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-rounded-right
                            btn-info">rounded right</button>
                            <button type="button" class=" m-b-15 ml-2 mr-2  btn-rounded-left
                            badge badge-soft-danger btn">rounded left</button>
                            <button type="button" class=" m-b-15 ml-2 mr-2 btn-rounded-right
                            badge badge-soft-danger btn">rounded right</button>
                            <hr>
                            <p>Rounded Circle</p>
                            <button type="button" class="btn btn-sm m-b-15 ml-2 mr-2  btn-rounded-circle
                            btn-info"><i class="mdi mdi-plus"></i></button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2  btn-rounded-circle
                            btn-info"><i class="mdi mdi-plus"></i></button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-lg btn-rounded-circle
                            btn-info"><i class="mdi mdi-plus"></i></button>

                        </div>
                    </div>
                    <!--card ends-->
                </div>
                <div class="col-lg-4 m-b-30">
                    <!--card begins-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="card-title"> Icons with Buttons</div>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <button type="button" class="btn  m-b-30 ml-2 mr-2 btn-primary"><i
                                            class="mdi mdi-comment-outline"></i> one
                                </button>
                                <button type="button" class="btn  m-b-30 ml-2 mr-2 btn-secondary"><i
                                            class="mdi mdi-cube-outline"></i> two
                                </button>
                                <button type="button" class="btn  m-b-30 ml-2 mr-2 btn-success"><i
                                            class="mdi mdi-cake-variant"></i> three
                                </button>
                            </div>
                            <div class="m-b-30">
                                <div class="text-center">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn  btn-dark active">
                                            <i class="mdi mdi-airplane"></i>
                                            <input type="radio" name="radio2" id="option1"   checked>
                                            Active
                                        </label>
                                        <label class="btn  btn-dark">
                                            <i class="mdi mdi-airplane-landing"></i>
                                            <input type="radio" name="radio2" id="option2"  > Checkbox
                                        </label>
                                        <label class="btn  btn-dark">
                                            <i class="mdi mdi-airplane-takeoff"></i>
                                            <input type="radio" name="radio2" id="option3"  > Checkbox
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card ends-->
                    <!--card begins-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="card-title">Buttons Outline</div>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-outline-primary">Primary</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-outline-success">Success</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-outline-danger">Danger</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-outline-warning">Warning</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-outline-info">Info</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 btn-outline-dark">Dark</button>

                        </div>
                    </div>
                    <!--card ends-->
                    <!--card begins-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="card-title">Badge Buttons </div>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn m-b-15 ml-2 mr-2 badge badge-soft-primary">Primary</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 badge
                            badge-soft-secondary">Secondary</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 badge badge-soft-success">Success</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 badge badge-soft-danger">Danger</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 badge badge-soft-warning">Warning</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 badge badge-soft-info">Info</button>
                            <button type="button" class="btn m-b-15 ml-2 mr-2 badge badge-soft-dark">Dark</button>

                        </div>
                    </div>
                    <!--card ends-->

                </div>
            </div>
        </div>
    </section>