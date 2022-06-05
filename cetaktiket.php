<?php 
error_reporting(0);
// var_dump(mysqli_insert_id());exit;
$kode_tiket = $_GET['kode'];
$nama_pemesan=isset($_POST['nama_pemesan']) ? $_POST['nama_pemesan']: '';
$notelp_pemesan=isset($_POST['notelp_pemesan']) ? $_POST['notelp_pemesan']: '';
$email_pemesan=isset($_POST['email_pemesan']) ? $_POST['email_pemesan'] : '';
$id_penumpang=isset($_POST['id_penumpang']) ? $_POST['id_penumpang'] : '';
$Nama_penumpang=isset($_POST['Nama_penumpang']) ? $_POST['Nama_penumpang'] : '';
$nama_kereta=isset($_POST['nama_kereta']) ? $_POST['nama_kereta'] : '';
$no_kereta=isset($_POST['no_kereta']) ? $_POST['no_kereta'] : '';
$kelas_kereta=isset($_POST['kelas_kereta']) ? $_POST['kelas_kereta'] : '';
$tempat_duduk=isset($_POST['tempat_duduk']) ? $_POST['tempat_duduk'] : '';
$asal_stasiun=isset($_POST['asal_stasiun']) ? $_POST['asal_stasiun'] : '';
$stasiun_tujuan=isset($_POST['stasiun_tujuan']) ? $_POST['stasiun_tujuan'] : '';
$jam_keberangkatan=isset($_POST['jam_keberangkatan']) ? $_POST['jam_keberangkatan'] : '';
$jam_kedatangan=isset($_POST['jam_kedatangan']) ? $_POST['jam_kedatangan'] : '';
$tanggal_keberangkatan=isset($_POST['tanggal_keberangkatan']) ? $_POST['tanggal_keberangkatan'] : '';
$tanggal_kedatangan=isset($_POST['tanggal_kedatangan']) ? $_POST['tanggal_kedatangan'] : '';
$jenis_kereta=isset($_POST['jenis_kereta']) ? $_POST['jenis_kereta'] : '';
$harga=isset($_POST['harga']) ? $_POST['harga'] : '';
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <?php
  require('head.php');
  ?>
  <body>
  <section class="section">
  
  
        <div class="container container-bigger form-request-wrap form-request-wrap-modern">
            <div class="row row-fix justify-content-sm-center justify-content-lg-end">
              <div class="col-lg-12">
                  <center><h4> CETAK TIKET KERETA API</h4><center><p>
                  <center><h7> Kereta Api-ku</h7><center><p>
                  <?php 
                            require('database.php');
                            $hasilselect = mysqli_query($connect ,"SELECT * FROM `pesan_tiket` WHERE kode_tiket='$kode_tiket'");
                                    if($hasilselect === false){
                                        throw new Exception(mysqli_error($connect ));
                                    }
                                    $baris = mysqli_num_rows($hasilselect);
                                    if($baris){
                                        while($hasilrow = mysqli_fetch_array($hasilselect)){
                              echo  "


                  <div class='row row-20 row-fix'>
                      <div class='col-sm-4'>
                      <center><label style= 'font-weight: bold; font-size: medium;' class='form-label-outside'>KODE TIKET</label><center>
                            <div class='form-wrap form-wrap-modern'></br>
                            <input class='form-input input-append' id='form-element-stepper-1' name='kode_tiket' type='text' VALUE='$kode_tiket' readonly>    
                        </div>
                      </div>

                      <div class='col-sm-6 col-md-6 col-xl-8'>
                      <center><label style= 'font-weight: bold; font-size: medium;' class='form-label-outside'>DATA DIRI PEMESAN</label><center>
                            Nama : <input class='form-input input-append' id='form-element-stepper-1' name='nama_pemesan' type='text' VALUE='".$hasilrow["nama_pemesan"]."' readonly> 
                            No Telp : <input class='form-input input-append' id='form-element-stepper-1' name='notelp_pemesan' type='text' VALUE='".$hasilrow["notelp_pemesan"]."' readonly> 
                            Email : <input class='form-input input-append' id='form-element-stepper-1' name='email_pemesan' type='text' VALUE='".$hasilrow["email_pemesan"]."' readonly>  
                            <div class='form-wrap form-wrap-modern'>
                       
                            
                        </div>
                        </label>
                     </div>
                     ";}}
                     ?>

                  <!-- RD Mailform-->
                   <table class="table">
                    <thead>
                    <tr align="center">
                        <th scope="col">No. KA</th>
                        <th scope="col">Nama kereta</th>
                        <th scope="col">Keberangkatan</th>
                        <th scope="col">No ID</th>
                        <th scope="col">Nama penumpang</th>
                        <th scope="col">Kelas Kereta</th>
                        <th scope="col">Seat</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody></br>
                    <tr>
                    <?php
                        $hasil = mysqli_query($connect ,"SELECT * FROM `pesan_tiket` WHERE kode_tiket='$kode_tiket'");
                        if($hasil === false){
                            throw new Exception(mysqli_error($connect ));
                        }
                        $b = mysqli_num_rows($hasil);
                        if($b){
                            while($row = mysqli_fetch_array($hasil)){
                    ?>
                        <td>
                        <center><h7><?= $row['no_kereta'] ?></h7><center><p>
                                
                        </td>
                        <td>
                        <center><h7> <?= $row['nama_kereta'] ?></h7><center><p>    
                        </td>
                        <td> <center> DARI : </br>  Stasiun Asal          : <?= $row['asal_stasiun'] ?></br>
                               Tanggal keberangkatan : <?= $row['tanggal_keberangkatan'] ?></br>
                               jam keberangkatan :<?= $row['jam_keberangkatan'] ?></br> 
                               </br> KE : </br>
                               Stasiun Tujuan : <?= $row['stasiun_tujuan'] ?></br>
                               Tanggal kedatangan : <?= $row['tanggal_keberangkatan'] ?></br>
                               jam kedatangan :<?= $row['jam_kedatangan'] ?><center><p>  
                        </td>

                        <td>
                        <center>      <?= $row['id_penumpang'] ?> <center>
                        </td>

                        <td>
                        <center>   <?= $row['Nama_penumpang'] ?>  <center>
                        </td>

                        <td>
                        <center>    <?= $row['kelas_kereta'] ?>  <center>
                        </td>

                        <td>
                        <center>     <?= $row['tempat_duduk'] ?>  <center>
                        </td>

                        <td>
                        <center><button class='btn btn-primary' type='submit' value='submit' name='submit' onclick='window.print()'>PRINT TIKET</button> <center></br>  
                        <center><a class='button button-xs button-secondary button-nina' type='submit' value='edit' name='edit' href='logout.php' role='button'>LOGOUT</a><center>
                        </td>
                        <?php
                            }}
                        ?>
                        </tr>
                    </tbody>
                    </table></br></br></br></br></br></br></br></br>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <!-- Footer Minimal-->
      <?php
      require('footer.php')
      ?>
  </body>
</html>