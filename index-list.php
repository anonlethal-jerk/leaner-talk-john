<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/_config.php");
    require_once(INCS_PATH."/o__o/homepages/_the_homepages_list.php");
	$page_title = '•__• JK';
	$page_slug = 'home';
	$prj_index = 'home';

	require_once(INCS_PATH."/_header.php");
?>
	<h2 class="beckett"><span class="first">You must go on.</span><br>
		<span class="second">I can't go on.</span><br>
		<span class="third">I'll go on.</span></h2>

<?php if (!empty($homepages['title'])) { /* start homepages table */ ?>
<h3><?= $homepages['title']; ?>:</h3>
<table class="table--series_info">
	<thead>
		<tr>
			<td class="td--series_title">Title</td>
			<td class="td--series_slug">Slug</td>
			<td class="td--series_description">Description</td>
			<td class="td--series_notes">Notes</td>
		</tr>
	</thead>
	<tbody>
<?php for ($i=0; $i<count($homepages['works']); $i++) { ?>
		<tr>
<?php if (!empty($homepages['works'][$i]['slug'])) { ?>
<?php if (!empty($homepages['works'][$i]['title'])) { ?>
			<td class="td--series_title"><a href="/o__o/homepages/<?= $homepages['works'][$i]['slug']; ?>/"><cite><?= $homepages['works'][$i]['title']; ?></cite></a></td>
<?php } else { ?>
			<td class="td--series_title td--empty"></td>
<?php }; ?>
<?php if (!empty($homepages['works'][$i]['slug'])) { ?>
			<td class="td--series_slug"><a href="/o__o/homepages/<?= $homepages['works'][$i]['slug']; ?>/"><?= $homepages['works'][$i]['slug']; ?></a></td>
<?php } else { ?>
			<td class="td--series_slug td--empty"></td>
<?php }; ?>
<?php if (!empty($homepages['works'][$i]['description'])) { ?>
			<td class="td--series_description"><?= $homepages['works'][$i]['description']; ?></td>
<?php } else { ?>
			<td class="td--series_description td--empty"></td>
<?php }; ?>
<?php if (!empty($homepages['works'][$i]['notes'])) { ?>
			<td class="td--series_notes"><?= $homepages['works'][$i]['notes']; ?></td>
<?php } else { ?>
			<td class="td--series_notes td--empty"></td>
<?php }; ?>
		</tr>
<?php } else { ?>
			<tr><td class="td--empty" colspan="4">---</td></tr>
<?php }; ?>
<?php }; ?>
	</tbody>
</table>
<?php }; /* end homepages table */ ?>

<table class="table--series_info">
	<thead>
		<tr>
			<td class="td--series_title">Series</td>
			<td class="td--series_subtitle">Subtitle</td>
			<td class="td--series_slug">Slug</td>
			<td class="td--series_description">Description</td>
			<td class="td--series_notes">Notes</td>
			<td class="td--series_to_dos">To Dos</td>
		</tr>
	</thead>
	<tbody>
<?php for ($i=0; $i<count($projects['series']); $i++) { ?>
		<tr>
<?php if (!empty($projects['series'][$i]['slug'])) { ?>
<?php if (!empty($projects['series'][$i]['title'])) { ?>
			<td class="td--series_title"><a href="/o__o/<?= $projects['series'][$i]['slug']; ?>/"><cite><?= $projects['series'][$i]['title']; ?></cite></a></td>
<?php } else { ?>
			<td class="td--series_title td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$i]['subtitle'])) { ?>
			<td class="td--series_subtitle"><?= $projects['series'][$i]['subtitle']; ?></td>
<?php } else { ?>
			<td class="td--series_subtitle td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$i]['slug'])) { ?>
			<td class="td--series_slug"><a href="/o__o/<?= $projects['series'][$i]['slug']; ?>/"><?= $projects['series'][$i]['slug']; ?></a></td>
<?php } else { ?>
			<td class="td--series_slug td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$i]['description'])) { ?>
			<td class="td--series_description"><?= $projects['series'][$i]['description']; ?></td>
<?php } else { ?>
			<td class="td--series_description td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$i]['notes'])) { ?>
			<td class="td--series_notes"><?= $projects['series'][$i]['notes']; ?></td>
<?php } else { ?>
			<td class="td--series_notes td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$i]['to_dos'])) { ?>
			<td class="td--series_to_dos"><?= $projects['series'][$i]['to_dos']; ?></td>
<?php } else { ?>
			<td class="td--series_to_dos td--empty"></td>
<?php }; ?>
		</tr>
<?php } else { ?>
			<tr><td class="td--empty" colspan="6">---</td></tr>
<?php }; ?>
<?php }; ?>
	</tbody>
</table>



	<figure class="mean_year">
	  <a href="/o__o/daily_photo/"><img class="" src="/o__o/daily_photo/x__x/jk_keller--average_jk_2017--jkk_201801_1.jpg" height="600" width="401" alt="Average JK, 2017" /></a>
	  <figcaption><a href="/o__o/daily_photo/"><cite>2017 Was a Mean Year</cite></a></figcaption>
	  <img class="the_end" src="/o__o/daily_photo/x__x/the_end-03.png" alt="The End" />
	</figure>
<?php
  require_once(INCS_PATH."/_footer.php");
?>
