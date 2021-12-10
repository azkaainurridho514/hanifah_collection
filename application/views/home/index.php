      <!-- hero -->
      <div class="container mt-5 p-5 border-bottom">
        <p class="h1 text-center"><b><?= $hero["judul_hero"] ?></b></p>
        <p class="h5 text-center"><small><?= $hero["sub_judul_hero"] ?></small></p>
      </div>
      <!-- end hero -->

       <!-- slide -->
       <div class="container mt-4 border-bottom pb-4">
        <p class="h4 text-center mb-3"><b><i class="bi bi-arrow-down-square"></i> Latest <i class="bi bi-arrow-down-square"></i></b></p>
          <div class="row">
            <div class="col-md-6 mb-2">
              <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?= base_url() ?>assets/img/projects.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url() ?>assets/img/projects.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url() ?>assets/img/projects.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?= base_url() ?>assets/img/projects.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url() ?>assets/img/projects.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url() ?>assets/img/projects.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
       </div>
       <!-- end slide -->
      
      <!-- category  -->
        <?php 
              $category = $this->db->get('category')->result_array();
               $categori = $this->db->get('category');
        if($categori->num_rows() > 4) : ?>
           <div class="container mt-4">
               <p class="h4 text-center mb-3"><b><i class="bi bi-arrow-down-square"></i> Product <i class="bi bi-arrow-down-square"></i></b></p>
           </div>
        <?php else: ?>
          <div class="container mt-4">
            <p class="h4 text-center mb-3"><b><i class="bi bi-arrow-down-square"></i> Category <i class="bi bi-arrow-down-square"></i></b></p>
            <ul class="nav bg-dark rounded justify-content-center">
            <?php
             foreach($category as $l ) : ?>
              <li class="nav-item">
                <a class="nav-link nh" href="#"><?= $l['category'] ?></a>
              </li>
            <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>
      <!-- end category -->

      <!-- content -->
      <section class="container-md border-bottom pb-4 mb-5">
        <div class="row mt-4 justify-content-center">
          <?php if(!$listContent) : ?>
            <p class="h5 text-center">Tidak ada product yang di tampilkan</p>
          <?php else: ?>
            <?php foreach($listContent as $c ) : ?>
              <div class="col-lg-3 xs-6 text-center mt-2">
                <div class="card">
                 <?php if($c['slide'] == 1) : ?>
                  <div id="carouselExampleImage<?= $c['id_content'] ?>" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleImage<?= $c['id_content'] ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleImage<?= $c['id_content'] ?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleImage<?= $c['id_content'] ?>" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="<?= base_url() ?>assets/img/<?= $c['image_1'] ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>First slide label</h5>
                          <p>Some representative placeholder content for the first slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="<?= base_url() ?>assets/img/<?= $c['image_2'] ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Second slide label</h5>
                          <p>Some representative placeholder content for the second slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="<?= base_url() ?>assets/img/<?= $c['image_3'] ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Third slide label</h5>
                          <p>Some representative placeholder content for the third slide.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleImage<?= $c['id_content'] ?>" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleImage<?= $c['id_content'] ?>" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                 <?php else: ?>
                  <img src="<?= base_url() ?>assets/img/<?= $c['image'] ?>" class="card-img-top" alt="No Image...">
                 <?php endif; ?>
                  <div class="card-body">
                    <h5 class="card-title"><?= $c['title'] ?></h5>
                    <p class="card-text">Rp.<?= $c['price'] ?>,-</p>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $c['id_content'] ?>">Detail</a>
                  </div>
                </div>
              </div>

              
        <!-- Modal -->
            <div class="modal fade" id="exampleModal<?= $c['id_content'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $c['title'] ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <!-- content modal -->

                    <!-- end content modal -->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="bi bi-whatsapp btn btn-success"> Whatsapp</button>
                  </div>
                </div>
              </div>
            </div>
          <!-- end modal -->


            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </section>
      <!-- end content -->

      <!-- other -->
      <!-- end other -->