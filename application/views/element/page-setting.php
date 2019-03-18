<section class="admin-content ">
        <div class="bg-dark bg-dots m-b-30">
            <div class="container">
                <div class="row p-b-60 p-t-60">

                    <div class="col-lg-8 text-center mx-auto text-white p-b-30">
                        <div class="m-b-10">
                            <div class="avatar avatar-lg ">
                                <div class="avatar-title bg-info rounded-circle mdi mdi-settings "></div>
                            </div>
                        </div>
                        <h3>User Settings </h3>
                    </div>


                </div>
            </div>
        </div>
        <section class="pull-up">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8 mx-auto  mt-2">
                       <div class="card py-3 m-b-30">
                           <div class="card-body">
                               <form>
                                   <h3 class="">Personal Data</h3>
                                   <p class="text-muted">
                                       Use this page to update your contact information and change your password.
                                   </p>
                                   <div class="">
                                       <label class="avatar-input">
                                    <span class="avatar avatar-xl">
                                        <img src="<?= base_url() ?>assets/img/users/user-6.jpg" alt="..."
                                             class="avatar-img rounded-circle">
                                         <span class="avatar-input-icon rounded-circle">
                                        <i class="mdi mdi-upload mdi-24px"></i>
                                    </span>
                                    </span>
                                           <input type="file" name="avatar" class="avatar-file-picker" >

                                       </label>

                                   </div>
                                   <div class="form-row">
                                       <div class="form-group col-md-6">
                                           <label for="inputEmail6">Name</label>
                                           <input type="text" value="John Doe" class="form-control" id="inputEmail6" placeholder="Name">
                                       </div>
                                       <div class="form-group col-md-6">
                                           <label for="inputEmail4">Email</label>
                                           <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="john@example.com">
                                       </div>

                                   </div>
                                   <div class="form-row">
                                       <div class="form-group col-md-6">
                                           <label for="asd">Username</label>
                                           <input type="text" class="form-control" id="asd" placeholder="username" value="john">
                                       </div>
                                       <div class="form-group col-md-6">
                                           <label for="inputPassword4">Password</label>
                                           <input type="password" class="form-control" id="inputPassword4" placeholder="Password" value="maddog@123">
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label for="inputAddress">Address</label>
                                       <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                   </div>
                                   <div class="form-group">
                                       <label for="inputAddress2">Address 2</label>
                                       <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                   </div>
                                   <button type="submit" class="btn btn-success btn-cta">Save changes</button>
                               </form>
                           </div>
                       </div>
                        <div class="card  py-3 m-b-30">
                            <div class="card-body">
                                <h1>Services</h1>
                                <p class="text-muted">
                                    Manage third-party app integrations.
                                </p>
                                <div class="row">
                                    <div class="col-sm-4 m-b-30">
                                        <div class="option-box-grid d-block">
                                            <input id="check1" checked name="bigradios" type="checkbox">
                                            <label for="check1" class="d-block">
                                            <span class="radio-content  p-all-15 text-center">
                                                <span class="mdi h1 d-block mdi-google-adwords"></span>
                                                <span class="h5">Adwords Account</span>
                                                <span class="d-block text-overline text-muted">$15/Month</span>
                                            </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 m-b-30">
                                        <div class="option-box-grid d-block">
                                            <input id="check2" name="bigradios" type="checkbox">
                                            <label for="check2" class="d-block">
                                            <span class="radio-content  p-all-15 text-center">
                                                <span class="mdi h1  d-block mdi-azure"></span>
                                                <span class="h5">Azure Account</span>
                                                <span class="d-block text-overline text-muted">$8/Month</span>
                                            </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 m-b-30">
                                        <div class="option-box-grid d-block">
                                            <input id="check3" name="bigradios" type="checkbox">
                                            <label for="check3" class="d-block">
                                            <span class="radio-content  p-all-15 text-center">
                                                <span class="mdi h1  d-block mdi-folder-google-drive"></span>
                                                <span class="h5">Google Apps</span>
                                                <span class="d-block text-overline text-muted">$105/Month</span>
                                            </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 m-b-30">
                                        <div class="option-box-grid d-block">
                                            <input id="check4" name="bigradios" type="checkbox">
                                            <label for="check4" class="d-block">
                                            <span class="radio-content  p-all-15 text-center">
                                                <span class="mdi h1  d-block mdi-apps-box"></span>
                                                <span class="h5">Google Apps</span>
                                                <span class="d-block text-overline text-muted">$84/Month</span>
                                            </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 m-b-30">
                                        <div class="option-box-grid d-block">
                                            <input id="check5" name="bigradios" type="checkbox">
                                            <label for="check5" class="d-block">
                                            <span class="radio-content  p-all-15 text-center">
                                                <span class="mdi h1  d-block mdi-spotify"></span>
                                                <span class="h5">spotify </span>
                                                <span class="d-block text-overline text-muted">$12/Month</span>
                                            </span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-success btn-cta">Save changes</button>

                            </div>
                        </div>
                        <div class="card  py-3 m-b-30">
                            <div class="card-body">
                                <h3 class="">Plans</h3>
                                <p class="text-muted">
                                    Changes in plans will reflect on 15<sup>th</sup> of every month
                                </p>
                                <div class="option-box">
                                    <input id="radio-new1" name="bigradios" type="radio">
                                    <label for="radio-new1">
                                        <span class="radio-content">
                                            <span class="h6 d-block">Starter Plan <span class="badge-soft-primary badge">$12 MONTH</span>
                                            </span>
                                            <span class="text-muted d-block m-b-10">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                                blanditiis ducimus ipsa provident quae quaerat similique? Consequatur
                                                consequuntur cum, inventore nihil porro quis. Ad assumenda eligendi
                                                illum impedit quis totam.
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class="option-box">
                                    <input id="radio-new2" checked name="bigradios" type="radio">
                                    <label for="radio-new2">
                                        <span class="radio-content">
                                            <span class="h6 d-block">Pro Plan <span class="badge-soft-info badge">$49 MONTH</span></span>

                                            <span class="text-muted d-block m-b-10">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                                blanditiis ducimus ipsa provident quae quaerat similique? Consequatur
                                                consequuntur cum, inventore nihil porro quis. Ad assumenda eligendi
                                                illum impedit quis totam.
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class="option-box">
                                    <input id="radio-new3" name="bigradios" type="radio">
                                    <label for="radio-new3">
                                        <span class="radio-content">
                                            <span class="h6 d-block">Business Plan <span class="badge-soft-danger badge">$99 MONTH</span>
                                            </span>

                                            <span class="text-muted d-block m-b-10">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                                blanditiis ducimus ipsa provident quae quaerat similique? Consequatur
                                                consequuntur cum, inventore nihil porro quis. Ad assumenda eligendi
                                                illum impedit quis totam.
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class="p-t-30">
                                    <button type="submit" class="btn btn-success btn-cta">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    </section>