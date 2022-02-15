<header>
    <h1>
        POSTCARDS
    </h1>
    
    @auth
    
        <h2>WELCOME {{ Auth::user() -> name }}</h2>
        <a href="{{ route('logout')}}" class="btn btn-danger">LOGOUT</a> <br>

        <a href="{{ route('postcard.create') }}" class="btn btn-success my-3" >CREATE</a>
    
    @else
    
    <h2>Login</h2>
    <form action="{{ route('login') }}" method="POST">
    
        @method('POST')
        @csrf
    
        <label for="email">E-mail</label>
        <input type="text" name="email"> <br>
        <label for="password">Password</label>
        <input type="password" name="password"> <br>
        <br>
        <input type="submit" value="LOGIN">
    
    </form>
    
    <h1>POSTCARDS</h1>
    
    <form action="{{ route('register') }}" method="POST">
    
        @method('POST')
        @csrf
    
        <label for="name">Name</label> <br>
        <input type="text" name="name"> <br>
        <label for="email">E-mail</label> <br>
        <input type="text" name="email"> <br>
        <label for="password">Password</label> <br>
        <input type="password" name="password"> <br>
        <label for="password_confirmation">Password confirm</label> <br>
        <input type="password" name="password_confirmation"> <br>
        <br>
        <input type="submit" value="REGISTER">
    
    </form>
    
    @endauth
    
    </header>