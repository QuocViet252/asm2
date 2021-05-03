<div class="topnav">
    <a class="active" href="{{url('home')}}">Home</a>
    <a href="#news">Mens</a>
    <a href="#news">Girl</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
    <div class="login_register">
        @if(Auth::check())
        <a href="profile.html">Create Product</a>
        <a href="list-product.html">Cart</a>
        <a href="profile.html">Profile</a>
        @else
        <a href="{{url('login')}}">Sign In</a>
        <a href="{{url('register')}}">Sign Up</a>
        @endif
    </div>
</div>