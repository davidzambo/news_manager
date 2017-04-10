<h2><?php echo $title; ?></h2>
<br/>


<h4>Naponta felvitt cikkek átlagos karakterszáma:</h4>

<table class="table table-striped table-hover ">
  <thead>
      <tr>
        <th>Dátum</th>
        <th>Napi átlagos karakterszám</th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($stats[2] as $news_item): ?>
      <tr>
        <td><?php echo $news_item->created_at; ?></td>
        <td><?php echo $news_item->chars_per_day; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<br />
<h4>Naponta felvitt cikkek száma:</h4>

<table class="table table-striped table-hover ">
  <thead>
      <tr>
        <th>Dátum</th>
        <th>Cikkek száma</th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($stats[3] as $news_item): ?>
      <tr>
        <td><?php echo $news_item->created_at; ?></td>
        <td><?php echo $news_item->daily_news; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
