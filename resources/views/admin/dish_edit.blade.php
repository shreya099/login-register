 @extends('admin.dashboard')

 @section('content')
<head><!-- DataTables -->
  <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
       
 


  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        
      </div>
      <div class="modal-body">
        <form action="{{url('dish/update')}}" method="POST" id="logForm" enctype="multipart/form-data">
@csrf <input type="HIDDEN" name="id" value="{{$d->id}}">
    <div class="row">
<div class="form-label-group col-md-6">
  <label for="inputEmail">dish_name</label>
 
<input type="text" name="dname" id="inputEmail" value="{{$d->dish_name}}" class="form-control" placeholder="Enter name" >

    
</div> 
<div class="form-label-group col-md-6">
  <label for="inputEmail">dish_des</label>
 
<input type="text" name="ddes" id="inputEmail" value="{{$d->dish_des}}" class="form-control" placeholder="Enter des" >

    
</div>
<div class="form-label-group col-md-12">
  <label for="inputEmail">dish_img</label><img src="/upload/{{$d->dish_img}}" width=10px>
 
<input type="file" name="dimg" id="inputEmail" class="form-control" placeholder="Enter des" >

    
</div> 
<div class="form-label-group col-md-6">
  <label for="inputPassword">dish_quantity</label>
<input type="number" name="dq" class="form-control"placeholder="Enter Coupon value" value="{{$d->dish_quantity}}">


 
</div>
<div class="form-label-group col-md-6">
  <label for="inputPassword">dish_price</label>
<input type="number" name="dp" class="form-control"placeholder="Enter Coupon value" value="{{$d->dish_price}}">

 
</div>
<div class="form-label-group col-md-6">
  <label for="inputPassword">categorie_id</label>
<select name="categorie_id" class="form-control" >
  <option>select</option>
    @foreach($d1 as $v)
  <option value="{{$v->id}}"  @if($d->categorie_id==$v->id) selected @endif >{{$v->title}}
</option>
 @endforeach
 
 
 </select>
                             
</div>

<div class="form-label-group col-md-6">
  <label for="inputPassword">dish_status</label>
<br><input type="radio" name="i" value="active" @if($d->dish_status=='active') checked @endif> Active<br>
<input type="radio" name="i" value="inactive" @if($d->dish_status=='inactive') checked @endif> Inactive

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


