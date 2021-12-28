<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="../../template/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../template/dist/css/adminlte.min.css">

<!-- jQuery -->
<script src="../../template/plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4 -->
<script src="../../template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../template/dist/js/adminlte.min.js"></script>
</head>
<body>
    <form action="" method="POST">
        <div class="card-body">
            <!-- <div class="form-group">
                <label for="menu">Mã sản phẩm</label>
                <input type="text" class="form-control" id="id" name="id" value="{{$menu->id}}">
            </div> -->

            <div class="form-group">
                <label for="menu">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$menu->name}}">
            </div>

            <div class="form-group">
                <label for="menu">Mô tả</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$menu->description}}">
            </div>

            <div class="form-group">
                <label for="inputFile">Chọn hình</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputFile" name="inputFile">
                        <label class="custom-file-label" for="inputFile">Chọn hình</label>
                        </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>
            
            </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        @csrf
    </form>
    @include('footer')
</body>