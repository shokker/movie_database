@if (Auth::check())
    <div class="col-md-12">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <span class="navbar-brand">{{ Auth::user()->name }}</span>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('movies/create') }}">Add movie</a></li>
                    <li><a href="{{ url('movies/category/create') }}">Add Category</a></li> 
                    <li><a href="{{ url('auth/logout') }}">logout</a></li> 
                </ul>
            </div>
        </nav>
    </div>
@else
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class='panel-body'>
                <a href="{{ url('auth/login') }}" >Login</a>
                |   
                <a href="{{ url('auth/register') }}" >Register</a>
            </div>
        </div>
    </div>            
@endif