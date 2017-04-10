<h2><?php echo $title; ?></h2>
<br/>

<h4>A 10 legtöbbet felhasznált tag:</h4>
<table class="table table-striped table-hover ">
  <thead>
      <tr>
        <th>Tag</th>
        <th>Ennyi cikkben volt felhasználva</th>
      </tr>
  </thead>
  <tbody>
      <?php foreach ($stats[0] as $tag): ?>
          <tr>
            <td><?php echo $tag->name; ?></td>
            <td><?php echo $tag->times_used; ?></td>
          </tr>
      <?php endforeach; ?>
  </tbody>
</table>
<br/>


<h4>A legtöbb szót tartalmazó cikk:</h4>
<table class="table table-striped table-hover ">
  <thead>
      <tr>
        <th>#</th>
        <th>Cím</th>
        <th>Szavak száma</th>
        <th>Rögzítve</th>
      </tr>
  </thead>
  <tbody>
      <tr>
        <td><?php echo $stats[1]->id; ?></td>
        <td><?php echo $stats[1]->title; ?></td>
        <td><?php echo count(explode(" ",$stats[1]->body)); ?></td>
        <td><?php echo $stats[1]->created_at; ?></td>
      </tr>
  </tbody>
</table>
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
        <td><?php echo date("y. m. d.", strtotime($news_item->created_at)); ?></td>
        <td><?php echo round($news_item->chars_per_day, 2); ?></td>
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
        <td><?php echo date("y. m. d.", strtotime($news_item->created_at)); ?></td>
        <td><?php echo $news_item->daily_news; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
