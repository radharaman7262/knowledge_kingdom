@extends('ui.layout.headerfooter')
@php
    $page_name = seo_data("page_name","9");
    $meta_title = seo_data("meta_title","9");
    $meta_descripation = seo_data("meta_descripation","9");
    $meta_keyword = seo_data("meta_keyword","9");
@endphp
@section('page_title',$page_name)
@section('meta_title',$meta_title)
@section('meta_descripation',$meta_descripation)
@section('meta_keyword',$meta_keyword)

@section('content')

        <!-- BEGIN: Hero Banner Start -->
        <section class="pageBanner" style="background-image: url({{ asset('public/ui/assets/images/bg/banner.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="bannerTitle">Faq Page</h2>
                        <div class="breadcrumbs"><a href="{{route('/')}}">Home</a><span>/</span>Faq</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Hero Banner End -->

          <!-- BEGIN: FAQ Section Start -->
          <section class="faqSection02">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="subTitle">Let Us help you out</h5>
                        <h2 class="secTitle">Here are some common <br> question you might have<br> For More <a href="{{route('contact-page')}}">Contact Us</a></h2>
                        <ul class="nav faqTabTabsNav" id="faqTab" role="tablist">
                            @foreach (getDataFun('faq_categories','') as $key=>$faq_cat_data)

                            <li role="presentation">
                                <button class="{{ $key==0 ? 'active' : '' }} " id="faq{{$faq_cat_data->id}}-tab" data-bs-toggle="tab" data-bs-target="#faq{{$faq_cat_data->id}}-tab-pane" type="button" role="tab" aria-controls="{{$faq_cat_data->id}}-pane" aria-selected="false"># {{$faq_cat_data->title}}</button>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tab-content">
                            @foreach (faq_helper() as $first=>$faq_data_row)

                            <div class="tab-pane fade animated slideInUp2 {{ $first==0 ? 'active show' : '' }}" id="faq{{$faq_data_row->faq_cat}}-tab-pane" role="tabpanel" aria-labelledby="faq{{$faq_data_row->faq_cat}}-tab" tabindex="0">
                                <div id="accordion-holder{{$faq_data_row->faq_cat}}" class="tmjAccordion accordion">
                                    @php $i =1;
                                    @endphp
                                    @foreach ( getDataFun('faqs','5') as $faq_q_a)


                                    <div class="card {{ $i==1 ? 'active' : '' }}">
                                        <div class="faqInner">
                                            <div class="card-header" id="heading{{$faq_q_a->id}}">
                                                <h5 class="title" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq_q_a->id}}" aria-expanded="true" aria-controls="collapse{{$faq_q_a->id}}">
                                                    {{$faq_q_a->question}}
                                                    <svg fill="#233152" width="22" height="12" viewBox="0 0 22 12" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0001 11.6246C10.7603 11.6246 10.5203 11.5329 10.3372 11.3499L0.962246 1.97488C0.595918 1.60855 0.595918 1.01535 0.962246 0.649258C1.32857 0.283164 1.92178 0.28293 2.28787 0.649258L11.0001 9.36145L19.7122 0.649258C20.0786 0.28293 20.6718 0.28293 21.0379 0.649258C21.404 1.01559 21.4042 1.60879 21.0379 1.97488L11.6629 11.3499C11.4798 11.5329 11.2398 11.6246 11.0001 11.6246Z"/>
                                                    </svg>
                                                </h5>
                                            </div>
                                            <div id="collapse{{$faq_q_a->id}}" class="collapse {{ $i==1 ? 'show' : '' }}" aria-labelledby="heading{{$faq_q_a->id}}" data-bs-parent="#accordion-holder{{$faq_data_row->faq_cat}}">
                                                <div class="card-body">
                                                    {{$faq_q_a->answer}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $i++;
                                    @endphp
                                    @endforeach



                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: FAQ Section End -->

 @endsection
