@extends('layouts.app')

@push('styles')
    section {
        padding-top: 45px;
    }
@endpush

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col s12 m4 l4">
                    <div class="card green">
                        <div class="card-content">
                            <span class="card-title center-align white-text">Open Events</span>
                            <hr>
                            <h2 class="white-text center-align">12</h2>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="card yellow">
                        <div class="card-content">
                            <span class="card-title center-align">Events Joined</span>
                            <hr style="border-color: black">
                            <h2 class="center-align">8</h2>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="card red">
                        <div class="card-content">
                            <span class="card-title center-align white-text">Events Participated</span>
                            <hr>
                            <h2 class="center-align white-text">56</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($closedhackeria as $hackerium)
            <p>{{ $hackerium->title }}</p>
        @endforeach
    </section>
@endsection
