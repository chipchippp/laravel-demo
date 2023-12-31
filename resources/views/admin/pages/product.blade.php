@extends("admin.layouts.admin_app")
@section("main")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Products</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/product/create"
                           class="btn btn-primary"
                           role="button">
                            Create a new Products
                        </a>
                        <div class="card-tools">
                            <form action="{{url("/product/")}}" method="Get">
                                <div class="input-group input-group-sm mr-2" style="width: 100px; float:left">
                                    <input class="form-control" type="number" name="price_from" placeholder="Price from"/>
                                </div>
                                <div class="input-group input-group-sm mr-2" style="width: 100px; float:left">
                                    <input class="form-control" type="number" name="price_to" placeholder="Price to"/>
                                </div>
                                <div class="input-group input-group-sm mr-2" style="width: 150px; float:left">
                                    <select name="category_id" class="form-control">
                                        <option value="0">Filter by category</option>
                                        @foreach($categories as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group input-group-sm" style="width: 150px;float:left">
                                    <input value="{{app("request")->input("search")}}" type="text" name="search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>


                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Category</th>
{{--                                <th>Create At</th>--}}
{{--                                <th>Update At</th>--}}
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>#{{$loop ->index + 1}}</td>
                                    <td><img width="100" src="{{$product->thumbnail}}" /></td>
                                    <td>{{$product ->name}}</td>
                                    <td>${{$product ->price}}</td>
                                    <td>{{$product ->qty}}</td>
                                    <td>{{$product ->Category->name}}</td>
{{--                                    <td>{{$products -> created_at}}</td>--}}
{{--                                    <td>{{$products -> update_at}}</td>--}}
                                    <td><a href="{{url("/product/edit", ["product"=>$product->id])}}" class="btn btn-warning me-md-2 btn-group">Edit</a></td>
                                    <td>
                                       <form action="{{url("/product/delete", ["product"=>$product->id])}}" method="post">
                                           @csrf
                                           @method('delete')
                                           <button onclick="return confirm('chac chan : {{$product->name}}')" type="submit" class="btn btn-danger">Delete</button>
                                       </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
{{--                        {!! $products->links("pagination::bootstrap-4") !!}--}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
@endsection
