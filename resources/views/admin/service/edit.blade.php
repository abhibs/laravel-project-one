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
                        <h6 class="card-title">Edit Service </h6>


                        <form method="post" action="{{ route('service-update') }}" id="myForm">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> Icon </label>
                                        <input type="text" name="icon" class="form-control"
                                            value="{{ $data->icon }}">
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> Name </label>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $data->title }}">
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
                            <button type="submit" class="btn btn-primary">Update Service </button>


                        </form>

                    </div>
                </div>



            </div>
        </div>
        <!-- middle wrapper end -->
        <!-- right wrapper start -->

        <!-- right wrapper end -->
    </div>
@endsection
