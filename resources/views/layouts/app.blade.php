@php
	$setting = DB::table('sitesetting')->first();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kaebor Shopping</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Kaebor Shopping e-commerce website">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('public/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/plugins/slick-1.8.0/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_responsive.css') }}">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

<link rel="stylesheet" href="sweetalert2.min.css">

<script src="https://js.stripe.com/v3/"></script>

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('public/frontend/images/phone.png') }}" alt=""></div>{{ $setting->phone_one }}</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('public/frontend/images/mail.png') }}" alt=""></div><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></div>
						<div class="top_bar_content ml-auto">

							@guest
							@else
							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									<li>
										<a href="" data-toggle="modal" data-target="#exampleModal">My Order Tracking</a>
									</li>
								</ul>
							</div>
							@endguest

							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									@php
										$language = Session()->get('lang');
									@endphp
									<li>
										@if (Session()->get('lang') == 'english')
										<a href="{{ route('language.french') }}">Français<i class="fas fa-chevron-down"></i></a>
										@else
										<a href="{{ route('language.english') }}">English<i class="fas fa-chevron-down"></i></a>
										@endif
										
									</li>
								</ul>
							</div>
							<div class="top_bar_user">
								@guest
								<div class="user_icon"><img src="{{ asset('public/frontend/images/user.svg') }}" alt=""></div>
                                <div><a href="{{ route('register') }}">S'inscrire</a></div>
								<div><a href="{{ route('login') }}">Se connecter</a></div>
								@else
								<ul class="standard_dropdown top_bar_dropdown">
									<li>
										<a href="{{ route('home') }}"><div class="user_icon"><img src="{{ asset('public/frontend/images/user.svg') }}" alt=""></div>Profil<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="{{ route('user.wishlist') }}">Wishlist</a></li>
											<li><a href="{{ route('user.checkout') }}">CheckOut</a></li>
											<li><a href="#">Autres</a></li>
										</ul>
									</li>
								</ul>

								@endguest
								
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="{{url('/')}}"><img src="{{ asset('public/frontend/images/kaebor.png') }}" alt=""></a></div>
						</div>
					</div>

					@php
						$category = DB::table('categories')->get();
					@endphp

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="{{ route('product.search') }}" class="header_search_form clearfix" method="POST">
										@csrf
										<input type="search" required="required" class="header_search_input" placeholder="Search for products..." name="search">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													@foreach ($category as $row)
													
													<li><a class="clc" href="#">{{ $row->category_name }}</a></li>

													@endforeach

												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ asset('public/frontend/images/search.png') }}" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">

								@guest
									
										
									@else

									@php
										$wishlist = DB::table('wishlists')->where('user_id',Auth::id())->get();
									@endphp
								
								<div class="wishlist_icon"><img src="{{ asset('public/frontend/images/heart.png') }}" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="{{ route('user.wishlist') }}">Wishlist</a></div>
									<div class="wishlist_count">{{ count($wishlist) }}</div>
								</div>
							</div>

							@endguest

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="{{ asset('public/frontend/images/cart.png') }}" alt="">
										<div class="cart_count"><span>{{ Cart::count() }}</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="{{ route('show.cart') }}">Cart</a></div>
										<div class="cart_price">FCFA {{Cart::subtotal()}}</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->


	<!-- Characteristics -->

@yield('content')

	<!-- Footer -->

	@php
	$setting = DB::table('sitesetting')->first();
@endphp

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#">{{ $setting->company_name }}</a></div>
						</div>
						<div class="footer_title"> <i class="fa fa-phone fa-flip-horizontal"></i> Contactez-nous 24/7</div>
						<div class="footer_phone">{{ $setting->phone_two }}</div>
						<div class="footer_contact_text">
							<p>{{ $setting->company_address }}</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f fa-lg"></i></a></li>
								<li><a href="{{ $setting->instagram }}"><i class="fab fa-instagram fa-lg"></i></a></li>
								<li><a href="{{ $setting->linkedin }}"><i class="fab fa-linkedin fa-lg"></i></a></li>
								<li><a href="#" title="coming soon"><i class="fab fa-youtube fa-lg"></i></a></li>
								<li><a href="#" title="coming soon"><i class="fab fa-twitter fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it Fast</div>
						<ul class="footer_list">
							<li><a href="#">Computers & Laptops</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Smartphones & Tablets</a></li>
							<li><a href="#">TV & Audio</a></li>
						</ul>
						<div class="footer_subtitle">Gadgets</div>
						<ul class="footer_list">
							<li><a href="#">Car Electronics</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="#">Video Games & Consoles</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Computers & Laptops</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Customer Care</div>
						<ul class="footer_list">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order Tracking</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Customer Services</a></li>
							<li><a href="#">Returns / Exchange</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Product Support</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.linkedin.com/in/regis-junior-agbe-7339a7190/" target="_blank">Agbe Regis</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div> 
<div class="col-lg-4  align-items-center float-right">
	<iframe class="float-right" src="https://free.timeanddate.com/clock/i7xt0g41/n1/tlci2/tt0/tw1/tm1/tb4" frameborder="0" width="111" height="36"></iframe>
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="{{ asset('public/frontend/images/logos_1.png') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('public/frontend/images/logos_2.png') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('public/frontend/images/logos_3.png') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('public/frontend/images/logos_4.png') }}" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Order Tracking Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Your Status Code</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<form method="POST" action="{{ route('order.tracking') }}">
				@csrf
				<div class="modal-body">
					<label for="">Status Code</label>
					<input type="text" name="code" class="form-control" placeholder="Enter Your Tracking Number">
				</div>
				<button class="btn btn-outline-danger" type="submit">Track Now</button>
			</form>
		</div>
		
		</div>
	</div>
	</div>


<script src="{{ asset('public/frontend/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('public/frontend/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('public/frontend/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/frontend/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('public/frontend/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('public/frontend/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('public/frontend/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('public/frontend/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('public/frontend/plugins/slick-1.8.0/slick.js') }}"></script>
<script src="{{ asset('public/frontend/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('public/frontend/js/custom.js') }}"></script>
<script src="{{ asset('public/frontend/js/contact_custom.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<script src="{{ asset('public/frontend/js/product_custom.js') }}"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
<script>
@if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
@endif
</script>  


<script>  
    $(document).on("click", "#return", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Etes-vous sûr ?",
            text: "Une fois retourné, vous ne pourrez pas récupérer les données",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = link;
            } else {
            swal("Donnée sécurisée!");
            }
        });
    });
</script>

</body>

</html>