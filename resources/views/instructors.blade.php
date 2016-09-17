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
	#image1, #image2, #image3, #image4 {
		width:200px;
		height:270px;
	}
	#two, #four{
		margin-right:4%;
	}
	#text-two, #text-four {
		margin-left:7%;
		text-align:right;
	}
	#image4 {
		margin-bottom: 15%;
	}
	#three, #text-three {
		margin-bottom:3%;
	}
	#one, #two, #three, #four, #text-one, #text-two, #text-three, #text-four {
		margin-top: 3%;
		color:#000059;
	}
	hr {
		color:#d3d3d3;
	}
</style>

<div class="container" id="instructor-container">
	<div class="row">
		<div class="col-md-3" id="one">
			<img src= {{ asset ("/images/instructor4.jpeg") }} id="image1">
		</div>
		<div class="col-md-7" id="text-one">
			<h2>Mary Ann</h2>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in purus risus. Integer varius pharetra mollis. Fusce quis metus quam. Quisque id iaculis felis. Proin vulputate eget orci in tempus. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus a dapibus elit.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7" id="text-two">
			<h2>Meredith Grey</h2>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in purus risus. Integer varius pharetra mollis. Fusce quis metus quam. Quisque id iaculis felis. Proin vulputate eget orci in tempus. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus a dapibus elit.</p>
		</div>
		<div class="col-md-3" id="two">
			<img src= {{ asset ("/images/instructor2.jpg") }} id="image2" style="margin-left: 20px">
		</div>
	</div>
	<div class="row">
		<div class="col-md-3" id="three">
			<img src= {{ asset ("/images/instructor3.jpg") }} id="image3">
		</div>
		<div class="col-md-7" id="text-three">
			<h2>Ryan Kane</h2>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in purus risus. Integer varius pharetra mollis. Fusce quis metus quam. Quisque id iaculis felis. Proin vulputate eget orci in tempus. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus a dapibus elit.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7" id="text-four">
			<h2>Sarah Johnson</h2>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in purus risus. Integer varius pharetra mollis. Fusce quis metus quam. Quisque id iaculis felis. Proin vulputate eget orci in tempus. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus a dapibus elit.</p>
		</div>
		<div class="col-md-3" id="four">
			<img src= {{ asset ("/images/instructor1.jpeg") }} id="image4" style="margin-left: 20px">
		</div>
	</div>

</div>

@include ('footer')