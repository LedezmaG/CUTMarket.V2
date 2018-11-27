$(document).ready(function() { //Funcion para cargar las vistas en el index con Ajax
  function cargarContenido(url) {
    $.ajax({   
      type: 'POST',
      url:url,
      dataType: 'html',
      data:{},
      success: function(datos){       
        $(".contenido-principal").html(datos);
      }
    });
  }

  $(document).on('click', '.navbar-collapse', function(e) { //Funcion para colapsar el menu cuando esta en modo "MOVIL"
    if( $(e.target).is('a:not(".dropdown-toggle")') ) {
        $(this).collapse('hide');
    }
  });

  $(document).on('click', '.contenido-principal', function() { //Funcion para colapsar el menu al dar click en el contenido
    $(".navbar-collapse").collapse('hide');
  });

  $("#btnHome").click(function() { //Funcion para cargar la vista de 'Inicio'
    console.log("#btnInicio");
    cargarContenido('vistas/inicio.html');
  });

  $("#btnPedidos").click(function() { //Funcion para cargar la vista de 'Pedidos'
    console.log("#btnPedidos")
    cargarContenido('vistas/pedidos.html');
  });

  $("#btnLogin").click(function() { //Funcion para cargar la vista de 'Signin'
    console.log("#btnLogin");
    cargarContenido('vistas/signin.html');
    $(".navbar-collapse").collapse('hide');
  });
});