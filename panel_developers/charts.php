<div class="row">
    <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['', ''],

        ['CA', <?php echo $ca_counts;?>],
        ['CA Uploads', <?php echo $ca_data_counts;?>],
        ['Developers', <?php echo $developers_counts;?>],
        ['Events', <?php echo $events_counts;?>],
        ['Members', <?php echo $members_counts;?>],
        ['CA Registrations', <?php echo $new_ca_counts;?>],
        ['Sponsors', <?php echo $sponsors_counts;?>]

        ]);

        var options = {
        chart: {
            title: '',
            subtitle: '',
        }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
    </script>
    
</div>

<div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>