<?php
$host ="localhost";
$user="root";
$password="";
$database="sales_act2";
include('fungsi_indotgl.php');
$tgl_awal=$_POST['tgl_awal_donatur'];
$tgl_akhir=$_POST['tgl_akhir_donatur'];

$tgl1=tgl_indo($tgl_awal);
$tgl2=tgl_indo($tgl_akhir);

mysql_connect($host,$user,$password) or die("Koneksi server gagal");
mysql_select_db($database);

//Queri untuk Menampilkan data
$query = mysql_query("Select sum(JUMLAH_DONASI_L)+sum(JUMLAH_DONASI_TL) as pemasukan from data_transaksi_donatur WHERE TANGGAL_TRANSAKSI between '$tgl_awal' and '$tgl_akhir'") or die(mysql_error());
$data_pemasukan_kas = mysql_fetch_array($query);

$query2 ="SELECT * FROM data_transaksi_donatur WHERE TANGGAL_TRANSAKSI between '$tgl_awal' and '$tgl_akhir' ORDER BY TANGGAL_TRANSAKSI";
$db_query = mysql_query($query2) or die("Query gagal");

//Variabel untuk iterasi
$i = 0;
//Mengambil nilai dari query database
while($data=mysql_fetch_array($db_query))
{
$cell1[$i][0] = $data[0];
$cell1[$i][1] = $data[1];
$cell1[$i][2] = $data[2];
$cell1[$i][3] = $data[3];
$cell1[$i][4] = $data[4];
$cell1[$i][5] = $data[5];
$cell1[$i][6] = $data[6];
$cell1[$i][7] = $data[7];
$cell1[$i][8] = $data[8];
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
##########################################################################################################################################

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
$pdf->SetFont("Arial","B",14);
$pdf->Cell(19,1,'DONATUR TETAP',0,0,'C');
$pdf->Ln();
$pdf->SetFont("Arial","B",12);
$pdf->Cell(19,1,'Periode :'.$tgl1.' s/d '.$tgl2,0,0,'C');
$pdf->Ln();
$pdf->SetFont("Arial","B",11);
$pdf->Cell(19,1,'LAPORAN REKAPITULASI DONATUR',0,0,'L');
$pdf->SetFont("Arial","B",10);
$pdf->Ln();
$pdf->Cell(1.7,1,'Bukti TR','LRTB',0,'C');
$pdf->Cell(2.5,1,'Tanggal','LRTB',0,'C');
$pdf->Cell(2.5,1,'Kode Donatur','LRTB',0,'C');
$pdf->Cell(6.3,1,'Nama Donatur','LRTB',0,'C');
$pdf->Cell(3,1,'Donasi L.','LRTB',0,'C');
$pdf->Cell(3,1,'Donasi T.L.','LRTB',0,'C');
$pdf->Ln();

$pdf->SetFont('Times','',10);
for($j=0;$j<$i;$j++)
{
//menampilkan data dari hasil query database
$pdf->Cell(1.7,1,$cell1[$j][0],'LBTR',0,'C');
$pdf->Cell(2.5,1,$cell1[$j][1],'LBTR',0,'C');
$pdf->Cell(2.5,1,$cell1[$j][5],'LBTR',0,'C');
$pdf->Cell(6.3,1,$cell1[$j][2],'LBTR',0,'L');
$pdf->Cell(3,1,number_format($cell1[$j][3]),'LBTR',0,'C');
$pdf->Cell(3,1,number_format($cell1[$j][4]),'LBTR',0,'C');

$pdf->Ln();
}
$pdf->SetFont("Arial","B",12);
$pdf->Cell(19,1,'Total Pemasukan Donatur Tetap: Rp. '.number_format($data_pemasukan_kas[pemasukan]),'LBTR',0,'R');
$pdf->Ln();

$pdf->SetFont("Arial","B",10);
$pdf->Ln();
$pdf->Cell(17,1,'Pengelola Dana Umat',0,0,'R');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(17,1,'....................................',0,0,'R');
//menampilkan output berupa halaman PDF
$pdf->Output();

?>