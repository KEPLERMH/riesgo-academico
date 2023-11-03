@extends('layouts/app')
@section('content')
@if (Auth::user()->tipo == 1)

@if (session('correcto'))
<script>
    $(function notificacion(){
            new PNotify({
                title:"CORRECTO",
                type:"success",
                text:"{{session('correcto')}}",
                styling:"bootstrap3"
            })
        })
</script>
@endif

@if (session('incorrecto'))
<script>
    $(function notificacion(){
            new PNotify({
                title:"ERROR",
                type:"error",
                text:"{{session('incorrecto')}}",
                styling:"bootstrap3"
            })
        })
</script>
@endif




@endif
@endsection