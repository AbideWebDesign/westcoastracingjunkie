<div class="row justify-content-center">

		
	<div class="col-lg-4 align-self-stretch mb-2 mb-lg-0">
		<div class="card card-shadow h-100">
			<div class="bg-dark text-white py-2 text-center text-upper text-sm">MONTHLY PACKAGE</div>
			<div class="d-flex flex-column h-100 p-3">
				<div class="mb-2 text-upper text-center "><strong>Monthly Subscription</strong></div>
				<div><h2 class="text-secondary text-center mb-0">$9.99</h2></div>
				<div><hr></div>
				<ul class="fa-ul">
					<li><span class="fa-li" ><i class="fas fa-check-circle"></i></span> Allows PPV Purchase</li>
					<li><span class="fa-li" ><i class="fas fa-check-circle"></i></span> Access to On-Demand Video</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-lg-4 align-self-stretch mb-2 mb-lg-0">
		<div class="card card-shadow h-100">
			<div class="bg-dark text-white py-2 text-center text-upper text-sm">YEARLY PACKAGE</div>
			<div class="d-flex flex-column h-100 p-3">
				<div class="mb-2 text-upper text-center "><strong>Yearly Subscription</strong></div>
				<div><h2 class="text-secondary text-center mb-0">$79.99</h2></div>
				<div><hr></div>
				<ul class="fa-ul">
					<li><span class="fa-li" ><i class="fas fa-check-circle"></i></span> Allows PPV Purchase</li>
					<li><span class="fa-li" ><i class="fas fa-check-circle"></i></span> Access to On-Demand Video</li>
				</ul>

			</div>
		</div>
	</div>
	<div class="col-12 mt-4 text-center">	
		<div id="inplayer-65865"></div>		
		<a id="btn-join" href="#" class="btn btn-primary btn-secondary btn-lg btn-join"><span>Join Now</span></a>
		<a href="/plans" class="btn btn-primary btn-lg"><span>Learn More</span></a>
		
	</div>

</div>
<script>
	
    var paywall = new InplayerPaywall('3dae9162-15bd-4ec3-aa54-5c35ae8eb4f7', [{
        id: 65865,
         options: {
            noPreview: true,
          }
    }], {
	    brandingId: 456
    });

	document.getElementById('btn-join').addEventListener("click", () => { 
	   paywall.showPaywall(
	    {asset: { assetId: 65865 }}
	   )
	});
	document.getElementById('btn-join-top').addEventListener("click", () => { 
	   paywall.showPaywall(
	    {asset: { assetId: 65865 }}
	   )
	});
</script>