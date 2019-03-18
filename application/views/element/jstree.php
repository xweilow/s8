<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class="">
                               jsTree
                        </h4>
                        <p class="opacity-75 ">
                            jsTree is jquery plugin, that provides interactive trees. jsTree is easily extendable, themable and configurable,<br> it supports HTML & JSON data sources and AJAX loading.
                          Simple to use Block-UI for ajax operations. <br>
                            <a href="https://www.jstree.com/" target="_blank" class="text-underline">Read more</a>
                        </p>


                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-6">
                    <!--card begins-->
                    <div class="card  m-b-30">
                        <div class="card-header">
                            <div class="card-title ">Basic example</div>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Simple initialization of jquery Tree</p>

                            <div id="jstree">
                                <!-- in this example the tree is populated from inline HTML -->
                                <ul>
                                    <li>Root node 1
                                        <ul>
                                            <li id="child_node_1">Child node 1</li>
                                            <li>Child node 2</li>
                                            <li>Child node 3</li>
                                        </ul>
                                    </li>
                                    <li>Root node 2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card  m-b-30">
                        <div class="card-header">
                            <div class="card-title ">Context Menu</div>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Use right click to open context menu on item</p>

                            <div id="jstree-03">

                                <!-- in this example the tree is populated from inline HTML -->
                                <ul>
                                    <li>Root node 1
                                        <ul>
                                            <li id="child_node_1">Child node 1</li>
                                            <li>Child node 2</li>
                                            <li>Child node 3</li>
                                        </ul>
                                    </li>
                                    <li>Root node 2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!--card begins-->
                    <div class="card  m-b-30">
                        <div class="card-header">
                            <div class="card-title ">With Checkbox</div>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">JSTree with checkbox example with DOM traversing</p>
                            <div id="jstree-02">
                                <!-- in this example the tree is populated from inline HTML -->
                                <ul>
                                    <li data-jstree='{"opened":true}'>Root node 1
                                        <ul>
                                            <li id="child_node_1">Child node 1</li>
                                            <li>Child node 2</li>
                                            <li>Child node 3</li>
                                        </ul>
                                    </li>
                                    <li>Root node 2</li>
                                    <li data-jstree='{"opened":true}'>Root node 1
                                        <ul>
                                            <li id="child_node_1">Child node 1</li>
                                            <li>Child node 2</li>
                                            <li >Root node 1
                                                <ul>
                                                    <li id="child_node_1">Child node 1</li>
                                                    <li>Child node 2</li>
                                                    <li>Child node 3</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--card begins-->
                    <div class="card  m-b-30">
                        <div class="card-header">
                            <div class="card-title ">Drag and Drop Example</div>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Draggable sortable item list you can manipulate</p>
                            <div id="jstree-04">
                                <!-- in this example the tree is populated from inline HTML -->
                                <ul>
                                    <li data-jstree='{"opened":true}'>Root node 1
                                        <ul>
                                            <li id="child_node_1">Child node 1</li>
                                            <li>Child node 2</li>
                                            <li>Child node 3</li>
                                        </ul>
                                    </li>
                                    <li>Root node 2</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>