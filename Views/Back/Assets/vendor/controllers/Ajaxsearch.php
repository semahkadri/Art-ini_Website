<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxsearch extends CI_Controller {

	function index()
	{
		$this->load->view('influ');
	}

	function fetch()
	{
		$output = '';
		$query = '';
		$this->load->model('ajaxsearch_model');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->ajaxsearch_model->fetch_data($query);
		$output .= '
		<div class="table-responsive"> 
			<table class="table table-responsive table-fluid" > 
            <thead>
              <tr>
                <th> ID </th>
                <th>Picture</th>
                <th>Theme name</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
		';
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
						<tr>
                			<th scope="row">' .$row["id__type"]. '</th>
                			<td><img src="' .$row["img_type"]. '"</td>
                			<td>' .$row["nom_type"]. '</td>                			
                			<td>
                			  <a href="updateFormInf.php?id_inf=' .$row["id__type"]. '"> Edit </a>
                			</td>
                			<td>
                			  <a href="influ.php?id_inf=' .$row["id__type"]. '"> Delete </a> 
                			</td>
            			</tr>
				';
			}
		}
		else
		{
			$output .= '<tr>
							<td colspan="5">No Data Found</td>
						</tr>';
		}
		
		$output .= '
		</tbody>
	</table> <br>
 </div>
';
		echo $output;
	}
	
}
