<?php
$content = file_get_contents('https://www.zeemaps.com/pub?group=783304');
$content = str_replace('</title>','</title><base href="https://www.zeemaps.com/" />', $content);
$content = str_replace('</head>','<link rel="stylesheet" href="http://127.0.0.1:8888/map.css" /></head>', $content);
echo $content;
?>