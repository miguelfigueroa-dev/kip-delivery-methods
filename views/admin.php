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

    /* ----------------------------------------------- */

    .text-website {
        margin-top: -16px;
    }

    div.sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 25px;
        background-color: white;
        padding: 25px;
        font-size: 20px;
        z-index: 1;
    }

    .width100 {
        min-width: 100%;
    }
</style>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div style="padding: 50px; margin-top: -20px;">

    <div class="sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-2">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h3>Configuración</h3>
                        <button class="btn btn-success">Guardar configuración</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion" id="accordionPanelsStayOpenExample">

        <!-- Tarifa plana -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                    Tarifa Plana
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">

                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Activado <br></span>
                                <span class="text-muted">[website]</span>
                            </p>
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
                                <span class="text-muted">[store view]</span>
                            </p>
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
                                <span class="text-muted">[store view]</span>
                            </p>
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
                                <span class="text-muted">[website]</span>
                            </p>
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
                                <span class="text-muted">[website]</span>
                            </p>
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
                                <span class="text-muted">[store view]</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-lg mb-3">
                                <textarea class="form-control" placeholder="Tarifa plana" aria-label="With textarea" disabled>This shipping method is not available. To use this shipping method, please contact us.</textarea>
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
                                <span class="text-muted">[website]</span>
                            </p>
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
                                <span class="text-muted">[website]</span>
                            </p>
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
                                <span class="text-muted">[website]</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
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
                                <span class="text-muted">[website]</span>
                            </p>
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

        <!-- Kipping -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="kipping">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKipping" aria-expanded="true" aria-controls="collapseKipping">
                    Kipping
                </button>
            </h2>
            <div id="collapseKipping" class="accordion-collapse collapse" aria-labelledby="kipping">
                <div class="accordion-body">

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="fs-6">Activado</p>
                                <p class="text-muted text-website">[website]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <select class="form-select form-select-lg mb-12 selectKipping" aria-label=".form-select-lg example" style="min-width: 100%;">
                                <option selected>Seleccionar</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkDefaultKipping">
                                <label class="form-check-label" for="checkDefaultKipping">
                                    Usar valor del sistema
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Titulo</p>
                                <p class="text-muted text-website">[website]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="text" style="width: 100%;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="fs-6">Nombre del método</p>
                                <p class="text-muted text-website">[website]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="text" style="width: 100%;">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Kipping: Programado -->
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
                                <span class="text-muted">[website]</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-lg mb-3">
                                <textarea class="form-control" placeholder="" aria-label="With textarea">Valor de envío: $1.99 (envíos GRATIS en compras de $75+).</textarea>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Precio <br></span>
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[website]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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

        <!-- Kipping: Programado - Mismo día -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="Kipping_Programado_Mismo_Dia">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKipping_Programado_Mismo_Dia" aria-expanded="false" aria-controls="collapseKipping_Programado_Mismo_Dia">
                    Kipping: Programado - Mismo día
                </button>
            </h2>
            <div id="collapseKipping_Programado_Mismo_Dia" class="accordion-collapse collapse" aria-labelledby="Kipping_Programado_Mismo_Dia">
                <div class="accordion-body">

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="fs-6">Activar</p>
                                <p class="text-muted text-website">[website]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <select class="form-select form-select-lg mb-12 selectKippingProgramadoMismoDia" aria-label=".form-select-lg example" style="min-width: 100%;">
                                <option selected>Seleccionar</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkKippingProgramadoMismoDia">
                                <label class="form-check-label" for="checkKippingProgramadoMismoDia">
                                    Usar valor del sistema
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Titulo</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="text" style="width: 100%;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Descargo de responsabilidad</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Añada la configuración</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Envío gratis a partir de</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="number" style="width: 100%;">
                            <p>Si es " 0 " entonces estará desactivado</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Precio</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="number" style="width: 100%;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Conductores</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="number" style="width: 100%;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Capacidad por hora</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="number" style="width: 100%;">
                            <p>0,5 = Medio viaje por hora</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Rango horas</p>
                                <p class="text-muted text-website">[website]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="number" style="width: 100%;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Hora limite</p>
                                <p class="text-muted text-website">[website]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="number" style="width: 100%;">
                            <p>0 - 24 horas</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Días</p>
                                <p class="text-muted text-website">[website]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <select class="form-select width100" size="7" multiple aria-label="multiple select example">
                                <option value="1">Lunes</option>
                                <option value="2">Martes</option>
                                <option value="3">Miercoles</option>
                                <option value="4">Jueves</option>
                                <option value="5">Viernes</option>
                                <option value="6">Sabado</option>
                                <option value="7">Domingo</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Horas L</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <select class="form-select width100" size="7" multiple aria-label="multiple select example">
                                <option value="12am">12 am</option>
                                <option value="1am">1 am</option>
                                <option value="2am">2 am</option>
                                <option value="3am">3 am</option>
                                <option value="4am">4 am</option>
                                <option value="5am">5 am</option>
                                <option value="6am">6 am</option>
                                <option value="7am">7 am</option>
                                <option value="8am">8 am</option>
                                <option value="9am">9 am</option>
                                <option value="10am">10 am</option>
                                <option value="11am">11 am</option>
                                <option value="12pm">12 pm</option>
                                <option value="1pm">1 pm</option>
                                <option value="2pm">2 pm</option>
                                <option value="3pm">3 pm</option>
                                <option value="4pm">4 pm</option>
                                <option value="5pm">5 pm</option>
                                <option value="6pm">6 pm</option>
                                <option value="7pm">7 pm</option>
                                <option value="8pm">8 pm</option>
                                <option value="9pm">9 pm</option>
                                <option value="10pm">10 pm</option>
                                <option value="11pm">11 pm</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Horas K</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <select class="form-select width100" size="7" multiple aria-label="multiple select example">
                                <option value="12am">12 am</option>
                                <option value="1am">1 am</option>
                                <option value="2am">2 am</option>
                                <option value="3am">3 am</option>
                                <option value="4am">4 am</option>
                                <option value="5am">5 am</option>
                                <option value="6am">6 am</option>
                                <option value="7am">7 am</option>
                                <option value="8am">8 am</option>
                                <option value="9am">9 am</option>
                                <option value="10am">10 am</option>
                                <option value="11am">11 am</option>
                                <option value="12pm">12 pm</option>
                                <option value="1pm">1 pm</option>
                                <option value="2pm">2 pm</option>
                                <option value="3pm">3 pm</option>
                                <option value="4pm">4 pm</option>
                                <option value="5pm">5 pm</option>
                                <option value="6pm">6 pm</option>
                                <option value="7pm">7 pm</option>
                                <option value="8pm">8 pm</option>
                                <option value="9pm">9 pm</option>
                                <option value="10pm">10 pm</option>
                                <option value="11pm">11 pm</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Horas M</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <select class="form-select width100" size="7" multiple aria-label="multiple select example">
                                <option value="12am">12 am</option>
                                <option value="1am">1 am</option>
                                <option value="2am">2 am</option>
                                <option value="3am">3 am</option>
                                <option value="4am">4 am</option>
                                <option value="5am">5 am</option>
                                <option value="6am">6 am</option>
                                <option value="7am">7 am</option>
                                <option value="8am">8 am</option>
                                <option value="9am">9 am</option>
                                <option value="10am">10 am</option>
                                <option value="11am">11 am</option>
                                <option value="12pm">12 pm</option>
                                <option value="1pm">1 pm</option>
                                <option value="2pm">2 pm</option>
                                <option value="3pm">3 pm</option>
                                <option value="4pm">4 pm</option>
                                <option value="5pm">5 pm</option>
                                <option value="6pm">6 pm</option>
                                <option value="7pm">7 pm</option>
                                <option value="8pm">8 pm</option>
                                <option value="9pm">9 pm</option>
                                <option value="10pm">10 pm</option>
                                <option value="11pm">11 pm</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Horas J</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <select class="form-select width100" size="7" multiple aria-label="multiple select example">
                                <option value="12am">12 am</option>
                                <option value="1am">1 am</option>
                                <option value="2am">2 am</option>
                                <option value="3am">3 am</option>
                                <option value="4am">4 am</option>
                                <option value="5am">5 am</option>
                                <option value="6am">6 am</option>
                                <option value="7am">7 am</option>
                                <option value="8am">8 am</option>
                                <option value="9am">9 am</option>
                                <option value="10am">10 am</option>
                                <option value="11am">11 am</option>
                                <option value="12pm">12 pm</option>
                                <option value="1pm">1 pm</option>
                                <option value="2pm">2 pm</option>
                                <option value="3pm">3 pm</option>
                                <option value="4pm">4 pm</option>
                                <option value="5pm">5 pm</option>
                                <option value="6pm">6 pm</option>
                                <option value="7pm">7 pm</option>
                                <option value="8pm">8 pm</option>
                                <option value="9pm">9 pm</option>
                                <option value="10pm">10 pm</option>
                                <option value="11pm">11 pm</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Horas V</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <select class="form-select width100" size="7" multiple aria-label="multiple select example">
                                <option value="12am">12 am</option>
                                <option value="1am">1 am</option>
                                <option value="2am">2 am</option>
                                <option value="3am">3 am</option>
                                <option value="4am">4 am</option>
                                <option value="5am">5 am</option>
                                <option value="6am">6 am</option>
                                <option value="7am">7 am</option>
                                <option value="8am">8 am</option>
                                <option value="9am">9 am</option>
                                <option value="10am">10 am</option>
                                <option value="11am">11 am</option>
                                <option value="12pm">12 pm</option>
                                <option value="1pm">1 pm</option>
                                <option value="2pm">2 pm</option>
                                <option value="3pm">3 pm</option>
                                <option value="4pm">4 pm</option>
                                <option value="5pm">5 pm</option>
                                <option value="6pm">6 pm</option>
                                <option value="7pm">7 pm</option>
                                <option value="8pm">8 pm</option>
                                <option value="9pm">9 pm</option>
                                <option value="10pm">10 pm</option>
                                <option value="11pm">11 pm</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Horas S</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <select class="form-select width100" size="7" multiple aria-label="multiple select example">
                                <option value="12am">12 am</option>
                                <option value="1am">1 am</option>
                                <option value="2am">2 am</option>
                                <option value="3am">3 am</option>
                                <option value="4am">4 am</option>
                                <option value="5am">5 am</option>
                                <option value="6am">6 am</option>
                                <option value="7am">7 am</option>
                                <option value="8am">8 am</option>
                                <option value="9am">9 am</option>
                                <option value="10am">10 am</option>
                                <option value="11am">11 am</option>
                                <option value="12pm">12 pm</option>
                                <option value="1pm">1 pm</option>
                                <option value="2pm">2 pm</option>
                                <option value="3pm">3 pm</option>
                                <option value="4pm">4 pm</option>
                                <option value="5pm">5 pm</option>
                                <option value="6pm">6 pm</option>
                                <option value="7pm">7 pm</option>
                                <option value="8pm">8 pm</option>
                                <option value="9pm">9 pm</option>
                                <option value="10pm">10 pm</option>
                                <option value="11pm">11 pm</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Horas D</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <select class="form-select width100" size="7" multiple aria-label="multiple select example">
                                <option value="12am">12 am</option>
                                <option value="1am">1 am</option>
                                <option value="2am">2 am</option>
                                <option value="3am">3 am</option>
                                <option value="4am">4 am</option>
                                <option value="5am">5 am</option>
                                <option value="6am">6 am</option>
                                <option value="7am">7 am</option>
                                <option value="8am">8 am</option>
                                <option value="9am">9 am</option>
                                <option value="10am">10 am</option>
                                <option value="11am">11 am</option>
                                <option value="12pm">12 pm</option>
                                <option value="1pm">1 pm</option>
                                <option value="2pm">2 pm</option>
                                <option value="3pm">3 pm</option>
                                <option value="4pm">4 pm</option>
                                <option value="5pm">5 pm</option>
                                <option value="6pm">6 pm</option>
                                <option value="7pm">7 pm</option>
                                <option value="8pm">8 pm</option>
                                <option value="9pm">9 pm</option>
                                <option value="10pm">10 pm</option>
                                <option value="11pm">11 pm</option>
                            </select>
                        </div>
                    </div>
                    <br>

                </div>
            </div>
        </div>

        <!-- Kipping: Programado - Agregar -->
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
                                <span class="text-muted">[website]</span>
                            </p>
                        </div>
                        <div class="input-group mb-3">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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

        <!-- Kipping: Express -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="kipping_Express">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsekipping_Express" aria-expanded="false" aria-controls="collapsekipping_Express">
                    Kipping: Express
                </button>
            </h2>
            <div id="collapsekipping_Express" class="accordion-collapse collapse" aria-labelledby="kipping_Express">
                <div class="accordion-body">

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="fs-6">Activar</p>
                                <p class="text-muted text-website">[website]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <select class="form-select form-select-lg mb-12 selectKippingProgramadoMismoDia" aria-label=".form-select-lg example" style="min-width: 100%;">
                                <option selected>Seleccionar</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkKippingProgramadoMismoDia">
                                <label class="form-check-label" for="checkKippingProgramadoMismoDia">
                                    Usar valor del sistema
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Disponibilidad horas</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <select class="form-select width100" size="7" multiple aria-label="multiple select example">
                                <option value="12am">12 am</option>
                                <option value="1am">1 am</option>
                                <option value="2am">2 am</option>
                                <option value="3am">3 am</option>
                                <option value="4am">4 am</option>
                                <option value="5am">5 am</option>
                                <option value="6am">6 am</option>
                                <option value="7am">7 am</option>
                                <option value="8am">8 am</option>
                                <option value="9am">9 am</option>
                                <option value="10am">10 am</option>
                                <option value="11am">11 am</option>
                                <option value="12pm">12 pm</option>
                                <option value="1pm">1 pm</option>
                                <option value="2pm">2 pm</option>
                                <option value="3pm">3 pm</option>
                                <option value="4pm">4 pm</option>
                                <option value="5pm">5 pm</option>
                                <option value="6pm">6 pm</option>
                                <option value="7pm">7 pm</option>
                                <option value="8pm">8 pm</option>
                                <option value="9pm">9 pm</option>
                                <option value="10pm">10 pm</option>
                                <option value="11pm">11 pm</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Titulo</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="text" style="width: 100%;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Descargo de responsabilidad</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Añada la configuración</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Precio</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="number" style="width: 100%;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Conductores</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="number" style="width: 100%;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Rango horas</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="number" style="width: 100%;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Capacidad por hora</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="number" style="width: 100%;">
                            <p>0,5 = Medio viaje por hora</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <div class="top-div">
                                <p class="text-right">Limite de productos</p>
                                <p class="text-muted text-website">[global]</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="number" style="width: 100%;">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Kipping: Flash -->
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
                                <span class="text-muted">[website]</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-lg mb-3">
                                <textarea class="form-control" placeholder="" aria-label="With textarea">Valor de envío: $1.99 (envíos GRATIS en compras de $75+).</textarea>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <!---->
                    <div class="d-flex">
                        <div class="col-2">
                            <p><span class="fs-6">Precio <br></span>
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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
                                <span class="text-muted">[global]</span>
                            </p>
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

        <!-- Kipping: Programado festividad -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="Kipping_Programado_Festividad">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKipping_Programado_Festividad" aria-expanded="false" aria-controls="collapseKipping_Programado_Festividad">
                    Kipping: Programado festividad
                </button>
            </h2>
            <div id="collapseKipping_Programado_Festividad" class="accordion-collapse collapse " aria-labelledby="Kipping_Programado_Festividad">
                <div class="accordion-body">
                    ||
                </div>
            </div>
        </div>

        <!-- Click and collect -->
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

        <!-- Free Shipping -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="freeShipping">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefreeShipping" aria-expanded="false" aria-controls="collapsefreeShipping">
                    Free Shipping
                </button>
            </h2>
            <div id="collapsefreeShipping" class="accordion-collapse collapse " aria-labelledby="freeShipping">
                <div class="accordion-body d-flex">
                    ||
                </div>
            </div>
        </div>

        <!-- Table rates -->
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

        <!-- In-Store delivery -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="In_Store_Delivery">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIn_Store_Delivery" aria-expanded="false" aria-controls="collapseIn_Store_Delivery">
                    In-Store delivery
                </button>
            </h2>
            <div id="collapseIn_Store_Delivery" class="accordion-collapse collapse " aria-labelledby="In_Store_Delivery">
                <div class="accordion-body d-flex">
                    ||
                </div>
            </div>
        </div>

        <!-- UPS -->
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

        <!-- USPS -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="USPS">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUSPS" aria-expanded="false" aria-controls="collapseUSPS">
                    USPS
                </button>
            </h2>
            <div id="collapseUSPS" class="accordion-collapse collapse " aria-labelledby="USPS">
                <div class="accordion-body d-flex">
                    ||
                </div>
            </div>
        </div>

        <!-- FedEx -->
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

        <!-- DHL -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="DHL">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDHL" aria-expanded="false" aria-controls="collapseDHL">
                    DHL
                </button>
            </h2>
            <div id="collapseDHL" class="accordion-collapse collapse " aria-labelledby="DHL">
                <div class="accordion-body d-flex">
                    ||
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    /*KIPING*/
    let selectKipping = document.querySelectorAll('.selectKipping');
    let checkDefaultKipping = document.getElementById('checkDefaultKipping');

    document.addEventListener("DOMContentLoaded", () => {
        selectKipping.forEach(elemento => elemento.disabled = false);

        checkDefaultKipping.addEventListener('click', () => {
            if (checkDefaultKipping.checked) {
                selectKipping.forEach(elemento => elemento.disabled = true);
            } else {
                selectKipping.forEach(elemento => elemento.disabled = false);
            }
        });
    });

    /*KIPING PROGRAMADO MISMO DIA*/
    let selectKippingProgramadoMismoDia = document.querySelectorAll('.selectKippingProgramadoMismoDia');
    let checkKippingProgramadoMismoDia = document.getElementById('checkKippingProgramadoMismoDia');

    document.addEventListener("DOMContentLoaded", () => {
        selectKippingProgramadoMismoDia.forEach(elemento => elemento.disabled = false);

        checkKippingProgramadoMismoDia.addEventListener('click', () => {
            if (checkKippingProgramadoMismoDia.checked) {
                selectKippingProgramadoMismoDia.forEach(elemento => elemento.disabled = true);
            } else {
                selectKippingProgramadoMismoDia.forEach(elemento => elemento.disabled = false);
            }
        });
    });
</script>