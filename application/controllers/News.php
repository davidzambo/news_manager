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



  }
 ?>
