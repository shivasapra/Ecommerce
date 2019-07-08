@extends('layouts.app')
@section('content')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Clients
                    <div class="text-right">
                            <a href="{{route('client.create')}}" class="btn btn-sm btn-success">Create</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-boredred">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($clients->count()>0)
                            <?php $i  = 1; ?>
                                @foreach($clients as $client)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>
                                        <a href="{{route('client.view',['id'=>$client->id])}}" class="btn btn-sm btn-primary">View</a>
                                        <a href="{{route('client.edit',['id'=>$client->id])}}" class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{route('client.delete',['id'=>$client->id])}}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection