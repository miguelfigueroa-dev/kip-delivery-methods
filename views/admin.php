<?php

?>

<style>
    .alignleft {
        float: left;
        display: none;
    }

    .alignright {
        float: right;
        display: none;
    }

    .accordion-button:not(.collapsed) {
        color: black !important;
        background-color: white !important;
    }

    .accordion-item {
        border-top: none !important;
        border-right: none !important;
        border-left: none !important;
    }

    .accordion-button:focus {
        z-index: 0 !important;
        border-color: gray !important;
        outline: 0;
        box-shadow: none !important;
    }

    .form-check .form-check-input {
        float: none !important;
        margin-left: 0em !important;
        margin-top: 1px;
    }
</style>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<div style="padding: 50px;">
    <h1>Configuración</h1>
    <br>

    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Tarifa Plana - Arucha
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">

                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="d-flex">
                            <div class="col-2">
                                <p><span class="fs-6">Activado <br></span>
                                <span class="text-muted">[website]</span></p>
                            </div>
                            <div class="col-6">
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>No</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Usar valor del sistema
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-2">
                                <p><span class="fs-6">Título <br></span>
                                <span class="text-muted">[store view]</span></p>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Flat Rate" aria-label="Tarifa plana" aria-describedby="basic-addon1" disabled>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Usar valor del sistema
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-2">
                                <p><span class="fs-6">Nombre del método <br></span>
                                <span class="text-muted">[store view]</span></p>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Fixed" aria-label="Tarifa plana" aria-describedby="basic-addon1" disabled>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Usar valor del sistema
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-2">
                                <p><span class="fs-6">Escribe <br></span>
                                <span class="text-muted">[website]</span></p>
                            </div>
                            <div class="col-6">
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" disabled>
                                    <option selected>Por articulo</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Usar valor del sistema
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-2">
                                <p><span class="fs-6">Precio <br></span>
                                <span class="text-muted">[website]</span></p>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="" aria-label="Tarifa plana" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Usar valor del sistema
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-2">
                                <p><span class="fs-6">Mensaje de error mostrado <br></span>
                                <span class="text-muted">[store view]</span></p>
                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-lg mb-3">
                                    <textarea class="form-control" placeholder="Tarifa plana"  aria-label="With textarea" disabled>This shipping method is not available. To use this shipping method, please contact us.</textarea>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Usar valor del sistema
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-2">
                                <p><span class="fs-6">Enviar a países aplicables <br></span>
                                <span class="text-muted">[website]</span></p>
                            </div>
                            <div class="col-6">
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" disabled>
                                    <option selected>Todos los paises permitidos</option>
                                    <option value="1">Paises especificos</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Usar valor del sistema
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-2">
                                <p><span class="fs-6">Enviar a países específicos <br></span>
                                <span class="text-muted">[website]</span></p>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" disabled>
                                        <option selected>Afganistán</option>
                                        <option value="1">Islas Aland</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Usar valor del sistema
                                    </label>
                                </div> -->
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-2">
                                <p><span class="fs-6">Mostrar método si no corresponde <br></span>
                                <span class="text-muted">[website]</span></p>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                                        <option selected>No</option>
                                        <option value="1">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Usar valor del sistema
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-2">
                                <p><span class="fs-6">Orden de clasificación <br></span>
                                <span class="text-muted">[website]</span></p>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="" aria-label="Tarifa plana" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Usar valor del sistema
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Kipping - Miguel
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Kipping: Programado: Programado
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Activar <br></span>
                            <span class="text-muted">[website]</span></p>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                                    <option selected>Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Usar valor del sistema
                                </label>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Titulo <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="" aria-label="Tarifa plana" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Disclaimer <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-lg mb-3">
                                <textarea class="form-control" placeholder=""  aria-label="With textarea">Valor de envío: $1.99 (envíos GRATIS en compras de $75+).</textarea>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Precio <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" placeholder="0.0" aria-label="" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Envío gratis a partir de <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6">
                            <div class="input-group ">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" placeholder="0.0" aria-label="" aria-describedby="basic-addon1">
                            </div>
                            <p class="mb-3">Si 0 entonces desactivado.</p> 
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Conductores <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                                <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Rango horas <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                                <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Capacidad por hora <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                                <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Días <br></span>
                            <span class="text-muted">[website]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                                <select class="form-select" multiple aria-label="multiple select example">
                                    <option selected>Lunes</option>
                                    <option value="1">Martes</option>
                                    <option value="2">Miercoles</option>
                                    <option value="3">Jueves</option>
                                    <option value="4">Viernes</option>
                                    <option value="5">Sábado</option>
                                    <option value="6">Domingo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Horas L <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                            <select class="form-select" multiple aria-label="multiple select example">
                                    <option selected>12:00 am</option>
                                    <option value="1">1:00 am</option>
                                    <option value="2">2:00 am</option>
                                    <option value="3">3:00 am</option>
                                    <option value="4">4:00 am</option>
                                    <option value="5">5:00 am</option>
                                    <option value="6">6:00 am</option>
                                    <option value="7">7:00 am</option>
                                    <option value="8">8:00 am</option>
                                    <option value="9">9:00 am</option>
                                    <option value="10">10:00 am</option>
                                    <option value="11">11:00 am</option>
                                    <option selected>12:00 pm</option>
                                    <option value="1">1:00 pm</option>
                                    <option value="2">2:00 pm</option>
                                    <option value="3">3:00 pm</option>
                                    <option value="4">4:00 pm</option>
                                    <option value="5">5:00 pm</option>
                                    <option value="6">6:00 pm</option>
                                    <option value="7">7:00 pm</option>
                                    <option value="8">8:00 pm</option>
                                    <option value="9">9:00 pm</option>
                                    <option value="10">10:00 pm</option>
                                    <option value="11">11:00 pm</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Horas M <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                            <select class="form-select" multiple aria-label="multiple select example">
                                    <option selected>12:00 am</option>
                                    <option value="1">1:00 am</option>
                                    <option value="2">2:00 am</option>
                                    <option value="3">3:00 am</option>
                                    <option value="4">4:00 am</option>
                                    <option value="5">5:00 am</option>
                                    <option value="6">6:00 am</option>
                                    <option value="7">7:00 am</option>
                                    <option value="8">8:00 am</option>
                                    <option value="9">9:00 am</option>
                                    <option value="10">10:00 am</option>
                                    <option value="11">11:00 am</option>
                                    <option selected>12:00 pm</option>
                                    <option value="1">1:00 pm</option>
                                    <option value="2">2:00 pm</option>
                                    <option value="3">3:00 pm</option>
                                    <option value="4">4:00 pm</option>
                                    <option value="5">5:00 pm</option>
                                    <option value="6">6:00 pm</option>
                                    <option value="7">7:00 pm</option>
                                    <option value="8">8:00 pm</option>
                                    <option value="9">9:00 pm</option>
                                    <option value="10">10:00 pm</option>
                                    <option value="11">11:00 pm</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Horas M <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                            <select class="form-select" multiple aria-label="multiple select example">
                                    <option selected>12:00 am</option>
                                    <option value="1">1:00 am</option>
                                    <option value="2">2:00 am</option>
                                    <option value="3">3:00 am</option>
                                    <option value="4">4:00 am</option>
                                    <option value="5">5:00 am</option>
                                    <option value="6">6:00 am</option>
                                    <option value="7">7:00 am</option>
                                    <option value="8">8:00 am</option>
                                    <option value="9">9:00 am</option>
                                    <option value="10">10:00 am</option>
                                    <option value="11">11:00 am</option>
                                    <option selected>12:00 pm</option>
                                    <option value="1">1:00 pm</option>
                                    <option value="2">2:00 pm</option>
                                    <option value="3">3:00 pm</option>
                                    <option value="4">4:00 pm</option>
                                    <option value="5">5:00 pm</option>
                                    <option value="6">6:00 pm</option>
                                    <option value="7">7:00 pm</option>
                                    <option value="8">8:00 pm</option>
                                    <option value="9">9:00 pm</option>
                                    <option value="10">10:00 pm</option>
                                    <option value="11">11:00 pm</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Horas J <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                            <select class="form-select" multiple aria-label="multiple select example">
                                    <option selected>12:00 am</option>
                                    <option value="1">1:00 am</option>
                                    <option value="2">2:00 am</option>
                                    <option value="3">3:00 am</option>
                                    <option value="4">4:00 am</option>
                                    <option value="5">5:00 am</option>
                                    <option value="6">6:00 am</option>
                                    <option value="7">7:00 am</option>
                                    <option value="8">8:00 am</option>
                                    <option value="9">9:00 am</option>
                                    <option value="10">10:00 am</option>
                                    <option value="11">11:00 am</option>
                                    <option selected>12:00 pm</option>
                                    <option value="1">1:00 pm</option>
                                    <option value="2">2:00 pm</option>
                                    <option value="3">3:00 pm</option>
                                    <option value="4">4:00 pm</option>
                                    <option value="5">5:00 pm</option>
                                    <option value="6">6:00 pm</option>
                                    <option value="7">7:00 pm</option>
                                    <option value="8">8:00 pm</option>
                                    <option value="9">9:00 pm</option>
                                    <option value="10">10:00 pm</option>
                                    <option value="11">11:00 pm</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Horas V <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                            <select class="form-select" multiple aria-label="multiple select example">
                                    <option selected>12:00 am</option>
                                    <option value="1">1:00 am</option>
                                    <option value="2">2:00 am</option>
                                    <option value="3">3:00 am</option>
                                    <option value="4">4:00 am</option>
                                    <option value="5">5:00 am</option>
                                    <option value="6">6:00 am</option>
                                    <option value="7">7:00 am</option>
                                    <option value="8">8:00 am</option>
                                    <option value="9">9:00 am</option>
                                    <option value="10">10:00 am</option>
                                    <option value="11">11:00 am</option>
                                    <option selected>12:00 pm</option>
                                    <option value="1">1:00 pm</option>
                                    <option value="2">2:00 pm</option>
                                    <option value="3">3:00 pm</option>
                                    <option value="4">4:00 pm</option>
                                    <option value="5">5:00 pm</option>
                                    <option value="6">6:00 pm</option>
                                    <option value="7">7:00 pm</option>
                                    <option value="8">8:00 pm</option>
                                    <option value="9">9:00 pm</option>
                                    <option value="10">10:00 pm</option>
                                    <option value="11">11:00 pm</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Horas S <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                            <select class="form-select" multiple aria-label="multiple select example">
                                    <option selected>12:00 am</option>
                                    <option value="1">1:00 am</option>
                                    <option value="2">2:00 am</option>
                                    <option value="3">3:00 am</option>
                                    <option value="4">4:00 am</option>
                                    <option value="5">5:00 am</option>
                                    <option value="6">6:00 am</option>
                                    <option value="7">7:00 am</option>
                                    <option value="8">8:00 am</option>
                                    <option value="9">9:00 am</option>
                                    <option value="10">10:00 am</option>
                                    <option value="11">11:00 am</option>
                                    <option selected>12:00 pm</option>
                                    <option value="1">1:00 pm</option>
                                    <option value="2">2:00 pm</option>
                                    <option value="3">3:00 pm</option>
                                    <option value="4">4:00 pm</option>
                                    <option value="5">5:00 pm</option>
                                    <option value="6">6:00 pm</option>
                                    <option value="7">7:00 pm</option>
                                    <option value="8">8:00 pm</option>
                                    <option value="9">9:00 pm</option>
                                    <option value="10">10:00 pm</option>
                                    <option value="11">11:00 pm</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Horas D <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                            <select class="form-select" multiple aria-label="multiple select example">
                                    <option selected>12:00 am</option>
                                    <option value="1">1:00 am</option>
                                    <option value="2">2:00 am</option>
                                    <option value="3">3:00 am</option>
                                    <option value="4">4:00 am</option>
                                    <option value="5">5:00 am</option>
                                    <option value="6">6:00 am</option>
                                    <option value="7">7:00 am</option>
                                    <option value="8">8:00 am</option>
                                    <option value="9">9:00 am</option>
                                    <option value="10">10:00 am</option>
                                    <option value="11">11:00 am</option>
                                    <option selected>12:00 pm</option>
                                    <option value="1">1:00 pm</option>
                                    <option value="2">2:00 pm</option>
                                    <option value="3">3:00 pm</option>
                                    <option value="4">4:00 pm</option>
                                    <option value="5">5:00 pm</option>
                                    <option value="6">6:00 pm</option>
                                    <option value="7">7:00 pm</option>
                                    <option value="8">8:00 pm</option>
                                    <option value="9">9:00 pm</option>
                                    <option value="10">10:00 pm</option>
                                    <option value="11">11:00 pm</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Kipping Programado - Agregar
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                <div class="accordion-body">
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Activar <br></span>
                            <span class="text-muted">[website]</span></p>
                        </div>
                        <div class="input-group mb-3">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                                <option selected>No</option>
                                <option value="1">Si</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Usar valor del sistema
                                </label>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Titulo <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Agregar pedido" name="" id="">
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                     <!---->
                     <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Disclaimer <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-lg mb-3">
                                <textarea class="form-control" name="" id="" placeholder="Valor de envío: $0.00" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Precio <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" placeholder="0.0" aria-label="" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Envío gratis a partir de <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6">
                            <div class="input-group ">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" placeholder="0.0" aria-label="" aria-describedby="basic-addon1">
                            </div>
                            <p class="mb-3">Si 0 entonces desactivado.</p> 
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- new-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsFour" aria-expanded="false" aria-controls="collapseTwo">
                    Kipping: Flash
                </button>
            </h2>
            <div id="collapsFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                <div class="accordion-body">
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Activar <br></span>
                            <span class="text-muted">[website]</span></p>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                                    <option selected>Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Usar valor del sistema
                                </label>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Horas L <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                            <select class="form-select" multiple aria-label="multiple select example">
                                    <option selected>12:00 am</option>
                                    <option value="1">1:00 am</option>
                                    <option value="2">2:00 am</option>
                                    <option value="3">3:00 am</option>
                                    <option value="4">4:00 am</option>
                                    <option value="5">5:00 am</option>
                                    <option value="6">6:00 am</option>
                                    <option value="7">7:00 am</option>
                                    <option value="8">8:00 am</option>
                                    <option value="9">9:00 am</option>
                                    <option value="10">10:00 am</option>
                                    <option value="11">11:00 am</option>
                                    <option selected>12:00 pm</option>
                                    <option value="1">1:00 pm</option>
                                    <option value="2">2:00 pm</option>
                                    <option value="3">3:00 pm</option>
                                    <option value="4">4:00 pm</option>
                                    <option value="5">5:00 pm</option>
                                    <option value="6">6:00 pm</option>
                                    <option value="7">7:00 pm</option>
                                    <option value="8">8:00 pm</option>
                                    <option value="9">9:00 pm</option>
                                    <option value="10">10:00 pm</option>
                                    <option value="11">11:00 pm</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Titulo <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="" aria-label="Tarifa plana" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Disclaimer <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-lg mb-3">
                                <textarea class="form-control" placeholder=""  aria-label="With textarea">Valor de envío: $1.99 (envíos GRATIS en compras de $75+).</textarea>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Precio <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" placeholder="0.0" aria-label="" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Conductores <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                                <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Rango horas <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                                <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Capacidad por hora <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                                <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Limite de productos <br></span>
                            <span class="text-muted">[global]</span></p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group ">
                                <input type="number" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- new-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsFive" aria-expanded="false" aria-controls="collapseFive">
                    Click And Collect
                </button>
            </h2>
            <div id="collapsFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                <div class="accordion-body">
                    ll
                </div>
            </div>
        </div>
        <!-- new-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsSix" aria-expanded="false" aria-controls="collapseSix">
                    Table Rates
                </button>
            </h2>
            <div id="collapsSix" class="accordion-collapse collapse" aria-labelledby="headingSix">
                <div class="accordion-body">
                    ll
                </div>
            </div>
        </div>
        <!-- new-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsSeven" aria-expanded="false" aria-controls="collapseSeven">
                    UPS
                </button>
            </h2>
            <div id="collapsSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven">
                <div class="accordion-body">
                    ll
                </div>
            </div>
        </div>
        <!-- new-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsEight" aria-expanded="false" aria-controls="collapseEight">
                    FedEx
                </button>
            </h2>
            <div id="collapsEight" class="accordion-collapse collapse" aria-labelledby="headingEight">
                <div class="accordion-body">
                    ll
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>