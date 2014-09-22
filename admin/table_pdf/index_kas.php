<?php
$host ="localhost";
$user="root";
$password="";
$database="sales_act2";
include('fungsi_indotgl.php');
$tgl_awal=$_POST['tgl_awal'];
$tgl_akhir=$_POST['tgl_akhir'];
$kategori=$_POST['kategori'];

$tgl1=tgl_indo($tgl_awal);
$tgl2=tgl_indo($tgl_akhir);

mysql_connect($host,$user,$password) or die("Koneksi server gagal");
mysql_select_db($database);

//Queri untuk Menampilkan data
$query1 = mysql_query("Select sum(MASUK_KAS)-sum(KELUAR_KAS) as saldototal from data_transaksi_kas WHERE TANGGAL_KAS between '$tgl_awal' and '$tgl_akhir'") or die(mysql_error());
$data_pemasukan_kas1 = mysql_fetch_array($query1);

$query2 = mysql_query("Select sum(MASUK_KAS) as pemasukan from data_transaksi_kas WHERE TANGGAL_KAS between '$tgl_awal' and '$tgl_akhir'") or die(mysql_error());
$data_pemasukan_kas2 = mysql_fetch_array($query2);

$query3 = mysql_query("Select sum(KELUAR_KAS) as pengeluaran from data_transaksi_kas WHERE TANGGAL_KAS between '$tgl_awal' and '$tgl_akhir'") or die(mysql_error());
$data_pemasukan_kas3 = mysql_fetch_array($query3);

$query4 = mysql_query("Select * from data_transaksi_kas WHERE TANGGAL_KAS between '$tgl_awal' and '$tgl_akhir' AND KODE_KAS='$kategori'") or die(mysql_error());
$detail_pemasukan_kas = mysql_fetch_array($query4); 

$query ="SELECT * FROM data_transaksi_kas WHERE TANGGAL_KAS between '$tgl_awal' and '$tgl_akhir'";
$db_query = mysql_query($query) or die("Query gagal");

//Variabel untuk iterasi
$i = 0;
//Mengambil nilai dari query database
while($data=mysql_fetch_array($db_query))
{
$cell[$i][0] = $data[0];
$cell[$i][1] = $data[1];
$cell[$i][2] = $data[2];
$cell[$i][3] = $data[3];
$cell[$i][4] = $data[4];
$cell[$i][5] = $data[5];
$cell[$i][6] = $data[6];
$cell[$i][7] = $data[7];
$cell[$i][8] = $data[8];
$i++;
}

$i = 0;
//Mengambil nilai dari query database
while($data=mysql_fetch_array($query4))
{
$cell2[$i][0] = $data[0];
$cell2[$i][1] = $data[1];
$cell2[$i][2] = $data[2];
$cell2[$i][3] = $data[3];
$cell2[$i][4] = $data[4];
$cell2[$i][5] = $data[5];
$cell2[$i][6] = $data[6];
$cell2[$i][7] = $data[7];
$cell2[$i][8] = $data[8];
$i++;
}

require('fpdf.php');

class PDF extends FPDF
{
//Fungsi Untuk Membuat Header
function Header()
{
   //Pilih font Arial bold 15
   $this->SetFont('Arial','B',15);
   //Geser ke kanan
   $this->Cell(80);
   //Judul dalam bingkai
   $this->Cell(30,10,'Title',1,0,'C');
   //Ganti baris
   $this->Ln(0);
}

//Fungsi Untuk Membuat Footer
function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //Page number
    //$this->Cell(0,10,'Halaman ke : '.$this->PageNo(),0,0,'C');
}
}

$pdf = new PDF('P','cm','A4');
$pdf->Open();
$pdf->AddPage();
$pdf->SetFont("Arial","B",15);
$pdf->Cell(19,1,'LAPORAN REKAPITULASI TRANSAKSI KEUANGAN',0,0,'C');
$pdf->Ln();
$pdf->Cell(19,1,'MASJID AL-IRSYAD SURABAYA',0,0,'C');
$pdf->Ln();
$pdf->SetFont("Arial","B",8);
$pdf->Cell(19,1,'Jl. Sultan Iskandar Muda No. 46 Surabaya. Email : masjidalirsyadsurabaya@gmail.com',0,0,'C');
$pdf->Ln();
$pdf->SetFont("Arial","B",12);
$pdf->Cell(19,1,'Periode :'.$tgl1.' s/d '.$tgl2,0,0,'C');
$pdf->Ln();
$pdf->SetFont("Arial","B",11);
$pdf->Cell(19,1,'1. LAPORAN REKAPITULASI KAS',0,0,'L');
$pdf->SetFont("Arial","B",10);
$pdf->Ln();
$pdf->Cell(1,1,'No','LRTB',0,'C');
$pdf->Cell(4,1,'Kode Trans.','LRTB',0,'C');
$pdf->Cell(3,1,'Tanggal','LRTB',0,'C');
$pdf->Cell(3.5,1,'Masuk','LRTB',0,'C');
$pdf->Cell(3.5,1,'Keluar','LRTB',0,'C');
$pdf->Cell(4,1,'Keterangan','LRTB',0,'C');
$pdf->Ln();

$pdf->SetFont('Times','',10);
for($j=0;$j<$i;$j++)
{
//menampilkan data dari hasil query database
$pdf->Cell(1,1,$j+1,'LBTR',0,'C');
$pdf->Cell(4,1,$cell[$j][1],'LBTR',0,'C');
$pdf->Cell(3,1,$cell[$j][2],'LBTR',0,'C');
$pdf->Cell(3.5,1,$cell[$j][3],'LBTR',0,'C');
$pdf->Cell(3.5,1,$cell[$j][4],'LBTR',0,'C');
$pdf->Cell(4,1,$cell[$j][7],'LBTR',0,'C');
$pdf->Ln();
}
$pdf->SetFont("Arial","B",12);
$pdf->Cell(19,1,'Total Pemasukan : Rp. '.$data_pemasukan_kas2[pemasukan],'LBTR',0,'R');
$pdf->Ln();
$pdf->Cell(19,1,'Total Pengeluaran : Rp. '.$data_pemasukan_kas3[pengeluaran],'LBTR',0,'R');
$pdf->Ln();
$pdf->Cell(19,1,'Saldo Akhir : Rp. '.$data_pemasukan_kas1[saldototal],'LBTR',0,'R');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont("Arial","B",11);
$pdf->Cell(19,1,'2. LAPORAN REKAPITULASI DETIL '.$kategori,0,0,'L');
$pdf->Ln();
$pdf->SetFont("Arial","B",10);
$pdf->Cell(1,1,'No','LRTB',0,'C');
$pdf->Cell(4,1,'Kode Trans.','LRTB',0,'C');
$pdf->Cell(3,1,'Tanggal','LRTB',0,'C');
$pdf->Cell(4,1,'Masuk','LRTB',0,'C');
$pdf->Cell(7,1,'Keterangan','LRTB',0,'C');
$pdf->Ln();
$pdf->SetFont('Times','',10);
for($j=0;$j<$i;$j++)
{
//menampilkan data dari hasil query database
$pdf->Cell(1,1,$j+1,'LBTR',0,'C');
$pdf->Cell(4,1,$cell2[$j][1],'LBTR',0,'C');
$pdf->Cell(3,1,$cell2[$j][2],'LBTR',0,'C');
$pdf->Cell(4,1,$cell2[$j][3],'LBTR',0,'C');
$pdf->Cell(7,1,$cell2[$j][7],'LBTR',0,'C');
$pdf->Ln();
}

$pdf->SetFont("Arial","B",12);
$pdf->Cell(19,1,'Total Masuk : Rp. '.$detail_pemasukan_kas[detail_pemasukan],'LBTR',0,'R');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont("Arial","B",10);
$pdf->Cell(17,1,'Pengelola Dana Umat',0,0,'R');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(17,1,'....................................',0,0,'R');
//menampilkan output berupa halaman PDF
$pdf->Output();

?>