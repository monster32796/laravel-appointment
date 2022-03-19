@extends('layouts.app')

@section('content')	
    <div class="container">
        <div class="row mb-4 justify-content-center">
            <div class="col-md-8">
                <!--<h1>Book your appointment today!</h1>
                @guest
                    <div class="mt-5">
                        <a href="{{ url('/register') }}"> <button class="btn btn-primary">Register as Patient</button></a>
                        <a href="{{ url('/login') }}"><button class="btn btn-success">Login</button></a>
                    </div>
                @endguest-->
            </div>
			<div class="slideshow-container">
				<div class="mySlides">
				  <img src="images/home1.jpg" style="width:100%">
				</div>

				<div class="mySlides">
				  <img src="images/home2.jpg" style="width:100%">
				</div>
			</div>
			<hr>
        </div>
		<div class="card">
			<div class="card-body">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6 col-sm-8">
							<a class="nav-link" href="{{ route('health.info') }}"><i class="bi bi-megaphone-fill"></i>  {{ __('Health Promotion Messages') }}</a>
						</div><div class="col-md-6 col-sm-8">
							<a class="nav-link" href="{{ route('login') }}"><i class="bi bi-calendar-week"></i>  {{ __('Manage Appointment') }}</a>
						</div><div class="col-md-6 col-sm-8">
							<a class="nav-link" href="{{ route('login') }}"><i class="bi bi-info-square-fill"></i>  {{ __('About Us') }}</a>
						</div><div class="col-md-6 col-sm-8">						
						<a class="nav-link" href="{{ route('login') }}"><i class="bi bi-patch-exclamation-fill"></i>  {{ __('Services') }}</a>
						</div>						
					</div>
				</div>
			</div>
		</div>
        {{-- Input --}}
        <form action="{{ url('/') }}" method="GET">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">Find Doctors</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-8">
                                <input type="date" name='date' id="datepicker" class='form-control'>
                            </div>
                            <div class="col-md-6 col-sm-4">
                                <button class="btn btn-primary" type="submit"><i class="bi bi-arrow-right-square"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        {{-- Display doctors --}}
        <div class="card">
            <div class="card-body">
                <div class="card-header">List of Doctors Available: @isset($formatDate) {{ $formatDate }}
                    @endisset
                </div>
                <div class="card-body table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Expertise</th>
                                <th>Book</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($doctors as $key=>$doctor)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><img src="{{ asset('images') }}/{{ $doctor->doctor->image }}" alt="doctor photo"
                                            width="100px"></td>
                                    <td>{{ $doctor->doctor->name }}</td>
                                    <td>{{ $doctor->doctor->department }}</td>
                                    @if (Auth::check() && auth()->user()->role->name == 'patient')
                                        <td>
                                            <a href="{{ route('create.appointment', [$doctor->user_id, $doctor->date]) }}"><button
                                                    class="btn btn-primary">Appointment</button></a>
                                        </td>
                                    @else
                                        <td>For patients ONLY</td>
                                    @endif
                                </tr>
                            @empty
                                <td>No doctors available</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
	<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}
	  slides[slideIndex-1].style.display = "block";
	  setTimeout(showSlides, 4000); // Change image every 4 seconds
	}
	
	function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
	}

	// Close the dropdown if the user clicks outside of it
	window.onclick = function(e) {
	  if (!e.target.matches('.dropbtn')) {
	  var myDropdown = document.getElementById("myDropdown");
		if (myDropdown.classList.contains('show')) {
		  myDropdown.classList.remove('show');
		}
	  }
	}
	</script>
@endsection
