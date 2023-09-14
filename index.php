<?php
include_once("db_connect.php");
?>
<!DOCTYPE html>

<html lang="cs-cz">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Martina Uhrová" />
    <meta name="keywords" content="HTML, CSS, portfolio" />

    <title>Martina Uhrová portfolio</title>

    <link href="styl.css" rel="stylesheet" type="text/css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

  <body>
    <!-- navigace -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <div class="container-fluid">
        <span class="navbar-text d-none d-md-block fs-3"> Martina Uhrová </span>
        <button
          class="navbar-toggler ms-auto m-2"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#hlavni-navigace"
          data-bs-auto-close="true"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="hlavni-navigace">
          <div class="navbar-nav ms-auto">
            <a class="nav-link navbar-tlacitko active" href="#omne">O mně</a>
            <a class="nav-link navbar-tlacitko" href="#dovednosti"
              >Dovednosti</a
            >
            <a class="nav-link navbar-tlacitko" href="#projekty">Projekty</a>
            <a class="nav-link navbar-tlacitko" href="#zajmy">Zájmy</a>
            <a class="nav-link navbar-tlacitko" href="#kontakt">Kontakt</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- navigace -->

    <!-- main -->
    <main>
      <!--Zobrazeni aktivni zalozky pri skrolovani-->
      <div
        data-bs-spy="scroll"
        data-bs-target="#hlavni-navigace"
        data-bs-smooth-scroll="true"
        tabindex="0"
      >
        <!-- o mne -->
        <section id="omne" class="container p-4 pb-1">
          <div class="row align-items-center">
            <div class="col-12 offset-md-1 col-md-4">
              <img
                src="Img/portret.png"
                class="img-fluid mb-4 portret d-block mx-auto"
                alt="portret"
              />
            </div>
            <div class="col-12 col-md-7 justify-content-center">
              <h1 class="uvod display-3">Martina Uhrová</h1>
              <h3 class="ms-4 uvod">
                <strong>junior developer</strong>, analytik dat
              </h3>
              <h3 class="ms-5 uvod">na rodičovské dovolené</h3>

              <div class="d-flex justify-content-center">
                <a
                  class="btn tlacitko-oranzove m-3"
                  href="Files/Uhrova_CV_CZ_bez_kontaktu.pdf"
                  >Životopis</a
                >
                <a class="btn tlacitko-oranzove m-3" href="#kontakt">Kontakt</a>
              </div>
            </div>
          </div>
          <div class="row" id="omne">
            <h1>O mně</h1>
            <p>
              Po vystudování oboru Statistika a analýza dat na MU jsem začala
              pracovat jako analytik dat na Ústavu zdravotnických informací a
              statistiky ČR. Při práci analytika jsem objevila své nadšení pro
              programování a tvorbu aplikací a ráda bych změnila své profesní
              zaměření a věnovala se programování na plný úvazek.
            </p>
            <p>
              Proto jsem si na rodičovské dovolené doplnila vzdělání o
              intenzivní rekvalifikační kurz Objektově orientované programování.
              V současnosti jsem stále na rodičovské dovolené.
            </p>
          </div>
        </section>
        <!-- /o mne -->
        <!-- dovednosti -->
        <section id="dovednosti" class="container p-4 pb-1 mt-4">
          <h2 class="mt-4">Dovednosti</h2>
          <!-- WWW -->
          <div
            class="row mb-5 mb-md-0"
            id="svg-row1"
            onmouseover="addSvgAnimation(1)"
            onmouseout="removeSvgAnimation(1)"
          >
            <div class="svg-container">
              <svg
                width="100%"
                height="100%"
                viewBox="0 0 100 100"
                preserveAspectratio="none"
              >
                <polygon class="svg-rectangle" points="0,0 0,100 1,100 1,0" />
                <polygon
                  class="svg-triangle"
                  points="0,0 0,100 1,100 3,50 1,0 0,0"
                />
              </svg>
              <div class="svg-text row">
                <div class="col-12 col-md-auto mb-4 mb-md-0 me-0 me-lg-5">
                  <h3 class="text-bold">WWW</h3>
                </div>
                <div class="col-1 col-md-auto ms-2 svg-icon-div">
                  <i
                    class="fa-brands fa-html5 svg-icon"
                    data-bs-toggle="tooltip"
                    data-bs-title="HTML5"
                  ></i>
                </div>

                <div class="col-1 col-md-auto mx-2 svg-icon-div">
                  <i
                    class="fa-brands fa-css3 svg-icon"
                    data-bs-toggle="tooltip"
                    data-bs-title="CSS3"
                  ></i>
                </div>
                <div class="col-1 col-md-auto mx-2 svg-icon-div">
                  <i
                    class="fa-brands fa-js svg-icon"
                    data-bs-toggle="tooltip"
                    data-bs-title="Java Script"
                  ></i>
                </div>
                <div class="col-1 col-md-auto mx-2 svg-icon-div">
                  <i
                    class="fa-brands fa-react svg-icon"
                    data-bs-toggle="tooltip"
                    data-bs-title="React"
                  ></i>
                </div>
                <div class="col-1 col-md-auto mx-2 svg-icon-div">
                  <i
                    class="fa-brands fa-bootstrap svg-icon"
                    data-bs-toggle="tooltip"
                    data-bs-title="Bootstrap"
                  ></i>
                </div>
                <div class="col-1 col-md-auto ms-3 svg-icon-div">
                  <i
                    class="fa-brands fa-php svg-icon"
                    data-bs-toggle="tooltip"
                    data-bs-title="PHP"
                  ></i>
                </div>
              </div>
            </div>
          </div>
          <!-- Programovaci jazyky -->
          <div
            class="row mb-5 mb-md-0"
            id="svg-row2"
            onmouseover="addSvgAnimation(2)"
            onmouseout="removeSvgAnimation(2)"
          >
            <div class="svg-container">
              <svg
                width="100%"
                height="100%"
                viewBox="0 0 100 100"
                preserveAspectratio="none"
              >
                <polygon class="svg-rectangle" points="0,0 0,100 1,100 1,0" />
                <polygon
                  class="svg-triangle"
                  points="0,0 0,100 1,100 3,50 1,0 0,0"
                />
              </svg>
              <div class="svg-text row">
                <div class="col-12 col-md-auto mb-4 mb-md-0 me-0 me-lg-5">
                  <h3 class="text-bold">Programovací jazyky</h3>
                </div>
                <div class="col-auto svg-icon-div">
                  <img
                    src="Img/Csharp.png"
                    alt="C# logo"
                    class="imgLogo"
                    data-bs-toggle="tooltip"
                    data-bs-title="C#"
                  />
                </div>
                <div class="col-auto svg-icon-div">
                  <i
                    class="fa-brands fa-java svg-icon"
                    data-bs-toggle="tooltip"
                    data-bs-title="Java"
                  ></i>
                </div>
                <div class="col-auto svg-icon-div">
                  <i
                    class="fa-brands fa-python svg-icon"
                    data-bs-toggle="tooltip"
                    data-bs-title="Python"
                  ></i>
                </div>
                <div class="col-auto svg-icon-div">
                  <i
                    class="fa-brands fa-r-project svg-icon"
                    data-bs-toggle="tooltip"
                    data-bs-title="R"
                  ></i>
                </div>
              </div>
            </div>
          </div>
          <!-- Databaze -->
          <div
            class="row mb-5 mb-md-0"
            id="svg-row3"
            onmouseover="addSvgAnimation(3)"
            onmouseout="removeSvgAnimation(3)"
          >
            <div class="svg-container">
              <svg
                width="100%"
                height="100%"
                viewBox="0 0 100 100"
                preserveAspectratio="none"
              >
                <polygon class="svg-rectangle" points="0,0 0,100 1,100 1,0" />
                <polygon
                  class="svg-triangle"
                  points="0,0 0,100 1,100 3,50 1,0 0,0"
                />
              </svg>
              <div class="svg-text row">
                <div class="col-12 col-md-auto mb-4 mb-md-0 me-0 me-lg-5">
                  <h3 class="text-bold">Databáze</h3>
                </div>
                <div class="col-auto svg-icon-div">
                  <img
                    src="Img/Access.png"
                    alt="Access logo"
                    class="imgLogo"
                    data-bs-toggle="tooltip"
                    data-bs-title="Access"
                  />
                </div>
                <div class="col-auto svg-icon-div">
                  <img
                    src="Img/Oracle.png"
                    alt="Oracle logo"
                    class="imgLogo"
                    data-bs-toggle="tooltip"
                    data-bs-title="Oracle"
                  />
                </div>
                <div class="col-auto svg-icon-div">
                  <img
                    src="Img/MSQL.png"
                    alt="MS SQL Server logo"
                    class="imgLogo"
                    data-bs-toggle="tooltip"
                    data-bs-title="Miscrosoft SQL Server"
                  />
                </div>
                <div class="col-auto svg-icon-div">
                  <img
                    src="Img/SQL.png"
                    alt="SQL logo"
                    class="imgLogo"
                    data-bs-toggle="tooltip"
                    data-bs-title="PL/SQL"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- DevOps -->
          <div
            class="row mb-5 mb-md-0"
            id="svg-row4"
            onmouseover="addSvgAnimation(4)"
            onmouseout="removeSvgAnimation(4)"
          >
            <div class="svg-container">
              <svg
                width="100%"
                height="100%"
                viewBox="0 0 100 100"
                preserveAspectratio="none"
              >
                <polygon class="svg-rectangle" points="0,0 0,100 1,100 1,0" />
                <polygon
                  class="svg-triangle"
                  points="0,0 0,100 1,100 3,50 1,0 0,0"
                />
              </svg>
              <div class="svg-text row">
                <div class="col-12 col-md-auto mb-4 mb-md-0 me-0 me-lg-5">
                  <h3 class="text-bold">DevOps</h3>
                </div>
                <div class="col-1 col-md-auto ms-2 svg-icon-div">
                  <i
                    class="fa-brands fa-windows svg-icon"
                    data-bs-toggle="tooltip"
                    data-bs-title="Windows Server"
                  ></i>
                </div>
                <div class="col-1 col-md-auto mx-3 svg-icon-div">
                  <i
                    class="fa-brands fa-linux svg-icon"
                    data-bs-toggle="tooltip"
                    data-bs-title="Linux"
                  ></i>
                </div>
                <div class="col-1 col-md-auto mx-3 svg-icon-div">
                  <i
                    class="fa-brands fa-docker svg-icon"
                    data-bs-toggle="tooltip"
                    data-bs-title="Docker"
                  ></i>
                </div>
                <div class="col-1 col-md-auto mx-3 svg-icon-div">
                  <img
                    src="Img/Azure.png"
                    alt="Azure logo"
                    class="imgLogo"
                    data-bs-toggle="tooltip"
                    data-bs-title="MS Azure"
                  />
                </div>
                <div class="col-1 col-md-auto ms-3 svg-icon-div">
                  <i
                    class="fa-brands fa-github svg-icon"
                    data-bs-toggle="tooltip"
                    data-bs-title="GitHub"
                  ></i>
                </div>
              </div>
            </div>
          </div>
          <!-- Ostatni dovednosti -->
          <div
            class="row mb-5 mb-md-0"
            id="svg-row5"
            onmouseover="addSvgAnimation(5)"
            onmouseout="removeSvgAnimation(5)"
          >
            <div class="svg-container">
              <svg
                width="100%"
                height="100%"
                viewBox="0 0 100 100"
                preserveAspectratio="none"
              >
                <polygon class="svg-rectangle" points="0,0 0,100 1,100 1,0" />
                <polygon
                  class="svg-triangle"
                  points="0,0 0,100 1,100 3,50 1,0 0,0"
                />
              </svg>
              <div class="svg-text row">
                <div class="col-12 col-md-auto mb-4 mb-md-0 me-0 me-lg-5">
                  <h3 class="text-bold">Ostatní dovednosti</h3>
                </div>
                <div class="col-auto svg-icon-div">
                  <img
                    src="Img/Xamarin.png"
                    alt="Xamarin logo"
                    class="imgLogo"
                    data-bs-toggle="tooltip"
                    data-bs-title="Xamarin"
                  />
                </div>
                <div class="col-auto svg-icon-div">
                  <i
                    class="fa-brands fa-android svg-icon"
                    data-bs-toggle="tooltip"
                    data-bs-title="Android Studio"
                  ></i>
                </div>
                <div class="col-auto svg-icon-div">
                  <img
                    src="Img/Selenium.png"
                    alt="Selenium logo"
                    class="imgLogo"
                    data-bs-toggle="tooltip"
                    data-bs-title="Selenium"
                  />
                </div>
              </div>
            </div>
          </div>
          <p>
            Podrobnější informace o vzdělání a dovednostech jsou uvedeny v
            <a href="Files/Uhrova_CV_CZ_bez_kontaktu.pdf" class="odkaz"
              >životopisu</a
            >.
          </p>
        </section>
        <!-- /dovednosti -->

        <!-- projekty -->
        <section id="projekty" class="container p-4 pb-1 mt-4">
          <div class="row">
            <h2 class="mt-4">Projekty</h2>
            <!-- Bootstrap -->
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
              <div class="card my-4 mx-auto vyska-karty">
                <img
                  src="Img/cv_bootstrap.png"
                  class="card-img-bottom mb-3"
                  alt="bootstrap project image"
                />
                <div class="card-body">
                  <h5 class="card-title">
                    <i class="fa-brands fa-bootstrap"></i
                    ><strong> Bootstrap</strong>
                  </h5>
                  <p class="card-text">
                    Samostatný školní projekt, kde bylo úkolem vytvořit pomocí
                    Bootrstrapu webové stránky fiktivního hotelu (limit 8
                    hodin).
                  </p>
                  <div class="d-flex justify-content-center">
                    <a
                      href="https://github.com/MartinaUhrova/Cviceni_Bootstrap.git"
                      target="_blank"
                      class="btn tlacitko-oranzove mx-2"
                      ><i class="fa-solid fa-code"></i> Kód</a
                    >
                    <a
                      href="cv_bootstrap/hotel.html"
                      target="_blank"
                      class="btn tlacitko-oranzove mx-2"
                      ><i class="fa-solid fa-eye"></i> Ukázka</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <!-- /Bootstrap -->
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
              <div class="card my-4 mx-auto vyska-karty">
                <img
                  src="Img/empty.png"
                  class="card-img-bottom mb-3"
                  alt="bootstrap project image"
                />
                <div class="card-body">
                  <h5 class="card-title"><strong>Projekt 2</strong></h5>
                  <p class="card-text">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Tenetur quo ipsa, dolore facere libero incidunt quidem?
                  </p>
                  <div class="d-flex justify-content-center">
                    <a
                      href="https://github.com/MartinaUhrova/Cviceni_Bootstrap.git"
                      target="_blank"
                      class="btn tlacitko-oranzove mx-2"
                      ><i class="fa-solid fa-code"></i> Kód</a
                    >
                    <a
                      href="cv_bootstrap/hotel.html"
                      target="_blank"
                      class="btn tlacitko-oranzove mx-2"
                      ><i class="fa-solid fa-eye"></i> Ukázka</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
              <div class="card my-4 mx-auto">
                <img
                  src="Img/empty.png"
                  class="card-img-bottom mb-3"
                  alt="bootstrap project image"
                />
                <div class="card-body">
                  <h5 class="card-title">
                    <strong>Projekt 3</strong>
                  </h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Distinctio eius, quis dolorem harum veniam enim sunt!
                  </p>
                  <div class="d-flex justify-content-center">
                    <a
                      href="https://github.com/MartinaUhrova/Cviceni_Bootstrap.git"
                      target="_blank"
                      class="btn tlacitko-oranzove mx-2"
                      ><i class="fa-solid fa-code"></i> Kód</a
                    >
                    <a
                      href="cv_bootstrap/hotel.html"
                      target="_blank"
                      class="btn tlacitko-oranzove mx-2"
                      ><i class="fa-solid fa-eye"></i> Ukázka</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
              <div class="card my-4 mx-auto">
                <img
                  src="Img/empty.png"
                  class="card-img-bottom mb-3"
                  alt="bootstrap project image"
                />
                <div class="card-body">
                  <h5 class="card-title">
                    <strong> Projekt 4</strong>
                  </h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Repellat earum ad veritatis nisi eius, fugit tempore.
                  </p>
                  <div class="d-flex justify-content-center">
                    <a
                      href="https://github.com/MartinaUhrova/Cviceni_Bootstrap.git"
                      target="_blank"
                      class="btn tlacitko-oranzove mx-2"
                      ><i class="fa-solid fa-code"></i> Kód</a
                    >
                    <a
                      href="cv_bootstrap/hotel.html"
                      target="_blank"
                      class="btn tlacitko-oranzove mx-2"
                      ><i class="fa-solid fa-eye"></i> Ukázka</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /projekty -->
        <!-- zajmy -->
        <section id="zajmy" class="container p-4 mt-5">
          <div class="row">
            <div class="col-12 col-md-auto mb-0 mb-md-3">
              <h2 id="nadpis-zajmy">Zájmy</h2>
            </div>
            <div class="col-auto mx-auto mx-md-0 vyska-radku">
              <h2 id="zajmy-text-fade" class="text-fade0"></h2>
            </div>
          </div>
          <div id="carousel-zajmy" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Img/hudba.jpg" class="d-block w-100" alt="Music" />
              </div>
              <div class="carousel-item">
                <img src="Img/jidlo.jpg" class="d-block w-100" alt="Food" />
              </div>
              <div class="carousel-item">
                <img
                  src="Img/deskovky.jpg"
                  class="d-block w-100"
                  alt="Board games"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="Img/pc_hry.jpg"
                  class="d-block w-100"
                  alt="PC games"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carousel-zajmy"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carousel-zajmy"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
        <!-- /zajmy -->
        <!-- kontakt -->
        <section id="kontakt" class="container p-4 pb-1 my-4">
          <h2 class="mt-4">Kontakt</h2>
          <div class="row">
            <div class="col-12 col-md-6 order-2">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41780.68410921476!2d16.73902793075286!3d49.11907489624723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4712c2765e7ca183%3A0x602907efce5069e4!2zNjgzIDUyIEhvc3TEm3LDoWRreS1SZcWhb3Y!5e0!3m2!1scs!2scz!4v1690143509070!5m2!1scs!2scz"
                width="100%"
                height="400px"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
              <div class="d-flex justify-content-center my-2">
                <a
                  href="https://www.linkedin.com/in/martina-uhrova"
                  target="_blank"
                >
                  <i class="fa-brands fa-linkedin ikony-velke my-1 mx-2"></i
                ></a>
                <a href="https://github.com/MartinaUhrova" target="_blank">
                  <i
                    class="fa-brands fa-square-github ikony-velke my-1 mx-2"
                  ></i
                ></a>
                <a
                  href="https://www.facebook.com/martina.hlostova/"
                  target="_blank"
                >
                  <i
                    class="fa-brands fa-square-facebook ikony-velke my-1 mx-2"
                  ></i>
                </a>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <h3>Napište mi</h3>
              <form action="index.php#kontakt" method="post">
                <label for="jmeno" class="form-label">Jméno a příjmení</label>
                <input
                  type="text"
                  class="form-control mb-2"
                  id="jmeno"
                  name="jmeno"
                />
                <label for="email" class="form-label">E-mail*</label>
                <input
                  type="email"
                  class="form-control mb-2"
                  id="email"
                  name="email"
                  required
                  placeholder="VasEmail@gmail.com"
                />
                <label for="predmet" class="form-label">Předmět</label>
                <input
                  type="text"
                  class="form-control mb-2"
                  id="predmet"
                  name="predmet"
                />
                <label for="zprava" class="form-label">Zpráva</label>
                <textarea
                  name="zprava"
                  class="form-control mb-1"
                  rows="5"
                  id="zprava"
                  maxlength="1000"
                >
Zde mi můžete zanechat zprávu...
            </textarea
                >
                <p class="mensi-text">Pole označená * jsou povinná.</p>
                <div class="d-flex">
                  <button
                    type="submit"
                    name="submit_form"
                    class="btn tlacitko-oranzove mb-4"
                  >
                    Odeslat
                  </button>
                  <?php
                if (!$connection) {
                  die("Nelze se připojit do databáze. ");
                }

                if (isset($_POST["submit_form"])) {
                  $datum = date('Y/m/d H:i:s', time());
                  $query = "INSERT INTO zpravy(cas, jmeno, email, predmet, zprava) VALUES ('" .
                    $datum . "', '" .
                    addslashes($_POST["jmeno"]) . "', '" .
                    addslashes($_POST["email"]) . "', '" .
                    addslashes($_POST["predmet"]) . "', '" .
                    addslashes($_POST["zprava"]) . "'); ";
                  $result = mysqli_query($connection, $query);
                ?>

                  <span class="ms-4 mt-2"
                    ><em>
                      <?php
                    if ($result) {
                      echo "Zpráva byla úspěšně odeslána!";
                    } else {
                      echo "Zpravu se nepodařilo odeslat.";
                    }
                    mysqli_close($connection);
                  }
                    ?>
                    </em>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </section>
        <!-- /kontakt -->
      </div>
    </main>
    <!-- main -->

    <!-- footer -->
    <footer class="container-fluid">
      <p class="text-center">&copy; Martina Uhrová, 2023</p>
    </footer>
    <!-- footer -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
