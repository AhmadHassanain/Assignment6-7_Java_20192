<?php include_once('../controller/controller.php');?>
<table class="table align-items-center table-flush">
                            <thead>
                                <tr>
                                    <th>Course ID </th>
                                    <th>Course Name</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php  

                          $table =controller::get_course_currnt_semester();
                          echo $table->render();
                    ?>
                     </tbody>
                     </table>