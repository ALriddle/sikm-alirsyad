<?php
$base="sales_act";
$konek=mysql_connect("localhost","root","hereforgood");
$base=mysql_select_db($base);
if(!$konek && !$base) {
die('Could not connect: '.mysql_error());
}