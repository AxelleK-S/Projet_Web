<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale-1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="i.css">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
  rel="stylesheet"
/>
    <title>Connexion</title>
</head>
<body>
<?php
function verification(){
include("fonction.php");
}?>

        <div class ="container" id="toolbar" style="background-image: linear-gradient(60deg, #8bdde8, #8be8d7);
                                background-clip: text;
                                color: Black;
                                font-family: sans-serif;
                                position: fixed;
                                left: 65px;
                                top: 0px;
                                z-index: 1000;
                                "
                                >
              <h1 align="center" > Bienvenue sur notre site portfolio
                  <a href="#apropos" style="color :black;
                                            font-size: medium;
                                             padding-left: 155px;
                                              transition: color 1s;" >A propos</a>
                  <a href="#contact" style="color :black;
                                            font-size: medium;
                                             padding-left: 75px;
                                             transition: color 1s;" >Contactez nous</a>
              </h1>
        </div>

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                  <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0 ">
                      <div class="col-md-6 col-lg-5 d-none d-md-block">
                        <img src="Images/work.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;height:99%;" />
                      </div>
                      <div class="col-md-6 col-lg-7 d-flex align-items-center">
                          <div class="card-body p-4 p-lg-7 text-black">

                         <form method="post" action="fonction.php">

                           <div class="d-flex align-items-center mb-3 pb-1">
                              <i class="fas fa-cubes fa-2x me-3" style="color: #8af2cc;"></i>
                              <span class="h1 fw-bold mb-0">Logo</span>
                          </div>

                          <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Veuillez entrer vos identifiants</h5>

                                 <div class="form-outline mb-4">
                                      <label for="Email" class="form-label">Email address</label>
                                      <input type="email" class="form-control form-control-lg" id="Email" aria-describedby="emailHelp" placeholder="Habitant@gmail.com" name="email" required>
                                  </div>
                                  <div class="form-outline mb-4">
                                          <label for="Password" class="form-label">Password</label>
                                          <input type="password" class="form-control form-control-lg" id="Password" minlength="8" name="password" required>
                                          
                                  </div>
                                <div class="form-outline form-check">
                                  <input type="checkbox" class="form-check-input" id="Check" required>
                                  <label class="form-check-label" for="Check">jaccepte l utilisation des cookies</label>
                               </div>
                               <div class="pt-1 mb-4">
                                   <button type="submit" class="btn btn-dark btn-lg btn-block">Envoyer</button>
                               </div>

                            </form>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

<div class="container py-5 h-100" id="apropos" style="font-style: italic;
                                               font-family: 'Comic Sans MS',serif;
                                               font-palette: dark;">
Nous sommes une entreprise de prestation de services offrant des solutions web et logiciel
</div>

<div class="container py-5 h-100" id="contact" style="font-style: normal;
                                               font-family: 'Comic Sans MS',serif;
                                               font-palette: dark;
                                               background-color: #a4f5d7">
    <div class="card h-100 w-100" style="background-color: #8af2cc">
        <div class="d-flex mb-3 pb-1">
            <i class="fas fa-phone fa-2x me-3" style="color: black;"></i>
            <span class="h6 fw-normal mb-0">Tel : 691983314</span>
        </div>

        <div class="d-flex mb-3 pb-1">
            <i class="fas fa-mail-bulk fa-2x me-3" style="color: black;"></i>
            <span class="h6 fw-normal mb-0">axelle.kwamou@2026.ucac-icam.com</span>
            <span class="h6 fw-normal mb-0">, daryl.kuitche@2023.ucac-icam.com</span>
        </div>

        <div class="d-flex mb-3 pb-1">
            <i class="fas fa-address-card fa-2x me-3" style="color: black;"></i>
            <span class="h6 fw-normal mb-0">Ucac-Icam par Yansoki</span>
        </div>

    </div>

</div>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>
</body>
</html>
