@extends('layouts.app')

@section('content')
<div class="">
    <div class=" justify-content-center">

        <div class="card">
            <div class="card-header">Me</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif



            </div>
        </div>

    </div>
</div>
@endsection
