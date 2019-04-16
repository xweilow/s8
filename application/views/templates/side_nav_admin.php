<div class="admin-sidebar-wrapper js-scrollbar">
    <ul class="menu">
        <li class="menu-item">
            <a href="<?= base_url() ?>board" class=" menu-link">
                <span class="menu-label">
                    <span class="menu-name">Board</span>
                </span>
                <span class="menu-icon">
                    <i class="icon-placeholder"><i class="icon-placeholder mdi mdi-shape-outline"></i></i>
                </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="open-dropdown menu-link">
                <span class="menu-label">
                    <span class="menu-name">Members
                        <span class="menu-arrow"></span>
                    </span>
                    <span class="menu-info"></span>
                </span>
                <span class="menu-icon">
                    <i class="icon-placeholder "><i class="icon-placeholder mdi mdi-account-multiple"></i></i>
                </span>
            </a>
            <!--submenu-->
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/members/listing" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Listing</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder"><i class="icon-placeholder mdi mdi-account"></i></i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/members/document" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Document Approval</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder"><i class="icon-placeholder mdi mdi-file-document"></i></i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/members/registration" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Account Registration</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder"><i class="icon-placeholder mdi mdi-account-multiple-plus"></i></i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/members/genealogy" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Genealogy</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder"><i class="icon-placeholder mdi mdi-human-male-male"></i></i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/members/password" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Update Passsword</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder"><i class="icon-placeholder mdi mdi-lock"></i></i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/members/wallet" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Update Wallet</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder"><i class="icon-placeholder mdi mdi-cash-usd"></i></i></i>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="#" class="open-dropdown menu-link">
                <span class="menu-label">
                    <span class="menu-name">Orders
                        <span class="menu-arrow"></span>
                    </span>
                    <span class="menu-info"></span>
                </span>
                <span class="menu-icon">
                    <i class="icon-placeholder "><i class="icon-placeholder mdi mdi-cart"></i></i>
                </span>
            </a>
            <!--submenu-->
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/orders/pending" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Pending</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder">P</i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/orders/approved" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Approved</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder">A</i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/orders/completed" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Completed</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder">C</i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/orders/rejected" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Rejected</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder">R</i></i>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="#" class="open-dropdown menu-link">
                <span class="menu-label">
                    <span class="menu-name">Withdrawal
                        <span class="menu-arrow"></span>
                    </span>
                    <span class="menu-info"></span>
                </span>
                <span class="menu-icon">
                    <i class="icon-placeholder "><i class="icon-placeholder mdi mdi-refresh"></i></i>
                </span>
            </a>
            <!--submenu-->
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/withdrawal/pending" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Pending</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder">P</i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/withdrawal/approved" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Approved</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder">A</i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/withdrawal/rejected" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Rejected</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder">R</i></i>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="#" class="open-dropdown menu-link">
                <span class="menu-label">
                    <span class="menu-name">Reports
                        <span class="menu-arrow"></span>
                    </span>
                    <span class="menu-info"></span>
                </span>
                <span class="menu-icon">
                    <i class="icon-placeholder "><i class="icon-placeholder mdi mdi-file-document"></i></i>
                </span>
            </a>
            <!--submenu-->
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/reports/memberSales" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Member & Sales</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder">M</i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/reports/directSales" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Direct Referrer Sales</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder">D</i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/reports/commission" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Commission</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder">C</i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/reports/wallet" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Wallet</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder">W</i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/reports/ranking" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Ranking</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder">R</i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/reports/monthlyWr" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Monthly Report Wr</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder">M</i></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/reports/monthlySales" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Monthly Report Sales</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder"><i class="icon-placeholder">M</i></i>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="<?= base_url() ?>board/news" class=" menu-link">
                <span class="menu-label">
                    <span class="menu-name">News Management</span>
                </span>
                <span class="menu-icon">
                    <i class="icon-placeholder"><i class="icon-placeholder mdi mdi-newspaper"></i></i>
                </span>
            </a>
        </li>
    </ul>
</div>