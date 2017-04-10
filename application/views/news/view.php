<h2><?php echo $title; ?></h2>
<p>rendezés módja:
<a href="<?php echo base_url(); ?>view/id/1" class="btn btn-primary btn-xs">sorszám szerint</a>
<a href="<?php echo base_url(); ?>view/title/1" class="btn btn-primary btn-xs">címe szerint</a>
<a href="<?php echo base_url(); ?>view/created_at/1" class="btn btn-primary btn-xs">dátum szerint</a>
</p>
<?php foreach ($news as $news_item): ?>
  <h4><?php echo $news_item->title; ?></h4>
  <h6><?php echo $news_item->created_at; ?></h6>
  <p><?php echo $news_item->body; ?><p>
    <br />

<?php endforeach; ?>
<a href="<?php echo base_url() + $page - 1; ?>">
  <button class="btn btn-primary" <?php if ($page == 1) { echo 'disabled=""';}; ?>>előző oldal</button></a>
<a href="<?php echo base_url() + $page + 1; ?>"><button class="btn btn-primary">következő oldal</button></a>
