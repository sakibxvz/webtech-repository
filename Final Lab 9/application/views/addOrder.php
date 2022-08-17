<?php include "components/header.php"; ?>
<?php include "components/messages.php"; ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add an order</h1>
    </div>
    <div class="conatiner">
        <div class="row">
            <!-- Order Add Form Start  -->
                <?php include "components/addOrderForm.php"; ?>
            <!-- Order Add Form End  -->
        </div>
    </div>
</main>
<?php include "components/footer.php"; ?>