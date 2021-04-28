 @extends('admin.dashboard')

 @section('content')
<head><!-- DataTables -->
  <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
</head>
       
 

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
       
      </div>
      <div class="modal-body">
        <form action="{{url('coupon/update')}}" method="POST" id="logForm" enctype="multipart/form-data">
@csrf <input type="HIDDEN" name="id" value="{{$d->id}}">


<div class="row">
<div class="form-label-group col-md-6">
  <label for="inputEmail">Coupon-code</label>
 
<input type="text" name="code" id="inputEmail" class="form-control" placeholder="Enter Coupon code"  value="{{$d->coupon_code}}">

    
</div> 
<div class="form-label-group  col-md-6">
  <label for="inputPassword">Coupon-type</label>
<select class="form-control" name="t">
  <option value="Fixed" @if($d->coupon_type=='Fixed') selected @endif>Fixed</option>
  <option value="Percentage" @if($d->coupon_type=='Percentage') selected @endif>Percentage</option>
</select>

 
</div>
<div class="form-label-group col-md-6">
  <label for="inputPassword">Coupon-value</label>
<input type="number" name="value" class="form-control"placeholder="Enter Coupon value"  value="{{$d->coupon_value}}">

 
</div>
<div class="form-label-group col-md-6">
  <label for="inputPassword">Cart-min-value</label>
<input type="number" name="minvalue" class="form-control"placeholder="Enter Cart min value"  value="{{$d->cart_min_value}}">

 
</div>
<div class="form-label-group col-md-6">
  <label for="inputPassword">Expired Date</label>
<input type="date" name="edate" class="form-control"  value="{{$d->expired_on}}">

 
</div>
<div class="form-label-group col-md-6">
  <label for="inputPassword">Coupon-Status</label>
<br><input type="radio" name="i" value="active" @if($d->coupon_status=='active') checked @endif> Active<br>
<input type="radio" name="i" value="inactive" @if($d->coupon_status=='inactive') checked @endif> Inactive

</div>
<div class="modal-footer">
      
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</div>
</form>
      </div>
      
    </div>
  </div>
</div>
 

    <!-- /.content -->
    @endsection
<!-- jQuery -->
<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('plugins/moment/moment.min.js')}}"></script>
<script src="{{url('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{url('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('dist/js/pages/dashboard.js')}}"></script>

<!-- DataTables  & Plugins -->
<script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{url('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{url('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>





<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


