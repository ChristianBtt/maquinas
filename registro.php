<?php include("head.php"); ?>
<?php $ch01 = (isset($_POST['ch01'])) ? $_POST['ch01'] : "";

?>
<script>
    var triggerEl = document.querySelector('#navId a')
    bootstrap.Tab.getInstance(triggerEl).show()
</script>
<!-- Nav tabs -->

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
                            <label style="width: 130px; margin-top:15px">Presión Mínima</label>
                            <input type="number" class="form-control" id="ch01" name="ch01" style="width:100px" placeholder="PSI">
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <label style="width: 130px; margin-top:15px">Presión Máxima</label>
                            <input type="number" class="form-control" id="ch02" name="ch02" style="width:100px" placeholder="PSI">
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <label style="width: 130px; margin-top:15px">Sello Inferior</label>
                            <select class="form-select" id="ch03" name="ch03" style="width:150px">
                                <option>Seleccionar</option>
                                <option value="Bueno">Bueno</option>
                                <option value="Regular">Regular</option>
                                <option value="Malo">Malo</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <label style="width: 130px; margin-top:15px">Sello Superior</label>
                            <select class="form-select" id="ch04" name="ch04" style="width:150px">
                                <option>Seleccionar</option>
                                <option value="Bueno">Bueno</option>
                                <option value="Regular">Regular</option>
                                <option value="Malo">Malo</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <label style="width: 130px; margin-top:15px">Sellos Cámara</label>
                            <select class="form-select" id="ch05" name="ch05" style="width:150px">
                                <option>Seleccionar</option>
                                <option value="Bueno">Bueno</option>
                                <option value="Regular">Regular</option>
                                <option value="Malo">Malo</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <label style="width: 130px; margin-top:15px">T°</label>
                            <input type="number" class="form-control" id="ch06" name="ch06" style="width:100px" placeholder="C°">
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px; margin-bottom:30px">
                            <label style="width: 130px; margin-top:15px">Estructura</label>
                            <select class="form-select" id="ch07" name="ch07" style="width:150px">
                                <option>Seleccionar</option>
                                <option value="Bueno">Bueno</option>
                                <option value="Regular">Regular</option>
                                <option value="Malo">Malo</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-4 shadow-sm">
                    <div class="position-absolute">
                        <div class="position-relative top-0 start-50"><strong>Cilindro Dipper</strong></div>
                    </div>

                    <div class="container" style="margin-top:50px;">
                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <label style="width: 130px; margin-top:15px">Presión Mínima</label>
                            <input type="number" class="form-control" id="cd01" name="cd01" style="width:100px" placeholder="PSI">
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <label style="width: 130px; margin-top:15px">Presión Máxima</label>
                            <input type="number" class="form-control" id="cd02" name="cd02" style="width:100px" placeholder="PSI">
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <label style="width: 130px; margin-top:15px">Sello Inferior</label>
                            <select class="form-select" id="cd03" name="cd03" style="width:150px">
                                <option>Seleccionar</option>
                                <option value="Bueno">Bueno</option>
                                <option value="Regular">Regular</option>
                                <option value="Malo">Malo</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <label style="width: 130px; margin-top:15px">Sello Superior</label>
                            <select class="form-select" id="cd04" name="cd04" style="width:150px">
                                <option>Seleccionar</option>
                                <option value="Bueno">Bueno</option>
                                <option value="Regular">Regular</option>
                                <option value="Malo">Malo</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <label style="width: 130px; margin-top:15px">Sellos Cámara</label>
                            <select class="form-select" id="cd05" name="cd05" style="width:150px">
                                <option>Seleccionar</option>
                                <option value="Bueno">Bueno</option>
                                <option value="Regular">Regular</option>
                                <option value="Malo">Malo</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <label style="width: 130px; margin-top:15px">T°</label>
                            <input type="number" class="form-control" id="cd06" name="cd06" style="width:100px" placeholder="C°">
                        </div>

                        <div class="d-flex justify-content-start" style="margin-top:10px">
                            <label style="width: 130px; margin-top:15px">Estructura</label>
                            <select class="form-select" id="cd07" name="cd07" style="width:150px">
                                <option>Seleccionar</option>
                                <option value="Bueno">Bueno</option>
                                <option value="Regular">Regular</option>
                                <option value="Malo">Malo</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-4 shadow-sm">
                    <div class="position-absolute">
                        <div class="position-relative top-0 start-50"><strong>Cilindro Tilt</strong></div>
                    </div>

                    <div class="container" style="margin-top:50px;">
                        <div class="container" style="margin-top:50px;">
                            <div class="d-flex justify-content-start" style="margin-top:10px">
                                <label style="width: 130px; margin-top:15px">Presión Mínima</label>
                                <input type="number" class="form-control" id="ct01" name="ct01" style="width:100px" placeholder="PSI">
                            </div>

                            <div class="d-flex justify-content-start" style="margin-top:10px">
                                <label style="width: 130px; margin-top:15px">Presión Máxima</label>
                                <input type="number" class="form-control" id="ct02" name="ct02" style="width:100px" placeholder="PSI">
                            </div>

                            <div class="d-flex justify-content-start" style="margin-top:10px">
                                <label style="width: 130px; margin-top:15px">Sello Inferior</label>
                                <select class="form-select" id="ct03" name="ct03" style="width:150px">
                                    <option>Seleccionar</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-start" style="margin-top:10px">
                                <label style="width: 130px; margin-top:15px">Sello Superior</label>
                                <select class="form-select" id="ct04" name="ct04" style="width:150px">
                                    <option>Seleccionar</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-start" style="margin-top:10px">
                                <label style="width: 130px; margin-top:15px">Sellos Cámara</label>
                                <select class="form-select" id="ct05" name="ct05" style="width:150px">
                                    <option>Seleccionar</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-start" style="margin-top:10px">
                                <label style="width: 130px; margin-top:15px">T°</label>
                                <input type="number" class="form-control" id="ct06" name="ct06" style="width:100px" placeholder="C°">
                            </div>

                            <div class="d-flex justify-content-start" style="margin-top:10px">
                                <label style="width: 130px; margin-top:15px">Estructura</label>
                                <select class="form-select" id="ct07" name="ct07" style="width:150px">
                                    <option>Seleccionar</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                </select>
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
                                <select class="form-select" id="ecph" name="ecph" style="width:80%">
                                    <option>Seleccionar</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                </select>
                            </div>
                            <textarea class="form-control" name="obph" style="width:80%; height:100px; margin-top:20px;" placeholder="Observación"></textarea>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="position-absolute" style="margin-top:50px">
                            <div class="position-relative top-0 start-50"><strong>Pasadores Dipper</strong></div>
                        </div>

                        <div class="container" style="margin-top:100px">
                            <div class="d-flex justify-content-start">
                                <select class="form-select" id="ecpd" name="ecpd" style="width:80%">
                                    <option>Seleccionar</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                </select>
                            </div>
                            <textarea class="form-control" name="obpd" style="width:80%; height:100px; margin-top:20px;" placeholder="Observación"></textarea>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="position-absolute" style="margin-top:50px">
                            <div class="position-relative top-0 start-50"><strong>Brazo Inner</strong></div>
                        </div>

                        <div class="container" style="margin-top:100px">
                            <div class="d-flex justify-content-start">
                                <select class="form-select" id="ecbi" name="ecbi" style="width:80%">
                                    <option>Seleccionar</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                </select>
                            </div>
                            <textarea class="form-control" name="obbi" style="width:80%; height:100px; margin-top:20px;" placeholder="Observación"></textarea>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="position-absolute" style="margin-top:50px">
                            <div class="position-relative top-0 start-50"><strong>Brazo Outer</strong></div>
                        </div>
                        <div class="container" style="margin-top:100px">
                            <div class="d-flex justify-content-start">
                                <select class="form-select" id="ecbo" name="ecbo" style="width:80%">
                                    <option>Seleccionar</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                </select>
                            </div>
                            <textarea class="form-control" name="obbo" style="width:80%; height:100px; margin-top:20px;" placeholder="Observación"></textarea>
                        </div>
                    </div>
                </div>

                <div class="container-fluid position-relative" style="margin-top:50px">
                    <div class="position-absolute start-50 translate-middle">
                        <button type="submit" class="btn btn-success" style="width:500px">Enviar</button>
                    </div>
                </div>

                <div class="container-fluid" style="margin-top:50px; height:1px;">
                </div>
            </div>
        </form>

    </div>
    <div class="tab-pane fade" id="otro" role="tabpanel">Otro
    </div>
</div>





<?php include("foot.php"); ?>