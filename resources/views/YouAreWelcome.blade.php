@extends('Home')

@section('welcome')
    <h1 class="text-white">You are welcome</h1>
@endsection

@section('content')
    <div>
    <h2 class="mt-3">We are collect all messages sent to us</h2>
    <a href="/send" class="btn btn-primary shadow">Send a message</a>
    </div>
    <div class="d-flex justify-content-center flex-wrap">
        @if(count($mes) != 0)

    @foreach($mes as $m)

        <div class="card border-secondary text-dark m-2 w-100 shadow" style="min-width: 20rem;max-width: 30rem">
            <div class="card-header">{{$m->email}}</div><div class="">{{$m->time_create}}</div>
            <div class="card-body">
                <p class="card-text">{{$m->message}}</p>
            </div>
        </div>

    @endforeach

            @else
            <div class="border-danger text-dark mt-2 h3"><span>No messages yet</span></div>
            @endif

    </div>
@endsection

@section('script')
    <script>
        document.ready(function(){
            $('.order-0').click(function(){
                console.log("hi");
            })
        })
    </script>
@endsection
