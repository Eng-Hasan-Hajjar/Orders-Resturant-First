<div class="all">
@extends('layouts.app')

@section('content')
<div class="container" dir="rtl">
    <div class="row justify-content-center m-5 registerr">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-light text-center bg-success">{{ __('مستخدم جديد') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('الاسم') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('الايميل') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('كلمة السر') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('تأكيد كلمة السر') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="row mb-0">
                                <div class="col-md-12 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('  تسجيل الدخول') }}
                                    </button>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hight"></div>
</div>
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
    .hight{
        height: 500px;
    }
    .registerr{
        transform: translateY(+25%);
    }
    .all{
    background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)),  url(/images/bg-hero.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    }
    a.link{
            text-decoration: none;


        }
            .link:hover {
    letter-spacing: 1px;
    box-shadow: none;
}
@endsection
