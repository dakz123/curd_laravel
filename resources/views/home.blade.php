@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <label for="Type">Type</label> <h6>{{ Auth::user()->type }}</h6>
                    <ul>
@foreach($activity as $row)

<li>{{$row['activity']}}</li>
@endforeach
</ul>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
