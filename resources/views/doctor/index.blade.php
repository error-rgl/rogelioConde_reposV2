@extends('layouts.app')

@section('template_title')
    Doctor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Doctor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('doctors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table class="table table-dark table-hover">
                                <thead class="thead">
                                    <tr>
                                        <!-- <th>No</th> -->
                                        
										<th>Id</th>
										<th>Fk Medical Center</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Code</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctors as $doctor)
                                        <tr>
                                            <!-- <td>{{ ++$i }}</td> -->
                                            
											<td>{{ $doctor->pk_doctor }}</td>
											<td>{{ $doctor->fk_medical_center }}</td>
											<td>{{ $doctor->first_name }}</td>
											<td>{{ $doctor->last_name }}</td>
											<td>{{ $doctor->code }}</td>

                                            <td>
                                                <form action="{{ route('doctors.destroy',$doctor->pk_doctor) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('doctors.show',$doctor->pk_doctor) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('doctors.edit',$doctor->pk_doctor) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $doctors->links() !!}
            </div>
        </div>
    </div>
@endsection
