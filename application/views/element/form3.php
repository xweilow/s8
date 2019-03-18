<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4>  Form Advance
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
                                Select 2
                            </h5>
                            <p class="m-b-0 text-muted">
                                You can learn more about select2 at <a target="_blank" href="https://select2.org"
                                                                       class="text-underline">official documentation</a>
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="form-group ">
                                <label  class="font-secondary">Select </label>
                                <select  class="form-control js-select2">
                                    <option selected>Apple Pie</option>
                                    <option>Cup Cake</option>
                                    <option>Donut</option>
                                    <option>Eclair</option>
                                    <option>Froyo</option>
                                    <option>GingerBread</option>
                                    <option>HoneyComb</option>
                                    <option>Ice Cream Sandwich</option>
                                    <option>Jellybean</option>
                                    <option>Kitkat</option>
                                    <option>Lollipop</option>
                                    <option>Marshmallow</option>
                                    <option>Nougat</option>
                                    <option>Oreo</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label class="font-secondary">Multiselect Tag input </label>
                                <select multiple class="form-control js-select2">
                                    <option selected>Apple Pie</option>
                                    <option>Cup Cake</option>
                                    <option>Donut</option>
                                    <option>Eclair</option>
                                    <option>Froyo</option>
                                    <option>GingerBread</option>
                                    <option>HoneyComb</option>
                                    <option>Ice Cream Sandwich</option>
                                    <option>Jellybean</option>
                                    <option>Kitkat</option>
                                    <option>Lollipop</option>
                                    <option>Marshmallow</option>
                                    <option>Nougat</option>
                                    <option>Oreo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--widget card ends-->

                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                 Input Mask
                            </h5>
                            <p class="m-b-0 text-muted">
                                Following shows an example of input masking using <a
                                        href="https://github.com/igorescobar/jQuery-Mask-Plugin" target="_blank"
                                        class="text-underline">jQuery Mask Plugin</a> library
                            </p>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label class="form-label">Date</label>
                                <input type="text" name="field-name" class="form-control" data-mask="00/00/0000"
                                       data-mask-clearifnotmatch="true" placeholder="00/00/0000"/>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Hour</label>
                                <input type="text" name="field-name" class="form-control" data-mask="00:00:00"
                                       data-mask-clearifnotmatch="true" placeholder="00:00:00"/>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Date & Hour</label>
                                <input type="text" name="field-name" class="form-control"
                                       data-mask="00/00/0000 00:00:00" data-mask-clearifnotmatch="true"
                                       placeholder="00/00/0000 00:00:00"/>
                            </div>
                            <div class="form-group">
                                <label class="form-label">ZIP Code</label>
                                <input type="text" name="field-name" class="form-control" data-mask="00000-000"
                                       data-mask-clearifnotmatch="true" placeholder="00000-000"/>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Money</label>
                                <input type="text" name="field-name" class="form-control"
                                       data-mask="000.000.000.000.000,00" data-mask-reverse="true"/>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Telephone</label>
                                <input type="text" name="field-name" class="form-control" data-mask="0000-0000"
                                       data-mask-clearifnotmatch="true" placeholder="0000-0000"/>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Telephone with Code Area</label>
                                <input type="text" name="field-name" class="form-control" data-mask="(00) 0000-0000"
                                       data-mask-clearifnotmatch="true"/>
                            </div>
                            <div class="form-group">
                                <label class="form-label">IP Address</label>
                                <input type="text" name="field-name" class="form-control" data-mask="099.099.099.099"
                                       data-mask-clearifnotmatch="true" placeholder="000.000.000.000"/>
                            </div>
                        </div>
                    </div>

                    <!--widget card ends-->
                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                               RangeSlider
                            </h5>
                            <p class="m-b-0 text-muted">
                                Sliders are powered by jQuery UI, which is customised according to our theme. you can
                                check more at
                                <a target="_blank" href="https://jqueryui.com/slider/" class="text-underline">
                                    jQueryUI documentation</a>

                            </p>
                        </div>
                        <div class="card-body">
                            <div class="m-b-10">
                                <label  > Slider</label>
                                <div class="input-slider"></div>


                            </div>
                            <div class="m-b-10">
                                <label  >Simple Range Slider</label>
                                <div class="input-rangeslider"></div>
                            </div>
                        </div>
                    </div>
                    <!--widget card ends-->
                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                               Avatar File Input Placeholder
                            </h5>
                            <p class="m-b-0 text-muted">
                               we can use avatar as image picker in forms.  Click on images to change.
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="m-b-10">

                                <label class="avatar-input">
                                    <span class="avatar avatar-xxl">
                                        <img src="<?= base_url() ?>assets/img/users/user-11.jpg" alt="..."
                                             class="avatar-img rounded-circle">
                                         <span class="avatar-input-icon rounded-circle">
                                        <i class="mdi mdi-upload mdi-24px"></i>
                                    </span>
                                    </span>
                                    <input type="file" class="avatar-file-picker" >

                                </label>
                                <label class="avatar-input">
                                    <span class="avatar avatar-xl">
                                        <img src="<?= base_url() ?>assets/img/users/user-6.jpg" alt="..."
                                             class="avatar-img rounded-circle">
                                         <span class="avatar-input-icon rounded-circle">
                                        <i class="mdi mdi-upload mdi-24px"></i>
                                    </span>
                                    </span>
                                    <input type="file" class="avatar-file-picker" >

                                </label>
                                <label class="avatar-input">
                                    <span class="avatar avatar-lg">
                                        <img src="<?= base_url() ?>assets/img/users/user-9.jpg" alt="..."
                                             class="avatar-img rounded-circle">
                                         <span class="avatar-input-icon rounded-circle">
                                        <i class="mdi mdi-upload mdi-24px"></i>
                                    </span>
                                    </span>
                                    <input type="file" class="avatar-file-picker" >

                                </label>



                            </div>

                        </div>
                    </div>
                    <!--widget card ends-->


                </div>
                <div class="col-lg-6">
                    <!--widget card ends-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                <i class="mdi mdi-calendar"></i> Date and Time Pickers
                            </h5>

                        </div>
                        <div class="card-body">
                            <div class=" form-group">
                                <p class=" text-muted">
                                    Date picker is powered by boostrap date picker, this is customized
                                    in way that it suites our theme and design, Check scss files for more
                                    information


                                    at their <a target="_blank"
                                                href="https://github.com/uxsolutions/bootstrap-datepicker"
                                                class="text-underline">
                                        official documentation</a>
                                </p>

                                <label  >Select Date</label>
                                <input type="text" class="js-datepicker form-control" placeholder="Select a Date">
                            </div>

                            <div class=" form-group">
                                <p class=" text-muted">
                                    Date range can be set by the daterangepicker plugin, this is use full when taking
                                    two dates
                                    at a time. it uses
                                    <a target="_blank" href="http://www.daterangepicker.com/" class="text-underline">
                                        Daterangepicker Plugin</a>
                                </p>
                                <label  >Select Date Range</label>
                              <div class="m-b-10">
                                  <input type="text" class="input-daterange form-control">
                              </div>

                                <p>you can also use this as datetimepicker with single date init and time</p>
                                <input type="text" class="form-control input-daterange-timepicker">
                            </div>


                            <div class=" form-group">
                                <p class=" text-muted">
                                    Easily select a time for a text input using your mouse or keyboards arrow keys.
                                    it powered by
                                    <a target="_blank" href="http://jdewit.github.io/bootstrap-timepicker/"
                                       class="text-underline"> Bootstrap Timepicker
                                    </a>
                                </p>
                                <div class="font-secondary">
                                    Timepicker
                                </div>
                                <input class="form-control timepicker" type="text">
                            </div>

                        </div>
                    </div>
                    <!--widget card begin-->
                    <div class="card  m-b-30 ">
                        <div class="card-header">
                            Cool Date Picker Plugin
                            <p class="m-0 text-muted">
                                DateDropper The smallest and powerful jQuery UI datepicker. you check it out more <a
                                        href="https://felicegattuso.com/projects/datedropper/" class="text-underline"
                                        target="_blank">here</a>
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="p-b-80">
                                <div class="font-secondary">

                                </div>
                                <div class=" form-group">
                                    <label  >Select Date</label>
                                    <input class="form-control datedropper" type="text">
                                </div>
                                <div class=" form-group">
                                    <label  >Expandable Option</label>
                                    <input class="form-control datedropper" data-large-mode="true" type="text">
                                </div>
                                <div class=" form-group">
                                    <label  >Different theme</label>
                                    <input class="form-control datedropper" data-theme="leaf" type="text">
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--widget card begin-->

                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                Dropzone
                            </h5>
                            <p class="m-b-0 text-muted">
                                Dropzone is widely used for file uploads you can read more at <a
                                        href="https://www.dropzonejs.com/" target="_blank" class="text-underline">their
                                    site.</a>
                            </p>
                        </div>
                        <div class="card-body">


                            <form class="dropzone" action="/">
                                <div class="dz-message">
                                    <h1 class="display-4">
                                        <i class=" mdi mdi-progress-upload"></i>
                                    </h1>
                                    Drop files here or click to upload.<BR>
                                    <SPAN class="note needsclick">(This is just a demo dropzone. Selected
        files are <STRONG>not</STRONG> actually uploaded.)</SPAN>
                                    <div class="p-t-5">
                                        <a href="#" class="btn btn-lg btn-primary">Upload File</a>

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