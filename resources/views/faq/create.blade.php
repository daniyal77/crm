@extends('partial.layout')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/quill.min.css')}}">
@endpush
@section('content')

    <main class="nxl-container apps-container apps-tasks">
        <div class="nxl-content without-header nxl-full-content">
            <div class="main-content d-flex">
                <div class="content-area" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-area-body">
                        <div class="card stretch stretch-full">
                            <a href="javascript:void(0);" class="card-header" data-bs-toggle="collapse"
                               data-bs-target="#tasks_collapse_1">
                                <h5 class="mb-0">راهنمای جدید</h5>
                            </a>
                            <div class="card-body collapse show" id="tasks_collapse_1">
                                <form action="{{ route('faq.store') }}" method="post">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="title" class="form-label">عنوان</label>
                                        <input type="text" id="title" class="form-control"
                                             name="title"  placeholder="عنوان را وارد نمایید">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">توضیحات</label>
                                        <div class="editor">
                                            <div  class="ht-150 w-100" id="notesEditorAdd"></div>
                                        </div>
                                    </div>
                                    <button class="btn btn-block btn-success">ثبت</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('js')
    <script src="{{asset('assets/vendors/js/quill.min.js')}}"></script>
    <script src="{{asset('assets/js/apps-tasks-init.min.js')}}"></script>
@endpush
