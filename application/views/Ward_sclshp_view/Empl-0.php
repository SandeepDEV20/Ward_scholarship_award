<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Empl-0</title>

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
                        <a class="text-danger" href="http://localhost/ci/Ward_sclshp_control/">Ward Scholarship Award<i class="fa fa-plus-square"></i></a>
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

    <div class="row">
        <div class="col-lg-1 text-center">
            <button onclick="goBack()" name="back1" class="btn btn-warning backBtn text-white">Back</button>
        </div>
    </div>
    

    <h1 class="text-center">Eligibility Criteria For Ward Scholarship Award</h1>


	<div class="table-responsive mt-3">

            <table border="1" class="table table-striped">
            	<thead class="thead-dark">
            		
                <th>S.No.</th>
                <th>Students Passing Class</th>
                <th>Percentage Qualifying Marks</th>
                <th>Amount of Scholarship</th>

            	</thead>

                <tr>
                    <td>1</td>
                    <td>Class 1 to Class 5</td>
                    <td>90% or A-grade</td>
                    <td>Rs. 5k per annum</td>

                </tr>

                <tr>
                    <td>2</td>
                    <td>Class 6 to Class 10</td>
                    <td>90% or A-grade</td>
                    <td>Rs. 7.5k per annum</td>

                </tr>

                <tr>
                    <td>3</td>
                    <td>Class 11 to Class 12</td>
                    <td>85% Aggregate</td>
                    <td>Rs. 10k per annum</td>

                </tr>

                <tr>
                    <td>4</td>
                    <td>Professional Courses</td>
                    <td>85% Aggregate (Per Year)</td>
                    <td>Rs. 15k per annum after qualifying the exam</td>

                </tr>

                <tr>
                    <td>5</td>
                    <td>Engineering, Medical, CA, ICWA, CS</td>
                    <td>Qualified in First Attempt with 60% Aggregate, with no Backlogs</td>
                    <td>Rs. 15k per annum after qualifying the exam</td>

                </tr>

            </table>

    </div>
    

    <form action="<?php echo base_url('Ward_sclshp_control/form')?>" method="post">
    <div class="col-lg-12 text-center">
        <input type="submit" name="form-submission" value="Go To Form Submission" class="btn btn-info text-white">
        <input type="hidden" name="empl_id" value="<?php echo $_POST['employee']; ?>">
    </div>
    </form>

    </div>

    </div>

    </div>

</body>

<script type="text/javascript" language="javascript">

        function goBack() {
            window.history.back();
        }
</script>

</html>