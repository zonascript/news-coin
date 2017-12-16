@extends('admin.layout.master')
@section('title', 'Manager Coin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tạo mới coin
    </h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Coin</a></li>
        <li class="active">Tạo mới</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
    <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                <form role="form" action="{{ route('admin.coin.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" name="name" class="form-control" placeholder="Nhập tiêu đề">
                        </div>
                        <div class="form-group">
                            <label>Thumbnail</label>
                            <input type="file" name="thumbnail">
                        </div>
                        <div class="form-group">
                            <label>Rate</label>
                            <input type="text" name="rate" class="form-control" placeholder="Nhập rate">
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input type="number" name="price" class="form-control" placeholder="Nhập giá">
                        </div>

                        <!-- Hype -->
                        <div class="form-group">
                            <label>Hype</label>
                            <div class="radio">
                                <label class="radio-inline">
                                <input type="radio" name="hype" value="{{ \App\Models\Coin::TYPE_VERY_LOW }}" checked>
                                Rất thấp
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="hype" value="{{ \App\Models\Coin::TYPE_LOW }}">
                                Thấp
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="hype" value="{{ \App\Models\Coin::TYPE_MEDIUM }}">
                                Trung bình
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="hype" value="{{ \App\Models\Coin::TYPE_HIGH }}">
                                Cao
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="hype"  value="{{ \App\Models\Coin::TYPE_VERY_HIGH }}">
                                Rất Cao
                                </label>
                            </div>
                        </div>

                        <!-- Scam -->
                        <div class="form-group">
                            <label>Scam</label>
                            <div class="radio">
                                <label class="radio-inline">
                                <input type="radio" name="scam"  value="{{ \App\Models\Coin::TYPE_VERY_LOW }}" checked>
                                Rất thấp
                                </label>

                                <label class="radio-inline">
                                <input type="radio" name="scam" value="{{ \App\Models\Coin::TYPE_LOW }}">
                                Thấp
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="scam"  value="{{ \App\Models\Coin::TYPE_MEDIUM }}">
                                Trung bình
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="scam"  value="{{ \App\Models\Coin::TYPE_HIGH }}">
                                Cao
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="scam"  value="{{ \App\Models\Coin::TYPE_VERY_HIGH }}">
                                Rất Cao
                                </label>
                            </div>
                        </div>

                        <!-- Moom -->
                        <div class="form-group">
                            <label>Moom</label>
                            <div class="radio">
                                <label class="radio-inline">
                                <input type="radio" name="moom"  value="{{ \App\Models\Coin::TYPE_VERY_LOW }}" checked>
                                Rất thấp
                                </label>

                                <label class="radio-inline">
                                <input type="radio" name="moom"  value="{{ \App\Models\Coin::TYPE_LOW }}">
                                Thấp
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="moom"  value="{{ \App\Models\Coin::TYPE_MEDIUM }}">
                                Trung bình
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="moom"  value="{{ \App\Models\Coin::TYPE_HIGH }}">
                                Cao
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="moom"  value="{{ \App\Models\Coin::TYPE_VERY_HIGH }}">
                                Rất Cao
                                </label>
                            </div>
                        </div>

                        <!-- datepicker -->
                        <div class="form-inline">
                            <div class="form-group">
                                <label>Ngày bắt </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="start_date" class="form-control pull-right" id="start-date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ngày kết thúc</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="end_date" class="form-control pull-right" id="end-date">
                                </div>
                            </div>
                        </div>

                        <!-- stage -->
                        <div class="form-group">
                            <label>Trạng thái</label>
                            <div class="radio">
                                <label class="radio-inline">
                                <input type="radio" name="stage"  value="{{ \App\Models\Coin::TYPE_ENDED }}" checked>
                                ENDED
                                </label>

                                <label class="radio-inline">
                                <input type="radio" name="stage"  value="{{ \App\Models\Coin::TYPE_EXCHANGE }}">
                                EXCHANGE
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="stage" value="{{ \App\Models\Coin::TYPE_ICO }}">
                                ICO
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="stage" value="{{ \App\Models\Coin::TYPE_ICO_TODAY }}">
                                ICO TODAY
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="stage" value="{{ \App\Models\Coin::TYPE_SCAM }}">
                                SCAM
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Tạo mới</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection
@section('script')
<script>
    $(function () {
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5();
        //Date picker
        $('#start-date').datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true
        });
        $('#end-date').datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true
        });
    })
</script>
@endsection