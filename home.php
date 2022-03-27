<?php require_once 'auth/sessman.php'; // remove this after testing is over 
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="wrapper">
        <div class="title">
            Kalkulator BMI
        </div>
        <form method="post">
            <div class="field">
                <input type="text" name="usia" id="usia">
                <label>Usia</label>
            </div>
            <div class="field">
                <input type="text" name="berat" id="berat">
                <label>Berat Badan (kg)</label>
            </div>
            <div class="field">
                <input type="text" name="tinggi" id="tinggi">
                <label>Tinggi Badan (cm)</label>
            </div>
            <div class="field">
                <input type="submit" name="submit" id="submit" value="Hitung">
            </div><br><br>
            <?php
            if (isset($_POST['submit'])) {
                $age = $_POST['usia'];
                $weight = $_POST['berat'];
                $height = $_POST['tinggi'];
                $sen = 100;
                $oriheight = $height / $sen;
                if ($weight <= 0 || $weight > 500) {
                    echo "Please Input Valid weight";
                    exit;
                }
                if ($oriheight <= 0 || $oriheight > 2.5) {
                    echo "Please input valid height";
                    exit;
                }
                $bmi = $weight / ($oriheight * $oriheight);

                echo "Index Ideal anda adalah : " . $bmi . " kg/m<sup>2</sup><br>";
                if ($bmi < 18.5) {
                    echo "You are unfit!";
                } elseif ($bmi = 18.5 || $bmi > 25) {
                    echo "You are normal!";
                } elseif ($bmi = 25 || $bmi > 30) {
                    echo "You are overweight!";
                } else {
                    echo "You are obsessed!";
                }
            }
            ?>
            <div>
        </form><br>
        <?php
        if ($_SESSION['username'] == "admin") {
            echo '<div>
            <button onclick="window.print()">Cetak halaman
            </button>
        </div>';
        }
        ?>
        <p><a href="auth/logout.php">Logout</a>
</body>

</html>