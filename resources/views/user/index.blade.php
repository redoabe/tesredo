@extends('layouts.master')
@section('content')

<div class="row">
<div class="col-lg-12">

<h1>Daftar User</h1>

<!-- digunakan untuk menampilkan pesan -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Password</td>
            <td>Level</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($user as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->username }}</td>
            <td>{{ $value->password }}</td>
            <td>{{ $value->level }}</td>

            <!-- untuk menambahkan tombol tampil, edit, dan hapus -->
            <td>
                <a class="btn btn-small btn-success" href="{{ URL('user/' . $value->id) }}">Tampilkan Data</a>

                <a class="btn btn-small btn-warning" href="{{ URL('user/' . $value->id . '/edit') }}">Ubah Data</a>

                {!! Form::open(['url' => 'user/' . $value->id, 'class' => 'pull-right']) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Hapus Data', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</div>
@stop