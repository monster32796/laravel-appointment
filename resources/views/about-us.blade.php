@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">About Us</div>
                    <div class="card-body table-responsive-md">
						<br/>
						<div class="tab">
							<button class="tablinks" onclick="openABTUS(event, 'overview')" id="defaultOpen">Overview</button>
							<button class="tablinks" onclick="openABTUS(event, 'vmv')">Our Vision, Mission & Values</button>
							<button class="tablinks" onclick="openABTUS(event, 'patientExp')">Patient Satisfaction & Experience</button>
							<button class="tablinks" onclick="openABTUS(event, 'news')">News</button>
							<button class="tablinks" onclick="openABTUS(event, 'covid')">COVID-19</button>
						</div>
						<br/>
						<div id="overview" class="tabcontent">
							<h2 style="font-family:sans-serif; color:#FF8C00;">Overview</h2>
							<p><h5>Member 1:</h5> 6863073 (Chua Xin Hui) <br/>
								Role: Programmer <br/>
								Hobby: Working out, Travel, Netflix <br/>
								<br/>
								<h5>Member 2:</h5> 7020788 (Shanmukh Raj Kaila) <br/>
								Role: <br/>
								Hobby: <br/>
								<br/>
								<h5>Member 3:</h5> 6863905 (Fong Shi Hui) <br/>
								Role: <br/>
								Hobby: <br/>
								<br/>
								<h5>Member 4:</h5> 6863152 (Kai Yang) <br/>
								Role: Programmer <br/>
								Hobby: Boxing, Swimming <br/>
								<br/>
								<h5>Member 5:</h5> 6864673(Goh Jia Teck) <br/>
								Role: Programmer <br/>
								Hobby: <br/>
								<br/>
								5 selfless individual decide to step on the journey to create the best health appointment website to benefit the healthcare industry.<br/>
								<br/>
								Overcoming various hurdles, we have managed to develop the most user -friendly website that cater to the public.</p>
						</div>

						<div id="vmv" class="tabcontent">
							<h2 style="font-family:sans-serif; color:#FF8C00;">Our Vision, Mission & Values</h2>
							<h4>Vision and Mission</h4>
							<p> Our team strongly believes that application can provide friendly user experience when booking for clinic appointment. Our mission aim to provide one-stop of booking appointment which can help all range of patient and assit doctor to arrange their booking appointment easily. Not only will our team provide good experience for the application, we will work with you on making the application more fit to your environment and more user friendly.
							</br><br/>
							<h4>Values</h4>
							<b>Value</b> - We are the STAR that shine at the top of the industry<br/>
							<br/>
							<b><u>S</u>-trive</b> - We strive to be the best among the rest<br/>
							<b><u>T</u>-alent</b> - We aim to use our talent to benefit the world<br/>
							<b><u>A</u>-ccurate</b> - We ensure that information provided by our system is timely and accurate<br/>
							<b><u>R</u>-eady</b> - We are ready to dominate the medical world with our revolutionary design<br/>
							</p>
						</div>

						<div id="patientExp" class="tabcontent">
							<h2 style="font-family:sans-serif; color:#FF8C00;">Patient Satisfaction & Experience</h2>
							<p>text here</p>
						</div>
						
						<div id="news" class="tabcontent">
							<h2 style="font-family:sans-serif; color:#FF8C00;">News</h2>
							<p>text here</p>
						</div>
						
						<div id="covid" class="tabcontent">
							<h2 style="font-family:sans-serif; color:#FF8C00;">COVID-19</h2>
							<p>text here</p>
						</div>
						<br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script>
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
	
	function openABTUS(evt, title) {
	  // Declare all variables
	  var i, tabcontent, tablinks;

	// Get all elements with class="tabcontent" and hide them
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}

	  // Get all elements with class="tablinks" and remove the class "active"
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }

	  // Show the current tab, and add an "active" class to the link that opened the tab
	  document.getElementById(title).style.display = "block";
	  evt.currentTarget.className += " active";
	}
	
	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
	</script>
@endsection
