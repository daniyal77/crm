@extends('partial.layout')
@section('title','فایل کمکی css ,js')
@push('sidebar-open')
    @include('setting.sidebar')
@endpush
@section('content')
    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
        <div class="col-span-12 lg:col-span-12">
            <div class="card">
                <div class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                    <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">تنظیمات</h2>
                    <div class="flex justify-center space-x-2 space-x-reverse">
                        <button class="btn min-w-[7rem] rounded-lg  bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            ذخیره
                        </button>
                    </div>
                </div>
                <div class="p-4 sm:p-5">

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-1">
                        <label class="block">
                            <span>css</span>
                            <span class="relative mt-1.5 flex">
                              <textarea rows="10"
                                        class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                              ></textarea>
                            </span>
                        </label>
                    </div>
                    <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-1">
                        <label class="block">
                            <span>js</span>
                            <span class="relative mt-1.5 flex">
                              <textarea rows="10"
                                        class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                              ></textarea>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
