@extends("admin.layouts.admin_app")
@section("main")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">General</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url("/product/create")}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Thumbnail</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="thumbnail" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" value="{{old("name")}}" class="form-control"  placeholder="Enter Name" required>
                        @error("name")
                        <p class="text-danger"><i>{{$message}}</i></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="number" value="{{old("price")}}" name="price" class="form-control"  placeholder="Price">
                        @error("price")
                        <p class="text-danger"><i>{{$message}}</i></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Qty</label>
                        <input type="number" value="{{old("qty")}}" name="qty" class="form-control"  placeholder="Qty">
                        @error("qty")
                        <p class="text-danger"><i>{{$message}}</i></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control custom-select">
                            <option selected disabled>Choose category</option>
                            @foreach($categories as $item)
                                <option @if($item->id==old("category_id")) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        @error("category_id")
                        <p class="text-danger"><i>{{$message}}</i></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" row="5">
                        {{old("description")}}
                        </textarea>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="row">
                    <div class="col-12">
                        <a href="{{url("/product")}}" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Submit" class="btn btn-primary float-right">
                    </div>
                </div>
            </form>
        </div>
@endsection
