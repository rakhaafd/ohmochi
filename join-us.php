<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us</title>
    <link rel="icon" href="./icon/icon.png">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="form.css" type="text/css">
    <link rel="stylesheet" href="card.css" type="text/css">
    <link rel="stylesheet" href="footer.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        .display {
            text-align: center; 
            color: pink;
            margin:20px;
        }
    </style>
</head>


<body>



<div>
                <div ><img src="./images/team.png" id="about"></div>
            </div>

<div class="bukutamu" id="bukutamu">
    <form id="formpengguna" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h1 class="pengguna">Form Pengguna</h1>

        <label>Nama     : </label> <br>
        <input name="fnama" type="text" id="nama" required>
        <br>
        <label>Email    : </label> <br>
        <input name="femail" type="email" id="email" required>
        <br>
        <label>No.Hp    : </label> <br>
        <input name="fhp" type="text" id="hp" required>
        <br>
        <label>Kode Pos : </label> <br>
        <input name="pos" type="text" id="pos" required>
        <br>
        <label>Pesan    : </label> <br>
        <input name="pesan" type="text" id="pesan" required>
        <br>
        <button id="buttonform" type="submit" onclick="submitForm()">Submit</button>
    </form>
</div>

<br><br><br><br>
<hr>

<div class="display">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["fnama"];
        $email = $_POST["femail"];
        $hp = $_POST["fhp"];
        $pos = $_POST["pos"];
        $pesan = $_POST["pesan"];

        echo "Name     : " . htmlspecialchars($name) . "<br>";
        echo "Email    : " . htmlspecialchars($email) . "<br>";
        echo "No.Hp    : " . htmlspecialchars($hp) . "<br>";
        echo "Kode Pos : " . htmlspecialchars($pos) . "<br>";
        echo "Pesan    : " . htmlspecialchars($pesan) . "<br>";
    }
    ?>

<footer>
                <div class="footercontent">
                    <h3>ohmochi!</h3><br>
                    <ul class="social">
                        <a href="https://wa.me/+62895339023888"><img src="./icon/outline-whatsapp (1).svg" width="40px"></a>
                    <a href="https://www.instagram.com/rakhaafd/"><img src="./icon/instagram-line.svg" width="40px"></a>
                    </ul>
                    <br>
                </div>
                <div class="footerbottom">
                    <p>Copyright &copy;2024 ohmochi! designed by @rakhaafd</p>
                </div>
                    
            </footer>
</div>
</body>
</html>