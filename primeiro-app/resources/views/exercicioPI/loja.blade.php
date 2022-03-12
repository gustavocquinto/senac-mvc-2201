@extends('layout.externo')
@section('title', 'Loja de variados')
@section('sidebar')
    @parent
    <input type="text" placeholder="Digite true or false">
    <button type="submit" href="{{}}">
    <hr>
@endsection
@section('content')
    <h3> LOJA </h3>
    <?php
        foreach($fotos as $foto){
            echo "<img style='width: 200px; margin: 20px'src='storage/products/$foto'>";
            echo "<br>";
        }
    ?>
    @if ($mostrar)
        <div> LEGAL! VOCÊ É UM ADMINSTRADOR DA LOJA </div>
    @else
        <div> Ah que pena... Infelizmente não posso deixar você chegar a essa página </div>
    @endif

@endsection