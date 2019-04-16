<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/_config.php");
    $page_slug = substr(dirname($_SERVER["PHP_SELF"]),6); // 6 to start after /o__o/
    echo $page_slug;
    $prj_index = recursiveArraySearch($projects['series'], $page_slug);
    $page_title = $projects['series'][$prj_index]['title'];
    require_once(INCS_PATH."/_header.php");
?>
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
        <tr>
<?php if (!empty($projects['series'][$prj_index]['title'])) { ?>
            <td class="td--series_title"><a href="<?= $projects['series'][$prj_index]['slug']; ?>"><cite><?= $projects['series'][$prj_index]['title']; ?></cite></a></td>
<?php } else { ?>
            <td class="td--series_title td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$prj_index]['subtitle'])) { ?>
            <td class="td--series_subtitle"><?= $projects['series'][$prj_index]['subtitle']; ?></td>
<?php } else { ?>
            <td class="td--series_subtitle td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$prj_index]['slug'])) { ?>
            <td class="td--series_slug"><?= $projects['series'][$prj_index]['slug']; ?></td>
<?php } else { ?>
            <td class="td--series_slug td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$prj_index]['description'])) { ?>
            <td class="td--series_description"><?= $projects['series'][$prj_index]['description']; ?></td>
<?php } else { ?>
            <td class="td--series_description td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$prj_index]['notes'])) { ?>
            <td class="td--series_notes"><?= $projects['series'][$prj_index]['notes']; ?></td>
<?php } else { ?>
            <td class="td--series_notes td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$prj_index]['to_dos'])) { ?>
            <td class="td--series_to_dos"><?= $projects['series'][$prj_index]['to_dos']; ?></td>
<?php } else { ?>
            <td class="td--series_to_dos td--empty"></td>
<?php }; ?>
        </tr>
    </tbody>
</table>
</section>

<?php
    require_once($page_slug.".php");
?>

<section class="prj_info">
<?php if (!empty($projects['series'][$prj_index]['works'])) { ?>
<table class="table--prj_info">
    <thead>
        <tr>
            <td class="td--prj_id">ID</td>
            <td class="td--prj_title">Title</td>
            <td class="td--prj_subtitle">Subtitle</td>
            <td class="td--prj_slug">Slug</td>
            <td class="td--prj_medium">Medium</td>
            <td class="td--prj_date">Date</td>
            <td class="td--prj_dimensions">Dimensions <span class="no_break">(H × W × D)</span></td>
            <td class="td--prj_duration">Duration (H:M:S)</td>
            <td class="td--prj_location">Location</td>
            <td class="td--prj_status">Status</td>
            <td class="td--prj_description">Description</td>
            <td class="td--prj_notes">Notes</td>
        </tr>
    </thead>
    <tbody>
<?php for ($i=0; $i<count($projects['series'][$prj_index]['works']); $i++) { ?>
        <tr class="imageload images" data-img="<?= $projects['series'][$prj_index]['works'][$i]['filename']; ?>">
<?php if (!empty($projects['series'][$prj_index]['works'][$i]['id'])) { ?>
            <td class="td--prj_id"><?= $projects['series'][$prj_index]['works'][$i]['id']; ?></td>
<?php } else { ?>
            <td class="td--prj_id td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$prj_index]['works'][$i]['title'])) { ?>
            <td class="td--prj_title"><cite><?= $projects['series'][$prj_index]['works'][$i]['title']; ?></cite></td>
<?php } else { ?>
            <td class="td--prj_title td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$prj_index]['works'][$i]['subtitle'])) { ?>
            <td class="td--prj_subtitle"><?= $projects['series'][$prj_index]['works'][$i]['subtitle']; ?></td>
<?php } else { ?>
            <td class="td--prj_subtitle td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$prj_index]['works'][$i]['slug'])) { ?>
            <td class="td--prj_slug"><?= $projects['series'][$prj_index]['works'][$i]['slug']; ?></td>
<?php } else { ?>
            <td class="td--prj_slug td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$prj_index]['works'][$i]['medium'])) { ?>
            <td class="td--prj_medium"><?= $projects['series'][$prj_index]['works'][$i]['medium']; ?></td>
<?php } else { ?>
            <td class="td--prj_medium td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$prj_index]['works'][$i]['date'])) { ?>
            <td class="td--prj_date"><?= $projects['series'][$prj_index]['works'][$i]['date']; ?></td>
<?php } else { ?>
            <td class="td--prj_date td--empty"></td>
<?php }; ?>
<?php if ( !empty($projects['series'][$prj_index]['works'][$i]['height']) || !empty($projects['series'][$prj_index]['works'][$i]['width']) || !empty($projects['series'][$prj_index]['works'][$i]['depth']) || !empty($projects['series'][$prj_index]['works'][$i]['units']) ) { ?>
            <td class="td--prj_dimensions"><?php if ( !empty($projects['series'][$prj_index]['works'][$i]['height']) ) { echo $projects['series'][$prj_index]['works'][$i]['height']; }; ?><?php if ( !empty($projects['series'][$prj_index]['works'][$i]['width']) ) { echo " × ".$projects['series'][$prj_index]['works'][$i]['width']; }; ?><?php if ( !empty($projects['series'][$prj_index]['works'][$i]['depth']) ) { echo " × ".$projects['series'][$prj_index]['works'][$i]['depth']; }; ?><?php if ( !empty($projects['series'][$prj_index]['works'][$i]['units']) ) { echo " ".$projects['series'][$prj_index]['works'][$i]['units']; }; ?></td>
<?php } else { ?>
            <td class="td--prj_dimensions td--empty"></td>
<?php }; ?>
<?php if ( !empty($projects['series'][$prj_index]['works'][$i]['hours']) || !empty($projects['series'][$prj_index]['works'][$i]['minutes']) || !empty($projects['series'][$prj_index]['works'][$i]['seconds']) ) { ?>
            <td class="td--prj_duration"><?php if ( !empty($projects['series'][$prj_index]['works'][$i]['hours']) ) { echo $projects['series'][$prj_index]['works'][$i]['hours'].":"; }; ?><?php if ( !empty($projects['series'][$prj_index]['works'][$i]['minutes']) ) { echo $projects['series'][$prj_index]['works'][$i]['minutes'].":"; }; ?><?php if ( !empty($projects['series'][$prj_index]['works'][$i]['seconds']) ) { echo $projects['series'][$prj_index]['works'][$i]['seconds']; }; ?></td>
<?php } else { ?>
            <td class="td--prj_duration td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$prj_index]['works'][$i]['location'])) { ?>
            <td class="td--prj_location"><?= $projects['series'][$prj_index]['works'][$i]['location']; ?></td>
<?php } else { ?>
            <td class="td--prj_location td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$prj_index]['works'][$i]['status'])) { ?>
            <td class="td--prj_status"><?= $projects['series'][$prj_index]['works'][$i]['status']; ?></td>
<?php } else { ?>
            <td class="td--prj_status td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$prj_index]['works'][$i]['description'])) { ?>
            <td class="td--prj_description"><?= $projects['series'][$prj_index]['works'][$i]['description']; ?></td>
<?php } else { ?>
            <td class="td--prj_description td--empty"></td>
<?php }; ?>
<?php if (!empty($projects['series'][$prj_index]['works'][$i]['notes'])) { ?>
            <td class="td--prj_notes"><?= $projects['series'][$prj_index]['works'][$i]['notes']; ?></td>
<?php } else { ?>
            <td class="td--prj_notes td--empty"></td>
<?php }; ?>
        </tr>
<?php }; ?>
    </tbody>
</table>
<?php }; ?>
</section>


<?php
    require_once(INCS_PATH."/_footer.php");
?>
