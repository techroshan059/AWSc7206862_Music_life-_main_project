<!-- jquery -->
<script src="{{url('/js/app.js')}}" type="text/javascript"></script>
<script src="{{url('frontend/js/jquery.2.1.1.min.js')}}" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="{{url('frontend/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!--bootstrap select-->
<script src="{{url('frontend/js/bootstrap-select.js')}}" type="text/javascript"></script>
<!--internal js-->
<script src="{{url('frontend/js/internal.js')}}" type="text/javascript"></script>
<!-- owlcarousel js -->
<script src="{{url('frontend/js/owl.carousel.min.js')}}" type="text/javascript"></script>
<!--Gallery js code-->
<script src="{{url('frontend/js/photo-gallery.js')}}" type="text/javascript"></script>


<script>
        var openprofile = false;
        var openNoti = false;
        var openCart = false;



    function showWindow(window1){
  
        $('.notifications').addClass('hide');

        if(this.openprofile==true){
            $('.profile').addClass('hide');
            this.openprofile=false;
        }
       
        $('.cart').addClass('hide');
        switch(window1){
            case 'notifications':
            $('.notifications').removeClass('hide');
            break;
            case 'profile':
            $('.profile').removeClass('hide');
            this.openprofile=true
            break;
            case 'cart':
            $('.cart').removeClass('hide');
            break;
        }

      
        
    }
    
</script>

<script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#previewImage').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


    </script>







