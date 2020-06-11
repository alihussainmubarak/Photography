<?php

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('gallery_model');
    }

    public function index()
    {
        $data['gallery'] = $this->gallery_model->show_gallery();
        $data['title'] = 'gallery';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('gallery/index', $data);
        $this->load->view('templates/footer');
    }

    public function upload()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('gallery/upload', array('error' => ' '));
        $this->load->view('templates/footer');
    }

    public function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 10024;
        $config['max_height']           = 1068;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('gallery/upload', $error);
            $this->load->view('templates/footer');
        } else {
            $data = array('upload_data' => $this->upload->data());
            $image_name = $_FILES['userfile']['name'];
            $this->gallery_model->set_image($image_name);
            redirect('gallery/upload');
        }
    }

    public function delete()
    {
        $data['gallery'] = $this->gallery_model->show_gallery();
        $data['title'] = 'Delete photo';

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('gallery/delete', $data);
        $this->load->view('templates/footer');
    }

    public function do_delete($id)
    {
        $this->gallery_model->deleted($id);
        redirect('gallery/delete');
    }
}
