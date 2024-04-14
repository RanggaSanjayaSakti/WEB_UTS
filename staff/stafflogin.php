<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "travelscapes";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

?>
<html>
<head>
<title>staff Login</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="/css/adminlogin.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>

<div class="login-form">
<a href="../home.php" class="back-button">Back to Home</a>
    <h2>Staff Login</h2>
    <form method="POST">
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="Staff Username" name="staff_name">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="Password" name="staff_password">
        </div>
        
        <button type="submit" name="Signin">Sign In</button>

        <div class="extra">
            <a href="#">Forgot Password ?</a>
            <a href="#">Create an Account</a>
        </div>

    </form>
</div>
<?php
if(isset($_POST['Signin'])){

    $query = "SELECT * FROM `staff` WHERE `staff_name` = '$_POST[staff_name]'
    AND `staff_password` = '$_POST[staff_password]'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1){
        session_start();
        $_SESSION['staffId'] = $_POST['staff_name'];
        header("location: staffdashboard.php");
    }
    else{
        echo "Incorrect";
    }
}

?>

</body>
</html>
