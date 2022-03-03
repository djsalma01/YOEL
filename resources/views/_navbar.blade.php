<nav class="header-container" style="display:flex; justify-content:space-between;">
 
    <div class="navbar-header">
                <a href="{{route('home')}}" style="display: flex;">
                        <img src="/assets/img/logo/logo capture.png" style="width:20%" alt="">
                </a>
        
    </div>
<div class="header-menu-wrap" style="    display: flex;
    width: 80%;
    justify-content: space-between;
    align-items: center;">

        <li><a href="{{url('/')}}">HOME </a>

        </li>
        <li><a href="{{url('/products/search')}}">SHOP </a>

        <li><a href="{{url('/events')}}">EVENTS </a>

        <li><a href="{{url('/blog')}}">BLOG </a>

        </li>
        <li><a href="{{url('/contact')}}">CONTACT</a></li>
        <li class="same-style-text">
                            <a href="{{ route('cart.index') }}">My Cart 

                                @auth
                                {{Cart::session(auth()->id())->getContent()->count()}}
                                @else
                                0
                                @endauth

                                Item</a>
         </li>

        @auth
                        <li>
                                <form action=" {{ url('/logout') }} " method="POST">
                                    @csrf
                                    <input type="submit" value="Logout" />
                                </form>
                        </li>
                            @else

                            <li>
                                <a href="{{url('/login')}}">Login</a>
                            </li>
                            <li>
                                <a href="{{url('/register')}}">Sign Up</a>
                            </li>
                        @endauth
</div>


    
</nav>
