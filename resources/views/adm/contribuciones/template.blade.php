<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <style>
       #grande {
        font-size:20px;
       }
    }
    </style>

  <!-- Font Awesome -->
  <script src="{{ asset('js/app.js') }}"></script>
     <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />

<link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">

 <script src="/dist/js/sweetalert2.min.js"></script>
<link rel="stylesheet" href="/dist/css/sweetalert2.min.css">
    <!-- Styles -->
 <link href="{{ asset('css/miestilo.css') }}" rel="stylesheet">
</head>
<body class="hold-transition skin-blue sidebar-mini">
@include('adm.contribuciones.secciones.menu')
<br>
<section >
	@yield('contenido')
</section>
    @include('adm.contribuciones.secciones.footer')
<!-- jQuery 3 -->

<!-- AdminLTE for demo purposes -->

<script>



    var t = $('#mydatatable').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": true,
            "targets": 0
        } ],
        "order": [[ 0, 'desc' ]]
    } );

    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();


</script>

  <script type="text/javascript">
                  function verimagen(){
                  $(document).on('click', '.btn', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
               
                Swal.fire({
  title: 'señalizacion!',
  imageUrl: id,
  imageAlt: 'Custom image',
  animation: true
});
          });
                  }
                    </script>

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
                    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
                    <script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<script src="/bower_components/fastclick/lib/fastclick.js"></script>
     
</body>
</html>







