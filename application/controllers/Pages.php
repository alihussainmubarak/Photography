<?php
class Pages extends CI_Controller
{

        public function view($page = 'home')
        {
                if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
                        show_404();
                } elseif ($page != 'home') {

                        $data['title'] = ucfirst($page); // Capitalize the first letter

                        $this->load->view('templates/header', $data);
                        $this->load->view('templates/sidebar');
                        $this->load->view('pages/' . $page, $data);
                        $this->load->view('templates/footer', $data);
                } else {
                        $this->load->view('pages/home');
                }
        }
}
