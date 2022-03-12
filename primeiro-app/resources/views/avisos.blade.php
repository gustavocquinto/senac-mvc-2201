@extends('exercicioPI.loja')
@section('title', 'Minha primeira view')
@section('sidebar')
    @parent
    
    <hr>
@endsection
@section('content')
    @if($mostrar)
   <table class="table">
       <tr><td>Quadro de Avisos {{$nome}}</td><tr>
        @foreach ($avisos as $aviso)
       <tr><td>Aviso #{{$aviso['id']}}<br> {{$aviso['aviso']}}<tr></td>
       @endforeach
       </tr>
       <?php
        foreach($avisos as $aviso){
            echo "<tr><td>Aviso #{$aviso['id']}<br> {$aviso['aviso']}<tr></td>";
        }
        ?>
   </table>
   @else
   <h3> você não tem permissão </h3>
   @endif
@endsection