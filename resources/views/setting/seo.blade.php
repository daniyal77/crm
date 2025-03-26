@extends('partial.layout')
@section('title','تنظیمات سثو')
@push('sidebar-open')
    @include('setting.sidebar')
@endpush
@section('content')
    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
        <div class="col-span-12 lg:col-span-12">
            <div class="card">
                <div class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                    <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                        تنظیمات سثو
                    </h2>
                    <div class="flex justify-center space-x-2 space-x-reverse">
                        <button class="btn min-w-[7rem] rounded-lg  bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            ذخیره
                        </button>
                    </div>
                </div>
                <div class="p-4 sm:p-5">
                    <div class="col-span-12 lg:col-span-4 mt-4">
                        <div class="card space-y-5 p-4 mt-4 sm:p-5">
                            <label class="block">
                                <span>عنوان پیش‌فرض سایت</span>
                                <span class="relative mt-1.5 flex">
                                      <input
                                              class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                              type="text">

                                </span>
                            </label>
                            <label class="block">
                                <span>توضیحات پیش‌فرض متا</span>
                                <span class="relative mt-1.5 flex">
                                      <textarea cols="10"
                                              class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                      ></textarea>

                                </span>
                            </label>
                            <label class="block">
                                <span> کلمات کلیدی متا </span>
                                <span class="relative mt-1.5 flex">
                                      <input
                                              class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                              type="text">
                                </span>
                            </label>
                            <div class=" space-y-5 p-4 mt-4 sm:p-5">
                                <div class="filepond fp-bg-filled label-icon w-20">
                                    <p class="mb-2  p-2">تصویر پیش‌فرض</p>
                                    <input class="cursor-pointer" type="file" x-init="$el._x_filepond = FilePond.create($el,{
                                    stylePanelAspectRatio: '1:1',
                                    stylePanelLayout: 'compact circle',
                                    labelIdle: `<svg xmlns='http://www.w3.org/2000/svg' class='size-8' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                      <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12'/>
                                    </svg>`
                                  })" accept="image/png, image/jpeg,"/>
                                </div>
                            </div>
                            <label class="block">
                                <span> Google Search Console Verification</span>
                                <span class="relative mt-1.5 flex">
                                      <input
                                              class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                              type="text">

                                </span>
                            </label>
                            <label class="block">
                                <span> Bing Webmaster Tools</span>
                                <span class="relative mt-1.5 flex">
                                      <input
                                              class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                              type="text">
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
