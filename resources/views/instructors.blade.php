@include ('header')
@include ('nav')

<style>
	#instructor-container{
		margin-left:5%;
		width:90%;
		margin-top:3%;
		margin-bottom: 7%;
		border:2px solid #000059;
		border-radius: 3px;
		background-color: #fff;
	}
	.col-md-3 {
		margin-left:5%;
	}
	#two {
		margin-right:4%;
	}
	#text-two {
		margin-left:7%;
		text-align:right;
	}
	#three, #text-three {
		margin-bottom:3%;
	}
	#one, #two, #three, #text-one, #text-two, #text-three {
		margin-top: 3%;
	}
</style>

<div class="container" id="instructor-container">
	<div class="row">
		<div class="col-md-3" id="one">
			<img src="http://placehold.it/200x200">
		</div>
		<div class="col-md-7" id="text-one">
			<h2>Jane Doe</h2>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in purus risus. Integer varius pharetra mollis. Fusce quis metus quam. Quisque id iaculis felis. Proin vulputate eget orci in tempus. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus a dapibus elit.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7" id="text-two">
			<h2>Jane Doe</h2>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in purus risus. Integer varius pharetra mollis. Fusce quis metus quam. Quisque id iaculis felis. Proin vulputate eget orci in tempus. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus a dapibus elit.</p>
		</div>
		<div class="col-md-3" id="two">
			<img src="http://placehold.it/200x200">
		</div>
	</div>
	<div class="row">
		<div class="col-md-3" id="three">
			<img src="http://placehold.it/200x200">
		</div>
		<div class="col-md-7" id="text-three">
			<h2>Jane Doe</h2>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in purus risus. Integer varius pharetra mollis. Fusce quis metus quam. Quisque id iaculis felis. Proin vulputate eget orci in tempus. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus a dapibus elit.</p>
		</div>
	</div>

</div>

@include ('footer')