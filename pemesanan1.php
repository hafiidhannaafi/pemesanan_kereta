<?php 
error_reporting(0);
// var_dump($_POST);exit;
if(isset($_POST['submit'])){
    // $nama_pemesan=$_POST['nama_pemesan'];
    // $notelp_pemesan=$_POST['notelp_pemesan'];
    // $email_pemesan=$_POST['email_pemesan'];
    // $id_penumpang=$_POST['id_penumpang'];
    // $Nama_penumpang=$_POST['Nama_penumpang'];
    $nama_kereta=$_POST['nama_kereta'];
    $no_kereta=$_POST['no_kereta'];
    $kelas_kereta=$_POST['kelas_kereta'];
    $email=$_POST['email']; 
    // $tempat_duduk=$_POST['tempat_duduk'];
    // $pilihasal=$_POST['asal_stasiun'];
    // $pilihtujuan=$_POST['stasiun_tujuan'];
    $jam_keberangkatan=$_POST['jam_keberangkatan'];
    $jam_kedatangan=$_POST['jam_kedatangan'];
    // $tanggal_keberangkatan=$_POST['tanggal_keberangkatan'];
    // $tanggal_kedatangan=$_POST['tanggal_kedatangan'];
    // $jenis_kereta=$_POST['jenis_kereta'];
    // $harga=$_POST['harga'];
    // $harga=($jumlah_penumpang*$harga);
}
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
<?php
  require('head.php');
  ?>
  <body>
  <section class="section">
  <form action="redirectpemesanan2.php" method="POST">
        <div class="container container-bigger form-request-wrap form-request-wrap-modern">
                  <center></br></br><h4>PEMESANAN TIKET KERETA</h4><center><p>
                  <center><h7>pesan tiket anda sekarang</h7><center><p>
                  <center><h7>kereta api-ku</h7><center><p></br>

                  <div class="row">
                    <div class="col-md-6">
                    <center><h7 style="font-size: medium; font-weight: bold;" >ISI DATA DIRI PEMESAN</h7><p> <center>
                            <label class="form-label-outside">Nama lengkap</label>
                            <div class="form-wrap form-wrap-modern">
                            <input class="form-input input-append" id="form-element-stepper-1" name="nama_pemesan" type="text" placeholder=" Masukan nama lengkap anda">
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label-outside">No telepon</label>
                                <div class="form-wrap form-wrap-modern">
                                <input class="form-input input-append" id="form-element-stepper-1" name="notelp_pemesan" type="text" placeholder=" Masukan nomor telp">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-outside">E-mail</label>
                                <div class="form-wrap form-wrap-modern">
                                <input class="form-input input-append" id="form-element-stepper-1" name="email_pemesan" type="Email" placeholder=" Masukan email anda">
                                </div>
                            </div>
                        </div>
                        <input type='hidden' class='form-input select-filter' name='nama_kereta' value=<?= $nama_kereta ?> style='text-align: center;'>
                        <input type='hidden' class='form-input select-filter' name='no_kereta' value=<?= $no_kereta ?> style='text-align: center;'>
                        <input type='hidden' class='form-input select-filter' name='kelas_kereta' value=<?= $kelas_kereta ?> style='text-align: center;'>
                        <input type='hidden' class='form-input select-filter' name='email' value= <?= $email?> style='text-align: center;'>
                        <div class="row">
                        <div class="col-md-12"></br></br></br></br></br>
                        <center><h7 style="font-size: medium; font-weight: bold;" >KETENTUAN RESERVASI TIKET</h7><p> <center>
                                    <div class="form-wrap form-wrap-modern">
                                    <textarea class="form-input input-append" id="form-element-stepper-1">Bahwa Pemesanan tiket melalui internet yaitu dengan membuka situs web resmi kami dengan alamat KeretaApi-ku.co.id untuk waktu keberangkatan H-30 hari sampai dengan 3 jam sebelum keberangkatan KA.
            Calon penumpang cukup memilih stasiun keberangkatan, stasiun tujuan, tanggal keberangkatan dan jumlah penumpang melalui web tersebut, Setelah mengisi data diri sesuai identitas, calon penumpang akan mendapatkan kode booking yang dapat dibayarkan melalui channel pembayaran sebagai berikut:

            Pembayaran melalui ATM Bank (waktu pelayanan 24 jam) antara lain Bank BRI, Mandiri, BNI, BTN (Bank yang disarankan), Pembayaran melalui Minimarket ( Alfamart, Indomart) dan Payment Point (waktu pelayanan s.d. Pukul 22.00 WIB dan beberapa gerai melayani 24 jam).Payment Point (waktu pelayanan office hour).
             Setelah pembayaran calon penumpang akan mendapatkan notifikasi melalui email, lalu mendapat E-tiket kemudian dapat cetak tiket KA atau tukarkan dengan boarding pass di stasiun terdekat.</textarea>
                                    </div>
                             </div> 
                             </div><p>
                            <div class="form-check form-wrap-modern">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Dengan ini Saya Menyetujui Ketentuan Reservasi Tiket Kereta Api-ku</label></br></br>
                            <!-- <a class='btn btn-primary' type="submit" value="submit" name="submit" href='redirectpemesanan1.php'>Pesan Tiket Anda</a> -->
                            <button class="btn btn-primary" type="submit" value="submit" name="submit">Pesan Tiket Anda</button>
                           
                        </div>
                    </div></br>
                  
                    <div class="col-md-6">
                    <center><h7 style="font-size: medium; font-weight: bold;">ISI DATA DIRI PENUMPANG 1</h7><p> <center>
                                <label class="form-label-outside">Nama Lengkap</label>
                                <div class="form-wrap form-wrap-modern">
                                <input class="form-input input-append" id="form-element-stepper-1"  name="Nama_penumpang" type="text" placeholder=" Masukan nama lengkap anda">
                                </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label-outside">Tipe ID</label>
                                <div class="form-wrap form-wrap-modern">
                                <select class="form-input select-filter" data-placeholder="Pilih kereta" >
                                            <option value="1">KTP/KK</option>
                                            <option value="2">SIM</option>
                                            <option value="3">PASSWORD</option>
                                        </select>
                        </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-outside">No ID</label>
                                <div class="form-wrap form-wrap-modern">
                                <input class="form-input input-append" id="form-element-stepper-1" type="text" placeholder=" Masukan no ID" name="id_penumpang">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-outside">Seat</label>
                                <div class="form-wrap form-wrap-modern">
                                <input class="form-input input-append" id="form-element-stepper-1" type="text" min = "A01" max= "G15" placeholder=" A01" name="tempat_duduk">
                                </div>
                        </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-12"></br>
                    <center><h7 style="font-size: larger; font-weight: bold;" >TOTAL PEMBAYARAN</h7><p> <center>
                    <?php 
                            require('database.php');
                            $hasilselect = mysqli_query($connect ,"SELECT * FROM `jadwal_kereta` WHERE '$no_kereta'");
                                    if($hasilselect === false){
                                        throw new Exception(mysqli_error($connect ));
                                    }
                                    $baris = mysqli_num_rows($hasilselect);
                                    if($baris){
                                        while($hasilrow = mysqli_fetch_array($hasilselect)){
                              echo  "<div class='row'>
                                <div class='col-md-12'>
                                <label class='form-label-outside'>Tanggal berangkat </label>
                                <div class='form-wrap form-wrap-validation'>
                                <!-- Select -->
                                <input class='form-input' id='dateForm' name='tanggal_keberangkatan' type='text'  value='".$hasilrow['tanggal_keberangkatan']."'readonly>
                                <label class='form-label' for='dateForm'>Pilih tanggal</label>
                                <!--select.form-input.select-filter(data-placeholder='All', data-minimum-results-for-search='Infinity',  name='city')-->
                                <!--  option(value='1') Choose the date-->
                                <!--  option(value='2') Primary-->
                                <!--  option(value='3') Middle-->
                                 </div>   
                                </div>
                                <div class='col-md-12'>
                                    <label class='form-label-outside'>Nama Kereta</label>
                                    <div class='form-wrap form-wrap-inline'>
                                    <input class='form-input input-append' id='form-element-stepper-1' type='text' name='nama_kereta' value='".$hasilrow['nama_kereta']."'readonly >
                                    </div>
                                </div>
                                <div class='col-md-12'>
                                    <label class='form-label-outside'>Kelas kereta</label>
                                    <div class='form-wrap form-wrap-modern'>
                                    <input class='form-input input-append' id='form-element-stepper-1' type='text' name='kelas_kereta' value='".$hasilrow['kelas_kereta']."'readonly>
                                    </div>
                                </div>
                                <div class='col-md-12'>
                                <label class='form-label-outside'>No kereta</label>
                                <div class='form-wrap form-wrap-modern'>
                                <input class='form-input input-append' id='form-element-stepper-1' type='text' name='no_kereta' value='".$hasilrow['no_kereta']."'readonly>
                                </div>
                            </div>
                                ";}}?>

                                <div class="col-md-12">
                                    <label class="form-label-outside">Jumlah penumpang</label>
                                    <div class="form-wrap form-wrap-modern">
                                    <input class="form-input input-append" id="form-element-stepper-1" name="jumlah_penumpang" type="number" min="0" max="30" >
                                    </div>
                                </div>    
                        </div>

                        <?php 
                        
                            require('database.php');
                            $hasilselect = mysqli_query($connect ,"SELECT * FROM `jadwal_kereta` WHERE no_kereta='$no_kereta'");
                                    if($hasilselect === false){
                                        throw new Exception(mysqli_error($connect ));
                                    }
                                    $baris = mysqli_num_rows($hasilselect);
                                    if($baris){
                                        while($hasilrow = mysqli_fetch_array($hasilselect)){
                        echo  "
                        <div class='row'>
                                <div class='col-md-5'>
                                    <div class='col-md-12'>
                                        <label class='form-label-outside'>Stasiun Asal</label>
                                        <div class='form-wrap form-wrap-inline'>
                                        <input class='form-input input-append' id='form-element-stepper-1' type='text' name='asal_stasiun' value='".$hasilrow['asal_stasiun']."'readonly> 
                                    </div>
                                    </div> 
                                    <div class='col-md-12'>
                                        <label class='form-label-outside'>Jam keberangkatan</label>
                                        <div class='form-wrap form-wrap-modern'>
                                        <input class='form-input input-append' id='form-element-stepper-1' type='text' name='jam_keberangkatan' value='".$hasilrow['jam_keberangkatan']."'readonly>
                                    </div>
                                    </div>
                                    <div class='col-md-12'>
                                <label class='form-label-outside'>Tanggal keberangkatan</label>
                                <div class='form-wrap form-wrap-validation'>
                                <!-- Select -->
                                <input class='form-input'id='dateForm' name='tanggal_keberangkatan' type='text'  value='".$hasilrow['tanggal_keberangkatan']."'readonly>
                               
                                <!--select.form-input.select-filter(data-placeholder='All', data-minimum-results-for-search='Infinity',  name='city')-->
                                <!--  option(value='1') Choose the date-->
                                <!--  option(value='2') Primary-->
                                <!--  option(value='3') Middle-->
                                 </div>   
                                </div> 
                                </div>
                                <div class='col-md-2'></br></br></br></br></br>
                                <img src='icon/right-arrow.png' class='img-fluid' alt='...'>
                                </div></br></br>
                                <div class='col-md-5'>
                                    <div class='col-md-12'>
                                        <label class='form-label-outside'>Stasiun Tujuan</label>
                                        <div class='form-wrap form-wrap-inline'>
                                        <input class='form-input input-append' id='form-element-stepper-1' type='text' name='stasiun_tujuan' value='".$hasilrow['stasiun_tujuan']."'readonly>
                                    </div>
                                    
                                    </div> 
                                    <div class='col-md-12'>
                                        <label class='form-label-outside'>Jam kedatangan</label>
                                        <div class='form-wrap form-wrap-modern'>
                                        <input class='form-input input-append' id='form-element-stepper-1' type='text' name='jam_kedatangan' value='".$hasilrow['jam_kedatangan']."'readonly>
                                    </div>
                                    </div>
                                    <div class='col-md-12'>
                                <label class='form-label-outside'>Tanggal kedatangan</label>
                                <div class='form-wrap form-wrap-validation'>
                                <!-- Select -->
                                <input class='form-input' id='dateForm' type='text'  name='tanggal_kedatangan' value='".$hasilrow['tanggal_kedatangan']."' readonly>
                             
                                <!--select.form-input.select-filter(data-placeholder='All', data-minimum-results-for-search='Infinity',  name='city')-->
                                <!--  option(value='1') Choose the date-->
                                <!--  option(value='2') Primary-->
                                <!--  option(value='3') Middle-->
                                 </div>   
                                </div> 
                                </div>
                                </div>
                            <div class='row'>
                                    <div class='col-md-12'>
                                        <center><label style= 'font-weight: bold; font-size: medium;' class='form-label-outside'>Total Harga</label><center>
                                        <div class='form-wrap form-wrap-modern'>
                                      <input style= 'text-align:center; font-size: larger; font-weight: bold;' class='form-input input-append' id='form-element-stepper-1' name='harga' type='text' value=".$hasilrow['harga']." readonly></br></br>
                                        
                                        </div>
                                    </div>
                                    ";}}?>  
                            </div>
                        </div>
                </div>
                </div>
            </form>
            </br></br></br>
        </div>
      </section>  </br></br>
        <!-- Footer Minimal-->
      <?php
      require('footer.php')
      ?>
  </body>
</html>