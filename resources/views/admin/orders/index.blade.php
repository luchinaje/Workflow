@extends('adminlte::page')

@section('title', 'Inscripciones')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection
@section('content_header')

@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ordenes de Compra</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
            <table id="table-order" class="table table-striped table-responsive-lg">
                <thead class="thead-dark">

                    <th>#</th>
                    <th>Fecha de Inscripcion</th>
                    <th>Stock</th>
                    <th>Cliente</th>
                    <th>Precio</th>

                    <th>Fecha del Curso</th>

                    <th>Metodo de Pago</th>
                    <th>Estado del Pago</th>
                    <th width="80px">Action</th>

                </thead>
                <tbody>
                    {{-- $enrollment es como si seria mi dictation --}}

                    @foreach ($pivots as $pivot)

                        <tr>
                            <td>{{ $pivot->id }}</td>

                            <td class="text-center">{{ $pivot->created_at->format('d M Y H:i') }}</td>
                            <td>{{ $pivot->dictation->stock }}</td>
                            <td>{{ $pivot->user->last_name }}, {{ $pivot->user->name }}</td>
                            <td>{{ $pivot->dictation->courses->price }}</td>
                            <td class="text-center">{{ $pivot->dictation->date->format('d M Y') }}</td>
                            <td>{{ $pivot->payment_method}}</td>

                            <td>|
                                @if ($pivot->status == 'aprobado')
                                    <p class="badge badge-success">Aprobado</p>
                                @else
                                    <p class="badge badge-danger"><b>Pendiente</b></p>
                                @endif
                            </td>

                            <td>
                                @if ($pivot->status == 'pendiente')
                                <a class="btn btn-primary" href="{{ route('admin.orders.edit',$pivot) }}"><i
                                        class="fas fa-edit"></i></a>
                                @endif
                                {!! Form::open(['method' => 'DELETE', 'class' => 'form-eliminar', 'route' => ['admin.orders.destroy', $pivot],'style'=>'display:inline']) !!}
                                {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}
                                {!! Form::close() !!}
                            </td>

                            {{-- aca deberia hacer para algo para poder cambiar el estado del pago --}}

                        </tr>
                    @endforeach
                </tbody>
            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop


@section('js')
    <script>
        $(function () {

            $('#table-order').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('info') == 'Orden eliminada correctamente !')
        <script>
            Swal.fire(
                'Eliminado!',
                'La orden de compra se elimino con  exito!.',
                'success'
            )
        </script>
        @elseif(session('info') == 'Estado de Pago actualizado')
        <script>
            Swal.fire(
                'Actualizado!',
                'El estado del pago se actualizo correctamente.',
                'success'
            )
        </script>
    @endif


    <script>
        /*lo que hago es seleccionar esa clase $('.form-eliminar')  y le digo que cuando traten de enviar el form
                haga la siguiente accion .submit(function(e){
                    lo primero que se necesita es capturar el evento y lo hace con la letra e
                    e.preventDefault();
                })
                y logro detener el envio del form*/
        $('.form-eliminar').submit(function(e) {
            e.preventDefault();
            //luego le paso el alert
            Swal.fire({
                title: 'Estas seguro que deseas eliminar la orden de inscripcion ?',
                text: "No podras revertirlo",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit(); //luego en mi controlador pongo msj de sesion y luego lo reciboantes del alert
                }
            })
        });
    </script>

@stop
