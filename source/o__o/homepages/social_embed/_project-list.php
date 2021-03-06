<?php
function project_embed($a_ary) {
  $tmp_ary = rndm_embed($a_ary['array']);
  echo '<div id="'.$a_ary['slug'].'" class="embed-wrap embed-'.$tmp_ary[1].'">';
  echo $tmp_ary[0];
  echo '<div class="project-link"><a href="'.$a_ary['url'].'"><cite>'.$a_ary['title'].'</cite>'.($a_ary['title'] && $a_ary['subtitle'] ? ', ' : '').($a_ary['subtitle'] ? $a_ary['subtitle'] : '').'</a>'.($a_ary['byline'] ? ', '.$a_ary['byline'] : '').', '.$a_ary['date'].'</div>';
  echo '</div>';
}

function project_list($a_ary) {
  echo '<li id="'.$a_ary['slug'].'"><a href="'.$a_ary['url'].'"><cite>'.$a_ary['title'].'</cite>'.($a_ary['title'] && $a_ary['subtitle'] ? ', ' : '').($a_ary['subtitle'] ? $a_ary['subtitle'] : '').'</a>'.($a_ary['byline'] ? ', '.$a_ary['byline'] : '').', '.$a_ary['date'].'</li>';
}


// EMPTY EXAMPLE
$ary_example = [
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    '',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '',
    'url' =>      '',
  ],
];

// EMPTY EXAMPLE
$ary_projects = [
  [
    'array' =>    $ary_dots,
    'slug' =>     'dots_dots_dots',
    'title' =>    'It Takes Me a Long Time to Say Nothing',
    'subtitle' => '(dot drawings)',
    'byline' =>   '',
    'date' =>     '2014',
    'url' =>      '/dots-dots-dots/',
  ],
  [
    'array' =>    $ary_simpsons,
    'slug' =>     'simpsons',
    'title' =>    'Realigning My Thoughts on Jasper Johns',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2011',
    'url' =>      '/simpsons-realigned/',
  ],
  [
    'array' =>    $ary_iphone_oil,
    'slug' =>     'iphone_oil',
    'title' =>    'iPhone Oil Paintings',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2012',
    'url' =>      'http://iphone-oil-paintings.tumblr.com/',
  ],
  [
    'array' =>    $ary_fucking_windows,
    'slug' =>     'fucking_windows',
    'title' =>    'Fucking-Windows.com',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2010',
    'url' =>      '/fucking-windows/',
  ],
  [
    'array' =>    $ary_daily_photo,
    'slug' =>     'daily_photo',
    'title' =>    'The Adaption to My Generation',
    'subtitle' => 'a daily photo project',
    'byline' =>   '',
    'date' =>     '1998–ongoing',
    'url' =>      '/daily-photo/',
  ],
  [
    'array' =>    $ary_wax,
    'slug' =>     'wax',
    'title' =>    'I’ve Been Thinking of You for a While',
    'subtitle' => '',
    'byline' =>   'collab with <a href="fromkeetra.com">Keetra Dean Dixon</a>',
    'date' =>     '2008–2012',
    'url' =>      '/layered-wax-type/and-yet/',
  ],
  [
    'array' =>    $ary_binarys_fugue,
    'slug' =>     'binarys_fugue',
    'title' =>    'Binary’s Forth Fugue',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2011',
    'url' =>      '/arrow-iterations/',
  ],
  [
    'array' =>    $ary_madmuseum,
    'slug' =>     'madmuseum',
    'title' =>    'Museum as Manufacturer',
    'subtitle' => '',
    'byline' =>   'collab with <a href="http://fromkeetra.com">Keetra Dean Dixon</a>',
    'date' =>     '2013',
    'url' =>      'http://fromkeetra.com/museum-as-manufacturer/',
  ],
  [
    'array' =>    $ary_tantamount,
    'slug' =>     'tantamount',
    'title' =>    'Tantamounts',
    'subtitle' => '(series)',
    'byline' =>   '',
    'date' =>     '2009–2010',
    'url' =>      '/flattened-mountains/',
  ],
  [
    'array' =>    $ary_mistake,
    'slug' =>     'mistake',
    'title' =>    'Embrace the Amazing Mistake',
    'subtitle' => '',
    'byline' =>   'collab with <a href="http://fromkeetra.com">Keetra Dean Dixon</a>',
    'date' =>     '2011',
    'url' =>      '/doublespeak/amazing-mistake/',
  ],
  [
    'array' =>    $ary_gleaning,
    'slug' =>     'gleaning',
    'title' =>    'Gleaning the Fifth Screen, Minority Report',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2012',
    'url' =>      '/gleaning-the-fifth-screen/minority-report/',
  ],
  [
    'array' =>    $ary_siri,
    'slug' =>     'siri',
    'title' =>    'Beware the Scattersiri, i Phone!',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2012',
    'url' =>      '/siri-sound-poems/',
  ],
  [
    'array' =>    $ary_matchbooks,
    'slug' =>     'matchbooks',
    'title' =>    '',
    'subtitle' => 'Fingerspelling Matchbooks',
    'byline' =>   '',
    'date' =>     '2005',
    'url' =>      '/fingerspelling-matchbooks/',
  ],
  [
    'array' =>    $ary_reverse,
    'slug' =>     'reverse_portraits',
    'title' =>    '',
    'subtitle' => 'Reverse Portraits',
    'byline' =>   '',
    'date' =>     '2007',
    'url' =>      '/reverse_portraits/',
  ],
];

// NON-EMBEDDED PORJECTS
$ary_other_projects = [
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    '',
    'subtitle' => '8==============D',
    'byline' =>   '',
    'date' =>     '2012',
    'url' =>      'http://looooonging.tumblr.com',
  ],
  [
    'array' =>    $ary_plusmillion,
    'slug' =>     'plusmillion',
    'title' =>    '+1,000,000',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2011',
    'url' =>      'http://plus1million.com/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Breathing Buildings',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2011',
    'url' =>      '/breathing-buildings/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Upside Frowns',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2011',
    'url' =>      '/upside-frowns/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Untitled',
    'subtitle' => '(burst)',
    'byline' =>   '',
    'date' =>     '2011',
    'url' =>      '/generative-prints/burst/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Songs About Rainbows',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2008',
    'url' =>      '/rainbow-folders/songs-about-rainbows/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'You trying to be Me trying to be You',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2009',
    'url' =>      '/profiles-exchanged/keetra-jk/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Reversals',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2008–2012',
    'url' =>      '/profiles-reversed/keetra-jk/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Echoes',
    'subtitle' => '(mousepads)',
    'byline' =>   '',
    'date' =>     '2005–2011',
    'url' =>      '/dirty-mousepads/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Insecurity Envelopes',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2006',
    'url' =>      '/laser-cut-envelopes/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'A Fictitious Argument Emerges Between Coriolis & Beaufort',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2007',
    'url' =>      '/fans-flags/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Unfortunate Wikipedia Banner Pairings',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2010',
    'url' =>      '/wikipedia-banner-pairings/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Slitscan',
    'subtitle' => 'a type generator',
    'byline' =>   '',
    'date' =>     '2006 & 2009',
    'url' =>      '/slitscan-type-generator/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Attempting to Draw a Straight Line on a Scanner',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2010',
    'url' =>      '/scanner-lines/10-straight-line-attempts/',
  ],
/*
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'www.from (Where We Went From)',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2001–2006',
    'url' =>      '/web-visualizer/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Counting the Movies I’ve Seen',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2009',
    'url' =>      '/counting-movies/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Before & After',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2007',
    'url' =>      '/before-after-haircut/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Spamstractions',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2006',
    'url' =>      '/spam-abstractions/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Volumetric Redundancies',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2001',
    'url' =>      '/word-visualizer/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Two Non-Fiction Moments',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2007',
    'url' =>      '/non-fiction-moments/',
  ],
  [
    'array' =>    $ary_example,
    'slug' =>     '',
    'title' =>    'Mail Pillow',
    'subtitle' => '',
    'byline' =>   '',
    'date' =>     '2007',
    'url' =>      '/mail-pillow/',
  ],
*/
];

?>
