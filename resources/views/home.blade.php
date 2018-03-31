@extends('layouts.app')

@push('styles')
    section {
        padding-top: 45px;
    }
@endpush

@section('content')
    <div class="card indigo" style="margin: 0">
        <div class="container">
            <div class="card-content">
                <h4 class="grey-text text-lighten-4">Hello, {{ auth()->user()->name }}</h4>
                <h5 class="grey-text text-lighten-2"
                    style="font-weight: 300; font-size: 20px;">
                    Manage everything here, in a single view.
                </h5>
                <div style="padding-top: 20px">
                    <a href="" class="waves-effect waves-dark btn grey lighten-3 indigo-text">Profile</a>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <h4 class="center-align">Open Hackeria</h4>
            <hr width="25%" style="border-width: 3px">
        </div>
    </section>
@endsection
