@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Adicionar Veiculo</h1>
<div class="ls-box">
  <hr>
  <h5 class="ls-title-5">Cadastrar Veículo:</h5>
  <form method="POST" action="{{ route('vehicle.postAdd') }}" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>

      <label class="ls-label col-md-3">
        <b class="ls-label-text">Marca:</b>
        <input type="text" maxlength="20" name="brand" placeholder="Marca do Veículo" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Modelo:</b>
        <input class="ls-no-spin" type="text" name="model" placeholder="Modelo" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Placa:</b>
        <input class="ls-no-spin" type="text" name="placa" placeholder="Placa" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Ano:</b>
        <input class="ls-no-spin" type="number"  name="year" placeholder="Ano" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Situação do veiculo</b>
      <input class="ls-no-spin" type="text"  name="situacao" placeholder="Situação do veiculo" required   >
      </label>
    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Inserir" class="ls-btn" title="Inserir">
      <input class="ls-btn-danger" type="reset" value="Limpar">
    </div>
  </form>

</div>


@stop
