@extends('layouts.app')
@section('content')


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<div class="inner-banner">
			<img src="{{asset('front/images/banner-2.jpg')}}" alt="Booking">
			<div class="banner-text">
				<h1>Book Table</h1>
			</div>
		</div>

		<div class="cms-pages">
			<div class="book-table-page">
				<div class="send-money-tabs">
					<div class="container">
	                    <ul>
	                        <li class="active">
	                            <span class="tab-1"></span>
	                            <p>About</p>
	                        </li>
	                        <li>
	                            <span class="tab-2"></span>
	                            <p>Booking</p>
	                        </li>
	                        <li>
	                            <span class="tab-3"></span>
	                            <p>Payment</p>
	                        </li>
	                    </ul>
	                </div>
                </div>
                <div class="book-box">
					<div class="container">
						<div class="book-in-box">
							<h4>About</h4>
							<form action="{{ route('booking.store')}}" class="needs-validation" novalidate method="POST">
								@csrf
	                		<div class="single-field">
	                			<label for="first-name">First Name <span>*</span></label>
	                			<input type="text" id="first-name" name="name" placeholder="Enter your first name" required value="{{ old('name')}}">
								@error('name')
									<span class="text-danger text-sm">{{$message}}</span>   
								@enderror
	                		</div>
	                		<div class="single-field">
	                			<label for="phone-number">Phone number <span>*</span></label>
	                			<input type="text" id="phone-number" name="phone_number" value="{{ old('phone_number') }}" placeholder="Enter your phone number" required>
								@error('phone_number')
									<span class="text-danger text-sm">{{$message}}</span>   
								@enderror
	                		</div>
	                		<div class="single-field">
	                			<label for="email">Email <span>*</span></label>
	                			<input type="text" id="email" name="email" value="{{ old('email')}}" placeholder="Enter your email" required>
								@error('email')
									<span class="text-danger text-sm">{{$message}}</span>   
								@enderror
	                		</div>
	                		<div class="single-field submit-button">
	                			<input type="submit" value="Next">
	                		</div>
	                	</div>
	                </div>
                </div>
			</form>
			</div>
		</div>
@endsection


<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            }, false)
          })
      })();


</script>