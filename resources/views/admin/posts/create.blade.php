@extends('admin.layouts.layout')
@section('content-wraper')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Создание Поста</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Создание Поста</li>
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
              <h3 class="card-title">Создание Поста</h3>
            </div>
            <form action="{{ route('posts.store') }}" method="post" role="form" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Название</label>
                  <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Название">
                </div>

                <div class="form-group">
                  <label for="description">Цытата</label>
                  <textarea class="form-control @error('title') is-invalid @enderror" id="description" name="description" rows="5"
                    placeholder="Цытата ..."></textarea>
                </div>

                <div class="form-group">
                  <label for="content">Контент</label>
                  <textarea class="form-control @error('title') is-invalid @enderror" id="content" name="content" rows="7"
                    placeholder="Цытата ..."></textarea>
                </div>

                <div class="form-group">
                  <label for="category_id">Категория</label>
                  <select class="form-control" id="category_id" name="category_id">
                    @foreach ($categories as $k => $category)
                      <option value="{{ $k }}">{{ $category }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="tags">Теги</label>
                  <select name="tags[]" id="tags" class="select2" multiple="multiple"
                    data-placeholder="Выбор тегов" style="width: 100%;">
                    @foreach ($tags as $k => $tag)
                      <option value="{{ $k }}">{{ $tag }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile" for="thumbnail">Изображение</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" id="thumbnail" name="thumbnail" class="custom-file-input">
                      <label class="custom-file-label" for="thumbnail">Choose file</label>
                    </div>
                  </div>
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
