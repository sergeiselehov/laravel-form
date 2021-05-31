@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Feedback Form</div>

                    <div class="card-body" id="app">
                        <feedback-form></feedback-form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
