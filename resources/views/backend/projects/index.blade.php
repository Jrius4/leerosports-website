@extends('layouts.backend.main')

@section('title', 'Leero Sports Dashboard | Projects index')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Projects</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/home"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li class="breadcrumb-item active">Projects</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div>
                    <h3 class="card-title mb-2">Projects</h3>
                </div>
                <div class="clearfix"></div>
                <div class="row d-flex justify-content-between">
                    <div class="mr-auto">
                        <a href="{{ route('backend.projects.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                    <div class="ml-auto" style="padding:7px 0;">
                        <?php $links = [] ?>
                        @foreach($statusList as $key => $value)
                            @if($value)
                                <?php $selected = Request::get('status') == $key ? 'selected-status' : '' ?>
                                <?php $links[] = "<a class=\"{$selected}\" href=\"?status={$key}\">" . ucwords($key) . "({$value})</a>" ?>
                            @endif
                        @endforeach
                        {!! implode(' | ', $links) !!}
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.partials.message')
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td width="80">Action</td>
                            <td>Title</td>
                            <td width="150">Category</td>
                        </tr>
                    </thead>
                  <tbody>
                    @if (! $projects->count())
                        <div class="alert alert-danger">
                            <strong>No record found</strong>
                        </div>
                    @else
                        @if($onlyTrashed)
                            @include('backend.projects.table-trash')
                        @else
                            @include('backend.projects.table')
                        @endif
                    @endif
                  </tbody>
                  <tfoot>
                    <tr>
                        <td width="80">Action</td>
                        <td>Title</td>
                        <td width="150">Category</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card card-footer">
                    <div class="box-footer clearfix">
                        <div class="pull-left">
                            {{ $projects->appends( Request::query() )->render() }}
                        </div>
                        <div class="pull-right">
                            <small>{{ $projectCount }} {{ str_plural('Item', $projectCount) }}</small>
                        </div>
                    </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
  
  


@endsection
@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endsection


