@extends('layouts.app')
@section('konten')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="p-0 card-header">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                            <i class="mr-2 fas fa-reply"></i>
                            Kembali
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-success btn-sm">
                                <i class="mr-2 far fa-save"></i>
                                Simpan
                            </button>
                            <button type="button" class="btn btn-primary btn-sm">
                                <i class="mr-2 fas fa-plus"></i>
                                Tambah
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm">
                            <i class="fas fa-sync-alt"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            @csrf
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Barang *</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control form-control-sm" id="inputEmail3"
                                            placeholder="Kode Barang">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Barang</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control form-control-sm" id="inputEmail3"
                                            placeholder="Nama Barang">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Satuan</label>
                                    <div class="col-sm-9">
                                        <select class="form-control form-control-sm select2" style="width: 100%;">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-9">
                                        <select class="form-control form-control-sm select2" style="width: 100%;">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Barang</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control form-control-sm" id="inputEmail3"
                                            placeholder="Nama Barang">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Barangs</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control form-control-sm" id="inputEmail3"
                                            placeholder="Nama Barang">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-5 col-sm-6 col-12">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Barang</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control form-control-sm" id="inputEmail3"
                                            placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-5 col-sm-6 col-12">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Barang</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control form-control-sm" id="inputEmail3"
                                            placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-5 col-sm-6 col-12">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Barang</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control form-control-sm" id="inputEmail3"
                                            placeholder="Email">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="/style/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/style/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endpush
@push('js')
    <!-- Select2 -->
    <script src="/style/plugins/select2/js/select2.full.min.js"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });
    @endpush
