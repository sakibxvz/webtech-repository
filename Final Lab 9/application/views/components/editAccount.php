<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <h2>Edit Profile</h2>
        <div class="row">
            <div class="conatiner">
                <div class="col-md-12">
                    <form  name="editForm" action="<?php echo BASEURL; ?>/profile/updateAccount" method="POST" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Name" value="<?php echo $data->fullName ?>">
                            <small class="error"  id="nameError"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?php echo $data->email ?>">
                            <small class="error" id="emailError"></small>
                        </div>
                        <div>
                            <input type="hidden" name="hiddenId" value="<?php echo $data->id; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
      </div>