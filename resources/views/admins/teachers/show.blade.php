@extends('admins.layouts.default')
@section('content')
   <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 mt-2">
                <button type="button" class="btn btn-primary"><a href="{{route('admin.searchteachers.index') }}" class=" text text-white"><i class="fas fa-arrow-circle-left "></i>បុគ្គលិក</a></button>
                <div class="profile">
                    <div class="outer-image">
                        <img class="round-image" src="https://yt3.ggpht.com/-GhFCaSPC3Ns/AAAAAAAAAAI/AAAAAAAAAAA/lyBDET_Q8lo/s900-c-k-no-mo-rj-c0xffffff/photo.jpg" height="50%"  width="50%" style="border-radius: 50%; margin-left: 10vh" alt=""></div>
                    <div class="header">
                        <p>Sort Som</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ព័ត៌មានផ្ទាល់ខ្លួន</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">ព័ត៌មានបន្ថែម</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">បញ្ជីអវត្តមាន</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">បញ្ជីនៃវិន័យ</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">ផ្លាស់ប្តូរពាក្យសម្ងាត់</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
{{-- ព័ត៌មានផ្ទាល់ខ្លួន--}}
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                    </div>
{{-- ព័ត៌មានបន្ថែម --}}
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                    </div>
{{--បញ្ជីអវត្តមាន--}}
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                    </div>
{{-- បញ្ជីនៃវិន័យ--}}
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                    </div>
{{-- ផ្លាស់ប្តូរពាក្យសម្ងាត់--}}
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                    </div>
                </div>
            </div>
        </div>
       </div>
@stop
