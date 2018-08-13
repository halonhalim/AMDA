<?php if (!defined('BASEPATH'))exit('Hacking Attempt : Get Out of the system ..!');
   class Membership_model extends CI_Model {
	public function index () {
		$this->db->select('*');
		$this->db->from('membership');
		$this->db->order_by('id', 'ASC');
		return $this->db->get()->result();		
	}	
	public function get_by_id($id) {
		$query = $this->db->get_where('membership', array('id' => $id));
		return $query->row();
	}
	public function save($data) {
		$this->db->insert('membership', $data);

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	public function update($data, $id) {
		$this->db->update('membership', $data, array('id' => $id));

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete($id) {
		$this->db->delete('membership', array('id' => $id));

		if ($this->db->affected_rows() == 1)
			return TRUE;
		else
			return FALSE;
	}    
}




