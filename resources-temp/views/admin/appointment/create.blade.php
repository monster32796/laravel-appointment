@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmark-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
</svg>
                    <div class="d-inline" >
                        <h5>Doctor / Nurse appointment date and time</h5>
                        <span>Choose your available date and time</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
						
                            <a href="{{ url('/create') }}"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Available time</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Appointment</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            @if (Session::has('message'))
                <div class="alert bg-success alert-success text-white text-center" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            {{-- Error Message --}}
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>

            @endforeach
            {{-- Form --}}
            <form action="{{ route('appointment.store') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3>Choose A Date</h3>
                     <div class="card-body">
                        <input type="text" class="form-control datetimepicker-input" id="datepicker"
                            data-toggle="datetimepicker" data-target="#datepicker" name="date">
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Choose AM Time
                        <span class="ml-auto">Check/Uncheck
                            <input type="checkbox"
                                onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked">
                        </span>
                    </div>
                    <div class="card-body">

                        <table class="table ">


                            <tbody>
                                <tr style="background-color:#FF8C00" >
                                    <th scope="row">1</th>
                                    <td><input type="checkbox" name="time[]" value="6am"> 6am</td>
                                    <td><input type="checkbox" name="time[]" value="6.20am"> 6.20am</td>
                                    <td><input type="checkbox" name="time[]" value="6.40am"> 6.40am</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td><input type="checkbox" name="time[]" value="7am"> 7am</td>
                                    <td><input type="checkbox" name="time[]" value="7.20am"> 7.20am</td>
                                    <td><input type="checkbox" name="time[]" value="7.40am"> 7.40am</td>
                                </tr>
                                <tr style="background-color:#FF8C00" >
                                    <th scope="row">3</th>
                                    <td><input type="checkbox" name="time[]" value="8am"> 8am</td>
                                    <td><input type="checkbox" name="time[]" value="8.20am"> 8.20am</td>
                                    <td><input type="checkbox" name="time[]" value="8.40am"> 8.40am</td>
                                </tr>

                                <tr>
                                    <th scope="row">4</th>
                                    <td><input type="checkbox" name="time[]" value="9am"> 9am</td>
                                    <td><input type="checkbox" name="time[]" value="9.20am"> 9.20am</td>
                                    <td><input type="checkbox" name="time[]" value="9.40am"> 9.40am</td>
                                </tr>

                                <tr style="background-color:#FF8C00" >
                                    <th scope="row">5</th>
                                    <td><input type="checkbox" name="time[]" value="10am"> 10am</td>
                                    <td><input type="checkbox" name="time[]" value="10.20am"> 10.20am</td>
                                    <td><input type="checkbox" name="time[]" value="10.40am"> 10.40am</td>
                                </tr>

                                <tr>
                                    <th scope="row">6</th>
                                    <td><input type="checkbox" name="time[]" value="11am"> 11am</td>
                                    <td><input type="checkbox" name="time[]" value="11.20am"> 11.20am</td>
                                    <td><input type="checkbox" name="time[]" value="11.40am"> 11.40am</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Choose PM Time
                    </div>
                    <div class="card-body">

                        <table class="table table-striped">


                            <tbody>
                                <tr style="background-color:#FF8C00" >
                                    <th scope="row">7</th>
                                    <td><input type="checkbox" name="time[]" value="12pm"> 12pm</td>
                                    <td><input type="checkbox" name="time[]" value="12.20pm"> 12.20pm</td>
                                    <td><input type="checkbox" name="time[]" value="12.40pm"> 12.40pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td><input type="checkbox" name="time[]" value="1pm"> 1pm</td>
                                    <td><input type="checkbox" name="time[]" value="1.20pm"> 1.20pm</td>
                                    <td><input type="checkbox" name="time[]" value="1.40pm"> 1.40pm</td>
                                </tr>
                                <tr style="background-color:#FF8C00" >
                                    <th scope="row">9</th>
                                    <td><input type="checkbox" name="time[]" value="2pm"> 2pm</td>
                                    <td><input type="checkbox" name="time[]" value="2.20pm"> 2.20pm</td>
                                    <td><input type="checkbox" name="time[]" value="2.40pm"> 2.40pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td><input type="checkbox" name="time[]" value="3pm"> 3pm</td>
                                    <td><input type="checkbox" name="time[]" value="3.20pm"> 3.20pm</td>
                                    <td><input type="checkbox" name="time[]" value="3.40pm"> 3.40pm</td>
                                </tr>
                                <tr style="background-color:#FF8C00" >
                                    <th scope="row">11</th>
                                    <td><input type="checkbox" name="time[]" value="4pm"> 4pm</td>
                                    <td><input type="checkbox" name="time[]" value="4.20pm"> 4.20pm</td>
                                    <td><input type="checkbox" name="time[]" value="4.40pm"> 4.40pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td><input type="checkbox" name="time[]" value="5pm"> 5pm</td>
                                    <td><input type="checkbox" name="time[]" value="5.20pm"> 5.20pm</td>
                                    <td><input type="checkbox" name="time[]" value="5.40pm"> 5.40pm</td>
                                </tr>
                                <tr style="background-color:#FF8C00" >
                                    <th scope="row">13</th>
                                    <td><input type="checkbox" name="time[]" value="6pm"> 6pm</td>
                                    <td><input type="checkbox" name="time[]" value="6.20pm"> 6.20pm</td>
                                    <td><input type="checkbox" name="time[]" value="6.40pm"> 6.40pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td><input type="checkbox" name="time[]" value="7pm"> 7pm</td>
                                    <td><input type="checkbox" name="time[]" value="7.20pm"> 7.20pm</td>
                                    <td><input type="checkbox" name="time[]" value="7.40pm"> 7.40pm</td>
                                </tr>
                                <tr style="background-color:#FF8C00" >
                                    <th scope="row">15</th>
                                    <td><input type="checkbox" name="time[]" value="8pm"> 8pm</td>
                                    <td><input type="checkbox" name="time[]" value="8.20pm"> 8.20pm</td>
                                    <td><input type="checkbox" name="time[]" value="8.40pm"> 8.40pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">16</th>
                                    <td><input type="checkbox" name="time[]" value="9pm"> 9pm</td>
                                    <td><input type="checkbox" name="time[]" value="9.20pm"> 9.20pm</td>
                                    <td><input type="checkbox" name="time[]" value="9.40pm"> 9.40pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>

        <style type="text/css">
            input[type="checkbox"] {
                zoom: 1.1;

            }

            body {
                font-size: 18px;
            }

        </style>
    </div>
@endsection
