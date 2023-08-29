<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
<link rel="stylesheet" href="css/style.css">
    <title>Project Jihan</title>
  </head>
  <body>
    <?php
  include_once("connection.php");

  $result = mysqli_query($conn, "SELECT * FROM pendaftar");



    // Mendeteksi apakah ada parameter link page
    // yang dikirimkan
    if (isset($_GET['link_page'])){
      $link_page = $_GET['link_page'];
    }else{
      $link_page = 1;
    }


    //mendeteksi jenis beasiswa yang dipilih dari halaman sebelumnya
    if (isset($_GET['jenis_beasiswa'])){
      $jenis_beasiswa = $_GET['jenis_beasiswa'];
    }else{
      $jenis_beasiswa = "akademik";
    }

    // function yang digunakan untuk menentukan link yang aktif
    function SetLinkPage($actual_link, $reference_link){
    $result = "";
    if ($actual_link == $reference_link){
      $result = "active";
    }

    return $result;
    }

    // function yang digunakan untuk menentukan content yang aktif
function SetContentPage($actual_content, $reference_content){
      $result = "";
      if ($actual_content == $reference_content){
        $result = "show active";
      }
  
      return $result;
      }


          // function yang digunakan untuk menentukan jenis beasiswa 
          function SetBeasiswa($actual_beasiswa, $reference_beasiswa){
            $result = "";
            if ($actual_beasiswa == $reference_beasiswa){
              $result = "selected";
            }

            return $result;
            }

      //function untuk meng generate bilangan random untuk ipk
      function generateRandomFloat(float $minValue, float $maxValue): float
      {
          return $minValue + mt_rand() / mt_getrandmax() * ($maxValue - $minValue);
      }

      // Pengaturan Disabled Komponen jika ipk kurang dari 3

      function SetDisable($ipk){
        $result ="";
        if($ipk < 3){
          $result ="disabled";
        }

        return $result;
      }
      

    ?>

  <div class="container">
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Pendaftaran Beasiswa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
  </div>
</nav>

</div><!-- end of container -->

 <div class="container">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link <?php echo SetLinkPage("1",$link_page)?>" id="nav-home-tab" data-toggle="tab" href="#beasiswa" role="tab" aria-controls="nav-home" aria-selected="true">Pilihan Beasiswa</a>
    <a class="nav-item nav-link <?php echo SetLinkPage("2",$link_page)?>" id="nav-profile-tab" data-toggle="tab" href="#daftar" role="tab" aria-controls="nav-profile" aria-selected="false">Daftar</a>
    <a class="nav-item nav-link <?php echo SetLinkPage("3",$link_page)?>" id="nav-contact-tab" data-toggle="tab" href="#hasil" role="tab" aria-controls="nav-contact" aria-selected="false">Hasil</a>
  </div>
</nav>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade <?php echo SetContentPage("1", $link_page)?>" id="beasiswa" role="tabpanel" aria-labelledby="nav-home-tab">
  <div class="section-menu">
</div>  
  <h4>Jenis Beasiswa</h4> <p>Macam-macam beasiswa kuliah menawarkan biaya bagi para mahasiswa berprestasi yang kurang mampu agar bisa menyelesaikan
pendidikan tingginya. Bagi siapa saja yang memiliki prestasi dan berlatar belakang dari keluarga kurang mampu tetap bisa
meuntut ilmu ke pendidikan tinggi menggunakan program beasiswa. Beasiswa adalah tunjangan bagi siswa dan mahasiswa dalam menuntut ilmu. </p>
<ol>
  <li><h5>Beasiswa Akademik</h5>
  <p>Bantuan biaya pendidikan yang diberikan dan ditujukan bagi mahasiswa yang sedang menjalani 
    masa studi kuliah program diploma dan sarjana di berbagai perguruan tinggi baik negeri maupun swasta di Indonesia.
</p>
<p> Adapun persyaratan yang dibutuhkan adalah </p>
<ul> 
  <li>
    <p> Diutamakan memiliki sertifikat yang membuktikan prestasi akademik/non akademik tingkat internasional dan/atau nasional; </p></li>
<li><p> Mendapatkan rekomendasi dari institusi terkait; </p></li>
<li><p> Tidak sedang menerima beasiswa yang sejenis dari sumber lain; </p></li>
<li><p> Belum pernah menempuh pendidikan pada jenjang yang sama;</p></li>
</ul>
<p> Itulah persyaratan utama untuk mendaftar beasiswa terkait</p>

<a class="btn btn-primary btn-lg my-large-btn" href="index.php?link_page=2&jenis_beasiswa=akademik">Daftar Sekarang</a>
</li>


  <li><h5>Beasiswa Non Akademik</h5>
  <p>Bantuan biaya pendidikan yang diberikan dan ditujukan bagi mahasiswa yang sedang menjalani 
    masa studi kuliah program diploma dan sarjana di berbagai perguruan tinggi baik negeri maupun swasta di Indonesia.
</p>
<p> Adapun persyaratan yang dibutuhkan adalah </p>
<ul> 
  <li>
    <p> Diutamakan memiliki sertifikat yang membuktikan prestasi akademik/non akademik tingkat internasional dan/atau nasional; </p></li>
<li><p> Mendapatkan rekomendasi dari institusi terkait; </p></li>
<li><p> Tidak sedang menerima beasiswa yang sejenis dari sumber lain; </p></li>
<li><p> Belum pernah menempuh pendidikan pada jenjang yang sama;</p></li>
</ul>
<p> Itulah persyaratan utama untuk mendaftar beasiswa terkait</p>

<a class="btn btn-primary btn-lg my-large-btn" href="index.php?link_page=2&jenis_beasiswa=non_akademik">Daftar Sekarang</a>
</li>
<h4>Grafik Jenis Beasiswa</h4>
          <center>
            <canvas id="beasiswaChart"></canvas>
          </center>
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          <script>
            const ctx = document.getElementById('beasiswaChart');

      new Chart(ctx, {
          type: 'bar',
          data: {
              labels: ['akademik', 'non_akademik'],
              datasets: [{
                  label: 'Data',
                  data: [<?php $akademik = mysqli_query($conn, "SELECT * FROM pendaftar WHERE beasiswa = 'akademik'");
                          echo mysqli_num_rows($akademik); ?>,
                      <?php $nonakademik = mysqli_query($conn, "SELECT * FROM pendaftar WHERE beasiswa = 'non_akademik'");
                      echo mysqli_num_rows($nonakademik);
                      ?>

                  ],
                  backGroundColor: [
                      '#094067',
                      '#EF4565',
                      
                  ],
          

                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });
          </script>
</li>
</ol> 
</div>

      <div class="tab-pane fade <?php echo SetContentPage("2", $link_page)?>" id="daftar" role="tabpanel" aria-labelledby="nav-profile-tab"><div class="section-menu"> <h4>Form Pendaftaran</h4>
  
  <form action="add_pendaftar.php" method="post" enctype="multipart/form-data">
     <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="nama" class="form-control" id="inputNama" placeholder="Nama" name="nama" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="no. hp" class="col-sm-2 col-form-label">No HP</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="hp" placeholder="No Hp" name="hp" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
    <div class="col-sm-10">
      <select class="form-control" name="semester" id="semester" required>
          <?php
            for ($i=1; $i<=8; $i++)
            {
          ?>
          <option value="<?php echo $i?>"><?php echo $i?></option>
          <?php
            }
          ?>
    </select>
    </div>
  </div>

  <?php
  $minValue= 2.9;
  $maxValue= 3.4;
 
  $ipk= round(generateRandomFloat($minValue, $maxValue),1);
  ?>

<div class="form-group row">
    <label for="ipk" class="col-sm-2 col-form-label">IPK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputIpk"  name="ipk" value="<?php echo $ipk ?>"required readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="beasiswa" class="col-sm-2 col-form-label">Beasiswa</label>
    <div class="col-sm-10">
      <select class="form-control" name="beasiswa" id="beasiswa" required <?php echo SetDisable($ipk)?>>
         <option value="akademik"<?php echo SetBeasiswa("akademik", $jenis_beasiswa)?>>Akademik</option>
         <option value="non_akademik"<?php echo SetBeasiswa("non_akademik", $jenis_beasiswa)?>>Non Akademik</option>
    </select>


    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="upload_file">Choose file</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="customFile" name="berkas" required <?php echo SetDisable($ipk)?>>
          </div>
          </div>


          <input class="btn btn-primary btn-lg" type="submit" id="tombolDaftar" value="Daftar" <?php echo SetDisable($ipk)?>>

          <a class="btn btn-warning btn-lg" href="index.php?link_page=2">Batal</a>
      </form>


      </div>

    

        <!-- Modal -->
        <div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h3>Email Tidak Teridentifikasi</h3>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>




</div>
  <div class="tab-pane fade <?php echo SetContentPage("3", $link_page)?>" id="hasil" role="tabpanel" aria-labelledby="nav-contact-tab">
  <div class="section-menu"><h4>List Pendaftar</h4>

          <?php
                while($user_data = mysqli_fetch_array($result))
                {
            ?>
            
            <div class="row grid-item">
                <div class="col-md-3 col-lg-4">
                    <img class="img-fluid" src="uploads/<?php echo $user_data['berkas'];?>" alt="">
                </div>
                <div class="col-md-9 col-lg-8">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <h4>Nama :</h4>
                            <h5><?php echo $user_data['nama'];?></h5>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <h4>Email :</h4>
                            <h5><?php echo $user_data['email'];?></h5>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <h4>No HP :</h4>
                            <h5><?php echo $user_data['hp'];?></h5>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <h4>Semester :</h4>
                            <h5><?php echo $user_data['semester'];?></h5>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <h4>IPK :</h4>
                            <h5><?php echo $user_data['ipk'];?></h5>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <h4>Beasiswa :</h4>
                            <h5><?php echo $user_data['beasiswa'];?></h5>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                        
                        
                    
                </form>
        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>



          </div></div>
          </div>

            </div><!-- end of container -->

            <script src="js/jquery.js">
              </script>

              <script src="js/myjs.js"></script>

              <!-- Optional JavaScript -->
              <!-- jQuery first, then Popper.js, then Bootstrap JS -->
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            


            </body>
          </html>