@extends('layouts.app')

@section('content')


    <div class="container p-5" dir="rtl">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-warning">
                        <li class="breadcrumb-item active " aria-current="page">طلبات الزبائن</li>
                    </ol>
                </nav>

                <div class="card">
                    <div class="card-header">
                        <a style="float:right;" href="{{ route('cat.show') }}"><button class="bnt btn-success btn-default"
                                style="margin-left:6px ;">إضافة صنف جديد </button></a>

                        <a style="float:right;" href="{{ route('meal.create') }}"><button class="bnt btn-danger btn-default"
                                style="margin-left:6px ;">إضافة وجبة </button></a>
                        <a style="float:right;" href="{{ route('meal.index') }}"><button class="bnt btn-info btn-default"
                                style="margin-left:6px ;">عرض الوجبات</button></a>

                    </div>
                    <div class="card-body text-center">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">الاسم</th>
                                    <th scope="col">الايميل</th>
                                    <th scope="col">الهاتف</th>

                                    <th scope="col">التاريخ</th>
                                    <th scope="col">الوقت</th>
                                    <th scope="col">اسم الوجبة</th>
                                    <th scope="col">العدد</th>
                                    <th scope="col">سعر الوجبة($)</th>
                                    <th scope="col">المجموع ($)</th>
                                    <th scope="col">العنوان</th>
                                    <th scope="col">الحالة </th>
                                    <th scope="col">القبول</th>
                                    <th scope="col">رفض الطلب</th>
                                    <th scope="col">إتمام الطلب</th>
                                </tr>
                            </thead>
                           <tbody>


                                @foreach ($order as $row)
                                    <tr>
                                        <td>{{ $row->user->name}}</td>
                                        <td>{{ $row->user->email  }}</td>
                                        <td>{{ $row->phone }}</td>
                                        <td>{{ $row->date }}</td>
                                        <td>{{ $row->time }}</td>

                                        <td>{{ $row->meal->name   }}</td>
                                        <td>{{ $row->qty }}</td>
                                        <td>${{ $row->meal->price  }}</td>
                                        <td>${{ $row->meal->price  * $row->qty  }}</td>
                                        <td>{{ $row->address }}</td>




                                        @if ($row->status == 'تتم مراجعة الطلب')

                                            <td class="text-light bg-secondary">{{ $row->status }}</td>

                                        @endif

                                        @if ($row->status == 'رفض')

                                            <td class="text-light bg-danger">{{ $row->status }}</td>

                                        @endif

                                        @if ($row->status == 'قبول')

                                            <td class="text-light bg-primary">{{ $row->status }}</td>

                                        @endif

                                        @if ($row->status == 'إتمام')

                                            <td class="text-light bg-success">{{ $row->status }}</td>

                                        @endif


                                        <form action="{{ route('order.status', $row->id) }}" method="post">
                                            @csrf


                                            <td>
                                                <input name="status" type="submit" value="قبول"
                                                    class="btn btn-primary btn-sm">
                                            </td>

                                            <td>
                                                <input name="status" type="submit" value="رفض"
                                                    class="btn btn-danger btn-sm">
                                            </td>
                                            <td>
                                                <input name="status" type="submit" value="إتمام"
                                                    class="btn btn-success btn-sm">
                                            </td>

                                        </form>





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

<style>
    .hight{
        height: 300px;
    }


@endsection
