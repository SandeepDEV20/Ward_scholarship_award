<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Start_scr</title>

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

	<div class="container box">
		<br />
		<br />
		<h3 align="center">Employee Selection</h3>
		<br />
<?php
if (isset($_POST['start'])) {
	# code...
	$empl_id = $_POST['employee'];
}
  ?>
		<form action="<?php echo base_url('Ward_sclshp_control/guidelines')?>" method="post">

		<div class="form-group">
			<select name="employee" id="employee" class="form-control selectpicker input-lg">
				<option value="">Select Employee</option>
				<?php
				foreach ($employee as $row) :
					# code...?>
					<option value="<?php echo $row->empl_id;?>"><?php echo $row->empl_name;?></option>
				<!-- 	echo '<option value ="'.$row->empl_id.'">'.$row->empl_name.'</option>';
			    --> <?php endforeach;
			    ?>
			</select>

        
		</div>

		<div class="form-group">
			<select name="ward_name" id="ward_name" class="form-control input-lg" disabled="">
                		<option value="">Ward Name</option>
            </select>
		</div>


	     <div class="row form-group col-lg-12">
			  <input type="submit" name="start" value="start" id="start" class="btn btn-info">
	    </div>
        </form>

    </div>
    </div>

</div>
</div>

<script type="text/javascript" language="javascript">
//	$('#employee').hide();
  $('#ward_name').hide();

/*$(document).ready(function(){
	$('#employee').on('change',function() {
			var empl_id = $('#employee').val();
*/			//alert(empl_id);
/*			if (empl_id == '') {
				$('#ward_name').prop('disabled',true);
			}
			else {
				$('#ward_name').prop('disabled',false);
				$.ajax({
					url:"<?php //echo base_url() ?>ward_sclshp_control/get_ward",
					type:"POST",
					data: {'empl_id' : empl_id},
					success:function(data){
					//	alert('ok');
					$('#ward_name').html(data);
					},
					error: function(){
						alert('Error occur...!!');
					}
				})
			}
		});
*///});
$(document).ready(function(){
	$('#employee').on('change',function(){
		var empl_id = $('#employee').val();
		if(empl_id != '') {
			
			$('#empl_name').val() = empl_id;
		}
	})
})
</script>
</body>
</html>
