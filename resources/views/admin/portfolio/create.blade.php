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
                        <h6 class="card-title">Add Portfolio </h6>


                        <form method="post" action="{{ route('portfolio-store') }}" id="myForm"
                            enctype="multipart/form-data">
                            @csrf


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> Select Portfolio Category </label>
                                        <select class="form-select" name="category_id" id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Choose Portfolio Category</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> Name </label>
                                        <input type="text" name="name" class="form-control">
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
                                    <img class="wd-100 rounded-circle" src="{{ url('no_image.jpg') }}" alt="profile"
                                        id="showImage">
                                </div><!-- Col -->



                            </div><!-- Row -->

                            <div class="row">


                                <div class="col-sm-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> URL </label>
                                        <input type="text" name="url" class="form-control">
                                        @error('url')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->



                            </div><!-- Row -->


                            <button type="submit" class="btn btn-primary">Add Portfolio </button>


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
