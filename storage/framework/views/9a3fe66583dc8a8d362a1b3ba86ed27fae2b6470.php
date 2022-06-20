<?php 
try {
    if(DB::connection()->getPdo()){
        echo "Berhasil terkoneksi ke basis data<b>".DB::connection()->getDatabaseName()."</b>"; }
    } catch(Exception $e) {
        echo "Gagal Terkoneksi". $e;
    }
    ?>
<?php /**PATH C:\Users\User\LaravelPrelab10_72200390\resources\views/koneksi.blade.php ENDPATH**/ ?>