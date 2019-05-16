 <!-- plugins:js -->

 
 <script src="{{url('vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{url('vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{url('js/off-canvas.js')}}"></script>
  <script src="{{url('js/hoverable-collapse.js')}}"></script>
  <script src="{{url('js/misc.js')}}"></script>
  <script src="{{url('js/settings.js')}}"></script>

 <script src="{{url('js/form-addons.js')}}"></script>
  <script src="{{url('js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->



  <script src="{{url('js/tooltips.js')}}"></script>
  <script src="{{url('js/dashboard.js')}}"></script>
  <script src="{{url('js/bootstrap-clockpicker.min.js')}}"></script>
  <script src="{{url('js/data-table.js')}}"></script>
 
  
  <!-- End custom js for this page-->



 <script>
     $(function(){
        $('.clockpicker').clockpicker();
     })
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


