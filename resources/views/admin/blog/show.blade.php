@extends('admin.partials.main')

@section('section')
<div class="card card-solid">
    <div class="card-body d-flex flex-column justify-content-center align-items-center">
        <div class="text-center">
            <h3 class="my-3">{{ $blog->title }}</h3>
        </div>
        <div class="text-center">
            <img src="{{ asset('storage/blog/'.$blog->picture) }}" class="product-image" alt="Product Image">
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                    @foreach (explode("\n", $blog->content) as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection

