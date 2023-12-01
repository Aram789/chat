@extends('layouts.app')

@section('content')
    <div class="container w-25">
        <div class="row justify-content-center gap-2">
            <label>
                <input type="text" class="message form-control">
            </label>
            <div>
                <button type="button" class="send btn btn-primary">send</button>
            </div>
            <div>
                <label>
                    <textarea readonly rows="10" cols="50" class="message_field form-control text-secondary"></textarea>
                </label>
            </div>
        </div>
    </div>

@endsection
