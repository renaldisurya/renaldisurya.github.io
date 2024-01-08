<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nedfume Official Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    
    <link rel="stylesheet" href="style/style.css" />
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
  </head>
  <body style="background-color:#a98628ab" id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-trasparant fixed-top margin-left">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav gap-4 font-poppins" style="transform: translateY(10px)">
            <b><a class="nav-link active fw-medium" aria-current="page" href="#home">Home</a></b>
            <b><a class="nav-link" href="#new">New Arrival</a></b>
            <b><a class="nav-link" href="#product">Product</a></b>
            <b><a class="nav-link" href="#about">About</a></b>
            <b><a class="nav-link" href="#contact">Contact</a></b>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <br></br><br></br><br></br>

    <!-- Home -->
    <section id="main">
      <div class="container" style="margin-top: 5em">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <div>
              <h1 class="fs-1 fw-bold font-poppins">Welcome to our website</h1>
              <p class="font-poppins" style="color: #000000e3">"Discover the essence of elegance with our exquisite collection of fragrances! Unleash your senses and embark on a journey of captivating scents that define sophistication"</p>
              <a class="btn btn-dark px-4 py-2 font-poppins" href="#product" role="button">Shop Now</a>
            </div>
          </div>
          <div class="col-6 text-end">
            <img src="img/promo.png" alt="promo" width="500px" />
          </div>
        </div>
    </section>
    <!-- Akhir Home -->

<!-- New Arrival -->
<section id="new">
  <div class="container font-poppins mx-auto" style="margin-top: 6em;">
      <div class="row">
          <div class="col mt-5">
              <h1 class="fw-bold text-center font-poppins" style="font-size: 32px">New Arrival</h1>
          </div>
      </div>
      <div class="row" style="transform: translateX(2em); margin-left: 12%;">
          <!-- Card 1 -->
          <div class="col mt-5">
            <div class="card" style="width: 18rem; height: 30rem; transform: translateX(-1em); border-color: #00000063; background-color: #cbab5163;">
                <img src="img/perfume1.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
                <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title" style="text-align: center;">Spring Blossom</h5>
                    <p class="card-text" style="text-align: justify;">Escape into a garden of blooming flowers with this enchanting fragrance.</p>
                    <a href="#contact" class="btn btn-dark" style="margin-top: 2em;">Shop Now</a>
                </div>
            </div>
        </div>        
          <!-- Card 2 -->
          <div class="col mt-5">
              <div class="card" style="width: 18rem; height: 30rem; transform: translateX(-1em); border-color: #00000063; background-color: #cbab5163;">
                  <img src="img/perfume2.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 2" />
                  <div class="card-body d-flex flex-column align-items-center">
                      <h5 class="card-title" style="text-align: center;">Romantic Nights</h5>
                      <p class="card-text" style="text-align: justify;">Ignite passion with the alluring notes of Romantic Nights.</p>
                      <a href="#contact" class="btn btn-dark" style="margin-top: 3em;">Shop Now</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- End New Arrival -->

    <!-- Produk -->
    <section id="product">
        <div class="container font-poppins">
          <div class="row">
            <div class="col mt-5">
              <h1 class="fw-bold text-center font-poppins" style="font-size: 32px">All Product</h1>
            </div>
          </div>
          <div class="row" style="transform: translateX(2em)">
            <div class="col mt-5">
              <div class="card" style="width: 18rem; height: 30rem; transform: translateX(-1em); border-color: #00000063; background-color: #cbab5163;">
                <img src="img/product1.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title" style="text-align: center;">Y Live</h5>
                  <p class="card-text" style="text-align: justify;">The opening notes are Orange Blossom; middle notes are Bergamot and Ginger, jasmine and allspice leaves; The base notes are Juniper and Sage.</p>
                  <a href="#contact" class="btn btn-dark" style="margin-top: 0rem">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col mt-5">
              <div class="card" style="width: 18rem; height: 30rem; transform: translateX(-1em); border-color: #00000063; background-color: #cbab5163;">
                <img src="img/product2.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 2" />
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title" style="text-align: center;">Chypre Floral</h5>
                  <p class="card-text" style="text-align: justify;">Top notes are mandarin orange, Middle notes are Turkish rose and Bulgarian rose, Base notes are amber, patchouli and vanilla.</p>
                  <a href="#contact" class="btn btn-dark" style="margin-top: 1rem;">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col mt-5">
              <div class="card" style="width: 18rem; height: 30rem; transform: translateX(-1em); border-color: #00000063; background-color: #cbab5163;">
                <img src="img/product3.png" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 3" />
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title" style="text-align: center;">Passion Warm</h5>
                  <p class="card-text" style="text-align: justify;">The opening notes are orange, middle notes are vanilla, coconut and Violet, The bottom line is rose.</p>
                  <a href="#contact" class="btn btn-dark" style="margin-top: 3rem;">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col mt-5">
              <div class="card" style="width: 18rem; height: 30rem; transform: translateX(-1em); border-color: #00000063; background-color: #cbab5163;">
                <img src="img/product4.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 4" />
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title" style="text-align: center;">Romantic Nights</h5>
                  <p class="card-text" style="text-align: justify;">The top note is bergamot, middle notes are Sichuan pepper, lavender, star anise and nutmeg, base notes are ambroxan and vanilla.</p>
                  <a href="#contact" class="btn btn-dark" style="margin-top: 2rem;">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col mt-4">
              <div class="card" style="width: 18rem; height: 30rem; transform: translateX(-1em); border-color: #00000063; background-color: #cbab5163;">
                <img src="img/product5.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title" style="text-align: center;">Floral Fruit</h5>
                  <p class="card-text" style="text-align: justify;">The opening notes are lychee and pear, middle notes are Damascus Rose, Grasse Rose, Peony and Violet, The bottom line is Musk.</p>
                  <a href="#contact" class="btn btn-dark" style="margin-top: 2rem;">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col mt-4">
              <div class="card" style="width: 18rem; height: 30em; transform: translateX(-1em); border-color: #00000063; background-color: #cbab5163;">
                <img src="img/product6.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title" style="text-align: center;">Pour Homme</h5>
                  <p class="card-text" style="text-align: justify;">The opening note is Clary sage, the middle note is Caramel, the base note is Vetiver.</p>
                  <a href="#contact" class="btn btn-dark" style="margin-top: 3rem;">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col mt-4">
              <div class="card" style="width: 18rem; height: 30rem; transform: translateX(-1em); border-color: #00000063; background-color: #cbab5163;">
                <img src="img/product7.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title" style="text-align: center;">Givenchy</h5>
                  <p class="card-text" style="text-align: justify;">The opening notes are ginger and blood orange, middle notes are tuberose, jasmine and allspice leaves, The base notes are sandalwood, patchouli and vetiver.</p>
                  <a href="#contact" class="btn btn-dark" style="margin-top: 1rem;">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col mt-4">
              <div class="card" style="width: 18rem; height: 30rem; transform: translateX(-1em); border-color: #00000063; background-color: #cbab5163;">
                <img src="img/product8.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title" style="text-align: center;">The Exception</h5>
                  <p class="card-text" style="text-align: justify;">Top note is Mandarin Orange, middle note is Damask Rose, base notes are Indonesian Patchouli Leaf, Amber and Vanilla.</p>
                  <a href="#contact" class="btn btn-dark" style="margin-top: 2rem;">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col mt-4">
              <div class="card" style="width: 18rem; height: 30rem; transform: translateX(-1em); border-color: #00000063; background-color: #cbab5163;">
                <img src="img/product9.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title" style="text-align: center;">Eternity</h5>
                  <p class="card-text" style="text-align: justify;">Top notes are Sage, Apple and Ozonic notes, middle notes are Cypress, Lavender, Geranium and Nutmeg, base notes are Suede, Ambergris, Cypriol Oil or Nagarmotha and Orris Root.</p>
                  <a href="#contact" class="btn btn-dark" style="margin-top: 0rem;">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col mt-4">
              <div class="card" style="width: 18rem; height: 30rem; transform: translateX(-1em); border-color: #00000063; background-color: #cbab5163;">
                <img src="img/product10.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title" style="text-align: center;">Feminino Floral</h5>
                  <p class="card-text" style="text-align: justify;">The opening notes are orange blossom and tuberose, the middle notes are soft vanilla and black sesame, The base note is a mixture of vetiver wood and patchouli.</p>
                  <a href="#contact" class="btn btn-dark" style="margin-top: 0rem;">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col mt-4">
              <div class="card" style="width: 18rem; height: 35em; transform: translateX(-1em); border-color: #00000063; background-color: #cbab5163;">
                <img src="img/product11.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title" style="text-align: center;">Freshness</h5>
                  <p class="card-text" style="text-align: justify;">The opening notes are Grapefruit, Lemon, Mint, Pink Pepper, Bergamot, Aldehydes and Coriander, the middle notes are Ginger, Nutmeg, Jasmine and Melon, The base note is a Incense, Amber, Cedar, Sandalwood, Patchouli, Amberwood and Labdanum.</p>
                  <a href="#contact" class="btn btn-dark" style="margin-top: 0rem;">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col mt-4">
              <div class="card" style="width: 18rem; height: 30em; transform: translateX(-1em); border-color: #00000063; background-color: #cbab5163;">
                <img src="img/product12.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title" style="text-align: center;">Wonder Rose</h5>
                  <p class="card-text" style="text-align: justify;">Top notes are pir, middle notes are berry, base notes are vanilla.</p>
                  <a href="#contact" class="btn btn-dark" style="margin-top: 2em;">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Akhir Produk -->

<!-- About -->
<section id="about">
  <div class="container" style="margin-top: 6rem;">
    <div class="row font-poppins align-items-center">
      <div class="col-lg-7">
        <img src="img/logo.png" alt="about" class="img-fluid" height="1050px" width="550px" />
      </div>
      <div class="col-lg-5">
        <div class="d-flex flex-column">
          <h1 class="fw-bold text-start mb-4" style="margin-top: 5rem;">About</h1>
          <p class="text-start mb-3">Welcome to Chic Fragrances, your destination for exquisite and luxurious perfumes. At Chic Fragrances, we believe that a fragrance is more than just a scent; it is a statement of style and personality.</p>
          <p class="text-start mb-3">Our curated collection of perfumes is carefully selected to provide you with a range of options, from timeless classics to contemporary favorites. Each fragrance tells a unique story, allowing you to express yourself in the most captivating way.</p>
          <p class="text-start">With a commitment to quality and elegance, Chic Fragrances is dedicated to bringing you the finest perfumes from around the world. Explore our collection and embark on a journey of olfactory bliss.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About -->

    <!-- contact -->
    <section id="contact">
      <div class="container font-poppins" style="margin-top: 10rem;">
        <div class="row mt-5">
          <div class="col text-center">
            <h1 class="fw-bold">Contact</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-6 d-flex mt-5">
            <img src="img/icon.png" height="600px" alt="" />
          </div>
          <div class="col-6 mt-5">

          <?php
          //Include file koneksi, untuk koneksikan ke database
          include "koneksi.php";

          //Fungsi untuk mencegah inputan karakter yang tidak sesuai
          function input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
          }
          //Cek apakah ada kiriman form dari method post
          if ($_SERVER["REQUEST_METHOD"] == "POST") {

              $nama=input($_POST["nama"]);
              $no=input($_POST["no"]);
              $alamat=input($_POST["alamat"]);
              $pesanan=input($_POST["pesanan"]);

          //Query input menginput data kedalam tabel anggota
              $sql="insert into pesanan (nama,no,alamat,pesanan) values
		          ('$nama','$no','$alamat','$pesanan')";

          //Mengeksekusi/menjalankan query diatas
              $hasil=mysqli_query($kon,$sql);

          //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
          if ($hasil) {
              header("Location:home.php");
              }
          else {
              echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
              }
    }
    ?>

            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
              <div class="mb-3">
                <label class="form-label fw-semibold">Name</label>
                <input type="text" class="form-control" name="nama" aria-describedby="nama" placeholder="Enter Name" required  style="border-color: #814e2b; background-color: rgba(129, 78, 43, 0.03)" />
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Contact</label>
                <input type="text" class="form-control" name="no" placeholder="Enter Contact" required style="border-color: #814e2b; background-color: rgba(129, 78, 43, 0.03)" aria-describedby="no" />
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Address</label>
                <textarea class="form-control" name="alamat" placeholder="Enter Address" required style="border-color: #814e2b; height: 10em; background-color: rgba(129, 78, 43, 0.03)" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Order</label>
                <textarea class="form-control" name="pesanan" placeholder="Enter Order" required style="border-color: #814e2b; height: 10em; background-color: rgba(129, 78, 43, 0.03)" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-dark px-5 py-2">Buy</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir contact -->

    <footer>
      <br><div class="container font-poppins">
        <div class="row">
          <div class="col text-center p-4" style="border-top: 1px solid #814e2b">
            <div>
              <p style="transform: translateY(8px)">
                Created <i class="bi bi-emoji-smile" style="color: #814e2b"></i> by <a class="text-decoration-none fw-bold" target="_blank" style="color: #000000" href="https://www.instagram.com/renaldisurya_/?hl=en">Renaldi Surya</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
