<div class="animated fadeInUp section__content section__content--p30 ">
    <div class="container-fluid">
        <form role="form" action='<?php $_SERVER['PHP_SELF'] ?>' method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Upload Tutorials</h2>
                    </div>
                    <label class="test-pad">Select Field of Study</label>
                    <select class="btn btn-outline-default btn-lg btn-block" name="test_field_select">
                        <option disabled>Select Field of study</option>
                        <option value="">computer science</option>
                        <option value="">current affairs</option>
                        <option value="">use of english</option>
                    </select>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 test-pad">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Select files to upload <i class="zmdi zmdi-cloud-upload"></i>
                                <small>
                                    <span class="badge badge-success float-right mt-1"><i class="zmdi zmdi-book"></i></span>
                                </small>
                            </strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-4">
                                <label class="btn btn-outline-success btn-lg tutor-select">
                                    Select video to upload <i class="fas fa-video"></i>
                                    <input id='upload-vid' type="file" class="form-control" name="tutor-vid">
                                </label>
                            </div>
                            <div class="col-md-7 vid-content">
                                <p id="cnf-vid">No video selected yet</p>
                            </div>
                            </div>
                            <div class="row" style="margin-top:20px">
                            <div class="col-md-4">
                                <label class="btn btn-outline-secondary btn-lg tutor-select">
                                    Select Extra Notes <i class="fas fa-file"></i>
                                    <input id='upload-doc'  type="file" class="form-control" name="tutor-doc">
                                </label>
                            </div>
                            <div class="col-md-7 vid-content">
                                <p id="cnf-doc">No document selected yet</p>
                            </div>
                            </div>
                        <button class="btn btn-outline-info test-pad default-theme-blue" type="submit">Upload <i class="zmdi zmdi-upload"></i></button>
                    </div>
                </div>
        </form>
    </div>
</div> 
<script type="text/javascript">
 // Function to display name of selected video
 $("#upload-vid").change(function(e){
        let filename = e.target.files[0].name;
        $('#cnf-vid').html(filename)
    });
 // Function to display name of selected document
    $("#upload-doc").change(function(e){
        let filename = e.target.files[0].name;
        $('#cnf-doc').html(filename)
    });
</script>