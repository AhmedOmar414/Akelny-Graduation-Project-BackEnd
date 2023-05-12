<script src="{{asset('assets/dashboard/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/dashboard/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/dashboard/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<script src="{{asset('assets/dashboard/assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->
<!--ajax-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Vendors JS -->
<script src="{{asset('assets/dashboard/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/dashboard/assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('assets/dashboard/assets/js/dashboards-analytics.js')}}"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!--bootstrap-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--map-->
<script>
    let map;
    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: -34.397, lng: 150.644 },
            zoom: 8,
            scrollwheel: true,
        });
        const uluru = { lat: -34.397, lng: 150.644 };
        let marker = new google.maps.Marker({
            position: uluru,
            map: map,
            draggable: true
        });
        google.maps.event.addListener(marker,'position_changed',
            function (){
                let lat = marker.position.lat()
                let lng = marker.position.lng()
                $('#lat').val(lat)
                $('#lng').val(lng)
            })
        google.maps.event.addListener(map,'click',
            function (event){
                pos = event.latLng
                marker.setPosition(pos)
            })
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmLXxdC27YMzr-MS8x2MgrVSr5qb0sRC4&callback=initMap" type="text/javascript"></script>

<!--sweet alerts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(Session::has('message'))
    <script>
        swal("Message!","{{Session::get('message')}}",{button:"OK"})
    </script>
@endif
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '{{Session::get('success')}}',
            showConfirmButton: false,
            timer: 1500});
    </script>
@endif
