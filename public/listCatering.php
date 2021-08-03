<?php include 'template/header.php' ?>

      <section id="testimonial">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">List Catering di <?php
              $data = read("kota", "WHERE id_kota='$_GET[alamat]'");
              while($data2 = mysqli_fetch_array($data)){
            ?>
            <?php echo $data2['nama_kota'] ?>
            <?php } ?></h5>
            </div>
          </div>
          <div class="row gx-2">
            <?php
              $data = read("catering", "WHERE id_kota='$_GET[alamat]'");
              while($data2 = mysqli_fetch_array($data)){
            ?>
            <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
              <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/<?php echo $data2['foto_catering'] ?>" alt="..." />
                <div class="card-body ps-0">
                  <div class="d-flex align-items-center mb-3"><img class="img-fluid" src="assets/img/gallery/food-world-logo.png" alt="" />
                    <div class="flex-1 ms-3">
                      <h4 class="mb-0 fw-bold text-1000"><?php echo $data2['nama_catering'] ?></h4><br>
                      <!-- <span class="badge bg-soft-danger p-1"><span class="fw-bold fs-1 text-danger">Buka pukul <?php echo $data2['jam_buka'] ?></span></span> -->
                      <p style="color: black"><span class="badge bg-soft-danger p-1"><span class="fw-bold fs-1 text-danger">Buka pukul: </span></span><?php echo $data2['jam_buka'] ?></p>
                      <p style="color: black"><span class="badge bg-soft-secondary p-1"><span class="fw-bold fs-1 text-secondary">Alamat: </span></span><?php echo $data2['alamat_catering'] ?></p>
                      <p style="color: black"><span class="badge bg-soft-secondary p-1"><span class="fw-bold fs-1 text-secondary">Contact: </span></span>0<?php echo $data2['contact'] ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>


      <?php include 'template/footer.php' ?>