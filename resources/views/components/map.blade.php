<div id="map" class="h-100 position-relative w-100">
    <button class="map-expand">
       <span
           class="absolute z-10 bottom-1 right-2 border border-2 border-gray-300 p-2 bg-white rounded">  <svg
               fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
               xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"></path>
        </svg>
       </span>
    </button>
</div>
<script type="text/javascript">

    const apiKey = "AAPK9feac71d90ac41b2ad6bb5b768e9091bZl6gP7Yp04FQaKI51ndVRtQNF4yFXozbY9WfazBlK0MrSoXYNth3MEYeHx8K-TjF";

    maplibregl.setRTLTextPlugin(
        'https://cdn.maptiler.com/mapbox-gl-js/plugins/mapbox-gl-rtl-text/v0.2.3/mapbox-gl-rtl-text.js',
        null,
        true // Lazy load the plugin
    );

    const myLocationMarker = @json($myLocationMarket);

    const successCallback = (position) => {
        return displayMap(position.coords);
    }

    const displayMap = (position = null) => {
        console.log(position);

        const centerPoint = @json($centerPoint);
       

        const basemapEnum = "ArcGIS:Streets";
        window.map = new maplibregl.Map({
            container: 'map', // container's id or the HTML element in which MapLibre GL JS will render the map
            style: `https://basemaps-api.arcgis.com/arcgis/rest/services/styles/${basemapEnum}?type=style&token=${apiKey}`, // style URL
            center: [position?.longitude ?? centerPoint.longitude, position?.latitude ?? centerPoint.latitude], // starting position [lng, lat]
            zoom: 15, // starting zoom
        });

        map.addControl(new maplibregl.NavigationControl(), 'top-right');
        map.addControl(
        new maplibregl.GeolocateControl({
            positionOptions: {
                enableHighAccuracy: true
            },
            trackUserLocation: true
        })
    );
        if (position) {

            window.marker = new maplibregl.Marker({
                color: '#f8a200'
            })
                .setLngLat([position.longitude, position.latitude])
                .addTo(map);


            window.map.on('click', function (e) {
                window.marker.setLngLat(e.lngLat);

              const latViews = document.getElementsByClassName('latitude-value')
                const lngViews = document.getElementsByClassName('longitude-value')
                for (let view of latViews)
                    view.value = e.lngLat.lat;
                for (let view of lngViews)
                    view.value = e.lngLat.lng;

                let nearestDistance = 1e4;

                const nearestPlace = {
                    latitude:position.latitude,
                    longitude:position.longitude,
                };

                for(let marker of markers){
                    const markerPos = marker.getLngLat();
                    const distance = Math.sqrt(
                        Math.pow(markerPos.lat - e.lngLat.lat, 2)
                        +
                        Math.pow(markerPos.lng - e.lngLat.lng, 2)
                    );
                    console.log(distance)
                    if ( distance < nearestDistance){
                        nearestDistance = distance;
                        nearestPlace.latitude = markerPos.lat;
                        nearestPlace.longitude = markerPos.lng;
                    }
                }
                if(nearestPlace){

                    console.log(nearestPlace)
                       
                    window.map.flyTo({
                        center: [
                            nearestPlace.longitude,
                            nearestPlace.latitude,
                        ],
                        zoom:16
                    
                    });
                   ;
                }    

            });
        }
        const changablePoint = @json($changablePoint);

        if (changablePoint) {

            window.changablePointMarker = new maplibregl.Marker({
                color: '#f8a200'
            })
                .setLngLat([changablePoint.longitude, changablePoint.latitude])
                .addTo(map);


            window.map.on('click', function (e) {
                window.changablePointMarker.setLngLat(e.lngLat);
                console.log(e.lngLat);
                const latViews = document.getElementsByClassName('latitude-value')
                const lngViews = document.getElementsByClassName('longitude-value')
                for (let view of latViews)
                    view.value = e.lngLat.lat;
                for (let view of lngViews)
                    view.value = e.lngLat.lng;
            });
        }
        window.markers = [];
        const markersLngLat = @json($markers);


        for (let marker of markersLngLat) {  
     
    
            window.markers.push(new maplibregl.Marker()
                .setLngLat([marker.longitude, marker.latitude])
                .addTo(map));

        }


    };

    const errorCallback = (error) => {
        console.log(error);
    };
    if (myLocationMarker) {

        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);

    } else {
        displayMap();
    }

</script>
