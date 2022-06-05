<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <?php
  require('head.php');
  $email = $_GET['email'];
  ?>
  <body>
  <section class="section">
  
  
        <div class="container container-bigger form-request-wrap form-request-wrap-modern">
            <div class="row row-fix justify-content-sm-center justify-content-lg-end">
              <div class="col-lg-12">
                  <center><h4> Riwayat Pesanan</h4><center><p>
                  <center><h7> Kereta Api-ku</h7><center><p>
                  <br>
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
                    
                    <?php
                    require('database.php');
                        $hasil = mysqli_query($connect ,"SELECT * FROM `pesan_tiket` WHERE email_akun='$email'");
                        if($hasil === false){
                            throw new Exception(mysqli_error($connect ));
                        }
                        $b = mysqli_num_rows($hasil);
                        if($b){
                            while($row = mysqli_fetch_array($hasil)){
                    ?><tr>
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
                        <center>   <a class='button button-xs button-secondary button-nina' target='_blank' type='submit' value='pesan' name='cetak' href='cetaktiket.php?kode=<?= $row['kode_tiket'] ?>' role='button'>Cetak Tiket</a> <center></br>  
                        <center><a class='button button-xs button-secondary button-nina' type='submit' value='pesan' name='batal' href='pembatalan.php?kode=<?= $row['kode_tiket'] ?>&email=<?= $email ?>' role='button'>Pembatalan</a><center>
                        </td></tr>
                        <?php
                            }}
                        ?>
                        
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