<?php include("head.php"); ?>

<ul class="nav nav-tabs container d-flex mb-3" id="navId" role="tablist">

    <li class="nav-item p-2">
        <a href="#picaroca" class="nav-link" data-bs-toggle="tab">Pica Roca</a>
    </li>

    <li class="nav-item p-2">
        <a href="#otro" class="nav-link" data-bs-toggle="tab">Otro</a>
    </li>

    <li class="nav-item ms-auto p-2">
        <input class="form-control" type="date" style="height:40px">
    </li>
</ul>
<!-- Tab panes -->
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade" id="picaroca" role="tabpanel">
        <form action="/picaroca/save" method="post" enctype="multipart/form-data">
            <div class="row position-relative">
                <div class="col-4 shadow-sm">
                    <div class="position-absolute">
                        <div class="position-relative top-0 start-50"><strong>Cilindro Hoist</strong></div>
                    </div>

                    <div class="container" style="margin-top:50px;">
                        <div class="d-flex justify-content-start">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Presión Mínima:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                                <span class="input-group-text" id="basic-addon1">(PSI)</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Presión Máxima:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                                <span class="input-group-text" id="basic-addon1">(PSI)</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Sello Inferior:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Sello Superior:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Sello Cámara:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">T°:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                                <span class="input-group-text" id="basic-addon1">(C°)</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Estructura:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 shadow-sm">
                    <div class="position-absolute">
                        <div class="position-relative top-0 start-50"><strong>Cilindro Dipper</strong></div>
                    </div>

                    <div class="container" style="margin-top:50px;">
                        <div class="d-flex justify-content-start">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Presión Mínima:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                                <span class="input-group-text" id="basic-addon1">(PSI)</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Presión Máxima:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                                <span class="input-group-text" id="basic-addon1">(PSI)</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Sello Inferior:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Sello Superior:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Sello Cámara:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">T°:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                                <span class="input-group-text" id="basic-addon1">(C°)</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Estructura:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 shadow-sm">
                    <div class="position-absolute">
                        <div class="position-relative top-0 start-50"><strong>Cilindro Tilt</strong></div>
                    </div>

                    <div class="container" style="margin-top:50px;">
                        <div class="d-flex justify-content-start">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Sello Mínima:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                                <span class="input-group-text" id="basic-addon1">(PSI)</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Presión Máxima:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                                <span class="input-group-text" id="basic-addon1">(PSI)</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Sello Inferior:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Sello Superior:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Sello Cámara:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">T°:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                                <span class="input-group-text" id="basic-addon1">(C°)</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Estructura:</span>
                                <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row shadow-sm">
                    <div class="col-3" style="margin-bottom:30px">
                        <div class="position-absolute" style="margin-top:50px">
                            <div class="position-relative top-0 start-50"><strong>Pasadores Hoist</strong></div>
                        </div>

                        <div class="container" style="margin-top:100px">
                            <div class="d-flex justify-content-start">
                                <div class="input-group mb-3" style="width:80%">
                                    <span class="input-group-text" id="basic-addon1">Estado:</span>
                                    <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                                </div>
                            </div>
                            <textarea class="form-control" name="obph" style="width:80%; height:100px; margin-top:20px;" placeholder="//variable" disabled readonly></textarea>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="position-absolute" style="margin-top:50px">
                            <div class="position-relative top-0 start-50"><strong>Pasadores Dipper</strong></div>
                        </div>

                        <div class="container" style="margin-top:100px">
                            <div class="d-flex justify-content-start">
                                <div class="input-group mb-3" style="width:80%">
                                    <span class="input-group-text" id="basic-addon1">Estado:</span>
                                    <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                                </div>
                            </div>
                            <textarea class="form-control" name="obph" style="width:80%; height:100px; margin-top:20px;" placeholder="//variable" disabled readonly></textarea>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="position-absolute" style="margin-top:50px">
                            <div class="position-relative top-0 start-50"><strong>Brazo Inner</strong></div>
                        </div>

                        <div class="container" style="margin-top:100px">
                            <div class="d-flex justify-content-start">
                                <div class="input-group mb-3" style="width:80%">
                                    <span class="input-group-text" id="basic-addon1">Estado:</span>
                                    <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                                </div>
                            </div>
                            <textarea class="form-control" name="obph" style="width:80%; height:100px; margin-top:20px;" placeholder="//variable" disabled readonly></textarea>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="position-absolute" style="margin-top:50px">
                            <div class="position-relative top-0 start-50"><strong>Brazo Outer</strong></div>
                        </div>

                        <div class="container" style="margin-top:100px">
                            <div class="d-flex justify-content-start">
                                <div class="input-group mb-3" style="width:80%">
                                    <span class="input-group-text" id="basic-addon1">Estado:</span>
                                    <input type="text" class="form-control" placeholder="//variable" aria-label="//variable//" aria-describedby="basic-addon1" disabled readonly>
                                </div>
                            </div>
                            <textarea class="form-control" name="obph" style="width:80%; height:100px; margin-top:20px;" placeholder="//variable" disabled readonly></textarea>
                        </div>
                        
                    </div>
                </div>

                <div class="container-fluid" style="margin-top:50px; height:1px;">
                </div>
            </div>
        </form>
        <div class="position-absolute border" style="width:50%;">
    
    <canvas id="myChart" width="400" height="300"></canvas>
    <script>
    const ctx = document.getElementById('myChart');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Presión Mínima(psi)', 'Presión Máxima(psi)', 'Temperatura(c°)'],
            datasets: [{
                label: 'Cilindro Hoist',
                data: [1,2,6],
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
                borderWidth: 1},
            {
                label: 'Cilindro Dipper',
                data: [8,9,13],
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
                borderWidth: 1},

            {
                label: 'Cilindro Tilt',
                data: [15,16,20],
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
                
            
            },
            {    
                label: 'Correcto',
                data: [3,3,3],
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
                
            }],
            
        },
        
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
</div>
<div class="position-absolute end-0" style="width:50%;">
    <img src="imagen1.jpg" alt="" width="430px" height="613px" style="margin-left:25%; margin-top:30px;">
</div>
    </div>


    <div class="tab-pane fade" id="otro" role="tabpanel">Otro
    </div>
</div>

<?php include("foot.php"); ?>