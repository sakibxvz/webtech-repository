<?php $this->flash('accountCreated', 'alert alert-success') ?>
<div class="col-md-4 offset-md-4 mt-5">
      <h2 class="mt-5">User Login</h2>
      <hr>
        <form class="mt-3" action="<?php echo BASEURL; ?>/accountController/userLogin" method="POST">
        <div class="form-group">
        <input type="text" name="email" class="form-control" placeholder="Email..." value="<?php if(!empty($data['email'])): echo $data['email']; endif; ?>">
        <div class="error">
            <?php if(!empty($data['emailError'])): echo $data['emailError']; endif; ?>
        </div>
        </div>
        <!-- Close form-group -->
        <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password..." value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>">
        <div class="error">
            <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
        </div>
        </div>
        <!-- Close form-group -->
        <div class="form-group">
        <input type="submit" name="lginBtn" class="btn btn-primary" value="Login">
        </div>
        <!-- Close form-group -->
        </form>
</div>