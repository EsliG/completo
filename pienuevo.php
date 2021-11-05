
<div style="background: #B72025;">
<div class="formulariofootercontact">
	<table class="table" width="80%">
		<tbody class="tbody">
			<tr class="tr">
				<td class="td"><p class="titulossecciondividircontacto">Nuestras sedes</p></td>
				<td class="td"></td>
			</tr>
			<tr class="tr" >
				
				<td class="td" width="60%" valign="top">
					<div class="flotanteSede">
						<div  class="contenidosedesceuni">
						<p class="titulosucursales">
							Corporativo Zapopan 
						</p>
						<p class="sucursalinflocali" onclick="location.href='/SedeCorporativoZapopan';">
						6 de Diciembre 1401 San Miguel de Mezquitan 44260 Guadalajara, Jal. 
						</p>
						<img src="img/sidebar/telefono.png" onclick="location.href='tel:33 2300 3952';" class="imflotantesuc">
						<img src="img/logos/ubi.png" onclick="location.href='https://goo.gl/maps/Wt8wrEiPXa83XZfu8';" class="imflotantesuc">
						<img src="img/sidebar/whatsapp.png" onClick="hrefwhatsapp1()" class="imflotantesuc">
						</div>
					</div>
					<div class="flotanteSede">
						<div  class="contenidosedesceuni">
						<p class="titulosucursales">
							Cruz del Sur
						</p>
						<p class="sucursalinflocali" onclick="location.href='/SedeCorporativoZapopan';">
							Av. Cruz del Sur # 3195,4to piso Lomas de la Victoria, Tlaquepaque, Jalisco
						</p>
						<img src="img/sidebar/telefono.png" onclick="location.href='tel:33 2300 3952';" class="imflotantesuc">
						<img src="img/logos/ubi.png" onclick="location.href='https://goo.gl/maps/QGiLaBNhLoctD8Gn7';" class="imflotantesuc">
						<img src="img/sidebar/whatsapp.png" onClick="hrefwhatsapp1()" class="imflotantesuc">
						</div>
					</div>
					<div class="flotanteSede">
						<div  class="contenidosedesceuni">
						<p class="titulosucursales">
							La Estancia
						</p>
						<p class="sucursalinflocali" onclick="location.href='/SedeCorporativoZapopan';">
							Av. Ludwig Van Beethoven, #5570, Col. la Estancia, Zapopan, Jalisco
						</p>
						<img src="img/sidebar/telefono.png" onclick="location.href='tel:33 2300 3952';" class="imflotantesuc">
						<img src="img/logos/ubi.png" onclick="location.href='https://goo.gl/maps/sUyXtdtewb92';" class="imflotantesuc">
						<img src="img/sidebar/whatsapp.png" onClick="hrefwhatsapp1()" class="imflotantesuc">
						</div>
					</div>
					<div class="flotanteSede">
						<div  class="contenidosedesceuni">
						<p class="titulosucursales">
							Patria
						</p>
						<p class="sucursalinflocali" onclick="location.href='/SedeCorporativoZapopan';">
							Maurice Baring, #304,Col. Jardines de la Patria, Zapopan, Jalisco
						</p>
						<img src="img/sidebar/telefono.png" onclick="location.href='tel:33 2300 3952';" class="imflotantesuc">
						<img src="img/logos/ubi.png" onclick="location.href='https://goo.gl/maps/D6sjP3upFiE2';" class="imflotantesuc">
						<img src="img/sidebar/whatsapp.png" onClick="hrefwhatsapp1()" class="imflotantesuc">
						</div>
					</div>
					<div class="flotanteSede">
						<div  class="contenidosedesceuni">
						<div class="titulosucursales" style="position: relative;">
							Torre Sur<span class="nuevap" style="display: none;">Nueva</span>
						</div>
						<p class="sucursalinflocali" onclick="location.href='/SedeCorporativoZapopan';">
							Av. Lopez Mateos Sur #5060 Miguel de la Madrid 45239 Zapopan, Jalisco
						</p>
						<img src="img/sidebar/telefono.png" onclick="location.href='tel:33 2300 3952';" class="imflotantesuc">
						<img src="img/logos/ubi.png" onclick="location.href='https://goo.gl/maps/hViSuEN1pst';" class="imflotantesuc">
						<img src="img/sidebar/whatsapp.png" onClick="hrefwhatsapp1()" class="imflotantesuc">
						</div>
					</div>
					<div class="espaciomoviles"></div>
				</td>
				<td class="td" width="40%">
					<center>
						
						<span class="metadata-marker" style="display: none;" data-region_tag="html-body"></span><div id="mapnuevo" class="mapafooter"></div>
<script>
function hrefwhatsapp1(){
	var w = window.innerWidth;
	if(w<940){
		window.open('https://wa.me/5213331380780','_blank');
	}else{
		window.open('https://web.whatsapp.com/send?phone=5213331380780','_blank');
	}
}
							
							var iconBase = 'https://ceuniversitario.com/img/';
function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("mapnuevo"), mapOptions);
    map.setTilt(50);
        
    // Multiple markers location, latitude, and longitude
    var markers = [
        ['Corporativo Zapopan', 20.70052329764756, -103.3563861381359],
        ['Cruz del Sur', 20.633479, -103.400491],
		['La Estancia', 20.670145, -103.432575],
		['Patria', 20.683566, -103.419463],
		['Torre Sur', 20.605690, -103.433607]
    ];
                        
    // Info window content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>Corporativo Zapopan</h3>' +
        '<p>6 de Diciembre 1401 San Miguel de Mezquitan 44260 Guadalajara, Jal. </p><br> <a href="https://goo.gl/maps/Wt8wrEiPXa83XZfu8" target="_blank">Ver en Google Maps</a>' + '</div>'],
		 ['<div class="info_content">' +
        '<h3>Cruz del Sur</h3>' +
        '<p>Av. Cruz del Sur # 3195,4to piso Lomas de la Victoria, Tlaquepaque, Jalisco</p><br> <a href="https://goo.gl/maps/hYbD4tJHyMJ2" target="_blank">Ver en Google Maps</a>' + '</div>'],
		 ['<div class="info_content">' +
        '<h3>La Estancia</h3>' +
        '<p>Av. Ludwig Van Beethoven, #5570, Col. la Estancia, Zapopan, Jalisco</p><br> <a href="https://goo.gl/maps/sUyXtdtewb92" target="_blank">Ver en Google Maps</a>' + '</div>'],
		['<div class="info_content">' +
        '<h3>Patria</h3>' +
        '<p>Maurice Baring, #304,Col. Jardines de la Patria, Zapopan, Jalisco</p><br> <a href="https://goo.gl/maps/D6sjP3upFiE2" target="_blank">Ver en Google Maps</a>' + '</div>'],
		['<div class="info_content">' +
        '<h3>Torre Sur</h3>' +
        '<p>Av. Lopez Mateos Sur #5060 Miguel de la Madrid 45239 Zapopan, Jalisco</p><br> <a href="https://goo.gl/maps/hViSuEN1pst" target="_blank">Ver en Google Maps</a>' + '</div>']
    ];
        
    // Add multiple markers to map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Place each marker on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
			icon: 'https://ceuniversitario.com/img/maps2.png',
            title: markers[i][0]
        });
        
        // Add info window to marker    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Center the map to fit all markers on the screen
        map.fitBounds(bounds);
    }

    // Set zoom level
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(10);
        google.maps.event.removeListener(boundsListener);
    });
    
}
</script>
					</center>
				</td>
			</tr>
		</tbody>
	</table>
</div> 
</div>
<div class="footerbar">
	<table class="table" style="width: 100%;">
		<tbody class="tbody">
			<tr class="tr">
			<td class="td" width="50%">
				<table class="margintestos1footer">
					<tr>
			<td class="rigtfooter">
				Aviso de privacidad | © 2019 CE Universitario
			</td>
		</tr>
				</table>
			</td>
		</tr>
			</tbody>
	</table>
</div>
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6487587.js"></script>