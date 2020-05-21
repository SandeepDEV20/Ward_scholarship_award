<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hr-2</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!--popper-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--bootstrap javascript-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="container-fluid p-3">
<div class="row">

        <div class="col-lg-3 col-xs-12">
        <div id="accordion" class="panel-group indo-menus">

            <div class="card bg-success">
                    <h7 class="card-body">
                        <a class="text-white" href="#">Time Management<i class="fa fa-plus-square"></i></a>
                    </h7>
            </div>

            <div class="card bg-success">
                    <h7 class="card-body">
                        <a class="text-white" href="#">Any Query? Create Ticket <i class="fa fa-plus-square"></i></a>
                    </h7>   
            </div>
            
            <div class="card bg-success">
                    <h7 class="card-body">
                        <a class="text-white" href="#">Employee Management<i class="fa fa-plus-square"></i></a>
                    </h7>
            </div>
            
            <div class="card bg-success">
                    <h7 class="card-body">
                        <a class="text-white" href="#">Attendance Management<i class="fa fa-plus-square"></i></a>
                    </h7>
            </div>
            
            <div class="card bg-success">
                    <h7 class="card-body">
                        <a class="text-white" href="#">Performance Management<i class="fa fa-plus-square"></i></a>
                    </h7>
            </div>
            
            <div class="card bg-success">
                    <h7 class="card-body">
                        <a class="text-white" href="#">Business Trip Application<i class="fa fa-plus-square"></i></a>
                    </h7>
            </div>
            
            <div class="card bg-success">
                    <h7 class="card-body">
                        <a class="text-white" href="#">Expense Management<i class="fa fa-plus-square"></i></a>
                    </h7>
            </div>
            
            <div class="card bg-success">
                    <h7 class="card-body">
                        <a class="text-danger" href="http://localhost/ci/Ward_sclshp_control/hr_start">Ward Scholarship Award<i class="fa fa-plus-square"></i></a>
                    </h7>
            </div>
            
            <div class="card bg-success">
                    <h7 class="card-body">
                        <a class="text-white" href="#">AssetsManagement<i class="fa fa-plus-square"></i></a>
                    </h7>
            </div>
            
            <div class="card bg-success">
                    <h7 class="card-body">
                        <a class="text-white" href="#" aria-expanded="true">Salary Management<i class="fa fa-plus-square"></i></a>
                    </h7>
            </div>
            
            <div class="card bg-success">
                    <h7 class="card-body">
                        <a class="text-white" href="#">Staff Management<i class="fa fa-plus-square"></i></a>
                    </h7>
            </div>

        </div>
    </div>

    <div class="col-lg-9 col-xs-12">

    <div class="row pt-2">
        <div class="col-lg-2 text-center">
            <button onclick="goBack()" name="back1" class="btn btn-warning backBtn text-white">Back</button>
        </div>
    </div>

    <div class="container">
        <br />
        <h3 align="center">Application For Ward Scholarship</h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
<!--                         <h3 class="panel-title">Applications For Ward Scholarship</h3>
 -->                    </div>
                </div>
            </div>
            <div class="panel-body">
                <span id="success_message"></span>
    

<!--     <div class="table-responsive mt-3">
 -->
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    
                <th>Fields</th>
                <th>Values</th>

                </thead>
                
                    <tr>
                        <td>Employee Id</td>
                        <td><?php echo $emplentries->empl_id;?></td>
                    </tr>

                    <tr>
                        <td>Employee Name</td>
                        <td><?php echo $emplentries->empl_name;?></td>
                    </tr>

                    <tr>
                        <td>Department</td>
                        <td><?php echo $emplentries->department;?></td>
                    </tr>

                    <tr>
                        <td>Ward Name</td>
                        <td><?php echo $emplentries->ward_name;?></td>
                    </tr>

                    <tr>
                        <td>Class</td>
                        <td><?php echo $emplentries->class;?></td>
                    </tr>

                    <tr>
                        <td>Score</td>
                        <td><?php echo $emplentries->score;?></td>
                    </tr>

                    <tr>
                        <td>Remarks</td>
                        <td><?php echo $emplentries->remarks;?></td>
                    </tr>

           </table>

           </div>
        </div>
    </div>

</div>

</div>
</div>

<script type="text/javascript" language="javascript">

    function goBack()
    {
        window.history.back();
    }
    
</script>
</body>
</html>