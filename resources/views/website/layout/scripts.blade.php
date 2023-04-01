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
