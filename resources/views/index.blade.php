<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Миллий Гвардия</title>
    <style>
        .date{
            position: absolute;
            right: 5%;
        }
    </style>

</head>
<body>
<div class="p-3">


    <!-- Region Modal -->
    <div class="modal fade" id="region_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Viloyat qo'shish</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('regions.store') }}" method="post" id="region_store">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Viloyat nomi</label>
                            <input type="text" name="name" id="region_name" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                    <button type="button" class="btn btn-primary" onclick="region_store()">Saqlash</button>
                </div>
            </div>
        </div>
    </div>

    <!-- District Modal -->
    <div class="modal fade" id="district_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tuman qo'shish</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('districts.store') }}" method="post" id="district_store">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Tuman nomi</label>
                            <input type="text" name="name" id="district_name" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                    <button type="button" class="btn btn-primary" onclick="district_store()">Saqlash</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Building Modal -->
    <div class="modal fade" id="building_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bino qo'shish</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('objects.store') }}" method="post" id="building_store">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Bino nomi</label>
                            <input type="text" name="name" id="building_name" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                    <button type="button" class="btn btn-primary" onclick="building_store()">Saqlash</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <h1>Миллий Гвардия</h1>
    </div>

    <div class="row">
        <div class="col-3">
            <div class="card h-100 w-100">
                <div class="card-body">
                    <h3>Sensors</h3>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success">3-sensor ishlayapti <span class="date">08:55</span></li>
                        <li class="list-group-item list-group-item-danger">1-sensor ishlamayapti <span class="date">09:00</span></li>
                        <li class="list-group-item list-group-item-success">5-sensor ishlayapti <span class="date">09:05</span> </li>
                        <li class="list-group-item list-group-item-success">2-sensor ishlayapti <span class="date">09:10</span></li>
                        <li class="list-group-item list-group-item-success">4-sensor ishlayapti <span class="date">09:15</span></li>
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
                            <label for="region">Viloyatlar</label>
                            <div class="d-flex">
                                <select name="region" id="region" class="form-control form-select">
                                    @foreach($regions as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#region_modal">
                                    <i class="bi bi-plus-lg"></i>
                                </button>
                                <button type="button" class="btn btn-danger" onclick="region_delete()"><i
                                        class="bi bi-trash"></i></button>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="district">Tumanlar</label>
                            <div class="d-flex">
                                <select name="district" id="district" class="form-control form-select">
                                    @foreach($districts as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#district_modal">
                                    <i class="bi bi-plus-lg"></i>
                                </button>
                                <button type="button" class="btn btn-danger" onclick="district_delete()"><i class="bi bi-trash"></i></button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="building">Binolar</label>
                            <div class="d-flex">
                                <select name="building" id="building" class="form-control form-select">
{{--                                    <option value="">TATUUF</option>--}}
{{--                                    <option value="">TATU</option>--}}
{{--                                    <option value="">NDPU</option>--}}
                                </select>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#building_modal">
                                    <i class="bi bi-plus-lg"></i>
                                </button>
                                <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </div>
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
{{--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"
        integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script>


    function region_store() {
        var data = $('#region_name').val();
        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:8000/api/regions",
            data: {"name": data},
            success: function () {
                // alert('success');
                swal({
                    // title: "Good job!",
                    title: "Muvaffaqqiyatli yaratildi",
                    icon: "success",
                });
            }
        });
        $('#region_modal').modal('hide');
        $('#region_name').val("");
        location.reload();
    }

    function region_delete() {
        var id = $('#region').val();
        // alert(id);
        $.ajax({
            type: "DELETE",
            url: "http://127.0.0.1:8000/api/regions/" + id,
            success: function () {
                swal({
                    title: "Muvaffaqqiyatli o'chirildi",
                    icon: "success",
                });
            },
            error: function () {
                swal({
                    title: "Xatolik",
                    icon: "error",
                });
            },
        });
        location.reload();
    }

    function district_store() {
        var data = $('#district_name').val();
        var region_id = $('#region').val();
        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:8000/api/districts/",
            data: {"name": data, "region_id": region_id},
            success: function () {
                swal({
                    title: "Muvaffaqqiyatli yaratildi",
                    icon: "success",
                });
            },
            error: function () {
                swal({
                    title: "Xatolik",
                    icon: "error",
                });
            },
        });
        $('#district_modal').modal('hide');
        $('#district_name').val("");
        location.reload();
    }

    function district_delete() {
        var id = $('#district').val();
        $.ajax({
            type: "DELETE",
            url: "http://127.0.0.1:8000/api/districts/" + id,
            success: function () {
                swal({
                    title: "Muvaffaqqiyatli o'chirildi",
                    icon: "success",
                });
            },
            error: function () {
                swal({
                    title: "Xatolik",
                    icon: "error",
                });
            },
        });
        location.reload();
    }

    function building_store() {
        var data = $('#building_name').val();
        var district_id = $('#district').val();
        alert(data);
        alert(district_id);
        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:8000/api/objects/",
            data: {"name": data, "district_id": district_id},
            success: function () {
                swal({
                    title: "Muvaffaqqiyatli yaratildi",
                    icon: "success",
                });
            },
            error: function () {
                swal({
                    title: "Xatolik",
                    icon: "error",
                });
            },
        });
        $('#building_modal').modal('hide');
        $('#building_name').val("");
        location.reload();
    }

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
