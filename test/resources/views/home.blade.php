@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 d-flex-col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="mt-3 bg-succes justify-content-center d-flex">
                <h3 class="mr-4">Add another bike to the community!</h3>
                <a class="btn btn-lg btn-success" href="{{route('addNewBike')}}" role="button">Link</a>
            </div>

        </div>
    </div>
</div>
@endsection
