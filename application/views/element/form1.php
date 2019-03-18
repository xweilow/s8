<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-12 text-white p-t-40 p-b-90">
                    <h4 class="">  Form elements
                    </h4>
                    <p class="opacity-75 ">
                        Examples for form control styles, layout options, and custom components for
                        creating a wide variety of forms elements.
                        <br>
                        we have included dropzone for file uploads, datepicker and select2 for custom controls.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container  pull-up">
        <div class="row">
            <div class="col-lg-6">
                <!--widget card begin-->
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            Forms
                        </h5>
                        <p class="m-b-0 text-muted">
                            Standard form controls
                        </p>
                    </div>
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4"  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                Check me out
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                <!--widget card ends-->
                <!--widget card begin-->
                <div class="card m-b-30 ">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            Floating Labels
                        </h5>
                        <p class="m-b-0 opacity-50">
                            atmos comes with floating label inputs
                        </p>
                    </div>
                    <div class="card-body ">
                        <!--Following uses  .form-dark class on parent to make controls appear -->
                        <!--transparent in the container-->
                        <form class="" action="#">
                            <div class="form-row">
                                <div class="form-group floating-label col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group floating-label col-md-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control "  >
                                </div>
                            </div>
                            <div class="form-group floating-label">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Address 1234 Main St">
                            </div>
                            <div class="form-group floating-label">
                                <label>Address 2</label>
                                <input type="text" class="form-control"
                                    placeholder="Address 2 Apartment, studio, or floor">
                            </div>
                            <div class="form-row">
                                <div class="form-group floating-label col-md-6">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                                <!--                                    select inputs should have .show-label class by default-->
                                <div class="form-group floating-label show-label col-md-4">
                                    <label>State</label>
                                    <select class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Remember</option>
                                        <option>keeping</option>
                                        <option>things</option>
                                        <option>Classy</option>
                                        <option>is important</option>
                                    </select>
                                </div>
                                <div class="form-group floating-label col-md-2">
                                    <label>Zip</label>
                                    <input type="text" class="form-control" placeholder="Zip">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Create Account</button>
                        </form>
                    </div>
                </div>
                <div class="card m-b-30 bg-dark text-white">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            Forms Dark
                        </h5>
                        <p class="m-b-0 opacity-50">
                            Form control in dark backgrounds. use form-dark in parent container to make
                            inputs of the given container transparent
                        </p>
                    </div>
                    <div class="card-body ">
                        <!--Following uses  .form-dark class on parent to make controls appear -->
                        <!--transparent in the container-->
                        <form class="form-dark" action="#">
                            <div class="form-row">
                                <div class="form-group  col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                                <label>Address 2</label>
                                <input type="text" class="form-control" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>City</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>State</label>
                                    <select class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Remember</option>
                                        <option>keeping</option>
                                        <option>things</option>
                                        <option>Classy</option>
                                        <option>is important</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Zip</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Create Account</button>
                        </form>
                    </div>
                </div>
                <!--widget card ends-->
                <!--widget card begin-->
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            Input Groups
                        </h5>
                        <p class="m-b-0 text-muted">
                            Easily extend form controls by adding text, buttons, or button groups on either side of
                            textual inputs, custom selects, and custom file inputs.
                        </p>
                    </div>
                    <div class="card-body ">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                            </div>
                        </div>
                        <label for="basic-url">Your vanity URL</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                            </div>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">With textarea</span>
                            </div>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                </div>
                <!--widget card ends-->
            </div>
            <div class="col-lg-6">
                <!--widget card begin-->
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            Forms Sizes
                        </h5>
                        <p class="m-b-0 text-muted">
                            Form Control Sizes
                        </p>
                    </div>
                    <div class="card-body ">
                        <div class="form-row">
                            <div class="col-12 form-group">
                                <input class="form-control form-control-lg" type="text"
                                    placeholder=".form-control-lg">
                            </div>
                            <div class="col-12 form-group">
                                <input class="form-control" type="text" placeholder="Default input">
                            </div>
                            <div class="col-12 form-group">
                                <input class="form-control form-control-sm" type="text"
                                    placeholder=".form-control-sm">
                            </div>
                            <div class="col-12 form-group">
                                <select class="form-control form-control-lg">
                                    <option>Large select</option>
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <select class="form-control">
                                    <option>Default select</option>
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <select class="form-control form-control-sm">
                                    <option>Small select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!--widget card ends-->
                <!--widget card begin-->
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            Validation Server Side
                        </h5>
                        <p class="m-b-0 text-muted">
                            You can add server side validation using you can indicate invalid and valid form fields
                            with .is-invalid and .is-valid. Note that .invalid-feedback is also supported with these
                            classes.
                        </p>
                    </div>
                    <div class="card-body ">
                        <form>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer01">First name</label>
                                    <input type="text" class="form-control is-valid" id="validationServer01"
                                        placeholder="First name" value="Mark" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServer02">Last name</label>
                                    <input type="text" class="form-control is-valid" id="validationServer02"
                                        placeholder="Last name" value="Otto" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationServerUsername">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                        </div>
                                        <input type="text" class="form-control is-invalid"
                                            id="validationServerUsername" placeholder="Username"
                                            aria-describedby="inputGroupPrepend3" required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer03">City</label>
                                    <input type="text" class="form-control is-invalid" id="validationServer03"
                                        placeholder="City" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer04">State</label>
                                    <input type="text" class="form-control is-invalid" id="validationServer04"
                                        placeholder="State" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer05">Zip</label>
                                    <input type="text" class="form-control is-invalid" id="validationServer05"
                                        placeholder="Zip" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid zip.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input is-invalid" type="checkbox" value=""
                                        id="invalidCheck3" required>
                                    <label class="form-check-label" for="invalidCheck3">
                                    Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
                <!--widget card ends-->
                <!--widget card begin-->
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            Flushed Forms
                        </h5>
                        <p class="m-b-0 text-muted">
                            default form-controls with transparent borders for input group.
                        </p>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="input-group input-group-flush mb-3">
                                <input type="text" class="form-control form-control-prepended"
                                    placeholder="Enter Security Pin Code">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class=" mdi mdi-lock "></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group input-group-flush mb-3">
                                <input type="number" class="form-control form-control-prepended"
                                    placeholder="Enter your vision">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class=" mdi mdi-eye "></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group input-group-flush mb-3">
                                <input type="email" class="form-control form-control-appended"
                                    placeholder="Enter your Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class=" mdi mdi-email "></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--widget card ends-->
            </div>
        </div>
    </div>
</section>