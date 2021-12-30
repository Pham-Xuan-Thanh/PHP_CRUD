<head>
    @include('head')
</head>
<body>
    <form action="" method="POST">
        <div class="card-body">
            <!-- <div class="form-group">
                <label for="menu">Mã sản phẩm</label>
                <input type="text" class="form-control" id="id" name="id" placeholder="Nhập mã sản phẩm">
            </div> -->

            <div class="form-group">
                <label for="menu">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm">
            </div>

            <div class="form-group">
                <label for="menu">Mô tả</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Nhập mô tả cho sản phẩm">
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