<?php
// display a random embedded post
function rndm_embed($a_ary) {
  $ary_keys = array_keys($a_ary);
  $rndm_type = mt_rand(0,count($a_ary)-1);
  $rndm_embed = mt_rand(0,count($a_ary[$ary_keys[$rndm_type]])-1);
/*   echo $a_ary[$ary_keys[$rndm_type]][$rndm_embed]; */
  return [$a_ary[$ary_keys[$rndm_type]][$rndm_embed], $ary_keys[$rndm_type]];
}
// display all the embedded posts
function all_embed($a_ary) {
  $ary_keys = array_keys($a_ary);
  for ($x=0; $x<count($a_ary); $x++) {
    for ($y=0; $y<count($a_ary[$ary_keys[$x]]); $y++) {
      echo $a_ary[$ary_keys[$x]][$y];
    }
  }
}

// EMPTY EXAMPLE
$ary_example = [
  'twitter' => [
    '',
  ],
  'facebook' => [
    '',
  ],
  'googleplus' => [
    '',
  ],
  'instagram' => [
    '',
  ],
  'pinterest' => [
    '',
  ],
  'vine' => [
    '',
  ],
  'square' => [
    '',
  ],
  'getty' => [
    '',
  ],
  'youtube' => [
    '',
  ],
];


// SQUARE - how do I want to do this????
$ary_square = [
  'square' => [
    '<a href="https://squareup.com/market/jk-keller/untitled-burst" class="sq-embed-item">Untitled (burst) from JK Keller on Square Market</a>',
    '<a href="https://squareup.com/market/jk-keller/amazing-mistake-print" class="sq-embed-item">Amazing Mistake Print from JK Keller on Square Market</a>',
  ],
];

// DOTS
$ary_dots = [
  'twitter' => [
    // IMAGES
    '<blockquote class="twitter-tweet" lang="en"><p>words really can&#39;t describe the awesomeness of these <a href="http://t.co/gHF7U9QiGH">http://t.co/gHF7U9QiGH</a> by @<a href="https://twitter.com/jk_keller">@jk_keller</a> <a href="http://t.co/PGJ3vzd1Vk">pic.twitter.com/PGJ3vzd1Vk</a></p>&mdash; Friends of Type (@friendsoftype) <a href="https://twitter.com/friendsoftype/status/512301672820133888">September 17, 2014</a></blockquote>',
  ],
];


// GLEANING THE FIFTH SCREEN
$ary_gleaning = [
  'twitter' => [
    // VIDEO
    '<blockquote class="twitter-tweet" lang="en"><p>Love this video by <a href="https://twitter.com/jk_keller">@jk_keller</a> Gleaning the Fifth Screen, Minority Report (screen test) <a href="http://t.co/QiS4Pv50">http://t.co/QiS4Pv50</a></p>&mdash; ████████████████████ (@alan_butler) <a href="https://twitter.com/alan_butler/statuses/280251510380691456">December 16, 2012</a></blockquote>',
  ],
  'facebook' => [
    // IMAGE - JK - Hashfail
    '<div class="fb-post" data-href="https://www.facebook.com/i.like.jk.keller/photos/a.10151183521842287.472664.141020527286/10151274494367287/?type=1" data-width="350"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/i.like.jk.keller/photos/a.10151183521842287.472664.141020527286/10151274494367287/?type=1">Post</a> by <a href="https://www.facebook.com/i.like.jk.keller">JK Keller</a>.</div></div>',
  ],
];


// DAILY PHOTO PROJECT
$ary_daily_photo = [
  'twitter' => [
    '<blockquote class="twitter-tweet" lang="en"><p><a href="http://t.co/ZQQgGTua4B">http://t.co/ZQQgGTua4B</a> &#10;watch this, it&#39;s really interesting</p>&mdash; vish (@VishalGossain) <a href="https://twitter.com/VishalGossain/statuses/415491261991100416">December 24, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>This is absolutely incredible <a href="http://t.co/r8qrOfxf">http://t.co/r8qrOfxf</a></p>&mdash; Dan Grose (@Dan_Grose) <a href="https://twitter.com/Dan_Grose/statuses/209017321216417793">June 2, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Amazing thing #3 &gt;&gt;&gt; <a href="http://t.co/ZVQSs7Bv">http://t.co/ZVQSs7Bv</a></p>&mdash; FƱ∏ƘΔGΣ∏DΔ (@Funkagenda) <a href="https://twitter.com/Funkagenda/statuses/172824490215088128">February 23, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p><a href="http://t.co/0OwuXiJn">http://t.co/0OwuXiJn</a>&#10;So cool a 8 years of a mans life in 2 minutes amazing <a href="https://twitter.com/search?q=%23mustwatch&amp;src=hash">#mustwatch</a></p>&mdash; dhivehiSoru (@dhivehi22) <a href="https://twitter.com/dhivehi22/statuses/192698137234767874">April 18, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>This vid blew my mind. 8 years of pics in 2mins. &gt;&gt; A daily photo project -JK Keller <a href="http://t.co/KByyU4Cm">http://t.co/KByyU4Cm</a> via <a href="https://twitter.com/jk_keller">@jk_keller</a></p>&mdash; Khumo• (@khumotherapy) <a href="https://twitter.com/khumotherapy/statuses/121966821342588928">October 6, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p><a href="http://t.co/nSW1EbD">http://t.co/nSW1EbD</a> - this is insaaaane.</p>&mdash; CJW (@caitlinJwatson) <a href="https://twitter.com/caitlinJwatson/statuses/108191109431312385">August 29, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>@Lauren_CarreBB What a sick guy.. &quot;age fast man&quot; the superpower to age.. <a href="https://twitter.com/search?q=%23supergoose&amp;src=hash">#supergoose</a> <a href="https://twitter.com/search?q=%23supertramp&amp;src=hash">#supertramp</a> <a href="http://t.co/9YnHx359">http://t.co/9YnHx359</a></p>&mdash; Jordy Dunne (@Jordy_Dunne) <a href="https://twitter.com/Jordy_Dunne/statuses/266128854811287552">November 7, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Pretty Dope!! RT “<a href="https://twitter.com/Funkagenda">@Funkagenda</a>: Amazing thing #3 &gt;&gt;&gt; <a href="http://t.co/pvTGhjsG">http://t.co/pvTGhjsG</a>”</p>&mdash; Xavier Jacome (@DjRipWorldWide) <a href="https://twitter.com/DjRipWorldWide/statuses/172840300589494274">February 24, 2012</a></blockquote>',
    // non-english
    '<blockquote class="twitter-tweet" lang="en"><p><a href="https://twitter.com/bruikbaar">@bruikbaar</a> oh, haha! Heb daar discipline niet voor denk ik. Je zal toch een dag missen... Check deze: wel cool. <a href="http://t.co/WOPnbz2Qeb">http://t.co/WOPnbz2Qeb</a></p>&mdash; Friso Gosliga (@frisogosliga) <a href="https://twitter.com/frisogosliga/statuses/424279655659864064">January 17, 2014</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p><a href="http://t.co/GRR4LgzQ">http://t.co/GRR4LgzQ</a> este tipo estaba mas al pedo que yo jaja</p>&mdash; Fer♔ (@mfercallejas) <a href="https://twitter.com/mfercallejas/statuses/149907649549447168">December 22, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>強風の中で彼と見つめあってる気がしてくる RT <a href="https://twitter.com/wtbw">@wtbw</a>: 今ではすっかり有名どころだわー　 毎日毎日自分の顔写真を淡々と載せ続けています。いや、スゴイ。どんどん男前になってますよ。<a href="http://t.co/cF8JLDfo">http://t.co/cF8JLDfo</a>　 <a href="https://twitter.com/search?q=%23wtbw%E3%81%8C%E5%8F%96%E3%82%8A%E4%B8%8A%E3%81%92%E3%81%9F2002%E5%B9%B4%E3%83%90%E3%82%AB%E8%A8%98%E4%BA%8B%E3%83%8D%E3%82%BF&amp;src=hash">#wtbwが取り上げた2002年バカ記事ネタ</a></p>&mdash; どういうことだ、じゅんみぃ　　 (@junmie110) <a href="https://twitter.com/junmie110/statuses/147498658114441216">December 16, 2011</a></blockquote>',  
    // JK
    '<blockquote class="twitter-tweet" lang="en"><p>please, I&#39;ve been taking <a href="https://twitter.com/search?q=%23selfies&amp;src=hash">#selfies</a> since 1998. <a href="http://t.co/lZXgrpoFbn">http://t.co/lZXgrpoFbn</a></p>&mdash; JK KELLER (@jk_keller) <a href="https://twitter.com/jk_keller/statuses/390901682068287488">October 17, 2013</a></blockquote>',
  ],
  'facebook' => [
    // IMAGE - JK - Daily Mail story
    '<div class="fb-post" data-href="https://www.facebook.com/i.like.jk.keller/posts/109581855757106" data-width="350"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/i.like.jk.keller/posts/109581855757106">Post</a> by <a href="https://www.facebook.com/i.like.jk.keller">JK Keller</a>.</div></div>',
  ],
  'googleplus' => [
    // VIDEO - Holy Crap ! Its brilliantly done, though watching it made me feel like i was tripping
    '<div class="g-post" data-href="https://plus.google.com/115393312769246249327/posts/iV3EDffsTxa"></div>',
  ],
  'pinterest' => [
    // grid - Takes a picture of himself every days since 1998. He compiles them into a super quick video. Pretty cool.
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/23362491786570531/"></a>',
    // grid - The photographer Jonathan Keller Keller found a creative way to document his life over the period of 8 years with daily photographs. Watch the "Living my life faster" video.
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/94223817173742300/"></a>',
    // average face - average text
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/332984966169012162/"></a>',
  ],
];


// SIMPSONS REALIGNED
$ary_simpsons = [
  'twitter' => [
    // no images
    '<blockquote class="twitter-tweet" lang="en"><p>Seriously amazing. A must watch for all Simpsons fans. &quot;Realigning My Thoughts On Jasper Johns&quot; <a href="http://t.co/mYfW7TxP">http://t.co/mYfW7TxP</a> via <a href="https://twitter.com/jk_keller">@jk_keller</a></p>&mdash; Tim Belonax (@timbelonax) <a href="https://twitter.com/timbelonax/statuses/212342862745047040">June 12, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p><a href="http://t.co/MIDurXzY">http://t.co/MIDurXzY</a> Hey, hey guys. Have an absolute mindfuck of a video series. (via Redactron on Tumblr)</p>&mdash; ＜ ꞌ ̲ ▪ꞌ＞ (@CHICAGO_lollie) <a href="https://twitter.com/CHICAGO_lollie/statuses/156996276649607169">January 11, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>OoOo! Play all on your computer&#10;<a href="http://t.co/27L4xnn4">http://t.co/27L4xnn4</a></p>&mdash; Patrick (@_PMurphy) <a href="https://twitter.com/_PMurphy/statuses/130455908760297473">October 30, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>&quot;The Simpsons&quot; Turn Into Cubist Art <a href="http://t.co/QfupiRFf53">http://t.co/QfupiRFf53</a> <a href="https://twitter.com/jk_keller">@jk_keller</a></p>&mdash; Bangstyle (@BangstyleTweets) <a href="https://twitter.com/BangstyleTweets/statuses/386461957240258560">October 5, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>A wonderful <a href="https://twitter.com/search?q=%23Simpsons&amp;src=hash">#Simpsons</a> fever dream by <a href="https://twitter.com/jk_keller">@jk_keller</a>. <a href="http://t.co/l6JWwdfCGX">http://t.co/l6JWwdfCGX</a> <a href="https://twitter.com/search?q=%23video&amp;src=hash">#video</a> <a href="https://twitter.com/search?q=%23audio&amp;src=hash">#audio</a></p>&mdash; Eric Nunez (@afternoonyez) <a href="https://twitter.com/afternoonyez/statuses/383016476958932992">September 25, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>YOU GUYS. <a href="http://t.co/uZsl82Nu">http://t.co/uZsl82Nu</a> This is the best video project. Involves auto-vectoring every frame of a Simpsons ep. <a href="http://t.co/926x6DXl">http://t.co/926x6DXl</a></p>&mdash; Karla Z. (@zusty) <a href="https://twitter.com/zusty/statuses/174198047499223040">February 27, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Video: imageoscillite: JK Keller destroyed season 10, episode 19 of The Simpsons. I’m in love.  via Kottke... <a href="http://t.co/sNyBHwjNI7">http://t.co/sNyBHwjNI7</a></p>&mdash; Chip Willis (@thechipwillis) <a href="https://twitter.com/thechipwillis/statuses/380360185149403136">September 18, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Artist <a href="https://twitter.com/jk_keller">@jk_keller</a> deconstructs The Simpsons into Cubist &amp; modern art abstractions: <a href="http://t.co/zX7QV3eDYP">http://t.co/zX7QV3eDYP</a></p>&mdash; PSFK (@PSFK) <a href="https://twitter.com/PSFK/statuses/381452782097924096">September 21, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>The Simpsons with All the Jokes Removed &amp; a Batch of Audio &amp; Video Filters Added, by JK Keller: <a href="http://t.co/q7zvtVHSOH">http://t.co/q7zvtVHSOH</a> ht Nat</p>&mdash; WFMU (@WFMU) <a href="https://twitter.com/WFMU/statuses/382878590452256769">September 25, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>“<a href="https://twitter.com/kottke">@kottke</a>: The Simpsons, deconstructed <a href="http://t.co/xqp8WFkntD">http://t.co/xqp8WFkntD</a>”&#10;&#10;This is the most frightening and disturbing things you&#39;ll ever watch</p>&mdash; Lutterworth Media (@LuttMedia) <a href="https://twitter.com/LuttMedia/statuses/380086011604516864">September 17, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>File under: &quot;perfect things to have playing at your next party&quot; -- &quot;The Simpsons, deconstructed&quot; <a href="http://t.co/tUSdx70NiU">http://t.co/tUSdx70NiU</a></p>&mdash; Chris Svenningsen (@hmmwhatsthis) <a href="https://twitter.com/hmmwhatsthis/statuses/380132551089598464">September 18, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Best Simpsons Art Project Ever RT “<a href="https://twitter.com/kottke">@kottke</a>: The Simpsons, deconstructed <a href="http://t.co/OeMG3Mizs8">http://t.co/OeMG3Mizs8</a>”</p>&mdash; Joe Sparrow (@ANewBandADay) <a href="https://twitter.com/ANewBandADay/statuses/380253060729434112">September 18, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>When my kids ask &quot;What was The Simpsons?&quot;, I&#39;m going to show them this. <a href="http://t.co/PA3dI8Qyxk">http://t.co/PA3dI8Qyxk</a></p>&mdash; Chris Pearson (@chrispsn) <a href="https://twitter.com/chrispsn/statuses/380330172680900612">September 18, 2013</a></blockquote>',
    // VIDEO
    '<blockquote class="twitter-tweet" lang="en"><p>This deconstructed episode of The Simpsons is perfect. Perfect. <a href="http://t.co/xTObpK4jqC">http://t.co/xTObpK4jqC</a> <a href="https://twitter.com/jk_keller">@jk_keller</a></p>&mdash; p.a.u.l. d.o.b.r.y. (@pdoughbrie) <a href="https://twitter.com/pdoughbrie/statuses/383719919163961344">September 27, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>this is JK Keller remixing an episode of the simpsons. it&#39;s important <a href="http://t.co/ttxkZtcU">http://t.co/ttxkZtcU</a></p>&mdash; Nic*Rad (@NicRad) <a href="https://twitter.com/NicRad/statuses/251381890060267520">September 27, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Really cool and weirdly unsettling deconstruction of a Simpsons episode by artist JK Keller. <a href="http://t.co/vN4GxzX6Vi">http://t.co/vN4GxzX6Vi</a> <a href="https://twitter.com/search?q=%23art&amp;src=hash">#art</a> <a href="https://twitter.com/search?q=%23VIDEO&amp;src=hash">#VIDEO</a></p>&mdash; Peter Thompson (@Petershed) <a href="https://twitter.com/Petershed/statuses/382104594706628609">September 23, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>CRAZIEST THING YOU&#39;LL SEE TODAY:&#10;&#10;Artist JK Keller took an episode of the Simpsons, ran the entire thing through... <a href="http://t.co/4vfr2W44co">http://t.co/4vfr2W44co</a></p>&mdash; Stephen Brooks (@rubberonion) <a href="https://twitter.com/rubberonion/statuses/382583922477248512">September 24, 2013</a></blockquote>',
  ],
  'facebook' => [
    // IMAGE - JK - cartoon brew
    '<div class="fb-post" data-href="https://www.facebook.com/i.like.jk.keller/posts/259175654161929" data-width="350"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/i.like.jk.keller/posts/259175654161929">Post</a> by <a href="https://www.facebook.com/i.like.jk.keller">JK Keller</a>.</div></div>',
  ],
  'googleplus' => [
    // VIDEO - Is this the hellsons?﻿
    '<div class="g-post" data-href="https://plus.google.com/118324919891531187535/posts/GvTeoisZqNR"></div>',
    // VIDEO - Artist +JK Keller used software to turn every frame of a Simpsons intro segment into vector shapes that were then processed in Illustrator. The result: a hallucinatory, hacked and stretched remix that is wholly explainable by its title: Realigning My Thoughts on Jasper Johns (intro) Brilliant stuff. 
    '<div class="g-post" data-href="https://plus.google.com/109991831337346806782/posts/GigHvGy6Rf9"></div>',
    // ANI.GIF - JK
    '<div class="g-post" data-href="https://plus.google.com/109067576934337259102/posts/2kowBzECLHU"></div>',
  ],
/*
  'instagram' => [
    // grid of 9 video
    '<iframe src="//instagram.com/p/jgQIUnwxjH/embed/" width="600" height="600" frameborder="0" scrolling="no" allowtransparency="true"></iframe>',
  ],
*/
  'pinterest' => [
    // just a link, but with website screenshot
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/323485185705849696/"></a>',
  ],
  'youtube' => [
    // 12 seconds of screen
    '<iframe width="560" height="315" src="//www.youtube.com/embed/kNWgUO8fgr0" frameborder="0" allowfullscreen></iframe>',
  ],
];


// BINARYS FUGUE
$ary_binarys_fugue = [
  'twitter' => [
    // IMAGE
    '<blockquote class="twitter-tweet" lang="en"><p>Playful yet eerie generative Gif series by <a href="https://twitter.com/jk_keller">@jk_keller</a>. <a href="http://t.co/5Q9mVIo3hT">http://t.co/5Q9mVIo3hT</a> <a href="http://t.co/tFQnjTvVxQ">pic.twitter.com/tFQnjTvVxQ</a></p>&mdash; Lex (@whoismrlex) <a href="https://twitter.com/whoismrlex/statuses/440165843293331456">March 2, 2014</a></blockquote>',
    // no images
    '<blockquote class="twitter-tweet" lang="en"><p><a href="https://twitter.com/leckybang">@leckybang</a> Since you guys have a thing for GIF&#39;s, check out &quot;Binary&#39;s Forth Fugue&quot; - <a href="http://t.co/j8GKB9Cz">http://t.co/j8GKB9Cz</a> . It&#39;s sort of neat.</p>&mdash; Adam Tow (@atow3212) <a href="https://twitter.com/atow3212/statuses/128851174987276289">October 25, 2011</a></blockquote>',
  ],
  'googleplus' => [
    // ANI.GIF - JK
    '<div class="g-post" data-href="https://plus.google.com/109067576934337259102/posts/3YrHLkSAahp"></div>',
    // ANI.GIF - absolut
    '<div class="g-post" data-href="https://plus.google.com/106343149419174979990/posts/LSngUWBXNWA"></div>',
  ],
  'pinterest' => [
    // ANI.GIF
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/633387417246640/"></a>',
  ],
];


// IPHONE OIL PAINTINGS
$ary_iphone_oil = [
  'twitter' => [
    // No Images
    '<blockquote class="twitter-tweet" lang="en"><p>This is the most original Tumblr I have ever come across. <a href="http://t.co/NANXraFAa9">http://t.co/NANXraFAa9</a></p>&mdash; Brianna (@alohabriannaa) <a href="https://twitter.com/alohabriannaa/statuses/399796274355904512">November 11, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Love this ridiculous, relatable and unique use of phone grime: <a href="https://twitter.com/search?q=%23iPhone&amp;src=hash">#iPhone</a> Oil Paintings: <a href="http://t.co/abQck9buN2">http://t.co/abQck9buN2</a></p>&mdash; Bond Group (@Bond_Group) <a href="https://twitter.com/Bond_Group/statuses/388396468660609024">October 10, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>WAIT so I&#39;m not the only one! This is great.&#10;<a href="http://t.co/5HcO2Jav4T">http://t.co/5HcO2Jav4T</a></p>&mdash; Danica Wyson (@daniwyson) <a href="https://twitter.com/daniwyson/statuses/388381502414675968">October 10, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>I&#39;m loving these <a href="https://twitter.com/jk_keller">@jk_keller</a> oil paintings: <a href="http://t.co/LbsQXEJUDF">http://t.co/LbsQXEJUDF</a></p>&mdash; Addie Wagenknecht (@wheresaddie) <a href="https://twitter.com/wheresaddie/statuses/386104852486443008">October 4, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Enjoying JK Keller&#39;s iPhone Oil Paintings:&#10;&#10;<a href="http://t.co/3NdrZhKJp7">http://t.co/3NdrZhKJp7</a> <a href="http://t.co/p91nMwFINh">http://t.co/p91nMwFINh</a></p>&mdash; Daan Roukens (@NRFTO) <a href="https://twitter.com/NRFTO/statuses/355582773857234944">July 12, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Yuck. iPhone Oil Paintings <a href="http://t.co/I1kR6exxmH">http://t.co/I1kR6exxmH</a></p>&mdash; jim mollica (@Mastershake1) <a href="https://twitter.com/Mastershake1/statuses/338280150011637763">May 25, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p><a href="https://twitter.com/UAL_MyDigLife">@UAL_MyDigLife</a> Love JK Keller&#39;s greasy fingers <a href="http://t.co/Qz6wBqh5Rn">http://t.co/Qz6wBqh5Rn</a></p>&mdash; Charlotte Webb (@otheragent) <a href="https://twitter.com/otheragent/statuses/321186313183305728">April 8, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>OMFG qué buena idea <a href="http://t.co/NiDpNp6k">http://t.co/NiDpNp6k</a> <a href="https://twitter.com/search?q=%23procrastinaci%C3%B3n&amp;src=hash">#procrastinación</a> <a href="https://twitter.com/search?q=%23fb&amp;src=hash">#fb</a></p>&mdash; El wn wn, wn (@Darkenx) <a href="https://twitter.com/Darkenx/statuses/284365940710313984">December 27, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Makes me smile, iPhone oil paintings&#10;<a href="http://t.co/L2w9bCBz">http://t.co/L2w9bCBz</a></p>&mdash; Oltmans van Niekerk (@OltmansvNiekerk) <a href="https://twitter.com/OltmansvNiekerk/statuses/283560573935955968">December 25, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>This is disgusting. But props to the person for seeing the opportunity. <a href="http://t.co/jeM42DPq">http://t.co/jeM42DPq</a></p>&mdash; Heli Prajapati (@heli_llama) <a href="https://twitter.com/heli_llama/statuses/280166744360878080">December 16, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>So tired of seeing &#39;iPhone oil paintings&#39; on my dash. <a href="https://twitter.com/search?q=%23nothingspecial&amp;src=hash">#nothingspecial</a></p>&mdash; Juni Xu (@junixu) <a href="https://twitter.com/junixu/statuses/261171478718971904">October 24, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>This is the best art/joke I&#39;ve seen in ages. Er, it is a joke, isn&#39;t it? iPhone Oil Paintings: <a href="http://t.co/HKQ1trcE">http://t.co/HKQ1trcE</a></p>&mdash; Matt Muir (@Matt_Muir) <a href="https://twitter.com/Matt_Muir/statuses/258142864406634497">October 16, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>this dude made art with his face grease, inspiration for those post-cookout summer days <a href="http://t.co/qeXgOf2M">http://t.co/qeXgOf2M</a></p>&mdash; nārada (@weirdrap) <a href="https://twitter.com/weirdrap/statuses/258036963259596800">October 16, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Gross if its not your own face-oil, still cool nonetheless RT <a href="https://twitter.com/Booooooom">@Booooooom</a>: haha iPhone Oil Paintings - <a href="http://t.co/3XheihKD">http://t.co/3XheihKD</a></p>&mdash; Lindsay Trevors (@lindzington) <a href="https://twitter.com/lindzington/statuses/257901738525343744">October 15, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>“<a href="https://twitter.com/Booooooom">@Booooooom</a>: iPhone Oil Paintings - <a href="http://t.co/ohHcWXAn">http://t.co/ohHcWXAn</a>” probably the best iPhone related work ever.</p>&mdash; David James Clark (@davidjc_) <a href="https://twitter.com/davidjc_/statuses/257884506256703488">October 15, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Proof that you can find art anywhere <a href="http://t.co/azrFdeXA">http://t.co/azrFdeXA</a> <a href="https://twitter.com/search?q=%23iPhone&amp;src=hash">#iPhone</a></p>&mdash; Mark Ciavarella (@MarkToddC) <a href="https://twitter.com/MarkToddC/statuses/257884274202664961">October 15, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>this is kinda gross but kinda awesome. iphone oil paintings by jk keller: <a href="http://t.co/JeiVViMC">http://t.co/JeiVViMC</a></p>&mdash; madeleine (@madeleinepascal) <a href="https://twitter.com/madeleinepascal/statuses/257846571205533696">October 15, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>I always do these as procrastinations too, but for <a href="https://twitter.com/jk_keller">@jk_keller</a> to turn them in to gifs is genius... <a href="http://t.co/ErwcLA0J">http://t.co/ErwcLA0J</a></p>&mdash; Misha Newby (@mishanewby) <a href="https://twitter.com/mishanewby/statuses/257797863474606080">October 15, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Love this, a thoroughly modern piece of art- Although the final image is super creepy!&#10;<a href="http://t.co/NyyQ2OIw">http://t.co/NyyQ2OIw</a></p>&mdash; Matt Cotterill (@mattcotterill) <a href="https://twitter.com/mattcotterill/statuses/255779724784189440">October 9, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>changed my perspective on life. RT <a href="https://twitter.com/annie_werner">@annie_werner</a>: iphoneoilpaintings: iPhone Oil Painting #1. <a href="http://t.co/eMIlttuQ">http://t.co/eMIlttuQ</a></p>&mdash; Liz Una Kim (@LizUnaKim) <a href="https://twitter.com/LizUnaKim/statuses/253343788964139008">October 3, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>I love this. It&#39;s so... honest. &quot;iPhone Oil Painting #4&quot; <a href="http://t.co/aoP6iiT2">http://t.co/aoP6iiT2</a></p>&mdash; Willa Köerner (@willak) <a href="https://twitter.com/willak/statuses/251451072630108163">September 27, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Painting your <a href="https://twitter.com/search?q=%23iPhone&amp;src=hash">#iPhone</a> with the grease from your face. This is poetry: <a href="http://t.co/yKCLdexk">http://t.co/yKCLdexk</a></p>&mdash; Jessica Kinkade (@Jessiedarlin) <a href="https://twitter.com/Jessiedarlin/statuses/251334797383856128">September 27, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Mobile phone art has surely been trending... but NY artist <a href="https://twitter.com/jk_keller">@jk_keller</a> has raised the bar with his iPhone oil paintings <a href="http://t.co/OmOrmZP1">http://t.co/OmOrmZP1</a></p>&mdash; artsHub (@artsHub) <a href="https://twitter.com/artsHub/statuses/249689557870723072">September 23, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>How <a href="https://twitter.com/search?q=%23greasy&amp;src=hash">#greasy</a> is this artist... Can&#39;t say he&#39;s an <a href="https://twitter.com/search?q=%23artist&amp;src=hash">#artist</a> even! <a href="http://t.co/dynElj9B">http://t.co/dynElj9B</a></p>&mdash; arvind krishnan (@arv140) <a href="https://twitter.com/arv140/statuses/249441286317277184">September 22, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Speechless: JK Keller turns a greasy iPhone into a work of art <a href="http://t.co/HP7TK5G7">http://t.co/HP7TK5G7</a> via <a href="https://twitter.com/dailydot">@dailydot</a></p>&mdash; Scratch (@ Viacom) (@ScratchSays) <a href="https://twitter.com/ScratchSays/statuses/249219675739799553">September 21, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Best Tumblr I&#39;ve seen for a while. iPhone oil paintings. <a href="http://t.co/9LuQLSqY">http://t.co/9LuQLSqY</a></p>&mdash; Andrew Davies (@awrd) <a href="https://twitter.com/awrd/statuses/248383317165105153">September 19, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Oil on iphone paintings with GIFs by artist JK Keller, hilarious and awesome interview by <a href="https://twitter.com/chaykak">@chaykak</a> on <a href="https://twitter.com/hyperallergic">@hyperallergic</a>: <a href="http://t.co/Cv2QzTPA">http://t.co/Cv2QzTPA</a></p>&mdash; Joann Kim Nunez (@UPD0WNACR0SS) <a href="https://twitter.com/UPD0WNACR0SS/statuses/248070785837699072">September 18, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Verrrrrrrry slow news day on <a href="https://twitter.com/mashable">@mashable</a> by the looks of this <a href="http://t.co/g5LcA7Hn">http://t.co/g5LcA7Hn</a> <a href="https://twitter.com/search?q=%23worstepisodeever&amp;src=hash">#worstepisodeever</a></p>&mdash; Ian Byrne (@ianobyrno) <a href="https://twitter.com/ianobyrno/statuses/247809722282029058">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>iPhone Oil paintings <a href="http://t.co/DSYVuFSe">http://t.co/DSYVuFSe</a> I&#39;m not grossed out, I&#39;m appalled that this is what is now classed as art. RT <a href="https://twitter.com/mashable">@mashable</a></p>&mdash; Niven Ranchhod (@Nivicious88) <a href="https://twitter.com/Nivicious88/statuses/247791478124978176">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>&quot;Art&quot; created with face grease. This is grosser than a sandwich of spiders. <a href="http://t.co/jYUZlL71">http://t.co/jYUZlL71</a></p>&mdash; Scott W Morris (@HarlechFarm) <a href="https://twitter.com/HarlechFarm/statuses/247760128500170752">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>This is the story that made me officially take <a href="https://twitter.com/mashable">@mashable</a> out of my RSS reader: <a href="http://t.co/wrOa2Hz2">http://t.co/wrOa2Hz2</a> WTFFF?????</p>&mdash; Courtney Smith (@tuxedopants) <a href="https://twitter.com/tuxedopants/statuses/247731265816641538">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Gross and Neat. The best mixture. <a href="http://t.co/OIWDbeWg">http://t.co/OIWDbeWg</a></p>&mdash; Aaron Rowell (@Psychoroll) <a href="https://twitter.com/Psychoroll/statuses/247726797096095745">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>We&#39;re intrigued as well.. RT <a href="https://twitter.com/JakeLaSota">@jakelasota</a>: love the gifs: Artist Uses Oil From His Face To Create ‘iPhone Oil Paintings’ <a href="http://t.co/hh6vRc92">http://t.co/hh6vRc92</a></p>&mdash; Weisman Art Museum (@weismanart) <a href="https://twitter.com/weismanart/statuses/247726215459397633">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Ugh... what&#39;s next? Toilet Stall Fecal Paintings?! &quot;Artist Uses Oil From His Face To Create ‘iPhone Oil Paintings&#39; &quot; <a href="http://t.co/ZpXiK5Of">http://t.co/ZpXiK5Of</a></p>&mdash; Jas Romain (@the_Jasser) <a href="https://twitter.com/the_Jasser/statuses/247720025190973441">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>This dude got famous for that? Why aren&#39;t I and like every other teen famous then?! <a href="http://t.co/fg1j7ens">http://t.co/fg1j7ens</a> this is so stupid haha</p>&mdash; Christian (@Christianx14) <a href="https://twitter.com/Christianx14/statuses/247718370856816641">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>This is exactly the sort of stupid shit that gives modern art a bad name: <a href="http://t.co/zYAUvdCs">http://t.co/zYAUvdCs</a>&#10;It&#39;s so fucking stupid!</p>&mdash; Arturo Vergara (@ArturoVM) <a href="https://twitter.com/ArturoVM/statuses/247714415007391744">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Creative and clever or just plain gross? An artist is using his iPhone as a canvas... but he&#39;s not exactly using... <a href="http://t.co/cnATrGWk">http://t.co/cnATrGWk</a></p>&mdash; Ken Foote (@texastvpd) <a href="https://twitter.com/texastvpd/statuses/247688781480722432">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Ewww! That said I also mights start copying this idea. iPhone &#39;oil paintings&#39; created from screen smudges <a href="http://t.co/qqHfwRgW">http://t.co/qqHfwRgW</a> via <a href="https://twitter.com/CNET">@CNET</a></p>&mdash; stephna (@stephna) <a href="https://twitter.com/stephna/statuses/247820196507701249">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Hilarious! My Apple fanboy friends are artists! : iPhone &#39;oil paintings&#39; created from screen smudges - <a href="http://t.co/p5XXq9hk">http://t.co/p5XXq9hk</a></p>&mdash; Adrian Lee (@AdrianLeeSA) <a href="https://twitter.com/AdrianLeeSA/statuses/247950187669094400">September 18, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>This is gross...A waste of a perfectly good iPhone -- iPhone ‘Paintings’ Created Using Oil from Human Pores [PICS] <a href="http://t.co/DubbNK4I">http://t.co/DubbNK4I</a></p>&mdash; Ben Nusekabel (@bennusekabel) <a href="https://twitter.com/bennusekabel/statuses/247677809655427073">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Headlines that make you want to punch yourself in the face, # 2 in a series: &quot;iPhone ‘Paintings’ Created Using Oil from Human Pores&quot;</p>&mdash; The Social Climber (@_socialclimber_) <a href="https://twitter.com/_socialclimber_/statuses/247673775791960064">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>iPhone oil paintings is the stupidest thing I&#39;ve seen all day. The &quot;artist&quot; who did that is an idiot. Here&#39;s a suggestion, get a real job.</p>&mdash; Nelson M. (@nelmosays) <a href="https://twitter.com/nelmosays/statuses/247673078199488513">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>IPhone paintings using the oil from your face. Gross but a rather ingenious idea don&#39;t you think? <a href="http://t.co/zqQ6QCkB">http://t.co/zqQ6QCkB</a></p>&mdash; Jelly-like Creature (@jellomelly) <a href="https://twitter.com/jellomelly/statuses/247668543422857216">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>The world is complete <a href="http://t.co/fVjLD4b4">http://t.co/fVjLD4b4</a> The peak of humanity has been reached.</p>&mdash; Kalle Määttä (@kallemaatta) <a href="https://twitter.com/kallemaatta/statuses/247624044533411840">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>.<a href="https://twitter.com/Nick_Frost">@Nick_Frost</a> logs on and shares this: <a href="http://t.co/5kI3MXvJ">http://t.co/5kI3MXvJ</a> Monday is instantly better.</p>&mdash; Laura Shortridge (@DiscordianKitty) <a href="https://twitter.com/DiscordianKitty/statuses/247600720063377408">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Morning dose of disgusting &#39;art&#39; has happened: iPhone oil paintings: <a href="http://t.co/6Uhygy38">http://t.co/6Uhygy38</a></p>&mdash; Yashas Mitta (@yashasmitta) <a href="https://twitter.com/yashasmitta/statuses/247563135534379008">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>I tolerated a lot of stupid shit in art school, but eff this. <a href="http://t.co/klWFqnkg">http://t.co/klWFqnkg</a></p>&mdash; Pafford (@pafford) <a href="https://twitter.com/pafford/statuses/247560700698955776">September 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>these iphone oil paintings (made with face smearing on screen) gifs on <a href="https://twitter.com/TodayTomorrow">@TodayTomorrow</a> are hilarious <a href="http://t.co/xCQLHZ3H">http://t.co/xCQLHZ3H</a></p>&mdash; NOTCOT (@NOTCOT) <a href="https://twitter.com/NOTCOT/statuses/247454334961475585">September 16, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p><a href="http://t.co/04ytc3Hq">http://t.co/04ytc3Hq</a> cracked a code i thought uncrackable the code of perspective oriented iphone scrub art</p>&mdash; sean paul (@linckolnMJ) <a href="https://twitter.com/linckolnMJ/statuses/246081603246370816">September 13, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>So this exists and is pretty awesome. iPhone Oil Paintings <a href="http://t.co/4PTYi2Sr">http://t.co/4PTYi2Sr</a></p>&mdash; Sarah Coffey (@_sarahcoffey) <a href="https://twitter.com/_sarahcoffey/statuses/246004772291887104">September 12, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>pretty disgusting, disgustingly pretty…yes <a href="https://twitter.com/jk_keller">@jk_keller</a>: iPhone Oil Paintings, my new project: <a href="http://t.co/gTVL7jSs">http://t.co/gTVL7jSs</a> </p>&mdash; Keetra Dean Dixon (@keetradeandixon) <a href="https://twitter.com/keetradeandixon/statuses/245888402006888448">September 12, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Wanna see something neat? Check out these amazing &#39;iPhone Oil Paintings&#39; - <a href="http://t.co/6S40vddY">http://t.co/6S40vddY</a> Screen smudges never looked so beautiful.</p>&mdash; Chris de Jong (@dejong) <a href="https://twitter.com/dejong/statuses/245961487494033408">September 12, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>📱👋👆👈👆👇👉👈👈☝👆👆👉 = 🎨🏆 @ <a href="http://t.co/p2A44fpN">http://t.co/p2A44fpN</a></p>&mdash; JK KELLER (@jk_keller) <a href="https://twitter.com/jk_keller/statuses/245963269565718528">September 12, 2012</a></blockquote>',
    // IMAGE
    '<blockquote class="twitter-tweet" lang="en"><p>This is incredible <a href="http://t.co/8naz9Vu8">http://t.co/8naz9Vu8</a></p>&mdash; Loopcam (@Loopcam) <a href="https://twitter.com/Loopcam/statuses/245984409348608000">September 12, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>iPhone Oil Paintings by JK Keller. Really great. <a href="http://t.co/RdFI3Vcv">http://t.co/RdFI3Vcv</a></p>&mdash; Rob Walker (@notrobwalker) <a href="https://twitter.com/notrobwalker/statuses/247754113360736258">September 17, 2012</a></blockquote>',
    // article
  ],
  'googleplus' => [
    // IMAGE - Okay so you know me...I'm all about being creative but also know that I'm a bit of a germaphobe and the technique used to create these pieces are ummmm...not something I would do...but I can dig brother's "process"
    '<div class="g-post" data-href="https://plus.google.com/108481066879498819123/posts/RAguhZvzxQu"></div>',
    // ANI.GIF - I am liking this..﻿
    '<div class="g-post" data-href="https://plus.google.com/105704056444296396261/posts/KDu6MyiNEXa"></div>',
    // ANI.GIF - JK
    '<div class="g-post" data-href="https://plus.google.com/109067576934337259102/posts/2cLHyhnude3"></div>',
  ],
  'pinterest' => [
    // iPhone Oil Paintings Put Greasy Fingers to Good Use
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/17662623509777507/"></a>',
    // iPhone Oil Paintings by artist JK Keller Watcch iriginal gi, its an amazing idea and realization
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/37154765647149355/"></a>',
    // iPhone Oil Paintings by JK Keller It's like what I do with every touch screen phone I get my hands on. Minus the facial oils.
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/378232068674548813/"></a>',
    // grid of 4 - iPhone Oil Paintings by JK Keller. / #finger #paintbrush
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/96757091965847196/"></a>',
  ],
];


// PLUS1MILLION
$ary_plusmillion = [
  'facebook' => [
    // JK
    '<div class="fb-post" data-href="https://www.facebook.com/i.like.jk.keller/posts/203092403074190" data-width="350"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/i.like.jk.keller/posts/203092403074190">Post</a> by <a href="https://www.facebook.com/i.like.jk.keller">JK Keller</a>.</div></div>',
  ],
];


// SCATTERSIRI
$ary_siri = [
  'facebook' => [
    // VIDEO - JK
    '<div class="fb-post" data-href="https://www.facebook.com/i.like.jk.keller/posts/334779753231665" data-width="350"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/i.like.jk.keller/posts/334779753231665">Post</a> by <a href="https://www.facebook.com/i.like.jk.keller">JK Keller</a>.</div></div>',
  ],
  'pinterest' => [
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/172966441909151647/"></a>',
  ],
];


// LAYERED WAX
$ary_wax = [
  'twitter' => [
    // IMAGE
    '<blockquote class="twitter-tweet" lang="en"><p>Layered wax type by Keetra Dean Dixon and Jonathan Keller Keller. We&#39;re inspired. By wax. <a href="http://t.co/ZxRe5adHcu">http://t.co/ZxRe5adHcu</a> <a href="http://t.co/HuO8wscF6p">http://t.co/HuO8wscF6p</a></p>&mdash; Formation (@Formation) <a href="https://twitter.com/Formation/statuses/337929923127803905">May 24, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Layered wax type ...nicely done!&#10;<a href="http://t.co/kY0UJlcS">http://t.co/kY0UJlcS</a> <a href="http://t.co/KqT4I7qh">pic.twitter.com/KqT4I7qh</a></p>&mdash; smoraes (@smoraes) <a href="https://twitter.com/smoraes/statuses/260072665677713408">October 21, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Wax looks intact! :) MT <a href="https://twitter.com/aggietoppins">@aggietoppins</a>: So nice to see Graphic Design: Now in Production again. <a href="http://t.co/iplX7BlUqB">pic.twitter.com/iplX7BlUqB</a></p>&mdash; JK KELLER (@jk_keller) <a href="https://twitter.com/jk_keller/statuses/396335651245023233">November 1, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Photo: Keetra and JK at governors island! (Taken with Instagram) <a href="http://t.co/s6zkzkTX">http://t.co/s6zkzkTX</a></p>&mdash; brett renfer (@robotconscience) <a href="https://twitter.com/robotconscience/statuses/211886877035347969">June 10, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Loving this <a href="https://twitter.com/search?q=%23typography&amp;src=hash">#typography</a> made from layers of wax <a href="http://t.co/0etb4UnGd0">pic.twitter.com/0etb4UnGd0</a></p>&mdash; Carter Wong design (@carterwongthink) <a href="https://twitter.com/carterwongthink/statuses/409006274152366082">December 6, 2013</a></blockquote>',
    // Article
    '<blockquote class="twitter-tweet" lang="en"><p>fantastic 3D type pieces by artist and designer Keetra Dean Dixon, moulded from multiple layers of wax. <a href="http://t.co/fVCh0r3D">http://t.co/fVCh0r3D</a></p>&mdash; Creative Bloq (@CreativeBloq) <a href="https://twitter.com/CreativeBloq/statuses/266072727029436416">November 7, 2012</a></blockquote>',
    // No Images
    '<blockquote class="twitter-tweet" lang="en"><p>This is proper cool... typefaces made out of layered wax <a href="http://t.co/kLiXfoox">http://t.co/kLiXfoox</a></p>&mdash; Allan Blair (@Allan_Blair) <a href="https://twitter.com/Allan_Blair/statuses/262843194209861633">October 29, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Beautiful layered wax type. Via <a href="https://twitter.com/Explorer">@Explorer</a> <a href="http://t.co/SUYAAmg5">http://t.co/SUYAAmg5</a></p>&mdash; Kriti Monga (@turmericdesign) <a href="https://twitter.com/turmericdesign/statuses/262658914817032194">October 28, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Some Friday morning super smooth type for you. Layered Wax Type - 8 Faces magazine Keetra Dean... <a href="http://t.co/HvLLHKmR">http://t.co/HvLLHKmR</a></p>&mdash; C A R O L SOUTAR (@CarolSoutar) <a href="https://twitter.com/CarolSoutar/statuses/261712368621465600">October 26, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>It&#39;s as if geodes could talk: <a href="http://t.co/1wxInzRA">http://t.co/1wxInzRA</a></p>&mdash; Bethanie (@BNPQOE) <a href="https://twitter.com/BNPQOE/statuses/261524531884195840">October 25, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Today in <a href="https://twitter.com/search?q=%23TypeWorship&amp;src=hash">#TypeWorship</a>: A Mix Between Wax Layering &amp; Gobstoppering <a href="http://t.co/mioNzmvv">http://t.co/mioNzmvv</a></p>&mdash; Fitting Group (@brandspanking) <a href="https://twitter.com/brandspanking/statuses/261512637492367360">October 25, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>In the current issue of 8 Faces, Keetra Dean Dixon reveals how these fantastic wax pieces a made… <a href="http://t.co/8IpdlOyr">http://t.co/8IpdlOyr</a>&#10;<a href="https://twitter.com/search?q=%23typography&amp;src=hash">#typography</a></p>&mdash; Type Worship (@typeworship) <a href="https://twitter.com/typeworship/statuses/258699853431992321">October 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>layered wax type: one of the most interesting type stuff i&#39;ve recently seen <a href="http://t.co/20UmhehQ">http://t.co/20UmhehQ</a></p>&mdash; Didem Ogmen (@didemogmen) <a href="https://twitter.com/didemogmen/statuses/130920241546018818">October 31, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Gorgeous layered wax typography <a href="http://t.co/hmJYceqf">http://t.co/hmJYceqf</a></p>&mdash; Maria Popova (@brainpicker) <a href="https://twitter.com/brainpicker/statuses/262640416770367489">October 28, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Layered wax typography, absolutely gorgeous <a href="http://t.co/hmJYceqf">http://t.co/hmJYceqf</a></p>&mdash; Maria Popova (@brainpicker) <a href="https://twitter.com/brainpicker/statuses/261628989867712512">October 26, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Bored of seeing typography on paper? Then why not try typography out of WAX » <a href="http://t.co/dhF0esji">http://t.co/dhF0esji</a></p>&mdash; Mat Dolphin (@MatDolphin) <a href="https://twitter.com/MatDolphin/statuses/261445413540884480">October 25, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>We lover these wax typography pieces! <a href="http://t.co/2xcYwoAq">http://t.co/2xcYwoAq</a> <a href="https://twitter.com/search?q=%23design&amp;src=hash">#design</a> <a href="https://twitter.com/search?q=%23typography&amp;src=hash">#typography</a></p>&mdash; Milo&amp;Co (@miloandgoodco) <a href="https://twitter.com/miloandgoodco/statuses/261235726874722304">October 24, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>How cool. 3D typography in layers of colored wax ➽ <a href="http://t.co/lhF3YPSS">http://t.co/lhF3YPSS</a> via <a href="https://twitter.com/thevisualnews">@thevisualnews</a></p>&mdash; kettle (@kettlenyc) <a href="https://twitter.com/kettlenyc/statuses/260787635776258048">October 23, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Rad 3D typography in thick slabs of wax. <a href="http://t.co/qwP81iGp">http://t.co/qwP81iGp</a></p>&mdash; Lifelounge (@Lifelounge) <a href="https://twitter.com/Lifelounge/statuses/260593513954164736">October 23, 2012</a></blockquote>',
  ],
  'instagram' => [
    '<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="4" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://instagram.com/p/LtA2bfuSMZ/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_top">Keetra and JK at governors island!</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A photo posted by Brett Renfer (@robotconscience) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2012-06-10T18:25:37+00:00">Jun 10, 2012 at 11:25am PDT</time></p></div></blockquote>',
/*
    '<iframe class="instagram" src="//instagram.com/p/YA-dOSDA-I/embed/" width="600" height="600" frameborder="0" scrolling="no" allowtransparency="true"></iframe>',
    '<iframe class="instagram" src="//instagram.com/p/OPi8XYonCU/embed/" width="600" height="600" frameborder="0" scrolling="no" allowtransparency="true"></iframe>',
*/
    '<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="4" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://instagram.com/p/mV-C_uCLWW/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_top">Now in Production: Keetra Dean Dixon #risd #vcfa #mashup</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A photo posted by Nikki Juen (@nikkijuen) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2014-04-03T21:46:13+00:00">Apr 3, 2014 at 2:46pm PDT</time></p></div></blockquote>',
  ],
  'pinterest' => [
    // Layered wax, looks like quartz. Keetra Dean Dixon, "I've Been Thinking of You for a While."
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/183592122279821252/"></a>',
    // A collaboration piece made by jk-keller.com and From Keetra which I have admired for a while now. The type is made from layers of wax, lovely.
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/179229260140381656/"></a>',
    // Layered wax typography, absolutely gorgeous – a fine addition to other beautiful 3D type. (↬ Quipsologies)
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/206321226650352409/"></a>',
    // Mesmerizing, Marbled Rings of Color: Layered Wax Type | Jeannie Huang
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/374361787746678995/"></a>',
    // Mesmerizing, Marbled Rings of Color: Layered Wax Type
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/39547302949591013/"></a>',
    // Layered Wax Type by Keetra Dean Dixon and Jonathan Keller Keller - would be SO cool to do w/ teens!
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/260857003388781920/"></a>',
    // i love text based art. duh. by keetra dean dixon.
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/233694668133515979/"></a>',
    // WAX! I totally thought this was a geode
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/174233079303374930/"></a>',
  ],
];


// FUCKING-WINDOWS
$ary_fucking_windows = [
  'twitter' => [
    '<blockquote class="twitter-tweet" lang="en"><p>Responsive Design Yourself! ;) <a href="http://t.co/xHguk4GovG">http://t.co/xHguk4GovG</a></p>&mdash; Christophe Lauer (@clauer) <a href="https://twitter.com/clauer/statuses/334301618713546752">May 14, 2013</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>In other news, I could do this all day. http://www.fucking-windows.com (Thanks, <a href="https://twitter.com/kkwalker">@kkwalker</a>.)</p>&mdash; Mig Reyes (@migreyes) <a href="https://twitter.com/migreyes/statuses/9594526042">February 24, 2010</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>finally hit the 1K tweet mark. I am complete. <a href="http://t.co/q9pEwok4">http://t.co/q9pEwok4</a></p>&mdash; JK KELLER (@jk_keller) <a href="https://twitter.com/jk_keller/statuses/195933446844071936">April 27, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Rudely named. Right on the money. This site redefines responsive design! <a href="http://t.co/zvYH55zw">http://t.co/zvYH55zw</a> (be sure to check all the examples)</p>&mdash; Alastair Dant (@ajdant) <a href="https://twitter.com/ajdant/statuses/180631354017452032">March 16, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>the best use of html/css ever RT <a href="https://twitter.com/vennsoh">@vennsoh</a>: <a href="http://t.co/dAXiQ6qF">http://t.co/dAXiQ6qF</a></p>&mdash; Robbie Boyd (@robbienz) <a href="https://twitter.com/robbienz/statuses/180416767800246274">March 15, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Crazy examples of responsive webdesign | <a href="http://t.co/AMdZCA2D">http://t.co/AMdZCA2D</a></p>&mdash; SimplyGreat (@SimplyGreat) <a href="https://twitter.com/SimplyGreat/statuses/180288938248912897">March 15, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>There&#39;s something quite satisfying about resizing this window --&gt; <a href="http://t.co/5ZmbCE2F">http://t.co/5ZmbCE2F</a> via <a href="https://twitter.com/Logobird">@Logobird</a></p>&mdash; Paul Galbraith (@paulgalbraith) <a href="https://twitter.com/paulgalbraith/statuses/159277086765350912">January 17, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Hours of skool kid fun… &#10;Resize your window!&#10;<a href="http://t.co/BnRYJjq9">http://t.co/BnRYJjq9</a></p>&mdash; Dan Buckley (@Thumbcrumble) <a href="https://twitter.com/Thumbcrumble/statuses/156688477495365632">January 10, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Hahahhaha freaking brilliant <a href="http://t.co/OpQDX45V">http://t.co/OpQDX45V</a> <a href="https://twitter.com/search?q=%23fb&amp;src=hash">#fb</a></p>&mdash; L. Toussaint (@TuzoEnduro) <a href="https://twitter.com/TuzoEnduro/statuses/134304053189541889">November 9, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>This is juvenile, but it is funny as hell. <a href="http://t.co/yNvTFI3x">http://t.co/yNvTFI3x</a></p>&mdash; Hank Justice (@hankjustice) <a href="https://twitter.com/hankjustice/statuses/132463755715031041">November 4, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>best. responsive site. ever. <a href="http://t.co/3TeLPTC6">http://t.co/3TeLPTC6</a> via <a href="https://twitter.com/jk_keller">@jk_keller</a></p>&mdash; Jon Gold (@jongold) <a href="https://twitter.com/jongold/statuses/131745290502938624">November 2, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p><a href="http://t.co/6vsMwtz1">http://t.co/6vsMwtz1</a> Today in the office we are playing Browser resizing games with <a href="https://twitter.com/NEVERBLAND">@NEVERBLAND</a> ... we are cool!</p>&mdash; Purple.fr/Diary (@purplediary) <a href="https://twitter.com/purplediary/statuses/131737156539527168">November 2, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p><a href="http://t.co/AbKsNQcf">http://t.co/AbKsNQcf</a> - Glorious example of Responsive Web design</p>&mdash; Arve Systad (@ArveSystad) <a href="https://twitter.com/ArveSystad/statuses/131733205698101248">November 2, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Finally some good use of responsive design: <a href="http://t.co/EFBtXBRq">http://t.co/EFBtXBRq</a></p>&mdash; Trygve Lie (@trygve_lie) <a href="https://twitter.com/trygve_lie/statuses/131729726258679808">November 2, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>This is fun for 30 seconds <a href="http://t.co/AinXw4Ds">http://t.co/AinXw4Ds</a></p>&mdash; Iain C Reid (@iain_reid) <a href="https://twitter.com/iain_reid/statuses/131723176488083458">November 2, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>genius responsive website <a href="http://t.co/NhaZ5QmC">http://t.co/NhaZ5QmC</a> (the URL could be considered NSFW)</p>&mdash; Paolo Ciarrocca (@sherred) <a href="https://twitter.com/sherred/statuses/131685270864134144">November 2, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>Immaturity at its utter finest. Lol. via <a href="https://twitter.com/Steve_Worsley">@Steve_Worsley</a> RT <a href="https://twitter.com/KingScooty">@KingScooty</a>: <a href="http://t.co/6JpirtCX">http://t.co/6JpirtCX</a></p>&mdash; Tom Moitié (@tmoitie) <a href="https://twitter.com/tmoitie/statuses/131683783706542081">November 2, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>This is great .. just resize your browser window: <a href="http://t.co/P8GoCi4L">http://t.co/P8GoCi4L</a></p>&mdash; Travis (@TheDeuce22) <a href="https://twitter.com/TheDeuce22/statuses/127041909200920576">October 20, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p><a href="https://twitter.com/DeanVipond">@DeanVipond</a> This has to be the best resizing window trick I&#39;ve seen - <a href="http://t.co/tnsTCza">http://t.co/tnsTCza</a></p>&mdash; Paul Mackenzie (@prmack) <a href="https://twitter.com/prmack/statuses/113185257762725889">September 12, 2011</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>This is my favorite thing on the internet right now!!&#10;&#10;<a href="http://t.co/ZTsUVmP">http://t.co/ZTsUVmP</a>&#10;&#10;<a href="https://twitter.com/search?q=%23fuckingwindows&amp;src=hash">#fuckingwindows</a></p>&mdash; Scott Williams (@scottamusprime) <a href="https://twitter.com/scottamusprime/statuses/109741581346676736">September 2, 2011</a></blockquote>',
  ],
  'youtube' => [
    '<iframe width="420" height="315" src="//www.youtube.com/embed/1VTzjLELztA" frameborder="0" allowfullscreen></iframe>',
  ],
];


// MUSEUM AS MANUFACTURER
$ary_madmuseum = [
  'getty' => [
    '<iframe src="http://embed.gettyimages.com/embed/163563185?et=Cx8_H4sfEkmj2Q8HkJcC7A&sig=7hRGmgb5QwIPOQBXbSZ8V5lYiUdJDSqdpo7GfLIUxsk=" width="400" height="671" frameborder="0" scrolling="no"></iframe>',
    '<iframe src="http://embed.gettyimages.com/embed/163562280?et=laMdBqzNd0S21r3b5xmLPw&sig=HuNnksG9TJ4jdVgplQ_T6o_5Kf7Uyod6e8vJiF4tMMo=" width="400" height="671" frameborder="0" scrolling="no"></iframe>',
    '<iframe src="http://embed.gettyimages.com/embed/163562271?et=T9ck88Y8PkWyzWUPR6HoPA&sig=ymSJlpS6ML1xvJgDsaAu1Xsjdozid1xLRRqqbWjsBuI=" width="400" height="671" frameborder="0" scrolling="no"></iframe>',
    '<iframe src="http://embed.gettyimages.com/embed/163562267?et=vDwn-szDLUiYhWCJdv-16w&sig=WNgbFKfF6Oju-ZEkaeFUbG3UKl0SstjN7r86Z4HsP7Q=" width="400" height="671" frameborder="0" scrolling="no"></iframe>',
    '<iframe src="http://embed.gettyimages.com/embed/163562270?et=-ZsXjDoytkeFXIitg8t8aQ&sig=1_ph5-LQIEeVd9_O5BSG4A8mXkOOZtehqMj_FJY_ink=" width="400" height="340" frameborder="0" scrolling="no"></iframe>',
    '<iframe src="http://embed.gettyimages.com/embed/163562265?et=IPtx2PIEV0a4gr9EFo5syA&sig=1NUtpDLPviSGg5QG2-LCFD4we5eKdB1jfWQb_kTVjWI=" width="400" height="340" frameborder="0" scrolling="no"></iframe>',
    '<iframe src="http://embed.gettyimages.com/embed/163562264?et=xGXrx2o00UmGlpyJFlmxJA&sig=9XSRJ-pL3t9EXAoNzMBCz8Nt0X_Hl1r8ChCCn9NGh04=" width="400" height="340" frameborder="0" scrolling="no"></iframe>',
    '<iframe src="http://embed.gettyimages.com/embed/163562273?et=hGRxqdNPBEK2bAr8DES0WA&sig=4uY04xGc4Rt_Q3-krrbL0pSB2yy5Xrh_Lc3vcRl-wDk=" width="400" height="671" frameborder="0" scrolling="no"></iframe>',
  ],
];


// TANTAMOUNT SERIES
$ary_tantamount = [
  'twitter' => [
    '<blockquote class="twitter-tweet" lang="en"><p><a href="https://twitter.com/jk_keller">@jk_keller</a> Flat Mountains in National Centre for Contemporary Arts in Ekaterinburg. <a href="http://t.co/XDaUw5ggpy">pic.twitter.com/XDaUw5ggpy</a></p>&mdash; Anatoly Zenkov (@anatolyzenkov) <a href="https://twitter.com/anatolyzenkov/statuses/425252203277086720">January 20, 2014</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>JK Keller&#39;s Tantamount Series is cool http://bit.ly/baFkR (pics of flattened mountains)</p>&mdash; roger yang (@dodgerroger) <a href="https://twitter.com/dodgerroger/statuses/3181683929">August 7, 2009</a></blockquote>',
  ],
/*
  'instagram' => [
    // grid of 4 details
    '<iframe src="//instagram.com/p/jgebV8wxra/embed/" width="600" height="600" frameborder="0" scrolling="no" allowtransparency="true"></iframe>',
    // full wall horizon line
    '<iframe src="//instagram.com/p/jgcrCfQxqb/embed/" width="600" height="600" frameborder="0" scrolling="no" allowtransparency="true"></iframe>',
  ],
*/
];


// ASL MATCHBOOKS
$ary_matchbooks = [
  'twitter' => [
    // IMAGE
    '<blockquote class="twitter-tweet" lang="en"><p>マッチで手話(アメリカ手話)を表現したアート <a href="http://t.co/1txUvxxH">http://t.co/1txUvxxH</a> <a href="http://t.co/7iYNFkQZ">pic.twitter.com/7iYNFkQZ</a></p>&mdash; Sukico☆ (@SutekiSukico) <a href="https://twitter.com/SutekiSukico/statuses/301928126227820547">February 14, 2013</a></blockquote>',
    // No images
    '<blockquote class="twitter-tweet" lang="en"><p><a href="https://twitter.com/djbreeze31">@djbreeze31</a> <a href="http://t.co/XIkz1ERS">http://t.co/XIkz1ERS</a> ..check out the first image. pretty cool, thought i&#39;d share with you.</p>&mdash; derek enlund (@dnlund13) <a href="https://twitter.com/dnlund13/statuses/266327534998802433">November 7, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>There&#39;s something about matchbooks that can be so fascinating: JK Keller - matchbook sign language <a href="http://t.co/zqpsm4wd">http://t.co/zqpsm4wd</a></p>&mdash; Kilian Idsinga (@KilianIdsinga) <a href="https://twitter.com/KilianIdsinga/statuses/208099657451180032">May 31, 2012</a></blockquote>',
    '<blockquote class="twitter-tweet" lang="en"><p>The artist (JK Keller) actually does some really fun/imaginative work&#10;<a href="http://t.co/4yof9HG8">http://t.co/4yof9HG8</a></p>&mdash; Lauren Slater (@lm_slater) <a href="https://twitter.com/lm_slater/statuses/207994738404630528">May 31, 2012</a></blockquote>',
  ],
  'pinterest' => [
    // full alphabet
    // Sign language alphabet, created from match books (larger version of the sign language alphabet). Found on C71123, after a lot of “folding, gluing, and holding until dry.”
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/49398927132818544/"></a>',
    // Sign language alphabet...someone was way too creative with this!
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/117445502752735448/"></a>',
    // ASL. Unmatched presentation!
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/86061042850303413/"></a>',
    // Matchbook Alphabet A beautigul sign language alphabet made by JK Keller, from matchbooks found on the street.
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/274790014734413400/"></a>',
    // I'm impressed - matchbook alphabet with a little surprise at the end =)
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/208150813997475677/"></a>',
    // There's something about matchbooks that can be so fascinating: JK Keller - matchbook sign language
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/47147127319564234/"></a>',
    // peace sign - link text
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/36943659417091232/"></a>',
    // knock knock - link text
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/178244097723317079/"></a>',
  ],
];


// AMAZING MISTAKE
$ary_mistake = [
  'twitter' => [
    '<blockquote class="twitter-tweet" lang="en"><p>Absolutely amazing mistake <a href="http://t.co/nIsFEFHb">http://t.co/nIsFEFHb</a> <a href="https://twitter.com/search?q=%23fromkeetra&amp;src=hash">#fromkeetra</a> and <a href="https://twitter.com/jk_keller">@jk_keller</a></p>&mdash; Gavin Coburn Wassung (@gavinwassung) <a href="https://twitter.com/gavinwassung/statuses/169151921393905664">February 13, 2012</a></blockquote>',
  ],
  'pinterest' => [
    // using 'mistake' to create 'amazing' - digital art by keetra dean dixon
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/166703623678620819/"></a>',
    // Beautiful calligraphy—in color.
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/540783867725510245/"></a>',
    // AMAZING MISTAKE a collaboration with JK Keller the word "M I S T A K E" is used to make "A M A Z I N G"
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/213780313531561353/"></a>',
    // Originally commissioned for GOOD magazine, this truly amazing off-set print is a collaboration with husband JK Keller. The word "MISTAKE" is used to make the word "AMAZING".
    '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/109001253451543103/"></a>',
  ],
];


// REVERSE PORTRAITS
$ary_mistake = [
  'twitter' => [
    // IMAGE
    '<blockquote class="twitter-tweet" lang="en"><p>Incredible profile re-mapping. Wld make insanely good Dr Who monsters! <a href="http://t.co/HRQzMTQDcF">http://t.co/HRQzMTQDcF</a> <a href="http://t.co/f0iVn8x2Cd">pic.twitter.com/f0iVn8x2Cd</a></p>&mdash; Lewis Dartnell (@lewis_dartnell) <a href="https://twitter.com/lewis_dartnell/statuses/357437866822991872">July 17, 2013</a></blockquote>',
  ],
];


/*
// ASSORTED BITS
// Google+
// SIMPSONS ROTATION
// ANI.GIF - sweet!
'<div class="g-post" data-href="https://plus.google.com/112636589268283305493/posts/fbqs47pSJgt"></div>',
// ANI.GIF - +JK Keller knocks another one out of the park.
'<div class="g-post" data-href="https://plus.google.com/107066609145001672622/posts/2njwczxVL8x"></div>',
// RHIZOME INTERVIEW
// IMAGE - how very that
'<div class="g-post" data-href="https://plus.google.com/104277578545614379086/posts/1xJ87XUkLcx"></div>',

// GLASS LAB VIDEO
'<blockquote class="twitter-tweet" lang="en"><p>GlassLab at Governors Island: Keetra Dean Dixon and Jonathan Keller Keller <a href="http://t.co/M8MH0AOn">http://t.co/M8MH0AOn</a></p>&mdash; corningmuseum (@corningmuseum) <a href="https://twitter.com/corningmuseum/statuses/251466369982414848">September 27, 2012</a></blockquote>',

// WEBSITE IN GENERAL
// Kim Asendorf video portfolio
'<blockquote class="twitter-tweet" lang="en"><p>vine and net art portfolios _9_ JK KELLER <a href="https://t.co/f3DyDQrehU">https://t.co/f3DyDQrehU</a></p>&mdash; Kim Asendorf (@kimasendorf) <a href="https://twitter.com/kimasendorf/statuses/363969829629214720">August 4, 2013</a></blockquote>',
// Kim Asendorf video portfolio
'<iframe class="vine-embed" src="https://vine.co/v/hbqaZKKJFjt/embed/postcard" width="600" height="600" frameborder="0"></iframe></script>',
*/



?>