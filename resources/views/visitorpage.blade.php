
@extends('layouts.app')


@section('content')

<div class="container-xxl py-5 hero-header " style="">
                <div class="container">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid " src="{{ url('/images/hero.png') }}" alt="">
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft"> استمتع<br>بوجبتنا اللذيذة </h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">هل تعبت من الانتظار في المطاعم؟ سواء كنت تفضل التوصيل أو الاستلام، وجبتي نحن نُثمن وقتك ونختصر لك الزمن. فقط اطلب وجبتك أونلاين لتصلك لحد باب البيت أو استخدم خدمة الاستلام لتستلم طلبك مباشرة من المطعم دون انتظار.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>


          <!-- About Start -->
         <div class="container-xxl py-5">
            <div class="container">
            <h2 class="section-title ff-secondary text-center textcenter">-- من نحن  --</h2>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ url('/images/about-1.jpg') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"src="{{ url('/images/about-2.jpg') }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"src="{{ url('/images/about-3.jpg') }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"src="{{ url('/images/about-4.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <h1 class="mb-4"> اهلا بك <i class="fa fa-utensils text-success me-2"></i> وجبتي </h1>
                        <p class="mb-4">وجبتي هو موقع لطلب الوجبات يحتوي على خيارات لا محدودة من المطابخ الشرقية والغربية المتنوعة والتي تلبي جميع الأذواق والرغبات. يمكّن الموقع مستخدميه من تصفّح الوجبات ومشاهدة جميع أنواع الوجبات التي تقدمها ليختاروا الوجبة التي يفضلونها ويتم توصيلها إلى العنوان المطلوب بأسرع وقت ممكن. كما يتميز بالعديد من الخصائص التي تجعله منافساً قوياً للمواقع التي توفر خدمات مشابهة في سوق العمل.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->









<div class="container" dir="rtl">
<h2 class="section-title ff-secondary text-center textcenter">-- وجباتنا --</h2>
        <div class="row justify-content-center p-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">القائمة</div>
                    <div class="card-body text-right">
                        <form action="" method="get">
                            <a class="list-group-item list-group-item-action"  href="/home">الصفحة الرئيسية</a>
                            @foreach ($cats as $row)
                                <input type="submit" value="{{ $row->cat_name }}" name="category"
                                    class="list-group-item list-group-item-action  " >
                            @endforeach


                        </form>
                    </div>
                </div>




            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>{{ $cat1 }}</h4>
                        عدد الوجبات ({{count($meals)}})</div>
                    <div class="card-body">
                        <div class="row">


                            @forelse ($meals as $meal )
                                <div class="col-md-4 mt-2 text-center" style="border: 1px solid rgb(149, 212, 159) ;">
                                    <img src="{{ asset($meal->image) }}" class="img-thumbnail" style="width:100%;">
                                    <strong>{{ $meal->name }}</strong>
                                    <p>{{ $meal->description }}</p>
                                    <div>

                                        <a href="{{ route('meal_deatails',$meal->id) }}" class="btn btn-success" style="font-size:16px" title="Add Cart">
                                            <i class="fa fa-bell-slash-o" style="font-size:16px;color:white">اطلب الأن
                                        </a></i>

                                    </div>
                                    <br>
                                </div>
                            @empty
                                <p>لا يوجد وجبات متوفرة</p>
                            @endforelse


                        </div>
                    </div>
                </div>
            </div>
        </div>






    </div>



     <!-- Contact Start -->
     <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="section-title ff-secondary text-center textcenter">  تواصل معنا <i class="fa fa-hand-o-left" aria-hidden="true"></i></h3>
                    <h1 class="mb-5 ">تواصل معنا في اي وقت</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">

                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">

                        <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d51512.57337478524!2d37.1692798694383!3d36.20216886063349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d36.219417799999995!2d37.134432!5e0!3m2!1sar!2s!4v1651565533229!5m2!1sar!2s" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"  tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">

                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <label for="email">الايميل </label>
                                            <input type="email" class="form-control" id="email" placeholder="Your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your name">
                                            <label for="name">الاسم </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">الموضوع</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">الرسالة</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-success w-100 py-3" type="submit"> ارسل الرسالة</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Team Start -->
        <div class="container-xxl pt-10 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="section-title ff-secondary text-center textcenter mb-5">اعضاء الفريق </h2>

                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid"src="{{ url('/images/team-1.jpg') }}">
                            </div>
                            <h5 class="mb-0"> احمد الشريف</h5>
                            <small>الشيف التنفيذي</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-success mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-success mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-success mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{ url('/images/team-2.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0"> عمار صابوني</h5>
                            <small>رىيس الطهاة</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-success mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-success mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-success mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{ url('/images/team-3.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0"> بشار العلي</h5>
                            <small>مساعد رىيس الطهاة</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-success mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-success mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-success mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{ url('/images/team-4.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0"> صالح المهندس</h5>
                            <small>رىيس قسم</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-success mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-success mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-success mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


       <!-- Footer Start -->
       <footer class="bg-dark text-white text-lg-start">

<div class="container p-4">

<div class="row">
<div class="col-lg-4 col-md-6 mb-4 mb-md-0 text-center">
    <h5 class="text-uppercase text-success">تواصل معنا</h5>
      <p> سوري , حلب <i class="fas fa-home me-3"></i></p>
      <p>
       abd@gmail.com
       <i class="fas fa-envelope me-3"></i>
      </p>
      <p>0994488792 <i class="fas fa-phone me-3"></i></p>

  </div>

  <div class="col-lg-4 col-md-6 mb-4 mb-md-0 text-center">
    <h5 class="text-uppercase text-center text-success"> الوصول السريع</h5>

    <ul class="list-unstyled mb-0">
      <li>
        <a href="#!" class="text-white link"> من نحن <i class="fa fa-angle-left" aria-hidden="true"></i></a>
      </li>
      <li>
        <a href="#!" class="text-white link">سياسة الخصوصية <i class="fa fa-angle-left" aria-hidden="true"></i></a>
      </li>
      <li>
        <a href="#!" class="text-white link">تواصل معنا <i class="fa fa-angle-left" aria-hidden="true"></i></a>
      </li>
    </ul>
  </div>

  <div class="col-lg-4 col-md-12 mb-4 mb-md-0 text-center">
    <h5 class="text-uppercase text-center text-success">وجبتي</h5>

    <p>
    موقع وصلني الطريق الأقرب بينكم وبين الجوع  في أي وقت يمكنكم تصفح الوجبات و اختيار وجبتكم المفضلة
    </p>
  </div>

</div>



</div>

<div class="container p-4 pb-0 text-center">
<!-- Section: Social media -->
<section class="mb-4">
  <!-- Facebook -->
  <a
    class="btn btn-primary btn-floating m-1"
    style="background-color: #3b5998;"
    href="#!"
    role="button"
    ><i class="fab fa-facebook-f"></i
  ></a>

  <a
    class="btn btn-primary btn-floating m-1"
    style="background-color: #55acee;"
    href="#!"
    role="button"
    ><i class="fab fa-twitter"></i
  ></a>

  <!-- Google -->
  <a
    class="btn btn-primary btn-floating m-1"
    style="background-color: #dd4b39;"
    href="#!"
    role="button"
    ><i class="fab fa-google"></i
  ></a>

  <!-- Instagram -->
  <a
    class="btn btn-primary btn-floating m-1"
    style="background-color: #ac2bac;"
    href="#!"
    role="button"
    ><i class="fab fa-instagram"></i
  ></a>

  <!-- Linkedin -->
  <a
    class="btn btn-primary btn-floating m-1"
    style="background-color: #0082ca;"
    href="#!"
    role="button"
    ><i class="fab fa-linkedin-in"></i
  ></a>
  <!-- Github -->
  <a
    class="btn btn-primary btn-floating m-1"
    style="background-color: #333333;"
    href="#!"
    role="button"
    ><i class="fab fa-github"></i
  ></a>
</section>

</div>

<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
© 2022 حقوق النشر محفوظة لموقع وجبتي
</div>
</footer>
    <!-- Footer End -->
    
    <style>
        a.list-group-item {
            font-size: 18px;
        }

        a.list-group-item:hover {
            background-color: rgb(61, 114, 56);
            color: #fff;
        }

        .card-header {
            background-color: rgb(47, 160, 36);
            color: #fff;
            font-size: 20px;
        }
        a.link{
            text-decoration: none;


        }
            .link:hover {
    letter-spacing: 1px;
    box-shadow: none;
}
.section-title:hover{
    letter-spacing: 2px;
    box-shadow: none;
}
.hero-header {
    background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)),  url(/images/bg-hero.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
.hero-header img {
    animation: imgRotate 50s linear infinite;
}

@keyframes imgRotate {
    100% {
        transform: rotate(360deg);
    }
}
.textcenter {
    color: #F1F8FF;
    background-color: green;
    border-radius: 18px 0 18px 0;
}
.team-item {
    box-shadow: 0 0 45px rgba(0, 0, 0, .08);
    height: calc(100% - 38px);
    transition: .5s;
}

.team-item img {
    transition: .5s;
}

.team-item:hover img {
    transform: scale(1.1);
}

.team-item:hover {
    height: 100%;
}

.team-item .btn {
    border-radius: 100px 50px 0 0;
}
</style>

@endsection
