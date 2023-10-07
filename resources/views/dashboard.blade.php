@extends('adminlte::page')

@section('Bonanza', 'Bonanza | Pagos')

@section('content_header')
    <h1>Pagos</h1>
@stop

@section('content')
    <p>Detalles</p>
    
    <div class="container">
        <div class="row ">
            <div class="col-md-4">
                <div class="card">
                    <div class="container-fluid">
                        <p class="status amarillo-bg">Pendiente</p>
                        <h2><b class="precio">$219</b></h2>
                        <p class="fecha">05/10/2023, 15:19</p>
                        <h6 class="concepto">Pago de servicios</h6>
                        <p>Pago en efectivo</p>
                        <a href="https://pay.conekta.com/link/b5c0f31865a44b7a85c31a0dcb6ddc32" role="button" class="btn btn-primary bg-bona">Pagar</a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="container-fluid">
                        <p class="status amarillo-bg">Pendiente</p>
                        <h2><b class="precio">$350</b></h2>
                        <p class="fecha">07/10/2023, 03:15</p>
                        <h6 class="concepto">Pago de muebles</h6>
                        <p>Falta seleccionar pago</p>
                        <a href="https://pay.conekta.com/link/986b6569b7664ee6994bfa601686bdcf" role="button" class="btn btn-primary bg-bona">Pagar</a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="container-fluid">
                        <p class="status rojo-bg">Rechazado</p>
                        <h2><b class="precio">$500</b></h2>
                        <p class="fecha">01/10/2023, 13:05</p>
                        <h6 class="concepto">Ropa - Liverpool</h6>
                        <p>Transferencia</p>
                        <a href="https://pay.conekta.com/link/53ac3d49905145e3a85a63abad35713f" role="button" class="btn btn-primary bg-bona">Pagar</a>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="container-fluid">
                        <p class="status verde-bg">Pagado</p>
                        <h2><b class="precio">$199</b></h2>
                        <p class="fecha">03/10/2023, 00:05</p>
                        <h6 class="concepto">Paquete Spotify Premium</h6>
                        <p>Pago en efectivo</p>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="container-fluid">
                        <p class="status verde-bg">Pagado</p>
                        <h2><b class="precio">$4999</b></h2>
                        <p class="fecha">07/10/2023, 11:42</p>
                        <h6 class="concepto">Seguro Qualitas</h6>
                        <p>Tarjeta de crédito</p>
                        <p></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="css/style.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop