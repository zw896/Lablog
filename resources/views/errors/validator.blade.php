<!-- 所有的错误提示 -->
@if(count($errors))
    <div class="box box-danger">
        <!-- /.box-header -->
        <div class="box-body">
            @foreach($errors->all() as $error)
                <p class="text-danger">
                    <i class='fa fa-times-circle'></i> {{ $error }}
                </p>
            @endforeach
        </div>
        <!-- /.box-body -->
    </div>
@endif

