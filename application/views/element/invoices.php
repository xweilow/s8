<section class="admin-content ">
        <div class="bg-dark m-b-30">
            <div class="container">
                <div class="row p-b-60 p-t-60">

                    <div class="col-md-6 text-white p-b-30">
                        <div class="media">
                            <div class="avatar avatar mr-3">
                                <div class="avatar-title bg-success rounded-circle mdi mdi-currency-usd  ">

                                </div>
                            </div>
                            <div class="media-body">
                                <h1>Invoices </h1>
                                <p class="opacity-75">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ducimus facere
                                    inventore molestiae nostrum odit velit.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 text-center m-b-30 ml-auto">
                        <div class="rounded text-white bg-white-translucent">
                            <div class="p-all-15">
                                <div class="row">
                                    <div class="col-md-6 my-2 m-md-0">
                                        <div class="text-overline    opacity-75">amount received</div>
                                        <h3 class="m-0 text-success">$42,560</h3>
                                    </div>
                                    <div class="col-md-6 my-2 m-md-0">

                                        <div class="text-overline    opacity-75">amount pending</div>
                                        <h3 class="m-0 text-danger">$1,520</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="pull-up">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-20">
                                    <div class="col-md-6 my-auto">
                                        <h4 class="m-0">Summary</h4>
                                    </div>
                                    <div class="col-md-6 text-right my-auto">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-white shadow-none js-datepicker"><i
                                                        class="mdi mdi-calendar"></i> Pick Date
                                            </button>

                                            <button type="button" class="btn btn-white shadow-none">All</button>
                                            <button type="button" class="btn btn-white shadow-none">Paid</button>
                                            <button type="button" class="btn btn-white shadow-none">UnPaid</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12 p-0">

                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Invoice Number</th>
                                                    <th scope="col">Recipient</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="align-middle">
                                                        <div class="avatar avatar-xs ">
                                                            <img class="rounded-circle avatar-img"
                                                                 src="<?= base_url() ?>assets/img/logos/stripe.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">12-Sept-2018</td>
                                                    <td class="align-middle">#987121</td>
                                                    <td class="align-middle">atmos@stripe.com</td>
                                                    <td class="align-middle"><span class=" text-success"><i
                                                                    class="mdi mdi-check-circle "></i> Paid</span></td>
                                                    <td class="align-middle"><h6 class=" m-0">$3500</h6></td>
                                                    <td class="align-middle">
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <a href="invoice-single.html" class="btn btn-white">View
                                                                    Invoice</a>
                                                                <button type="button"
                                                                        class="btn btn-white dropdown-toggle dropdown-toggle-split rounded-right"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div role="separator"
                                                                         class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">
                                                        <div class="avatar avatar-xs ">
                                                            <img class="rounded-circle avatar-img"
                                                                 src="<?= base_url() ?>assets/img/logos/amazon.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">12-Sept-2018</td>
                                                    <td class="align-middle">#9850</td>
                                                    <td class="align-middle">freddy.a@amazon.com</td>
                                                    <td class="align-middle"><span class=" text-success"><i
                                                                    class="mdi mdi-check-circle "></i> Paid</span></td>
                                                    <td class="align-middle"><h6 class=" m-0">$5800</h6></td>
                                                    <td class="align-middle">
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <a href="invoice-single.html" class="btn btn-white">View
                                                                    Invoice</a>
                                                                <button type="button"
                                                                        class="btn btn-white dropdown-toggle dropdown-toggle-split rounded-right"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div role="separator"
                                                                         class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">
                                                        <div class="avatar avatar-xs ">
                                                            <img class="rounded-circle avatar-img"
                                                                 src="<?= base_url() ?>assets/img/logos/mailchimp.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">13-Aug-2018</td>
                                                    <td class="align-middle">#987123</td>
                                                    <td class="align-middle">thomas@mailchimp.com</td>
                                                    <td class="align-middle"><span class=" text-danger"><i
                                                                    class="mdi mdi-close-circle "></i> Un-Paid</span>
                                                    </td>
                                                    <td class="align-middle"><h6 class=" m-0">$6500</h6></td>
                                                    <td class="align-middle">
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <a href="invoice-single.html" class="btn btn-white">View
                                                                    Invoice</a>
                                                                <button type="button"
                                                                        class="btn btn-white dropdown-toggle dropdown-toggle-split rounded-right"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div role="separator"
                                                                         class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">
                                                        <div class="avatar avatar-xs ">
                                                            <img class="rounded-circle avatar-img"
                                                                 src="<?= base_url() ?>assets/img/logos/stripe.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">19-Dec-2018</td>
                                                    <td class="align-middle">#987118</td>
                                                    <td class="align-middle">atmos@stripe.com</td>
                                                    <td class="align-middle"><span class=" text-dark"><i
                                                                    class="mdi mdi-watch "></i> Scheduled</span></td>
                                                    <td class="align-middle"><h6 class=" m-0">$5800</h6></td>
                                                    <td class="align-middle">
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <a href="invoice-single.html" class="btn btn-white">View
                                                                    Invoice</a>
                                                                <button type="button"
                                                                        class="btn btn-white dropdown-toggle dropdown-toggle-split rounded-right"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div role="separator"
                                                                         class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">
                                                        <div class="avatar avatar-xs ">
                                                            <span class="avatar-title bg-danger rounded-circle">S</span>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">12-Sept-2018</td>
                                                    <td class="align-middle">#987125</td>
                                                    <td class="align-middle">steve@atmos.com</td>
                                                    <td class="align-middle"><span class=" text-success"><i
                                                                    class="mdi mdi-check-circle "></i> Paid</span></td>
                                                    <td class="align-middle"><h6 class="text-danger m-0">-$5710</h6>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <a href="invoice-single.html" class="btn btn-white">View
                                                                    Invoice</a>
                                                                <button type="button"
                                                                        class="btn btn-white dropdown-toggle dropdown-toggle-split rounded-right"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div role="separator"
                                                                         class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">
                                                        <div class="avatar avatar-xs ">
                                                            <img class="rounded-circle avatar-img"
                                                                 src="<?= base_url() ?>assets/img/logos/nytimes.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">12-Oct-2018</td>
                                                    <td class="align-middle">#987162</td>
                                                    <td class="align-middle">chief@nytimes.com</td>
                                                    <td class="align-middle"><span class=" text-success"><i
                                                                    class="mdi mdi-check-circle "></i> Paid</span></td>
                                                    <td class="align-middle"><h6 class=" m-0">$4521</h6></td>
                                                    <td class="align-middle">
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <a href="invoice-single.html" class="btn btn-white">View
                                                                    Invoice</a>
                                                                <button type="button"
                                                                        class="btn btn-white dropdown-toggle dropdown-toggle-split rounded-right"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div role="separator"
                                                                         class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">
                                                        <div class="avatar avatar-xs ">
                                                            <img class="rounded-circle avatar-img"
                                                                 src="<?= base_url() ?>assets/img/logos/google.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">02-Jan-2018</td>
                                                    <td class="align-middle">#9850</td>
                                                    <td class="align-middle">andrew@google.com</td>
                                                    <td class="align-middle"><span class=" text-success"><i
                                                                    class="mdi mdi-check-circle "></i> Paid</span></td>
                                                    <td class="align-middle"><h6 class=" m-0">$5712</h6></td>
                                                    <td class="align-middle">
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <a href="invoice-single.html" class="btn btn-white">View
                                                                    Invoice</a>
                                                                <button type="button"
                                                                        class="btn btn-white dropdown-toggle dropdown-toggle-split rounded-right"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div role="separator"
                                                                         class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">
                                                        <div class="avatar avatar-xs ">
                                                            <img class="rounded-circle avatar-img"
                                                                 src="<?= base_url() ?>assets/img/logos/vimeo.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">13-Feb-2018</td>
                                                    <td class="align-middle">#98200</td>
                                                    <td class="align-middle">jay@vimeo.com</td>
                                                    <td class="align-middle"><span class=" text-danger"><i
                                                                    class="mdi mdi-close-circle "></i> Un-Paid</span>
                                                    </td>
                                                    <td class="align-middle"><h6 class=" m-0">$6500</h6></td>
                                                    <td class="align-middle">
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <a href="invoice-single.html" class="btn btn-white">View
                                                                    Invoice</a>
                                                                <button type="button"
                                                                        class="btn btn-white dropdown-toggle dropdown-toggle-split rounded-right"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div role="separator"
                                                                         class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">
                                                        <div class="avatar avatar-xs ">
                                                            <img class="rounded-circle avatar-img"
                                                                 src="<?= base_url() ?>assets/img/logos/tinder.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">19-Jan-2019</td>
                                                    <td class="align-middle">#987118</td>
                                                    <td class="align-middle">sasha@tinder.com</td>
                                                    <td class="align-middle"><span class=" text-dark"><i
                                                                    class="mdi mdi-watch "></i> Scheduled</span></td>
                                                    <td class="align-middle"><h6 class=" m-0">$5800</h6></td>
                                                    <td class="align-middle">
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <a href="invoice-single.html" class="btn btn-white">View
                                                                    Invoice</a>
                                                                <button type="button"
                                                                        class="btn btn-white dropdown-toggle dropdown-toggle-split rounded-right"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div role="separator"
                                                                         class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">
                                                        <div class="avatar avatar-xs ">
                                                            <img class="rounded-circle avatar-img"
                                                                 src="<?= base_url() ?>assets/img/logos/amazon.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">12-Sept-2018</td>
                                                    <td class="align-middle">#9850</td>
                                                    <td class="align-middle">freddy.a@amazon.com</td>
                                                    <td class="align-middle"><span class=" text-success"><i
                                                                    class="mdi mdi-check-circle "></i> Paid</span></td>
                                                    <td class="align-middle"><h6 class=" m-0">$5800</h6></td>
                                                    <td class="align-middle">
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <a href="invoice-single.html" class="btn btn-white">View
                                                                    Invoice</a>
                                                                <button type="button"
                                                                        class="btn btn-white dropdown-toggle dropdown-toggle-split rounded-right"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div role="separator"
                                                                         class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">
                                                        <div class="avatar avatar-xs ">
                                                            <img class="rounded-circle avatar-img"
                                                                 src="<?= base_url() ?>assets/img/logos/mailchimp.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">13-Aug-2018</td>
                                                    <td class="align-middle">#987143</td>
                                                    <td class="align-middle">thomas@mailchimp.com</td>
                                                    <td class="align-middle"><span class=" text-success"><i
                                                                    class="mdi mdi-check-circle "></i>Paid</span></td>
                                                    <td class="align-middle"><h6 class=" m-0">$5400</h6></td>
                                                    <td class="align-middle">
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <a href="invoice-single.html" class="btn btn-white">View
                                                                    Invoice</a>
                                                                <button type="button"
                                                                        class="btn btn-white dropdown-toggle dropdown-toggle-split rounded-right"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div role="separator"
                                                                         class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle">
                                                        <div class="avatar avatar-xs ">
                                                            <img class="rounded-circle avatar-img"
                                                                 src="<?= base_url() ?>assets/img/logos/stripe.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">19-Dec-2018</td>
                                                    <td class="align-middle">#987118</td>
                                                    <td class="align-middle">atmos@stripe.com</td>
                                                    <td class="align-middle"><span class=" text-dark"><i
                                                                    class="mdi mdi-watch "></i> Scheduled</span></td>
                                                    <td class="align-middle"><h6 class=" m-0">$5800</h6></td>
                                                    <td class="align-middle">
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <a href="invoice-single.html" class="btn btn-white">View
                                                                    Invoice</a>
                                                                <button type="button"
                                                                        class="btn btn-white dropdown-toggle dropdown-toggle-split rounded-right"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div role="separator"
                                                                         class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="col-auto ml-auto">
                                        <div>
                                            <nav class="">
                                                <ul class="pagination">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item ">
                                                        <a class="page-link" href="#">2 <span
                                                                    class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
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