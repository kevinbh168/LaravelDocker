@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de Contactos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('contacto.create') }}" class="btn btn-info" >Añadir Contacto</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Numero</th>
               <th>Correo</th>
             </thead>
             <tbody>
              @if($contactos->count())  
              @foreach($contactos as $libro)  
              <tr>
                <td>{{$libro->nombre}}</td>
                <td>{{$libro->numero}}</td>
                <td>{{$libro->correo}}</td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay contactos !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $contactos->links() }}
    </div>
  </div>
</section>
 
@endsection