@extends('layouts.app')

@section('content')
<main class="app-content">
   <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
   <div class="app-title">
   	<div>
   		<h1>Listado Libros</h1>
   	</div>
   </div>
   <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <table class="table table-hover table-bordered table-responsive-lg" id="list_users">
            <thead>
              <th>Autor</th>
              <th>Nombre</th>
              <th>Fecha de Creación</th>
            </thead>
            <tbody>
              <?php /* foreach ($affiliates as $aff) { ?>
              <tr>
                <td><a href="{{url('admin/users/edit/'.$aff->id)}}">{{ $aff->firstname }} {{$aff->lastname}}</a></td>
                <td>{{ $aff->name }}</td>
                <td>{{ date('Y-m-d', strtotime($aff->created_at)) }}</td>
              </tr>
              <?php }*/ ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection