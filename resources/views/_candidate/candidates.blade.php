@extends('layouts.app')

@section('content')
<div class="">
    <div class=" justify-content-center">

        <div class="card">
            <div class="card-header">Candidates</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif


                <table class="table">
                    <thead>
                        <tr>
                            <th>Navn</th>
                            <th>Epost</th>
                        </tr>
                    </thead>

                </table>

            </div>
        </div>

    </div>
</div>
@endsection
