<nav class="navbar navbar-inverse">
    <!--    <div class="container">-->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        @if(session()->has('user')){
        <a class="navbar-brand" href="/home">Online Shop Management</a>
        }@endif
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">

            <li id="about"><a href="about">ABOUT US</a></li>
            <li id="contact"><a href="contact">CONTACT US</a></li>

            @if(session()->has('user')){
            <li id="home"><a href="/home">HOME</a></li>
                <li id=""><a href="/logout">LOGOUT</a></li>
            }
            @else{
                <li id=""><a href="/register">SIGN UP</a></li>
                <li id=""><a href="/login">LOGIN</a></li>
            }
            @endif

        </ul>
    </div>
    <!--    </div>-->
</nav>
