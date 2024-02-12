@extends('frontend.master')

@section('content')
<section class="site-section" id="section-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<div class="section-heading text-center">
						<h2>Get <strong>In Touch</strong></h2>
					</div>
				</div>

				<div class="col-md-7 mb-5 mb-md-0">
					@isset($data)
						<p><strong>Name:</strong> {{ $data?->name }}</p>
						<p><strong>Email:</strong> {{ $data?->email }}</p>
						<p><strong>Phone:</strong> {{ $data?->phone }}</p>
						<p><strong>Message:</strong> {{ $data?->message }}</p>
					@else
						<form action="" class="site-form" method="post">
							@csrf
							<h3 class="mb-5">Get In Touch</h3>
							<div class="form-group">
								<input type="text" name="name" id="name" class="form-control px-3 py-4" placeholder="Your Name" data-sb-validations="required">
							</div>
							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control px-3 py-4" placeholder="Your Email" data-sb-validations="required">
							</div>
							<div class="form-group">
								<input type="tel" name="phone" id="phone" class="form-control px-3 py-4" placeholder="Your Phone" data-sb-validations="required">
							</div>
							<div class="form-group mb-5">
								<textarea name="message" id="message" class="form-control px-3 py-4" cols="30" rows="10"
									placeholder="Write a Message"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary  px-4 py-3" value="Send Message">
							</div>
						</form>
					@endisset 

				</div>
				<div class="col-md-5 pl-md-5">
					<h3 class="mb-5">My Contact Details</h3>
					<ul class="site-contact-details">
						<li>
							<span class="text-uppercase">Email</span>
							lilkaibra@gmail.com
						</li>
						<li>
							<span class="text-uppercase">Phone</span>
							438-229-1157
						</li>
						<li>
							<span class="text-uppercase">Address</span>
							Montreal, Qc <br>
							4th Floor8 Lower <br>
							Ontario street
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	@endsection