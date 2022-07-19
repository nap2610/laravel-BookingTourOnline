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
                Update Order
            </h4>
        </div>

        @foreach ($order as $or)
        <form action="../updateOrderPost">
            <div class="mb-3 mt-3">
                <label>Book id</label>
                <input type="text" class="form-control" name="id" value="{{$or->book_id}}" readonly>
              </div>
            <div class="mb-3">
                <label>User name</label>
                <input type="text" class="form-control" placeholder="Enter user name" name="user_name" value="{{$or->user_name}}">
                @error('user_name')
                    <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="mb-3">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="EnterEmail" name="email" value="{{$or->email}}">
              @error('email')
                  <span style="color: red">{{$message}}</span>
              @enderror
            </div>
            <div class="mb-3">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="Enter Address" name="address" value="{{$or->address}}">
            @error('address')
                <span style="color: red">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
          <label>Phone</label>
          <input type="text" class="form-control" placeholder="Enter Phone" name="phone" value="{{$or->phone}}">
          @error('phone')
              <span style="color: red">{{$message}}</span>
          @enderror
        </div>
        <div class="mb-3">
        <label>Payment</label>
        <input type="text" class="form-control" placeholder="Enter Payment" name="payment" value="{{$or->payment}}">
        @error('payment')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Person 1</label>
        <input type="text" class="form-control" placeholder="Enter Person 1" name="person1" value="{{$or->person1}}">
        @error('person1')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Person 2</label>
        <input type="text" class="form-control" placeholder="Enter Person 2" name="person2" value="{{$or->person2}}">
        @error('person2')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Person 3</label>
        <input type="text" class="form-control" placeholder="Enter Person 3" name="person3" value="{{$or->person3}}">
        @error('person3')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Person 4</label>
        <input type="text" class="form-control" placeholder="Enter Person 4" name="person4" value="{{$or->person4}}">
        @error('person4')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Amount</label>
        <input type="text" class="form-control" placeholder="Enter Amount" name="amount" value="{{$or->amount}}">
        @error('amount')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Schedule id</label>
        <input type="text" class="form-control" placeholder="Enter Schedule id" name="schedule_id" value="{{$or->schedule_id}}">
        @error('schedule_id')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Date book</label>
        <input type="text" class="form-control" placeholder="Enter Date book" name="date_book" value="{{$or->date_book}}">
        @error('date_book')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Location start</label>
        <input type="text" class="form-control" placeholder="Enter Location start" name="location_start" value="{{$or->location_start}}">
        @error('location_start')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Date start</label>
        <input type="text" class="form-control" placeholder="Enter Date start" name="date_start" value="{{$or->date_start}}">
        @error('date_start')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Date end</label>
        <input type="text" class="form-control" placeholder="Enter Date end" name="date_end" value="{{$or->date_end}}">
        @error('date_end')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Transport</label>
        <input type="text" class="form-control" placeholder="Enter Transport" name="transport" value="{{$or->transport}}">
        @error('transport')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Duration</label>
        <input type="text" class="form-control" placeholder="Enter Duration" name="duration" value="{{$or->duration}}">
        @error('duration')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Status</label>
        <input type="text" class="form-control" placeholder="Enter Status" name="status" value="{{$or->status}}">
        @error('status')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Tour code</label>
        <input type="text" class="form-control" placeholder="Enter Tour code" name="tour_code" value="{{$or->tour_code}}">
        @error('tour_code')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
              <br>
              <button class="btn btn-primary"> UPDATE </button>
              <br>
              <br>
        </form>
        @endforeach
    </div>
    
</body>
</html>