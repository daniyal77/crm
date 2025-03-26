@extends('partial.layout')
@section('title','گزارش عملکرد')
@section('content')
    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">

        <div class="card">
            <div class="my-3 flex items-center justify-between px-4 sm:px-5">
                <form action="" class="w-full" method="post">
                    <label class="block">توضحیات
                        <textarea rows="4" placeholder="توضیحات مربوط به گزارش عملکرد را وارد نمایید"
                                  class="form-textarea w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"></textarea>
                    </label>
                    <div class="filepond fp-bordered">
                        <input
                            type="file"
                            x-init="$el._x_filepond = FilePond.create($el)"
                            multiple
                        />
                    </div>
                    <div class="flex justify-center space-x-2 space-x-reverse">
                        <button
                            class="btn min-w-[7rem] rounded-lg  bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            ذخیره
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card pb-4">
            <div>
                <div class="my-3 flex items-center justify-between px-4 sm:px-5">
                </div>
                <div
                    x-init="$el.grid = new Gridjs.Grid({
                          pagination: true,
                          search: {
                            server: {
                              url: (prev, keyword) => `${prev}?search=${keyword}`
                            }
                          },
                          sort:true,
                          columns: ['#', 'توضیحات', 'لینک'],
                          server: {
                            url: 'https://swapi.py4e.com/api/films/',
                            then: data => data.results.map(movie => [movie.title, movie.director, movie.producer])
                          }
                        }).render($el);"
                ></div>
            </div>
        </div>
    </div>
@stop
