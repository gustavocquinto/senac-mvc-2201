@extends('layouts.app')
@section('content')
<table class="table">
    @csrf
    <thead>
        <tr>
            <td> NOME </td>
            <td> ENDERECO </td>
        </tr>        
@foreach ($clientes as $cliente)
       <tr> 
           <td> {{$cliente['nome']}} </td>
           <td> {{$cliente['endereco']}} </td>
     </tr>
@endforeach
    </thead>
</table>
@endsection