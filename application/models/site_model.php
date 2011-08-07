<?php

class Site_model extends CI_Model {

	function get_records() {
		$q = $this->db->get('lyrics');
		return $q->result();
		
		}
		
		function add_record($data) {
			$this->db->insert('lyrics', $data);	
			return;
		}
		
		function update_record($data)
		{
				$this->db->where('id' , 2);
				$this->db->update('lyrics', $data);
		}
		
		function delete_row()
		{
			$this->db->where('id', $this->uri->segment(3));
			$this->db->delete('lyrics');
			
		}

}