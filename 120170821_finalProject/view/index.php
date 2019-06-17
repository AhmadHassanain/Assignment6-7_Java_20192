<?php
include_once('../controller/controller.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Student Portal</title>
    </head>
    <body class="bg-light">
        <!-- Image and text -->
        <nav class="navbar navbar-light bg-dark">
            <a class="navbar-brand" href="#">
                <img src="male.png" width="80" height="80"
                class="d-inline-block align-top" alt="pictur" style="border-radius: 100px">
                <h3 class="d-inline-block align-top "style="color:white;">Student Name <br>
                <span style="font-size: 17px;">student id</span></h3>
            </a>
            
        </nav>
        
        <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-timeTable-list" data-toggle="list" href="#list-timeTable" role="tab" aria-controls="timeTable">timeTable</a>
                    <a class="list-group-item list-group-item-action" id="list-Registration-list" data-toggle="list" href="#list-Registration" role="tab" aria-controls="Registration">Registration</a>
                    <a class="list-group-item list-group-item-action" id="list-Grades-list" data-toggle="list" href="#list-Grades" role="tab" aria-controls="Grades">Grades</a>
                    <a class="list-group-item list-group-item-action" id="list-Logout-list" data-toggle="list" href="#list-Logout" role="tab" aria-controls="Logout">profile</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <!--time table-->
                    <div class="tab-pane fade show active" id="list-timeTable" role="tabpanel" aria-labelledby="list-timeTable-list"><?php include_once('timetable.php');?></div>
                    <!--courses-->
                    <div class="tab-pane fade" id="list-Registration" role="tabpanel" aria-labelledby="list-Registration-list">
                        <?php// include_once('add.php');?>
                    </div>
                    <!--grade-->
                    <div class="tab-pane fade" id="list-Grades" role="tabpanel" aria-labelledby="list-Grades-list"><?php include_once('grade.php');?></div>
                    <!--logout-->
                    <div class="tab-pane fade" id="list-Logout" role="tabpanel" aria-labelledby="list-Logout-list"><?php include_once('register.php');?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark "
        style="position: fixed; bottom:0px; padding: 10px;" data-toggle="modal" data-target="#exampleModal">
        Logout
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        are you sure you want to logout
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"><a href="/controller/logout.php" style="color:white;padding: 5px;">logout</a></button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>