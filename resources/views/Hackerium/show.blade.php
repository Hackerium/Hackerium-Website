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
                <h4 class="grey-text text-lighten-4">Found it.</h4>
                <h5 class="grey-text text-lighten-2"
                    style="font-weight: 300; font-size: 20px;">
                    I've found the hackeria for you. Look at it :)
                </h5>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">{{ $hackerium->title }}</span>
                    {{ $hackerium->keypoint }}
                    <br><br>
                    <p>&rightharpoonup; Starts By: {{ \Carbon\Carbon::parse($hackerium->starts_by)->toDayDateTimeString() }}</p>
                    <p>&rightharpoonup; Ends By: {{ \Carbon\Carbon::parse($hackerium->starts_by)->toDayDateTimeString() }}</p>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <span class="card-title">Description</span>
                    {!! $hackerium->description !!}
                </div>
            </div>
        </div>
    </section>
@endsection