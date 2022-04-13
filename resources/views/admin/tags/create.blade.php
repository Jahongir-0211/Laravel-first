@extends('admin.layouts.layout')
@section('content-wraper')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Создание тега</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Создание тега</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Создание тега</h3>
            </div>
            <form action="{{ route('tags.store') }}" method="post" role="form">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Название</label>
                  <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Название">
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary"> Сохранить </button>
              </div>
            </form>
            <!-- /.card-body -->

            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>


  </section>
  <!-- /.content -->
  </div>
@endsection
