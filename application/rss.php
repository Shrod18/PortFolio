<?php

// https://www.w3schools.com/xml/xml_rss.asp
// https://www.w3schools.com/php/php_xml_simplexml_get.asp
//https://www.w3schools.com/php/php_ajax_rss_reader.asp

function parseFlux($feed) {
    $rss = simplexml_load_file($feed);

    $rss_split = array();

    foreach ($rss->channel->item as $item) {
        $title = (string) $item->title; // Title
        $link = (string) $item->link; // Url Link
        $description = (string) $item->description; //Description
        $pubDate = (string) $item->pubDate;
        $rss_split[] = '<div class="bloc-title-link"><p>&raquo; <a href="' . $link . '" target="_blank" title="" >' . $title . '<br></a>' . $description . '<br><div class="datepub">' . $pubDate . '</div></p></div>';
    }

    return $rss_split;
}

function displayFlux($rss_split, $numrows, $head) {
    if (($rss_split)) {
        $totalFeed = count($rss_split);
        if ($numrows > $totalFeed) {
            $numrows = $totalFeed;
        }
        $i = 0;
        $rss_data = '<div class="bloc">
		           <div class="bloc-head">
		         ' . $head . '
		           </div>
		         <div class="bloc-title">';
        while ($i < $numrows) {
            $rss_data .= ($i > 0 ? '<hr>' : ''). $rss_split[$i];
            $i++;
        }

        $rss_data .= '</div></div>';
    }

    return $rss_data;
}
