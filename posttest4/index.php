<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare Yuk</title>

    <!-- Connect to another file -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/script.js" defer></script>
    
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />


    <!-- Pop Up -->
    <!-- <script>
        alert("Hay! Selamat kamu sudah menjadi salah satu bagian dari 'Kuyers '");
    </script> -->
</head>

<body>
    <!-- Navbar -->
    <div class="container">
        <div class="navbar">
            <h3>Skincare Kuy</h3>
            <nav>
                <ul>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="./review.php">Review</a></li>
                    <li><a href="./about.php">About me</a></li>

                    <!-- Icon here -->
                    <li><i class="bi bi-brightness-high-fill" id="toggleDark"></i></li>
                </ul>
            </nav>
        </div>

        <div class="content">
            <div>
                <h1>Love your skin and <br> <span>it will love you back</span> </h1>
                <p id="p">Website Skincare Kuy ini merupakan salah satu website yang bisa kalian buka kalo kalian
                    lagi butuh pencerahan mengenai salah satu produk skincare.
                    <br>
                    <br>Ohiyaaa! Kalo kalian mau review juga tentu saja sabii banget yah, so ditunggu reviewnya~~
                </p>
                <br><br>
            </div>
            
        </div>
         <div class="orang">
            <img id='gambar' src="" alt="">
         </div>

        <div class="wrap">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Mau cari review apa?">
                <button type="submit" class="searchButton"></button>
            </div>
        </div>
    </div>

    <footer>
        Copyright &copy; 2022 - Skincare Kuy - All the rights reserved.
    </footer>

</body>

</html>