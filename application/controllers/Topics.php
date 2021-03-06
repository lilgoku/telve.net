<?php
    class Topics extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('link_model');
        }

        public function index()
        {
            $this->load->library('pagination');

            $config['base_url'] = base_url('konular');

            $config['total_rows'] = count($this->link_model->retrieve_topics_for_header());
            $config['per_page'] = 10;
            $config['full_tag_open'] = '<p>'; //class = "btn"
            $config['prev_link'] = '<span class="glyphicon glyphicon-arrow-left"></span> <span class="pagination">Önceki sayfa</span>';
            $config['next_link'] = '<span class="pagination">Sonraki sayfa</span> <span class="glyphicon glyphicon-arrow-right"></span>';
            $config['full_tag_close'] = '</p>';
            $config['display_pages'] = false; //The "number" link is not displayed
            $config['first_link'] = false; //The start link is not displayed
            $config['last_link'] = false;
            $config['next_tag_open'] = '<span style="float:right;">';
            $config['next_tag_close'] = "</span>";
            $this->pagination->initialize($config);
            $this->data['per_page'] = $config['per_page'];

            $this->data['title'] = 'Konular';
            $this->data['offset'] = $this->uri->segment(2);
            $this->data['topics'] = $this->link_model->retrieve_topics($config['per_page'], $this->data['offset']);

            $this->load->view('templates/header', $this->data);
            $this->load->view('topics/index', $this->data);
            $this->load->view('templates/side');
            $this->load->view('templates/footer');
        }
    }
