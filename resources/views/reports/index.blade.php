
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reports</h1>
    @foreach($reports as $report)
        <h2>{{ $report['project']->name }}</h2>
        <p>Velocity: {{ $report['velocity'] }}</p>
        <div id="burnDownChart-{{ $report['project']->id }}"></div>
    @endforeach
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    @foreach($reports as $report)
        var ctx = document.getElementById('burnDownChart-{{ $report['project']->id }}').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($report['burnDownChart']['labels']) !!},
                datasets: [{
                    label: 'Burn Down Chart',
                    data: {!! json_encode($report['burnDownChart']['data']) !!},
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
        });
    @endforeach
</script>
@endsection
