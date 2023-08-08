 <section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">

      <?php
        include "../fungsi/koneksi.php";
        $getUsers = mysqli_query($koneksi,"select count(nama_lengkap) as jml from user");
      ?>
   <div class="col-lg-4 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-red" style="border-radius: 20px">
      <div class="inner">
        <p>
            <font size="5px">
                <b>
                    Data Pengguna
                    <span class="" style="border-radius: 20px; width: 100%; padding: 5px">
                        <?php
                            $dt = mysqli_fetch_assoc($getUsers);
                            echo " : ".$dt['jml'];
                        ?>
                    </span>
                </b>
            </font>
        </p>
        <p>Olah Data Pengguna</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <!--<a href="index.php?p=user" class="small-box-footer">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>-->
      <a href="index.php?p=user" class="small-box-footer" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px ">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

      <?php
      include "../fungsi/koneksi.php";
      $getPermintaanUnvalid = mysqli_query($koneksi, "SELECT COUNT(status) as jml FROM permintaan WHERE status=0");
      ?>
  <div class="col-lg-4 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-blue" style="border-radius: 20px">
      <div class="inner">
        <p>
            <font size="5px"><b>Data Permintaan Barang
                    <span class="" style=" border-radius: 20px; width: 100%; padding: 5px">
                        <?php
                            $dt = mysqli_fetch_assoc($getPermintaanUnvalid);
                            echo " : ".$dt['jml'];
                        ?>
                    </span>
                </b>
            </font>
        </p>
        <p>Olah Data Permintaan Barang </p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <!--<a href="index.php?p=datapermintaan_table" class="small-box-footer" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px ">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>-->
      <a href="index.php?p=datapermintaan_table&pas=permintaanbarang" class="small-box-footer" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px ">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-4 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-green" style="border-radius: 20px">
      <div class="inner">
          <?php
          $query = mysqli_query($koneksi, "	SELECT *, count(pengajuan.kode_brg) 
FROM  (pengajuan inner join pengajuan_sementara on pengajuan.id_pengajuan_sementara=pengajuan_sementara.id_pengajuan_sementara) 
WHERE pengajuan_sementara.unit='$_SESSION[username]' and pengajuan_sementara.user_id='$_SESSION[user_id]' 
and !isnull(pengajuan_sementara.id_pengajuan_sementara) GROUP BY pengajuan_sementara.tgl_pengajuan DESC");
          ?>
        <p><font size="5px"><b>Data Pengajuan Barang : <?php echo mysqli_num_rows($query);?></b></font></p>
        <p>Olah Data Pengajuan Barang </p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <!--<a href="index.php?p=datapengajuan_table" class="small-box-footer" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px ">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>-->
      <a href="index.php?p=datapengajuan_table&pas=datapengajuan" class="small-box-footer" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px ">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

  <div class="col-lg-4 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-yellow" style="border-radius: 20px">
      <div class="inner">
        <p><font size="5px"><b>Data Stok Barang</b></font></p>
        <p>Olah Data Stok Barang</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <!--<a href="index.php?p=material" class="small-box-footer" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px ">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>-->
      <a href="index.php?p=material-m1&id_jenis=1&pas=atk" class="small-box-footer" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px ">Info Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

</section>