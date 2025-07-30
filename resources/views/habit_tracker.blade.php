@extends('app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="background-color: #F6F6F6; height: 93vh;">
    <div class="card rounded-4 shadow-sm border-0" style="width: 100%; max-width: 600px; background-color: #FFFFFF;">
        <div class="card-header bg-transparent border-0 text-center pt-4">
            <i class="bi bi-code-slash fs-1 mb-2" style="color: #000000;"></i>
            <h4 class="mb-0 fw-bold" style="color: #000000;">ClockWork</h4>
            <p class="text-muted">Potencia tu productividad</p>
        </div>
        <div class="card-body px-4 pb-4">
            <p class="text-center">Vista <b class="text-primary">{{ request()->route()->getName() }}</b>, modo testing</p>
            <!-- Aquí puedes agregar más contenido relevante para la vista principal -->
        </div>
    </div>
</div>
@endsection