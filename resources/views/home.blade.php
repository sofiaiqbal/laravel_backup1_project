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
                                    <tr style="padding: 10px; white-space: normal;">
                                        <th>Id</th>
                                        <th>First Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($form_users as $blog)
                                    <tr><td style="padding: 10px; white-space: normal;">{{ $blog->id}}</td>
                                        
                                        <td style="padding: 10px; white-space: normal;">{{ $blog->firstname}}</td>
                                        <td><a href="{{ url('see-more/'.$blog->id) }}" class="btn btn-success">Click to see more</a></td> 
                                    </tr> 
                                    @endforeach 
                                </tbody> 
                            </table>
                        </div>
                        </form>    
                        </div>
                        <div colspan = "2" style="text-align: right;"><a href="{{ url('download-xml/') }}">Download XML</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            {{ $form_users->links('vendor.pagination.simple-default') }}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
