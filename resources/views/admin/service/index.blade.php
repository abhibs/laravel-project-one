@extends('admin.layout.app')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Clients Data</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Client Data</h6>

                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Icon</th>
                                    <th>Name</th>
                                    <th>Content</th>
                                    <th>Status </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $key => $item)
                                    <tr>
                                        <td> {{ $key + 1 }} </td>
                                        <td>{{ $item->icon }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ Str::limit($item->content, 20) }}</td>
                                        <td>
                                            @if ($item->status == 1)
                                                <span class="badge badge-pill bg-success">Active</span>
                                            @else
                                                <span class="badge badge-pill bg-danger">InActive</span>
                                            @endif


                                        </td>
                                        <td>
                                            <a href="{{ route('service-edit', $item->id) }}" class="btn btn-outline-warning"
                                                title="Edit Data"> Edit </a>

                                            <a href="{{ route('service-delete', $item->id) }}"
                                                class="btn btn-outline-danger" title="Delete Data" id="delete"> Delete
                                            </a>

                                            @if ($item->status == 1)
                                                <a href="{{ route('service-inactive', $item->id) }}"
                                                    class="btn btn-outline-info" title="Inactive"><i
                                                        class="fa-solid fa-thumbs-down"></i> </a>
                                            @else
                                                <a href="{{ route('service-active', $item->id) }}"
                                                    class="btn btn-outline-info" title="Active"><i
                                                        class="fa-solid fa-thumbs-up"></i></a>
                                            @endif

                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
