

<?php
include_once('../controller/controller.php');
?>


  <div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">
          <thead>
            <th>courseID</th>
            <th>courseGrade</th>
            
          </thead>
          <tbody>
            <?php 
             $table = controller::get_grade();
            echo $table->render();
            ?>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>