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

	<p>An exploration in the generative potential of found digital imagery. Using only the 122 icons labeled "arrow" from <a href="http://p.yusukekamiyamane.com/">Yusuke Kamiyamane</a>'s amazingly thorough <cite>Fugue Icons</cite> set, I was able to create a set of animations similar to L-system growth models. The directional path of the arrow attempts to find a forward progression in mounting uncertainty & indecisiveness, eventually bowing to the emergent cacophony of the powers of 2. The 2 movements and 9 variations take the viewer from a single looping path through a few of the 24 branching choices to the eventual climax of 67'108'864 possible end points (if my math is correct). In theory, from just 24 branching choices, it's possible to create 7'060'738'412'025 different decision-branch animations (again, if I'm correct in my maths).</p>
