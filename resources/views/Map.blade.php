<div id="map-section"  style="margin-bottom:10em;">
    {{-- <div style="position:absolute; right:2em;"> --}}
        <h1> تصفح واكتشف الصيدلية الأقرب </h1>
        <hr class="w-50"/>
    {{-- </div> --}}
    <div class="map-wrapper w-100 mt-2">
        <div class="map-container">
            <x-map
                myLocationMarket
                :markers="$pharmacies"
               
            />
        </div>
    </div>
</div>
