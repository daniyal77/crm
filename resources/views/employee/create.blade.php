

د)توانمندی هاومهارتها
1- در کدامیک از زمینه های زیر تخصص ومهارت دارید؟ لطفا سطح مهارت، رشته دقیق،نوع مدرک یا گواهینامه را نیز ذکر فرمایید.
هنری ⃝       ................................................................................. پژوهشی ⃝      ...............................................................................
ورزشی⃝      ...............................................................................  فرهنگی  ⃝      ...............................................................................
علمی  ⃝      ................................................................................. مشاوره  ⃝      .................................................................................
اردویی⃝      ................................................................................  بهداشتی ⃝      ...............................................................................
اداری ⃝       ................................................................................. آموزشی  ⃝      ................................................................................
مدیریت ⃝     ................................................................................ سایر موارد⃝      .............................................................................
مهارت باسیستم کامپیوتر                        میزان مهارت
............................................                     .....................................
............................................                     .....................................


سوال ویژه خواهران
پوشش شما چه می باشد ؟ چادر ⃝       مانتو⃝
درصورتی که پوشش شما چادراست قید بفرمایید؟ دائماپوشش شما چادراست ⃝      برخی اوقات ⃝


ه)زمان و نوع همکاری
1-    لطفا زمان هایی را که در طول هفته می توانید به این انجمن  اختصاص دهید بیان کنید( دقیقا علامت بزنید)

شنبه    یکشنبه    دوشنبه    سه شنبه    چهارشنبه    پنج شنبه    جمعه
صبح ⃝    عصر⃝    صبح⃝    عصر⃝    صبح⃝    عصر⃝    صبح⃝    عصر⃝    صبح⃝    عصر⃝    صبح⃝    عصر⃝    صبح⃝    عصر⃝
2-    نحوه همکاری خود را با انجمن بیان کنید در صورتیکه هر روز و ازساعت 8تا14:30 همکاری نمائید.
بدون دریافت حقوق  ⃝       500-0   ⃝      1000-500  ⃝       1500-1000  ⃝      بالاتر از 1500  ⃝
3-    درخصوص بیمه : حتما بیمه شوم   ⃝      بهتر است بیمه شوم  ⃝      اصراری ندارم⃝      بازنشسته هستم  ⃝      بیمه خانواده ام می باشم ⃝       نمیخواهم بیمه شوم⃝      سابقه بیمه دارم  ⃝      مدت سابقه .....................................


اینجانب :.............................................. با آگاهی کامل از شرایط مجموعه و تمام اهداف و برنامه ها، آمادگی خود را جهت همکاری با انجمن اعلام می نمایم ومتعهد می گردم نسبت به تمامی ضوابط پایبند باشم.


@extends('partial.layout')
@section('title','تنظیمات عمومی')
@push('sidebar-open')
    @include('employee.sidebar')
@endpush
@section('content')
    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
        <div class="col-span-12 lg:col-span-12">
            <form action="{{route('setting.store')}}" method="post" class="card">
                <div
                        class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                    @csrf
                    <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">ایجاد کارمند
                        جدید</h2>
                    <div class="flex justify-center space-x-2 space-x-reverse">
                        <button
                                class="btn min-w-[7rem] rounded-lg  bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            ذخیره
                        </button>
                    </div>
                </div>
                <div class="p-4 sm:p-5">

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
                        <label class="block">
                            <span>نام</span>
                            <span class="relative mt-1.5 flex">
                              <input name="name_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <i class="fa-regular fa-user text-base"></i>
                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>نام خانوادگی</span>
                            <span class="relative mt-1.5 flex">
                              <input name="name_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <i class="fa-regular fa-user text-base"></i>
                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>نام پدر</span>
                            <span class="relative mt-1.5 flex">
                              <input name="email_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <i class="fa-regular fa-envelope text-base"></i>
                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>کد ملی</span>
                            <span class="relative mt-1.5 flex">
                              <input name="phone_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <i class="fa fa-phone"></i>
                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>تاریخ تولد</span>
                            <span class="relative mt-1.5 flex">
                              <input name="province_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                               <i class="fa-solid fa-map-location  text-base"></i>
                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>محل تولد</span>
                            <span class="relative mt-1.5 flex">
                              <input name="city_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <i class="fa-solid fa-location-dot text-base"></i>
                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>وضعیت تاهل</span>
                            <span class="relative mt-1.5 flex">
                              <input name="postal_code_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                              <i class="fa-solid fa-house"></i>

                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>شغل همسر</span>
                            <span class="relative mt-1.5 flex">
                              <input name="postal_code_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                              <i class="fa-solid fa-house"></i>

                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>تعداد فرزندان</span>
                            <span class="relative mt-1.5 flex">
                              <input name="postal_code_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                              <i class="fa-solid fa-house"></i>

                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>شغل همسر</span>
                            <span class="relative mt-1.5 flex">
                              <input name="postal_code_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                              <i class="fa-solid fa-house"></i>

                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>محل سکونت </span>
                            <span class="relative mt-1.5 flex">
                              <input name="postal_code_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                              <i class="fa-solid fa-house"></i>

                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>آدرس</span>
                            <span class="relative mt-1.5 flex">
                              <textarea name="postal_code_site"
                                        class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                              ></textarea>
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                              <i class="fa-solid fa-house"></i>

                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>تلفن همراه</span>
                            <span class="relative mt-1.5 flex">
                              <input name="postal_code_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                              <i class="fa-solid fa-house"></i>

                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>تلفن ثابت</span>
                            <span class="relative mt-1.5 flex">
                              <input name="postal_code_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                              <i class="fa-solid fa-house"></i>

                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>نام معرف</span>
                            <span class="relative mt-1.5 flex">
                              <input name="postal_code_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                              <i class="fa-solid fa-house"></i>

                              </span>
                            </span>
                        </label>
                    </div>
                    <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-1">
                        <label class="block">
                            <span>جه میزان از انجمن شناخت دارید و چه کسانی را میشناسید</span>
                            <span class="relative mt-1.5 flex">
                              <textarea rows="10"
                                        class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                              ></textarea>
                            </span>
                        </label>
                    </div>
                    <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-1">
                        <div class="">
                            <p>درحال تحصیل هستید</p>
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
                        <label class="block">
                            <span>میزان تحصیلات</span>
                            <span class="relative mt-1.5 flex">
                              <input name="name_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <i class="fa-regular fa-user text-base"></i>
                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>رشته </span>
                            <span class="relative mt-1.5 flex">
                              <input name="name_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <i class="fa-regular fa-user text-base"></i>
                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>نوع دیپلم </span>
                            <span class="relative mt-1.5 flex">
                              <input name="name_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <i class="fa-regular fa-user text-base"></i>
                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>محل تحصیل</span>
                            <span class="relative mt-1.5 flex">
                              <input name="name_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <i class="fa-regular fa-user text-base"></i>
                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span> نام دانشگاه</span>
                            <span class="relative mt-1.5 flex">
                              <input name="name_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <i class="fa-regular fa-user text-base"></i>
                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span> نوع دانشگاه</span>
                            <span class="relative mt-1.5 flex">
                              <input name="name_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <i class="fa-regular fa-user text-base"></i>
                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>شهر</span>
                            <span class="relative mt-1.5 flex">
                              <input name="name_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <i class="fa-regular fa-user text-base"></i>
                              </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>معدل</span>
                            <span class="relative mt-1.5 flex">
                              <input name="name_site"
                                     class="form-input peer w-full rounded-lg  border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                     type="text">
                              <span
                                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <i class="fa-regular fa-user text-base"></i>
                              </span>
                            </span>
                        </label>
                        <div class="">
                            <p>قصد ادامه تحصیل دارید</p>
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



                    ج) سابقه شغلی
                    1- آیا قبلا در مرکزی مشغول به فعالیت بوده اید؟خیر⃝     بلی ⃝     چه مدت ؟..................   چند ساعت درهفته.......................
                    نوع کار..................................آیا آن کار ادامه دارد؟بلی  ⃝       خیر  ⃝       اگر خیر علت را ذکر فرمائید؟........................................................   حدود حقوق..................................................آیا بیمه بوده اید؟....................... تاریخ ترک کار..../...../.....
                    آدرس محل کار: .................................................................................................................................................تلفن:..............................................
                    2- آیا هم اکنون درجایی مشغول به فعالیت هستید؟خیر  ⃝       بلی  ⃝       درکجا؟.........................................................................
                    ازچه تاریخی: ....../....../...... نوع کار:...................................................................................... چند روز در هفته.............................................
                    آدرس محل کار:.......................................................................................................................................................تلفن :......................................


                    <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-1">
                        <div class="filepond fp-bg-filled label-icon w-20">
                            <p class="mb-2  p-2">لوگو</p>
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el,{
                                    stylePanelAspectRatio: '1:1',
                                    stylePanelLayout: 'compact circle',
                                    labelIdle: `<svg xmlns='http://www.w3.org/2000/svg' class='size-8' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                      <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12'/>
                                    </svg>`
                                  })" accept="image/png, image/jpeg,"/>
                        </div>
                        <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>
                        <div class="filepond fp-bg-filled label-icon w-20">
                            <p class="mb-2  p-2"> فاوآیکون</p>
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el,{
                                    stylePanelAspectRatio: '1:1',
                                    stylePanelLayout: 'compact circle',
                                    labelIdle: `<svg xmlns='http://www.w3.org/2000/svg' class='size-8' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                      <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12'/>
                                    </svg>`
                                  })" accept="image/png, image/jpeg"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop