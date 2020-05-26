<div class="container">
				<div class="row">
					<div class="col">
						<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
						@guest
						<div class="top_bar_item"><a href="{{ route('register') }}">Register</a></div>
						<div class="top_bar_item"><a href="{{ route('login') }}">Login</a></div>
                        @else
						<div class="top_bar_item" style="color:white;">{{ Auth::user()->name }} &nbsp &nbsp</div>

						<h1>This is the home page</h1>
						@endguest
						</div>

					</div>
				</div>
</div>