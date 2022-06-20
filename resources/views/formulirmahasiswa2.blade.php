<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MAHASISWA</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
         
        <head>
        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 bg-primary py-4"></div>
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
            <head>
        <body>
            <div class="container-fluid rounded mt-4 bg-info">
                <form action="">
                    <div class="form-group w-25">
                        <label>NIM</label>
                        <input type="number" name="nim" class="form-control" placeholder="Masukan NIM" required>
                    </div>

                    <div class="form-group w-25">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Dosen" required>
                    </div>

                    <label>Gender</label>
                    <div class="form-check w-25">
                        <input type="radio" name="gender" value="Perempuan" class="form-check-input">
                        <label>Perempuan</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="radio" name="gender" value="Laki-laki" class="form-check-input">
                        <label>Laki-laki</label>
                    </div>

                    <div class="form-group w-25">
                        <label>Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option value="0">--Pilih Jurusan--</Option>
                            <option value="Teknik Informatika">--Teknik Informatika--</Option>
                            <option value="Sistem Informasi">--Sistem Informasi--</Option>
                            <option value="Kedokteran">--Kedokteran--</Option>
                            <option value="Manajemen">--Manajemen--</Option>
                            <option value="Biologi">--Biologi--</Option>
                        </select>
                    </div>

                    <label>Bidang Minat</label>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimina" value="Basket" class="form-check-input">
                        <label>Basket</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimina" value="Futsal" class="form-check-input">
                        <label>Futsal</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimina" value="Tari" class="form-check-input">
                        <label>Tari</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimina" value="Duta Voice" class="form-check-input">
                        <label>Duta Voice</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimina" value="Musik" class="form-check-input">
                        <label>Musik</label>
                    </div>

                    <div class="form-group w-25 mt-4">
                        <input type="submit" value="SIMPAN" class="btn btn-outline-primary">     
                    </div>
                </form>
            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MAHASISWA</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
         
        <head>
        <body>
            <div class="container-fluid rounded mt-4 bg-info">
                <form action="">
                    <div class="form-group w-25">
                        <label>NIM</label>
                        <input type="number" name="nim" class="form-control" placeholder="Masukan NIM" required>
                    </div>

                    <div class="form-group w-25">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Dosen" required>
                    </div>

                    <label>Gender</label>
                    <div class="form-check w-25">
                        <input type="radio" name="gender" value="Perempuan" class="form-check-input">
                        <label>Perempuan</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="radio" name="gender" value="Laki-laki" class="form-check-input">
                        <label>Laki-laki</label>
                    </div>

                    <div class="form-group w-25">
                        <label>Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option value="0">--Pilih Jurusan--</Option>
                            <option value="Teknik Informatika">--Teknik Informatika--</Option>
                            <option value="Sistem Informasi">--Sistem Informasi--</Option>
                            <option value="Kedokteran">--Kedokteran--</Option>
                            <option value="Manajemen">--Manajemen--</Option>
                            <option value="Biologi">--Biologi--</Option>
                        </select>
                    </div>

                    <label>Bidang Minat</label>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimina" value="Basket" class="form-check-input">
                        <label>Basket</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimina" value="Futsal" class="form-check-input">
                        <label>Futsal</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimina" value="Tari" class="form-check-input">
                        <label>Tari</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimina" value="Duta Voice" class="form-check-input">
                        <label>Duta Voice</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimina" value="Musik" class="form-check-input">
                        <label>Musik</label>
                    </div>

                    <div class="form-group w-25 mt-4">
                        <input type="submit" value="SIMPAN" class="btn btn-outline-primary">     
                    </div>
                </form>
            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
    </body>
</html>