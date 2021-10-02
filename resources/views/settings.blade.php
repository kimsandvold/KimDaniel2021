@extends('layouts.app')

@section('content')
<div class="">
    <div class=" justify-content-center">

        <div class="card">
            <div class="card-header">Settings list</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif


                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($settings as $setting)
                        <tr>
                            <td>
                                {{$setting->key}}
                            </td>
                            <td>
                                {{$setting->value}}
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