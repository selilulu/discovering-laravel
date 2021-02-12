@include('layout')
  <form action="form/{{request('name')}}" method="POST">
  @csrf
  <div class="form-group row">
    <label for="input" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="staticEmail" placeholder="Enter your username">
    </div>
  </div>

  <div class="form-group row">
    <label for="input" class="col-sm-2 col-form-label">E-mail</label>
    <div class="col-sm-10">
      <input type="text" name="email" class="form-control" id="staticEmail" placeholder="Enter your e-mail">
    </div>
  </div>  

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
  @foreach($errors->all() as $error)
  <div>{{$error}}</div>
  @endforeach
  <button type="submit" name="button" class="btn btn-primary">Submit</button>

</form>
<!-- <h1>Hi {{ request('name') }}</h1> -->

