<!doctype html>
<html lang="en">
    @include('navbar')
  <head>
    Login

    @if($errors->any())
   <ul class="alert alert-danger">
      @foreach($errors as $error)
         <li> {{$error}} </li>
      @endforeach
   </ul>
   @endif
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script>
  </head>
  <body>
    <form method="post" name="loginform" action="/login">
        <div class="form-group">
          <label for="inputUsername">Username</label>
          <input type="username" name="username" class="form-control" id="inputUsername" placeholder="Enter username">
        </div>
        <div class="form-group">
          <label for="inputPassword">Password</label>
          <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
      </form>
      <br>
      Nieuwe gebruiker? <a class="nav-link" href="/register">Registreren</a>
  </body>
</html>