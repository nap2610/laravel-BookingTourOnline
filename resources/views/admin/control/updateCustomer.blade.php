<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour Control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container mt-5 mb-5">

        <div>
            <h4 class="text-primary">
                Update Customer
            </h4>
        </div>

        @foreach ($user as $u)
        <form action="../updateCustomerPost">
            <div class="mb-3 mt-3">
                <label>Customer id</label>
                <input type="text" class="form-control" name="id" value="{{$u->user_id}}" readonly>
              </div>
            <div class="mb-3">
                <label>User name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$u->user_name}}">
                @error('name')
                    <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="mb-3">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Enter email" name="email" value="{{$u->email}}">
              @error('email')
                  <span style="color: red">{{$message}}</span>
              @enderror
            </div>
            <div class="mb-3">
            <label>Password</label>
            <input type="text" class="form-control" placeholder="Enter pass" name="pass" value="{{$u->password}}">
            @error('pass')
                <span style="color: red">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
          <label>Address</label>
          <input type="text" class="form-control" placeholder="Enter address" name="address" value="{{$u->address}}">
          @error('address')
              <span style="color: red">{{$message}}</span>
          @enderror
        </div>
        <div class="mb-3">
        <label>Phone</label>
        <input type="text" class="form-control" placeholder="Enter phone" name="phone" value="{{$u->phone}}">
        @error('phone')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Active</label>
        <input type="text" class="form-control" placeholder="Enter active" name="active" value="{{$u->active}}">
        @error('active')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
              <br>
              <button class="btn btn-success"> UPDATE </button>
              <br>
              <br>
        </form>
        @endforeach
    </div>
    
</body>
</html>