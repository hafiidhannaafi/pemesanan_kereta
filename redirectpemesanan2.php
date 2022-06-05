<?php 

//var_dump(mysqli_insert_id());exit;
$email=isset($_POST['email']) ? $_POST['email']: '';
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
$harga=isset($_POST['harga']) ? $_POST['harga'] : '';
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
<?php
  require('head.php');
  ?>
  <body>

  <section class="section">
  <form class='rd-mailform form-fix' action='cetaktiket.php' method='POST'>
        <div class="container container-bigger form-request-wrap form-request-wrap-modern">
                  <center></br></br><h4>RESERVASI TIKET KERETA ANDA</h4><center><p>
                  <center><h7>kereta api-ku</h7><center><p></br></br>
                  <form  action = "cetaktiket.php" method="POST">
                  <?php 
                            require('database.php');

                            $jumlah_tiket = mysqli_query($connect ,"select count(1) jumlah from pesan_tiket");
                            $jum = mysqli_num_rows($jumlah_tiket);
                            while($hasilrow = mysqli_fetch_array($jumlah_tiket)){
                                $jumlah = $hasilrow['jumlah'];
                            }
                            $data=$jumlah+1;

                            $kode_tiket= 'TK00'.$data;
                         
                            $queryinput1 = "INSERT INTO pesan_tiket (kode_tiket, email_akun, nama_pemesan, notelp_pemesan, email_pemesan, id_penumpang, Nama_penumpang, nama_kereta, no_kereta, kelas_kereta, tempat_duduk, asal_stasiun, jam_keberangkatan, tanggal_keberangkatan, stasiun_tujuan, jam_kedatangan, tanggal_kedatangan, harga ) 
                            VALUES ('$kode_tiket', '$email','$nama_pemesan', '$notelp_pemesan', '$email_pemesan', '$id_penumpang', '$Nama_penumpang', '$nama_kereta', '$no_kereta', '$kelas_kereta', '$tempat_duduk', '$asal_stasiun', '$jam_keberangkatan','$tanggal_keberangkatan', '$stasiun_tujuan', '$jam_kedatangan', '$tanggal_kedatangan','$harga')";
                            $hasilqueryinput1 = mysqli_query($connect ,$queryinput1);
                            $queryinput2 = "INSERT INTO tiket_penumpang(kode_tiket, id_penumpang, Nama_penumpang, nama_kereta, no_kereta, kelas_kereta, tempat_duduk, asal_stasiun, jam_keberangkatan, tanggal_keberangkatan, stasiun_tujuan, jam_kedatangan, tanggal_kedatangan) 
                            VALUES ('$kode_tiket', '$id_penumpang', '$Nama_penumpang', '$nama_kereta', '$no_kereta', '$kelas_kereta', '$tempat_duduk', '$asal_stasiun', '$jam_keberangkatan','$tanggal_keberangkatan', '$stasiun_tujuan', '$jam_kedatangan', '$tanggal_kedatangan')";
                            $hasilqueryinput2 = mysqli_query($connect ,$queryinput2);
                            if($hasilqueryinput1){
                                if($hasilqueryinput2){
                                echo "  <div class='col-md-6'>
                                <center><h7 style='font-size: medium; font-weight: bold;' > PESANAN ANDA BERHASIL</h7><p> <center></div>


                                <div class='col-md-6'>
                                <center><h7 style='font-size: medium; font-weight: bold;' > KODE BOOKING ANDA </h7><p> <center>
                                    <div class='form-wrap form-wrap-modern'>
                                    <input class='form-input input-append' id='form-element-stepper-1' name='notelp_pemesan' type='text' VALUE='$kode_tiket' readonly>
                                </div>
                                </div>
                      <div class='row'>
                        <div class='col-md-6'>
                        <center><h7 style='font-size: medium; font-weight: bold;' > DATA DIRI PEMESAN</h7><p> <center>
                                <label class='form-label-outside'>Nama lengkap</label>
                                <div class='form-wrap form-wrap-modern'>
                                <input class='form-input input-append' id='form-element-stepper-1' name='nama_pemesan' type='text' VALUE='$nama_pemesan'  readonly >
                                </div>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <label class='form-label-outside'>No telepon</label>
                                    <div class='form-wrap form-wrap-modern'>
                                    <input class='form-input input-append' id='form-element-stepper-1' name='notelp_pemesan' type='text' VALUE='$notelp_pemesan' readonly>
                                </div>
                                </div>
                                <div class='col-md-6'>
                                    <label class='form-label-outside'>E-mail</label>
                                    <div class='form-wrap form-wrap-modern'>
                                    <input class='form-input input-append' id='form-element-stepper-1' name='email_pemesan' type='Email' VALUE='$email_pemesan' readonly>
                                    </div>
                                </div>
                            </div>
                            
                            <div class='row'>
                            <div class='col-md-12'></br></br></br></br></br>
                            <center><h7 style='font-size: medium; font-weight: bold;' >KETENTUAN RESERVASI TIKET</h7><p> <center>
                                        <div class='form-wrap form-wrap-modern'>
                                        <textarea class='form-input input-append' id='form-element-stepper-1'>Bahwa Pemesanan tiket melalui internet yaitu dengan membuka situs web resmi kami dengan alamat KeretaApi-ku.co.id untuk waktu keberangkatan H-30 hari sampai dengan 3 jam sebelum keberangkatan KA.
                Calon penumpang cukup memilih stasiun keberangkatan, stasiun tujuan, tanggal keberangkatan dan jumlah penumpang melalui web tersebut, Setelah mengisi data diri sesuai identitas, calon penumpang akan mendapatkan kode booking yang dapat dibayarkan melalui channel pembayaran sebagai berikut:
    
                Pembayaran melalui ATM Bank (waktu pelayanan 24 jam) antara lain Bank BRI, Mandiri, BNI, BTN (Bank yang disarankan), Pembayaran melalui Minimarket ( Alfamart, Indomart) dan Payment Point (waktu pelayanan s.d. Pukul 22.00 WIB dan beberapa gerai melayani 24 jam).Payment Point (waktu pelayanan office hour).
                 Setelah pembayaran calon penumpang akan mendapatkan notifikasi melalui email, lalu mendapat E-tiket kemudian dapat cetak tiket KA atau tukarkan dengan boarding pass di stasiun terdekat.</textarea>
                                        </div>
                                 </div> 
                                 </div><p>
                                <div class='form-check form-wrap-modern'>
                                <label class='form-check-label' for='flexCheckDefault'> Terima Kasih anda telah menyetujui Menyetujui Ketentuan Reservasi Tiket Kereta Api-ku</label></br></br>
                                
                                <a href='cetaktiket.php?kode=$kode_tiket' target='_blank' class='btn btn-primary'>LIHAT E-TICKET ANDA</a>
                              
                               
                            </div>
                        </div></br>
                      
                        <div class='col-md-6'>
                        <center><h7 style='font-size: medium; font-weight: bold;'> DATA DIRI PENUMPANG 1</h7><p> <center>
                                    <label class='form-label-outside'>Nama Lengkap</label>
                                    <div class='form-wrap form-wrap-modern'>
                                    <input class='form-input input-append' id='form-element-stepper-1'  name='Nama_penumpang' type='text' VALUE='$Nama_penumpang' readonly>
                                    </div>
                                    <div class='row'>
                            <div class='col-md-6'>
                                <label class='form-label-outside'>Tipe ID</label>
                                <div class='form-wrap form-wrap-modern'>
                                <select class='form-input select-filter' data-placeholder='Pilih kereta' >
                                            <option value='1'>KTP/KK</option>
                                            <option value='2'>SIM</option>
                                            <option value='3'>PASSWORD</option>
                                        </select>
                      
                            </div>
                                </div>
                                <div class='col-md-6'>
                                    <label class='form-label-outside'>No ID</label>
                                    <div class='form-wrap form-wrap-modern'>
                                    <input class='form-input input-append' id='form-element-stepper-1' type='text' name='id_penumpang' VALUE='$id_penumpang'  readonly>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <label class='form-label-outside'>Seat</label>
                                    <div class='form-wrap form-wrap-modern'>
                                    <input class='form-input input-append' id='form-element-stepper-1' type='text' min = 'A01' max= 'G15' placeholder=' Pilih A01-A15' name='tempat_duduk' VALUE='$tempat_duduk'  readonly>
                                    </div>
                            </div>
                        <div class='col-md-1'>
                        </div>
                        <div class='col-md-12'></br>
    
                            <center><h7 style='font-size: larger; font-weight: bold;' >TOTAL PEMBAYARAN</h7><p> <center>
                            

                            <div class='row'>
                                <div class='col-md-12'>
                                <label class='form-label-outside'>Tanggal berangkat </label>
                                <div class='form-wrap form-wrap-validation'>
                                <!-- Select -->
                                <input class='form-input' id='dateForm' name='tanggal_keberangkatan' type='text'  VALUE='$tanggal_keberangkatan' readonly  readonly>
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
                                    <input class='form-input input-append' id='form-element-stepper-1' type='text' name='nama_kereta' VALUE='$nama_kereta' readonly >
                                    </div>
                                </div>
                                <div class='col-md-12'>
                                    <label class='form-label-outside'>Kelas kereta</label>
                                    <div class='form-wrap form-wrap-modern'>
                                    <input class='form-input input-append' id='form-element-stepper-1' type='text' name='kelas_kereta' VALUE='$kelas_kereta' readonly>
                                    </div>
                                </div>
                                <div class='col-md-12'>
                                <label class='form-label-outside'>No kereta</label>
                                <div class='form-wrap form-wrap-modern'>
                                <input class='form-input input-append' id='form-element-stepper-1' type='text' name='no_kereta' VALUE='$no_kereta' readonly>
                                </div>
                            </div>

                        <div class='row'>
                                <div class='col-md-5'>
                                    <div class='col-md-12'>
                                        <label class='form-label-outside'>Stasiun Asal</label>
                                        <div class='form-wrap form-wrap-inline'>
                                        <input class='form-input input-append' id='form-element-stepper-1' type='text' name='asal_stasiun' VALUE='$asal_stasiun' readonly> 
                                    </div>
                                    </div> 
                                    <div class='col-md-12'>
                                        <label class='form-label-outside'>Jam keberangkatan</label>
                                        <div class='form-wrap form-wrap-modern'>
                                        <input class='form-input input-append' id='form-element-stepper-1' type='text' name='jam_keberangkatan' VALUE='$jam_keberangkatan' readonly>
                                    </div>
                                    </div>
                                    <div class='col-md-12'>
                                <label class='form-label-outside'>Tanggal keberangkatan</label>
                                <div class='form-wrap form-wrap-validation'>
                                <!-- Select -->
                                <input class='form-input'id='dateForm' name='tanggal_keberangkatan' type='text'  VALUE='$tanggal_keberangkatan' readonly>
                               
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
                                        <input class='form-input input-append' id='form-element-stepper-1' type='text' name='stasiun_tujuan' VALUE='$stasiun_tujuan' readonly>
                                    </div>
                                    
                                    </div> 
                                    <div class='col-md-12'>
                                        <label class='form-label-outside'>Jam kedatangan</label>
                                        <div class='form-wrap form-wrap-modern'>
                                        <input class='form-input input-append' id='form-element-stepper-1' type='text' name='jam_kedatangan' VALUE='$jam_kedatangan' readonly>
                                    </div>
                                    </div>
                                    <div class='col-md-12'>
                                <label class='form-label-outside'>Tanggal kedatangan</label>
                                <div class='form-wrap form-wrap-validation'>
                                <!-- Select -->
                                <input class='form-input' id='dateForm' type='text'  name='tanggal_kedatangan' VALUE='$tanggal_kedatangan' readonly>
                             
                                <!--select.form-input.select-filter(data-placeholder='All', data-minimum-results-for-search='Infinity',  name='city')-->
                                <!--  option(value='1') Choose the date-->
                                <!--  option(value='2') Primary-->
                                <!--  option(value='3') Middle-->
                                 </div>   
                                </div> 
                                </div>
                                </div>
                                </div>
                            <div class='row'>
                                    <div class='col-md-12'>
                                        <center><label style= 'font-weight: bold; font-size: medium;' class='form-label-outside'>Total Harga</label><center>
                                        <div class='form-wrap form-wrap-modern'>
                                      <input style= 'text-align:center; font-size: larger; font-weight: bold;' class='form-input input-append' id='form-element-stepper-1' name='harga' type='text' value= '$harga' readonly></br></br>
                                        
                                        </div>
                                    </div>
                                            ";}} else {
                                    echo "<div class='col-md-6'>
                                    <center><h7 style='font-size: medium; font-weight: bold;' > PESANAN ANDA GAGAL </h7><p> <center>". mysqli_error($connect).""
                                ;}
                                
                            ?>

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