<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="icon" href="assets/img/2.1.png" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed">
  <div class="container">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" bg-secondary data-bs-theme="secondary" >
      <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="image/logo.jpg" width="40"  alt="">
        <!-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg> -->
        <span class="fs-4 ms-2 font-coko">Salyan|Store</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#produk" class="nav-link">Produk</a></li>
        <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
        <li class="nav-item"><a href="dashboard.php" class="nav-link">Admin</a></li>
      </ul>
    </header>
    <main>
  <section class="py-5 text-center container">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="assets/img/hero.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="image/baju-ibu-menyusui-1.jpg" height="300" width="100%"  alt="">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 ><b>Get Buy in Salyan|Store</b></h1>
            <p>Salyan|Store</p>
            <p><a class="btn btn-lg btn-danger" href="#produk">Lihat Produk!</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  </section>
  

  <div id="produk" class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm p-4">
            <img src="image/baju-ibu-menyusui-1.jpg" class="bd-placeholder-img card-img-top" width="50%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"><b>Baju Ibu Hamil</b></text>

            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="form.php"><button type="button" class="btn btn-sm btn-outline-secondary">Beli Sekarang!</button></a>
                </div>
                <small class="text-muted"><b>Rp 200.000</b></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm p-4">
           <img src="image/baju.jpeg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"><b>Shirt's Woman</b></text>

            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="form.php"><button type="button" class="btn btn-sm btn-outline-secondary">Beli Sekarang!</button></a>
                </div>
                <small class="text-muted"><b>Rp 75.000</b></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm p-4">
           <img src="image/Baju_c.jpg" class="bd-placeholder-img card-img-top" width="80%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"><b>Shirting Woman</b></text>

            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="form.php"><button type="button" class="btn btn-sm btn-outline-secondary">Beli Sekarang!</button></a>
                </div>
                <small class="text-muted"><b>Rp 95.000</b></small>
              </div>
            </div>
          </div>
        </div>
        
</main>
<footer class="footer text-center p-5">
            <div class="container">
                <div class="row bg-secondary">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-light mb-4">Lokasi</h4>
                        <p class="text-light mb-4">
                             Jln.Pangeran Diponeogoro<br> Bogor Kota
                            <br />
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-light mb-4">Sosial Media</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href=""><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href=""><i class="fab fa-fw fa-instagram"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-light mb-4">Tentang Website</h4>
                        <p class="text-light mb-4">
                            Website ini menjual produk baju khusus untuk ibu hamil dan wanita.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>