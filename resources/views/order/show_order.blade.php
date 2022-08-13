<div class="all">
@extends('layouts.app')

@section('content')


<div class="container p-5" >
     <div class="row justify-content-center">
         <div class="col-md-12">

             <div class="card" dir="rtl" >
                 <div class="card-header text-center" >طلباتك السابقة

                 </div>
                 <div class="card-body">
                     <table class="table table-bordered text-center">
                         <thead>
                             <tr>
                                <th scope="col">الاسم</th>
                                <th scope="col">الهاتف</th>
                                <th scope="col">الايميل</th>
                                <th scope="col">التاريخ</th>
                                <th scope="col">الوقت</th>
                                <th scope="col">اسم الوجبة</th>
                                <th scope="col">العدد</th>
                                <th scope="col">سعر الوجبة</th>
                                <th scope="col">المجموع($)</th>
                                <th scope="col">العنوان</th>
                                <th scope="col">حالة الطلب</th>


                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($order as $row)
                                 <tr>
                                     <td>{{ $row->user->name }}</td>
                                     <td>  {{$row->phone}}</td>
                                     <td >{{ $row->user->email }} </td>

                                     <td>{{ $row->date }}</td>
                                     <td>{{ $row->time }}</td>
                                     <td>{{ $row->meal->name }}</td>
                                     <td>{{ $row->qty }}</td>
                                     <td>{{ $row->meal->price}}</td>
                                     <td>${{ ($row->meal->price * $row->qty)}}</td>

                                     <td>{{ $row->address }}</td>

                                     @if($row->status=="تتم مراجعة الطلب")

                                     <td class="text-light bg-secondary" >{{ $row->status }}</td>

                                     @endif

                                     @if($row->status=="رفض")

                                     <td class="text-light bg-danger" >{{ $row->status }}</td>

                                     @endif

                                     @if($row->status=="قبول")

                                     <td class="text-light bg-primary" >{{ $row->status }}</td>

                                     @endif

                                     @if($row->status=="إتمام")

                                     <td class="text-light bg-success" >{{ $row->status }}</td>

                                     @endif

                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
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

     .card-header {
         background-color:rgb(94, 175, 83);
         color: #fff;
         font-size: 20px;
     }
     .hight{
        height: 500px;
    }

 </style>





@endsection
