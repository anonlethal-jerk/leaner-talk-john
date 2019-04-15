
<?php
    for ( $i = 0; $i < count($projects['series'][$prj_index]['works']); $i++ ) {
?>
    <figure class="vid--<?= $projects['series'][$prj_index]['works'][$i]['slug']; ?>">
        <div class="wrap--video"><iframe height="<?= $projects['series'][$prj_index]['works'][$i]['height']/4; ?>" width="<?= $projects['series'][$prj_index]['works'][$i]['width']/4; ?>" src="" frameborder="0" allowfullscreen></iframe></div>
        <figcaption><cite><?= $projects['series'][$prj_index]['works'][$i]['title']; ?></cite>, <?= $projects['series'][$prj_index]['works'][$i]['medium']; ?>, <?= $projects['series'][$prj_index]['works'][$i]['minutes']; ?>:<?= $projects['series'][$prj_index]['works'][$i]['seconds']; ?> minutes, <?= $projects['series'][$prj_index]['works'][$i]['date']; ?></figcaption>
    </figure>
<?php
    }
?>
