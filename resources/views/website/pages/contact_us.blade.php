@extends('website.layout.layout')
@section('content')
<!-- ======= Contact Section ======= -->
<section class="most-popular mst-ppulr"style="padding-bottom:80px ;">
    <div class="collecter ">
        <div class="container-popular ">

        <div class="section-header">
            <h2>Contact</h2>
            <p>Need Help? <span>Contact Us</span></p>
        </div>

            <div class="row gy-4">
                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center">
                        <div>
                            <h3>Email Us</h3>
                            <p>akilny@gmail.com</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <div>
                            <h3>Call Us</h3>
                            <p>+20 1025698475</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->


            </div>
            <br>
            @if ($errors->any())
                <div class="alert alert-danger" style=" margin-right: 22px;  margin-left: 22px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('message.store')}}" method="post" role="form">
                @csrf
                <div class="row gy-4">
                    <div class="col-xl-6 form-group">
                        <input type="text" class="form-control" name="name" placeholder="Full Name"
                               aria-label="Full Name"data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    </div>
                    <div class="col-xl-6 form-group">
                        <input type="mail" class="form-control" name="email" placeholder="Email"
                               aria-label="Email" data-rule="email" data-msg="Please enter a valid email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject"
                               aria-label="Subject" data-rule="minlen:6" data-msg="Please enter at least 6 chars">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Leave a comment here" rows="5"
                                  id="floatingTextarea">
                        </textarea>
                    </div>
                </div>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-danger" name="submit" type="submit">Send Message</button>
                </div>
            </form>
    </div>
    </div>
</section><!-- End Contact Section -->
@endsection