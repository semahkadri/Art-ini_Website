<?php
class Ajaxsearch_model extends CI_Model
{
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("typev");
		if($query != '')
		{
			$this->db->like('nom_type', $query);
			$this->db->or_like('img_type', $query);
		}
		$this->db->order_by('id__type', 'DESC');
		return $this->db->get();
	}
}
?>