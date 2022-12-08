@extends('layouts.app')

@section('template_title')
    Order
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Order') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('orders.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-dark table-hover">
                                <thead class="thead">
                                    <tr>
                                        <!-- <th>No</th> -->
                                        
										<th>Id</th>
										<th>Doctor</th>
										<th>Patient</th>
										<th>Fk User</th>
										<th>Code</th>
										<th>Is Active</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <!-- <td>{{ ++$i }}</td> -->
                                            
											<td>{{ $order->pk_order }}</td>
											<td>{{ $order->doctor->first_name }}</td>
											<td>{{ $order->patient->first_name }}</td>
											<td>{{ $order->fk_user }}</td>
											<td>{{ $order->code }}</td>
											<td>{{ $order->is_active ==1?'Activo':'Desactivo' }}</td>

                                            <td>
                                                <form action="{{ route('orders.destroy',$order->pk_order) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('orders.show',$order->pk_order) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <!-- <a class="btn btn-sm btn-success" href="{{ route('orders.edit',$order->pk_order) }}"><i class="fa fa-fw fa-edit"></i> Edit</a> -->
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
                {!! $orders->links() !!}
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
@endsection
