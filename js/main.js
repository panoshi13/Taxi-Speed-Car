$(document).ready(function () {
  var accion = true;
  const base_url = "http://localhost/TaxiSpeedCar/ajax/";

  $(".cargar").delay(100).fadeOut("slow");
  new WOW().init();

  function mostrar() {
    $.get(base_url + "mostrarTabla.php", function (response) {
      $("#tabla").html(response);
    });
  }

  mostrar();

  $("#guardarBlog").click(function (e) {
    e.preventDefault();
    var form = new FormData($("#formBlog")[0]);
    /* var id_user = $("#id_user").val();
        console.log(id_user); */
    url =
      accion == false
        ? base_url + "actualizar.php"
        : base_url + "crearBlog.php";
    $.ajax({
      type: "POST",
      url: url,
      data: form,
      contentType: false,
      processData: false,
      success: function (response) {
        console.log(response);
        if (response == "true") {
          $("#alerta").html(
            "<div class='alert alert-success' role='alert'>Exito al registrar</div>"
          );
          $("#alerta").fadeOut(4000, "linear");
        } else {
          $("#alerta").html(
            "<div class='alert alert-danger' role='alert'>Debe completar todos los campos</div>"
          );
          $("#alerta").fadeOut(4000, "linear");
        }

        mostrar();
        /* <div class="alert alert-danger" role="alert">
                A simple danger alert—check it out!
                </div> */
        //$(location).attr('href','http://localhost/TaxiSpeedCar/blog/index');
      },
    });
  });

  $(document).on("click", ".btn-danger", function (e) {
    e.preventDefault();
    var element = $(this)[0];
    var id = $(element).attr("delete-id");
    $.post(
      base_url + "eliminarBlog.php",
      {
        id,
      },
      function (response) {
        mostrar();
      }
    );
  });

  $(document).on("click", ".btn-warning", function (e) {
    e.preventDefault();
    accion = false;
    var element = $(this)[0];
    var id = $(element).attr("edit-id");
    $.post(
      base_url + "getDatos.php",
      {
        id,
      },
      function (r) {
        console.log(r);
        let crud = jQuery.parseJSON(r);
        $("#id_post").val(crud.id);
        $("#titulo").val(crud.titulo);
        $("#descorta").val(crud.brief);
        $("#deslarga").val(crud.content);
        if (crud.image) {
          $("#contenido-imagen").html(
            "<img src='http://localhost/TaxiSpeedCar/uploads/image/" +
              crud.image +
              "'  id='imagen' class='img-fluid'>"
          );
        }
        mostrar();
      }
    );
  });

  $(document).on("click", ".btn-primary", function (e) {
    e.preventDefault();
    $("form")[0].reset();
    $("#imagen").remove();
  });

  $(document).on("click", ".btn-success", function (e) {
    e.preventDefault();
    var element = $(this)[0];
    var id = $(element).attr("view-id");
    $(location).attr(
      "href",
      "http://localhost/TaxiSpeedCar/blog/noticia&id=" + id
    );
  });

  $("#limpiar").click(function (e) {
    e.preventDefault();
    $("#formCartilla").trigger("reset");
  });
  /* $("#cerrar_sesion").click(function (e) { 
    e.preventDefault();
    $(location).attr(
      "href",
      "http://localhost/TaxiSpeedCar/"
    );
  }); */

  function filePreview(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $("#conductor_foto").html(
          "<img src='" +
            e.target.result +
            "' alt='' class='img-fluid border border-dark'/>"
        );
      };

      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imagen_conductor").change(function () {
    filePreview(this);
  });

  $("#carillaInformativa").hide();
  var presionar_cartilla = false;
  console.log(presionar_cartilla);
  //Crear catilla en html
  $("#crear_cartilla").click(function () {
    presionar_cartilla = true;
    const datos = {
      placa: $("#placa").val(),
      autorizacion: $("#autorizacion").val(),
      persona: $("#persona").val(),
      ruc: $("#ruc").val(),
      tarjeta: $("#tarjeta").val(),
      nombres: $("#nombres").val(),
      apellidos: $("#apellidos").val(),
      dni: $("#dni").val(),
      fecha: $("#date").val(),
      tipo_taxi: $("#tipo_taxi").val()
    };
    var alfanumerico =
      "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const nombre_imagen = shuffle(alfanumerico).substring(0, 16) + datos.dni;
    $("#imagen_cartilla").val(nombre_imagen);
    $("#nro_placa").html(datos.placa);
    $("#nro_autorzacion").html(datos.autorizacion);
    $("#nro_tarjeta").html(datos.tarjeta);
    $("#persona_autorizada").html(datos.persona);
    $("#nro_ruc").html(datos.ruc);
    $("#nombre_conductor").html(datos.nombres);
    $("#apellido_conductor").html(datos.apellidos);
    $("#nro_dni").html(datos.dni);
    $("#fecha").html("VENCIMIENTO: " + datos.fecha);
    $("#tipo_taxi").html(datos.tipo_taxi);
    $("#carillaInformativa").show();
    console.log("Presionado");
  });

  //Enviar datos por ajax
  $("#confirmar_datos").click(function (e) {
    e.preventDefault();

    if (presionar_cartilla === true) {
      var form = new FormData($("#formCartilla")[0]);
      //var apellido_limpio = apellido.replace(" ", "");
      presionar_cartilla == false;
      console.log(form);
      var id = $("#id_cartilla").val();
      if (id) {
        $.ajax({
          type: "POST",
          url: base_url + "actualizarCartilla.php",
          data: form,
          contentType: false,
          processData: false,
          success: function (response) {
            console.log(response);
            if (response == "true") {
              $("#alertita").show();
              $("#alertita").html(
                "<div class='alert alert-success' id='exito_cartilla' role='alert'>Exito al actualizar</div>"
              );
              tomarImagenPorSeccion(
                "carillaInformativa",
                $("#imagen_cartilla").val()
              );
              $("#alertita").fadeOut(4000, "linear");
              mostrarCartilla();
              $("#formCartilla").trigger("reset");
            } else {
              $("#alertita").show();
              $("#alertita").html(
                "<div class='alert alert-danger' id='error_cartilla' role='alert'>Debe completar todos los campos</div>"
              );
              $("#alertita").fadeOut(4000, "linear");
            }
          },
        });
      } else {
        $.ajax({
          type: "POST",
          url: base_url + "agregarCartilla.php",
          data: form,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == "true") {
              $("#alertita").show();
              $("#alertita").html(
                "<div class='alert alert-success' id='exito_cartilla' role='alert'>Exito al registrar</div>"
              );
              tomarImagenPorSeccion(
                "carillaInformativa",
                $("#imagen_cartilla").val()
              );
              $("#alertita").fadeOut(4000, "linear");
              mostrarCartilla();
              $("#formCartilla").trigger("reset");
            } else {
              $("#alertita").show();
              $("#alertita").html(
                "<div class='alert alert-danger' id='error_cartilla' role='alert'>Debe completar todos los campos</div>"
              );
              $("#alertita").fadeOut(4000, "linear");
            }
          },
        });
      }
    } else {
      $("#alertita").html(
        "<div class='alert alert-danger' role='alert'>Debe clickear la vista previa</div>"
      );
      $("#alertita").fadeOut(4000, "linear");
    }
  });

  function shuffle(string) {
    var parts = string.split("");
    for (var i = parts.length; i > 0; ) {
      var random = parseInt(Math.random() * i);
      var temp = parts[--i];
      parts[i] = parts[random];
      parts[random] = temp;
    }
    return parts.join("");
  }

  function tomarImagenPorSeccion(div, nombre) {
    html2canvas(document.querySelector("#" + div)).then((canvas) => {
      var img = canvas.toDataURL();
      //console.log(img);
      base = "img=" + img + "&nombre=" + nombre;
      /* var form = new FormData($("#formBlog")[0]); */
      $.ajax({
        type: "POST",
        url: base_url + "crearCartilla.php",
        data: base,
        success: function (respuesta) {
          respuesta = parseInt(respuesta);
          if (respuesta > 0) {
            alert("Cartilla creada con exito!");
          } else {
            alert("No se pudo crear la Cartilla :(");
          }
        },
      });
    });
  }

  function mostrarCartilla() {
    $.get(base_url + "mostrarTablaCartilla.php", function (response) {
      $("#tabla_cartilla").html(response);
    });
  }

  mostrarCartilla();

  //Validar DNI
  $("#button-addon2").click(function (e) {
    e.preventDefault();
    $(this).html(
      "<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>"
    );
    var dni = $("#dni").val();
    $.post(base_url + "validarDNI.php", { dni }, function (
      data,
      textStatus,
      jqXHR
    ) {
      try {
        json = jQuery.parseJSON(data);
      } catch (exception) {
        json = null;
      }

      if (json) {
        var persona = jQuery.parseJSON(data);
        $("#nombres").val(persona.nombres);
        $("#apellidos").val(
          persona.apellidoPaterno + " " + persona.apellidoMaterno
        );
        $(".spinner-border").remove();
        $("#button-addon2").html("Validar");
      } else {
        $("#nombres").val("");
        $("#apellidos").val("");
        $(".spinner-border").remove();
        $("#button-addon2").html("Validar");
      }
    });
  });

  //Eliminar cartilla
  $(document).on("click", ".btn-cyan", function (e) {
    e.preventDefault();
    var elemento = $(this);
    var id = $(elemento).attr("delete-idcartilla");
    $.post(base_url + "eliminarCartilla.php", { id }, function (
      data,
      textStatus,
      jqXHR
    ) {
      mostrarCartilla();
    });
  });

  //Enviar datos al formulario de cartilla
  $(document).on("click", ".btn-dark-green", function (e) {
    e.preventDefault();
    var id_cartilla = $(this).attr("editar-cartilla");
    console.log(id_cartilla);
    $.post(base_url + "actualizarCartilla.php", { id_cartilla }, function (
      data,
      textStatus,
      jqXHR
    ) {
      let json = jQuery.parseJSON(data);
      $("#id_cartilla").val(json.idcartilla),
        $("#placa").val(json.placa),
        $("#autorizacion").val(json.n_autorizacion_servicio),
        $("#persona").val(json.n_persona_autorizada),
        $("#ruc").val(json.n_ruc),
        $("#tarjeta").val(json.n_tarjeta_unica_circulacion),
        $("#nombres").val(json.nombre_conductor),
        $("#apellidos").val(json.apellido_conductor),
        $("#dni").val(json.dni_conductor),
        $("#date").val(json.fecha_creacion);
      if (json.foto_conductor) {
        $("#contenido-foto").html(
          "<img src='http://localhost/TaxiSpeedCar/uploads/conductores/" +
            json.foto_conductor +
            "'  id='foto' class='img-fluid'>"
        );
        $("#conductor_foto").html(
          "<img src='http://localhost/TaxiSpeedCar/uploads/conductores/" +
            json.foto_conductor +
            "'  id='foto' class='img-fluid border border-dark'>"
        );
      }
    });
  });
  //Enviar contacto
  $("#formContacto").on("submit", function (e) {
    e.preventDefault();
    console.log("Has enviado correo");
    var datos = $("#formContacto").serialize();
    $.post(base_url + "enviarMensaje.php", datos, function (
      data,
      textStatus,
      jqXHR
    ) {
      console.log(data);
      if (data == "true") {
        $("#mensaje_contacto").html(
          "<div class='alert alert-info' role='alert'>Mensaje Enviado!</div>"
        );
        $("#alerta").fadeOut(4000, "linear");
        $("#formContacto").trigger("reset");
      }else{
        $("#mensaje_contacto").html(
          "<div class='alert alert-warning' role='alert'>Complete todos los campos</div>"
        );
        $("#mensaje_contacto").fadeOut(4000, "linear");
      }
      
    });
  });
});
