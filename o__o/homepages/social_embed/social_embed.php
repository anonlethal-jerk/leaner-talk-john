<?php
    require_once("../_header.php");
?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jonathan Keller Keller</title>
    <meta name="description" content="">

    <!--  for the facebooks  -->
    <meta property="fb:admins" content="871065253" />
    <meta property=og:type content="website">
    <meta property=og:url content="http://jk-keller.com/">
    <meta property=og:title content="J&#818;&#818;&#818;K&#818;&#818;&#818; K&#818;&#818;&#818;e&#818;&#818;&#818;l&#818;&#818;&#818;l&#818;&#818;&#818;e&#818;&#818;&#818;r&#818;&#818;&#818;">
    <meta property=og:description content="This dude got famous for that? Why aren't I and like every other teen famous then?! this is so stupid haha">
    <meta property=og:image content="http://jk-keller.com/img/jk_keller-facebook_thumbnail.gif">

    <link rel="stylesheet" href="_css/normalize.css">
    <link rel="stylesheet" href="_css/main.css">

    <!--[if lt IE 9]>
      <script src="/js/vendor/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

<?php require_once('_embed-list.php'); ?>
<?php require_once('_project-list.php'); ?>

    <div class="wrap-it-up">

      <header>
        <h1 class="site-title">this <a href="/"><span class="label label-warning">1</span> weird website</a> uses <a href="/#wrap-embeds"><span class="label label-success"><?php echo count($ary_projects)+1; ?></span> embedded social medias</a> to pander to its amazing audience</h1>
        <h2 class="site-subtitle">by <a href="/about-jk/">JK Keller</a></h2>
      </header>

<section id="wrap-embeds" class="clearfix">
<?php
  $rndm_tweet = mt_rand(0,count($ary_projects)-1);
  $rndm_like = mt_rand(0,count($ary_projects)-1);
  $rndm_plus = mt_rand(0,count($ary_projects)-1);
  $ary_unicodes = ['┄', '┅', '┆', '┇', '┈', '┉', '┊', '┋', '╱', '╲'];

  for ($i=0; $i<count($ary_projects); $i++) {
    $rndm_unicodes = mt_rand(0,4);
    if ($rndm_unicodes == 0) {
      echo '<p class="blocker">';
      for ($j=0; $j<mt_rand(60,200); $j++) {
        echo $ary_unicodes[mt_rand(0,count($ary_unicodes)-1)].' ';
      }
      echo '</p>';
    }

    project_embed($ary_projects[$i]);

    if ($i == $rndm_tweet) {
      echo '<div id="tweet" class="embed-wrap embed-tweet">';
      echo '<a href="https://twitter.com/share" class="twitter-share-button" data-via="jk_keller" data-size="large" data-dnt="true">Tweet</a>';
      echo '</div>';
    }
    if ($i == $rndm_like) {
      echo '<div id="like" class="embed-wrap embed-like">';
      echo '<div class="fb-like" data-layout="box_count" data-action="like" data-show-faces="false" data-share="true"></div>';
      echo '</div>';
    }
    if ($i == $rndm_plus) {
      echo '<div id="plus" class="embed-wrap embed-plus">';
      echo '<div class="g-plusone" data-size="tall"></div>';
      echo '</div>';
    }
  };

  echo '<p class="filler">';
  for ($j=0; $j<mt_rand(1000,1500); $j++) {
    echo $ary_unicodes[mt_rand(0,count($ary_unicodes)-1)].' ';
  }
  echo '</p>';
?>
</section>

      <footer>
        <h3>and <span class="label label-success"><?php echo count($ary_other_projects); ?></span> other things no one seems to want to talk about</h3>
        <ul>
<?php
  for ($i=0; $i<count($ary_other_projects); $i++) {
    project_list($ary_other_projects[$i]);
  };
?>
        </ul>
      </footer>
    </div><!-- wrap-it-up -->

    <div class="nytoak">
      <a href="#linkrot">JK has moved to Alaska</a>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="_js/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="_js/jquery.fitvids.js"></script>

    <script src="_js/main.js"></script>

    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <script async src="//platform.vine.co/static/scripts/embed.js" charset="utf-8"></script>
    <script async src="//assets.pinterest.com/js/pinit.js"></script>
    <script async src="https://apis.google.com/js/plusone.js"></script>
    <script type="text/javascript">(function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/platform.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=211741682193296"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
    <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>


<?php
    require_once("../_footer.php");
?>
