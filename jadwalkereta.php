<?php 
$email = $_GET['email'];
 error_reporting(0);
if(isset($_POST['submit'])){
    $dewasa = $_POST['dewasa'];
    $anak = $_POST['anak'];
    $asal_stasiun = $_POST['asal_stasiun'];
    $stasiun_tujuan = $_POST['stasiun_tujuan'];
    $tanggal_keberangkatan = $_POST['tanggal_keberangkatan'];
//     $no_kereta = $_POST['no_kereta'];
//     $nama_kereta = $_POST['nama_kereta'];
//     $kelas_kereta = $POST['kelas_kereta'];
//     $jam_keberangkatan = $_POST['jam_keberangkatan'];
//     $jam_kedatangan = $_POST['jam_kedatangan'];
//     $tanggal_kedatangan = $_POST['tanggal_kedatangan'];
//    $id_kereta=$_POST['id_kereta'];
 
}
// var_dump($dewasa);exit;
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <?php
  require('head.php');
   
  ?>
  <body><section class='section'>
                <div class='container container-bigger form-request-wrap form-request-wrap-modern'>
                            <div class='row row-fix justify-content-sm-center justify-content-lg-end'>
                            <div class='col-lg-12'></br></br>
                                <center></br></br><h4> JADWAL KERETA API</h4><center><p>
                                <center><h7> Lihat jadwal kereta anda disini</h7><center><p>
                                <center><h7> Kereta Api-ku</h7><center><p>
                                <div class='row row-20 row-fix'>
                                    <div class='col-sm-6'>
                                        <label class='form-label-outside'>Stasiun Asal</label>
                                        <div class='form-wrap form-wrap-inline'>
                                        <input class='form-input select-filter' value='<?php echo "$asal_stasiun";?>'readonly>
                                            </br></br></br>
                                        </div>
                                    </div>
                                    <div class='col-sm-6'>
                                        <label class='form-label-outside'>Stasiun Asal</label>
                                        <div class='form-wrap form-wrap-inline'>
                                        <input class='form-input select-filter' value='<?php echo "$stasiun_tujuan";?>'readonly>
                                            </br></br></br>
                                        </div>
                                    </div>
                            <!-- RD Mailform-->
                                <form action='pemesanan1.php' method='POST'>
                                <table class='table'>
                                    <thead>
                                    <tr align='center'>
                                        <th scope='col'>Nama Kereta</th>
                                        <th scope='col'>Waktu Keberangkatan</th>
                                        <th scope='col'></th>
                                        <th scope='col'>Waktu Kedatangan</th>
                                        <th scope='col'>Harga</th>
                                        <th scope='col'>Aksi</th>
                                        </tr>
                                    </thead>
                        <?php 
                            require('database.php');
                            $hasilselect = mysqli_query($connect,"SELECT * FROM `jadwal_kereta` WHERE asal_stasiun LIKE '%$asal_stasiun%' and stasiun_tujuan like '%$stasiun_tujuan%' and tanggal_keberangkatan LIKE '%$tanggal_keberangkatan%'");
                                  
                            if($hasilselect === false){
                                        throw new Exception(mysqli_error($connect));
                                    }
                                    $baris = mysqli_num_rows($hasilselect);
                                    if($baris){
                                        while($hasilrow = mysqli_fetch_array($hasilselect)){
                                            // echo'<pre>';var_dump($hasilrow['nama_kereta']);echo'</pre>';exit;
                                        echo "<tbody align='center'>
                                        <tr>
                                        <td>
                                            <div class='form-wrap form-wrap-inline'>
                                            <center><h7 style='font-size: larger; font-weight: bold'>".$hasilrow['nama_kereta']."<br/><span style='font-size: smaller; font-weight: italic'>".$hasilrow['no_kereta']."</span></h7><center><p>
                                            </div></br>
                                        </td>
                                        <td>
                                        <div class='col-sm-12'>
                                            <div class='form-wrap form-wrap-inline'>
                                            <input class='form-input select-filter'  name='jam_keberangkatan' value='".$hasilrow['jam_keberangkatan']."' style='text-align: center;'>
                                            <center><h7>".$hasilrow['tanggal_keberangkatan']."</h7><center><p>
                                            </div>
                                        </div>
                                        </td>
                                        <td>
                                            <img src='icon/right-arrow.png' class='img-fluid' alt='...' style='width=60px; height: 60px;'>
                                        </td>
                                        <td>
                                        <div class='col-sm-12'>
                                            <div class='form-wrap form-wrap-inline'>
                                            <input class='form-input select-filter' name='jam_kedatangan' value='".$hasilrow['jam_kedatangan']."' style='text-align: center;'>
                                            <center><h7>".$hasilrow['tanggal_kedatangan']."</h7><center><p>
                                            </div>
                                        </div>
                                        </td>
                                        <td>
                                        <div class='form-wrap form-wrap-inline'>
                                            <center><h7 style='font-weight: bold;'> Rp.".number_format($hasilrow['harga'])."</h7><center><p>
                                            </div>
                                        </td>
                                        <input type='hidden' class='form-input select-filter' name='nama_kereta' value='".$hasilrow['nama_kereta']."' style='text-align: center;'>
                                        <input type='hidden' class='form-input select-filter' name='no_kereta' value='".$hasilrow['no_kereta']."' style='text-align: center;'>
                                        <input type='hidden' class='form-input select-filter' name='kelas_kereta' value='".$hasilrow['kelas_kereta']."' style='text-align: center;'>
                                        <input type='hidden' class='form-input select-filter' name='email' value='".$email."' style='text-align: center;'>
                                        <td><center><div class='form-wrap form-button'>
                                        <button class='btn btn-primary' type='submit' value='submit' name='submit'>Pesan</button>
                                        </center>
                                        </div> 
                                        </td>
                                        </tr>
                                    </tbody>
                                ";}} ?> 
                                </table></br></br></br></br></br></br></br></br>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

        <?php require('footer.php');?>
  </body>
</html>