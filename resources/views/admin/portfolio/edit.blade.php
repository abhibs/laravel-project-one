@extends('admin.layout.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="row profile-body">
        <!-- left wrapper start -->

        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">

                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Portfolio </h6>


                        <form method="post" action="{{ route('portfolio-update') }}" id="myForm"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <input type="hidden" name="old_image" value="{{ $data->image }}">


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> Select Portfolio Category </label>
                                        <select class="form-select" name="category_id" id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Choose Portfolio Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $data->category_id ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> Name </label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $data->name }}">
                                        @error('name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->



                            </div><!-- Row -->

                            <div class="row">


                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> Image </label>
                                        <input type="file" name="image" class="form-control" id="image">
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-6">
                                    <img class="wd-100 rounded-circle" src="{{ asset($data->image) }}" alt="profile"
                                        id="showImage">
                                </div><!-- Col -->



                            </div><!-- Row -->

                            <div class="row">


                                <div class="col-sm-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> URL </label>
                                        <input type="text" name="url" class="form-control"
                                            value="{{ $data->url }}">
                                        @error('url')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->



                            </div><!-- Row -->


                            <button type="submit" class="btn btn-primary">Update Portfolio </button>


                        </form>

                    </div>
                </div>



            </div>
        </div>
        <!-- middle wrapper end -->
        <!-- right wrapper start -->

        <!-- right wrapper end -->
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
