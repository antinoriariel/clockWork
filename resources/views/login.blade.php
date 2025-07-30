<!-- Formulario de inicio de sesión -->
@extends('app')
@section('title', 'Iniciar Sesión')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100" style="background-color: #F6F6F6;">
    <div class="card rounded-4 shadow-sm border-0" style="width: 100%; max-width: 380px; background-color: #FFFFFF;">
        <div class="card-header bg-transparent border-0 text-center pt-4">
            <i class="bi bi-code-slash fs-1 mb-2" style="color: #000000;"></i>
            <h4 class="mb-0 fw-bold" style="color: #000000;">ClockWork</h4>
            <p class="text-muted">Potencia tu productividad</p>
        </div>
        <div class="card-body px-4 pb-4">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label" style="color: #000000;">Usuario</label>
                    <input type="text" class="form-control rounded-3 border-0 shadow-sm px-3 py-2"
                        style="background-color: #F6F6F6; color: #000000;" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label" style="color: #000000;">Contraseña</label>
                    <input type="password" class="form-control rounded-3 border-0 shadow-sm px-3 py-2"
                        style="background-color: #F6F6F6; color: #000000;" id="password" name="password" required>
                </div>
                <button type="submit" class="btn rounded-3 w-100 mt-3 fw-bold"
                    style="background-color: #000000; color: #FFFFFF; padding: 12px;">
                    Iniciar Sesión
                </button>
            </form>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #F6F6F6 !important;
    }
    
</style>
@endsection