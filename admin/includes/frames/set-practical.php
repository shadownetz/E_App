<div class="animated fadeInUp section__content section__content--p30 ">    
<div class="container-fluid">
<form action='<?php $_SERVER['PHP_SELF'] ?>' method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="overview-wrap">
                                    <h2 class="title-1">Set Practical Questions</h2>
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
                                            <textarea class="form-control test-txt-area no-resize" name="test_questions" rows="10" placeholder="enter questions"></textarea>
                                        </p>

                                    <!-- Loop X3 for practical -->
                                    <?php for($i=0; $i<3;$i++){
                                        echo('
                                        <div class="card-header test-pad">
                                        <strong class="card-title">Observation</strong>
                                    </div>

                                    <div class="card-body">
                                    <label class="test-pad-btm" style="font-weight:bold">Question on observations | fill option A with the correct answer</label>
                                    <textarea class="form-control test-txt-area test-pad-btm no-resize" name="obsrv-question" placeholder="enter observation question"></textarea>
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
                                    </div>
                                    ');
                                    } ?>
                                    <!-- End Loop -->

                                    <button class="btn btn-outline-info test-pad default-theme-blue" type="submit">Upload <i class="zmdi zmdi-upload"></i></button>
                                    </div>
                                </div>
                    </div>
                </div>
</form>
</div>
</div>