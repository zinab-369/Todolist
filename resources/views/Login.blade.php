<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equive="X-UA-Compatible" content="ie-edge">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-md-6 offset-md-3">
               <div class="card">
               <div class="card-header">
                   Login
               </div>
               <div class="card-body">
               <form method= POST action="{{route('login.submit')}}">
                   @csrf
  <div class="mb-3">
    <label for="Email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="email">
    @error('email')
    <span class="text-danger">{{$message}}</span>
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="password">
    @error('password')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
               </div>
               </div>
           </div>
       </div>
   </div>
</body>
</html>