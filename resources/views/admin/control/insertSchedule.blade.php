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
                Insert New Schedule
            </h4>
        </div>

        <form action="insertSchedulePost">

            <div class="mb-3 mt-3">
                <label>Tour ID</label>
                <select class="form-select" name="tour_id">
                    @foreach ($tour as $t)
                        <option value="{{ $t->tour_id }}">{{ $t->tour_name }}</option>
                    @endforeach
                </select>
            </div>



            <div class="mb-3 mt-3">
                <label>Date start</label>
                <input type="date" class="form-control" placeholder="Enter Date start" name="date_start"
                    value="{{ old('date_start') }}">
                @error('date_start')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label>Date end</label>
                <input type="date" class="form-control" placeholder="Enter Date end" name="date_end"
                    value="{{ old('date_end') }}">
                @error('date_end')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label>Status</label>
                <input type="text" class="form-control" placeholder="Enter status" name="status"
                    value="{{ old('status') }}">
                @error('status')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label>Tour Code</label>
                <input type="text" class="form-control" placeholder="Enter Tour code" name="tour_code"
                    value="{{ old('tour_code') }}">
                @error('tour_code')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label>Tour guide id</label>
                <select class="form-select" name="tour_guide_id">
                    @foreach ($guide as $g)
                        <option value="{{ $g->tour_guide_id }}">{{ $g->name }}</option>
                    @endforeach
                </select>
            </div>

            <br>
            <button class="btn btn-primary"> INSERT </button>
            <br>
            <br>
        </form>
    </div>

</body>

</html>
