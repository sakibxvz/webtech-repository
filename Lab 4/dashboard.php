<?php require "header.php";?>
            <div class="container">
        <div class="row p-5">
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action">Edit Profile</a>
                    <a href="#" class="list-group-item list-group-item-action">Chnage Profile Picture</a>
                    <a href="#" class="list-group-item list-group-item-action">Chnage Password</a>
                    <a href="#" class="list-group-item list-group-item-action">Logout</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td>Thanos Doe</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>Thanos@infinity.com</td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td>male</td>
                                </tr>
                                <tr>
                                    <td>Date Of birth:</td>
                                    <td>19/09/1998</td>
                                </tr>
                            </tbody>
                        </table>

                        <button type="button" class="btn btn-secondary">Edit Profile</button>

                    </div>
                    <div class="col-md-4">
                        <figure class="figure">
                            <img src="images/Thanos.jpeg" alt="Thanos" class="img-thumbnail">
                            <figcaption class="figure-caption">A caption for the above image.</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require "footer.php";?>