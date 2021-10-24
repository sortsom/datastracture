@extends('admins.layouts.default')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ស្វែងរកបុគ្គលិក</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="contain-fluid">
                       <div class="card mt-2">
                           <div class="card-body">
                               <div class="row mt-0">
                                   <div class="col-md-3">
                                       <div class="input-group input-group-sm mb-3">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text" id="inputGroup-sizing-sm">លេខសំងាត់</span>
                                           </div>
                                           <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                       </div>
                                   </div>
                                   <div class="col-md-3">
                                       <div class="input-group input-group-sm mb-3">
                                           <div class="input-group-prepend">
                                               <label class="input-group-text" for="inputGroupSelect01">តួនាទី</label>
                                           </div>
                                           <select class="custom-select" id="inputGroupSelect01">
                                               <option selected>Choose...</option>
                                               <option value="1">One</option>
                                               <option value="2">Two</option>
                                               <option value="3">Three</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="col-md-3">
                                       <div class="input-group input-group-sm mb-3">
                                           <div class="input-group-prepend">
                                               <label class="input-group-text" for="inputGroupSelect01">ភេទ</label>
                                           </div>
                                           <select class="custom-select" id="inputGroupSelect01">
                                               <option selected>Choose...</option>
                                               <option value="1">One</option>
                                               <option value="2">Two</option>
                                               <option value="3">Three</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="col-md-3">
                                       <div class="input-group input-group-sm mb-3">
                                           <div class="input-group-prepend">
                                               <label class="input-group-text" for="inputGroupSelect01">ប្រព័ន្ធអប់រំ</label>
                                           </div>
                                           <select class="custom-select" id="inputGroupSelect01">
                                               <option selected>Choose...</option>
                                               <option value="1">One</option>
                                               <option value="2">Two</option>
                                               <option value="3">Three</option>
                                           </select>
                                       </div>
                                   </div>

                               </div>
                               <div class="row mt-2">
                                   <div class="col-md-3">
                                       <div class="input-group input-group-sm mb-3">
                                           <div class="input-group-prepend">
                                               <label class="input-group-text" for="inputGroupSelect01">ឆ្នាំសិក្សា</label>
                                           </div>
                                           <select class="custom-select" id="inputGroupSelect01">
                                               <option selected>Choose...</option>
                                               <option value="1">One</option>
                                               <option value="2">Two</option>
                                               <option value="3">Three</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="col-md-3">
                                       <div class="input-group input-group-sm mb-3">
                                           <div class="input-group-prepend">
                                               <label class="input-group-text" for="inputGroupSelect01">ប្រភេទអប់រំ</label>
                                           </div>
                                           <select class="custom-select" id="inputGroupSelect01">
                                               <option selected>Choose...</option>
                                               <option value="1">One</option>
                                               <option value="2">Two</option>
                                               <option value="3">Three</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="col-md-3">
                                       <div class="input-group input-group-sm mb-3">
                                           <div class="input-group-prepend">
                                               <label class="input-group-text" for="inputGroupSelect01">កម្រិត</label>
                                           </div>
                                           <select class="custom-select" id="inputGroupSelect01">
                                               <option selected>Choose...</option>
                                               <option value="1">One</option>
                                               <option value="2">Two</option>
                                               <option value="3">Three</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="col-md-3">
                                       <div class="input-group input-group-sm mb-3">
                                           <div class="input-group-prepend">
                                               <label class="input-group-text" for="inputGroupSelect01">ថ្នាក់ជាតិ</label>
                                           </div>
                                           <select class="custom-select" id="inputGroupSelect01">
                                               <option selected>Choose...</option>
                                               <option value="1">One</option>
                                               <option value="2">Two</option>
                                               <option value="3">Three</option>
                                           </select>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-sm-6 mb-2">
                                       <button type="button" class="btn btn-primary"><a href="{{ route('admin.teachers.index') }}" class=" text text-white"><i class="fas fa-plus-circle"></i>ចុះឈ្មោះ</a></button>
                                       <button type="button" class="btn btn-primary"><a href="#" class=" text text-white"><i class="fas fa-cloud-upload-alt"></i>នាំចេញទៅកាន់ Excel</a></button>
                                       <button type="button" class="btn btn-primary"><a href="#" class=" text text-white"><i class="fas fa-print"></i>បោះពុម្ភ</a></button>
                                   </div><!-- /.col -->
                                   <div class="col-sm-6">
                                       <ol class="breadcrumb float-sm-right">
                                           <button type="button" class="btn btn-primary"><a href="#" class=" text text-white"><i class="fas fa-search"></i>ស្វែងរក</a></button>
                                       </ol>
                                   </div><!-- /.col -->
                               </div><!-- /.row -->
                           </div>
                           </div>
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">រូបភាព</th>
                                            <th scope="col">ឈ្មោះ</th>
                                            <th scope="col">ព័ត៌មានច្រើនទៀត</th>
                                            <th scope="col">ក្របខណ្ឌ</th>
                                            <th scope="col">តួនាទី</th>
                                            <th scope="col">ថ្នាក់</th>
                                            <th scope="col">ព័ត៌មានបន្ថែម</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>Thornton</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@stop
