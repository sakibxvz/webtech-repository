<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?php echo BASEURL; ?>/profile/">Delivery Website</a>
    <?php if($this->getSession('userId')): ?>
    <ul class="navbar-nav px-1 mx-2 ml-auto">
        <li class="nav-item">
            <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo BASEURL; ?>/profile/orderForm'">Add Order</button>
        </li>
    </ul>
    <ul class="navbar-nav px-3 mx-2">
        <li class="nav-item text-nowrap">
            <button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo BASEURL; ?>/profile/logout'">Logout</button>
        </li>
    </ul>
    <?php else: ?>
    <ul class="navbar-nav px-1 mx-2 ml-auto">
        <li class="nav-item">
            <button type="button" class="btn btn-success" onclick="window.location.href='<?php echo BASEURL; ?>/accountController'">Register</button>
        </li>
    </ul>
    <ul class="navbar-nav px-5 mx-2">
        <li class="nav-item">
            <button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo BASEURL; ?>/accountController/loginForm'">Login</button>
        </li>
    </ul>
    <?php endif; ?>
    
</nav>
