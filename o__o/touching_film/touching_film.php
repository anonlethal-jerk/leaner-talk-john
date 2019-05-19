<?php
    for ( $i = 0; $i < count($projects['series'][$prj_index]['works']); $i++ ) {
?>
    <figure class="vid--<?= $projects['series'][$prj_index]['works'][$i]['slug']; ?>">
        <div class="wrap--video"><img height="<?= $projects['series'][$prj_index]['works'][$i]['height']/4; ?>" width="<?= $projects['series'][$prj_index]['works'][$i]['width']/4; ?>" src=""></div>
        <figcaption><cite><?= $projects['series'][$prj_index]['works'][$i]['title']; ?></cite>, <?= $projects['series'][$prj_index]['works'][$i]['medium']; ?>, <?= $projects['series'][$prj_index]['works'][$i]['minutes']; ?>:<?= $projects['series'][$prj_index]['works'][$i]['seconds']; ?> minutes, <?= $projects['series'][$prj_index]['works'][$i]['date']; ?></figcaption>
    </figure>

<?php
    }
?>

    <p>The video, the first in the <cite>Gleaning the Fifth Screen</cite> series, envisions the infamous gestural interface in the movie <cite>Minority Report</cite> as an agent of lasting interference on the film. Every frame that Tom Cruise & others interact with the visualization system is tracked and used to permanently smear the image frame. The fictional characters unknowingly but actively destroy the legibility of the viewer’s experience of the film.</p>

    <p>As a secondary component to the video, I am <a href="https://github.com/jk-keller/Gleaning-the-Fifth-Screen">releasing the tracking info I gathered to github</a>. Please make something cool with it and let me know! Especially interested in how this data could be used for sound composition. Fork it and help make the data more accurate.</p>
    <figure>
        <img src="_img/jk_keller-gleaning-minority_report-tracking_points-01-page.png" alt="">
        <figcaption>All the tracking points, 2012</figcaption>
    </figure>
