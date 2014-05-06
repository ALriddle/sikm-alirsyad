<?php
$base="sales_act2";
$konek=mysql_connect("localhost","root","");
$base=mysql_select_db($base);
if(!$konek && !$base) {
die('Could not connect: '.mysql_error());
}