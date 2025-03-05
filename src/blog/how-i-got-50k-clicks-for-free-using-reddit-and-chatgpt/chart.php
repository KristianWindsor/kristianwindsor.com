<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // font color
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        Chart.defaults.color = "#F5F5F5";
    } else {
        Chart.defaults.color = "#5a5959";
    }
    
    <?php
        // creates js variable from csv file
        function declareChartDataset($filename, $variable_name) {
            $csvData = [];

            $file = fopen($filename, 'r');
            while (($line = fgetcsv($file)) !== FALSE) {
                $csvData[] = $line[1];
            }
            fclose($file);

            array_shift($csvData);
            $csvDataJson = json_encode($csvData);

            echo "var $variable_name = ". $csvDataJson . ";\n";
            echo "console.log($variable_name);\n";
        }

        function declareChartLabels($filename, $variable_name) {
            $axisLabels = [];
            $row = 0;

            $file = fopen($filename, 'r');
            while (($line = fgetcsv($file)) !== FALSE) {
                // skip the first row (headers)
                if ($row == 0) {
                    $row++;
                    continue;
                }

                // parse csv text
                $rawDate = reset(explode(':', end(explode(' ', $line[0]))));
                
                // create a datetime object from the raw date
                // we need to add a day to make it a complete date
                $dateObj = DateTime::createFromFormat('Y-m-d', $rawDate.'-01');

                // format the date to get "Month YYYY" format
                $formattedDate = $dateObj->format('F Y');

                $axisLabels[] = $formattedDate;
                $row++;
            }
            fclose($file);

            // give the data to javascript
            $axisLabels = json_encode($axisLabels);
            echo "var $variable_name = ". $axisLabels . ";\n";
            echo "console.log($variable_name);\n";
        }

        declareChartLabels('citethis-reddit-traffic.csv', 'chartDataLabels');
        
        declareChartDataset('reddit-posted-comments.csv', 'redditCommentsDataset');
        declareChartDataset('citethis-reddit-traffic.csv', 'webTrafficDataset');
    ?>

    // Format Date (X-Axis) Labels
    function formatDateLabel(givenLabel) {
        // Split the date string into month and year parts
        const [month, year] = givenLabel.split(' ');
        
        // List of months that should not be abbreviated
        const noAbbreviationMonths = ["March", "April", "May", "June", "July"];
        
        let shortMonth;
        
        // Check if the month should remain unabbreviated
        if (noAbbreviationMonths.includes(month)) {
            shortMonth = month;
        } else {
            // For all other months, take first 3 letters and add a period
            shortMonth = month.slice(0, 3) + ".";
        }
        
        // Combine the month name (abbreviated or not) and the shortened year
        return `${shortMonth} ${year}`;
    }


    const ctx = document.getElementById('redditbotChart');

    coolerChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: chartDataLabels,
            datasets: [
                {
                    label: 'Reddit Comments Posted',
                    data: redditCommentsDataset,
                    yAxisID: 'y1'
                },
                {
                    label: 'Traffic from Reddit',
                    data: webTrafficDataset,
                    yAxisID: 'y'
                },
            ]
        },
        options: {
            aspectRatio: 1.68,
            pointHoverRadius: 5,
            interaction: {
                mode: 'index',
                intersect: false
            },
            scales: {
                x: {
                    ticks: {
                        maxTicksLimit: 10,
                        callback: function(label) {
                            let givenLabel = this.getLabelForValue(label);
                            let displayLabel = formatDateLabel(givenLabel);
                            return displayLabel;
                        }
                    }
                },
                y: {
                    ticks: {
                        count: 7
                    },
                    title: {
                        display: true,
                        text: 'Clicks'
                    }
                },
                y1: {
                    min: 0,
                    max: 40,
                    position: 'right',
                    grid: {
                        // hide grid lines
                        drawOnChartArea: false,
                    },
                    ticks: {
                        count: 5,
                    },
                    title: {
                        display: true,
                        text: 'Comments'
                    }
                },
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const labelMappings = {
                                "Reddit Comments Posted": "Comments",
                                "Traffic from Reddit": "Clicks"
                            };
                            let givenLabelUnit = context.dataset.label;
                            let givenLabelValue = context.formattedValue;
                            let displayLabel = givenLabelValue + ' ' + (labelMappings[givenLabelUnit] || givenLabelUnit);
                            return displayLabel;
                        }
                    }
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
