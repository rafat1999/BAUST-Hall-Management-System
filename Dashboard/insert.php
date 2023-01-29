<!DOCTYPE html>
<?php 
include_once 'format.php' ?>

<html lang="en" dir="ltr">
 
  <body>
     <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Added New Notice</h3>
                        <i class='bx bx-filter' ></i>
                    </div>
    <div class="">
      <form class="" action="insert.php" method="post" enctype="multipart/form-data">
        <label for="">Choose Your PDF File</label><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <input id="upload" type="submit" name="submit" value="Upload">
        <?php
        include 'db_conn.php';

        if (isset($_POST['submit'])) {
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);

          $sql="INSERT INTO pdf_file(pdf) values('$pdf')";
          $query=mysqli_query($conn,$sql);



        }



         ?>

      </form>

    </div>

  </body>
</html>