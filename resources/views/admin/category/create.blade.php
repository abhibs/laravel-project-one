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
                        <h6 class="card-title">Add Category </h6>


                        <form method="post" action="{{ route('category-store') }}" id="myForm">
                            @csrf


                            <div class="row">


                                <div class="col-sm-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label"> Name </label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div><!-- Col -->



                            </div><!-- Row -->


                            <button type="submit" class="btn btn-primary">Add Category </button>


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
