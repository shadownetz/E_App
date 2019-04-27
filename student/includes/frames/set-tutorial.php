<div class="animated fadeInUp section__content section__content--p30 ">
    <div class="container-fluid">
        <form role="form" action='<?php $_SERVER[' PHP_SELF'] ?>' method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-7 offset-md-5">
                    <div class="overview-wrap">
                        <h2 class="title-1">Tutorials</h2>
                    </div>
                </div>

                <div class="col-sm-12 col-md-10 col-lg-10 offset-md-1 test-pad " style="text-align:center">
                    <div class="card">
                        <div class="card-header" style="text-align:left">
                            <strong class="card-title">Choose any of the underlisted videos to start&nbsp;<i class="zmdi zmdi-videocam"></i>
                                <small>
                                    <span class="badge badge-success float-right mt-1"><i class="zmdi zmdi-circle"></i></span>
                                </small>
                            </strong>
                        </div>
                        <div class="card-body">

                            <div class="row vid-selc">
                                <div class="col-md-7" style="text-align:left">
                                    <p class="card-text">
                                        Course 1: Introduction to MicroProcessor
                                    </p>
                                </div>
                                <div class="col-md-4">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="btn btn-outline-primary btn-sm tutor-select">
                                                Watch <i class="fas fa-play"></i>
                                                <input type="button" class="form-control select-vid" name="course-1" value="">
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <span><i>Pending</i></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row vid-selc" style="margin-top:20px">
                                <div class="col-md-7" style="text-align:left">
                                    <p class="card-text">
                                        Course 2: Introduction to Enterpreneurship
                                    </p>
                                </div>
                                <div class="col-md-4">
                                <div class="row">
                                        <div class="col-md-6">
                                            <label class="btn btn-outline-primary btn-sm tutor-select">
                                                Watch <i class="fas fa-play"></i>
                                                <input type="button" class="form-control select-vid" name="course-2" value="">
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                        <span><i class="fa fa-check dne"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row vid-selc" style="margin-top:20px">
                                <div class="col-md-7" style="text-align:left">
                                    <p class="card-text">
                                        Course 3: Nigerian Economy
                                    </p>
                                </div>
                                <div class="col-md-4">
                                <div class="row">
                                        <div class="col-md-6">
                                            <label class="btn btn-outline-primary btn-sm tutor-select">
                                                Watch <i class="fas fa-play"></i>
                                                <input type="button" class="form-control select-vid" name="course-3" value="">
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <span><i>Pending</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row vid-selc" style="margin-top:20px">
                                <div class="col-md-7" style="text-align:left">
                                    <p class="card-text">
                                        Course 4: Java Programming
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="btn btn-outline-primary btn-sm tutor-select">
                                                Watch <i class="fas fa-play"></i>
                                                <input type="button" class="form-control select-vid" name="course-4" value="">
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                        <span><i class="fa fa-check dne"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    // Function to display name of selected video
    $(".select-vid").click(function() {
        $('.ex-content').load("includes/frames/tutorial-content.php");
    });
</script> 