@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new Task</div>
                <div class="card-body">
                    <form method="POST" action=""></form>
                </div>
            <div class="card">
                <div class="card-header">To Do Lists</div>
{{-- 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> --}}
                <div class="card-body">
                    Invoices to be paid
                </div>
                <div class="card-body">
                    Invoices to be paid
                </div>
                <div class="card-body">
                    Invoices to be paid
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
