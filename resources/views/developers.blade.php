@extends('layouts.app')

@section('head')

<style type="text/css">
	*
	{
		margin:0;
		padding: 0;
	}
	.testimonial
	{
		margin:3.0rem auto;
	}
	.testimonial h1
	{
		text-align: center;
		font-weight: bold;
		color: #ff9800;
		padding-bottom: 0.625rem;
		text-transform: uppercase;
	}
	.testimonial h1::after
	{
		content: '';
		background: #ff9800;
		display: block;
		height: 3px;
		width: 170px;
		margin: 20px auto 5px;
	}
	.testimonial .row
	{
		margin-top: 30px;
	}
	.col-md-4
	{
		margin:40px auto;
	}
	.profile
	{
		padding: 70px 10px 10px;
		background-color: #efefef;
	}
	.profile img
	{
		top :-60px; 
		position: absolute;
		left:calc(50% - 60px);
		border :10px solid white;
	}
	.user
	{
		width:120px;
		height: 120px;
		border-radius: 50%;
	}
	.profile h3
	{
		font-size: 20px;
		margin-top: 15px;
		color:#ff9800;
	}
	span
	{
		font-size:12px;
		color:#333;
	}
	blockquote
	{
		font-size:16px;
		line-height: 30px;
	}
	blockquote::before
	{
		content: '\201C';
		font-size:50px;
		position: relative;
		color:#ff9800;
		line-height: 20px;
		bottom: -15px;
		right:5px;

	}
	blockquote::after
	{
		content: '\201C';
		font-size:50px;
		position: relative;
		color:#ff9800;
		line-height: 20px;
		bottom: -15px;
		left:5px;
		
	}
	.profile:hover
	{
		box-shadow: 0 0 15px 5px rgba(0,0,0,0.2);
	}

</style>

@endsection

@section('content')
	<section class="testimonial">
			<div class="container">
				<h1>Our Developers</h1>
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="profile">
						<img src="img/kishan.jpg" class="user">
						<blockquote>this is the founder and cheif executive of Lethhub of industries</blockquote>
						<h3>Kishan <span>Founder & CEO of Lethhub</span></h3>
						</div>
					</div>
					<div class="col-md-4 text-center">
						<div class="profile">
						<img src="img/kirtan.jpg" class="user">
						<blockquote>this is the founder and cheif executive of Lethhub of industries</blockquote>
						<h3>Yash D Desai <span>Founder & CEO of Lethhub</span></h3>
						</div>
					</div>
					<div class="col-md-4 text-center">
						<div class="profile">
						<img src="img/kirtan.jpg" class="user">
						<blockquote>this is the founder and cheif executive of Lethhub of industries</blockquote>
						<h3>Nikunj <span>Founder & CEO of Lethhub</span></h3>
						</div>
					</div>
				</div>
			</div>
	</section>
@endsection