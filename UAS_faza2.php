<?php
if (isset($_POST['proses'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];

 
  // Gaji berdasarkan jabatan
  $gaji = 0;
  switch ($jabatan) {
      case 'kepala sekolah':
          $gaji = 10000000;
          break;
      case 'wakasek':
          $gaji = 7500000;
          break;
      case 'guru':
          $gaji = 5000000;
          break;
      case 'karyawan':
          $gaji = 2500000;
          break;
  }
 
  // Tunjangan lama kerja
  $tunjangan_lama_kerja = 0;
  if ($lama_kerja >= 5) {
      $tunjangan_lama_kerja = 1000000;
  }
 
  // Bonus berdasarkan status kerja
  $bonus = 0;
  if ($status == "Tetap") {
      $bonus = 500000;
  }

    class gaji{ 


        public $gaji_kotor;
        public $total_potongan;
        public $gaji_bersih;

        public function hasil($gaji , $tunjangan_lama_kerja , $bonus){
            $this->gaji_kotor = $gaji + $tunjangan_lama_kerja + $bonus;    
            echo $this->gaji_kotor;  
        }
        public function hasil2( $bpjs , $pinjaman , $tabungan , $lainnya){
            $this->total_potongan = $bpjs + $pinjaman + $tabungan + $lainnya;
            echo $this->total_potongan;
        }

        public function hasil3($gaji , $tunjangan_lama_kerja , $bonus, $bpjs , $pinjaman , $tabungan , $lainnya){
            $this->gaji_kotor = $gaji + $tunjangan_lama_kerja + $bonus;
            $this->total_potongan = $bpjs + $pinjaman + $tabungan + $lainnya;
            $this->gaji_bersih = $this->gaji_kotor - $this->total_potongan;
            echo $this->gaji_bersih;
        }

    }

    
}

$data = new gaji();



?>
            <!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Gaji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 40%;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h3 {
            text-align: center;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        table td:first-child {
            font-weight: bold;
            width: 40%;
        }

        table td:last-child {
            text-align: right;
        }

        .total {
            font-size: 1.2em;
            font-weight: bold;
            text-align: right;
        }
    </style>
</head>

<body>

    <div class="container">
        <h3>Struk Gaji</h3>
        <table>
            <tr>
                <td>No</td>
                <td> <?= $no; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td> <?= $nama; ?></td>
            </tr>
            <tr>
                <td>Unit Pendidikan</td>
                <td> <?= $unit; ?></td>
            </tr>
            <tr>
                <td>Tanggal Gaji</td>
                <td> <?= $tanggal; ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td> <?= $jabatan; ?></td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td> Rp <?=$gaji;?></td>
            </tr>
            <tr>
                <td>Lama Kerja</td>
                <td> <?= $lama_kerja; ?> Tahun</
                        </tr>
            <tr>
                <td>Tunjangan Lama Kerja</td>
                <td> Rp <?= $tunjangan_lama_kerja; ?></td>
            </tr>
            <tr>
                <td>Status Kerja</td>
                <td> <?= $status; ?></td>
            </tr>
            <tr>
                <td>Bonus</td>
                <td> Rp <?=$bonus; ?></td>
            </tr>
            <tr>
                <td>Gaji Kotor</td>
                <td> Rp <?=$data->hasil($gaji , $tunjangan_lama_kerja , $bonus); ?></td>
            </tr>
        </table>

        <h3>Potongan</h3>
        <table>
            <tr>
                <td>BPJS</td>
                <td> Rp <?= $bpjs; ?></td>
            </tr>
            <tr>
                <td>Pinjaman</td>
                <td> Rp <?=$pinjaman; ?></td>
            </tr>
            <tr>
                <td>Tabungan</td>
                <td> Rp <?=$tabungan; ?></td>
            </tr>
            <tr>
                <td>Lainnya</td>
                <td> Rp <?=$lainnya; ?></td>
            </tr>
            <tr>
                <td>Total Potongan</td>
                <td> Rp <?= $data->hasil2( $bpjs , $pinjaman , $tabungan , $lainnya); ?></td>
            </tr>
        </table>

        <h3>Total Gaji Bersih</h3>
        <table>
            <tr>
                <td>Gaji Bersih</td>
                <td> Rp <?= $data->hasil3($gaji , $tunjangan_lama_kerja , $bonus, $bpjs , $pinjaman , $tabungan , $lainnya); ?></td>
            </tr>
        </table>
    </div>

</body>

</html>