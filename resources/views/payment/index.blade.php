@extends('adminlte::page')

@section('Bonanza', 'Bonanza | Pagos')

@section('content_header')
    <h1>Pagos</h1>
@stop

@section('content')
    <p>Histórico de pagos</p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card spaces bg-bona">
                    <span class="spaces">Total gastado este mes</span>
                    <h1><b class="spaces">$6227</b></h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card spaces bg-bona">
                    <span class="spaces">Medio de pago más utilizado</span>
                    <h1><b class="spaces">Pago en efectivo</b></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p></p>
                <div class="card">
                    <table class="table responsive">
                        <thead>
                          <tr>
                            <th scope="col">Conceptos </th>
                            <th scope="col">Monto</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Medio de pago</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Pago de servicios</th>
                                <th>$219</th>
                              <td>05/10/23</td>
                            <td>Oxxo</td>
                          </tr>
                          <tr>
                        <th scope="row">Minecraft</p></th>
                             <th>$350</th>
                              <td>06/10/23</td>
                             <td>Oxxo</td>
                         </tr>
                          <tr>
                            <th scope="row">Liverpool</th>
                                <th>$500</th>
                              <td>01/10/23</td>
                            <td>Trasferencias</td>
                          </tr>
                          <tr>
                            <th scope="row">Paquete Spotify Premium</th>
                                <th>$199</th>
                              <td>01/10/23</td>
                            <td>Oxxo</td>
                          </tr>
                          <tr>
                              <th scope="row">Seguro Qualitas</th>
                                <th>$4999</th>
                              <td>08/10/23</td>
                            <td>Trasferencias</td>
                          </tr>
                        </tbody>
                      </table>
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