@extends('user.layouts.main')
@section('css')
<link rel="stylesheet" href="css/style.css">
@endsection
@section('container')
<div class="containers">
	<div class="contact-boxs">
		<div class="left"></div>
		<div class="right">
			<h6 class="titles">Contact Us</h6>
			<form action="{{ route('contact.send') }}" method="POST">
				@csrf
				<input type="text" name="name" class="fields" placeholder="Your Name" value="{{ Auth::user()->name }}" disabled>
				<input type="email" name="email" class="fields" placeholder="Your Email" value="{{ Auth::user()->email }}" disabled>
				<input type="number" name="phone" class="fields" placeholder="Phone">
				<textarea placeholder="Message" class="fields" name="msg" style="resize: none"></textarea>
				<button type="submit" class="btns">Send</button>
			</form>
		</div>
	</div>
</div>
@endsection


