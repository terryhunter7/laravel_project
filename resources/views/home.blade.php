@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h1>Recent Blogs</h1>
                <div class="col-md-12 blog-container">
                    <div class="row">
                        <div class="col-md-8">
                            Blog Text
                            </div>
                        <div class="col-md-4">
                            Image
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                Side bar.
            </div>
        </div>
    </div>
</div>
@endsection
