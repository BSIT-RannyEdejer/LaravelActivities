@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome!') }}</div>

                <div class="card-body">
                    {{ __('Log in first to access the table.') }}
                    <br>
                    {{ ('If you dont have an account, click Register to create an account.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
