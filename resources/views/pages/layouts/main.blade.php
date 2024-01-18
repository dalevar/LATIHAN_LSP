<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Gallery</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Sidebar -->
            @include('pages.partials.sidebar')
            <!-- End Sidebar -->

            <!-- Main Content -->
            <div class="col py-3">
                <div class="container">
                    @yield('content')
                </div>
            </div>
            <!-- End Main Content -->
        </div>
    </div>

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">HAPUS PRODUK</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    apakah anda yakin ingin menghapus produk ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Hapus Barang</button>

                </div>
            </div>
        </div>
    </div> --}}

    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
