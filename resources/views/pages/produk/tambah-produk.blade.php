@extends('layouts.app')
@section('konten')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            @csrf
                            <div class="form-group col-md-3 col-sm-4 col-12">
                                <label for="exampleInputEmail1">Tipe Produk<code>*</code></label>
                                <div class="input-group">
                                    <select class="form-control form-control-sm" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">
                                        <code>Bisa Scan Barcode</code>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group col-md-3 col-sm-4 col-12">
                                <label for="exampleInputEmail1">Kode Barang <code>* (Bisa Scan Barcode)</code></label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                    </div>
                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">
                                        <code>Bisa Scan Barcode</code>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group col-md-6 col-sm-6  col-12">
                                <label for="exampleInputEmail1">Nama Barang <code>*</code></label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm">
                                    {{-- invalid --}}
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-th"></i></span>
                                    </div>
                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">
                                        Please enter a email address
                                    </span>
                                </div>
                            </div>

                            <div class="form-group col-md-3 col-sm-4 col-12">
                                <label for="exampleInputEmail1">Barcode Symbology<code>*</code></label>
                                <div class="input-group">
                                    <select class="form-control form-control-sm" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">
                                        <code>Bisa Scan Barcode</code>
                                    </span>
                                </div>
                            </div><div class="form-group col-md-3 col-sm-4 col-12">
                                <label for="exampleInputEmail1">Satuan<code>*</code></label>
                                <div class="input-group">
                                    <select class="form-control form-control-sm" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">
                                        <code>Bisa Scan Barcode</code>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-3 col-sm-4 col-12">
                                <label for="exampleInputEmail1">Kategori<code>*</code></label>
                                <div class="input-group">
                                    <select class="form-control form-control-sm" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">
                                        <code>Bisa Scan Barcode</code>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-3 col-sm-4 col-12">
                                <label for="exampleInputEmail1">Merk<code>*</code></label>
                                <div class="input-group">
                                    <select class="form-control form-control-sm" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">
                                        <code>Bisa Scan Barcode</code>
                                    </span>
                                </div>
                            </div>



                            <div class="form-group col-md-3 col-sm-4 col-12">
                                <label for="exampleInputEmail1">Harga Beli <code>*</code></label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                    </div>
                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">
                                        <code>Bisa Scan Barcode</code>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-3 col-sm-4 col-12">
                                <label for="exampleInputEmail1">Harga Jual <code>* </code></label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                    </div>
                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">
                                        <code>Bisa Scan Barcode</code>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-3 col-sm-4 col-12">
                                <label for="exampleInputEmail1">Stok Minimal <code>* </code></label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                    </div>
                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">
                                        <code>Bisa Scan Barcode</code>
                                    </span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="dropdown-divider">123</div>
                            </div>

                            <div class="form-group col-12">
                                <label for="exampleInputEmail1">Merk<code>*</code></label>
                                <textarea id="summernote" rows="10"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="p-1 card-body">

                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="/style/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/style/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/style/plugins/summernote/summernote-bs4.min.css">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="/style/plugins/codemirror/codemirror.css">
    <link rel="stylesheet" href="/style/plugins/codemirror/theme/monokai.css">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="/style/plugins/simplemde/simplemde.min.css">
@endpush
@push('js')
    <!-- Select2 -->
    <script src="/style/plugins/select2/js/select2.full.min.js"></script>


    <!-- Summernote -->
    <script src="/style/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- CodeMirror -->
    <script src="/style/plugins/codemirror/codemirror.js"></script>
    <script src="/style/plugins/codemirror/mode/css/css.js"></script>
    <script src="/style/plugins/codemirror/mode/xml/xml.js"></script>
    <script src="/style/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>

    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        });
    </script>
@endpush
