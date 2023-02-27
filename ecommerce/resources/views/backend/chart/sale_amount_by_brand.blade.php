@extends('admin.admin_master_new')

@section('admin')
<!-- Content Wrapper. Contains page content -->

<div class="container-full">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

        <div>
            <h3>
                Sale Report by Brand
            </h3>
        </div>

        <div class="margin-top-20 margin-bottom-20">

            <form method="get" action="{{ route('sale-amount-by-brand') }}">
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
                        <input type="submit" class="btn btn-rounded btn-primary mb-0" value="Search">
                    </div> <!-- /.col-md-2 -->

                    <div class="col-md-2 offset-md-6">
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
            data: @json($data_brand)
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
            data: @json($data_brand_cnt)
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
