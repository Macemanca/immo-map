<?php
// Gets the Ad section of a page
libxml_use_internal_errors(true);

if ( array_key_exists('url', $_REQUEST) ) {
    $url = $_REQUEST["url"];

    $dom = new DOMDocument();
    $dom->loadHTML(file_get_contents($url));

    $adContent = $dom->saveXML($dom->getElementById('itemdetails'));

    echo '<div class="kijijiad">' . $adContent . '</div>';
} else {
    echo 'ERROR: No URL provided. key:"url"';
}