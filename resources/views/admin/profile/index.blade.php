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
                        <h6 class="card-title">Edit Profile </h6>


                        <form method="post" action="{{ route('user-profile-update') }}" id="myForm"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <input type="hidden" name="old_image" value="{{ $data->image }}">


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> Name </label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $data->name }}">
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> URL </label>
                                        <input type="text" name="url" class="form-control"
                                            value="{{ $data->url }}">
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
                                    <img class="wd-100 rounded-circle"
                                        src="{{ !empty($data->image) ? url($data->image) : url('no_image.jpg') }}"
                                        alt="profile" id="showImage">
                                </div><!-- Col -->



                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label">Content</label>
                                        <textarea name="content" class="form-control" id="tinymceExample" rows="3">{!! $data->content !!}</textarea>

                                    </div>
                                </div><!-- Col -->
                            </div>
                            <button type="submit" class="btn btn-primary">Update User Profile </button>


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
