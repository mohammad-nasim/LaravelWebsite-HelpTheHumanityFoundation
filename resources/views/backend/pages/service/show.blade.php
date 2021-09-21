@extends('backend.master')

@section('title')
View Single Data - Service Section
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ">
            <div class="col-12 d-flex justify-content-between ">
                <h1 class="m-0">View Service</h1>
                <a href="{{ route('service.index') }}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</a>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card card-white">
                    <div class="card-body">
                        <div class=" table-responsive">
                           <table class="table table-striped">
                                <tr>
                                    <th >Image : </th>
                                    <td>
                                        <img src="{{asset('backend/img/app_image/service/'.$show->image)}}" style="width:230px;height:150px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th >Icon: </th>
                                    <td>{{ $show->icon}}</td>
                                </tr>
                                <tr>
                                    <th >Title : </th>
                                    <td>{{ $show->title }}</td>
                                </tr>
                                <tr>
                                    <th >Slider Image : </th>
                                    <td>{{ $show->description }}</td>
                                </tr>
                           </table>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12-->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('js')
<script>
    $('#form-id')[0].reset();
</script>
@endsection



