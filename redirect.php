<?php

$home = 'http://www.home.hankgupton.com:8002';

header('302 Found HTTP/1.1', true, 302);
header("Location: $home");