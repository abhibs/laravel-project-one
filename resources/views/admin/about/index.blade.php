@extends('admin.layout.app')
@section('content')
    <form method="post" action="{{ route('about-update') }}" id="myForm">
        @csrf
        <input type="hidden" name="id" value="{{ $data->id }}">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">About Us Content</h4>

                        <textarea class="form-control" name="content" id="tinymceExample" rows="10">{!! $data->content !!}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update About Us Content </button>
    </form>
@endsection
