<head>
    @include('head')
</head>
<body>
    <div class="card-body">
        <div class="d-flex flex-row-reverse">
        <a href=" {{ route('menus.add') }}" style="height: 40" class="w-25"><button type="button"   class="btn btn-block btn-success   "  >Create <i class="fas fa-plus-circle"></i></button></a>
            <p class="login-box-msg">Create your Products to Open ur shop</p>
        </div>
        <table id="example" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>More</th>
                </tr>
            </thead>
            <tbody>
                <script>
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    function removeProd(id, url) {
                        if (confirm('Xóa và không thể khôi phục. Bạn có chắc ?')) {
                            var tr = $(this).closest("tr");
                            $.ajax({
                                type: 'DELETE',
                                datatype: 'JSON',
                                data: { id },
                                url: url,
                                success: function (result) {
                                    if (result.error !== false) {
                                        console.log("Xóa thành công!")
                                    } else {
                                        console.log("Xóa không thành công!")
                                    }
                                    location.reload();
                                }
                            })
                        }
                    }

                </script>
                {!! \App\Helpers\Helper::getMenu($menus) !!}
            </tbody>
        </table>
    </div>
    @include('footer')
</body>