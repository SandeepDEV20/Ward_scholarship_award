<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Ward_sclshp_control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ward_sclshp_model');
    }

	public function index()
	{   
    //    $this->load->model('Ward_sclshp_model');
        $data['employee'] = $this->Ward_sclshp_model->fetch_employees();
        /*if ($this->input->post('start')) {
            # code...
            header('Location:http://localhost/ci/Ward_sclshp_control/guidelines');
        
        }
*/
	//	$this->load->view('Ward_sclshp_view/Empl-0');
        $this->load->view('Ward_sclshp_view/Start_scr',$data);
	}

	public function form()
	{
		$this->load->view('Ward_sclshp_view/Empl-1');
	}

    public function guidelines()
    {
        $this->load->view('Ward_sclshp_view/Empl-0');
    }
    
    function fetch_ward_data()
    {           
    //    $this->load->model('Ward_sclshp_model');
        if ($this->input->post('empl_id')) {
            # code...
            echo $this->Ward_sclshp_model->fetch_ward_name($this->input->post('empl_id'));
        }
    }
    function fetch_empl_name()
    {
        if ($this->input->post('empl_id')) {
            # code...
            echo $this->Ward_sclshp_model->fetch_empl_name($this->input->post('empl_id'));
        }
    }
    function fetch_company()
    {
        if ($this->input->post('empl_id')){
            echo $this->Ward_sclshp_model->fetch_company($this->input->post('empl_id'));
        }
    }
    function fetch_department()
    {
        if ($this->input->post('empl_id')) {
            # code...
            echo $this->Ward_sclshp_model->fetch_department($this->input->post('empl_id'));
        }
    }
    

    public function prev_data($id)
    {       

        $data['fetch_data'] = $this->Ward_sclshp_model->prev_data($id);
        $this->load->view('Ward_sclshp_view/Empl-2',$data);
        
    }

    public function hr_view()
    {
        $data['fetch_data'] = $this->Ward_sclshp_model->hr_view();
        $this->load->view('Ward_sclshp_view/Hr-view',$data);
    }

    public function view_application($id)
    {   
        $data['emplentries'] = $this->Ward_sclshp_model->view_application($id);
        $this->load->view('Ward_sclshp_view/Hr-2',$data);

    }

    function accept_reject()
    {
        if ($this->input->post('accept')) {
            # code...
            if(!empty($_POST["checkbox"]))
            {   
                foreach ($_POST["checkbox"] as $checkbox) {
                    # code...
                    $accepted = "Accepted";
                    $this->db->set('status',$accepted);
                    $this->db->where('id',$checkbox);
                    $this->db->update('emplentries');

                }

                echo '<script>alert("Status changed for some entries !");</script>';
            }
            else
            {
                echo '<script>alert("No entry selected ! Please select atleast one entry");</script>';
            }
        }

        elseif ($this->input->post('reject')) {
            # code...
            if(!empty($_POST["checkbox"]))
            {
                foreach ($_POST["checkbox"] as $checkbox) {
                    # code...
                    $rejected = "Rejected";
                    $this->db->set('status',$rejected);
                    $this->db->where('id',$checkbox);
                    $this->db->update('emplentries');

                }
            //    header("Location:http://localhost/ci/Ward_sclshp_control/hr_view");
                echo '<script>alert("Status changed for some entries !");</script>';
            }
            else
            {
                echo '<script>alert("No entry selected ! Please select atleast one entry");</script>';
            }
        }
    //    header("Location:http://localhost/ci/Ward_sclshp_control/hr_view");
        
        if($this->input->post('company') != '' && $this->input->post('company') != "All" && $this->input->post('year') != '' && $this->input->post('year') != "All" && $this->input->post('month') != '' && $this->input->post('month') != "All")
            {
            $company = $this->input->post('company');
            $year = $this->input->post('year');
            $month = $this->input->post('month');

            $data['fetch_data'] = $this->Ward_sclshp_model->hr_screen($company,$year,$month);
            $this->load->view('Ward_sclshp_view/Hr-1',$data);
            }
            
            elseif ($this->input->post('company') == "All" && $this->input->post('year') == "All" && $this->input->post('month') == "All") {
                # code...
                header("Location:http://localhost/Ward_scholarship_award/Ward_sclshp_control/hr_view");
            }

            elseif ($this->input->post('company') == "All" && $this->input->post('year') != '' && $this->input->post('year') != "All" && $this->input->post('month') != "All" && $this->input->post('month') != '') {
                # code...
                $year = $this->input->post('year');
                $month = $this->input->post('month');

                $data['fetch_data'] = $this->Ward_sclshp_model->hr_screen_year_and_month($year,$month);
                $this->load->view('Ward_sclshp_view/Hr-1',$data);
            }

            elseif ($this->input->post('year') == "All" && $this->input->post('company') != '' && $this->input->post('company') != "All" && $this->input->post('month') != "All" && $this->input->post('month') != '') {
                # code...
                $company = $this->input->post('company');
                $month = $this->input->post('month');

                $data['fetch_data'] = $this->Ward_sclshp_model->hr_screen_company_and_month($company,$month);
                $this->load->view('Ward_sclshp_view/Hr-1',$data);
            }


            elseif ($this->input->post('month') == "All" && $this->input->post('company') != '' && $this->input->post('company') != "All" && $this->input->post('year') != "All" && $this->input->post('year') != '') {
                # code...
                $company = $this->input->post('company');
                $year = $this->input->post('year');

                $data['fetch_data'] = $this->Ward_sclshp_model->hr_screen_company_and_year($company,$year);
                $this->load->view('Ward_sclshp_view/Hr-1',$data);
            }

            elseif ($this->input->post('company') != '' && $this->input->post('year') == "All" && $this->input->post('month') == "All") {
                # code...
                $company = $this->input->post('company');

                $data['fetch_data'] = $this->Ward_sclshp_model->hr_screen_company($company);
                $this->load->view('Ward_sclshp_view/Hr-1',$data);
            }

            elseif ($this->input->post('company') == "All" && $this->input->post('year') != '' && $this->input->post('month') == "All") {
                # code...
                $year = $this->input->post('year');
                
                $data['fetch_data'] = $this->Ward_sclshp_model->hr_screen_year($year);
                $this->load->view('Ward_sclshp_view/Hr-1',$data);
            }
            
            elseif ($this->input->post('company') == "All" && $this->input->post('year') == "All" && $this->input->post('month') != '') {
                # code...
                $month = $this->input->post('month');

                $data['fetch_data'] = $this->Ward_sclshp_model->hr_screen_month($month);
                $this->load->view('Ward_sclshp_view/Hr-1',$data);
            }
            

            elseif ($this->input->post('company') == '' && $this->input->post('year') != '' && $this->input->post('month') != '') {
                $this->load->view('Ward_sclshp_view/Hr-0');
                echo '<script>alert("Company cannot be empty ! Please select company");</script>';
            }

            elseif ($this->input->post('company') != '' && $this->input->post('year') == '' && $this->input->post('month') != '') {
                $this->load->view('Ward_sclshp_view/Hr-0');
                echo '<script>alert("Year cannot be empty ! Please select year");</script>';
            }

            elseif ($this->input->post('company') != '' && $this->input->post('year') != '' && $this->input->post('month') == '') {
                $this->load->view('Ward_sclshp_view/Hr-0');
                echo '<script>alert("Month cannot be empty ! Please select month");</script>';
            }

            elseif ($this->input->post('company') == '' && $this->input->post('year') == '' && $this->input->post('month') == '') {
                $this->load->view('Ward_sclshp_view/Hr-0');
                echo '<script>alert("Company cannot be empty ! Please select company.\nYear cannot be empty ! Please select year.\nMonth cannot be empty ! Please select month.");</script>';
            }

            elseif ($this->input->post('company') == '' && $this->input->post('year') == '' && $this->input->post('month') != '') {
                $this->load->view('Ward_sclshp_view/Hr-0');
                echo '<script>alert("Company cannot be empty ! Please select company.\nYear cannot be empty ! Please select year.");</script>';
            }

            elseif ($this->input->post('company') != '' && $this->input->post('year') == '' && $this->input->post('month') == '') {
                $this->load->view('Ward_sclshp_view/Hr-0');
                echo '<script>alert("Year cannot be empty ! Please select year.\nMonth cannot be empty ! Please select month.");</script>';
            }

            elseif ($this->input->post('company') == '' && $this->input->post('year') != '' && $this->input->post('month') != '') {
                $this->load->view('Ward_sclshp_view/Hr-0');
                echo '<script>alert("Company cannot be empty ! Please select company.\nMonth cannot be empty ! Please select month.");</script>';
            }

    }

    function hr_start()
    {
        $this->load->view('Ward_sclshp_view/Hr-0');
    }

    function hr_screen()
    {   
    //    $this->load->view('Ward_sclshp_view/Hr-0');

        if ($this->input->post('hr_submit')) {
            # code...
            if($this->input->post('company') != '' && $this->input->post('company') != "All" && $this->input->post('year') != '' && $this->input->post('year') != "All" && $this->input->post('month') != '' && $this->input->post('month') != "All")
            {
            $company = $this->input->post('company');
            $year = $this->input->post('year');
            $month = $this->input->post('month');

            $data['fetch_data'] = $this->Ward_sclshp_model->hr_screen($company,$year,$month);
            $this->load->view('Ward_sclshp_view/Hr-1',$data);
            }
            
            elseif ($this->input->post('company') == "All" && $this->input->post('year') == "All" && $this->input->post('month') == "All") {
                # code...
                header("Location:http://localhost/Ward_scholarship_award/Ward_sclshp_control/hr_view");
            }

            elseif ($this->input->post('company') == "All" && $this->input->post('year') != '' && $this->input->post('year') != "All" && $this->input->post('month') != "All" && $this->input->post('month') != '') {
                # code...
                $year = $this->input->post('year');
                $month = $this->input->post('month');

                $data['fetch_data'] = $this->Ward_sclshp_model->hr_screen_year_and_month($year,$month);
                $this->load->view('Ward_sclshp_view/Hr-1',$data);
            }

            elseif ($this->input->post('year') == "All" && $this->input->post('company') != '' && $this->input->post('company') != "All" && $this->input->post('month') != "All" && $this->input->post('month') != '') {
                # code...
                $company = $this->input->post('company');
                $month = $this->input->post('month');

                $data['fetch_data'] = $this->Ward_sclshp_model->hr_screen_company_and_month($company,$month);
                $this->load->view('Ward_sclshp_view/Hr-1',$data);
            }


            elseif ($this->input->post('month') == "All" && $this->input->post('company') != '' && $this->input->post('company') != "All" && $this->input->post('year') != "All" && $this->input->post('year') != '') {
                # code...
                $company = $this->input->post('company');
                $year = $this->input->post('year');

                $data['fetch_data'] = $this->Ward_sclshp_model->hr_screen_company_and_year($company,$year);
                $this->load->view('Ward_sclshp_view/Hr-1',$data);
            }

            elseif ($this->input->post('company') != '' && $this->input->post('year') == "All" && $this->input->post('month') == "All") {
                # code...
                $company = $this->input->post('company');

                $data['fetch_data'] = $this->Ward_sclshp_model->hr_screen_company($company);
                $this->load->view('Ward_sclshp_view/Hr-1',$data);
            }

            elseif ($this->input->post('company') == "All" && $this->input->post('year') != '' && $this->input->post('month') == "All") {
                # code...
                $year = $this->input->post('year');
                
                $data['fetch_data'] = $this->Ward_sclshp_model->hr_screen_year($year);
                $this->load->view('Ward_sclshp_view/Hr-1',$data);
            }
            
            elseif ($this->input->post('company') == "All" && $this->input->post('year') == "All" && $this->input->post('month') != '') {
                # code...
                $month = $this->input->post('month');

                $data['fetch_data'] = $this->Ward_sclshp_model->hr_screen_month($month);
                $this->load->view('Ward_sclshp_view/Hr-1',$data);
            }
            

            elseif ($this->input->post('company') == '' && $this->input->post('year') != '' && $this->input->post('month') != '') {
                $this->load->view('Ward_sclshp_view/Hr-0');
                echo '<script>alert("Company cannot be empty ! Please select company");</script>';
            }

            elseif ($this->input->post('company') != '' && $this->input->post('year') == '' && $this->input->post('month') != '') {
                $this->load->view('Ward_sclshp_view/Hr-0');
                echo '<script>alert("Year cannot be empty ! Please select year");</script>';
            }

            elseif ($this->input->post('company') != '' && $this->input->post('year') != '' && $this->input->post('month') == '') {
                $this->load->view('Ward_sclshp_view/Hr-0');
                echo '<script>alert("Month cannot be empty ! Please select month");</script>';
            }

            elseif ($this->input->post('company') == '' && $this->input->post('year') == '' && $this->input->post('month') == '') {
                $this->load->view('Ward_sclshp_view/Hr-0');
                echo '<script>alert("Company cannot be empty ! Please select company.\nYear cannot be empty ! Please select year.\nMonth cannot be empty ! Please select month.");</script>';
            }

            elseif ($this->input->post('company') == '' && $this->input->post('year') == '' && $this->input->post('month') != '') {
                $this->load->view('Ward_sclshp_view/Hr-0');
                echo '<script>alert("Company cannot be empty ! Please select company.\nYear cannot be empty ! Please select year.");</script>';
            }

            elseif ($this->input->post('company') != '' && $this->input->post('year') == '' && $this->input->post('month') == '') {
                $this->load->view('Ward_sclshp_view/Hr-0');
                echo '<script>alert("Year cannot be empty ! Please select year.\nMonth cannot be empty ! Please select month.");</script>';
            }

            elseif ($this->input->post('company') == '' && $this->input->post('year') != '' && $this->input->post('month') != '') {
                $this->load->view('Ward_sclshp_view/Hr-0');
                echo '<script>alert("Company cannot be empty ! Please select company.\nMonth cannot be empty ! Please select month.");</script>';
            }

           /* else 
            {
                echo '<script>alert("There is no data for the selected values!");</script>';
            }
*/        }

    }
    /*public function get_ward()
    {
        $empl_id = $this->input->post('empl_id');
        $wards = $this->Ward_sclshp_model->get_ward_query($empl_id);
        if (count($wards)>0) {
            # code...
            $pro_select_box = '';
            $pro_select_box .= '<option value="">Ward Name</option>';
            foreach ($wards as $ward) {
                # code...
                $pro_select_box .= '<option value="'.$ward->ward_id.'">'.$ward->ward_name.'</option>';
            }
            echo json_encode($pro_select_box);
        }
    }
*/
	function action()
	{
		if($this->input->post('data_action'))
		{
			$data_action = $this->input->post('data_action');

			if ($data_action == "fetch_all")
			{
				# code...
				$api_url = "http://localhost/ci/api";

				$client = curl_init($api_url);

				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

				$response = curl_exec($client);

				curl_close($client);

				$result = json_decode($response);

				$output = '';

				if (count($result)>0)
				{
					foreach ($result as $row) {
						# code...
						$output .= '
                        <tr>
                            <td>'.$row->first_name.'</td>
                            <td>'.$row->last_name.'</td>
                            <td><button type="button" name="edit" class="btn btn-warning btn-xs edit" id="'.$row->id.'">Edit</button></td>
                            <td><button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row->id.'">Delete</button></td>
                        </tr>   

						';
					}
				}

				else
                {
                	$output .= '
                	<tr>
                	    <td colspan="4" align="center">No Data Found</td>
                	</tr>
                	';
                }

                echo $output;

			}

			if($data_action == "Insert")
   {
    $api_url = "http://localhost/Ward_scholarship_award/ward_sclshp_api/insert";
   

    $form_data = array(
     'empl_id'  => $this->input->post('empl_id'),
     'empl_name'   => $this->input->post('empl_name'),
     'company' => $this->input->post('company'),
     'department'   => $this->input->post('department'),
     'ward_name'   => $this->input->post('ward_name'),
     'class'   => $this->input->post('class'),
     'score'   => $this->input->post('score'),
     'remarks'   => $this->input->post('remarks'), 
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;


   }

   if($data_action == "fetch_single")
   {
    $api_url = "http://localhost/Ward_scholarship_award/ward_sclshp_api/fetch_single";

    $form_data = array(
     'empl_id'  => $this->input->post('empl_id')
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;


   }

    if($data_action == "Edit")
   {
    $api_url = "http://localhost/ci/api/update";

    $form_data = array(
     'first_name'  => $this->input->post('first_name'),
     'last_name'   => $this->input->post('last_name'),
     'id'    => $this->input->post('user_id')
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;


   }

   }

}

}