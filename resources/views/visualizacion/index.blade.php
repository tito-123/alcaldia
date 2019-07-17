@extends('visualizacion.template')

@section('contenido')

    
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            
    <div class="ibox-content">
     
              <div class="col-lg-18">

                   
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Ubicacion</label>
                            <div class="col-sm-12">

                                <div id="map"></div>
                                <script>

                                function openInfoWindow(marker) {
                                var markerLatLng = marker.getPosition();
                                infoWindow.setContent(['<strong>La posicion del marcador es:</strong><br/>',markerLatLng.lat(),', ',markerLatLng.lng(),'<br/>Arrástrame para actualizar la posición.'].join(''));
                                infoWindow.open(map, marker);
                                    
                                }
                                
                                function initMap() {
                                var uluru = {lat: -17.8191526, lng: -63.1501949};
                                var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 12,
                                center: uluru
                                });
                                infoWindow = new google.maps.InfoWindow();
                                var marker = new google.maps.Marker({
                                position: uluru,
                                draggable: true,
                                map: map,
                                title:"Ejemplo marcador arrastrable"
                                });

                                    document.formulario.latitud.value=-17.8191526;
                                    document.formulario.longitud.value= -63.1501949;

                                google.maps.event.addListener(marker, 'dragend', function(){ openInfoWindow(marker); });
                                google.maps.event.addListener(marker, 'click', function(){ openInfoWindow(marker); });
                                }

                                $(document).ready(function() {
                                    initMap();
                                    gmaps_ads();
                                }); 
                                </script>
                                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDx1XlkItjpRBFZEy3F08lp7IC51po1r0Y&callback=initMap">
                                </script>

                            </div>
                    </div>



                        </div>



          
                


                        </div>
                    </div>
                </div>
            </div>


@endsection