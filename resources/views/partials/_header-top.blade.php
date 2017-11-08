<div class="header-top">
	<div class="wrap">
		<div class="top-menu" style="margin-top: 10px;">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="privacy-policy.html">Privacy Policy</a></li>
				<li><a href="contact.html">Contact Us</a></li>
			</ul>
		</div>
		<div class="num">
			


			@if (Auth::guest())
				<a href="{{ route('login') }}" class="btn btn-default">Login / Sign Up</a>
                <!--<li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>-->
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif


		</div>
		<!--<div class="num">
			<p> Call us : 032 2352 782</p>
		</div>-->
		<div class="clearfix"></div>
	</div>
</div>