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
                Update Schedule
            </h4>
        </div>

        @foreach ($schedule as $sche)
        <form action="../updateSchedulePost">
            <div class="mb-3 mt-3">
                <label>Schedule id</label>
                <input type="text" class="form-control" name="id" value="{{$sche->schedule_id}}" readonly>
              </div>
            <div class="mb-3">
                <label>Tour id</label>
                <input type="text" class="form-control" placeholder="Enter Tour id" name="tour_id" value="{{$sche->tour_id}}">
                @error('tour_id')
                    <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="mb-3">
              <label>Date start</label>
              <input type="text" class="form-control" placeholder="Enter Date start" name="date_start" value="{{$sche->date_start}}">
              @error('date_start')
                  <span style="color: red">{{$message}}</span>
              @enderror
            </div>
            <div class="mb-3">
            <label>Date end</label>
            <input type="text" class="form-control" placeholder="Enter Date end" name="date_end" value="{{$sche->date_end}}">
            @error('date_end')
                <span style="color: red">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
          <label>Status</label>
          <input type="text" class="form-control" placeholder="Enter status" name="status" value="{{$sche->status}}">
          @error('status')
              <span style="color: red">{{$message}}</span>
          @enderror
        </div>
        <div class="mb-3">
        <label>Tour guide id</label>
        <input type="text" class="form-control" placeholder="Enter Tour guide id" name="tour_guide_id" value="{{$sche->tour_guide_id}}">
        @error('tour_guide_id')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Tour Code</label>
        <input type="text" class="form-control" placeholder="Enter Tour code" name="tour_code" value="{{$sche->tour_code}}">
        @error('tour_code')
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