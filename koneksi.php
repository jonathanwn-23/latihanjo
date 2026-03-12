<?php 
$conn = mysqli_connect("127.0.0.1", "root", "", "projekphp", 3306);


function query($query) {
    global $conn;
    // mysqli_fetch_row
    // mysqli_fetch_assoc
    // mysqli_fetch_array
    // mysqli_fetch_object
    $keranjang = [];
    $result = mysqli_query($conn, $query);
    while ( $pembawaKeranjang = mysqli_fetch_assoc($result)  ) {
        $keranjang[] = $pembawaKeranjang;
    }
    return $keranjang;
}


function create($data) {
    global $conn;

    $jenismenu = $data["jenismenu"];
    $foto = $data["foto"];
    $namamenu = $data["namamenu"];
    $harga = $data["harga"];

    $query = "INSERT INTO daftarmenu (jenismenu, foto, namamenu, harga) VALUES
    ('$jenismenu', '$foto', '$namamenu', '$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function read($data) {
    global $conn;
    $id = $data["id"];
    $query = "SELECT*FROM daftarmenu WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function update($data) {
    global $conn;

    $id = $data["id"];

    $jenismenu = $data["jenismenu"];
    $foto = $data["foto"];
    $namamenu = $data["namamenu"];
    $harga = $data["harga"];


    $query = "UPDATE daftarmenu SET 
    jenismenu = '$jenismenu',
    foto = '$foto',
    namamenu = '$namamenu',
    harga = '$harga'

    WHERE id = $id
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function delete($id) {
    global $conn;
    $query = "DELETE FROM daftarmenu WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>