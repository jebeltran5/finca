<canvas id="myChart"></canvas>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx,{
            type: '{{ $type}}',
            data: '{!! json_encode($data) !!}'
        });
</script>