@extends("layouts.master")
@section("contenido")
    <div class="row mt-2">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <span>Filtrar</span>
                </div>
                <div class="card-body">
                    <select class="form-select" id="filtro-cbx">
                        <option value="todos">Todos</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-dark text-white">
                    <tr>
                        <td>Nombre</td>
                        <td>Peligrosidad</td>
                        <td>Estados</td>
                        <td>Sujeto de Pruebas</td>
                    </tr>
                </thead>
                <tbody id="tbody-med">

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section("javascript")
    <script src="{{asset('js/servicios/consolasService.js')}}"></script>
    <script src="{{asset('js/servicios/marcasService.js')}}"></script>
    <script src="{{asset('js/ver_consolas.js')}}"></script>
@endsection