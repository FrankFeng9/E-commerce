@extends('admin.admin_master_new')

@section('admin')
<!-- Content Wrapper. Contains page content -->

<div class="container-full">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

        <div>
            <h3>
                Sales Report Chart
            </h3>
        </div>

        <div class="margin-top-20 margin-bottom-20">
            <form method="get" action="{{ route('sale-amount-by-year') }}">
                <div class="row align-center">
                    <div class="col-md-2">
                        <div class="form-group mb-0">
                            <div class="controls">

                                <select name="year_name" class="form-control" required>
                                    <option label="Choose Year" value=""></option>
                                    @foreach ($year_all as $year)
                                    <option value="{{ $year }}" {{ $year == request()->input('year_name') ? 'selected' : '' }}>{{ $year }}</option>
                                    @endforeach
                                </select>

                            </div> <!-- /.controls -->

                        </div>
                    </div> <!-- /.col-md-2 -->

                    <div class="col-md-2">
                        <div class="form-group mb-0">
                            <div class="controls">
                                <select name="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($all_cate as $item_cate)
                                    <option value="{{ $item_cate['id'] }}" {{ $item_cate['id'] == request()->input('category_id') ? 'selected' : '' }}>{{ $item_cate['category_name_en'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div> <!-- /.col-md-2 -->

                    <div class="col-md-2">
                        <div class="form-group mb-0">
                            <div class="controls">
                                <select name="brand_id" class="form-control">
                                    <option value="">Select Brand</option>
                                    @foreach ($all_brand as $item_brand)
                                    <option value="{{ $item_brand['id'] }}" {{ $item_brand['id'] == request()->input('brand_id') ? 'selected' : '' }}>{{ $item_brand['brand_name_en'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div> <!-- /.col-md-2 -->

                    <div class="col-md-2">
                        <div class="form-group mb-0">
                            <div class="controls">
                                <input type="text" name="product_name_en" class="form-control" placeholder="search product..." value="{{ request()->input('product_name_en') }}">
                            </div>
                        </div>
                    </div> <!-- /.col-md-2 -->

                    <div class="col-md-2">
                        <input type="submit" class="btn btn-rounded btn-primary mb-0" value="Search">
                    </div> <!-- /.col-md-2 -->

                    <div class="col-md-2">
                        <a href="{{ route('all-charts') }}" class="btn btn-rounded btn-default float-right">Back</a>
                    </div>

                </div>

            </form>
        </div>


        <div class="margin-top-20 margin-bottom-20">
            <div class="row">

                <div class="col-md-6">
                    <div>
                        <h4 style="text-align:center">Sales Amounts</h4>
                    </div>
                    <div id="mychart"></div>
                </div> <!-- /.col-md-6 -->

                <div class="col-md-6">
                    <div>
                        <h4 style="text-align:center">Sales Numbers</h4>
                    </div>
                    <div id="mychart_cnt"></div>
                </div> <!-- /.col-md-6 -->

            </div>
        </div>

    </section>
    <!-- /.content -->

</div>
@endsection

@section('foot_js')
<script>
    // sale amount report
    var options = {
        series: [{
            name: 'Sale Amount',
            data: @json($list_month)
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                // columnWidth: '55%',
                // endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: @json($x_axis),
        },
        yaxis: {
            title: {
                text: 'Sale Amount'
            },
            min: 0,
            forceNiceScale: true,
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return "$" + val
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#mychart"), options);
    chart.render();
    // end sale amount report


    // sale num report
    var options_cnt = {
        series: [{
            name: 'Sale Num',
            data: @json($list_month_cnt)
        }],
        chart: {
            type: 'bar',
            height: 350,
        },
        plotOptions: {
            bar: {
                horizontal: false,
                // columnWidth: '55%',
                // endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: @json($x_axis),
        },
        yaxis: {
            title: {
                text: 'Sale Num'
            },
            min: 0,
            forceNiceScale: true,
            labels: {
                formatter: function(val, index) {
                    return val.toFixed(0);
                }
            },
        },
        fill: {
            opacity: 1
        },
    };

    var chart_cnt = new ApexCharts(document.querySelector("#mychart_cnt"), options_cnt);
    chart_cnt.render();
    // end sale num report
</script>
@endsection
