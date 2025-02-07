<div id="plotly-chart" style="width: 100%; height: 500px;"></div>
<script src="https://cdn.plot.ly/plotly-2.20.0.min.js"></script>
<script>
    // PHP array passed as JSON into JavaScript
    const loginData = <?php echo json_encode($top_five_login_users); ?>;

    // Extract user names and login counts from the data
    const userNames = loginData.map(item => item.userName); // Extract user names
    const loginCounts = loginData.map(item => item.login_count); // Extract login counts

    // Define the chart data
    const data = [
        {
            labels: userNames, // Labels for the pie chart (user names)
            values: loginCounts, // Values for the pie chart (login counts)
            type: 'pie', // Pie chart type
            textinfo: 'label+percent', // Display label and percentage
            textposition: 'inside', // Position the text inside the pie slices
            marker: {
                colors: ['rgba(100, 149, 237, 0.7)', 'rgba(255, 165, 0, 0.7)', 'rgba(0, 255, 0, 0.7)', 'rgba(255, 99, 71, 0.7)', 'rgba(75, 0, 130, 0.7)'], // Custom colors for slices
                line: {
                    color: 'white', // Border color between pie slices
                    width: 2
                }
            }
        }
    ];

    // Define chart layout
    const layout = {
        title: 'Top Five Login Users',
        showlegend: false // Hide the legend (optional)
    };

    // Create the plot
    Plotly.newPlot('plotly-chart', data, layout);
</script>
