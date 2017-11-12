<div id="map-canvas-{!! $id !!}" style="width: 100%; height: 100%; margin: 0; padding: 0; position: relative; overflow: hidden;"></div>

<script type="text/javascript">
	var maps = [];

	function initialize_{!! $id !!}() {
		var bounds = new google.maps.LatLngBounds();
		var infowindow = new google.maps.InfoWindow();
		var position = new google.maps.LatLng({!! $options['latitude'] !!}, {!! $options['longitude'] !!});;
		var mapOptions_{!! $id !!} = {
			@if ($options['center'])
				center: position,
			@endif
			mapTypeId: google.maps.MapTypeId.{!! $options['type'] !!},
			disableDefaultUI: @if (!$options['ui']) true @else false @endif,
			scrollwheel: @if ($options['scrollWheelZoom']) true @else false @endif,
            zoomControl: @if ($options['zoomControl']) true @else false @endif,
            mapTypeControl: @if ($options['mapTypeControl']) true @else false @endif,
            scaleControl: @if ($options['scaleControl']) true @else false @endif,
            streetViewControl: @if ($options['streetViewControl']) true @else false @endif,
            rotateControl: @if ($options['rotateControl']) true @else false @endif,
            fullscreenControl: @if ($options['fullscreenControl']) true @else false @endif
		};

		var map_{!! $id !!} = new google.maps.Map(document.getElementById('map-canvas-{!! $id !!}'), mapOptions_{!! $id !!});
		map_{!! $id !!}.setTilt({!! $options['tilt'] !!});

		var markers = [];
		var infowindows = [];
		var shapes = [];

		@foreach ($options['markers'] as $key => $marker)
			{!! $marker->render($key, $view) !!}
		@endforeach

		@foreach ($options['shapes'] as $key => $shape)
			{!! $shape->render($key, $view) !!}
		@endforeach

		@if ($options['overlay'] == 'BIKE')
			var bikeLayer = new google.maps.BicyclingLayer();
			bikeLayer.setMap(map_{!! $id !!});
		@endif

		@if ($options['overlay'] == 'TRANSIT')
			var transitLayer = new google.maps.TransitLayer();
			transitLayer.setMap(map_{!! $id !!});
		@endif

		@if ($options['overlay'] == 'TRAFFIC')
			var trafficLayer = new google.maps.TrafficLayer();
			trafficLayer.setMap(map_{!! $id !!});
		@endif

		var idleListener = google.maps.event.addListenerOnce(map_{!! $id !!}, "idle", function () {
			map_{!! $id !!}.setZoom({!! $options['zoom'] !!});

			@if (!$options['center'])
				map_{!! $id !!}.fitBounds(bounds);
			@endif

			@if ($options['locate'])
				if (typeof navigator !== 'undefined' && navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(function (position) {
                        setCord(position);
						map_{!! $id !!}.setCenter(new google.maps.LatLng(position.coords.latitude, position.coords.longitude));
					});
				}
			@endif
		});

        var map = map_{!! $id !!};

		@if (isset($options['eventBeforeLoad']))
			{!! $options['eventBeforeLoad'] !!}
		@endif

		@if (isset($options['eventAfterLoad']))
			google.maps.event.addListenerOnce(map_{!! $id !!}, "tilesloaded", function() {
				{!! $options['eventAfterLoad'] !!}
			});
		@endif

		@if ($options['cluster'])
			var markerClusterOptions = {
				imagePath: '{!! $options['clusters']['icon'] !!}',
				gridSize: {!! $options['clusters']['grid'] !!},
				maxZoom: @if ($options['clusters']['zoom'] === null) null @else {!! $options['clusters']['zoom'] !!} @endif,
				averageCenter: @if ($options['clusters']['center'] === true) true @else false @endif,
				minimumClusterSize: {!! $options['clusters']['size'] !!}
			};
			var markerCluster = new MarkerClusterer(map_{!! $id !!}, markers, markerClusterOptions);
		@endif

		maps.push({
			key: {!! $id !!},
			markers: markers,
			infowindows: infowindows,
			map: map_{!! $id !!},
			shapes: shapes
		});
        document.getElementById('_myCord').addEventListener('click',function(e){
            deleteMarkers();
            var pos = setCord(false,true);
            pos = {
                lat: pos.coords.latitude,
                lng: pos.coords.longitude
            }
            var messages;
            if(!jQuery('.user-messages').val()) {
                jQuery(".error").hide();
                jQuery(".error").show();
                jQuery('.user-messages').css('border','1px solid red');
            }else {
                jQuery(".error").hide();
                jQuery('.user-messages').css('border','1px solid #ccd0d2');
                messages = jQuery('.user-messages').val();
                var name = jQuery('.name-user-hod').text();
                var tel = jQuery('.tel-user-hod').text();
                var carNumber = jQuery('.auto-number-user-hod').text();
                var userId = jQuery('.user-id-hod').text();

            }
            var conten = '';
            conten = '<h2>'+name+'</h2>';
            conten+='<p>'+carNumber+'</p>';
            conten+='<p>'+tel+'</p>';
            conten+='<p>'+messages+'</p>';

            var infowindow = new google.maps.InfoWindow({
              content: conten
            });

            var marker = new google.maps.Marker({
              position: pos,
              map: map_{!! $id !!},
              title: 'SOS'
            });
            marker.addListener('click', function() {
              infowindow.open(map, marker);
            });
        });
        function deleteMarkers() {
            clearMarkers();
            markers = [];
        }
        function clearMarkers() {
            setMapOnAll(null);
        }
        function setMapOnAll(map) {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(map);
            }
        }
        var cords;
        function setCord(cord = false,check = false) {
            if(!check) {
                cords = cord;
            }else {
                if(cords) {
                    return cords;
                }
            }
        }
	}

    @if (!$options['async'])

	    google.maps.event.addDomListener(window, 'load', initialize_{!! $id !!});

    @endif
</script>
{{-- <script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#_myCord").on('click',function(){
            alert(position);
        });
    });
</script> --}}
