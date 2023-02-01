@extends('layouts.app')

@section('title', 'Viajes (Trips)')

@section('content')

  <h2>Siguientes viajes:</h2>

  <table>
    <tr>
      <th>Fecha</th>
      <th>Origen</th>
      <th>Destino</th>
      <th>Asientos disponibles</th>
    </tr>
    @foreach($trips as $trip)
      <tr>
        <th>{{ $trip->fecha }}</th>
        <th>{{ $trip->origen }}</th>
        <th>{{ $trip->destino }}</th>
        <th>{{ $trip->plazas }}</th>
        <th>
          <form action="{{ route('reservar', ['trip' => $trip->id, 'user' => 1]) }}" method="post">
            @csrf
            <input type="number" name="num_plazas">
            <input type="submit" value="Reservar">
          </form>
        </th>
      </tr>
    @endforeach
  </table>

@endsection
