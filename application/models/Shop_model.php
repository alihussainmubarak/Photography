<?php
class Shop_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_shop()
{
                $query = $this->db->get('shop');
                return $query->result_array();
    
}

public function get_create()
        {
                $data = array(
                        'name' => $this->input->post('name'),
                        'price' => $this->input->post('price'),
                        'user_id' => $this->session->userdata('user_id')
                );
                return $this->db->insert('shop', $data);
        }

        public function get_delete($id)
        {
                $this->db->where('id', $id);
                $this->db->delete('shop');
                return TRUE;
        }

public function get_cart()
{
                $query = $this->db->get('shop');
                return $query->result_array();
    
}
        public function get($id)
        {
                $results = $this->db->get_where('shop', array('id' => $id))->result();
                $result = $results[0];

                return $result;
        }
        

}