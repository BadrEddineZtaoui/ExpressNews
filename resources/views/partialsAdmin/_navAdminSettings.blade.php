<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
    </a>

    <ul class="dropdown-menu dropdown-user">
        <li><a href="#"><i class="icon-user"></i> User Profile </a>
        </li>
        <li><a href="#"><i class="icon-gear"></i> Settings </a>
        </li>
        <li class="divider"></li>
        <li><a href="{{ route('logout') }}" 
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
            ><i class="icon-signout"></i> Logout </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</li>