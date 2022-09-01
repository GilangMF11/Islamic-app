<!doctype html>
<html>
  <head>
    <title>Al Qur'an Digital</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8b969e22b4.js" crossorigin="anonymous"></script>
  </head>
  <body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container">
          <a class="navbar-brand" href="#"><b class="text-primary ">Geoticy.com</b> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/quran">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Freature
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                  <li><a class="dropdown-item" href="/doa">Doa Sehari Hari</a></li>
                  <li><a class="dropdown-item" href="/quran">Al Qur'an</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Service
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Website</a></li>
                  <li><a class="dropdown-item" href="#">Mobile</a></li>
                  <li><a class="dropdown-item" href="#">Dekstop</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#contact" tabindex="-1" >Contact</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <!-- Akhir Navbar -->
      <div class="container" style="margin-top: 2px">
        @yield('content')
    </div>
    <!-- Click ke action -->
    <div id="cta">
        <div class="dark-overlay">
            <div class="cloud-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto text-center">
                            <h3 class="display-4">Media <span class="food">Islam</span></h3>
                            <h5>Informasi mengenai Ajaran Islam dan <br> Ilmu Alqur'an </h5>
                            <h3 class="color : alicablue; margin-top: 25px;">CONTACT INFORMATION</h3>
                            <div class="py-3 m-6">
                                <i class="fas fa-phone" ><br><p style="color: aliceblue">
                                    <p>No Telp.</p>
                                    <h5 style="font-size: 13px;">085602224999</h5></p>
                                </i>
                                <i class="fas fa-map-marked-alt" ><br><p style="color: aliceblue">
                                    <p>Alamat</p>
                                    <h5 style="font-size: 13px;">jl. P & K Cilongok</h5></p>
                                </i>
                                <i class="fas fa-envelope" ><br><p style="color: aliceblue">
                                    <p>Email</p>
                                    <h5 style="font-size: 13px;">gilangfahmi20@gmail.com</h5></p>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer id="contact" class="text-center mt-auto bg-secondary text-white">
        <p>Powered By Gilang Miftkahul Fahmi</p>
        <p><b>Copyright 2022</b></p>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("a").on('click', function(event){
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 3000, function(){
                        window.location.hash = hash;
                    });
                }
            });
        });
      </script>
    </body>
</html>

