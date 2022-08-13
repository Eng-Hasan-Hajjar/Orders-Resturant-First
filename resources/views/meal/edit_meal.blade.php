@extends('layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container p-5" dir="rtl">
     <div class="row justify-content-center">
         <div class="col-md-4">
             <div class="card">
                 <div class="card-header bg-danger text-light text-center">القائمة</div>
                 <div class="card-body text-right">
                     <ul class="list-group">
                         <a href="{{ route('cat.show') }}" class="list-group-item list-group-item-action">إضافة صنف</a>
                         <a href="{{ route('meal.index') }}" class="list-group-item list-group-item-action">عرض الوجبات</a>

                         <a href="" class="list-group-item list-group-item-action">طلبات
                             المستخدمين</a>

                     </ul>
                 </div>
             </div>
             @if (count($errors) > 0)
                 <div class="card mt-5">
                     <div class="card-body">
                         <div class="alert alert-danger">
                             @foreach ($errors->all() as $error)
                                 <p> {{ $error }}
                                 <p>
                             @endforeach
                         </div>
                     </div>
                 </div>
             @endif
         </div>

         <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-danger text-center text-light">تعديل الوجبة</div>

                  <form action="{{route('meal.update',$meal->id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="old_image" value="{{ $meal->image }}">

                    <div class="card-body text-right">
                        <div class="form-group">
                            <label for="name">اسم الوجبة</label>
                            <input type="text" class="form-control" value="{{ $meal->name }}" name="name" placeholder="اسم الوجبة">
                        </div>
                        <div class="form-group">
                            <label for="description">وصف الوجبة</label>
                            <textarea class="form-control" name="description"> {{ $meal->description }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label>سعر الوجبة($)</label>
                                <input type="number" value="{{ $meal->price }}" name="price" class="form-control" placeholder="سعر الوجبة">
                            </div>

                        </div>




                        <div class="form-group">
                            <h5>اختر صنف <span class="text-danger">*</span></h5>
                            <div class="controls">

                                <select name="category" class="form-control" required="">
                                    <option value="" selected="" disabled="">اختر صنف</option>
                                    @foreach ($cats as $cat)
                                        <option value="{{ $cat->cat_name }}">{{ $cat->cat_name }}</option>
                                    @endforeach
                                </select>






                                <br>

                                <div class="form-group">
                                    <label>صورة الوجبة</label>
                                    <input type="file" name="image" class="form-control" id="image">
                                </div>
                                <br>
                                <div class="form-group">
                                    <img  id="showImage" src="{{asset($meal->image) }}" style="width: 100px; height: 100px;">
                                </div>


                                <br>
                                <div class="form-group text-center">
                                    <button class="btn btn-danger" type="submit">تعديل</button>
                                </div>

                            </div>
                </form>


            </div>
        </div>
     </div>


     <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
   </script>



 @endsection
