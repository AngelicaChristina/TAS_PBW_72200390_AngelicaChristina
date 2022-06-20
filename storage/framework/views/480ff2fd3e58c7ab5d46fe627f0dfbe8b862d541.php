<!DOCTYPE html>
<html lang="en">
    <head>
        <title>USER</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn/jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">     
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <head>
        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 bg-primary py-2">
                        <div class="dropdown float-right">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    USER
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdown">
                    <li><a class="dropdown-item" href="#"><?php echo e(Auth::user()-> name ?? ''); ?></a></li>
                    <li><a class="dropdown-item" href="#">Angelica Christina</a></li>
                    <li><a class="dropdown-item" href="/user">Data Pengguna</a></li>
                    <li><a class="dropdown-item" href="/logout">Keluar</a></li>
                </ul>
                </div>
                
</div>
</div>

        <div class="row">
            <div class="col-lg-2 vh-100">
                <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Dosen</a>
                    <a class="nav-link active" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mahasiswa</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Skripsi</a>
                </div>
            </div>
            <div class="col-lg-10 vh-100">
                <div class="card mt-4">
                    <div class="card-header">
                        <a name="" id="" class="btn btn-primary" href="/user/formuliruser" role="button"><i class="bi bi-plus-square-fill"></i>  ADD USER</a>
                        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/user/cari">
                            <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-2" type="submit">Search</button>
                        </form>
                    </div>

                    <div class="card-body">
                        <?php if(session('alertsimpan')): ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong><?php echo e(session('alertsimpan')); ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php elseif(session('alertupdate')): ?>
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong><?php echo e(session('alertupdate')); ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php elseif(session('alerthapus')): ?>
                            <div class="alert alert-danger alert-dismijssible fade show" role="alert">
                            <strong><?php echo e(session('alerthapus')); ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif; ?>

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Pengguna</th>
                                <th scope="col">No Handphone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <th scope="row"><?php echo e($user->firstItem() + $no); ?></th>
                                    <td><?php echo e($u->nik); ?></td>
                                    <td><?php echo e($u->namauser); ?></td>    
                                    <td><?php echo e($u->nomor); ?></td> 
                                    <td><?php echo e($u->email); ?></td>                                
                                    <td>
                                    <a href="/user/edituser/<?php echo e($u -> id); ?>" class="btn btn-outline-primary">
                                    <img src="https://img.icons8.com/material-outlined/452/edit--v1.png" width="20px"></a>
                                    <button onclick="delKonfirm(<?php echo e($u->id); ?>)" class="btn btn-outline-danger">
                                    <img src="https://img.icons8.com/material-outlined/344/filled-trash.png" width="20px"></button></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table> 
                            <?php echo e($user -> total()); ?>

                            <span class="float-right"><?php echo e($user->links()); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <div class="modal fade" id="deleteKonfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penghapusan</h5>
          </div>
          <div class="modal-body"> Apakah anda yakin ingin menghapus data ini?
          </div>
          <div class="modal-footer">
            <a id="deleteLink" type="button" class="btn btn-outline-danger">Yes</a>
            <button type="button" class="btn btn-outline-success" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>
  
    <script>
      function delKonfirm(id){
        var link = document.getElementById('deleteLink')
        link.href = "<?php echo e(URL::to('/user/hapususer/ ')); ?>" +id
        
        $('#deleteKonfirm').modal('show')
      }
      </script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
            <script src="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html><?php /**PATH C:\Users\User\LaravelPrelab10_72200390\resources\views//user.blade.php ENDPATH**/ ?>