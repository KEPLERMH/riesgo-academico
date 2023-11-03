{{-- @extends('layouts/app')
@section('titulo', 'Registro Semestre')
@section('content')
    @if (Auth::user()->tipo == 1)
        @if (session('correcto'))
            <script>
                $(function notificacion() {
                    new PNotify({
                        title: 'CORRECTO',
                        type: 'success',
                        text: "{{ session('correcto') }}",
                        styling: 'bootstrap3'
                    });
                })

            </script>
        @endif
        @if (session('incorrecto'))
            <script>
                $(function notificacion() {
                    new PNotify({
                        title: 'ERROR',
                        type: 'warning',
                        text: "{{ session('incorrecto') }}",
                        styling: 'bootstrap3'
                    });
                })

            </script>
        @endif

        @if (session('duplicado'))
            <script>
                $(function notificacion() {
                    new PNotify({
                        title: 'ERROR',
                        type: 'warning',
                        text: "{{ session('duplicado') }}",
                        styling: 'bootstrap3'
                    });
                })

            </script>
        @endif

        <div class="modal-body" id="modal-create">
            <h3 class="text-center" style="margin-bottom: 55px">REGISTRO DE NUEVO SEMESTRE</h3>
            <form action="{{ route('semestres.store') }}" method="POST">
                @csrf
                <div class="form-row col-12">
                    @error('semestre')
                        <small>*{{ $message }}</small>
                    @enderror
                    <input type="text" placeholder="Example: I-II" name="semestre" id="semestre"
                        value="{{ old('semestre') }}">
                </div>
                <div class="form-row col-12">
                    @error('año')
                        <small>*{{ $message }}</small>
                    @enderror
                    <select name="año" id="año">
                        {{ $año2 = date('yy') }}
                        {{ $año = date('yy') }}
                        @for ($i = $año; $año <= 2025; $año++)
                            <option {{ $año2 == $año ? 'selected' : '' }} value="{{ $año }}">{{ $año }}</option>
                        @endfor
                    </select>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('semestres.index') }}" class="btn btn-secondary" data-dismiss="modal">ATRAS</a>
                    <button type="submit" id="boton" class="btn btn-primary">REGISTRAR</button>
                </div>
            </form>
        </div>
    @endif
@endsection --}}
