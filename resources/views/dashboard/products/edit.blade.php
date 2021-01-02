@extends('dashboard.layouts.master')
@section('title')
    Edit Product
@endsection
@section('content')
    <!-- Main content -->
    <form method="POST" action = " {{route('dashboard.products.update',$product)}}">
    @method('PUT')
    @csrf
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Product Name</label>
                <input type="text" value="{{$product->name}}" name=" Name" id="inputName" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputClientCompany"> Product Quantity</label>
                <input type="text" value="{{$product->quantity}}" name=" Quantity" id="Quantity" class="form-control">
              </div>


              <div class="form-group">
                <label for="inputProjectLeader">Product Price</label>
                <input type="text" value="{{$product->price}}" name="Price" id="Price" class="form-control">
              </div>


              <div class="form-group">
              <label for="inputStatus">Companies_id</label>
                    <select class="form-control custom-select">
                        
                        @foreach($companies as $company)
                        <option value = "{{$company->id}}"
                        {{$product->Companies_id == $company->id?'selected' :'' }} 
                        >{{$company->id}}</option>
                        @endforeach

                    </select>
              </div>


              <div class="form-group">
              <label for="inputStatus">Categories_id</label>
                    <select class="form-control custom-select">
                        @foreach($categories as $category)
                        <option value = "{{$category->id}}"
                        {{$product->Categories_id == $category->id?'selected' :'' }}
                        >{{$category->id}}</option>
                        @endforeach

                    </select>
              </div>





       

              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
 
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Porject" class="btn btn-success float-right">
        </div>
      </div>
      </form>

    </section>
    
    </div>
  
    <!-- /.content -->
@endsection
