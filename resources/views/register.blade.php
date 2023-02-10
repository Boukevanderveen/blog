<!doctype html>
<html lang="en">
    @include('navbar')
  <head>
    Register

    @if($errors->any())
   <ul class="alert alert-danger">
      @foreach($errors as $error)
         <li> {{$error}} </li>
      @endforeach
   </ul>
   @endif

  </head>
  <body>
    <form method="post" name="registerform" action="/register">
        <div class="form-group">
          <label for="inputUsername">Username</label>
          <input type="username" name="username" class="form-control" id="inputUsername" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="username" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="inputPassword">Password</label>
          <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
      </form>
  </body>
</html>