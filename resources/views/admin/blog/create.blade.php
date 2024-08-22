@extends('admin.partials.main')

@section('section')
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100 justify-content-center">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add New Property</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="provincies">Category</label>
                                <select class="form-control" id="provincies" name="province" required>
                                    <option value="">Select Category</option>
                                     <option value="panduan">Panduan Property</option>
                                     <option value="tips">Tips & Trick</option>
                                     <option value="design">Design</option>
                                     <option value="lifestyle">Lifestyle</option>
                                     <option value="news">Berita Terkini</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="picture">Picture</label>
                                <input type="file" class="form-control" id="picture" name="picture">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                            </div>
                       
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
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


