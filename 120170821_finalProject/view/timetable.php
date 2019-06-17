

<?php
include_once('../controller/controller.php');
?>

<!DOCTYPE html>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">
          <thead>
            <th>Name</th>
            <th>Section</th>
            <th>instructor</th>
            <th>time</th>
            <th>Room</th>
          </thead>
          <tbody>
            <?php 
             $table = controller::get_course();
            echo $table->render();
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>