@extends('userlayout')

@section('content')


<div class="container">
    <div class="row">
        <div class="contact-child child1">
            <p>
                <i class="fas fa-map-marker-alt"></i> Address <br />
                <span> 590 CMT8, district 3, Ho Chi Minh City

                    <div id="map" class="text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d346.4225083215248!2d106.66604690035224!3d10.786533499098462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed2392c44df%3A0xd2ecb62e0d050fe9!2zRlBUIEFwdGVjaCBIQ00gLSBI4buHIFRo4buRbmcgxJDDoG8gVOG6oW8gTOG6rXAgVHLDrG5oIFZpw6puIFF14buRYyBU4bq_IChTaW5jZSAxOTk5KQ!5e0!3m2!1svi!2s!4v1638961989253!5m2!1svi!2s" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </span>
            </p>

            <p>
                <i class="fas fa-phone-alt"></i> Let's Talk <br />
                <span> 0704913975</span>
            </p>


            <p>
                <i class=" far fa-envelope"></i> General Support <br />
                <span>trannhattan805@gmail.com</span>
            </p>

        </div>



        <div class="col-md-8">
            <h1><img src="" width="80px">Would you like to contact us?</h1>
            <form name="contact-form" action="" method="post" id="contact-form">
                <br>
                <br>


            <h6> ~.~   If you want, please fill out the information below   ~.~ </h6>
                <h2>
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" name="your_name" placeholder="Name" required>
                    </div>
                </h2>
                <h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="your_email" placeholder="Email" required>
                    </div>
                </h3>
                <h4>
                    <div class="form-group">
                        <label for="Phone">Phone</label>
                        <input type="text" class="form-control" name="your_phone" placeholder="Phone" required>
                    </div>
                </h4>
                <h5>
                    <div class="form-group">
                        <label for="comments">Comments</label>
                        <textarea name="comments" class="form-control" rows="8" cols="28" rows="5" placeholder="Comments"></textarea>
                    </div>
                </h5>

                <h6><button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button></h6>
                <img src="image/loading.gif" id="loading-img">
            </form>

            <div class="response_msg"></div>
        </div>

    </div>
</div>


@endsection

@section('title')
    About
@endsection

@section('linkcss')
    {{asset('css/user/contact.css')}}
@endsection

@section('linkjs')

@endsection
