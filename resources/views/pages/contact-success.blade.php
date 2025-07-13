@extends('layouts.frontend')
@section('content')
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2>Message Submitted Successfully!</h2>

                        @if ($data)
                            <p><strong>Name:</strong> {{ $data->name }}</p>
                            <p><strong>Email:</strong> {{ $data->email }}</p>
                            <p><strong>Message:</strong> {{ $data->message }}</p>
                        @else
                            <p>No data found.</p>
                        @endif

                        <a href="{{ route('contact.index') }}">Back to Contact Form</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
