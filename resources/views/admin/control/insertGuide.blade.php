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
                Insert Tour guide
            </h4>
        </div>

        
        <form action="insertGuidePost">
            <div class="mb-3 mt-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{old('name')}}">
                @error('name')
                    <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter email" name="email" value="{{old('email')}}">
                @error('email')
                    <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label>Gender</label>
                <input type="text" class="form-control" placeholder="Enter gender" name="gender" value="{{old('gender')}}">
                @error('gender')
                    <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter phone" name="phone" value="{{old('phone')}}">
                @error('phone')
                    <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <br>
              <button class="btn btn-primary"> INSERT </button>
              <br>
              <br>
        </form>
        
    </div>
    
</body>
</html>