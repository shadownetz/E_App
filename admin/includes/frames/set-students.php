<div class="animated fadeInUp section__content section__content--p30 ">    
<div class="container-fluid">
                <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">List of all students</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>full name</th>
                                                <th>grade</th>
                                                <th class="text-right">details</th>
                                                <th class="text-right">status</th>
                                                <th class="text-right">control</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i=0; $i < 4; $i++){
                                                    echo('<tr>
                                                    <td>0</td>
                                                    <td>fname lname</td>
                                                    <td>A (Excellent)</td>
                                                    <td class="text-right">
                                                    <a class="btn btn-outline-secondary" href="view-student.php" target="_blank">view</a>
                                                    </td>
                                                    <td class="text-right">inactive</td>
                                                    <td class="text-right">
                                                    <!-- for deactivate use
                                                    <a class="btn btn-outline-danger" href="#">deactivate</a>
                                                    -->
                                                    <a class="btn btn-outline-success" href="#">activate</a>
                                                    </td>
                                                </tr>');
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
</div>
</div>