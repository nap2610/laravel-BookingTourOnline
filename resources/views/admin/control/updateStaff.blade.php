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
                Update Staff
            </h4>
        </div>

        @foreach ($staff as $st)
        <form action="../updateStaffPost">
            <div class="mb-3 mt-3">
                <label>Staff id</label>
                <input type="text" class="form-control" name="id" value="{{$st->id}}" readonly>
              </div>
            <div class="mb-3">
                <label>Staff name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$st->name}}">
                @error('name')
                    <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="mb-3">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Enter email" name="email" value="{{$st->email}}">
              @error('email')
                  <span style="color: red">{{$message}}</span>
              @enderror
            </div>
            <div class="mb-3">
            <label>Password</label>
            <input type="text" class="form-control" placeholder="Enter pass" name="pass" value="{{$st->password}}">
            @error('pass')
                <span style="color: red">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label>Role</label>
            <input type="text" class="form-control" placeholder="Enter role" name="role" value="{{$st->role}}">
            @error('role')
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