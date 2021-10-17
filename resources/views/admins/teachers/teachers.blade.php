@extends('admins.layouts.default')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ចុះឈ្មោះ</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container-fluid">
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <h1 class="m-0">បន្ថែមធាតុថ្មី</h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right ">
                                       <button class="btn btn-secondary  "><a href="{{ route('admin.searchteachers.index') }}" class="text-white"><i class="fas fa-arrow-circle-left"></i>ត្រឡប់វិញ</a></button>
                                        <button class="btn btn-danger ml-2"><a href="#" class="text-white"><i class="far fa-save"></i>រក្សាទុក</a></button>
                                    </ol>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div>
                        <div class="container mt-5">
                            <div class="row">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">នាមត្រកូល</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="នាមត្រកូល">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">នាមខ្លួន</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="នាមខ្លួន">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">នាមត្រកូលឡាតាំង</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="នាមត្រកូលឡាតាំង">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">នាមខ្លួនឡាតាំង</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="នាមខ្លួនឡាតាំង">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">ឈ្មោះហៅក្រៅ</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="ឈ្មោះហៅក្រៅ">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">ភេទ</label>
                                    </div>
                                    <label for="inputGroup-sizing-sm"></label>
                                    <select class="custom-select" id="inputGroup-sizing-sm">
                                        <option selected>ជ្រើសរើស...</option>
                                        <option value="1">ប្រុស</option>
                                        <option value="2">ស្រី</option>
                                        <option value="3">other</option>
                                    </select>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">ថ្ងៃខែឆ្នាំកំណើត</span>
                                    </div>
                                    <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">លេខទូរសព្ទ</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="លេខទូរសព្ទ">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">អាសយដ្ឋានអ៊ីម៉ែល</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="អ៊ីម៉ែល">
                                </div>
                                <div class="input-group input-group-xl mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">រូបភាព</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">ជ្រើសរើសរូបភាព</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">មុខងារនិងតួនាទី</label>
                                    </div>
                                    <label for="inputGroup-sizing-sm"></label>
                                    <select class="custom-select" id="inputGroup-sizing-sm">
                                        <option selected>ជ្រើសរើស...</option>
                                        <option value="1">Admin</option>
                                        <option value="2">teacher</option>
                                        <option value="3">other</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@stop
