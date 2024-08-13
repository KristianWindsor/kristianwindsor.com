<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    <?php
        // creates js variable from csv file
        function declareChartDataset($filename, $variable_name) {
            $coolerTemperatureArray = [];

            $file = fopen($filename, 'r');
            while (($line = fgetcsv($file)) !== FALSE) {
                $coolerTemperatureArray[] = $line[1];
            }
            fclose($file);

            array_shift($coolerTemperatureArray);
            $coolerTemperatureJson = json_encode($coolerTemperatureArray);

            echo "var $variable_name = ". $coolerTemperatureJson . ";\n";
            echo "console.log($variable_name);\n";
        }

        function declareChartLabels($filename, $variable_name) {
            $axisLabels = [];
            $hourCounter = -1; // -1 to account for csv header

            $file = fopen($filename, 'r');
            while (($line = fgetcsv($file)) !== FALSE) {
                // parse the time from the csv file
                $timeOfDay = reset(explode(':', end(explode(' ', $line[0]))));
                
                // format time (eg. 15 --> 3pm)
                if ($timeOfDay <= 12) {
                    $timeOfDay = $timeOfDay."am";
                } else {
                    $timeOfDay = $timeOfDay - 12;
                    $timeOfDay = $timeOfDay."pm";
                }
                $timeOfDay = str_replace('12am', '12pm', $timeOfDay);
                $timeOfDay = str_replace('00', '12', $timeOfDay);
                $timeOfDay = ltrim($timeOfDay, '0');


                // use counter to calculate days/hours past
                $timePast = floor($hourCounter/24)." days ".($hourCounter%24)." hours";

                // format time (eg. 0 days 1 hours --> 1 hour)
                $timePast = str_replace(' 1 hours', ' 1 hour', $timePast);
                $timePast = str_replace('0 days ', '', $timePast);
                $timePast = str_replace('1 days ', '1 day ', $timePast);

                // combine the two (eg. 1 hour | 3pm)		
                $axisLabels[] = $timePast." | ".$timeOfDay;

                // assuming each row is 1 hour
                $hourCounter++;
            }
            fclose($file);

            // remove csv header
            array_shift($axisLabels);

            // give the data to javascript
            $axisLabels = json_encode($axisLabels);
            echo "var $variable_name = ". $axisLabels . ";\n";
            echo "console.log($variable_name);\n";
        }

        declareChartLabels('lexus-kitchen.csv', 'chartDataLabels');
        
        declareChartDataset('lexus-kitchen.csv', 'lexusDataset');
        declareChartDataset('coleman-cooler.csv', 'colemanDataset');
        declareChartDataset('yeti-cooler.csv', 'yetiDataset');
    ?>


    const ctx = document.getElementById('coolerChart');

    coolerChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: chartDataLabels,
            datasets: [
                {
                    label: 'Lexus Kitchen',
                    data: lexusDataset
                },
                {
                    label: 'Coleman Cooler',
                    data: colemanDataset
                },
                {
                    label: 'Yeti Cooler',
                    data: yetiDataset
                }
            ]
        },
        options: {
            aspectRatio: 1.5,
            borderWidth: 2,
            pointRadius: 0,
            pointHoverRadius: 5,
            interaction: {
                mode: 'index',
                intersect: false
            },
            scales: {
                x: {
                    ticks: {
                        maxTicksLimit: 7,
                        callback: function(label) {
                            let realLabel = this.getLabelForValue(label);
                            return realLabel.split(' | ')[0].replace('0 hours', '').trim();
                        }
                    }
                },
                y: {
                    ticks: {
                        callback: function(value, index, ticks) {
                            return value + '°F';
                        },
                    },
                }
            },
            // so text looks nice when you zoom in
            devicePixelRatio: 4
        }
    });

    // fix tooltip not quitting on mobile 
    document.addEventListener('touchstart', function (event) {
        if (event.target && event.target.tagName.toLowerCase() !== "canvas") {
            coolerChart.canvas.dispatchEvent(new Event('mouseout'));
        }
    });
</script>
