@extends('admin.partials.main')

@section('additional-styles')
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection

@section('section')
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable with minimal features & hover style</h3>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('property.create') }}">
              <button type="button" class="btn btn-primary btn-lg">+ Add Property</button>
            </a>
            <div class="d-flex">
              <select id="locationFilter" class="form-control mr-2" style="width: 200px;">
                <option value="">All Locations</option>
                @foreach ($regencies as $regency)
                  <option value="{{ $regency->regency }}">{{ $regency->regency }}</option>
                @endforeach
              </select>
              <select id="categoryFilter" class="form-control" style="width: 200px;">
                <option value="">All Categories</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->category }}">{{ $category->category }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <table id="propertyTable" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Nama Properti</th>
                <th>Harga</th>
                <th>Cicilan</th>
                <th>Tipe Cluster</th>
                <th>Lokasi</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($properties as $prop)
              <tr>
                <td>{{ $prop->name }}</td>
                <td>{{ $prop->price }}</td>
                <td>{{ $prop->instalment }}</td>
                <td>{{ $prop->cluster_type }}</td>
                <td>{{ $prop->regency }}</td>
                <td>
                  <a href="{{ route('property.edit', $prop->id) }}" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>
                  <form action="{{ route('property.destroy', $prop->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this property?')">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('additional-scripts')
<script src="{{ asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset('lte/dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('lte/dist/js/demo.js')}}"></script>

<script>
  $(function () {
    var table = $('#propertyTable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });

    function filterTable() {
      var selectedLocation = $('#locationFilter').val();
      var selectedCategory = $('#categoryFilter').val();

      table.columns(4).search(selectedLocation ? '^' + selectedLocation + '$' : '', true, false);
      table.columns(3).search(selectedCategory ? '^' + selectedCategory + '$' : '', true, false);

      table.draw();
    }

    $('#locationFilter, #categoryFilter').on('change', filterTable);
  });
</script>
<script>
  
</script>


@endsection
