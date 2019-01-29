@extends('layouts.main')
@section('content')
    <!-- contact -->
    <section class="main-sec-w3 pb-5">
        <div class="container">
            <div class="wthree-inner-sec">
                <div class="sec-head">
                    <h1 class="sec-title-w3 text-capitalize">contact me</h1>
                    <span class="block"></span>
                </div>
                <div class="form-wrapper">
                    <form action="#" method="post">
                        <div class="d-flex flex-column">
                            <label>Your Name:</label>
                            <input class="text-input" type="text" name="text1" id="text1" required>
                        </div>
                        <div class="d-flex flex-column my-sm-5 my-3">
                            <label>Your Email Address:</label>
                            <input class="text-input" type="email" name="email" id="email" required>
                        </div>

                        <div class="d-flex flex-column my-sm-5 my-3">
                        <label>Your Message:</label>

                            <textarea name="t1" id="t1" required></textarea>
                        </div>
                        <input class="submit" type="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
@endsection