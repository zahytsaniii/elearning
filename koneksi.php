<?php
$conn = mysqli_connect("localhost", "root", "", "db_sistem");

if (mysqli_connect_errno()) {
    echo "Koneksi data gagal :" . mysqli_connect_error();
}


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function register($data)
{

    global $conn;

    $username = $data['username'];
    $email    = $data['email'];
    $password = mysqli_real_escape_string($conn, $data['password']);

    // Cek email sudah ada atau belum
    $result = mysqli_query($conn, "SELECT email FROM tb_akun WHERE email = '$email'");
    if (mysqli_fetch_assoc($result)) {
        echo
        "<script>
    alert ('email sudah terdaftar');
    </script>";
        return false;
    }

    // Enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    mysqli_query($conn, "INSERT INTO tb_akun (username,email,password) VALUES('$username','$email','$password')");

    return mysqli_affected_rows($conn);
}

function login($data)
{
    global $conn;
    $username = $_POST['username'];
    $_SESSION['username'] = $username;
    $password = $_POST['password'];

    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "db_sistem");
    if (!$conn) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    // Query untuk mencari username
    $result = mysqli_query($conn, "SELECT * FROM tb_akun WHERE username = '$username'");
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    // Cek username
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Cek password
        if (password_verify($password, $row["password"])) {
            // Redirect ke halaman register.php jika login berhasil
            header("Location: dashboarduser.php");
            
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
    // Tutup koneksi database
    mysqli_close($conn);
}
