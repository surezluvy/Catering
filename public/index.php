<?php include 'template/header.php' ?>

      <section class="py-0">

        <div class="container">
          <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
            <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6">Catering yang sedang diskon</h5>
          </div>
          <div class="row h-100 gx-2 mt-7">
            <?php
              $data = read("catering", "WHERE status_discount='1'");

              while($data2 = mysqli_fetch_array($data)){
            ?>
            <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
              <div class="card card-span h-100">
                <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="assets/img/gallery/<?php echo $data2['foto_catering'] ?>" alt="..." />
                  <div class="card-actions">
                    <div class="badge badge-Home Catering bg-primary p-4">
                      <div class="d-flex flex-between-center">
                        <div class="text-white fs-7"><?php echo $data2['discount'] ?></div>
                        <div class="d-block text-white fs-2">% <br />
                          <div class="fw-normal fs-1 mt-2">Off</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0">
                  <h5 class="fw-bold text-1000 text-truncate"><?php echo $data2['nama_catering'] ?></h5>
                  <span class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">5 hari lagi</span></span>
                </div><a class="stretched-link" href="#"></a>
              </div>
            </div>
            <?php } ?>
            
          </div>
        </div>

      </section>

<?php include 'template/footer.php' ?>