@extends('layouts.master')
@section('content')

<div class="row">
<div class="col-lg-12">

<h1>Tampilkan Data User</h1>

    <div class="jumbotron text-center">
        <h2>{{ $user->nama }}</h2>
        <p>
            <strong>Password :</strong> {{ $user->password }}<br>
            <strong>Level :</strong> {{ $user->level }}
        </p>
    </div>

</div>
</div>
@stop