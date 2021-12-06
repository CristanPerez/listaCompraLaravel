@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">

        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
               <h4 style="min-height:45px;margin:5px 0 10px 0">

    </div>
    <div class="col-sm-8">

        <h2>{{$producto[0]}}</h2>
        <h4>{{$producto[1]}}</h4><br>
        <h6>Producto actualmente comprado</h6>
        <form>
        <input type="button" value="Pendiente de compra" style="background: red">
        <a href={{url('/productos/edit/'.$id)}}>
        <input type="button" value="Editar" >
        <a href="{{url('/productos')}}">
        <input type="button" value="Inicio">

    </div>
</div>

@stop
