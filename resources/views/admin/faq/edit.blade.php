@extends('admin.layout.app')
@section('content')
    <div class="row profile-body">
        <!-- left wrapper start -->

        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">

                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Faq </h6>


                        <form method="post" action="{{ route('faq-update') }}" id="myForm">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">


                            <div class="row">


                                <div class="col-sm-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> Question </label>
                                        <input type="text" name="question" class="form-control"
                                            value="{{ $data->question }}">
                                    </div>
                                </div><!-- Col -->



                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label">Answer</label>
                                        <textarea name="answer" class="form-control" id="tinymceExample" rows="3">{!! $data->answer !!}</textarea>

                                    </div>
                                </div><!-- Col -->
                            </div>

                            <button type="submit" class="btn btn-primary">Update FAQ </button>


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
