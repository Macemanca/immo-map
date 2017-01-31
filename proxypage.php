<?php

// Simple proxy since we aren't using JSONP

if ( array_key_exists('url', $_REQUEST) ) {
    $contents = file_get_contents($_REQUEST['url']);
    echo $contents;
} else {
    echo 'ERROR: No URL provided. key:"url"';
}
