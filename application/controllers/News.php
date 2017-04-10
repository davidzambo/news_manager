<?php
  class News extends CI_Controller {

    public function index($page = 'home') {

      if (!file_exists(APPPATH.'/views/news/'.$page.'.php')) {
          show_404();
      }

      $data['title'] = 'Hírkezelő applikáció';

      $this->load->view('templates/header', $data);
      $this->load->view('templates/navbar');
      $this->load->view('news/'.$page, $data);
      $this->load->view('templates/footer');
    }

    public function view($orderby = ' ') {

      $data['news'] = $this->news_model->get_news($orderby);
      $data['title'] = 'Híreink';

      $this->load->view('templates/header', $data);
      $this->load->view('templates/navbar');
      $this->load->view('news/view', $data);
      $this->load->view('templates/footer');

    }


    public function create() {
      $this->load->helper('form');
      $this->load->library('form_validation');

      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('tags', 'Tags', 'required');
      $this->form_validation->set_rules('body', 'Body', 'required');

      $data['title'] = 'Új cikk rögzítése';

      if ($this->form_validation->run() === FALSE) {

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('news/create', $data);
        $this->load->view('templates/footer');
      } else {
        $this->news_model->upload_news();

        $data['title'] = 'Sikeres feltöltés';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('news/success', $data);
        $this->load->view('templates/footer');
      }
    }


    public function stats(){
      $data['stats'] = $this->news_model->get_statistics();
      $data['title'] = "Statisztikák";

      $this->load->view('templates/header', $data);
      $this->load->view('templates/navbar');
      $this->load->view('news/statistics', $data);
      $this->load->view('templates/footer');


    }



  }
 ?>
