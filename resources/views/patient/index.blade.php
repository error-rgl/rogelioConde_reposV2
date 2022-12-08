@extends('layouts.app')

@section('template_title')
    Patient
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Patient') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('patients.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>ID</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Birth Date</th>
										<th>Phone Number</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patients as $patient)
                                        <tr>
                                            <!-- <td>{{ ++$i }}</td> -->
                                            
											<td>{{ $patient->pk_patient }}</td>
											<td>{{ $patient->first_name }}</td>
											<td>{{ $patient->last_name }}</td>
											<td>{{ $patient->birth_date }}</td>
											<td>{{ $patient->phone_number }}</td>
											<td>{{ $patient->email }}</td>

                                            <td>
                                                <form action="{{ route('patients.destroy',$patient->pk_patient) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('patients.show',$patient->pk_patient) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('patients.edit',$patient->pk_patient) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $patients->links() !!}
            </div>
        </div>
    </div>
@endsection
