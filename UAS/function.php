<?php
$conn = mysqli_connect("localhost", "root", "","db");

function query($query) {
    global $conn;
    $result= mysqli_query($conn, $query);
    $rows=[];
    while( $rows = mysqli_fetch_assoch($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data) {
    global $conn;

    $username = $data["username"];
    $alamat = $data["alamat"];
    $email = $data["email"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $result= mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$alamat', '$email', '$password')");
    return mysqli_affected_rows($conn);
    


}


    


?>