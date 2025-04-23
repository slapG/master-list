document.addEventListener('DOMContentLoaded', function () {
    console.log('dashboard loaded');

    // Gender Distribution Chart
    const genderChartElement = document.getElementById('genderChart');
    if (genderChartElement) {
        const genderCtx = genderChartElement.getContext('2d');
        new Chart(genderCtx, {
            type: 'bar',
            data: {
                labels: ['Male', 'Female'],
                datasets: [{
                    label: 'Count',
                    data: [genderData.male, genderData.female], // Use dynamic data
                    backgroundColor: ['#007bff', '#ff6384'],
                    borderColor: ['#0056b3', '#cc5178'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1, // Ensure y-axis increments by 1
                            callback: function(value) {
                                return parseInt(value); // Force whole numbers
                            }
                        }
                    }
                }
            }
        });
    }

    // Employee Added Per Month Chart
    const employeeChartElement = document.getElementById('employeeChart');
    if (employeeChartElement) {
        const employeeCtx = employeeChartElement.getContext('2d');
        new Chart(employeeCtx, {
            type: 'line',
            data: {
                labels: employeeAddedData.labels, // Use dynamic labels
                datasets: [{
                    label: 'Employees Added',
                    data: employeeAddedData.data, // Use dynamic data
                    fill: true,
                    backgroundColor: 'rgba(0, 123, 255, 0.2)',
                    borderColor: '#007bff',
                    tension: 0.3,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true // Display legend
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1, // Ensure y-axis increments by 1
                            callback: function(value) {
                                return parseInt(value); // Force whole numbers
                            }
                        }
                    }
                }
            }
        });
    }
});
document.addEventListener('DOMContentLoaded', function () {
    // Existing charts...

    // Employees Per Department Chart
    const departmentCtx = document.getElementById('departmentChart').getContext('2d');
    new Chart(departmentCtx, {
        type: 'bar',
        data: {
            labels: departments, // Department names
            datasets: [{
                label: 'Number of Employees',
                data: employeeCounts, // Employee counts
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Employee Count'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Departments'
                    }
                }
            }
        }
    });
});