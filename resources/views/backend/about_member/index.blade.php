@extends('adminlte::page')

@section('title', 'TFRD')

@section('content_header')
<h1>
    About
    <small>Member</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">About Member</li>
</ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Member</h3>
        <div class="pull-right"><a class="d-block btn btn-info" href="{{url('backend/about/member/add')}}"><i class="fa fa-plus-square"></i> Add Member</a></div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12 hidden-sm hidden-xs">
                <table id="banner-table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" style="width: 283px;">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 359px;">Image</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 320px;">Created at</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 243px;">Updated at</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 176px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($member as $mem)
                        <tr role="row" class="odd">
                            <td class="sorting_1">
                                <dl>
                                    <dt>Name</dt>
                                    <dd>{{ $mem->name }}</dd>
                                    <dt>Position</dt>
                                    <dd>{{ $mem->position }}</dd>
                                </dl>
                            </td>
                            <td><img style="width:200px;" src="{{asset('storage/images/about/member')}}/{{$mem->image}}" /></td>
                            <td>{{ $mem->created_at }}</td>
                            <td>{{ $mem->updated_at }}</td>
                            <td>
                                <a type="button" class="btn btn-warning" href="{{url('backend/about/member/edit/'.$mem->id)}}" >Edit</a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$mem->id}}">
                                    Delete
                                </button>
                                <div class="modal modal-danger fade" id="modal-delete-{{$mem->id}}" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Delete Category News</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>ต้องการลบรูปนี้ใช่หรือไม่ ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                            <a type="button" class="btn btn-outline" href="{{url('backend/about/member/delete/'.$mem->id)}}">Confirm</a>
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
                            <th rowspan="1" colspan="1">Name</th>
                            <th rowspan="1" colspan="1">Image</th>
                            <th rowspan="1" colspan="1">Created at</th>
                            <th rowspan="1" colspan="1">Updated at</th>
                            <th rowspan="1" colspan="1">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="col-sm-12 visible-sm visible-xs">
                <table id="banner-m-table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" style="width: 283px;">Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($member as $mem)
                        <tr role="row" class="odd">
                            <td class="sorting_1">
                              <dl>
                                  <dt>Name</dt>
                                  <dd>{{ $mem->name }}</dd>
                                  <dt>Position</dt>
                                  <dd>{{ $mem->position }}</dd>
                                  <dt>Image</dt>
                                  <dd><img style="width:200px;" src="{{asset('storage/about/member')}}/{{$mem->image}}" /></dd>
                                  <dt>Created at</dt>
                                  <dd>{{ $n->created_at }}</dd>
                                  <dt>Updated at</dt>
                                  <dd>{{ $n->updated_at }}</dd>
                                  <dt>Action</dt>
                                  <a type="button" class="btn btn-warning" href="{{url('backend/about/member/edit/'.$mem->id)}}" >Edit</a>
                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-m-delete-{{$mem->id}}">
                                      Delete
                                  </button>
                                  <div class="modal modal-danger fade" id="modal-m-delete-{{$mem->id}}" style="display: none;">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span></button>
                                              <h4 class="modal-title">Delete Category News</h4>
                                          </div>
                                          <div class="modal-body">
                                              <p>ต้องการลบรูปนี้ใช่หรือไม่ ?</p>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                              <a type="button" class="btn btn-outline" href="{{url('backend/banner/delete/'.$n->id)}}">Confirm</a>
                                          </div>
                                          </div>
                                          <!-- /.modal-content -->
                                      </div>
                                      <!-- /.modal-dialog -->
                                  </div>
                              </dl>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">Information</th>
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
    $('#banner-table, #banner-m-table').DataTable({
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