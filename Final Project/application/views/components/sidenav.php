<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo BASEURL; ?>/profile/">
                    <i class="fa fa-home text-black" aria-hidden="true"></i>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASEURL; ?>/profile/orders">
                    <i class="fa fa-sticky-note" aria-hidden="true"></i>
                    Orders
                </a>
            </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Others</span>
                <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASEURL; ?>/profile/account/<?php echo print_r($_SESSION['userId'], TRUE); ?>">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    Account Settings
                </a>
            </li>
        </ul>
    </div>
</nav>