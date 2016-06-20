<nav class="navbar navbar-default" style=" color:#fff;background:url('/images/subheader.jpg')">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Movie's title">
        </div>
        <button type="submit" class="btn btn-danger">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        
        @if(!Auth::check())
        <li><a href="#">Welcome, <i>Guest</i></a></li>
        @endif

        @if (Auth::check())
        <li><a href="#">Welcome, <i>{{Auth::user()->username}}</i></a></li>
        @else            
        <li>

          <div class="form-group navbar-form">
            <a href="sign-in"class="btn btn-danger">Sign in</a>
            <a href="sign-up"class="btn btn-danger">Sign up</a>
          </div>
        </li>
        @endif
         @if (Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Профил <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>