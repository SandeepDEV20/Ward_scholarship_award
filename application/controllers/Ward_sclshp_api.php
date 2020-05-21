<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Ward_sclshp_api extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ward_sclshp_api_model');
		$this->load->library('form_validation');

	}

	function index()
	{
		$data = $this->ward_sclshp_api_model->fetch_all();
		echo json_encode($data->result_array());
	}

	function insert()
 {
  $this->form_validation->set_rules("empl_id", "Employee Id");
  $this->form_validation->set_rules("empl_name", "Employee Name");
  $this->form_validation->set_rules("company");
  $this->form_validation->set_rules("department", "Department", "required");
  $this->form_validation->set_rules("ward_name", "Ward Name", "required");
  $this->form_validation->set_rules("class", "Class", "required");
  $this->form_validation->set_rules("score", "Score", "required");
  $this->form_validation->set_rules("remarks", "Remarks");

  $array = array();
  if($this->form_validation->run())
  {
   $data = array(
    'empl_id' => trim($this->input->post('empl_id')),
    'empl_name'  => trim($this->input->post('empl_name')),
    'company' => trim($this->input->post('company')),
    'department'  => trim($this->input->post('department')),
    'ward_name'  => trim($this->input->post('ward_name')),
    'class'  => trim($this->input->post('class')),
    'score'  => trim($this->input->post('score')),
    'remarks'  => trim($this->input->post('remarks'))
   );
   $this->ward_sclshp_api_model->insert_api($data);
   $array = array(
    'success'  => true
   );
  }
  else
  {
   $array = array(
    'error'    => true,
    'class_error' => form_error('class'),
    'score_error' => form_error('score'),
   );
  }
  echo json_encode($array, true);
 }

 function fetch_single()
 {
  if($this->input->post('empl_id'))
  {
   $data = $this->ward_sclshp_api_model->fetch_single_user($this->input->post('empl_id'));
   foreach($data as $row)
   {
    $output['empl_id'] = $row["empl_id"];
    $output['empl_name'] = $row["empl_name"];
    $output['ward_name'] = $row['ward_name'];
   }
   echo json_encode($output);
  }
 }


 function update()
 {
  $this->form_validation->set_rules("first_name", "First Name", "required");
  $this->form_validation->set_rules("last_name", "Last Name", "required");
  $array = array();
  if($this->form_validation->run())
  {
   $data = array(
    'first_name' => trim($this->input->post('first_name')),
    'last_name'  => trim($this->input->post('last_name'))
   );
   $this->ward_sclshp_api_model->update_api($this->input->post('id'), $data);
   $array = array(
    'success'  => true
   );
  }
  else
  {
   $array = array(
    'error'    => true,
    'first_name_error' => form_error('first_name'),
    'last_name_error' => form_error('last_name')
   );
  }
  echo json_encode($array, true);
 }

}
	