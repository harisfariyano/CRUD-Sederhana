<?php
include_once '../config/DBQuery.php';

if (isset($_POST["IDSubmit"])) {
    $username = strtoupper($_POST["IDUsername"]);
    $password = strtoupper($_POST["IDPassword"]);
    $conn = DBConnection::getDBConnection();
    $command = mysqli_query($conn, "SELECT * FROM admin WHERE IDUsername = '$username' AND IDPassword = '$password'");
    $row = mysqli_fetch_array($command);
    if ($username == $row["IDUsername"] && $password == $row["IDPassword"]) {
        session_start();
        $_SESSION["Account-Login"] = '';///// ito yung gagamitin natin para pag hindi nag login di makakapasok sa system
        $_SESSION["LoginFirst"] = $username;
        echo '<script>window.location.href="CRUD.php?Home";</script>';
    } else {
        echo '<script>window.location.href="Login_admin.php?Error";</script>';
    }
}
?>
