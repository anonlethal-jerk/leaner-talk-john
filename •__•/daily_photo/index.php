<?php
  $data = [
    'series_slug' => 'daily_photo',
    'series_title' => 'The Adaption to My Generation',
    'series_subtitle' => 'a daily photo project',
    'series_description' => '—',
    'series_date' => '1998 Oct 01 – I will go on.',
    'series_works' => [
      [
        'work_title' => 'Average JK, 1998–2006',
        'work_slug' => 'average_jk_1998_2006',
        'work_img' => 'jk_keller--average_jk_1998_2006--jkk200610_2.jpg',
        'work_status' => 'fourthree',
      ],
      [
        'work_title' => 'Average JK, 2006–2014',
        'work_slug' => 'average_jk_2006_2014',
        'work_img' => 'jk_keller--average_jk_2006_2014--jkk201410_2.jpg',
        'work_status' => 'fourthree',
      ],
      [
        'work_title' => 'Average JK, 1998–2014',
        'work_slug' => 'average_jk_1998_2014',
        'work_img' => 'jk_keller--average_jk_1998_2014--jkk201410_3.jpg',
        'work_status' => 'fourthree',
      ],
    ],
  ];
  for ($i=2017; $i>=1998; $i--) {
    $temp_work = [
      'work_title' => 'Average JK, '.$i,
      'work_slug' => 'average_jk_'.$i,
      'work_img' => 'jk_keller--average_jk_'.$i.'--jkk_'.($i+1).'01_1.jpg',
    ];
    if ($i<=2008) {
      $temp_work['work_status'] = 'fourthree';
    } else {
      $temp_work['work_status'] = NULL;
    }
    array_push($data['series_works'], $temp_work);
  }

/*  // FOR LATER?
      'sketches' => '—',
      'inspiration' => '—',
      'status' => '',
*/

  $page_slug = $data['series_slug'].' •__• JK';
  $page_title = $data['series_title'].' •__• JK';
?>
<?php require_once('../_header.php'); ?>

    <h1><cite><?= $data['series_title']; ?></cite></h1>
    <h2 class="subtitle"><?= $data['series_subtitle']; ?></h2>
    <p><?= $data['series_date']; ?></p>

    <section class="average_jk">
      <section class="average_year">
        <h3><cite>Average JK, <span class="placeholder">____</span></cite></h3>
<?php
  $count = 0;
  foreach ($data['series_works'] as $work) {
    // SKIP FIRST THREE
    $count++;
    if($count <= 3) continue;
?><figure>
<?php
  if ($work['work_status'] == 'fourthree') {
?>          <img class="fourthree" src="x__x/<?= $work['work_img']; ?>" height="600" width="450" alt="<?= $work['work_title']; ?>" />
<?php
  } else {
?>          <img class="" src="x__x/<?= $work['work_img']; ?>" height="600" width="401" alt="<?= $work['work_title']; ?>" />
<?php
  };
?>          <figcaption><cite><span class="hidden"><?= substr($work['work_title'], 0, 12); ?></span><?= substr($work['work_title'], -4); ?></cite></figcaption>
        </figure><!--
        --><?php
  };
?>
      </section>
      
      <section class="average_8">
        <hr>
        <figure>
          <img class="fourthree" src="x__x/<?= $data['series_works'][0]['work_img']; ?>" height="600" width="450" alt="<?= $data['series_works'][0]['work_title']; ?>" />
          <figcaption><cite><span class="hidden"><?= substr($work['work_title'], 0, 12); ?></span><?= mb_substr($data['series_works'][0]['work_title'], -9); ?></cite></figcaption>
        </figure><!--
        --><figure>
          <img class="fourthree" src="x__x/<?= $data['series_works'][1]['work_img']; ?>" height="600" width="450" alt="<?= $data['series_works'][1]['work_title']; ?>" />
          <figcaption><cite><span class="hidden"><?= substr($work['work_title'], 0, 12); ?></span><?= mb_substr($data['series_works'][1]['work_title'], -9); ?></cite></figcaption>
        </figure>
      </section>
  
      <section class="average_8_all">
        <hr>
        <figure>
          <img class="fourthree" src="x__x/<?= $data['series_works'][2]['work_img']; ?>" height="600" width="450" alt="<?= $data['series_works'][2]['work_title']; ?>" />
          <figcaption><cite><span class="hidden"><?= substr($work['work_title'], 0, 12); ?></span><?= mb_substr($data['series_works'][2]['work_title'], -9); ?></cite></figcaption>
        </figure>
      </section>

    </section>

<?php require_once('../_footer.php'); ?>
