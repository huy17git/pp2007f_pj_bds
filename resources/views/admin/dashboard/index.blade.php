@extends('admin.master')

@section('title', 'DashBoard')

@section('styles')

@endsection

@section('content')
<form action="{{ Route('dashAjax') }}" method="get">
    <div class="form-group col-md-6">
        
            <label class="control-label">Select Year</label>
            <select class="form-control" name="year">
                @for ($i = 0; $i <= 5; $i++)
                    <option class="year" year="{{ $year - $i }}">{{ $year - $i }}</option>

                @endfor
            </select>
    </div>
    <div class="form-group col-md-2">
            <button>Submit</button>
       
    </div>
</form>
    @if (session('mess'))
    <div class = "alert alert-danger">
                    {{ session('mess') }}
                    
    
    </div>
    @endif
    <div id="show"></div>
    <div class="row">
        <div class="col-md-12">
            <div id="chart_div" style="height:500px"></div>
        </div>
        <div class="col-md-6">
            <div id="table_div" style="height:300px"></div>
        </div>
    </div>

@endsection


@section('scripts')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawVisualization);

        function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var visitor = <?php echo $item; ?>;        console.log(visitor);
            var data = google.visualization.arrayToDataTable(visitor);

            var options = {
                title: 'Monthly Sales and Revenues',
                vAxis: {
                    title: 'Cups'
                },
                hAxis: {
                    title: 'Month'
                },
                seriesType: 'bars',
                series: {
                    5: {
                        type: 'line'
                    }
                }
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }

    </script>

@endsection
