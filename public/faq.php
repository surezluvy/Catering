<?php include 'template/header.php' ?>
    <section id="section">
        <div class="bg-holder" style="background-image:url(assets/img/gallery/cta-one-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xxl-10">
              <div class="card card-span shadow-warning" style="border-radius: 35px;">
                <div class="card-body py-5">
                  <div class="row justify-content-evenly">
                    <div class="col-md-3">
                      <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between">
                        <div class="d-flex d-lg-block d-xl-flex flex-center" style="text-align: center">
                          <a href="faq.php?page=informasi-mendasar#section"><h2 class="fw-bolder text-1000 mb-0 text-gradient">Informasi Mendasar</h2></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 hr-vertical">
                      <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between">
                        <div class="d-flex d-lg-block d-xl-flex flex-center" style="text-align: center; margin-left: 100px">
                            <a href="faq.php?page=menu-dan-fitur#section"><h2 class="fw-bolder text-1000 mb-0 text-gradient">Menu dan <br>Fitur </h2></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 hr-vertical">
                      <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between">
                        <div class="d-flex d-lg-block d-xl-flex flex-center" style="text-align: center; margin-left: 100px">
                            <a href="faq.php?page=syarat-layanan#section"><h2 class="fw-bolder text-1000 mb-0 text-gradient">Syarat <br>Layanan </h2></a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="row flex-center mt-md-8">
                    <?php if($_GET['page'] == 'informasi-mendasar'){echo 
                    "<div style='margin-left: 25px'>
                        <div style='margin-bottom: 25px;'>
                            <h3 class='text-gradient'>Q: Apa itu HomeCatering.id?</h3>
                            <h5>A: HomeCatering.id merupakan sebuah website untuk menampilkan rekomendasi rumah makan yang menyediakan layanan catering.</h5>
                        </div>
                        
                        <div>
                            <h3 class='text-gradient'>Q: Bagaimana HomeCatering.id bekerja?</h3>
                            <h5>A: HomeCatering.id bekerja dengan cara menawarkan jasa untuk menampilkan rekomendasi tempat yang menyediakan catering di sekitar anda.</h5>
                        </div>
                    </div>";
                    } else if($_GET['page'] == 'menu-dan-fitur'){ echo
                    "<div style='margin-left: 25px'>
                        <div style='margin-bottom: 25px;'>
                            <h3 class='text-gradient'>Q: Apakah terdapat informasi detail mengenai restoran atau tempat tersebut?</h3>
                            <h5>A: Di dalam HomeCatering.id ini akan terdapat informasi detail mengenai restoran atau tempat tersebut.</h5>
                        </div>
                        
                        <div style='margin-bottom: 25px;'>
                            <h3 class='text-gradient'>Q: Apa yang bisa dilakukan di dalam menu list catering?</h3>
                            <h5>A: Di dalam menu tersebut anda dapat menentukan lokasi dimana anda akan mencari tempat catering.</h5>
                        </div>

                        <div>
                            <h3 class='text-gradient'>Q: Bagaimanakah untuk pemesanannya?</h3>
                            <h5>A: Untuk melakukan pemesanannya, maka anda bisa langsung menghubungi ke kontak yang tersedia di dalam informasi mengenai tempat catering.</h5>
                        </div>
                    </div>";
                    } else if($_GET['page'] == 'syarat-layanan'){ echo 
                        "<div style='margin-left: 25px'>
                            <div style='margin-bottom: 25px;'>
                                <h3 class='text-gradient'>Q: Saya ingin mengetahui syarat layanan dari HomeCatering.id</h3>
                                <h5>A: Untuk syarat layanan HomeCatering.id, dapat di klik <a href='#'>di sini.</a></h5>
                            </div>
                        </div>";}?>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php include 'template/footer.php' ?>