<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $notelp = isset($_POST['notelp']) ? $_POST['notelp'] : '';
    $jeniskelamin = isset($_POST['jeniskelamin']) ? $_POST['jeniskelamin'] : '';
    $usia = isset($_POST['usia']) ? $_POST['usia'] : '';
    $jenispenyakit = isset($_POST['jenispenyakit']) ? $_POST['jenispenyakit'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : '';
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO kontak VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute
    ([$id, $nama, $notelp, $jeniskelamin, $usia, 
    $jenispenyakit, $alamat, $keterangan]);
    // Output message
    $msg = 'Data anda telah masuk dan segera diproses oleh kami!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Create Contact</h2>
    <form action="create.php" method="post">
        <div class="input-field">
            <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
        </div>
        <div class="input-field">
            <label for="notelp">No Telp</label>
                <input type="text" name="notelp" id="notelp" required>
        </div>
        <div class="input-field">
            <label for="jeniskelamin">Jenis kelamin</label>
                <select name="jeniskelamin" id="jeniskelamin">
                    <option value="">-Pilih Jenis Kelamin-</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
        </div>
        <div class="input-field">
            <label for="usia">Usia</label>
                <input type="text" name="usia" id="usia">
        </div>
        <div class="input-field">
            <label for="jenispenyakit">Jenis Penyakit</label>
                <input type="text" name="jenispenyakit" id="jenispenyakit" required>
        </div>
        <div class="input-field">
            <label id="alamat">Alamat Lengkap</label>      
            <input type="text" name="alamat" id="alamat" required>
        </div>
        <div class="textarea">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" id="keterangan" required>
        </div>
        <div class="submit">
            <input type="submit" value="Submit" name="submit">
        </div>
    </form>
    
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>