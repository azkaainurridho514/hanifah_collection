          <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Info navbar</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Navbar</th>
                      <th>Hero</th>
                      <th>Subhero</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                      <td><?= $hero['nav_judul'] ?></td>
                      <td><?= $hero['judul_hero'] ?></td>
                      <td><?= $hero['sub_judul_hero'] ?></td>
                      <td>
                        <a href="" class="text-decoration-none badge rounded-pill bg-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                
              </div>
             
            </div>
          </div>

      <!--  <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover text-center">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Navbar</th>
                    <th>Judul hero</th>
                    <th>Sub judul hero</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td><?= $hero['nav_judul'] ?></td>
                    <td><?= $hero['judul_hero'] ?></td>
                    <td><?= $hero['sub_judul_hero'] ?></td>
                    <td>
                      <a href="#" class="text-decoration-none badge rounded-pill bg-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div> -->

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="<?= base_url() ?>admin/update_hero" method="post">
                    <div class="mb-3">
                      <label class="form-label">Judul navbar</label>
                      <input type="text" class="form-control" placeholder="Masukan judul navbar" name="navbar" value="<?= $hero['nav_judul'] ?>">
                    </div>
                    <div class="mb-3">
                      <label class="form-label"> Judul hero</label>
                      <input type="text" class="form-control" placeholder="Masukan judul hero" name="judul" value="<?= $hero['judul_hero'] ?>">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Subjudul hero</label>
                      <textarea name="subjudul" class="form-control" rows="3" value=""><?= $hero['sub_judul_hero'] ?></textarea>
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

       