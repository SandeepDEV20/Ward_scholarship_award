<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Ward_sclshp_api_model extends CI_Model
{
	function fetch_all()
	{
	//	$this->db->order_by('id','DESC');
		return $this->db->get('emplentries');
	}

	function insert_api($data)
 {
  $this->db->insert('emplentries', $data);
  if($this->db->affected_rows() > 0)
  {
   return true;
  }
  else
  {
   return false;
  }
 }

 function fetch_single_user($empl_id)
 {
  $this->db->where("empl_id", $empl_id);
  $query = $this->db->get('emplentries');
  return $query->result_array();
 }

 function update_api($user_id, $data)
 {
  $this->db->where("id", $user_id);
  $this->db->update("emplentries", $data);
 }

}