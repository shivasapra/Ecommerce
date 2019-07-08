@extends('layouts.app')
@section('content')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Products
                    <div class="text-right">
                            <a href="{{route('product.create')}}" class="btn btn-sm btn-success">Create</a>
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
                                    <th>Image</th>
                                    <th>Under</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    @if(Auth::user()->vendor)
                                    <th>Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @if($products->count()>0)
                                <?php $i  = 1; ?>
                                    @foreach($products as $product)
                                    <tr>
                                        <th>{{$i++}}.</th>
                                        <td>
                                                <img src="{{$product->img}}" alt="" style="height:150px; width:150px;">
                                            </td>
                                        <td>
                                            {{$product->category->name}}
                                        </td>
                                        <td>{{$product->name}}</td>
                                    <form action="{{route('product.save',['id'=>$product->id])}}" method="post">
                                            @csrf
                                        <td>
                                            <input type="text" name="quantity" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="price" class="form-control">
                                        </td>
                                        @if(Auth::user()->vendor)
                                        <td>
                                            <button type="submit" class="btn btn-sm btn-success">Save</button>
                                        </td>
                                        @endif
                                    </form>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    
                </div>
            </div>
        </div>
@endsection