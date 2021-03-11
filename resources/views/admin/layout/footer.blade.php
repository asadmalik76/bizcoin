<style type="text/css">
  .product-row{
   border: 1px dashed #786cef;
   padding: 20px;
 }
 .previous{
   float: right;
 }
 .routecard{
  border: 1px solid grey;
  background-color: #fbfbfb;
 }
 .routecard:hover{
  cursor:hand;
 }
 .sidebaricon{
  color: #7367f0;
 }
 .sidebaricon:hover{
  color:#2462af;
 }
 .fa-ellipsis-v{
  cursor: pointer;
  font-size:20px;
  color: #42a8e4;
 }
</style>

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
<div class="modal-warning mr-1 mb-1 d-inline-block">
   <!-- Button trigger modal -->

   <!-- Modal -->
   <div class="modal fade text-left" id="warningmodal" tabindex="1" role="dialog" >
       <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
           <div class="modal-content">
               <div class="modal-header bg-warning white">
                   <h5 class="modal-title" id="myModalLabel140">Warning Modal</h5>
               </div>
               <div class="modal-body">
                   Tart lemon drops macaroon oat cake chocolate toffee chocolate bar icing. Pudding jelly beans
                   carrot cake pastry gummies cheesecake lollipop. I love cookie lollipop cake I love sweet
                   gummi
                   bears cupcake dessert.
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-warning" data-dismiss="modal">Accept</button>
               </div>
           </div>
       </div>
   </div>
</div>
<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">

<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->

<p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" style="color:purple" target="_blank">Bizcoin, 
</a>All rights Reserved</span><span class="float-md-right d-none d-md-block"></span>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
</p>
</footer>
<!-- END: Footer-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

 {{-- <script src="{{asset('/build/js/intlTelInput.js')}}"></script>

 <script src="{{asset('/build/js/intlTelInput-jquery.js')}}"></script>


 <script src="{{asset('/build/js/data.js')}}"></script> --}}



<!-- BEGIN: Vendor JS-->
<script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->
   
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/extensions/tether.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/extensions/shepherd.min.js')}}"></script>
<!-- END: Page Vendor JS-->


<script src="{{asset('/app-assets/vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- BEGIN: Theme JS-->

 <script src="{{asset('/build/js/intlTelInput.js')}}"></script>
<script src="{{asset('/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/components.js')}}"></script>
<!-- END: Theme JS-->
<script src="{{asset('/app-assets/js/scripts/forms/wizard-steps.js')}}"></script>
<!-- BEGIN: Page JS-->
<script src="{{asset('/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
<!-- END: Page JS-->
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script src="{{asset('/app-assets/js/scripts/modal/components-modal.js')}}"></script>



<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.print.min.js"></script>

<script type="text/javascript" language="javascript" src="//cdn.datatables.net/responsive/1.0.2/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  setTimeout(function() {
	$('.tippy-popper').hide();
}, 1000);
});
</script>
<script type="text/javascript">
 $(document).ready( function () {

   $('.table').DataTable({
     rowReorder: {
           selector: 'td:nth-child(2)'
       },
       responsive: true,
     dom: 'Bfrtip',
     buttons: [
           'copy', 'csv', 'excel', 'pdf','print'
       ]
   });
});
 
</script>


<script src="{{asset('/app-assets/js/scripts/datatables/datatable.js')}}"></script>

<script src="{{('/app-assets/js/scripts/modal/components-modal.js')}}"></script>
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
<script src="{{asset('/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/forms/select/form-select2.js')}}"></script>

<script src="{{ asset('/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('/app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
      selector: '#texteditor',
      height:350,
  });
  </script>
<script>
 function status(id,status){
  $(document).ready(function(){
    if(status==1){
      status=0;
    }
    else{
      status=1;
    }
  $.ajax({
    url:'/admin/changestatus',
    type:'get',
    data:{status:status,id:id},
    success:function(data){
    }
  });
  });
 }
</script>

<script>
  function rating(id,status){
   $(document).ready(function(){
     if(status==1){
       status=0;
     }
     else{
       status=1;
     }
   $.ajax({
     url:'/admin/changeratingstatus',
     type:'get',
     data:{status:status,id:id},
     success:function(data){
     }
   });
   });
  }
 </script>
</body>
</html>
<!-- END: Body-->

</html>
