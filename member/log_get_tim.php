<?php
mysql_connect("localhost","root","");
mysql_select_db("sales_act");
$propinsi = $_GET['NAMA_TEAM'];
$kota = mysql_query("SELECT SALES_ID,NAMA_PEGAWAI FROM tim WHERE ID_TEAM='$propinsi' order by SALES_ID");
echo "<option>-- Pilih Sales ID --</option>";
while($k = mysql_fetch_array($kota)){
    echo "<option value=\"".$k['SALES_ID']."\">".$k['SALES_ID']."</option>\n";
}
?>