<h2><?php echo $title; ?></h2>
<p>rendezés módja:
<a href="<?php echo base_url(); ?>view/id" class="btn btn-primary btn-xs">sorszám szerint</a>
<a href="<?php echo base_url(); ?>view/title" class="btn btn-primary btn-xs">címe szerint</a>
<a href="<?php echo base_url(); ?>view/created_at" class="btn btn-primary btn-xs">dátum szerint</a>
</p>
<?php foreach ($news as $news_item): ?>
  <h4><?php echo $news_item->title; ?></h4>
  <h6><?php echo $news_item->created_at; ?></h6>
  <p><?php echo $news_item->body; ?><p>
    <br />

<?php endforeach; ?>
