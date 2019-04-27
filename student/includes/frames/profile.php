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
                        <small>
                            <span class="badge float-right mt-1">
                                <button class="btn btn-outline-info btn-sm default-theme-blue edit" type="button" style="box-shadow:none">Edit <i class="fas fa-pencil-alt"></i></button>
                            </span>
                        </small>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">

                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label>Firstname</label>
                                        <input class="form-control input" type="text" placeholder="firstname" name="fname" disabled>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label>Lastname</label>
                                        <input class="form-control input" type="text" placeholder="lastname" name="lname" disabled>
                                    </div>
                                </div>

                                <div class="row test-pad">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label>Username</label>
                                        <input class="form-control input" type="text" placeholder="username" name="uname" disabled>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label>E-mail</label>
                                        <input class="form-control input" type="email" placeholder="email address" name="email" disabled>
                                    </div>
                                </div>

                                <div class="row test-pad">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label>Phone</label>
                                        <input class="form-control input" type="tel" placeholder="phone" name="pnumber" disabled>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label>Field of study</label>
                                        <select name="stud_field"  class="form-control input" disabled>
                                            <option value="">Field of Study</option>
                                            <option value="">computer science</option>
                                            <option value="">use of english</option>
                                            <option value="">current affairs</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6 apply offset-md-3">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
<script>
    var input_status = false;
    // When edit button is clicked for profile
    $('.edit').click(function() {
        if (!input_status) {
            var btnTxt = 'Apply Changes' //button text
            var btnBlk = $('<button></button>'); // button element
            // add class to 'i' tag for icon
            var btnIco = $('<i></i>').addClass('fas fa-check')
            // make the button a submit type
            btnBlk.attr('type', 'submit')
            // set name of the button
            btnBlk.attr('name', 'submit_updates')
            // add classes to the button element
            btnBlk.addClass('btn btn-outline-info btn-md default-theme-blue animated fadeIn ')
            // add text then space then the icon to the button element
            btnBlk.append(btnTxt, '&nbsp;', btnIco);

            $('.input').removeAttr('disabled');
            $('.edit').removeClass('default-theme-blue');
            $('.edit').addClass('default-theme-yellow');
            $('.apply').append(btnBlk); // add button to the div with the class 'apply'
            $('.edit').html('Cancel <i class="fas fa-close"></i>');
            input_status = true;
        } else {
            $('.input').attr('disabled', 'disabled');
            $('.edit').removeClass('default-theme-yellow');
            $('.edit').addClass('default-theme-blue');
            $('.apply').empty();
            $('.edit').html('Edit <i class="fas fa-pencil-alt"></i>');
            input_status = false;
        }
    });
</script> 