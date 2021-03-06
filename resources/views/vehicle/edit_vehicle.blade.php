@extends('layouts.application')

@section('content')

<h1 class="ls-title-intro ls-ico-list">Editar Veiculo</h1>
<div class="ls-box">

  <form method="Post" action="{{route('vehicle.edit',$vehicle->id)}}" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <label class="ls-label col-md-3">
        <b class="ls-label-text">Marca</b>
        <input value="{{ $vehicle->brand }}"  type="text" name="brand" placeholder="Marca do Veiculo" required >
      </label>
       <label class="ls-label col-md-2">
        <b class="ls-label-text">Modelo</b>
        <input value="{{ $vehicle->model }}" type="text" name="model" placeholder="Modelo" required>
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Placa</b>
        <input value="{{ $vehicle->placa }}"  type="text" name="placa" placeholder="Placa" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Ano:</b>
        <input value="{{ $vehicle->year }}" class="ls-no-spin" type="number"  name="year" placeholder="Ano" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Situação do veiculo</b>
        <input value="{{ $vehicle->situacao }}"  type="text"  name="situacao" placeholder="Situação do veiculo" required >
      </label>
    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Atualizar" class="ls-btn" title="update">
      <a href="{{ route('vehicles') }}" class="ls-btn-danger">Cancelar</a>
    </div>
  </form>
</div>
@stop
