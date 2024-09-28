@extends('layouts.app')
@section('content')
    <section class="page-title-section bg-img cover-background top-position1 secondary-overlay" data-overlay-dark="7"
        data-background="{{ asset('assets/img/banner/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="position-relative">
                        <h1>About Us</h1>
                    </div>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#!">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="about-bg position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title03 mb-3 mb-xl-4 position-relative z-index-9">
                        <span class="small-title">5 Years of Experiences </span>
                        <h2 class="#">MWR Engineering Co.,Ltd</h2>
                    </div>
                    <p style="font-size: 17px; text-align: justify">
                        <span style="font-weight: bold">Medium Way River Co, Ltd.</span> was established in 2022. The
                        company specializes in construction
                        materials such as RC products, steel structures, and civil engineering services, including
                        surveying. They focus on delivering high-quality construction projects and prioritize
                        customer satisfaction. They are interested in expanding their business and seeking
                        opportunities to collaborate and innovate in the construction industry.
                    </p>
                    <hr>
                    <p style="font-size: 17px; text-align: justify">
                        Medium Way River Co, Ltd. ကို 2022ခုနှစ်တွင် စတင် တည်ထောင်ပါသည်။ ထိုသို့တည်ထောင်ရာတွင် အတွေ့အကြုံ
                        ရင့်ကျက်သည့် အင်ဂျင်နီယာများ၊ အတတ်ပညာရှင်များ၊ လုပ်ငန်းကြီးကြပ်များ ဖြင့်ဖွဲ့စည်း ထားပါသည်။
                        ကျွန်တော်တို့ကုမ္ပဏီ၏ အဓိကလုပ်ငန်းများမှာ RC အဆောက်အဦး၊Steel structure၊ အစိုးရ၏
                        စီမန်ကိန်းလုပ်ငန်းနှင့် Survey ဝန်ဆောင်မှုလုပ်ငန်းတို့ဖြစ်ပါသည်။ ၎င်းလုပ်ငန်းများ
                        လုပ်ကိုင်ဆောင်ရွက်ရာတွင် လုပ်ငန်းအပ်နှံသူ စိတ်ကျေနပ်မှုရှိစေရန်နှင့်အရည်အသွေးကောင်းမွန်စေရန်
                        သေးငယ်သည့်လုပ်ငန်း ကြီးမားသည့် လုပ်ငန်းဟူ၍ ခွဲခြားခြင်းမရှိပဲ ကျွမ်းကျင်လုပ်သား၊ ထိရောက်မြန်ဆန်သော
                        စက်ယန္တယား၊ အရည်အသွေးမီ လုပ်ငန်းသုံးပစ္စည်းများဖြင့် အလေးထားအာရုံစိုက်ကာ ဆောင်ရွက်ခဲ့ပါသည်။ အစိုးရ
                        စီမံကိန်းများ ဆောင်ရွက်ရာ တွင်လည်း ထို‌ဒေသ၏ လူအရင်း အမြစ်များနှင့် ပူးပေါင်းဆောင်ရွက်ခြင်း၊
                        ဒေသအတွင်း လိုအပ်ချက်များကို ပူးပေါင်းအကောင်ထည်ဖော် ဆောင်ရွက်ခြင်းတို့ကို
                        တတ်စွမ်းသမျှပြုလုပ်ခြင်းဖြင့် ၎င်းဒေသ၏ အကျိုးများ ဖြစ်ထွန်းစေရန် ရည်ရွယ်လုပ်ဆောင်ပါသည်။
                    </p>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('data/dica.png') }}" alt=""
                        style="width: 100%; height: auto; background-size: center; object-fit: cover; border: 3px solid #458cd2; padding: 5px;">
                </div>
            </div>

            <img src="{{ asset('assets/img/bg/bg-18.png') }}" class="position-absolute bottom-0 end-0 opacity3">
            <div class="zoom-in-out-circle position-absolute top-10 left-5"></div>
        </div>
    </section>



    <section class="pb-lg-0" style="padding: 20px 0;">
        <div class="container position-relative z-index-9">
            <div class="row align-items-end">

                <div class="col-lg-7 pb-lg-2-9 wow fadeIn" data-wow-delay="200ms">
                    <div>
                        <h2 class="mb-1-9 mb-xl-2-3 h1">Ready to bring bigger and stronger projects than before!</h2>
                        <div class="horizontaltab tab-style1">
                            <ul class="resp-tabs-list hor_1">
                                <li>Our Mission</li>
                                <li>Our Vision</li>
                                <li>Our Values</li>
                            </ul>
                            <div class="resp-tabs-container hor_1 p-0">
                                <div>
                                    <div class="row align-items-center">
                                        <div class="col-md-5 mb-1-9 mb-md-0">
                                            <img src="{{ asset('data/3.png') }}" class="border-radius-10" alt="...">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="ps-lg-4">
                                                <p style="text-align: justify" class="mb-1-9">
                                                    In our company's vision, we aim to contribute to the country's
                                                    socio-economic development by actively engaging in sustainable and
                                                    responsible practices, promoting innovation and technology advancements,
                                                    and providing support for inclusive growth and community development.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row align-items-center">
                                        <div class="col-md-5 mb-1-9 mb-md-0">
                                            <img src="{{ asset('data/5.png') }}" class="border-radius-10" alt="...">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="ps-lg-4">
                                                <p style="text-align: justify" class="mb-1-9">
                                                    Our company aims to contribute to the development of the country through
                                                    our investment and participation in various projects related to
                                                    infrastructure development and improving people's livelihoods, as well
                                                    as promoting environmental conservation and community empowerment.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row align-items-center">
                                        <div class="col-md-5 mb-1-9 mb-md-0">
                                            <img src="{{ asset('data/7.png') }}" class="border-radius-10" alt="...">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="ps-lg-4">
                                                <p class="mb-1-9">We are offering a variety of energy saving solutions that
                                                    we had perfected over the coarse of the last 5 years.</p>
                                                <ul class="list-style2 mb-0">
                                                    <li>Professional engineers</li>
                                                    <li>Award winning company</li>
                                                    <li>Work with energetic team</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 d-none d-lg-block wow fadeInUp" data-wow-delay="350ms">
                    <div class="ps-xl-6">
                        <img src="{{ asset('data/8.png') }}" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/bg/bg-04.png') }}" class="position-absolute bottom-0 right" alt="...">
    </section>
@endsection
