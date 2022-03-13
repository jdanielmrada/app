@section('page_css')
    <link href="{{ asset('css/datatable/all.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Usuarios COOD.CS</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">
                                @can('crear-user')
                                <a class="btn btn-primary btn-sm" href="{{ route('users.create') }}">Crear</a>
                                @endcan
                            </h3>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre y Apellido</th>
                                        <th>Usuario | E-MAIL</th>
                                        <th>Role</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            @if (!empty($item->getRoleNames()))
                                                @foreach ($item->getRoleNames() as $role)
                                                    <h5><span class="badge badge-dark" >{{ $role }}</span></h5>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @can('editar-user')
                                            <a class="btn btn-info btn-sm" href="{{ route('users.edit', $item->id) }}">Editar</a>
                                            @endcan
                                            @can('borrar-user')
                                            {!! Form::open(['method' => 'DELETE', 'route'=> ['users.destroy', $item->id], 'style'=> 'display:inline']) !!}
                                                {!! Form::submit('Paperela', ['class'=>'btn btn-warning btn-sm']) !!}
                                            {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Usuario | E-MAIL</th>
                                        <th>Role</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('page_js')
    {{-- Data Table --}}

    <script src="{{ asset('js/datatable/app.js') }}"></script>
    <script src="{{ asset('js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
