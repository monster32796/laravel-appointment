@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Total appointments: {{ $appointments->count() }}</div>

                    <div class="card-body table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Appointment List</th>
                                    <th scope="col">Doctor Name</th>
                                    <th scope="col">Appointment Date</th>
									<th scope="col">Appointment Time</th>
                                    <th scope="col">Appointment Created date</th>
                                    <th scope="col">Appointment Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($appointments as $key=>$appointment)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $appointment->doctor->name }}</td>
										<td>{{ $appointment->date }}</td>
                                        <td>{{ $appointment->time }}</td>
                                        <td>{{ $appointment->created_at->format('m-d-Y') }}</td>
                                        <td>
                                            @if ($appointment->status == 0)
                                                <p>Pending Appointment</p>
                                            @else
                                                <p>Completed Appointment</p>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <td>There is no existing appointment</td>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
