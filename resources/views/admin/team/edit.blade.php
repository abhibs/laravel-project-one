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
                        <h6 class="card-title">Edit Team </h6>


                        <form method="post" action="{{ route('team-update', $data->id) }}" id="myForm"
                            enctype="multipart/form-data">
                            @csrf


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
                                        <label class="form-label"> Designation </label>
                                        <input type="text" name="designation" class="form-control"
                                            value="{{ $data->designation }}">
                                    </div>
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
                                @foreach ($socialmedia as $media)
                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label"> Social Media </label>
                                            <input type="text" name="icon[]" class="form-control"
                                                placeholder="Enter Social Media Icon Class" value="{{ $media->icon }}">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label"> URL </label>
                                            <input type="text" name="url[]" class="form-control"
                                                placeholder="Enter Social Media URL" value="{{ $media->url }}">
                                        </div>
                                    </div>
                                @endforeach

                                <div class="col-5"></div>
                                <div class="col-2
                                                form-group">
                                    <button id="btnCakePrice2" style="border: none;" class="form-control text-danger"
                                        type="button"><i class="fa fa-plus"></i></button>
                                </div>


                            </div><!-- Row -->
                            <div id="WeightContainer2"></div>

                            <button type="submit" class="btn btn-primary">Update Team </button>


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

    <script>
        $("#btnCakePrice2").bind("click", function() {
            var div = $("<div />");
            div.html(GetDynamicWeight2(""));
            $("#WeightContainer2").append(div);
        });
        $("body").on("click", ".removeGrossBtn2", function() {
            $(this).closest(".dynamicRadio2").remove();
        });

        function GetDynamicWeight2(value) {
            return `<div class="dynamicRadio2">
<div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> Social Media </label>
                                        <input type="text" name="icon[]" class="form-control"
                                            placeholder="Enter Social Media Icon Class">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> URL </label>
                                        <input type="text" name="url[]" class="form-control"
                                            placeholder="Enter Social Media URL">
                                    </div>
                                </div>



                            </div>

        <div class="col-2 offset-5 form-group"><button style="border: none;" class="form-control text-danger removeGrossBtn2" id=""><i class="fa fa-minus"></i></button></div></div></div> `
        }
    </script>
@endsection
