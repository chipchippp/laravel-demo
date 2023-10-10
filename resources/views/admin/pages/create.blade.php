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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin/product"
                           class="btn btn-primary"
                           role="button">
                            Back
                        </a>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <h1>This is Create Foods</h1>
                                <form action="/product" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input class="form-control"
                                           type="file"
                                           name="image">
                                    <input class="form-control"
                                           type="text"
                                           name="name"
                                           placeholder="Enter food's name">
                                    <input class="form-control"
                                           type="text"
                                           name="description"
                                           placeholder="Enter food's description">
                                    <input class="form-control"
                                           type="text"
                                           name="count"
                                           placeholder="Enter food's count">

                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    @if($errors ->any())
                                        <div>
                                            @foreach($errors -> all() as $error)
                                                <p class="text-danger">
                                                    {{$error}}
                                                </p>
                                            @endforeach
                                        </div>
                                    @endif
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
