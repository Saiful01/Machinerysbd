@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box"><h4 class="page-title">Promotion Image</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Image</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Show</a></li>
                </ol>
            </div>
        </div>
    </div><!-- end row -->


    <div class="row">
        <div class="col-lg-10">
            <div class="card m-b-20">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Product Categories</h4>
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Promotion Name</th>
                            <th>Promotion Image</th>
                            <th>Date</th>

                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($promotions as $promotion)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{$promotion->promotion_name}}</td>
                                <td><img src="/images/promotion/{{$promotion->promotion_image}}" width="50px"></td>
                                <td>{{$promotion->updated_at}}</td>
                                <td>
                                    <div class="btn-group m-b-10">
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start"
                                             style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">
                                            <a class="dropdown-item"
                                               href="/admin/promotion/edit/{{$promotion->promotion_id}}">Edit</a>{{--
                                            <a class="dropdown-item" href="/admin/promotion/delete/{{$promotion->promotion_id}}">Delete</a>--}}

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection