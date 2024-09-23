<?php
// Establish a connection to the database
$conn = mysqli_connect("localhost", "root", "", "perusahaan");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission and insert data into the database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_pegawai = $_POST['nama_pegawai'];
    $nip = $_POST['nip'];
    $alamat = $_POST['alamat'];
    $jabatan = $_POST['jabatan'];
    $username = $_POST['username'];

    // Prepare an insert query
    $sql = "INSERT INTO pegawai (nama_pegawai, nip, alamat, jabatan, username) VALUES ('$nama_pegawai', '$nip', '$alamat', '$jabatan', '$username')";

    if (mysqli_query($conn, $sql)) {
        echo "Pegawai berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Fetch "Jabatan" options from the database
$qry_tabel_jabatan = mysqli_query($conn, "SELECT * FROM tabel_jabatan");
$jabatan_options = [];
while ($row = mysqli_fetch_assoc($qry_tabel_jabatan)) {
    $jabatan_options[] = $row;
}

// Close the connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h3>Tambah Pegawai</h3>
        <form method="post" action="">
            <div class="mb-3">
                <label for="nama_pegawai" class="form-label">Nama Pegawai:</label>
                <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP:</label>
                <input type="text" id="nip" name="nip" class="form-control">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" id="alamat" name="alamat" class="form-control">
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <select id="jabatan" name="jabatan" class="form-control">
                    <option value="">-- Pilih Jabatan --</option>
                    <?php foreach ($jabatan_options as $jabatan) { ?>
                        <option value="<?= $tabel_jabatan['nama_jabatan']; ?>"><?= $jabatan['nama_jabatan']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>
            <input type="submit" value="Tambah Pegawai" class="btn btn-primary">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>