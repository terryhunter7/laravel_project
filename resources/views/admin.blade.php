@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="col-md-12">
        <p>This is the <strong>Admin</strong> panel.</p>
    </div>
</div>
@endsection

