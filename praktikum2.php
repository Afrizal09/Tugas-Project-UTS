<?php 
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Muhammad Afrizal</a></li>
              <li class="breadcrumb-item"><a href="#">0110221219</a></li>
              <li class="breadcrumb-item active">Semester 2</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Praktikum</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <!DOCTYPE html>
              <html lang="en">
              <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form Belanja</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            
</head>
<body>
    <div style="border:1px solid; margin: 10px;">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-md-9 pt-2">
                    <h3>BELANJA ONLINE</h3>
                    <br>
                    <form method = "POST" action = "praktikum2.php">
                            <div class="form-group row pt-2">
                                <label for="cs" class="col-3 col-form-label">Customer</label> 
                                <div class="col-7">
                                <input id="cs" name="cs" placeholder="Nama Customer" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3">Pilih Produk</label> 
                                <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                                        <label for="produk_0" class="custom-control-label">TV</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label for="Jumlah" class="col-3 col-form-label">Jumlah</label> 
                                <div class="col-4">
                                <input id="Jumlah" name="Jumlah" type="text" class="form-control">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="offset-4 col-3">
                                <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                                </div>
                            </div>
                    </form>
                </div>
                    <div class="col-md-3">
                        <ul class="list-group" id="list">
                            <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                            <li class="list-group-item">TV : 4.200.000</li>
                            <li class="list-group-item">Kulkas : 3.100.000</li>
                            <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                            <li class="list-group-item active" aria-current="true">Harga dapat berubah setiap saat</li>
                        </ul>
                    </div>
                </div>
                <div>
            <hr>
            <div class="row justify-content-between"style="margin: 1px;px;" >
                <div class="col-md-4 pb-1">

                <?php
                    $nama = $_POST['cs'];
                    $produk = $_POST['produk'];
                    $jumlah = $_POST['Jumlah'];

                    if ($produk == "TV") {
                        $total = $jumlah * 4200000;
                    }elseif($produk == "Kulkas"){
                        $total = $jumlah * 3100000;
                    }elseif($produk == "Mesin Cuci"){
                        $total = $jumlah * 3800000;
                    }else{
                        0 ;
                    }
                    
                    echo "Nama Customer : $nama";
                    echo "<br>Produk Pilihan : $produk";
                    echo "<br>Jumlah Beli : $jumlah";
                    echo "<br>Harga : Rp. " . number_format($total) . ".-"; 
                    ?>
                </div>
            </body>
            </html>

            <br>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <h1>Form Nilai Siswa 1</h1>
                <form method="POST" action="praktikum2.php">
                Nama : <input type="text" name="nama" value="" size="30"/></br>
                Mata Kuliah :
                <select name="matkul">
                    <option value="DDP">Dasar Dasar Pemrograman</option>
                    <option value="BDI">Basis Data</option>
                    <option value="WEB1">Pemrograman Web</option>
                </select><br/>
                Nilai UTS : <input type="text" name="nilai_uts" value="" size="6"><br/>
                Nilai UAS :  <input type="text" name="nilai_uas" value="" size="6"><br/>
                Nilai Tugas\Praktikum :
                <input type="text" name="nilai_tugas" value="" size="6"><br/>
                <input type="submit" value="simpan" name="proses"/>
                </form>
                <?php
                $proses = $_POST['proses'];
                $nama_siswa = $_POST['nama'];
                $mata_kuliah = $_POST['matkul'];
                $nilai_uts = $_POST['nilai_uts'];
                $nilai_uas = $_POST['nilai_uas'];
                $nilai_tugas = $_POST['nilai_tugas'];

                    echo 'Proses : '.$proses;
                    echo '<br/>Nama : '.$nama_siswa;
                    echo '<br/>Mata Kuliah : '.$mata_kuliah;
                    echo '<br/>Nilai UTS : '.$nilai_uts;
                    echo '<br/>Nilai UAS : '.$nilai_uas;
                    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
                ?>
                </br>
    
                </body>
                </html>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                </head>
                <body>
                <h1>Form Nilai Siswa 2</h1>
                <form method="GET" action="praktikum2.php">
                <div class="form-group row">
                    <label for="nama" class="col-2 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                        </div> 
                        <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-2 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="select" name="matkul" class="custom-select">
                        <option value="DDP">Dasar Dasar Pemrograman</option>
                        <option value="BD">Basis Data</option>
                        <option value="WEB">Pemrograman Web</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai" class="col-2 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="nilai" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai" class="col-2 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <input id="nilai" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai" class="col-2 col-form-label">Nilai Tugas / Praktikum</label> 
                    <div class="col-8">
                    <input id="nilai" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <input type="submit" value="simpan" name="proses"/>
                    </div>
                </div>
                </form>
                </div>
                <?php
                $proses = $_GET['proses'];
                $nama_siswa = $_GET['nama'];
                $mata_kuliah = $_GET['matkul'];
                $nilai_uts = $_GET['nilai_uts'];
                $nilai_uas = $_GET['nilai_uas'];
                $nilai_tugas = $_GET['nilai_tugas'];

                echo 'proses : '.$proses;
                echo '<br>Nama : '.$nama_siswa;
                echo '<br>Mata Kuliah : '.$mata_kuliah;
                echo '<br>Nilai UTS : '.$nilai_uts;
                echo '<br>Nilai UAS : '.$nilai_uas;
                echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas;

                
                ?>
  
    
    </body>
    </html> 
                <h1>If Else</h1>
                <?php
                $teman = "Kasih";
                if ($teman == "Kasih") {
                    echo "Kasih Adalah Teman Saya";
                }else{
                    echo "Kasih Bukan teman saya";
                }
                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>percabangan</title>
                </head>
                <body>
                    <h1>Percabangan</h1>
                    <form action="praktikum2.php" method="POST">
                        Nilai :<input type="number" name="nilai" id="nilai">
                        <input type="submit" value="Submit">
                    </form>





                <?php
                $nilai = $_POST["nilai"];

                // if ($nilai >= 85 && $nilai <= 100) {
                // echo "Nilai : A";
                //}  elseif ($nilai >= 74 && $nilai <= 84) {
                // echo "Nilai : B";
                //} elseif ($nilai >= 56 && $nilai <= 69) {
                // echo "Nilai : C";
                //} elseif ($nilai >= 36 && $nilai <= 55) {
                // echo "Nilai : D";
                //} elseif ($nilai >= 0 && $nilai <= 35) {
                // echo "Nilai : D";
                //} else {
                // echo "Nilai : I";
                //} 

                switch ($nilai) {
                    case $nilai >= 85 && $nilai <= 100:
                        echo "Sangat Memuaskan";
                        break;
                    case $nilai >= 74 && $nilai <= 84:
                        echo "Memuaskan";
                        break;
                    case $nilai >= 56 && $nilai <= 69:
                        echo "Cukup";
                        break;
                    case $nilai >= 36 && $nilai <= 55:
                        echo "Kurang";
                        break;
                    case $nilai >= 0 && $nilai <= 35:
                        echo "Sangat Kurang";
                        break;
                    default:
                        echo "Tidak Ada";
                        break;
                }
                ?>       
 </body>
</html>
        
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php
include_once 'footer.php';
?>