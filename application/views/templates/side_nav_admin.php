<div class="admin-sidebar-wrapper js-scrollbar">
    <ul class="menu">
        <li class="menu-item">
            <a href="<?= base_url() ?>board" class=" menu-link">
                <span class="menu-label">
                    <span class="menu-name">Board</span>
                </span>
                <span class="menu-icon">
                    <i class="mdi mdi-shape-outline"></i>
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
                    <i class="mdi mdi-account-multiple"></i>
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
                            <i class="mdi mdi-account"></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/members/document" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Document Approval</span>
                        </span>
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document"></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/members/registration" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Account Registration</span>
                        </span>
                        <span class="menu-icon">
                            <i class="mdi mdi-account-multiple-plus"></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/members/genealogy" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Genealogy</span>
                        </span>
                        <span class="menu-icon">
                            <i class="mdi mdi-human-male-male"></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/members/password" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Update Passsword</span>
                        </span>
                        <span class="menu-icon">
                            <i class="mdi mdi-lock"></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/members/wallet" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Update Wallet</span>
                        </span>
                        <span class="menu-icon">
                            <i class="mdi mdi-cash-usd"></i>
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
                    <i class="mdi mdi-cart"></i>
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
                            P
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/orders/approved" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Approved</span>
                        </span>
                        <span class="menu-icon">
                            A
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/orders/completed" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Completed</span>
                        </span>
                        <span class="menu-icon">
                            C
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/orders/rejected" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Rejected</span>
                        </span>
                        <span class="menu-icon">
                            R
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
                    <i class="mdi mdi-refresh"></i>
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
                            P
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/withdrawal/approved" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Approved</span>
                        </span>
                        <span class="menu-icon">
                            A
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/withdrawal/rejected" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Rejected</span>
                        </span>
                        <span class="menu-icon">
                            R
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
                    <i class="mdi mdi-file-document"></i>
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
                            M
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/reports/directSales" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Direct Referrer Sales</span>
                        </span>
                        <span class="menu-icon">
                            D
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/reports/commission" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Commission</span>
                        </span>
                        <span class="menu-icon">
                            C
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/reports/wallet" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Wallet</span>
                        </span>
                        <span class="menu-icon">
                            W
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/reports/ranking" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Ranking</span>
                        </span>
                        <span class="menu-icon">
                            R
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/reports/monthlyWr" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Monthly Report Wr</span>
                        </span>
                        <span class="menu-icon">
                            M
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/reports/monthlySales" class="menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Monthly Report Sales</span>
                        </span>
                        <span class="menu-icon">
                            M
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
        <li class="menu-item">
            <a href="#" class="open-dropdown menu-link">
                <span class="menu-label">
                    <span class="menu-name">Website
                        <span class="menu-arrow"></span>
                    </span>
                    <span class="menu-info"></span>
                </span>
                <span class="menu-icon">
                    <i class="mdi mdi-google-chrome"></i>
                </span>
            </a>
            <!--submenu-->
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/website/banners" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Banners</span>
                        </span>
                        <span class="menu-icon">
                            <i class="mdi mdi-file-image"></i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>board/website/enquiry" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Enquiry</span>
                        </span>
                        <span class="menu-icon">
                            <i class="mdi mdi-comment-question-outline"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>