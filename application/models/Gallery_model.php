<?php

class Gallery_model extends CI_Model
{
        public function show_gallery($id = FALSE)
        {
                if ($id === FALSE) {
                        $this->db->order_by('id', 'DESC');
                        $query = $this->db->get('image');
                        return $query->result_array();
                }

                $query = $this->db->get_where('image', array('id' => $id));
                return $query->row_array();
        }

        public function set_image($image_name)
        {
                $data = array(

                        'user_id' => $this->session->userdata('user_id'),
                        'image_name' => $image_name
                );

                return $this->db->insert('image', $data);
        }

        public function deleted($id)
        {
                $this->db->where('id', $id);
                $image_name = $this->db->get('image')->row();
                unlink('uploads/' . $image_name->image_name);
                $this->db->delete('image', array('id' => $id));
        }
}
