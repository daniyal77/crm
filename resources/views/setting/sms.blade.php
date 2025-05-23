
* sms_key or login name and password just show melipayamak and kevenegar and ippanel
* sms create  pattern

@extends('partial.layout')
@section('title','تنظیمات sms')
@push('sidebar-open')
    @include('setting.sidebar')
@endpush
@section('content')
    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
        <div class="col-span-12 lg:col-span-12">
            <div class="card">
                <div class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                    <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                        تنظیمات sms
                    </h2>
                    <div class="flex justify-center space-x-2 space-x-reverse">
                        <button class="btn min-w-[7rem] rounded-lg  bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            ذخیره
                        </button>
                    </div>
                </div>
                <div class="p-4 sm:p-5">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-1">
                        <div class="">
                            <p>فعال سازی پنل پیامک </p>
                            <label class="inline-flex items-center mb-2  p-2  space-x-reverse space-x-2">
                                <input
                                        class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                        name="basic" type="radio"/>
                                <p>بلی</p>
                            </label>
                            <label class="inline-flex items-center  space-x-reverse space-x-2">
                                <input
                                        class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-secondary checked:bg-secondary hover:border-secondary focus:border-secondary dark:border-navy-400 dark:checked:border-secondary-light dark:checked:bg-secondary-light dark:hover:border-secondary-light dark:focus:border-secondary-light"
                                        name="basic" type="radio"/>
                                <p>خیر</p>
                            </label>
                        </div>
                    </div>
                    <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>
                    <div class="col-span-12 lg:col-span-4 mt-4">
                        <div class="card space-y-5 p-4 mt-4 sm:p-5">
                            <label class="block">
                                <span>سرویس دهنده فعال</span>
                                <span class="relative mt-1.5 flex">
                                      <select class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent">
                                          <option value="kavehNegar">کاوه نگار</option>
                                          <option value="ipPanel">سرویس دهنده هایی که از ip panel ساپورت میکنند</option>
                                          <option value="MeliPayamak">ملی پیامک</option>
                                      </select>
                                      <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="fa-solid fa-regular fa-credit-card"></i>
                                      </span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
