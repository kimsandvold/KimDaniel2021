@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" justify-content-center">

            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br />
                    <a href="/user">User list</a>
                </div>
            </div>
      
    </div>
</div>
@endsection
