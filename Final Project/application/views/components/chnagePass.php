<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <h2>Chnage Password</h2>
    <div class="row">
        <div class="conatiner">
            <div class="col-md-12">
                <form name="editPassForm" action="<?php echo BASEURL; ?>/profile/updateAccountPass" method="POST" onsubmit="return validatePassForm()">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Old Password</label>
                        <input name="OPass" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Old Password" />
                        <small id="OPassError" class="error"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter New Password</label>
                        <input name="NPass" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New Password" />
                        <small id="NPassError" class="error"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input name="CPass" type="text" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" />
                        <small id="CPassError" class="error"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
