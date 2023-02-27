@extends('frontend.main_master')

@section('head_css')
<style>
</style>
@endsection

@section('content')
<div class="body-content">
    <div class="container">
        <div class="row">
            @include('frontend.common.user_sidebar')
            <div class="col-md-10">
                <div class="card">
                    <h3 class="text-center"><span class="text-danger">Shipping Address</span></h3>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($list as $v)
                            <div class="col-md-4 p-0">
                                <div class="bbox">
                                    <div class="line-1">{{ $v->first_name }} {{ $v->last_name }}</div>
                                    @if ($v->company)
                                    <div class="m-t-5 line-1">{{ $v->company }}</div>
                                    @endif
                                    <div class="m-t-5 line-1">
                                        {{ $v->address }}
                                        @if ($v->apt)
                                        , {{ $v->apt }}
                                        @endif
                                    </div>
                                    <div class="m-t-5 line-1">{{ $v->city }}, {{ $list_province[$v->province]['province_name'] ?? '--' }}, {{ $v->postal_code }}</div>
                                    <div class="bbox_btn">
                                        <a href="{{ route('user.shipping.edit', [$v->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ route('user.shipping.delete', [$v->id]) }}" class="btn btn-warning btn-sm delete_sweet">Delete</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="col-md-4 p-0">
                                <div class="bbox bbox_flex">
                                    <a href="{{ route('user.shipping.add') }}" class="btn btn-primary btn-sm">
                                        <i class="glyphicon glyphicon-plus"></i>
                                        Add
                                    </a>
                                </div>
                            </div>
                        </div> <!-- // end row -->
                    </div> <!-- // end card-body -->
                </div> <!-- // end card -->
            </div> <!-- // end col md 6 -->
        </div> <!-- // end row -->
    </div>
</div>
@endsection
