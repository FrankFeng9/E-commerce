@extends('frontend.main_master')

@section('title')
My Orders
@endsection

@section('content')
<div class="body-content">
    <div class="container">
        <div class="row">
            @include('frontend.common.user_sidebar')

            <div class="col-md-10">

                <form method="get" action="{{ route('my.orders') }}" class="m-t-20 m-b-20 form-inline">
                    <select name="period" class="form-control" onchange="this.form.submit()">
                        <option value="">All</option>
                        <option {{ request()->input('period') == '30-days' ? 'selected' : '' }} value="30-days">Past 30 days</option>
                        <option {{ request()->input('period') == '6-months' ? 'selected' : '' }} value="6-months">Past 6 months</option>
                        <option {{ request()->input('period') == '2022' ? 'selected' : '' }} value="2022">2022</option>
                        <option {{ request()->input('period') == '2021' ? 'selected' : '' }} value="2021">2021</option>
                        <option {{ request()->input('period') == '2020' ? 'selected' : '' }} value="2020">2020</option>
                    </select>
                </form>

                <div class="table-responsive">
                    <table class="table">
                        <tbody>

                            <tr style="background: #e2e2e2;">

                                <td class="col-md-3">
                                    <label for=""> Order</label>
                                </td>

                                <td class="col-md-3">
                                    <label for=""> Date</label>
                                </td>

                                <td class="col-md-3">
                                    <label for=""> Total</label>
                                </td>

                                <td class="col-md-3">
                                    <label for="">  Order Detail </label>
                                </td>

                            </tr>


                            @foreach($orders as $order)
                            <tr>

                                <td class="col-md-3">
                                    <label for=""> {{ $order->invoice_no }}</label>
                                </td>
                                <td class="col-md-3">
                                    <label for=""> {{ $order->order_date }}</label>
                                </td>

                                <td class="col-md-3">
                                    <label for=""> ${{ $order->amount }}</label>
                                </td>

                                <td class="col-md-3">
                                    <a href="{{ url('user/order_details/'.$order->id ) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a>

                                </td>

                            </tr>
                            @endforeach



                        </tbody>

                    </table>

                </div>


            </div> <!-- / end col md 8 -->


        </div> <!-- // end row -->

    </div>

</div>
@endsection
