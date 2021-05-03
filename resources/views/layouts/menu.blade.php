<div class="menu" >
    <div class="card">
    @if(Auth::check())
        <img src="{{asset('project_asset/images/avatar.jpg')}}" alt="John" style="width:100%">
        <h1>{{Auth::user()->name}}</h1>
        <p class="title">{{Auth::user()->email}}</p>
        
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <p>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </p>
    @endif    
    </div>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">

    <ul id="myMenu">
    <li><a href="#">Rolex</a></li>
    <li><a href="#">Paktek Phillip</a></li>
    <li><a href="#">Hublot</a></li>
    <li><a href="#">Casino</a></li>
    
    
    </ul>
</div>