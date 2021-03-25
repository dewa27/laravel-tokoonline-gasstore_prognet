@extends('layouts.master')
@section('head')
<style>
	p,
	h2 {
		color: #fff !important;
		margin: 0;
	}


	.owl-prev,
	.owl-next {
		width: 15px;
		height: 100px;
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		display: block !important;
		border: 0px solid black;
	}

	.owl-prev,
	.owl-next span {
		font-size: 2rem !important;
	}

	.owl-prev {
		left: -20px;
	}

	.owl-next {
		right: -20px;
	}

	.owl-prev i,
	.owl-next i {
		transform: scale(2, 5);
		color: #ccc;
	}

	.img-carousel {
		max-height: 650px;
		object-fit: cover;
	}

	.quantity-custom,
	.quantity-custom:focus {
		text-align: end;
		width: 100px;
		float: right;
		background: transparent;
		color: white;
		outline: none;
		border: 0;
		appearance: none;
		padding-bottom: 5px;
	}

	.main-img {
		width: 100%;
		max-height: 500px;
	}

	.mid-text {
		overflow: hidden;
		text-align: center;
	}

	.mid-text:before,
	.mid-text:after {
		background-color: #EA272D;
		content: "";
		display: inline-block;
		height: 2px;
		position: relative;
		vertical-align: middle;
		width: 50%;
	}

	.mid-text:before {
		right: 0.5em;
		margin-left: -50%;
	}

	.mid-text:after {
		left: 0.5em;
		margin-right: -50%;
	}

	#btm_carousel {
		height: 300px;
	}

	.card-crop {
		height: 200px !important;
		object-fit: cover !important;
	}

	.card-style {
		/* background: transparent; */
		background: rgba(56, 59, 57, 0.4) !important;
	}

	.discount-label {
		position: absolute;
		top: 0;
		right: 0;
		width: 0;
		height: 0;
		border-top: 60px solid #EA272D;
		border-left: 60px solid transparent;
		opacity: 0.7;
	}

	.discount-text {
		color: #fff !important;
		position: absolute;
		top: 0;
		right: 5px;
	}

	.review-container {
		overflow: auto;
		height: 400px;
	}

	.card-crop {
		height: 200px !important;
		object-fit: cover;
	}

	.card-style {
		/* background: transparent; */
		background: rgba(56, 59, 57, 0.4) !important;
	}

	.card-subtitle {
		color: #F3A3A3 !important;
	}

	.star-icon {
		color: rgb(234, 39, 45);
	}

	.input-number {
		font-size: 14px;
		border: none;
		outline: none;
		background: transparent !important;
		min-width: 0 !important;
		max-width: 50px !important;
	}

	.input-number::-webkit-outer-spin-button,
	.input-number::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
</style>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css"
	integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg=="
	crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
@endsection
@section('content')
<div id="fh5co-featured-menu" class="fh5co-section py-0">
	<div id="fh5co-about" class="fh5co-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-12">
					<h2 class="mid-text">Keranjang</h2>
				</div>
			</div>
			<div class="row px-3">
				<div class="col-md-8">
					<div class="card-style rounded p-3 mb-2">
						<p class="font-weight-bold">Motor tua</p>
						<p>Motor keren mantep banget nih udah di keranjang</p>
					</div>
					<div class="card-style rounded p-3 mb-2">
						<p class="font-weight-bold">Motor tua</p>
						<p>Motor keren mantep banget nih udah di keranjang</p>
					</div>
					<div class="card-style rounded p-3 mb-2">
						<p class="font-weight-bold">Motor tua</p>
						<p>Motor keren mantep banget nih udah di keranjang</p>
					</div>

				</div>
				<div class="col-md-4">
					<div class="card-style rounded p-4">
						<h4 class="text-light text-center font-weight-bold">Ringkasan Belanja</h4>
						<div class="d-flex justify-content-between">
							<p>Testo</p>
							<p>Rp.12.000</p>
						</div>
						<div class="d-flex justify-content-between">
							<p>Testo</p>
							<p>Rp.12.000</p>
						</div>
						<div class="d-flex justify-content-between">
							<p>Testo</p>
							<p>Rp.12.000</p>
						</div>
						<p style="border-bottom:1px solid #EA272D;"></p>
						<div class="d-flex justify-content-between mt-2">
							<p class="font-weight-bold">Total Harga</p>
							<p class="font-weight-bold">Rp.12.000</p>
						</div>
						<a href="#" class="d-block mt-3 mb-2 mx-auto btn btn-primary btn-hovered">Beli</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"
	integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg=="
	crossorigin="anonymous"></script>
<script>
	$(function() {
				var quantitiy=0;
		$('.quantity-right-plus').click(function(e){
				
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());
				
				// If is not undefined
					
					$('#quantity').val(quantity + 1);

				
					// Increment
				
			});

			$('.quantity-left-minus').click(function(e){
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());
				
				// If is not undefined
			
					// Increment
					if(quantity>0){
					$('#quantity').val(quantity - 1);
					}
			});
		$(".btn-hovered").hover(function() {
			$(this).removeClass("btn-primary");
		}, function() {
			$(this).addClass("btn-primary");
		});
		let carousel=$('#main_carousel');
        carousel.owlCarousel({
			nav:true,
            items:2,
			loop:true,
			center:true,
            // autoHeight:true,
        });
		carousel.on('change.owl.carousel', function(event) {
			setTimeout(function() {
				let img=$('.main-img');
				let centerImage=$('.center img').attr("src");
				console.log(centerImage);
				img.fadeOut('fast', function () {
					img.attr('src', centerImage);
					img.fadeIn('fast');
				});
			},20);
		});
		let btm_carousel=$('#btm_carousel');
		btm_carousel.owlCarousel({
			nav:true,
			center:true,
			items:1,
            // autoHeight:true,
        });
		var ctx = document.getElementById('myChart').getContext('2d');
		var myBarChart = new Chart(ctx, {
			type: 'horizontalBar',
			data: {
				labels: ["5","4", "3", "2", "1"],
				datasets: [
					{
					backgroundColor: ["#EA272D","#EA272D","#EA272D","#EA272D","#EA272D"],
					data: [1,1,3,2,1]
					}
				]
			},
			options: {
				legend: {
					display: false,
				},
		        scales: {
					xAxes: [{
						ticks: {
							suggestedMin: 0,
                    		suggestedMax: 25,
							stepSize:5
						}
					}]
				}
			}
		});
        // $('#carouselExampleIndicators').carousel();
		// $('.selectpicker').selectpicker({
		// 	noneSelectedText: 'Pilih Kategori',
		// 	size: '4',
		// 	// virtualScroll: '2',
		// });
		// $(".btn-hovered").hover(function() {
		// 	$(this).addClass("btn-primary");
		// }, function() {
		// 	$(this).removeClass("btn-primary");
		// });
		// $(".fa-stack-1x").hover(function() {
		// 	$('.fa-stack-2x').removeClass("icon-background");
		// }, function() {
		// 	$('.fa-stack-2x').addClass("icon-background");
		// });
	});
</script>
@endsection