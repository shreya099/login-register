 @extends('admin.dashboard')

 @section('content')<div class="col-sm-6"><h1>Coupon Table</h1> </div><br>
<head><!-- DataTables -->
  <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
       
  @if(session('message'))
 <script>swal( '{{session('success')}}' ,'inserted!','success' ).then(function() { window. location = '{{url("admin/category")}}'; });;</script>
 @endif
        <div class="col-sm-6">
            
             <button class="btn btn-success"  data-toggle="modal" data-target="#exampleModal">Add coupon</button>
          </div><br>
      </div><!-- /.container-fluid -->
      <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('insert-data')}}" method="POST" id="logForm" enctype="multipart/form-data">
{{ csrf_field() }}


<div class="form-label-group">
  <label for="inputEmail">Coupon-code</label>
 
<input type="text" name="code" id="inputEmail" class="form-control" placeholder="Enter Coupon code" >

    
</div> 
<div class="form-label-group">
  <label for="inputPassword">Coupon-type</label>
<select class="form-control" name="t">
  <option value="Fixed">Fixed</option>
  <option value="Percentage">Percentage</option>
</select>

 
</div>
<div class="form-label-group">
  <label for="inputPassword">Coupon-value</label>
<input type="number" name="value" class="form-control"placeholder="Enter Coupon value">

 
</div>
<div class="form-label-group">
  <label for="inputPassword">Cart-min-value</label>
<input type="number" name="minvalue" class="form-control"placeholder="Enter Cart min value">

 
</div>
<div class="form-label-group">
  <label for="inputPassword">Expired Date</label>
<input type="date" name="edate" class="form-control">

 
</div>
<div class="form-label-group">
  <label for="inputPassword">Coupon-Status</label>
<br><input type="radio" name="i" value="active"> Active<br>
<input type="radio" name="i" value="inactive"> Inactive

</div>
<div class="modal-footer">
      
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

</form>
      </div>
      
    </div>
  </div>
</div>
 

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th width="5%">S.no</th>
                    <th>Coupon-code</th>
                    <th>type</th>
                    <th>value</th>
                    <th>Cart-min-value</th>
                    <th>status</th>
                    <th>Expired date</th>
                 
                    <th width="20%">Action</th> 
                  </tr>
                  </thead>
                       @foreach ($d as $x)
                  <tr>
 <td>{{$x->id}}</td>
          <td>{{$x->coupon_code}}</td>
          <td>{{$x->coupon_type}}</td>
            <td>{{$x->coupon_value}}</td>
             <td>{{$x->cart_min_value}}</td>
               <td>{{$x->coupon_status}}</td>
                <td>{{$x->expired_on}}</td>
           
            







          <td>
          
               <a href="{{url('coupon/edit/'.$x->id)}}"><button class="btn btn-primary text-white">edit</button></a>
            <a href="{{url('coupon/delete/'.$x->id)}}"><button class="btn btn-primary text-white">delete</button></a>
        </td>
      

                  </tr>
                    @endforeach
                 
                 
                </table> 
       
         
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
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


