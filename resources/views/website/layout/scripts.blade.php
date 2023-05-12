<!--ajax-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('website/js/swiper-bundle.min.js')}}"></script>
<script >
    var swiper = new Swiper(".slide-container", {
        slidesPerView: 2,
        spaceBetween: 15,
        sliderPerGroup: 2,
        loop: true,
        centerSlide: "true",
        fade: "true",
        grabCursor: "true",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },


        breakpoints: {
            0: {
                slidesPerView: 1,
            },
        },
    });

</script>
<script >

    var sliderMainViews= document.getElementById ("slider-main-Views");
    var itemViews = sliderMainViews.getElementsByClassName("item-Views");
    function next2(){
        sliderMainViews.append(itemViews[0]);
    }
    function prev2(){
        sliderMainViews.prepend(itemViews[itemViews.length-1]);
    }
</script>

<script >
    const viewBtn1 = document.querySelector(".view-modal1");
    popup = document.querySelector(".popupFilter");
    popupBody = document.querySelector(".popurBody");
    close = popup.querySelector(".close");

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

<script src='{{url('https://code.jquery.com/jquery-3.3.1.min.js')}}'></script>
<script src='{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')}}'></script>
<script src='{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}'></script>
<script src='{{url('https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js')}}'></script>
<script  src="{{asset('website/script.js')}}"></script>
<!--bootstrap-->
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
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

<!--add restaurant to favorite-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.favorite').click(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            var restaurant_id = $(this).closest('.card-popular').find('.restaurant_id').data('restaurant-id');
            $.ajax({

                method:"POST",
                url:"/add_to_my_favorite_restaurants",
                data:{
                    'restaurant_id':restaurant_id
                },

                success:function (response){
                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500});                },
                error:function (xhr, status, error){
                    console.log('Error:', error);
                    console.log('Status:', status);
                    console.log('Response:', xhr.responseText);

                }
            });        });
    });
</script>

<!--remove restaurant from favorite-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.delete-favorite').click(function() {
        var id = $(this).data('id');
        var button = $(this); // Store a reference to the button element

        $.ajax({
            method: 'DELETE',
            url: '/favorites/' + id,
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1500});                // Remove the favorite item from the DOM
                button.closest('.card-popular').remove();
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    });
</script>

<!--add product to favorite -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.favorite_product').click(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            var restaurant_id = $(this).closest('.item-Views').find('#restaurant_id').data('restaurant-id');
            var product_id = $(this).closest('.item-Views').find('.product_id').data('product-id');
            $.ajax({

                method:"POST",
                url:"/add_to_my_favorite_products",
                data:{
                    'product_id':product_id,
                    'restaurant_id':restaurant_id
                },

                success:function (response){
                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500});                },
                error:function (xhr, status, error){
                    console.log('Error:', error);
                    console.log('Status:', status);
                    console.log('Response:', xhr.responseText);

                }
            });
        });
    });
</script>

<!--remove product from favorite-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.delete-favorite-product').click(function() {
        var id = $(this).data('id');
        var button = $(this); // Store a reference to the button element

        $.ajax({
            method: 'DELETE',
            url: '/favorite_products/' + id,
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1500});                // Remove the favorite item from the DOM
                button.closest('.col-popular').remove();
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    });
</script>

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

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#image-preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image").change(function() {
        readURL(this);
    });
</script>

