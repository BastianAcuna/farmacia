@extends("layouts.master")

@section("contenido")
    
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <span>Agregar Medicamento</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="compuestos-txt" class="form-label">Compuestos Activos</label>
                        <input type="number"  id="compuestos-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="estado-select" class="form-label">Estado</label>
                        <select class="form-select" id="estados-select">
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="restricciones-txt" class="form-label">Restricciones</label>
                        <input type="txt"  id="restricciones-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="sujetos-select" class="form-label">Sujetos de Pruebas</label>
                        <select class="form-select" id="sujetos-select">
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="adversos-txt" class="form-label">Efectos Adversos</label>
                        <input type="text" id="adversos-txt" class="form-control">
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="registrar-btn" class="btn btn-info">Registrar</button>
                </div>
            </div>
        </div>
    </div>

@endsection
<!-- Esto define el contenido de la seccion javascript del master -->
@section("javascript")
   
@endsection