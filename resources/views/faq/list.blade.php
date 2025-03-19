@extends('partial.layout')
@section('content')
    <main class="nxl-container">
        <div class="nxl-content pt-0">
            <!-- [ page-header ] start -->
            <div class="row g-0 align-items-center border-bottom help-center-content-header">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2 class="fw-bolder mb-2 text-dark">راهنما</h2>
                   <div class="">
                       <a class="btn btn-primary mt-2 d-inline-block mx-auto" href="{{route('faq.create')}}">جدید</a>
                   </div>
                    <p class="text-muted">برنامه های کاربردی وب برتر با پایگاه دانش یکپارچه.</p>
                    <form action="javascript:void(0);" class="my-4 d-none d-sm-block search-form">
                        <div class="input-group select-wd-sm">
                            <input type="text" class="form-control w-25"
                                   placeholder="کلمه کلیدی یا سوال خود را اینجا وارد کنید...">
                            <button type="submit" class="btn btn-primary">
                                <i class="feather-search"></i>
                                <span class="ms-2">جستجو</span>
                            </button>
                        </div>
                    </form>
                </div>
                <!--! ================================================================ !-->
                <!--! END: Content Sub Header [content-sub-header] !-->
                <!--! ================================================================ !-->
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content container-lg px-4 help-center-main-contet-area overflow-visible">
                <!--! BEGIN: [help-quick-card] !-->
                <div class="row help-quick-card">
                    <div class="col-lg-4">
                        <div class="card mb-4 mb-lg-0">
                            <div class="card-body p-5">
                                <div class="wd-50 ht-50 d-flex align-items-center justify-content-center mb-5">
                                    <img src="../../assets/images/icons/line-icon/idea.png" class="img-fluid" alt="">
                                </div>
                                <h2 class="fs-16 fw-bold mb-3">لورم</h2>
                                <p class="fs-12 fw-medium text-muted text-truncate-3-line">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                    فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                    کتابهای
                                    زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا
                                    با
                                    نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ
                                    پیشرو
                                    در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در
                                    ارائه
                                    راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی
                                    و
                                    جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                <a href="javascript:void(0);" class="fs-12">مشاهده بیشتر &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-4 mb-lg-0">
                            <div class="card-body p-5">
                                <div class="wd-50 ht-50 d-flex align-items-center justify-content-center mb-5">
                                    <img src="../../assets/images/icons/line-icon/idea.png" class="img-fluid" alt="">
                                </div>
                                <h2 class="fs-16 fw-bold mb-3">لورم</h2>
                                <p class="fs-12 fw-medium text-muted text-truncate-3-line">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                    فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                    کتابهای
                                    زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا
                                    با
                                    نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ
                                    پیشرو
                                    در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در
                                    ارائه
                                    راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی
                                    و
                                    جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                <a href="javascript:void(0);" class="fs-12">مشاهده بیشتر &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-4 mb-lg-0">
                            <div class="card-body p-5">
                                <div class="wd-50 ht-50 d-flex align-items-center justify-content-center mb-5">
                                    <img src="../../assets/images/icons/line-icon/idea.png" class="img-fluid" alt="">
                                </div>
                                <h2 class="fs-16 fw-bold mb-3">لورم</h2>
                                <p class="fs-12 fw-medium text-muted text-truncate-3-line">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک
                                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                    فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                    کتابهای
                                    زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا
                                    با
                                    نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ
                                    پیشرو
                                    در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در
                                    ارائه
                                    راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی
                                    و
                                    جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                <a href="javascript:void(0);" class="fs-12">مشاهده بیشتر &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="topic-tranding-section">
                    <div class="d-flex flex-column align-items-center justify-content-center mb-5">
                        <h2 class="fs-20 fw-bold mb-3">آموزش ها</h2>
                        <p class="px-5 mx-5 text-center text-muted text-truncate-3-line">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card border rounded-3 mb-3 overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                            <i class="feather-file-text"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="text-truncate-1-line"
                                           data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">How to
                                            upload
                                            data to the system?</a>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm me-3"
                                       data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card border rounded-3 mb-3 overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                            <i class="feather-file-text"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="text-truncate-1-line"
                                           data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">How to
                                            draw a
                                            land plot on a map?</a>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm me-3"
                                       data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card border rounded-3 mb-3 overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                            <i class="feather-file-text"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="text-truncate-1-line"
                                           data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">How to to
                                            view expire services?</a>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm me-3"
                                       data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card border rounded-3 mb-3 overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                            <i class="feather-file-text"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="text-truncate-1-line"
                                           data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">How to
                                            integrate new web applications?</a>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm me-3"
                                       data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card border rounded-3 mb-3 overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                            <i class="feather-file-text"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="text-truncate-1-line"
                                           data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">How do I
                                            set
                                            the geometry of an object?</a>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm me-3"
                                       data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card border rounded-3 mb-3 overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                            <i class="feather-file-text"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="text-truncate-1-line"
                                           data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">How to
                                            filter
                                            object on the map?</a>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm me-3"
                                       data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card border rounded-3 mb-3 overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                            <i class="feather-file-text"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="text-truncate-1-line"
                                           data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">How to
                                            count
                                            the number of document in the register?</a>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm me-3"
                                       data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card border rounded-3 mb-3 overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                            <i class="feather-file-text"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="text-truncate-1-line"
                                           data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">How to
                                            upload
                                            data to the system?</a>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm me-3"
                                       data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card border rounded-3 mb-3 overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                            <i class="feather-file-text"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="text-truncate-1-line"
                                           data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">How to
                                            draw a
                                            land plot on a map?</a>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm me-3"
                                       data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card border rounded-3 mb-3 overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                            <i class="feather-file-text"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="text-truncate-1-line"
                                           data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">How to to
                                            view expire services?</a>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm me-3"
                                       data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card border rounded-3 mb-3 overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                            <i class="feather-file-text"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="text-truncate-1-line"
                                           data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">How to
                                            integrate new web applications?</a>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm me-3"
                                       data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card border rounded-3 mb-3 overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                            <i class="feather-file-text"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="text-truncate-1-line"
                                           data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">How do I
                                            set
                                            the geometry of an object?</a>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm me-3"
                                       data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card border rounded-3 mb-3 overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                            <i class="feather-file-text"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="text-truncate-1-line"
                                           data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">How to
                                            filter
                                            object on the map?</a>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm me-3"
                                       data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card border rounded-3 mb-3 overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                            <i class="feather-file-text"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="text-truncate-1-line"
                                           data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">How to
                                            count
                                            the number of document in the register?</a>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm me-3"
                                       data-bs-toggle="offcanvas" data-bs-target="#topicsDetailsOffcanvas">
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <!-- [ Main Content ] end -->
        </div>
    </main>

    <div class="offcanvas offcanvas-end topics-details-offcanvas" tabindex="-1" id="topicsDetailsOffcanvas"
         aria-labelledby="topicsDetailsOffcanvas">
        <div class="offcanvas-header border-bottom px-4">

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="p-lg-5 mx-lg-5 help-center details-content-body">
                <h2 class="fs-18">How to filter object on the map?</h2>
                <p class="fs-12 text-muted">Last Updates: <span class="text-dark fw-medium">26 May, 2023</span></p>
                <hr class="my-4">
                <h4 class="fs-14">Hey there...!!!</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda consectetur illo
                    at placeat cum nulla repellat expedita nostrum praesentium blanditiis repudiandae commodi tempore
                    debitis odio, doloremque magni eaque soluta cupiditate ullam harum, necessitatibus sunt voluptas eum
                    laboriosam. Consequatur nobis fuga fugiat deleniti veritatis sint, suscipit magni tempora labore. Neque,
                    eaque?</p>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda consectetur illo
                    at placeat cum nulla repellat expedita nostrum praesentium blanditiis repudiandae commodi tempore
                    debitis odio, doloremque magni eaque soluta cupiditate ullam harum, necessitatibus sunt voluptas eum
                    laboriosam. Consequatur nobis fuga fugiat deleniti veritatis sint, suscipit magni tempora labore. Neque,
                    eaque?</p>
                <ul class="text-muted my-4">
                    <li class="mb-2"><strong class="text-dark">Integration</strong> Applications</li>
                    <li class="mb-2"><strong class="text-dark">Integration</strong> Video Tutorials</li>
                    <li class="mb-2"><strong class="text-dark">Step by Step</strong> Intigrations Guide</li>
                    <li class="mb-2"><strong class="text-dark">Add favorite</strong> for quick and messaging</li>
                    <li class="mb-2"><strong class="text-dark">Fine-tune</strong> your notifications to focus on that
                        matters
                    </li>
                    <li><strong class="text-dark">Trigger your inbox</strong> and own your email experience</li>
                </ul>
                <div class="mt-5">
                    <h2 class="fs-13 fw-700 mb-3">Integration Features</h2>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-2">
                            <span class="avatar-text avatar-sm bg-soft-success text-success me-2">
                                <i class="feather-check fs-10"></i>
                            </span>
                            <span>Access basic company informations and details.</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <span class="avatar-text avatar-sm bg-soft-success text-success me-2">
                                <i class="feather-check fs-10"></i>
                            </span>
                            <span>Access and edite bugs reports and create new issues.</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <span class="avatar-text avatar-sm bg-soft-success text-success me-2">
                                <i class="feather-check fs-10"></i>
                            </span>
                            <span>Change issues status and assignee of issues.</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <span class="avatar-text avatar-sm bg-soft-success text-success me-2">
                                <i class="feather-check fs-10"></i>
                            </span>
                            <span>Open and resolve intercom conversations.</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <span class="avatar-text avatar-sm bg-soft-success text-success me-2">
                                <i class="feather-check fs-10"></i>
                            </span>
                            <span>Add or remover users and change user roles.</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <span class="avatar-text avatar-sm bg-soft-success text-success me-2">
                                <i class="feather-check fs-10"></i>
                            </span>
                            <span>We care about your Privacy in our <a href="javascript:void(0);">Privacy &amp; Policy</a>.</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="avatar-text avatar-sm bg-soft-success text-success me-2">
                                <i class="feather-check fs-10"></i>
                            </span>
                            <span>By clicking allow access, your authorize untitled to access your informations.</span>
                        </li>
                    </ul>
                </div>
                <div class="mb-5">
                    <pre><code class="language-html">
&lt;!DOCTYPE html>
&lt;html lang="zxx">
	&lt;head>
		&lt;meta charset="utf-8">
		&lt;meta http-equiv="x-ua-compatible" content="IE=edge">
		&lt;meta name="viewport" content="width=device-width, initial-scale=1">
		&lt;meta name="description" content="">
		&lt;meta name="keyword" content="">
		&lt;meta name="author" content="WRAPCODERS">
		&lt;!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
		&lt;!--! BEGIN: Apps Title-->
		&lt;title>Help Center&lt;/title>
		&lt;!--! END:  Apps Title-->
		&lt;!--! BEGIN: Favicon-->
		&lt;link type="image/x-icon" rel="shortcut icon" href="../../assets/images/favicon.ico">
		&lt;!--! END: Favicon-->
		&lt;!--! BEGIN: Bootstrap CSS-->
		&lt;link type="text/css" rel="stylesheet" href="../../assets/css/bootstrap.min.css">
		&lt;!--! END: Bootstrap CSS-->
		&lt;!--! BEGIN: Vendors CSS-->
		&lt;link type="text/css" rel="stylesheet" href="../../assets/vendors/css/vendors.min.css">
		&lt;!--! END: Vendors CSS-->
		&lt;!--! BEGIN: Custom CSS-->
		&lt;link type="text/css" rel="stylesheet" href="../../assets/css/theme.min.css">
		&lt;!--! END: Custom CSS-->
		&lt;!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
		&lt;!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
		&lt;!--[if lt IE 9]>
			&lt;script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">&lt;/script>
			&lt;script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js">&lt;/script>
		&lt;![endif]-->
	&lt;/head>
&lt;/html>
					</code>
						</pre>
                </div>
                <h4 class="fs-13">👋 Threds</h4>
                <p class="text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque officiis minus
                    omnis veniam cupiditate molestiae itaque hic quibusdam fuga modi quam cumque recusandae harum nulla
                    vero, tempore possimus aliquid animi!</p>
                <div class="mb-5">
                    <pre><code class="language-js">
const Prism = require('prismjs');

// The code snippet you want to highlight, as a string
const code = `var data = 1;`;

// Returns a highlighted HTML string
const html = Prism.highlight(code, Prism.languages.javascript, 'javascript');
						</code></pre>
                </div>
                <h4 class="fs-13">📌 Inbox</h4>
                <p class="text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque officiis minus
                    omnis veniam cupiditate molestiae itaque hic quibusdam fuga modi quam cumque recusandae harum nulla
                    vero, tempore possimus aliquid animi!</p>
                <div class="mb-5">
                    <pre><code class="language-js">
const Prism = require('prismjs');

// The code snippet you want to highlight, as a string
const code = `var data = 1;`;

// Returns a highlighted HTML string
const html = Prism.highlight(code, Prism.languages.javascript, 'javascript');
						</code></pre>
                </div>
                <h4 class="fs-13">👙 Bundles</h4>
                <p class="text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque officiis minus
                    omnis veniam cupiditate molestiae itaque hic quibusdam fuga modi quam cumque recusandae harum nulla
                    vero, tempore possimus aliquid animi!</p>
                <div class="mb-5">
                    <pre><code class="language-js">
const Prism = require('prismjs');

// The code snippet you want to highlight, as a string
const code = `var data = 1;`;

// Returns a highlighted HTML string
const html = Prism.highlight(code, Prism.languages.javascript, 'javascript');
						</code></pre>
                </div>
                <h4 class="fs-13">⌚ Snoozen</h4>
                <p class="text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque officiis minus
                    omnis veniam cupiditate molestiae itaque hic quibusdam fuga modi quam cumque recusandae harum nulla
                    vero, tempore possimus aliquid animi!</p>
                <div class="mb-5">
                    <pre><code class="language-js">
const Prism = require('prismjs');

// The code snippet you want to highlight, as a string
const code = `var data = 1;`;

// Returns a highlighted HTML string
const html = Prism.highlight(code, Prism.languages.javascript, 'javascript');
						</code></pre>
                </div>
                <h4 class="fs-13">🎂 Groups</h4>
                <p class="text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque officiis minus
                    omnis veniam cupiditate molestiae itaque hic quibusdam fuga modi quam cumque recusandae harum nulla
                    vero, tempore possimus aliquid animi!</p>
                <div class="mb-5">
                    <pre><code class="language-js">
const Prism = require('prismjs');

// The code snippet you want to highlight, as a string
const code = `var data = 1;`;

// Returns a highlighted HTML string
const html = Prism.highlight(code, Prism.languages.javascript, 'javascript');
						</code></pre>
                </div>
                <h4 class="fs-13">😳 Channel</h4>
                <p class="text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque officiis minus
                    omnis veniam cupiditate molestiae itaque hic quibusdam fuga modi quam cumque recusandae harum nulla
                    vero, tempore possimus aliquid animi!</p>
                <div class="mb-5">
                    <pre><code class="language-js">
const Prism = require('prismjs');

// The code snippet you want to highlight, as a string
const code = `var data = 1;`;

// Returns a highlighted HTML string
const html = Prism.highlight(code, Prism.languages.javascript, 'javascript');
						</code></pre>
                </div>
                <h4 class="fs-13">🎉 Favorite</h4>
                <p class="text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque officiis minus
                    omnis veniam cupiditate molestiae itaque hic quibusdam fuga modi quam cumque recusandae harum nulla
                    vero, tempore possimus aliquid animi!</p>
                <div>
                    <pre><code class="language-js">
const Prism = require('prismjs');

// The code snippet you want to highlight, as a string
const code = `var data = 1;`;

// Returns a highlighted HTML string
const html = Prism.highlight(code, Prism.languages.javascript, 'javascript');
						</code></pre>
                </div>
                <hr class="my-5">
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda consectetur illo
                    at placeat cum nulla repellat expedita nostrum praesentium blanditiis repudiandae commodi tempore
                    debitis odio, doloremque magni eaque soluta cupiditate ullam harum, necessitatibus sunt voluptas eum
                    laboriosam. Consequatur nobis fuga fugiat deleniti veritatis sint, suscipit magni tempora labore. Neque,
                    eaque?</p>
                <ul class="text-muted my-4">
                    <li class="mb-2"><strong class="text-dark">Integration</strong> Applications</li>
                    <li class="mb-2"><strong class="text-dark">Integration</strong> Video Tutorials</li>
                    <li class="mb-2"><strong class="text-dark">Step by Step</strong> Intigrations Guide</li>
                    <li class="mb-2"><strong class="text-dark">Add favorite</strong> for quick and messaging</li>
                    <li class="mb-2"><strong class="text-dark">Fine-tune</strong> your notifications to focus on that
                        matters
                    </li>
                    <li><strong class="text-dark">Trigger your inbox</strong> and own your email experience</li>
                </ul>
                <hr class="my-5">
                <div class="w-100 p-5 bg-gray-100 text-center">
                    <h2 class="fs-16 mb-2">Having trouble logging in?</h2>
                    <p class="text-muted">Explore some common issues or solutions or get in tuch with us.</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="javascript:void(0);" class="btn btn-sm btn-success">Read FAQ's</a>
                        <a href="javascript:void(0);" class="btn btn-sm btn-danger">Contact Support</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <div class="d-flex align-items-center text-muted">
                        <fs-11 class="me-3">Is this article helpful?</fs-11>
                        <a href="javascript:void(0);"
                           class="wd-15 ht-15 d-flex align-items-center justify-content-center p-2 rounded-3 bg-gray-100 m-1">
                            <i class="feather-x fs-12 text-danger"></i>
                        </a>
                        <a href="javascript:void(0);"
                           class="wd-15 ht-15 d-flex align-items-center justify-content-center p-2 rounded-3 bg-gray-100 m-1">
                            <i class="feather-check fs-12 text-success"></i>
                        </a>
                    </div>
                </div>
                <hr class="my-5">
                <div class="mb-4">
                    <h2 class="fs-18 mb-1">Topics in this collections</h2>
                    <p class="fs-12 text-muted">6 More topics in this collections</p>
                </div>
                <div class="row">
                    <div class="col-xxl-6">
                        <div class="card border rounded-3 mb-3 overflow-hidden">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                        <i class="feather-file-text"></i>
                                    </div>
                                    <a href="javascript:void(0);">How to upload data to the system?</a>
                                </div>
                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                    <i class="feather-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card border rounded-3 mb-3 overflow-hidden">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                        <i class="feather-file-text"></i>
                                    </div>
                                    <a href="javascript:void(0);">How to draw a land plot on a map?</a>
                                </div>
                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                    <i class="feather-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card border rounded-3 mb-3 overflow-hidden">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                        <i class="feather-file-text"></i>
                                    </div>
                                    <a href="javascript:void(0);">How to to view expire services?</a>
                                </div>
                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                    <i class="feather-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="card border rounded-3 mb-3 overflow-hidden">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                        <i class="feather-file-text"></i>
                                    </div>
                                    <a href="javascript:void(0);">How to upload data to the system?</a>
                                </div>
                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                    <i class="feather-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card border rounded-3 mb-3 overflow-hidden">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                        <i class="feather-file-text"></i>
                                    </div>
                                    <a href="javascript:void(0);">How to draw a land plot on a map?</a>
                                </div>
                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                    <i class="feather-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card border rounded-3 mb-3 overflow-hidden">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="wd-50 ht-50 bg-gray-100 me-3 d-flex align-items-center justify-content-center">
                                        <i class="feather-file-text"></i>
                                    </div>
                                    <a href="javascript:void(0);">How to to view expire services?</a>
                                </div>
                                <a href="javascript:void(0);" class="avatar-text avatar-sm me-3">
                                    <i class="feather-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
