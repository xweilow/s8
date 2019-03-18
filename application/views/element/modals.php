<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">
                        <h4><span class="btn btn-white-translucent"><i
                                        class="mdi mdi-checkbox-multiple-blank-outline "></i></span> Modals</h4>

                        <p class="opacity-75">We have extended Bootstraps core modals with different options </p>
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
                                Modals
                            </h5>

                        </div>
                        <div class="card-body">

                            <div class="m-b-10">
                                <p class="font-secondary">Standard BS4 Modal</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Launch demo modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-align-top-left" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
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

                            </div>
                            <hr>
                            <div class="m-b-10">
                                <p class="font-secondary">🔥 Modal With Events</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSuccess">Show Success</button>
                                <!-- Modal -->
                                <div class="modal fade "   id="modalSuccess"  tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <div class="modal-body">
                                                <div class="px-3 pt-3 text-center">
                                                    <div class="event-type success">
                                                        <div class="event-indicator ">
                                                            <i class="mdi mdi-check text-white" style="font-size: 60px"></i>
                                                        </div>
                                                    </div>
                                                    <h3 class="pt-3">Hurray Mission Accomplished!</h3>
                                                    <p class="text-muted">
                                                        Now you can sync all of your devices
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="modal-footer ">
                                                <a href="#" class="btn btn-primary" data-dismiss="modal" aria-label="Close" >Okay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Ends -->

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalConfirmation">Show Confirmation</button>
                                <!-- Modal -->
                                <div class="modal fade "   id="modalConfirmation" data-backdrop="static"  tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <div class="modal-body">
                                                <div class="px-3 pt-3 text-center">
                                                    <div class="event-type warning">
                                                        <div class="event-indicator ">
                                                            <i class="mdi mdi-exclamation text-white" style="font-size: 60px"></i>
                                                        </div>
                                                    </div>
                                                    <h3 class="pt-3">Are you sure?</h3>
                                                    <p class="text-muted">
                                                        Action will delete  all of your devices
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="modal-footer ">
                                                <a href="#" class="btn btn-primary" data-dismiss="modal" aria-label="Close" >Okay</a>
                                                <a href="#" class="btn btn-secondary" data-dismiss="modal" aria-label="Close" >cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Ends -->

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalError">Show Error</button>
                                <!-- Modal -->
                                <div class="modal fade "   id="modalError"  tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <div class="modal-body">
                                                <div class="px-3 pt-3 text-center">
                                                    <div class="event-type error">
                                                        <div class="event-indicator ">
                                                           <i class="mdi mdi-close text-white" style="font-size: 60px"></i>
                                                        </div>
                                                    </div>
                                                    <h3 class="pt-3">Oops!</h3>
                                                    <p class="text-muted">
                                                        We're sorry, but something went wrong.
                                                    </p>
                                                    <div>
                                                        <a href="#" class="badge badge-danger">Error Code:503</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer ">
                                                <a href="#" class="btn btn-primary" data-dismiss="modal" aria-label="Close" >Okay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Ends -->
                            </div>

                            <div class="m-b-10">
                                <!-- Button trigger modal -->
                                <p class="font-secondary">Scrolling long content
                                </p>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#scrollModal">
                                    Launch long Scroll demo modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="scrollModal" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Long Scrolling
                                                    Modal</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,
                                                    aliquam consequatur eligendi et fugiat id laboriosam laudantium
                                                    magnam maxime minus modi, nulla provident quae quasi quia similique
                                                    sit voluptas voluptatum?
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,
                                                    aliquam consequatur eligendi et fugiat id laboriosam laudantium
                                                    magnam maxime minus modi, nulla provident quae quasi quia similique
                                                    sit voluptas voluptatum?
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,
                                                    aliquam consequatur eligendi et fugiat id laboriosam laudantium
                                                    magnam maxime minus modi, nulla provident quae quasi quia similique
                                                    sit voluptas voluptatum?
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut
                                                    consequatur cumque enim est excepturi illo inventore magni maxime
                                                    nemo non nulla, officiis possimus, quidem reprehenderit saepe
                                                    tempore velit vitae.
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Consequatur debitis laboriosam optio quam reprehenderit voluptates?
                                                    Dolore eius esse nemo odio tempora. Alias commodi laborum quibusdam
                                                    quod velit. Labore, modi, molestiae?
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,
                                                    aliquam consequatur eligendi et fugiat id laboriosam laudantium
                                                    magnam maxime minus modi, nulla provident quae quasi quia similique
                                                    sit voluptas voluptatum?
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,
                                                    aliquam consequatur eligendi et fugiat id laboriosam laudantium
                                                    magnam maxime minus modi, nulla provident quae quasi quia similique
                                                    sit voluptas voluptatum?
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,
                                                    aliquam consequatur eligendi et fugiat id laboriosam laudantium
                                                    magnam maxime minus modi, nulla provident quae quasi quia similique
                                                    sit voluptas voluptatum?
                                                </p>


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
                            </div>
                            <hr>
                            <div class="m-b-10">
                                <p class="font-secondary">Vertically centered
                                </p>
                                <p class="opacity-75">
                                    Add .modal-dialog-centered to .modal-dialog to vertically center the modal.


                                </p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                    Launch Vertically Center Modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Vertically Center
                                                    Modal</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h3>I am vertically centered modal</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Aspernatur, assumenda aut eaque eius error, eum expedita iusto nobis
                                                    obcaecati, perspiciatis quae quos saepe similique! Iure non
                                                    perspiciatis qui veniam vitae!
                                                </p>
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
                            </div>
                            <hr>
                            <div class="m-b-10">
                                <p class="font-secondary"> Modal Sizes
                                </p>

                                <!-- Large modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target=".bd-example-modal-lg">Large modal
                                </button>

                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                     aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myLargeModalLabel">Large Modal</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h3>I'm large modal</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Aspernatur, assumenda aut eaque eius error, eum expedita iusto nobis
                                                    obcaecati, perspiciatis quae quos saepe similique! Iure non
                                                    perspiciatis qui veniam vitae!
                                                </p>
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

                                <!-- Small modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target=".bd-example-modal-sm">Small modal
                                </button>

                                <div class="modal fade bd-example-modal-sm"  tabindex="-1" role="dialog"
                                     aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="mySmallModalLabel">Small Modal</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h3>I'm tiny modal</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consecte ure non perspiciatis qui veniam
                                                    vitae!
                                                </p>
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
                            </div>


                        </div>
                    </div>
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                Custom Modals
                            </h5>
                            <p class="text-muted m-b-0">
                                We have modified bootstraps base modal to generate different popup banners
                            </p>

                        </div>
                        <div class="card-body">
                            <div class="m-b-10">

                                <button type="button" class="btn btn-primary m-b-10" data-toggle="modal" data-target="#example_01">
                                    Blog Article
                                </button>
                                <!-- Modal -->
                                <div class="modal fade "   id="example_01" tabindex="-1" role="dialog"
                                     aria-labelledby="example_01" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered "  role="document">
                                        <div class="modal-content " >

                                            <div >
                                                <button type="button" class="close light" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <img src="<?= base_url() ?>assets/img/social/s23.jpg" class="rounded-top" alt="">
                                            </div>
                                            <div class="modal-body ">
                                                <div class="pull-up-sm p-b-20">
                                                    <div class="avatar avatar-lg">
                                                        <div class="avatar-title rounded bg-info">
                                                            <i class="mdi mdi-weather-sunny"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2>Sunday Hiking</h2>
                                                <p class="text-muted">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, iusto, quibusdam? A ab dolorem fugit iusto laboriosam magni minus nesciunt nobis, optio pariatur quas quia quis repudiandae suscipit ut voluptates!
                                                </p>
                                                <p>
                                                    <button data-dismiss="modal" class="btn btn-success">Plan the Trip</button>

                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Ends -->


                                <button type="button" class="btn btn-primary m-b-10" data-toggle="modal" data-target="#example_02">
                                    Sign Up
                                </button>
                                <!-- Modal -->
                                <div class="modal fade "   id="example_02" tabindex="-1" role="dialog"
                                     aria-labelledby="example_02" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
                                        <div class="modal-content " >


                                            <div class="container-fluid ">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="row ">
                                                    <div class="col-md-6 d-none d-md-block  bg-dark bg-cover rounded-left" style="background-image: url('<?= base_url() ?>assets/img/social/s24.jpg')"></div>
                                                    <div class="col-md-6 p-t-20 p-b-20">
                                                        <form class="needs-validation" action="#">
                                                            <div class="p-b-20 text-center">
                                                                <p>
                                                                    <img src="<?= base_url() ?>assets/img/logo.svg" width="80" alt="">

                                                                </p>
                                                                <p class="admin-brand-content">
                                                                    atmos
                                                                </p>
                                                            </div>

                                                            <div class="form-row">

                                                                <div class="form-group floating-label col-md-12">
                                                                    <label>Email</label>
                                                                    <input type="email" required class="form-control" placeholder="Email">

                                                                </div>
                                                                <div class="form-group floating-label col-md-12">
                                                                    <label>Password</label>
                                                                    <input type="password" required class="form-control " id="password"
                                                                            >
                                                                </div>
                                                            </div>
                                                            <div class="form-group floating-label">
                                                                <label>Password Again</label>
                                                                <input type="password" class="form-control" required id="confirm_password"
                                                                       placeholder="Password Again">
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group floating-label col-md-6">
                                                                    <label>City</label>
                                                                    <input type="text" class="form-control" placeholder="City">
                                                                </div>

                                                                <div class="form-group floating-label col-md-6">
                                                                    <label>Zip</label>
                                                                    <input type="text" class="form-control" placeholder="Zip">
                                                                </div>
                                                            </div>
                                                            <p class="">
                                                                <label class="cstm-switch">
                                                                    <input type="checkbox" checked name="option" value="1" class="cstm-switch-input">
                                                                    <span class="cstm-switch-indicator "></span>
                                                                    <span class="cstm-switch-description">  I agree to the Terms and Privacy. </span>
                                                                </label>


                                                            </p>

                                                            <button type="submit" class="btn btn-primary btn-block btn-lg">Create Account</button>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Ends -->

                                <!-- Small modal -->
                                <button type="button" class="btn btn-primary m-b-10" data-toggle="modal" data-target="#example_03">
                                    Notification
                                </button>

                                <!-- Modal -->
                                <div class="modal fade modal-bottom-right" id="example_03"  tabindex="-1" role="dialog"
                                     aria-labelledby="example_03" aria-hidden="true">
                                    <div class="modal-dialog   modal-sm" role="document">
                                        <div class="modal-content bg-dark">

                                            <div class="modal-body">

                                                <div class="text-white text-center p-b-10">

                                                    <div class="pull-up-sm">

                                                        <div class="avatar avatar-lg">
                                                            <img src="<?= base_url() ?>assets/img/logos/slack.jpg" alt="slack" class="avatar-img rounded" >
                                                        </div>
                                                    </div>
                                                    <h5 class="p-t-20" >Join the Channel on slack</h5>
                                                    <p class="opacity-75">
                                                        Lorem ipsum dolor sit amet, consecte ure non perspiciatis qui veniam
                                                        vitae!
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <button data-dismiss="modal" class="btn btn-block btn-white"> <i class="mdi  mdi-slack"></i> Join Team on slack</button>
                                                    <p class="text-white p-t-10 text-center"><a data-dismiss="modal" class="text-underline" href="#">Dismiss</a></p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Ends -->

                                <!-- Small modal -->
                                <button type="button" class="btn btn-primary m-b-10" data-toggle="modal" data-target="#example_04">
                                    Mailing List
                                </button>

                                <!-- Modal -->
                                <div class="modal fade modal-bottom-right" id="example_04"  tabindex="-1" role="dialog"
                                     aria-labelledby="example_04" aria-hidden="true">
                                    <div class="modal-dialog   modal-sm" role="document">
                                        <div class="modal-content bg-dark bg-cover" style="background-image: url('<?= base_url() ?>assets/img/patterns/circles.svg')">

                                            <div class="modal-body">
                                                <button type="button" class="close light" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="text-white  p-b-10">

                                                    <div class="avatar avatar-xl my-auto">
                                                        <div class="avatar-title bg-success rounded-circle">
                                                            <i class="mdi mdi-newspaper "></i>
                                                        </div>
                                                    </div>
                                                    <h5 class="p-t-20" >Subscribe to Mailing List</h5>
                                                    <p class="opacity-75">
                                                        Lorem ipsum dolor sit amet, consecte ure non perspiciatis qui veniam
                                                        vitae!
                                                    </p>
                                                    <form action="#" class="form-dark">
                                                        <div class="form-group">
                                                            <label>Enter your Email</label>
                                                            <input type="email" class="form-control" placeholder="adam@example.com">
                                                        </div>
                                                        <button data-dismiss="modal" class="btn  btn-success"> Sign Up</button>

                                                    </form>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Ends -->

                                <!-- Small modal -->
                                <button type="button" class="btn btn-primary m-b-10" data-toggle="modal" data-target="#example_05">
                                    Feedback
                                </button>

                                <!-- Modal -->
                                <div class="modal fade modal-bottom-right" id="example_05"  tabindex="-1" role="dialog"
                                     aria-labelledby="example_04" aria-hidden="true">
                                    <div class="modal-dialog modal-sm " role="document">
                                        <div class="modal-content  " >

                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="text-center p-t-20">
                                                    <h1>😥</h1>
                                                </div>
                                                <h3 class="text-center">Feedback</h3>
                                                <p class="text-center text-muted">Before you leave, please let us know the reason
                                                    you are leaving.</p>
                                                <div>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio1" checked name="customRadio"
                                                                   class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio1">Service was not
                                                                upto mark.</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio"
                                                                   class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio2">Service was not
                                                                suitable for me.</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio3" name="customRadio"
                                                                   class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio3">Pricing
                                                                issues.</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio4" name="customRadio"
                                                                   class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio4">Software is
                                                                buggy.</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio5" name="customRadio"
                                                                   class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio5">Need better
                                                                customer support</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div>
                                                    <button   data-dismiss="modal" class="btn btn-primary btn-block">Share Feedback</button>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Ends -->

                                <button type="button" class="btn btn-primary m-b-10" data-toggle="modal" data-target="#example_06">
                                    Request
                                </button>
                                <!-- Modal -->
                                <div class="modal fade modal-bottom-right" id="example_06"  tabindex="-1" role="dialog"
                                     aria-labelledby="example_06" aria-hidden="true">
                                    <div class="modal-dialog  modal-sm" role="document">
                                        <div class="modal-content">
                                            <div>
                                                <img src="<?= base_url() ?>assets/img/patterns/people-bg.svg" class="rounded-top" alt="">
                                            </div>
                                            <div class="modal-body text-center">
                                                <div class="m-b-10 pull-up-sm">
                                                    <div class="avatar avatar-lg avatar-online">
                                                        <img src="<?= base_url() ?>assets/img/users/user-5.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                </div>
                                                <h5>Sarah Green</h5>
                                                <p class="opacity-75">
                                                    Tony green wants to connect with you.
                                                </p>
                                                <button type="button" class="btn btn-success"  data-dismiss="modal">Accept Request</button>

                                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                    Decline
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Ends -->
                                <button type="button" class="btn btn-primary m-b-10" data-toggle="modal" data-target="#example_07">
                                    Kickass
                                </button>
                                <!-- Modal -->
                                <div class="modal fade " id="example_07"  tabindex="-1" role="dialog"
                                     aria-labelledby="example_07" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered " role="document">
                                        <div class="modal-content bg-cover "  style="background-image: url('<?= base_url() ?>assets/img/social/s25.jpg')">

                                            <div class="modal-body">
                                                <button type="button" class="close light" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="p-all-25">
                                                    <div class="card m-t-60 m-b-20">
                                                        <div class="card-body">
                                                            <h5 class="font-primary" style="line-height: 1.8">
                                                                <i>
                                                                    “Talent doesn’t exist. The talent is to want to do something. Talent is to want to achieve a dream, the rest is just sweat and discipline. I don’t know what is an artist. I just believe that they are some people that work really hard on something.” — Jacques Brel
                                                                </i>
                                                            </h5>
                                                            <p class="opacity-75"><i> — Build something that inspires someone.</i></p>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="#" data-dismiss="modal" class="btn btn-dark"> Build Something Remarkable</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Ends -->
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-6 ">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                Modals Variations
                            </h5>

                        </div>
                        <div class="card-body">

                            <div class="m-b-10">
                                <p class="font-secondary"><i class="mdi mdi-arrow-expand-right"></i> Slide Left</p>
                                <!-- Button trigger modal -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#slideLeftModal">
                                    Launch Modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade modal-slide-left" id="slideLeftModal" tabindex="-1" role="dialog"
                                     aria-labelledby="slideLeftModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="slideLeftModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
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


                            </div>
                            <hr>
                            <div class="m-b-10">
                                <p class="font-secondary"><i class="mdi mdi-arrow-expand-left"></i> Slide Right</p>

                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#slideRightModal">
                                    Launch Modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade modal-slide-right" id="slideRightModal" tabindex="-1" role="dialog"
                                     aria-labelledby="slideRightModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="slideRightModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
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


                            </div>

                            <hr>
                            <div class="m-b-10">
                                <p class="font-secondary"> Custom Modal </p>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#customModal">
                                    Launch Modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade " data-keyboard="false" id="customModal" tabindex="-1"
                                     role="dialog" aria-labelledby="customModal" aria-hidden="true">
                                    <div class="modal-dialog  modal-sm modal-dialog-centered" role="document">
                                        <div class="modal-content m-t-80">
                                            <div class="modal-body">
                                                <div class="">
                                                    <div class="text-center p-b-20 pull-up-sm">
                                                        <div class="avatar avatar-lg avatar-offline">
                                                            <img src="<?= base_url() ?>assets/img/users/user-3.jpg" alt="..."
                                                                 class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <h3 class="text-center">Login </h3>
                                                    <p class="text-center opacity-75">Please Login to continue </p>
                                                    <form action="modal.html">
                                                        <div class="form-group">

                                                            <div class="input-group input-group-flush mb-3">
                                                                <input type="text"
                                                                       class="form-control form-control-prepended"
                                                                       placeholder="username">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <span class=" mdi mdi-account "></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="input-group input-group-flush mb-3">
                                                                <input type="password"
                                                                       class="form-control form-control-prepended"
                                                                        >
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <span class=" mdi mdi-key "></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="form-group">
                                                            <button data-dismiss="modal"
                                                                    class="btn text-uppercase btn-block  btn-primary">
                                                                Login
                                                            </button>
                                                        </div>
                                                    </form>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                Modals with different position
                            </h5>

                        </div>
                        <div class="card-body">
                            <div class="m-b-10">

                                <button type="button" class="btn btn-primary m-b-10" data-modal-position="modal-top-left">
                                    Top Left
                                </button>
                                <button type="button" class="btn btn-primary m-b-10" data-modal-position="">
                                    Top Center (Default)
                                </button>
                                <button type="button" class="btn btn-primary m-b-10" data-modal-position="modal-top-right">
                                    Top Right
                                </button>
                                <br>
                                <button type="button" class="btn btn-primary m-b-10" data-modal-position="modal-bottom-right">
                                    Bottom Right
                                </button>
                                <button type="button" class="btn btn-primary m-b-10" data-modal-position="modal-bottom-center">
                                    Bottom Center
                                </button>
                                <button type="button" class="btn btn-primary m-b-10" data-modal-position="modal-bottom-left">
                                    Bottom Left
                                </button>

                                <!-- Modal -->
                                <div class="modal fade " id="positionModal" tabindex="-1" role="dialog"
                                     aria-labelledby="BottomRightLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="BottomRightLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
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


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>