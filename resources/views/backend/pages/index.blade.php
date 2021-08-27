@extends('layouts.backend')
@section('page_header','Pages List')
@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection
@section('page_toolbar')
    <a href="{{route('admin.pages.create')}}" class="btn btn-primary"> <i class="fa fa-plus-square"></i> Create New Page </a>
@endsection
@section('content')

    <div class="content flex-column-fluid" id="kt_content">
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Pages
                    </h3>
                </div>

            </div>
            <div class="card-body">

                <!--begin: Datatable-->
                <table class="table table-checkable" id="kt_datatable">
                    <thead>
                    <tr>
                        <th title="Field #1">#</th>
                        <th title="Field #2">Page Title  </th>
                        <th title="Field #3">Page Language </th>
                        <th title="Field #4">Page Link</th>
                        <th title="Field #4">Created At</th>
                        <th title="Field #8">Option</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                            <tr>
                                <td>{{$page->id}}</td>
                                <td>{{$page->title}}</td>
                                <td>{{$page->locale}}</td>
                                <td>{{$page->slug}}</td>
                                <td>{{$page->created_at->diffForHumans()}}</td>
                                <td nowrap="">
                                    <form action="{{route('admin.pages.delete',$page->id)}}" method="post">
                                        <a href="{{route('admin.pages.edit',$page->id)}}" class="btn btn-warning btn-icon"> <i class="fa fa-edit"></i> </a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-icon"> <i class="fa fa-trash"></i> </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
    </div>
    <!--end::Content-->
@endsection


@section('script')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $("#kt_datatable").dataTable();
    </script>
@endsection
