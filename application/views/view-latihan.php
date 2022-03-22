html>
<head>
 <title>Latihan 1</title>
</head>
<body>
34
 Halo Kawan.. Yuk kita belajar web programming..!!!<br>
 Nilai 1 = <?= $nilai1; ?>
 Nilai 2 = <?= $nilai2; ?>
 ini hasil dari pemodelan dengan methode penjumlahan yaitu <?=
$nilai1 . " + " . $nilai2 . " = " . $hasil; ?>
</body>
</html>
Ubah controller Latihan1 yang sebelumnya sudah dibuat sehingga menjadi seperti berikut:
<?php
class Latihan1 extends CI_Controller
{
 public function index()
 {
 echo "Selamat Datang.. selamat belajar Web Programming";
 //$this->load->view('view-latihan1');
 }
 public function penjumlahan($n1, $n2)
 {
 $this->load->model('Model_latihan1');
 $data['nilai1'] = $n1;
 $data['nilai2'] = $n2;
 $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
 $this->load->view('view-latihan1', $data);
 }
}
