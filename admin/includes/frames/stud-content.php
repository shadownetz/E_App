<!-- MAIN CONTENT-->
<div class="main-content col-md-12 view-stud">
<div class="animated fadeInUp section__content section__content--p30 profile">
    <div class="container-fluid">
        <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg" alt="Card image cap">
                            <h5 class="text-sm-center mt-2 mb-1">Username</h5>
                            <div class="location text-sm-center">
                                <i class="fa fa-user"></i> user</div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <strong class="card-title mb-3">Profile Information</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">

                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label>Firstname</label>
                                        <input class="form-control input" type="text" placeholder="firstname" value="Student First Name" disabled>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label>Lastname</label>
                                        <input class="form-control input" type="text" placeholder="lastname" value="Student Last Name" disabled>
                                    </div>
                                </div>

                                <div class="row test-pad">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label>Username</label>
                                        <input class="form-control input" type="text" placeholder="username" value="Student Username" disabled>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label>E-mail</label>
                                        <input class="form-control input" type="email" placeholder="email address" value="Student E-mail" disabled>
                                    </div>
                                </div>

                                <div class="row test-pad">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label>Phone</label>
                                        <input class="form-control input" type="tel" placeholder="phone" value="Student Phone" disabled>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label>Field of study</label>
                                        <div style="font-weight:bold">
                                            <p>Students Field of study goes here</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
</div>
<!-- END MAIN CONTENT--> 