<!DOCTYPE html>
<html lang="en">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div class="row">
    <div id="myChart" style="width:100%; height: 600px;">
    </div>

    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Số lượng sản phẩm'],
                <?php
                $countcategory = count($listsatistical);
                $i = 1;
                foreach ($listsatistical as $satistical) {
                    extract($satistical);
                    if ($i == $countcategory)
                        $dauphay = "";
                    else
                        $dauphay = ",";
                    echo "['" . $satistical['categoryname'] . "', " . $satistical['countfood'] . "]" . $dauphay;
                    $i += 1;
                }
                ?>
            ]);

            var options = {
                title: 'Statistics of categories Wowfood'
            };

            var chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>
</div>