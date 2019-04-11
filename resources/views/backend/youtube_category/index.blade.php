@extends('adminlte::page')

@section('title', 'TFRD')

@section('content_header')
<h1>
Categories
    <small>Youtube Categories</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Youtube</a></li>
    <li class="active">Youtube Categories</li>
</ol>
@stop

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Youtube Category</h3><div class="pull-right"><a class="d-block btn btn-info" href="{{url('backend/youtube/cate/add')}}"><i class="fa fa-plus-square"></i> Add Category</a></div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <table id="cate-table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" style="width: 283px;">Title</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" style="width: 283px;">Description</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 320px;">Created at</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 243px;">Updated at</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 176px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($youtube as $key => $n)
                        <tr role="row" class="odd">
                            <td class="sorting_1">
                            <dl>
                                <dt>Title</dt>
                                <dd>{{ $n->title }}</dd>
                                <dt>Keywords</dt>
                                <dd>{{ $n->keywords }}</dd>
                            </dl>
                            </td>
                            <td>{{ $n->description }}</td>
                            <td>{{ $n->created_at }}</td>
                            <td>{{ $n->updated_at }}</td>
                            <td>
                                <a type="button" class="btn btn-warning" href="{{url('backend/youtube/cate/edit/'.$n->id)}}" >Edit</a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$n->id}}">
                                    Delete
                                </button>
                                <div class="modal modal-danger fade" id="modal-delete-{{$n->id}}" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Delete Category Youtube</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>ต้องการลบหัวข้อนี้ใช่หรือไม่ ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                            <a type="button" class="btn btn-outline" href="{{url('backend/youtube/cate/delete/'.$n->id)}}">Confirm</a>
                                        </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">Title</th>
                            <th rowspan="1" colspan="1">Description</th>
                            <th rowspan="1" colspan="1">Created at</th>
                            <th rowspan="1" colspan="1">Updated at</th>
                            <th rowspan="1" colspan="1">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>
@stop
@section('js')
<script>
  $(function () {
    $('#cate-table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
@stop