@extends('layouts.app')

@section('titulo')
    Página Princiapl
@endsection

@section('contenido')
    <x-listar-post :posts="$posts"/>
@endsection