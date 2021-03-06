@extends('admin.layouts.layout')
@section('content-wraper')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Тег</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Тег</li>
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
              <h3 class="card-title">Список Тегов</h3>
            </div>
            <div class="card-body">
              <a href="{{ route('tags.create') }}" class="btn btn-primary mb-3">Добавить Тег</a>
              @if ($tags->count())
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 30px">#</th>
                        <th>Наименование</th>
                        <th>Slug</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>




                      @foreach ($tags as $tag)
                        <tr>
                          <td>{{ $tag->id }}</td>
                          <td>{{ $tag->title }}</td>
                          <td>{{ $tag->slug }}</td>
                          <td>
                            <a href="{{ route('tags.edit', $tag->id) }}"
                              class="btn btn-info btn-sm float-left mr-1">
                              <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form class="float-left" action="{{ route('tags.destroy', $tag->id) }}"
                              method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Подтвердите удаление')">
                                <i class="fas fa-trash-alt"></i>
                              </button>
                            </form>
                          </td>
                        </tr>
                      @endforeach



                    </tbody>
                  </table>
                </div>
              @else
                <p>Тегов пока нет ...</p>
              @endif

            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              {{ $tags->links('vendor.pagination.bootstrap-4') }}
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>


  </section>
  <!-- /.content -->
  </div>
@endsection
