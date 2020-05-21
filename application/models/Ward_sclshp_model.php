<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Ward_sclshp_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function fetch_employees()
 {
  $this->db->order_by('empl_name','ASC');
  $query = $this->db->get('empltable');
  return $query->result();
 }
 
 function fetch_ward_name($empl_id)
 {
 	$this->db->where('empl_id',$empl_id);
 	$this->db->order_by('ward_name','ASC');
 	$query = $this->db->get('wardtable');
 	$output = '<option value="">Ward Name</option>';
 	foreach ($query->result() as $row)
 	 {
 		# code...
 		$output .= '<option value="'.$row->ward_name.'">'.$row->ward_name.'</option>';
 	}
 	return $output;
 }

function fetch_empl_name($empl_id)
{
	$this->db->where('empl_id',$empl_id);
	$query = $this->db->get('empltable');
	$output = '<input value="">';
	foreach ($query->result() as $row)
	{	
	$output = $row->empl_name;
	}
	return $output;
}

function fetch_company($empl_id)
{
	$this->db->where('empl_id',$empl_id);
	$query = $this->db->get('empltable');
	$output = '<input value="">';
	foreach ($query->result() as $row)
	{	
	$output = $row->company;
	}
	return $output;
}

function fetch_department($empl_id)
{
	$this->db->where('empl_id',$empl_id);
	$query = $this->db->get('empltable');
	$output = '<input value="">';
	foreach ($query->result() as $row) {
		# code...
		$output = $row->department;
	}
	return $output;
}

public function prev_data($id)
	{   
		$this->db->where('empl_id',$id);
		$query = $this->db->get('emplentries');
	  //$query = $this->db->query("SELECT * FROM studentsdata ORDER BY id DESC");
		return $query;
	}

public function hr_view()
{
	$query = $this->db->get('emplentries');
	return $query;
}

public function view_application($id)
	{
		$this->db->from('emplentries');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}

 public function hr_screen($company,$year,$month)
 {
 	$this->db->from('emplentries');
 	$this->db->where("company='$company' AND year='$year' AND month='$month'");
 	$query = $this->db->get();
 	return $query; 
 }

public function hr_screen_year_and_month($year,$month)
 {
 	$this->db->from('emplentries');
 	$this->db->where("year='$year' AND month='$month'");
 	$query = $this->db->get();
 	return $query; 
 }

public function hr_screen_company_and_month($company,$month)
 {
 	$this->db->from('emplentries');
 	$this->db->where("company='$company' AND month='$month'");
 	$query = $this->db->get();
 	return $query; 
 }


public function hr_screen_company_and_year($company,$year)
 {
 	$this->db->from('emplentries');
 	$this->db->where("company='$company' AND year='$year'");
 	$query = $this->db->get();
 	return $query; 
 }

public function hr_screen_company($company)
{
	$this->db->from('emplentries');
	$this->db->where('company',$company);
	$query = $this->db->get();
	return $query;
}

public function hr_screen_year($year)
{
	$this->db->from('emplentries');
	$this->db->where('year',$year);
	$query = $this->db->get();
	return $query;
}

public function hr_screen_month($month)
{
	$this->db->from('emplentries');
	$this->db->where('month',$month);
	$query = $this->db->get();
	return $query;
}

/* public function get_ward_query($empl_id)
 {
 	$query = $this->db->get_where('wardentries', array('empl_id'=>$empl_id));
 	return $query->result();
 }
*/
}