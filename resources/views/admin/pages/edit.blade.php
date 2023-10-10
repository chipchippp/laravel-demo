@extends("admin.layouts.admin_app")
@section("main")
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Project Edit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Project Edit</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    <form action="/admin/product/{{$product->id}}" method="post">
            <!-- Main content -->
         @csrf
         @method("Put")
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Product Img</label>
                                <input type="text" name="thumnail" id="inputName" class="form-control" value="{{$product->thumbnail}}">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Product Name</label>
                                <input type="text" name="name" id="inputName" class="form-control" value="{{$product->name}}">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Product Price</label>
                                <input type="text" name="price" id="inputName" class="form-control" value="{{$product->price}}">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Product Qty</label>
                                <input type="text" name="qty" id="inputName" class="form-control" value="{{$product->qty}}">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="{{url("/admin/product")}}" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Save Changes" class="btn btn-success float-right">
                    </div>
                </div>
            </div>
        </section>
</form>
        <!-- /.content -->
    </div>

@endsection
