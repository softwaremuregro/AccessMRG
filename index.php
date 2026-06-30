<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro de Visitantes del Museo Regional de Guerrero</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <meta name="theme-color" content="#000000" />

  <style>
    body {
      background-color: #f4f7f6;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
      background: #611232;
      border-bottom: 2px solid #e9ecef;
      padding: 5px 0;
    }

    .logo-nav {
      height: 50px;
      cursor: pointer;
    }

    .carousel-item img {
      height: 270px;
      object-fit: contain;
    }

    .section {
      display: none;
    }

    .active {
      display: block;
    }

    .card-custom {
      border-radius: 15px;
      border: none;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }

    .radio-img-container {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 10px 15px;
      border: 1px solid #dee2e6;
      border-radius: 10px;
      margin-bottom: 10px;
      transition: all 0.3s;
      cursor: pointer;
      background: white;
      height: 100%;
      /* Para que todos los cuadros midan lo mismo */
    }

    .radio-img-container input[type="radio"] {
      position: absolute;
      opacity: 0;
    }

    /* Cuando está seleccionado */
    .radio-img-container:has(input[type="radio"]:checked) {
      border-color: #0d6efd;
      background-color: #f0f7ff;
    }

    .icon-radio {
      width: 70px;
      height: 70px;
      flex-shrink: 0;
      /* Evita que el icono se aplaste con texto largo */
      object-fit: contain;
    }

    #admin-panel {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: white;
      z-index: 2000;
      overflow-y: auto;
      padding: 20px;
    }
  </style>
</head>

<body>
  <nav class="navbar sticky-top">
    <div class="container d-flex justify-content-between align-items-center">
      <img src="iconos/secretaria.png" class="logo-nav" />
      <img src="iconos/mrg3.png" id="btnUpdate" class="logo-nav" />
      <img id="btnApagar" src="iconos/inah.png" class="logo-nav" />
    </div>
  </nav>
  <div class="row">
    <div class="col-2 ">
      <h6>Créditos:</h6>
      <p style="font-size: 0.8rem;">
        <strong>Dirección de Fotografia:</strong>
        <br>Lic. en Artes Monserrat Rodriguez Vázquez
        <br><strong>Digitalización:</strong>
        <br>Luis Enrique Clemente Guzmán
        <br><strong>Diseño de UI/UX:</strong>
        <br>Arq.Urb. Adilene Maritza Meza Sánchez
        <br><strong>Programación:</strong>
        <br>Ing. Kevin Daniel Antúnez Ortiz
        <br><strong>Titular Museo Regional de Guerrero:</strong>
        <br>Lic. Maura Liliana Ortiz Carrasco
      </p>
    </div>
    <div class="col-8">
      <div
        id="carouselExampleSlidesOnly"
        class="carousel slide"
        data-bs-ride="carousel"
        data-bs-interval="3000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="carrousel/6.jpg" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="carrousel/1.jpg" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="carrousel/2.jpg" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="carrousel/3.jpg" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="carrousel/4.jpg" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="carrousel/5.jpg" class="d-block w-100" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="row">
        <button class="btn btn-lg btn-warning" id="btnGrupos">
          Registrar Grupos <span style="color: #064379;">Register Groups</span>
        </button>
      </div>
      <!--
      <div class="row mt-3">
        <h6>No. Visitantes <span style="color:#0086fb">Visitor Count</span></h6>
        <h1 id="contador-visitantes">0</h1>
      </div>-->
    </div>
  </div>

  <div class="container mt-3 pb-5">
    <div id="step-1" class="card card-custom p-4">
      <h4 id="titulo-persona">Registro Visitante /<span style="color: #0086fb;"> Visitor Registration</span></h4>
      <form id="form-registro">
        <h6>Paso 1 <span style="color: #0086fb;">Step 1</span></h6>
        <p class="fw-bold mb-2">
          ¿Cómo te identificas? (Elige una de las 15 Opciones)<span style="color: #0086fb;"> (Choose one of the 15 Options)</span>
        </p>
        <div class="row mb-3">
          <script>
            const grupos = [{
                id: "hombres",
                txt: "Hombre",
                txtingles: "Man"
              },
              {
                id: "mujeres",
                txt: "Mujer",
                txtingles: "Woman"
              },
              {
                id: "nobinarios",
                txt: "No Binario",
                txtingles: "Non-binary"
              },
              {
                id: "prefiero_no_decirlo",
                txt: "Prefiero no responder",
                txtingles: "Prefer not to say"
              },
              {
                id: "lgbttqimas",
                txt: "LGBTTTQI+",
                txtingles: "LGBTQIA+"
              },
              {
                id: "infancias_adolescentes",
                txt: `Infancias
                /Adolescentes`,
                txtingles: `Children
                /Adolescents`
              },
              {
                id: "adultosmayores",
                txt: "Adultos Mayores",
                txtingles: "Older Adults"
              },
              {
                id: "afrodescendientes",
                txt: "Personas Afrodescendientes",
                txtingles: "People of African Descent"
              },
              {
                id: "personas_artesanas",
                txt: "Personas Artesanas",
                txtingles: "Artisan People"
              },
              {
                id: "personas_con_discapacidad",
                txt: "Personas con Discapacidad",
                txtingles: "People with Disabilities"
              },
              {
                id: "personas_embarazadas",
                txt: "Embarazadas, En Lactancia, Jefas de Familia o en Situación de Vulnerabilidad",
                txtingles: "Pregnant, Breastfeeding, Head of Household or in Situation of Vulnerability"
              },
              {
                id: "situacion_calle",
                txt: "Personas en Situación de Calle",
                txtingles: "People in Situation of Street Life"
              },
              {
                id: "personas_indigenas",
                txt: "Personas Indígenas",
                txtingles: "Indigenous People"
              },
              {
                id: "personas_jovenes",
                txt: "Personas Jóvenes",
                txtingles: "Young People"
              },
              {
                id: "personas_migrantes",
                txt: "Personas Migrantes y en situación de refugio",
                txtingles: "Migrant People and those in Situation of Asylum"
              },
            ];
            grupos.forEach((g) => {
              document.write(`
                                <div class="col-md-6 col-lg-3 cambio">
                                    <label class="radio-img-container">
                                        <input type="radio" name="grupo_social" value="${g.id}">
                                        <img src="iconos/${g.id}.png" class="icon-radio">
                                        <span style="font-size: 0.85rem; line-height: 1.1;">${g.txt}</span>
                                        <span style="color: #0086fb; font-size: 0.85rem; line-height: 1.1;">${g.txtingles}</span>
                                    </label>
                                </div>
                            `);
            });
          </script>
        </div>
        <div class="text-end mt-4">
          <h6>Paso 2 <span style="color: #0086fb;">Step 2</span></h6>
          <button
            type="button"
            id="btn-finalizar"
            class="btn btn-success btn-lg px-5">
            Finalizar <span style="color: #6bc6ff;">Finish</span>
          </button>
        </div>
      </form>
    </div>

    <div id="step-2" class="section card card-custom p-5 text-center">
      <h1 class="display-4 text-success">¡Muchas Gracias!</h1>
      <div
        class="spinner-border text-success my-3"
        style="width: 3rem; height: 3rem"></div>
      <p class="lead">Disfruta de tu visita...</p>
    </div>
  </div>


  <div class="container">
    <div id="grupo-panel" class="section card card-custom">
      <div class="row align-items-center">
        <div class="col m-1">
          <h3>Registro de Grupo de Visitantes<br><span style="color: #0086fb;">Group Registration</span></h3>
        </div>
        <div class="col"><button id="btn-close-grupos" class="btn btn-warning">Cerrar/close</button></div>
        <?php
        require('grupos.php')
        ?>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/firebase-app.js"></script>
  <script src="js/firebase-firestore.js"></script>
    <script>
        $(document).ready(function(){
            $("#btnUpdate").click(function(){
                $.post("update.php", { update: true }, function(data){
                    alert(data);       // muestra mensaje
                    location.reload(); // recarga la página
                });
            });
        });
    </script>
  <script>
    document
      .getElementById("btnApagar")
      .addEventListener("click", apagarEquipo);

    function apagarEquipo() {
      const respuesta = confirm(
        "¿Estás seguro de que quieres apagar el equipo?",
      );
      if (respuesta) {
        fetch("shutdown.php", {
            method: "POST"
          })
          .then((response) => response.text())
          .then((data) => alert(data))
          .catch((error) => alert("Error: " + error));
      }
    }
  </script>
  <script type="module">
    const firebaseConfig = {
      apiKey: "AIzaSyDfHasUn9olSiAe59At2XcZFnyYMvGJm2U",
      authDomain: "appvisitantes-c3b62.firebaseapp.com",
      projectId: "appvisitantes-c3b62",
      storageBucket: "appvisitantes-c3b62.firebasestorage.app",
      messagingSenderId: "924367990190",
      appId: "1:924367990190:web:48d333388355359e5cac3f",
    };

    firebase.initializeApp(firebaseConfig);
    var db = firebase.firestore();
    $(document).ready(function() {
      //contarVisitantesHoy();
    });
    db.enablePersistence()
      .then(function() {
        console.log(
          "✅ Persistencia activada: Los datos se guardarán localmente si no hay red.",
        );
      })
      .catch(function(err) {
        if (err.code == "failed-precondition") {
          console.warn(
            "La persistencia falló: Solo una pestaña puede estar abierta a la vez.",
          );
        } else if (err.code == "unimplemented-custom-browser") {
          console.warn("Este navegador no soporta almacenamiento local.");
        }
      });
    let totalP = 0,
      actualP = 1;
    $("#btn-finalizar").prop("disabled", true);

    $('input[name="grupo_social"]').change(() => {
      $("#btn-finalizar").prop("disabled", false);
    });

    $("#btnGrupos").click(() => {
      $("#step-1").hide();
      $("#grupo-panel").fadeIn();
    });
    $("#btn-close-grupos").click(() => {
      $("#step-1").fadeIn();
      $("#grupo-panel").hide();
      $("#teclado").hide();
    })
    $("#btnregistrargrupo").click(async () => {
      const infhombres = $('#hombres1').val();
      const infmujeres = $('#mujeres1').val();
      const jovhombres = $('#hombres2').val();
      const jovmujeres = $('#mujeres2').val();
      const adulthombres = $('#hombres3').val();
      const adultmujeres = $('#mujeres3').val();
      const ahora = new Date();
      console.log(ahora);
      try {
        // Colección visitas_guiadas
        console.log(
          await db.collection("visitas_guiadas").add({
            infancias_adolescentes_hombres: infhombres,
            infancias_adolescentes_mujeres: infmujeres,
            infancias_adolescentes_total: parseInt(infhombres) + parseInt(infmujeres),
            jovenes_hombres: jovhombres,
            jovenes_mujeres: jovmujeres,
            jovenes_total: parseInt(jovhombres) + parseInt(jovmujeres),
            adultos_mayores_hombres: adulthombres,
            adultos_mayores_mujeres: adultmujeres,
            adultos_mayores_total: parseInt(adulthombres) + parseInt(adultmujeres),
            anio: ahora.getFullYear().toString(),
            dia: ahora.getDate(),
            mes: ahora.toLocaleString("es-ES", {
              month: "long"
            }),
            timestamp: Date.now(),
          }),
        );
        await contarVisitantesHoy();
        $('#hombres1').val("");
        $('#mujeres1').val("");
        $('#hombres2').val("");
        $('#mujeres2').val("");
        $('#hombres3').val("");
        $('#mujeres3').val("");
        $("#grupo-panel").hide();
        $("#teclado").hide();
        $("#step-2").fadeIn();
        setTimeout(() => {
          actualP = 1;
          $("#form-registro")[0].reset();
          $("#step-2").hide();
          $("#step-1").show();
          $("#btn-finalizar").prop("disabled", true);
        }, 2000);

      } catch (e) {
        console.error(e);
      }
    });
    $("#btn-finalizar").click(function() {
      saveToFirebase();
      $("#step-1").hide();
      $("#step-2").fadeIn();
      setTimeout(() => {
        actualP = 1;
        $("#form-registro")[0].reset();
        $("#step-2").hide();
        $("#step-1").show();
        $("#btn-finalizar").prop("disabled", true);
      }, 2000);
    });


    async function saveToFirebase() {
      const grp = $('input[name="grupo_social"]:checked').val();
      if (!grp) return;
      console.log(grp)
      const ahora = new Date();
      console.log(ahora);
      try {
        // Colección visitas_detalladas
        console.log(
          await db.collection("visitas_detalladas").add({
            grupo_social: grp,
            anio: ahora.getFullYear().toString(),
            dia: ahora.getDate(),
            mes: ahora.toLocaleString("es-ES", {
              month: "long"
            }),
            timestamp: Date.now(),
          }),
        );
        await contarVisitantesHoy();
      } catch (e) {
        console.error(e);
      }
    }

    async function contarVisitantesHoy() {
      const hoy = new Date();
      hoy.setHours(0, 0, 0, 0);

      const manana = new Date(hoy);
      manana.setDate(hoy.getDate() + 1);

      // Consulta en visitas_guiadas
      const guiadasSnap = await db.collection("visitas_guiadas")
        .where("timestamp", ">=", hoy)
        .where("timestamp", "<", manana)
        .get();

      // Consulta en visitas_detalladas
      const detalladasSnap = await db.collection("visitas_detalladas")
        .where("timestamp", ">=", hoy)
        .where("timestamp", "<", manana)
        .get();

      const totalHoy = guiadasSnap.size + detalladasSnap.size;

      // Actualizar el h1 con jQuery
      $("#contador-visitantes").text(totalHoy);
    }
  </script>
</body>

</html>