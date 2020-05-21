<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hr-0</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--jquery cdn-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!--popper-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--bootstrap javascript-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	.box
	{
		width: 100%;
		max-width: 650px;
		margin:0 auto;
	}
</style>
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


	<div class="container box">
		<br />
		<br />
		<h3 align="center">Select Company</h3>
		<br />
<?php
if (isset($_POST['hr_submit'])) {
	# code...
	$company = $_POST['company'];
	$year = $_POST['year'];
	$month = $_POST['month'];
}
?>
		<form action="<?php echo base_url('Ward_sclshp_control/hr_screen');?>" method="post">

		<div class="form-group">
			<select name="company" id="company" class="form-control input-lg">
				<option value="">Select Company</option>
				<option value="All">All</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
			</select>

        
		</div>

		<div class="form-group">
			<select name="year" id="year" class="form-control input-lg">
                <option value="">Year</option>
                <option value="All">All</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
            </select>
		</div>

        <div class="form-group">
			<select name="month" id="month" class="form-control input-lg">
                <option value="">Month</option>
                <option value="All">All</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
		</div>

	     <div class="form-group text-center">
			  <input type="submit" name="hr_submit" value="Submit" id="hr_submit" class="btn btn-primary text-center">
	    </div>
        </form>

    </div>

</div>
</div>

</body>
</html>