@extends('admin.partials.main')

@section('section')
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Property</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ route('property.update', $property->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <!-- Name Field -->
                        <div class="form-group">
                            <label for="name">Property Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter property name" value="{{ old('name', $property->name) }}" required>
                        </div>
                        
                        <!-- Price Field -->
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter price" value="{{ old('price', $property->price) }}" required>
                        </div>
                        
                        <!-- Category Field -->
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" class="form-control" id="category" name="category" placeholder="Enter category" value="{{ old('category', $property->category) }}" required>
                        </div>
                        
                        <!-- Cluster Type Field -->
                        <div class="form-group">
                            <label for="cluster_type">Cluster Type</label>
                            <input type="text" class="form-control" id="cluster_type" name="cluster_type" placeholder="Enter cluster type" value="{{ old('cluster_type', $property->cluster_type) }}" required>
                        </div>
                        
                        <!-- Province Select -->
                        <div class="form-group">
                            <label for="provincies">Province</label>
                            <select class="form-control" id="provincies" name="province" required>
                                <option value="">Select Province</option>
                                @foreach ($provincies as $province)
                                    <option value="{{ $province->id }}" {{ $province->id == $property->province ? 'selected' : '' }}>{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <!-- Regency Select -->
                        <div class="form-group">
                            <label for="regencies">Regency</label>
                            <select class="form-control" id="regencies" name="regency" required>
                                <option value="">Select Regency</option>
                                @foreach ($regencies as $regency)
                                    <option value="{{ $regency->id }}" {{ $regency->id == $property->regency ? 'selected' : '' }}>{{ $regency->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <!-- District Select -->
                        <div class="form-group">
                            <label for="districts">District</label>
                            <select class="form-control" id="districts" name="district" required>
                                <option value="">Select District</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}" {{ $district->id == $property->district ? 'selected' : '' }}>{{ $district->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <!-- Village Select -->
                        <div class="form-group">
                            <label for="villages">Village</label>
                            <select class="form-control" id="villages" name="village" required>
                                <option value="">Select Village</option>
                                @foreach ($villages as $village)
                                    <option value="{{ $village->id }}" {{ $village->id == $property->village ? 'selected' : '' }}>{{ $village->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <!-- Location Field -->
                        <div class="form-group">
                            <label for="location">Complete Address</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Enter location" value="{{ old('location', $property->location) }}" required>
                        </div>
                        
                        <!-- Instalment Field -->
                        <div class="form-group">
                            <label for="instalment">Instalment</label>
                            <input type="number" step="0.01" class="form-control" id="instalment" name="instalment" placeholder="Enter instalment amount" value="{{ old('instalment', $property->instalment) }}" required>
                        </div>
                        
                        <!-- Picture Field -->
                        <div class="form-group">
                            <label for="picture">Picture</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="picture" name="picture">
                                    <label class="custom-file-label" for="picture">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Terms and Conditions -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="termsCheck" name="terms" required>
                            <label class="form-check-label" for="termsCheck">Agree to terms and conditions</label>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
    </div>
</div><!-- /.container-fluid -->
@endsection

<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>

@section('additional-scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#provincies').on('change', function () {
            var provinceId = this.value;
            $('#regencies').html('<option value="">Select Regency</option>');
            $('#districts').html('<option value="">Select District</option>');
            $('#villages').html('<option value="">Select Village</option>');
            if (provinceId) {
                $.ajax({
                    url: '/getRegencies/' + provinceId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $.each(data, function (key, value) {
                            $('#regencies').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            }
        });

        $('#regencies').on('change', function () {
            var regencyId = this.value;
            $('#districts').html('<option value="">Select District</option>');
            $('#villages').html('<option value="">Select Village</option>');
            if (regencyId) {
                $.ajax({
                    url: '/getDistricts/' + regencyId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $.each(data, function (key, value) {
                            $('#districts').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            }
        });

        $('#districts').on('change', function () {
            var districtId = this.value;
            $('#villages').html('<option value="">Select Village</option>');
            if (districtId) {
                $.ajax({
                    url: '/getVillages/' + districtId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $.each(data, function (key, value) {
                            $('#villages').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            }
        });
    });
</script>
@endsection
