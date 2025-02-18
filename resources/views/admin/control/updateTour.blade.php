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

    <div class="container mt-3 mb-5">

        <a class="" href="{{ url('admin/tour') }}"> <button class="btn btn-lg btn-info">
                << Return </button> </a>

        <div class="col-sm-2 mt-4"></div>
        <div class="col-sm-7 p-5"
            style="background-color: rgb(198, 219, 217);border:1px solid rgba(0, 0, 0, 0);border-radius:10px">

            <div>
                <h4 class="text-primary">
                    Update New Tour
                </h4>
            </div>
            @foreach ($tour as $t)
                <form action="{{ url('admin/control/updateTourPost') }}" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{$t->tour_id}}">
                    <div class="mb-3 mt-3">
                        <label for="name">Tour name</label>
                        <input type="text" class="form-control" name="name" value="{{ $t->tour_name }}">
                        @error('name')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="location_start">Location Start:</label>
                        <input type="text" class="form-control" id="location_start"
                            placeholder="Enter Location Start" name="location" value="{{ $t->location_start }}">
                        @error('location')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="transport">Transport:</label>
                        <select class="form-control" class="form-select" name="transport">
                            <option hidden value="{{ $t->transport }}">{{ $t->transport }}</option>
                            <option value="Car">Car</option>
                            <option value="Flight">Flight</option>
                            <option value="Boat">Boat</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="duration">Duration:</label>
                        <input type="text" class="form-control" id="duration" placeholder="Enter Duration"
                            name="duration" value="{{ $t->duration }}">
                        @error('duration')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price1">Price1:</label>
                        <input type="text" class="form-control" id="price1" placeholder="Enter Price1"
                            name="price1" value="{{ $t->price1 }}" onchange="changePrice()">
                        @error('price1')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price2">Price2:</label>
                        <input type="text" class="form-control" id="price2" placeholder="Enter Price2"
                            name="price2" value="{{ $t->price2 }}">
                        @error('price2')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price3">Price3:</label>
                        <input type="text" class="form-control" id="price3" placeholder="Enter Price3"
                            name="price3" value="{{ $t->price3 }}">
                        @error('price3')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price4">Price4:</label>
                        <input type="text" class="form-control" id="price4" placeholder="Enter Price4"
                            name="price4" value="{{ $t->price4 }}">
                        @error('price4')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img1">Image1:</label>
                        <input type="file" class="form-control" id="img1" placeholder="Enter Image1"
                            name="img1" value="{{ $t->img1 }}">
                        @error('img1')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img2">Image2:</label>
                        <input type="file" class="form-control" id="img2" placeholder="Enter Image2"
                            name="img2" value="{{ $t->img2 }}">
                        @error('img2')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img3">Image3:</label>
                        <input type="file" class="form-control" id="img3" placeholder="Enter Image3"
                            name="img3" value="{{ $t->img3 }}">
                        @error('img3')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img4">Image4:</label>
                        <input type="file" class="form-control" id="img4" placeholder="Enter Image4"
                            name="img4" value="{{ $t->img4 }}">
                        @error('img4')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img5">Image5:</label>
                        <input type="file" class="form-control" id="img5" placeholder="Enter Image5"
                            name="img5" value="{{ $t->img5 }}">
                        @error('img5')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="detail">Detail:</label>
                        <textarea class="form-control" rows="5" placeholder="Enter Detail" id="detail" name="detail"
                            value="">{{ $t->detail }}"</textarea>
                        @error('detail')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="visit">Visit:</label>
                        <textarea class="form-control" rows="8" placeholder="Enter Visit" id="visit" name="visit"
                            value="">{{ $t->visit }}"</textarea>
                        @error('visit')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="region">Region:</label>
                        <select class="form-control" class="form-select" name="region">
                            <option hidden value="{{ $t->region }}">{{ $t->region }}</option>
                            <option value="B">B (Northern)</option>
                            <option value="T">T (Central)</option>
                            <option value="N">N (South)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="place">Place:</label>
                        <input type="text" class="form-control" name="place" value="{{$t->place}}">
                        @error('place')
                        <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <button class="btn btn-success"> UPDATE </button>
                    <br>
                    <br>
                </form>
            @endforeach

        </div>
        <div class="col-sm-3"></div>
    </div>

    <script>
        function changePrice() {
            // alert();
            var price1 = document.getElementById('price1').value;
            var price2 = Math.floor(price1 / 2);
            var price3 = Math.floor(price2 / 2);
            var price4 = Math.floor(price3 / 5);

            document.getElementById('price2').value = price2;
            document.getElementById('price3').value = price3;
            document.getElementById('price4').value = price4;
        }
    </script>
</body>

</html>
