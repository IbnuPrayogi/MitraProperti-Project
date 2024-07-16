@extends('admin.partials.main')

@section('additional-styles')
    

  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
@endsection

@section('section')

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with minimal features & hover style</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Nama Properti</th>
                <th>Harga</th>
                <th>Cicilan</th>
                <th>Tipe Cluster</th>
                <th>Lokasi</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($properties as $prop)
                <tr>
                    <td>{{ $prop->name }}</td>
                    <td>{{$prop->price}}
                    </td>
                    <td>{{$prop->instalment}}</td>
                    <td> {{$prop->cluster_type}}</td>
                    <td>{{$prop->location}}</td>
                  </tr>
                    
                @endforeach
              
  
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

  
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->



    
@endsection

@section('additional-scripts')
<script src="{{ asset('lte/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- DataTables -->
<script src="{{ asset('lte/plugins/datatables/jquery.dataTables.js')}}"></script>

<script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('lte/dist/js/demo.js')}}"></script>

<script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
 
@endsection