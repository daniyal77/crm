@extends('partial.layout')
@section('title','سوالات متداول')

@section('content')

    <div class="relative flex flex-col items-center justify-center">
        <div class="absolute right-0 top-0 -mt-8 hidden max-w-xs p-4 lg:block">
            <img src="{{asset('images/illustrations/help.svg')}}" alt="image"/>
        </div>
        <h2
            class="mt-8 text-xl font-medium text-slate-600 dark:text-navy-100 lg:text-2xl">
            چگونه می‌توانیم به شما کمک کنیم؟
        </h2>
            <form action="{{ route('faq.search') }}" class="relative mt-6 w-full max-w-md">
                <input name="search"
                       class="form-input peer h-12 w-full rounded-full border border-slate-300 bg-slate-50 px-4 py-2 pr-9 text-base placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-900 dark:hover:border-navy-400 dark:focus:border-accent"
                       placeholder="سوال خود را جستجو کنید"
                       type="text"
                />
                <button
                    class="absolute right-0 top-0 flex h-12 w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
        </form>
    </div>

    <div class="mt-20 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
        @include('faq.sidebar')
        <div class="col-span-12 lg:col-span-8 xl:col-span-9">
            @foreach( $result as $key => $record)
                <div x-data="{ expanded: false }">
                    <div class="card mt-2">
                        <div class="flex cursor-pointer items-center justify-between p-4"
                             @click="expanded = !expanded">
                            <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                {{$record->title}}
                            </h3>
                            <div :class="expanded && '-rotate-180'"
                                 class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div x-collapse x-show="expanded">
                            <div class="px-4 pb-4">
                                {!! $record->intro !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
