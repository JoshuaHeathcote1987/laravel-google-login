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

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="container mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">game_name</th>
                    <th scope="col">friend_code</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <!-- @foreach($introductions as $introduction)
                <tr>
                    <th scope="row">{{ $introduction->id }}</th>
                    <td>{{ $introduction->game_name }}</td>
                    <td>{{ $introduction->friend_code }}</td>
                </tr>
                @endforeach -->
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection
