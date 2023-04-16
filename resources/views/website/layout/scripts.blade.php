<script >
    const viewBtn1 = document.querySelector(".view-modal1");
    popup = document.querySelector(".popupFilter"),
        popupBody = document.querySelector(".popurBody")
    close = popup.querySelector(".close")

    function toggle(){
        popup.style.display='block';
        popupBody.classList.toggle("show");
    }

    function btnClose(){
        viewBtn1.click();
        popup.style.display='none';
    }
    close.onclick = ()=>{
        viewBtn1.click();
        popup.style.display='none';
    }
</script>
<script src="{{asset('website/js/script.js')}}"></script>
<script src='{{url('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}'></script>
<script src='{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')}}'></script>
<script src='{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}'></script>
<script src='{{url('https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js')}}'></script>
<script  src="{{asset('website/script.js')}}"></script>
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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" type="text/javascript"></script>
