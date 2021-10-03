@extends('layouts.app')

@section('content')
<div class="">
    <div class=" justify-content-center">

        <div class="card">
            <div class="card-header">User list</div>

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
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>
@endsection