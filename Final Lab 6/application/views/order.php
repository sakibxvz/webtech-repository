<?php include "components/header.php"; ?>
<?php include "components/messages.php"; ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <!-- Card Section Start  -->
    <?php include "components/card.php" ?>
    <!-- Card Section End  -->
    <hr>
    <!-- Small table Start  -->
    <div class="conatiner">
        <div class="row">
            <!-- datatable start  -->
                <div class="col-md-12">
                    <?php include "components/datatable.php" ?>
                </div>
            <!-- datatable end  -->
        </div>
    </div>
    <!-- Small table End  -->

</main>
<?php include "components/footer.php"; ?>