<?= $this->Html->script('Chart.min'); ?>

<script>
    var barChartData = {
        labels : [ <?php foreach ($visits_by_zone as $visit): ?>
                    <?= '"' . h($visit->zone->name) . '",' ?>
                    <?php endforeach; ?> ],
        datasets : [
            {
                fillColor : "#3678C6",
                strokeColor : "rgba(220,220,220,0.8)",
                highlightFill: "rgba(220,220,220,0.75)",
                highlightStroke: "rgba(220,220,220,1)",
                data : [ <?php foreach ($visits_by_zone as $visit): ?>
                    <?= h($visit->visits) . ',' ?>
                    <?php endforeach; ?> ]
            }
        ]

    }

    window.onload = function (){
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx).Bar(barChartData, {
            responsive : true
        });
    }
    function visitsByZone (){
        
        
    }
</script>

<div class="visits index white-bg z-depth-3">
    <div class="wrapper">
        <div class="card-panel orange accent-3">
            <h1><?= __('Visits') ?></h1>
        </div>
        
        <div class="chart-container col l8 m10 s12 offset-l2 offset-m1">
            <canvas id="canvas" height="80px" width="100px"></canvas>
        </div>

        <div class="clear"></div>    
    </div>
</div>
