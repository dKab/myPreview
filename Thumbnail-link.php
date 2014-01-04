<?php
error_reporting(-1);
mb_internal_encoding('utf-8');
require "Thumbnail.php";
Thumbnail::link('uploads/macey-small.jpg', 200, 300, Thumbnail::MODE_SCALE);
