
       <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#insertdata">Insert new content</button>              
                    
              </div>
              <div class="card-body">
                <table id="myTable" class="table table-bordered table-hover text-center">
                  <thead>
                  <tr>
                    <th style="width: 20px;">No</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th style="width: 80px;">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $i = 1;
                    foreach($content as $c) : ?>
                  <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $c['title'] ?></td>
                    <td style="max-width: 100px;">
                      <!-- <img src="<?= base_url() ?>assets/img/<?= $c['image'] ?>" class="mxwd"> -->


                   

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
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="<?= base_url() ?>assets/img/<?= $c['image_2'] ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="<?= base_url() ?>assets/img/<?= $c['image_3'] ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
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


                      






                    </td>
                    <td>
                      <a href="#" class="text-decoration-none badge rounded-pill bg-info" data-bs-toggle="modal" data-bs-target="#detailModal<?= $c['id_content'] ?>">Detail</a>
                      <a href="#" class="text-decoration-none badge text-light rounded-pill bg-warning" data-bs-toggle="modal" data-bs-target="#updateModal<?= $c['id_content'] ?>">Edit</a>
                      <a href="<?= base_url()?>admin/delete/<?= $c['id_content'] ?>" class="text-decoration-none badge rounded-pill bg-danger" onclick="confirm('Apakah anda yakin ingin menghapus?')">Delete</a>
                    </td>
                  </tr>

        <!-- Modal detail -->
          <div class="modal fade" id="detailModal<?= $c['id_content'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                        <img src="<?= base_url() ?>assets/img/<?= $c['image_1'] ?>" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-md-block">
                        </div>
                      </div>
                      <div class="carousel-item ">
                        <img src="<?= base_url() ?>assets/img/<?= $c['image_2'] ?>" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-md-block">
                        </div>
                      </div>
                      <div class="carousel-item ">
                        <img src="<?= base_url() ?>assets/img/<?= $c['image_3'] ?>" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-md-block">
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
                     <!--  <h5 class="card-title">Title barang : <?= $c['title'] ?></h5>
                      <p class="card-text">Subtitle barang : <?= $c['sub_title'] ?></p>
                          <p class="card-text">Harga : Rp.<?= $c['price'] ?>,-</p>
                          <p class="card-text">Category : <?= $c['category'] ?></p>
                    <div class="row">
                      <div class="col-lg-2">
                        Motif:
                      </div>
                      <div class="col-lg-4">
                        <ul class="list-group">
                          <?php if($c['motif_1']) {?>
                            <li class="list-group-item"><?= $c['motif_1'] ?></li>
                          <?php }else{} ?>
                          <?php if($c['motif_2']) {?>
                            <li class="list-group-item"><?= $c['motif_2'] ?></li>
                          <?php }else{} ?>
                          <?php if($c['motif_3']) {?>
                            <li class="list-group-item"><?= $c['motif_3'] ?></li>
                          <?php }else{} ?>
                          <?php if($c['motif_4']) {?>
                            <li class="list-group-item"><?= $c['motif_4'] ?></li>
                          <?php }else{} ?>
                          <?php if($c['motif_5']) {?>
                            <li class="list-group-item"><?= $c['motif_5'] ?></li>
                          <?php }else{} ?>
                          <?php if($c['motif_6']) {?>
                            <li class="list-group-item"><?= $c['motif_6'] ?></li>
                          <?php }else{} ?>
                          <?php if($c['motif_7']) {?>
                            <li class="list-group-item"><?= $c['motif_7'] ?></li>
                          <?php }else{} ?>
                          <?php if($c['motif_8']) {?>
                            <li class="list-group-item"><?= $c['motif_8'] ?></li>
                          <?php }else{} ?>
                        </ul>
                      </div>
                    </div> -->
                      <!-- select => option nya di dalam if -->

                    <!-- <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                    <datalist id="datalistOptions">
                      <?php if($c['motif_1']) {?>
                        <option value="<?= $c['motif_1'] ?>"><?= $c['motif_1'] ?></option>
                      <?php }else{} ?>
                      <option value="San Francisco">
                      <option value="New York">
                      <option value="Seattle">
                      <option value="Los Angeles">
                      <option value="Chicago">
                    </datalist> -->

                  <div class="row">
                    <div class="col-md-2 border">
                      <p class="fs-6 fw-bold">
                        Title :
                      </p>
                      <p class="fs-6">
                        <?= $c['title'] ?>
                      </p>
                    </div>
                    <div class="col-md-4 border">
                      <p class="fs-6 fw-bold">
                        Sub title :
                      </p>
                      <p class="fs-6">
                         <?= $c['sub_title'] ?>
                      </p>
                    </div>
                    <div class="col-md-2 border">
                      <p class="fs-6 fw-bold">
                        Harga :
                      </p>
                      <p class="fs-6">
                         <?= $c['price'] ?>
                      </p>
                    </div>
                    <div class="col-md-2 border">
                      <p class="fs-6 fw-bold">
                        Categori :
                      </p>
                      <p class="fs-6">
                        <?= $c['category'] ?>
                      </p>
                    </div>
                    <div class="col-md-2 border">
                      <p class="fs-6 fw-bold">
                        Motif :
                      </p>
                       <ul class="list-group">
                          <?php if($c['motif_1']) {?>
                            <li class="list-group-item border-0 border-0"><?= $c['motif_1'] ?></li>
                          <?php }else{} ?>
                          <?php if($c['motif_2']) {?>
                            <li class="list-group-item border-0"><?= $c['motif_2'] ?></li>
                          <?php }else{} ?>
                          <?php if($c['motif_3']) {?>
                            <li class="list-group-item border-0"><?= $c['motif_3'] ?></li>
                          <?php }else{} ?>
                          <?php if($c['motif_4']) {?>
                            <li class="list-group-item border-0"><?= $c['motif_4'] ?></li>
                          <?php }else{} ?>
                          <?php if($c['motif_5']) {?>
                            <li class="list-group-item border-0"><?= $c['motif_5'] ?></li>
                          <?php }else{} ?>
                          <?php if($c['motif_6']) {?>
                            <li class="list-group-item border-0"><?= $c['motif_6'] ?></li>
                          <?php }else{} ?>
                          <?php if($c['motif_7']) {?>
                            <li class="list-group-item border-0"><?= $c['motif_7'] ?></li>
                          <?php }else{} ?>
                          <?php if($c['motif_8']) {?>
                            <li class="list-group-item border-0"><?= $c['motif_8'] ?></li>
                          <?php }else{} ?>
                        </ul>
                    </div>
                  </div>

                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-secondary" style="width: 150px;" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal update -->
          <div class="modal fade" id="updateModal<?= $c['id_content'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>

                  <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="<?= $c['title'] ?>" placeholder="Masukan title barang">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Subtitle</label>
                    <textarea class="form-control" name="subtitle" rows="3"><?= $c['sub_title'] ?></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" class="form-control" name="price" value="<?= $c['price'] ?>" placeholder="Masukan harga barang">
                  </div>
                  <div class="mb-3 stokupdate">
                    <label class="form-label">Stok</label>
                    <input type="text" class="form-control" name="stok" value="<?= $c['stok'] ?>" placeholder="Masukan stok barang">
                  </div>
                  <div class="mb-3">
                    <?php
                     $cat = $this->db->get('category')->result_array();
                    ?>
                    <label class="form-label">Category</label>
                     <select class="form-select" name="category" aria-label="Default select example">
                        <option selected value="<?= $c['id_category'] ?>"><?= $c['category'] ?> > category saat ini</option>
                        <?php foreach($cat as $ct): ?>
                        <option value="<?= $ct['id_category'] ?>"><?= $ct['category'] ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
                  <div class="mb-3 showhiddenupdate">
                    <label for="formFile" class="form-label">Pilih foto</label>
                    <input class="form-control" type="file" name="image" id="formFile" value="<?= $c['image'] ?>">
                  </div>
                  <div class="form-check">
                    <div class="row w-50">
                      <div class="col-md-4">
                      <?php if($c['motif_1']) : ?>
                        <input class="form-check-input cekmotifupdate" type="checkbox" checked>
                      <?php else: ?>
                        <input class="form-check-input cekmotifupdate" type="checkbox">
                      <?php endif; ?>
                      <label class="form-check-label" for="checkmotif">
                          Ceklis jika ada motif
                        </label>

                      </div>
                      <div class="col-md-4">
                        <input class="form-check-input cekwarnaupdate " type="checkbox" value="">
                        <label class="form-check-label" for="checkwarna">
                          Ceklis jika ada warna
                        </label>
                      </div>
                      <div class="col-md-4">
                        <input class="form-check-input cekslideupdate " type="checkbox" value="">
                        <label class="form-check-label" for="slidecheck">
                          Ceklis jika ada slide
                        </label>
                      </div>
                    </div>              
                  </div>
                  <div class="mb-3 mt-3 d-none showhiddenupdate">
                   <div class="row">
                     <div class="col-md-4">
                       <label for="formFile" class="form-label">Image 1</label>
                       <input class="form-control" type="file" name="image1" id="formFile">
                     </div>
                     <div class="col-md-4">
                       <label for="formFile" class="form-label">Image 2</label>
                       <input class="form-control" type="file" name="image2" id="formFile">
                     </div>
                     <div class="col-md-4">
                       <label for="formFile" class="form-label">Image 3</label>
                       <input class="form-control" type="file" name="image3" id="formFile">
                     </div>
                   </div>
                  </div>
                  <?php if($c['motif_1']) : ?>
                    <div class="mb-3 motifupdate">
                  <?php else: ?>
                    <div class="mb-3 d-none motifupdate">
                  <?php endif; ?>
                   <div class="row">
                    <p class="h6 text-center mt-2">__Motif__</p>
                    <label class="text-center text-danger">
                      <small>kosongkan kolom jika tidak ada</small>
                    </label>
                     <div class="col-md-6">
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="motif1" value="<?= $c['motif_1'] ?>" placeholder="motif satu">
                         <input type="text" class="form-control mt-1 mb-1" name="stok1m" value="<?= $c['stok_motif_1'] ?>" placeholder="stok motif satu">
                       </div>
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="motif2" value="<?= $c['motif_2'] ?>" placeholder="motif dua">
                         <input type="text" class="form-control mt-1 mb-1" name="stok2m" value="<?= $c['stok_motif_2'] ?>" placeholder="stok motif dua">
                       </div>
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="motif3" value="<?= $c['motif_3'] ?>" placeholder="motif tiga">
                         <input type="text" class="form-control mt-1 mb-1" name="stok3m" value="<?= $c['stok_motif_3'] ?>" placeholder="stok motif tiga">
                       </div>
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="motif4" value="<?= $c['motif_4'] ?>" placeholder="motif empat">
                         <input type="text" class="form-control mt-1 mb-1" name="stok4m" value="<?= $c['stok_motif_4'] ?>" placeholder="stok motif empat">
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="motif5" value="<?= $c['motif_5'] ?>" placeholder="motif lima">
                         <input type="text" class="form-control mt-1 mb-1" name="stok5m" value="<?= $c['stok_motif_5'] ?>" placeholder="stok motif lima">
                       </div>
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="motif6" value="<?= $c['motif_6'] ?>" placeholder="motif enam">
                         <input type="text" class="form-control mt-1 mb-1" name="stok6m" value="<?= $c['stok_motif_6'] ?>" placeholder="stok motif enam">
                       </div>
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="motif7" value="<?= $c['motif_7'] ?>" placeholder="motif tujuh">
                         <input type="text" class="form-control mt-1 mb-1" name="stok7m" value="<?= $c['stok_motif_7'] ?>" placeholder="stok motif tujuh">
                       </div>
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="motif8" value="<?= $c['motif_8'] ?>" placeholder="motif delapan">
                         <input type="text" class="form-control mt-1 mb-1" name="stok8m" value="<?= $c['stok_motif_8'] ?>" placeholder="stok motif delapan">
                       </div>
                     </div>
                   </div>
                  </div>
                  <?php if($c['warna_1']) : ?>
                    <div class="mb-3 warnaupdate">
                  <?php else: ?>
                    <div class="mb-3 d-none warnaupdate">
                  <?php endif; ?>
                   <div class="row">
                    <p class="h6 text-center mt-2">__Warna__</p>
                    <label class="text-center text-danger">
                      <small>kosongkan kolom jika tidak ada</small>
                    </label>
                     <div class="col-md-6">
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="warna1" value="<?= $c['warna_1'] ?>" placeholder="warna satu">
                         <input type="text" class="form-control mt-1 mb-1" name="stok1w" value="<?= $c['stok_warna_1'] ?>" placeholder="stok warna satu">
                       </div>
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="warna2" value="<?= $c['warna_2'] ?>" placeholder="warna dua">
                         <input type="text" class="form-control mt-1 mb-1" name="stok2w" value="<?= $c['stok_warna_2'] ?>"  placeholder="stok warna dua">
                       </div>
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="warna3" value="<?= $c['warna_3'] ?>" placeholder="warna tiga">
                         <input type="text" class="form-control mt-1 mb-1" name="stok3w" value="<?= $c['stok_warna_3'] ?>"  placeholder="stok warna tiga">
                       </div>
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="warna4" value="<?= $c['warna_4'] ?>" placeholder="warna lima">
                         <input type="text" class="form-control mt-1 mb-1" name="stok4w" value="<?= $c['stok_warna_4'] ?>"  placeholder="stok warna empat">
                       </div>
                     </div>
                     <div class="col-md-6">
                        <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="warna5" value="<?= $c['warna_5'] ?>" placeholder="warna lima">
                         <input type="text" class="form-control mt-1 mb-1" name="stok5w" value="<?= $c['stok_warna_5'] ?>"  placeholder="stok warna lima">
                       </div>
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="warna6" value="<?= $c['warna_6'] ?>" placeholder="warna enam">
                         <input type="text" class="form-control mt-1 mb-1" name="stok6w" value="<?= $c['stok_warna_6'] ?>"  placeholder="stok warna enam">
                       </div>
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="warna7" value="<?= $c['warna_7'] ?>" placeholder="warna tujuh">
                         <input type="text" class="form-control mt-1 mb-1" name="stok7w" value="<?= $c['stok_warna_7'] ?>"  placeholder="stok warna tujuh">
                       </div>
                       <div class="border-bottom d-flex">
                         <input type="text" class="form-control mt-1" name="warna8" value="<?= $c['warna_8'] ?>" placeholder="warna delapan">
                         <input type="text" class="form-control mt-1 mb-1" name="stok8w" value="<?= $c['stok_warna_8'] ?>"  placeholder="stok warna delapan">
                       </div>
                     </div>
                   </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button> 
                </div>
                </form>
              </div>
            </div>
          </div>

                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>



        


        <!-- modal insert new data -->
 
    <div class="modal fade" id="insertdata" tabindex="-1" aria-labelledby="insertdataLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="insertdataLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post" id="insert">
           
            <div class="pesan" style="display: none"></div>
          <div class="modal-body">
          <?php 
             $query = " SELECT * FROM `content` WHERE id_content IN (SELECT MAX(id_content) FROM `content`) ";
             $data = $this->db->query($query)->row_array();
            ?>
           <?php
            $first = 1;
            if(!$data) { ?>
            <input type="hidden" name="id" value="<?= $first ?>">
            <?php } else{ ?>
              <input type="hidden" name="id" value="<?= $data['id_content'] + 1 ?>">
            <?php } ?>

            <div class="mb-3">
              <label class="form-label">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Masukan title barang">
            </div>
            <div class="mb-3">
              <label class="form-label">Subtitle</label>
              <textarea class="form-control" name="subtitle" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label">Harga</label>
              <input type="text" class="form-control" name="price" placeholder="Masukan harga barang">
            </div>
            <div class="mb-3 stokbarang">
              <label class="form-label">Stok</label>
              <input type="text" class="form-control" name="stok" placeholder="Masukan stok barang">
            </div>
            <div class="mb-3">
              <?php
               $cat = $this->db->get('category')->result_array();
              ?>
              <label class="form-label">Category</label>
               <select class="form-select" name="category" aria-label="Default select example">
                  <option selected value="0">Harus pilih salah satu!</option>
                  <?php foreach($cat as $ct): ?>
                  <option value="<?= $ct['id_category'] ?>"><?= $ct['category'] ?></option>
                  <?php endforeach; ?>
               </select>
            </div>
            <div class="mb-3 showhiddenslide">
              <label for="formFile" class="form-label">Pilih foto</label>
              <input class="form-control" type="file" name="image" id="formFile">
            </div>
            <div class="form-check">
              <div class="row w-50">
                <div class="col-md-4">
                  <input class="form-check-input checkmotif" type="checkbox" value="">
                  <label class="form-check-label" for="checkmotif">
                    Ceklis jika ada motif
                  </label>
                </div>
                <div class="col-md-4">
                  <input class="form-check-input checkwarna " type="checkbox" value="">
                  <label class="form-check-label" for="checkwarna">
                    Ceklis jika ada warna
                  </label>
                </div>
                <div class="col-md-4">
                  <input class="form-check-input slidecheck " type="checkbox" value="">
                  <label class="form-check-label" for="slidecheck">
                    Ceklis jika ada slide
                  </label>
                </div>
              </div>              
            </div>
            <div class="mb-3 mt-3 d-none showhiddenslide">
             <div class="row">
               <div class="col-md-4">
                 <label for="formFile" class="form-label">Image 1</label>
                 <input class="form-control" type="file" name="image1" id="formFile">
               </div>
               <div class="col-md-4">
                 <label for="formFile" class="form-label">Image 2</label>
                 <input class="form-control" type="file" name="image2" id="formFile">
               </div>
               <div class="col-md-4">
                 <label for="formFile" class="form-label">Image 3</label>
                 <input class="form-control" type="file" name="image3" id="formFile">
               </div>
             </div>
            </div>
            <div class="mb-3 d-none showhiddenmotif">
             <div class="row">
              <p class="h6 text-center mt-2">__Motif__</p>
              <label class="text-center text-danger">
                <small>kosongkan kolom jika tidak ada</small>
              </label>
               <div class="col-md-6">
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="motif1" placeholder="motif satu">
                   <input type="text" class="form-control mt-1 mb-1" name="stok1m" placeholder="stok motif satu">
                 </div>
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="motif2" placeholder="motif dua">
                   <input type="text" class="form-control mt-1 mb-1" name="stok2m" placeholder="stok motif dua">
                 </div>
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="motif3" placeholder="motif tiga">
                   <input type="text" class="form-control mt-1 mb-1" name="stok3m" placeholder="stok motif tiga">
                 </div>
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="motif4" placeholder="motif empat">
                   <input type="text" class="form-control mt-1 mb-1" name="stok4m" placeholder="stok motif empat">
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="motif5" placeholder="motif lima">
                   <input type="text" class="form-control mt-1 mb-1" name="stok5m" placeholder="stok motif lima">
                 </div>
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="motif6" placeholder="motif enam">
                   <input type="text" class="form-control mt-1 mb-1" name="stok6m" placeholder="stok motif enam">
                 </div>
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="motif7" placeholder="motif tujuh">
                   <input type="text" class="form-control mt-1 mb-1" name="stok7m" placeholder="stok motif tujuh">
                 </div>
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="motif8" placeholder="motif delapan">
                   <input type="text" class="form-control mt-1 mb-1" name="stok8m" placeholder="stok motif delapan">
                 </div>
               </div>
             </div>
            </div>
            <div class="mb-3 d-none showhiddenwarna">
             <div class="row">
              <p class="h6 text-center mt-2">__Warna__</p>
              <label class="text-center text-danger">
                <small>kosongkan kolom jika tidak ada</small>
              </label>
               <div class="col-md-6">
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="warna1" placeholder="warna satu">
                   <input type="text" class="form-control mt-1 mb-1" name="stok1w" placeholder="stok warna satu">
                 </div>
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="warna2" placeholder="warna dua">
                   <input type="text" class="form-control mt-1 mb-1" name="stok2w" placeholder="stok warna dua">
                 </div>
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="warna3" placeholder="warna tiga">
                   <input type="text" class="form-control mt-1 mb-1" name="stok3w" placeholder="stok warna tiga">
                 </div>
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="warna4" placeholder="warna lima">
                   <input type="text" class="form-control mt-1 mb-1" name="stok4w" placeholder="stok warna empat">
                 </div>
               </div>
               <div class="col-md-6">
                  <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="warna5" placeholder="warna lima">
                   <input type="text" class="form-control mt-1 mb-1" name="stok5w" placeholder="stok warna lima">
                 </div>
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="warna6" placeholder="warna enam">
                   <input type="text" class="form-control mt-1 mb-1" name="stok6w" placeholder="stok warna enam">
                 </div>
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="warna7" placeholder="warna tujuh">
                   <input type="text" class="form-control mt-1 mb-1" name="stok7w" placeholder="stok warna tujuh">
                 </div>
                 <div class="border-bottom d-flex">
                   <input type="text" class="form-control mt-1" name="warna8" placeholder="warna delapan">
                   <input type="text" class="form-control mt-1 mb-1" name="stok8w" placeholder="stok warna delapan">
                 </div>
               </div>
             </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Insert data</button>
          </div>
        </form>
        </div>
      </div>
    </div>
