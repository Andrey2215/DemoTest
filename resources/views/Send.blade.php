@extends('Home')

@section('welcome')
    <h2 class="float-md-start text-white p-3">Send us a message</h2>
@endsection

@section('content')
    <div>
    <form method="post" action="/send/check">
        @csrf
        <input class="form-control mt-2" type="email" name="email" id="email" placeholder="Your email">
        <span class="text-danger">@error('email'){{$message}}@enderror</span>
        <textarea class="form-control mt-2" type="text" name="text" id="text" placeholder="Your message"></textarea>
        <span class="text-danger">@error('text'){{$message}}@enderror</span>
        <input class="btn btn-success mt-2 form-control" type="submit" value="Send">
    </form>
    </div>
    <div>
        <a href="/" class="btn btn-primary mt-2 form-control">Back</a>
    </div>
@endsection
