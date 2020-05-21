<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Empl-1</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--jquery cdn-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!--popper-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--bootstrap javascript-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
	.btn-wardname {
		background-color: white;
		color: black;
		border: 2px solid #e7e7e7;
	}
</style>
<body>

	<div id="container" class="p-3">

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
		<div id="body" class="p-3 border border-success rounded">

			<div class="row">
					<div class="col-lg-3 text-center">
						<button onclick="goBack()" name="back1" class="btn btn-warning backBtn text-white">Back</button>
					</div>
				</div>
                
			<form action="" method="post" id="empl_form">

                <h1 class="text-center">Employee Details</h1>

                <div class="form-group">
			        <select name="employee" id="employee" class="form-control selectpicker input-lg">
				        <option value="<?php echo $_POST['empl_id'];?>"><?php echo $_POST['empl_id'];?></option>
		            </select>
		        </div>

		        <div class="form-group">
		        	<input type="hidden" name="dept" id="dept" value="">
		        </div>

				<div class="row form-group">
					<div class="col-lg-3 text-center">Employee ID : </div>
					<div class="col-lg-6">
						<input type="text" name="empl_id" id="empl_id" class="form-control" value="<?php echo $_POST['empl_id'];?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-lg-3 text-center">Employee Name : </div>
					<div class="col-lg-6">
						<input type="text" name="empl_name" id="empl_name" class="form-control" value="">
					</div>
				</div>
                
                <div class="row form-group">
						<input type="hidden" name="company" id="company" value="">
				</div>
                
                <div class="row form-group">
                	<div class="col-lg-3 text-center">Department : </div>
                	<div class="col-lg-6">
                		<input type="radio" name="department" id="hr" value="HR">HR
                		<input type="radio" name="department" id="accounts" value="Accounts">Accounts
                		<input type="radio" name="department" id="it" value="IT">IT
                	</div>
                </div>

                <div class="row form-group">
                	<div class="col-lg-3 text-center">Ward Name : </div>
                	<div class="col-lg-6">
                	<select name="ward_name" id="ward_name" class="form-control input-lg">
                		<option value="">Ward Name</option>
                	</select>
                	</div>
                </div>


				<div class="row form-group">
					<div class="col-lg-3 text-center">Class : </div>
					<div class="col-lg-6">
						<input type="text" name="class" class="form-control">
						<span id="class_error" class="text-danger"></span>
					</div>
				</div>
                
                <div class="row form-group">
					<div class="col-lg-3 text-center">Score : </div>
					<div class="col-lg-6">
						<input type="text" name="score" class="form-control">
						<span id="score_error" class="text-danger"></span>
					</div>
				</div>

                <div class="row form-group">
					<div class="col-lg-3 text-center">Remarks : </div>
					<div class="col-lg-6">
						<textarea name="remarks" rows="5" class="form-control"></textarea>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 text-center">
						<input type="hidden" name="user_id" id="user_id" />
                        <input type="hidden" name="data_action" id="data_action" value="Insert" />
						<input type="submit" name="action" id="action" value="Submit" class="btn btn-success">
					</div>
				</div>

			</form>

		</div>
	</div>
    
    </div>
	</div>

	<script type="text/javascript" language="javascript">

		function goBack() {
			window.history.back();
        }

        

		$(document).ready(function(){

		$('#employee').hide();

//		$('#employee').val().trigger('change');

		//$('#employee').change(function() {
			function fetch_ward_name()
			{
			var empl_id = $('#employee').val();
			if (empl_id != '') {
				$.ajax({
					url : "<?php echo base_url() ?>ward_sclshp_control/fetch_ward_data",
					method : "POST",
					data : {empl_id:empl_id},
					success:function(data)
					{
					//	$('#empl_name').html(data.empl_name);
						$('#ward_name').html(data);
					}
				})
			}
		}
		function fetch_empl_name()
		{
			var empl_id = $('#employee').val();
			if (empl_id != '') {
				$.ajax({
					url : "<?php echo base_url() ?>ward_sclshp_control/fetch_empl_name",
					method : "POST",
					data : {empl_id:empl_id},
					success:function(data)
					{   
					//	alert('ok');
					//	$('#empl_name').html(data.empl_name);
						$('#empl_name').val(data);
					}
				})
			}
		}
				function fetch_company()
		{
			var empl_id = $('#employee').val();
			if (empl_id != '') {
				$.ajax({
					url : "<?php echo base_url() ?>ward_sclshp_control/fetch_company",
					method : "POST",
					data : {empl_id:empl_id},
					success:function(data)
					{   
						alert('ok');
					//	$('#empl_name').html(data.empl_name);
						$('#company').val(data);
					}
				})
			}
		}

		function fetch_department()
		{
			var empl_id = $('#employee').val();
			if (empl_id != '') {
				$.ajax({
					url : "<?php echo base_url() ?>ward_sclshp_control/fetch_department",
					method : "POST",
					data : {empl_id:empl_id},
					success:function(data)
					{
					//	alert('Data fetched successfully!  Please fill the details.');
					    $('#dept').val(data);
						if ($('#dept').val() == $('#hr').val()) {
							$('#hr').prop("checked",true);
						}
					    if ($('#dept').val() == $('#accounts').val()) {
							$('#accounts').prop("checked",true);
						}
						if ($('#dept').val() == $('#it').val()) {
							$('#it').prop("checked",true);
						}
							
					}
				})
			}
		}
        fetch_empl_name();
        fetch_company();
		fetch_ward_name();
		fetch_department();
		//});

		$(document).on('submit', '#empl_form', function(event){
        event.preventDefault();
        $.ajax({
            url:"<?php $this->load->helper('url'); echo base_url() . 'ward_sclshp_control/action' ?>",
            method:"POST",
            data:$(this).serialize(),
            dataType:"json",
            success:function(data)
            {
                if(data.success)
                {
                    $('#empl_form')[0].reset();
                    var empl_id = $('#empl_id').val();
                    location.href = "http://localhost/Ward_scholarship_award/ward_sclshp_control/prev_data/"+empl_id;
//                    fetch_data();
/*                    if($('#data_action').val() == "Insert")
                    {
                        $('#success_message').html('<div class="alert alert-success">Data Inserted</div>');
                    }
*/              }

                if(data.error)
                {
                    $('#class_error').html(data.class_error);
                    $('#score_error').html(data.score_error);
                }

            }
        })

        });

		});
		

	</script>

</body>
</html>