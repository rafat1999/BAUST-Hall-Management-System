<!DOCTYPE html>
<?php 
include_once'format.php'
 ?>
            <center>
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h1>View Employee Information</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <main>
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered" width="90%" border="solid" height="40px">
                            <thead>
                                <tr>
                                    <th>Employee Name</th>
                                    <th>Phone No</th>
                                    <th>Employee Type</th>
                                    <th>Designation</th>
                                    <th>Gender</th>
                                    <th>Block No</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $con = mysqli_connect("localhost","root","rafat","hall");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM emp_add WHERE CONCAT(name,cellNo,empType,designation,gender,blockNo) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                     ?>
                                    
                                         <tr>
                                                <td><?= $items['name']; ?></td>
                                                <td><?= $items['cellNo']; ?></td>
                                                <td><?= $items['empType']; ?></td>
                                                <td><?= $items['designation']; ?></td>
                                                <td><?= $items['gender']; ?></td>
                                                <td><?= $items['blockNo']; ?></td>
                                                
                                             </tr>
                                     <?php
                                            }
                                        }
                                        else
                                        {
                                       ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                    <?php
                                        }
                                    }
                                
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </main>
    </div>
</body>
</html>