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

    <div class="accordion" id="accordionMetodosDeEnvio">

        <!-- Kipping: Programado -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Kipping: Programado
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
                            <textarea class="form-control" id="" rows="3"></textarea>
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
                            <textarea class="form-control" id="" rows="3"></textarea>
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