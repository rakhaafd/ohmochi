<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
<div class="taglineproduk">
        <h2 class="judulproduk" id="barang">Produk Kami</h2>
        <p class="deskripsi" >ohmochi! adalah sebuah brand makanan yang menjual berbagai macam kue. <br>Seperti 
            Daifukumochi, Cinnamon Roll, Pastries. Kita juga membuat Spaghetti Brulee</p>
    </div>

    <main class="main-content">
        <div class="wrappercontent">
            <div class="container">
                <input type="radio" name="slide" id="c1" checked>
                <label for="c1" class="card">
                    <div class="row">
                        <div class="icon">1</div>
                        <div class="description">
                            <h4>Daifuku</h4>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c2" >
                <label for="c2" class="card">
                    <div class="row">
                        <div class="icon">2</div>
                        <div class="description">
                            <h4>Pancake</h4>
                            <p></p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c3" >
                <label for="c3" class="card">
                    <div class="row">
                        <div class="icon">3</div>
                        <div class="description">
                            <h4>Pastries</h4>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c4" >
                <label for="c4" class="card">
                    <div class="row">
                        <div class="icon">4</div>
                        <div class="description">
                            <h4>Mango Sago</h4>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c5" >
                <label for="c5" class="card">
                    <div class="row">
                        <div class="icon">5</div>
                        <div class="description">
                            <h4>Cinamon Roll</h4>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c6" >
                <label for="c6" class="card">
                    <div class="row">
                        <div class="icon">6</div>
                        <div class="description">
                            <h4>Spaghetti Brulee</h4>
                        </div>
                    </div>
                </label>
            </div><br>
            

        </div>
</main>
<button class="lihat"><a class="lihat" href="detail.php">Lihat Selengkapnya ></a></button>

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
</body>
</html>