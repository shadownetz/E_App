<div class="animated fadeInUp section__content section__content--p30 ">    
<div class="container-fluid">
<form action='<?php $_SERVER['PHP_SELF'] ?>' method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="overview-wrap">
                                    <h2 class="title-1">Set Test Questions</h2>
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
                                        <strong class="card-title">Questions
                                            <small>
                                                <span class="badge badge-success float-right mt-1"><i class="zmdi zmdi-book"></i></span>
                                            </small>
                                        </strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <textarea class="form-control test-txt-area no-resize" name="test_questions" rows="10"></textarea>
                                        </p>

                                        <div class="card-header test-pad">
                                        <strong class="card-title">Answers (Fill Option A with the correct answer)</strong>
                                    </div>
                                    <div class="card-body">
                                        <ul class="alpha-numb test-opt">
                                            <li>
                                                <input name="opt-1" type="text" class="form-control" placeholder="enter option">
                                            </li>
                                            <li>
                                                <input name="opt-2" type="text" class="form-control" placeholder="enter option">
                                            </li>
                                            <li>
                                                <input name="opt-3" type="text" class="form-control" placeholder="enter option">
                                            </li>
                                            <li>
                                                <input name="opt-4" type="text" class="form-control" placeholder="enter option">
                                            </li>
                                        </ul>
                                        <button class="btn btn-outline-info test-pad default-theme-blue" type="submit">Upload <i class="zmdi zmdi-upload"></i></button>
                                    </div>
                                    </div>
                                </div>
                    </div>
                </div>
</form>
</div>
</div>