<?php include "components/header.php"; ?>
<?php include "components/messages.php"; ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <!-- Card Section Start  -->
    <?php include "components/messages.php" ?>
    <?php include "components/card.php" ?>
    <!-- Card Section End  -->
    <hr>
    <!-- Small table Start  -->
    <div class="conatiner">
        <div class="row">
            <!-- Ongoing Ticket Start  -->
            <?php include "components/ticket.php" ?>
            <!-- Ongoing Ticket End  -->
            <!-- Timeline Start  -->
            <?php include "components/timeline.php" ?>
            <!-- Timeline End  -->
        </div>
    </div>
    <!-- Small table End  -->

</main>



<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

<?php include "components/footer.php"; ?>