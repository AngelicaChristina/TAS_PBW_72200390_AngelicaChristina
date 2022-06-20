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
            <div class="col-lg-10 vh-100">
                <div class="card mt-4">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                    <div class="container-fluid rounded mt-4 ">
                        @php
                        $bimin = explode(',', $mahasiswa -> bimin);
                        @endphp
                <form action="/mahasiswa/updatemahasiswa/{{$mahasiswa->id}}" method="POST" class="pt-2 pb-2">
                    @csrf
                    @method('PUT')
                    <div class="form-group w-25">
                        <label>NIM</label>
                        <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim }}">
                    </div>

                    <div class="form-group w-25">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
                    </div>

                    <label>Gender</label>
                    <div class="form-check w-25">
                        <input type="radio" name="gender" value="Perempuan" {{ $mahasiswa->gender = 'Perempuan' ? 'checked':''  }}
                        class="form-check-input">
                        <label>Perempuan</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="radio" name="gender" value="Laki-laki" {{ $mahasiswa->gender = 'Laki-laki' ? 'checked':'' }}
                        class="form-check-input">
                        <label>Laki-laki</label>
                    </div>

                    <div class="form-group w-25">
                        <label>Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option value="0">--Pilih Jurusan--</Option>
                            <option value="Teknik Informatika" {{ $mahasiswa->jurusan = 'Teknik Informatika' ? 'selected':'' }}> --Teknik Informatika-- </Option>
                            <option value="Sistem Informasi" {{ $mahasiswa->jurusan = 'Sistem Informasi' ? 'selected':'' }}> --Sistem Informasi-- </Option>
                            <option value="Kedokteran" {{ $mahasiswa->jurusan = 'Kedokteran' ? 'selected':'' }}> --Kedokteran-- </Option>
                            <option value="Manajemen" {{ $mahasiswa->jurusan = 'Manajemen' ? 'selected':'' }}> --Manajemen-- </Option>
                            <option value="Biologi" {{ $mahasiswa->jurusan = 'Biologi' ? 'selected':'' }}> --Biologi-- </Option>
                        </select>
                    </div>

                    <label>Bidang Minat</label>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimin[]" value="Basket" {{ in_array('Basket', $bimin) ? 'checked':'' }}
                        class="form-check-input">
                        <label>Basket</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimin[]" value="Futsal" {{ in_array('Futsal', $bimin) ? 'checked':'' }}
                        class="form-check-input">
                        <label>Futsal</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimin[]" value="Tari" {{ in_array('Tari', $bimin) ? 'checked':'' }}
                        class="form-check-input">
                        <label>Tari</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimin[]" value="Duta Voice" {{ in_array('Duta Voice', $bimin) ? 'checked':'' }}
                        class="form-check-input">
                        <label>Duta Voice</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bimin[]" value="Musik" {{ in_array('Musik', $bimin) ? 'checked':'' }}
                        class="form-check-input">
                        <label>Musik</label>
                    </div>

                    <div class="form-group pt-4">
                        <input type="submit" value="SIMPAN" class="btn btn-outline-primary">     
                    </div>
                </form>
            </div>
                        
                </div>
        </div>
    </div>
</div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
    </body>
</html>