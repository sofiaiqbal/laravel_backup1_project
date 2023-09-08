@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    <div class="card">
                        <form action="{{ url('details/'.$form_users->id) }}" method="post">
                            @csrf
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <thead>
                        
                                    <tr>
                                        <th>First Name</th>
                                        <td style="padding: 10px; white-space: normal;">{{ $form_users->firstname}}</td>
                                    </tr>
                                    <tr>
                                        <th>Last Name</th>
                                        <td style="padding: 10px; white-space: normal;">{{ $form_users->lastname}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td style="padding: 10px; white-space: normal;">{{ $form_users->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <td style="padding: 10px; white-space: normal;">{{ $form_users->phonenumber}}</td>
                                    </tr>
                                    <tr>
                                        <th>Zip code</th>
                                        <td style="padding: 10px; white-space: normal;">{{ $form_users->zipcode}}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        </form>    
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
