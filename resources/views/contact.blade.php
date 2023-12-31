@extends('layouts.layout')

@section('content')


	<div class="about-heading">	
		<div class="container">
			<h2>Contact</h2>
		</div>
	</div>
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="agile-contact-form">
				<div class="col-md-6 contact-form-left">
					<div class="w3layouts-contact-form-top">
						<h3>Get in touch</h3>
						<p>We value your feedback, inquiries, and suggestions. If you have any questions or need assistance, please don't hesitate to get in touch with us. Our dedicated support team is here to help you.</p>
					</div>
					<div class="agileits-contact-address">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <span>+255657373690</span></li>
							<li><i class="fa fa-phone fa-envelope" aria-hidden="true"></i> <span><a href="Mamyguide@email.com">MamyGuide@gmail.com</a></span></li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> <span>5 shaaban Robert Street, 11101.</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3>Send us a message</h3>
					</div>
					<div class="agileinfo-contact-form-grid">
						<form action="#" method="post">
							<input type="text" name="Name" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required="">
							<input type="text" name="Telephone" placeholder="Telephone" required="">
							<textarea name="Message" placeholder="Message" required=""></textarea>
							<button class="btn1">Submit</button>
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!---728x90--->

			<div class="w3agile-map">
				<h3>Find us here</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102623.04862310845!2d-82.59779327009554!3d36.506579763153326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885a856b70074b97%3A0x6f9cc0d30bcc841f!2sKingsport%2C+TN%2C+USA!5e0!3m2!1sen!2sin!4v1471495038514"  allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!---728x90--->


    @endsection
