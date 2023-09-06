@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card">
                        <form action="" method="post">
                            @csrf
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    @foreach ($form_users as $blog)
                                    <tr style="padding: 10px; white-space: normal;">
                                        <th>Id</th>
                                        <td style="padding: 10px; white-space: normal;">{{ $blog->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>First Name</th>
                                        <td style="padding: 10px; white-space: normal;">{{ $blog->firstname}}</td>
                                    </tr>
                                    <tr>
                                        <th>Last Name</th>
                                        <td style="padding: 10px; white-space: normal;">{{ $blog->lastname}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td style="padding: 10px; white-space: normal;">{{ $blog->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <td style="padding: 10px; white-space: normal;">{{ $blog->phonenumber}}</td>
                                    </tr>
                                    <tr>
                                        <th>Zip code</th>
                                        <td style="padding: 10px; white-space: normal;">{{ $blog->zipcode}}</td>
                                    </tr>
                                    @endforeach
                                </thead>
                            </table>
                        </div>
                        </form>    
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
