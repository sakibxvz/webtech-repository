<?php include "components/header.php"; ?>
<?php include "components/messages.php"; ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Account</h1>
    </div>

   <div class="row">
  <div class="col-3  border-right">
            <div class="nav flex-column nav-pills py-1 px-0 mx-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-toggle="pill" data-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">View Profile</button>
                <button class="nav-link" id="v-pills-profile-tab" data-toggle="pill" data-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Edit Profile</button>
                <button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Chnage Password</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo BASEURL; ?>/profile/logout'">Logout</button>
             </div>
  </div>
  <div class="col-9">
     <?php include "components/viewProfile.php" ?>
     <?php include "components/editAccount.php" ?>
     <?php include "components/chnagePass.php" ?>
    </div>
  </div>
</div>

</main>
<script>
   function validateForm() {
    let name = document.forms["editForm"]["fullname"].value;
    let email = document.forms["editForm"]["fullname"].value;
    if (name == "" || !(/^[A-Za-z\s]+$/.test(name))  ) {
        document.getElementById("nameError").innerHTML = "Invalid Name";
        return false;
    }
    if (email == "" || (/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email))  ) {
        document.getElementById("emailError").innerHTML = "Invalid Email";
        return false;
    }
}
   function validatePassForm() {
    let oldPass = document.forms["editPassForm"]["OPass"].value;
    let newPass = document.forms["editPassForm"]["NPass"].value;
    let conNewPass = document.forms["editPassForm"]["CPass"].value;
    if (oldPass == "") {
        document.getElementById("OPassError").innerHTML = "Please eneter your old Password";
        return false;
    }
    if (newPass == "" || (/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(newPass))  ) {
        document.getElementById("emailError").innerHTML = "Invalid Password";
        return false;
    }
    if (newPass !== conNewPass) {
        document.getElementById("emailError").innerHTML = "Passwords don't match! Please reenter.";
        return false;
    }
}
</script>
<?php include "components/footer.php"; ?>