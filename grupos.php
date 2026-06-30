<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <title>Registro de Grupos</title>
  <style>
    body {
      margin: 0;
      display: flex;
      flex-direction: column;
      /* h2/inputs arriba, teclado abajo */
      justify-content: space-between;
      background: #f0f0f0;
    }

    #contenedor {
      text-align: center;
    }

    input {
      font-size: 22px;
      padding: 10px;
      width: 220px;
      margin: 10px;
    }

    #teclado {
      position: relative;
      /* para ubicar la X */
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
      justify-items: center;
      background: #fff;
      padding: 40px 20px 20px 20px;
      /* espacio extra arriba para la X */
      border-radius: 15px 15px 0 0;
      box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 320px;
      margin: 0 auto;
    }

    #teclado button {
      padding: 15px;
      font-size: 22px;
      width: 80px;
      border: none;
      border-radius: 8px;
      background: #007bff;
      color: white;
      cursor: pointer;
      transition: background 0.2s;
    }

    #teclado button:hover {
      background: #0056b3;
    }

    .borrar {
      background: #dc3545;
    }

    .borrar:hover {
      background: #a71d2a;
    }

    .aceptar {
      background: #28a745;
    }

    .aceptar:hover {
      background: #1e7e34;
    }

    /* Botón X en la esquina */
    .cerrar {
      position: absolute;
      top: 8px;
      right: 12px;
      background: transparent;
      color: #333;
      font-size: 18px;
      /* más pequeño */
      border: none;
      cursor: pointer;
      padding: 0;
      width: auto;
    }
  </style>
</head>

<body>
  <div id="contenedor">
    <div class="row m-2">
      <div class="col">
        <h6>Infancias/Adolescentes (0-17 años) <span style="color: #0086fb;">Children/Adolescents (0-17 years)</span></h6>
        <div class="row mb-2">
          <div class="col">
            <label for="hombres1" class="form-label">Hombres <span style="color: #0086fb;">Men</span></label>
            <input id="hombres1" type="number"  readonly class="form-control text-center" />
          </div>
          <div class="col">
            <label for="mujeres1" class="form-label">Mujeres <span style="color: #0086fb;">Women</span></label>
            <input id="mujeres1" type="number"  readonly class="form-control text-center" />
          </div>
        </div>

        <h6>Jóvenes (18-59 años) <span style="color: #0086fb;">Young Adults (18-59 years)</span></h6>
        <div class="row mb-2">
          <div class="col">
            <label for="hombres2" class="form-label">Hombres <span style="color: #0086fb;">Men</span></label>
            <input id="hombres2" type="number"  readonly class="form-control text-center" />
          </div>
          <div class="col">
            <label for="mujeres2" class="form-label">Mujeres <span style="color: #0086fb;">Women</span></label>
            <input id="mujeres2" type="number"  readonly class="form-control text-center" />
          </div>
        </div>

        <h6>Adultos Mayores (60 años en adelante) <span style="color: #0086fb;">Older Adults (60 years and above)</span></h6>
        <div class="row">
          <div class="col">
            <label for="hombres3" class="form-label">Hombres <span style="color: #0086fb;">Men</span></label>
            <input id="hombres3" type="number"  readonly class="form-control text-center" />
          </div>
          <div class="col">
            <label for="mujeres3" class="form-label">Mujeres <span style="color: #0086fb;">Women</span></label>
            <input id="mujeres3" type="number"  readonly class="form-control text-center" />
          </div>       
        </div>
        <div class="row">
             <button id="btnregistrargrupo" class="btn btn-success">Registrar Grupo <span style="color: #0086fb;">Register Group</span></button>
        </div>
      </div>

      <div class="col">
        <div id="teclado" class="border rounded">
          <span class="cerrar">❌</span>
          <!-- aquí va tu teclado -->  
        </div>
      </div>
    </div>
  </div>


  <script src="js/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      const $teclado = $("#teclado");
      let $inputActivo = null;
      $teclado.hide();
      // Botones 1-9
      for (let i = 1; i <= 9; i++) {
        $("<button>")
          .text(i)
          .on("click", function() {
            if ($inputActivo) $inputActivo.val($inputActivo.val() + i);
          })
          .appendTo($teclado);
      }

      // Botón borrar
      $("<button>")
        .text("⌫")
        .addClass("borrar")
        .on("click", function() {
          if ($inputActivo) {
            let valor = $inputActivo.val();
            $inputActivo.val(valor.slice(0, -1));
          }
        })
        .appendTo($teclado);

      // Botón 0 centrado
      $("<button>")
        .text("0")
        .on("click", function() {
          if ($inputActivo) $inputActivo.val($inputActivo.val() + "0");
        })
        .appendTo($teclado);

      // Botón aceptar
      $("<button>")
        .text("✔")
        .addClass("aceptar")
        .on("click", function() {
          if ($inputActivo) {
            let codigo = $inputActivo.val();
            $teclado.fadeOut();
          }
        })
        .appendTo($teclado);

      // Botón cerrar (X)
      $(".cerrar").on("click", function() {
        $teclado.fadeOut();
      });

      // Mostrar teclado al hacer click en cualquier input
      $("input").on("click", function() {
        $inputActivo = $(this);
        $teclado.fadeIn();
      });
    });
  </script>
</body>

</html>