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
                    <nav><div colspan = "2" style="text-align: right; margin-bottom: 20px;">
                        <a href="{{ route('export.excel') }}" class="btn btn-primary">Download Excel</a>
                    </div></nav>
                    <div class="card">
                        <form action="" method="post">
                            @csrf
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr style="padding: 10px; white-space: normal;">
                                        <th style="text-align: right;">Id</th>
                                        <th style="text-align: right;">First Name</th>
                                        <th style="text-align: right;">Last Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $counter = ($form_users->currentPage() - 1) * $form_users->perPage(); // Initialize the counter
                                @endphp
                                    @foreach ($form_users as $blog)
                                    @php
                                    $counter++; // Increment the counter
                                        @endphp
                                    <tr>
                                        <td style="padding: 10px; white-space: normal; text-align: right;">{{ $counter}}</td>
                                        <td style="padding: 10px; white-space: normal; text-align: right;">{{ $blog->firstname}}</td>
                                        <td style="padding: 10px; white-space: normal; text-align: right;">{{ $blog->lastname}}</td>
                                        <td style="text-align: right;"><a href="{{ url('see-more/'.$blog->id) }}" class="btn btn-link" >Click to see more</a></td> 
                                    </tr> 
                                    @endforeach
                                </tbody> 
                            </table> 
                            <div class="d-flex justify-content-center col-mt-6" style="margin-top: 20px;" >
                                {{ $form_users->links('vendor.pagination.simple-default') }}
                            </div>
                        </div>
                        </form>    
                        </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
