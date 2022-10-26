<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="p-3">
    <div class="col-12">
        <h1>Миллий Гвардия</h1>
    </div>

    <div class="row">
        <div class="col-3">
            <div class="card h-100 w-100">
                <div class="card-body">
                    <h3>Sensors</h3>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success">An item</li>
                        <li class="list-group-item list-group-item-danger">A second item</li>
                        <li class="list-group-item list-group-item-success">A third item</li>
                        <li class="list-group-item list-group-item-success">A fourth item</li>
                        <li class="list-group-item list-group-item-success">And a fifth one</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card h-100">
                <div class="card-body">
                    <h3>Sensors</h3>
                    <canvas id="myChart1" width="400"></canvas>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3>camera 1</h3>
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRia_nPcC0gJwf2B1iSfMIZfmsfJKs4Jg_Sk8_IpPyv6KEqptIelOz-HuQ6WF20-0-Uy2Q&usqp=CAU"
                        alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <div class="card h-100">
                <div class="card-body">
                    <h3>Manzillar</h3>
                    <form action="">
                        <div class="mb-3">
                            <label for="city">Viloyatlar</label>
                            <select name="city" id="city" class="form-control form-select">
                                <option value="">Xorazm</option>
                                <option value="">Toshkent</option>
                                <option value="">Navoiy</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="city">Tumanlar</label>
                            <select name="city" id="city" class="form-control form-select">
                                <option value="">Urganch</option>
                                <option value="">Toshkent</option>
                                <option value="">Navoiy</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="city">Binolar</label>
                            <select name="city" id="city" class="form-control form-select">
                                <option value="">TATUUF</option>
                                <option value="">TATU</option>
                                <option value="">NDPU</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card h-100">
                <div class="card-body">
                    <h3>Sensors</h3>
                    <canvas id="myChart2" width="400"></canvas>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3>camera 2</h3>
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRia_nPcC0gJwf2B1iSfMIZfmsfJKs4Jg_Sk8_IpPyv6KEqptIelOz-HuQ6WF20-0-Uy2Q&usqp=CAU"
                        alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <div class="card h-100">
                <div class="card-body">
                    <h3>Binolar</h3>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#" class="page-link">An item</a></li>
                        <li class="list-group-item"><a href="#" class="page-link">A second item</a></li>
                        <li class="list-group-item"><a href="#" class="page-link">A third item</a></li>
                        <li class="list-group-item"><a href="#" class="page-link">A fourth item</a></li>
                        <li class="list-group-item"><a href="#" class="page-link">And a fifth one</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card h-100">
                <div class="card-body">
                    <h3>Sensors</h3>
                    <canvas id="myChart3" width="400"></canvas>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3>camera 3</h3>
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRia_nPcC0gJwf2B1iSfMIZfmsfJKs4Jg_Sk8_IpPyv6KEqptIelOz-HuQ6WF20-0-Uy2Q&usqp=CAU"
                        alt="">
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"
        integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script>
    var ctx = document.getElementById('myChart1').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    var ctx = document.getElementById('myChart3').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
