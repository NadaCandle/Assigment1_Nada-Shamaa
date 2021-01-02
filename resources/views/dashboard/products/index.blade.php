@extends('dashboard.layouts.master')
@section('title')
    Site Dashboard - List Products
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    @include('dashboard.layouts.masseges')
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Prodects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped products">
              <thead>
                  <tr>
                      <th >
                          #
                      </th>
                      <th >
                          Product Name
                      </th>
                      <th >
                      Product Quantity
                      </th>
                      <th>
                      Product Price
                      </th>
                      <th " class="text-center">
                          
                      </th>
                      <th >
                      </th>
                  </tr>
              </thead>
              <tbody>
              @foreach($products as $product)
                  <tr>
                      <td>
                      {{$loop->iteration}}
                      </td>
                      <td>
                      <a>
                           {{$product->name}}
                         </a>
                            <br/>
                            <small>
                                  Created {{$product->created_at}}
                            </small>
                      </td>

                      <td class="project_progress">
                      {{$product->quantity}}
                      </td>
                      <td class="project-state" style="width: 2%">
                      {{$product->price}}
                      </td>
                      <td class="project-actions text-right" style="width: 30%">
                          
                              <a class="btn btn-primary btn-sm" href="{{route('dashboard.products.show',$product)}}">
                                  <i class="fas fa-folder">
                                </i>
                                    View
                                 </a>
                                  <a class="btn btn-info btn-sm" href="{{route('dashboard.products.edit',$product)}}">                                    <i class="fas fa-pencil-alt">
                                      </i>
                                  Edit
                          </a>


                          <form action="{{route('dashboard.products.destroy',$product)}}" method="POST" >
                          
                                 @method('DELETE')
                                    @csrf
                                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                          </form>
                      </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>

@endsection