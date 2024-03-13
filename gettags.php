<?php

require 'wp-config.php';

$post_id = $_GET['pid'];

$tags = wp_get_post_tags($post_id);

//echo "<pre>"; print_r($tags);

echo json_encode($tags);

