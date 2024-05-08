const mychart1 = document.getElementById('mychart1');
const mychart2 = document.getElementById('mychart2');
const mychart3 = document.getElementById('mychart3');
const mychart4 = document.getElementById('mychart4');
const months = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];

var chart1 = new Chart(mychart1, {
    type: 'bar',
    data: {
        labels: months,
        datasets: [{
            label: 'Sent Emails',
            data: [100, 250, 30, 45, 450, 700, 10, 20, 400, 1000, 110, 900],
            backgroundColor: ['yellow', 'aqua', 'pink', 'lightgreen', 'lightblue', 'red'],
            borderColor: ['red', 'blue', 'fuchsia', 'green', 'navy', 'black'],
            borderWidth: 2,
        }],
        options: {
            plugins: {
                legend: {
                    display: false,
                }
            }
        }
    }
});

var chart2 = new Chart(mychart2, {
    type: 'line',
    data: {
        labels: months,
        datasets: [{
            label: 'sent emails',
            backgroundColor: ['red', 'blue', 'fuchsia', 'green', 'navy', 'black', 'lime', 'purple', 'gold', 'indigo', 'orange'],
            borderColor: ['steelblue'],
            data: [1000, 2000, 3000, 4000, 1000, 6000, 500, 8000, 3000, 10000, 2000, 12000],
        }],
        defaults: {
            plugins: {
                legend: {
                    labels: {
                        display: true,
                        position: 'bottom',
                    }
                }
            }
        }
    }
});

var chart3 = new Chart(mychart3, {
    type: 'line',
    data: {
        labels: months,
        datasets: [{
            label: 'Sent Emails',
            data: [100, 250, 30, 45, 450, 700, 10, 20, 400, 1000, 110, 900],
            backgroundColor: ['yellow', 'aqua', 'pink', 'lightgreen', 'lightblue', 'red'],
            borderColor: ['red', 'blue', 'fuchsia', 'green', 'navy', 'black'],
            borderWidth: 2,
        }],
    }
    // options:
});
