<?php
  class News_model extends CI_Model {
    public function __construct(){
      $this->load->database();
    }

    public function get_news($orderby = ' '){

      switch ($orderby) {
        case "title":
          $query = $this->db->query('SELECT * FROM news ORDER BY title DESC');
          return $query->result();
          break;

        case "body":
          $query = $this->db->query('SELECT * FROM news ORDER BY body DESC');
          return $query->result();
          break;

        case "created_at":
          $query = $this->db->query('SELECT * FROM news ORDER BY created_at DESC');
          return $query->result();
          break;

        default:
          $query = $this->db->query('SELECT * FROM news ORDER BY id DESC');
          return $query->result();
          break;

      }
    }


    public function upload_news(){

      $this->load->helper('url');

      //split the "tags" string into words
      $tags = explode(" ",$this->input->post('tags'));

      //ask the database about the highest id in the news table, because the
      //current news' id will be the next one.
      $last_news_id = $this->db->query('SELECT MAX(id) FROM news');
      $current_news_id = $last_news_id-> + 1;

      //post news title and body to news table
      $title = $this->input->post('title');
      $body = $this->input->post('body');

      return $this->db->query("INSERT INTO news (title, body) VALUES ('$title', '$body')");

    }


  }
  ?>
