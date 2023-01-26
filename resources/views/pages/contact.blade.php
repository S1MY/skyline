@extends('layouts.master')

@section('content')
    <div class="headerP"></div>
    <section class="section _hero" style="background: url(/image/contact.jpg);">
        <div class="page">
            <h1 class="title">We Are Here To Help You</h1>
            <p class="subText">Marketing Solutions That Work</p>
            <p class="myText">We’re also experts at finding the sweet spot between Google’s guidelines and what is commercially right for you. We have progressive theories on search as a tool for retention of customers, not just for acquisition.</p>

            <form class="formWrapper">
                <input type="text" class="formInput" required name="fullname" placeholder="Full Name *">
                <input type="email" class="formInput" required name="email" placeholder="Email Address *">
                <textarea name="area" class="formArea" placeholder="Message *" required></textarea>
                <button class="formButton">Submit</button>
            </form>
        </div>
    </section>
@endsection
