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

      $title = $this->input->post('title');
      $body = $this->input->post('body');

      //split the "tags" string into words and insert records to tag table
      $tags = explode(" ",$this->input->post('tags'));
      foreach ($tags as $tag) {
        $tag = strtolower($tag);
        $this->db->query("INSERT INTO tags (name, news_title) VALUES ('$tag','$title')");
      }

      //post news title and body to news table
      $this->db->query("INSERT INTO news (title, body) VALUES ('$title', '$body')");

    }

    public function get_statistics(){

      $this->load->helper('url');

      //finding the news with the most words in body
      $most_words_per_body = $this->db->query("SELECT id, body FROM news");

      $chars_per_day = $this->db->query("SELECT AVG(LENGTH(body)) AS chars_per_day, created_at FROM `news` GROUP BY MINUTE(created_at);");
      $news_per_day = $this->db->query("SELECT COUNT(id) AS daily_news, created_at FROM news GROUP BY MINUTE(created_at);");

      $all_stats = [ "elso", "masodik", $chars_per_day->result(), $news_per_day->result()];

      return $all_stats;

    }


  }
  ?>
