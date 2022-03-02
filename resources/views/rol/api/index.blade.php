@include('layouts.heder')
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Usuarios</h1>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="align-content-md-center">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Usuarios registrados</h5>
                                </div>
                                <div class="card-body ">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="">Nivel Entidad</th>
                                                <th class="">Nombre de entidad</th>
                                                <th class="">Nit de la entidad</th>
                                                <th class="">Estado del proceso</th>
                                                <th class="">Modalidad de contracion</th>
                                                <th class="">Objeto a contratar</th>
                                                <th class="">Tipo de contrato</th>
                                                <th class="">fecha de firma de contrato</th>
                                                <th class="">Numero de contrato</th>
                                                <th class="">Numero de proceso</th>
                                                <th class="">Valor contrato</th>
                                                <th class="">Non raz Social contratista</th>
                                                <th class="">URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($api as $i)
                                            <tr>
                                                <td>{{ $i['nivel_entidad'] }}</td>
                                                <td>{{ $i['nombre_de_la_entidad'] }}</td>
                                                <td>{{ $i['nit_de_la_entidad'] }}</td>
                                                <td>{{ $i['estado_del_proceso'] }}</td>
                                                <td>{{ $i['modalidad_de_contrataci_n'] }}</td>
                                                <td>{{ $i['objeto_a_contratar'] }}</td>
                                                <td>{{ $i['tipo_de_contrato'] }}</td>
                                                <td>fecha_de_firma_del_contrato</td>
                                                <td>{{ $i['numero_del_contrato'] }}</td>
                                                <td>{{ $i['numero_de_proceso'] }}</td>
                                                <td>{{ $i['valor_contrato'] }}</td>
                                                <td>{{ $i['nom_raz_social_contratista'] }}</td>
                                                <td>{{ $i['url_contrato'] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-secondary" id="anterior" onchange="pagination()" >Anterior</button>
                                    <button class="btn btn-secondary" id="sigiente" onchange="pagination()">Sigiente</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<script>
    function pagination(){
        
    }
</script>
@include('layouts.footer')