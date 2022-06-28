@extends('dashboard.layouts.masterDash')
@section('title') بيانات المستخدم - {{$user->name}} @endsection
@section('content')
    
<br><br><br>
<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">بيانات المستخدم - {{$user->name}}</h3>
        </div>
    </div>
    <div class="card-body">
        @if (Session::has('success'))
            <div class="alert alert-custom alert-success fade show" role="alert">
                <div class="alert-icon"><i class="flaticon2-checkmark"></i></div>
                <div class="alert-text"> <h3> تم تحديث البيانات </h3></div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
        @endif

        @if (Session::has('insert'))
            <div class="alert alert-custom alert-success fade show" role="alert">
                <div class="alert-icon"><i class="flaticon2-checkmark"></i></div>
                <div class="alert-text"> <h3> تم اضافه البيانات بنجاح  </h3> </div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
        @endif

        @if (Session::has('delete'))
            <div class="alert alert-custom alert-success fade show" role="alert">
                <div class="alert-icon"><i class="flaticon2-checkmark"></i></div>
                <div class="alert-text"> <h3> تم حذف البيانات بنجاح </h3> </div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
        @endif
        <!--begin::Example-->
        <div class="example mb-12">
            <div class="table-responsive">
                <table class="table table-bordered mb-6">
                    <tbody>
                        <tr class="table-active">
                            <th>معرف المستخدم</th>
                            <th>رقم الهاتف</th>
                            <th>عنوان المستخدم</th>
                        </tr>
                        <tr>
                            <td>#{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->location}}</td>
                        </tr>
                        

                        <tr class="table-active">
                            <th>Soon</th>
                            <th>Soon</th>
                            <th>Soon</th>
                        </tr>
                        <tr>
                            <td>{{$user->id}}</td>                            
                            <td>{{$user->id}}</td>
                            <td>{{$user->id}}</td>
                        </tr>
                        <tr class="table-active">
                            <th>تاريخ الاضافه</th>
                            <th>اخر تعديل</th>
                            <th></th>
                        </tr>

                        <tr>
                            <td>{{$user->created_at->format('Y-m-d')}}</td>
                            <td>{{$user->updated_at->format('Y-m-d')}}</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            
        </div>

        
        <!--end::Example-->
    </div>

    
</div>




<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">السله الخاصه بالمستخدم - {{$user->name}}</h3>
        </div>
    </div>

    <div class="card-body">
        <!--begin::Example-->
        <div class="example mb-12">
            <div class="table-responsive">
                <table class="table table-bordered mb-6">
                    <tbody>
                        <tr class="table-active">
                            <th>عدد المنتجات</th>
                            <th>تاريخ الانشاء</th>
                            <th>اخر تحديث</th>
                        </tr>
                        <tr>
                            <td>{{count($user->charts())}}</td>
                            <td>{{$user->charts()->first()->created_at->format('Y-m-d , H:i')}}</td>
                            <td>{{$user->charts()->last()->updated_at->format('Y-m-d , H:i')}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>

        
        <!--end::Example-->
    </div>

    <div class="card-body">
        <!--begin::Example-->
        <div class="example mb-12">
            <div class="table-responsive">
                <table class="table table-hover mb-6">
                    <thead>
                        <tr class="table-active">
                            <th scope="col">#</th>
                            <th scope="col">عنوان الاعلان</th>
                            <th scope="col">الكود</th>
                            <th scope="col">السعر</th>
                            <th scope="col">الكميه</th>
                            <th scope="col">الإجمالي</th>
                            <th scope="col">اجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($user->charts() as  $index=>$chart)
                        <tr>
                            <td>{{$index +1}}</td>
                            <td>{{$chart->product->title}}</td>
                            <td>{{$chart->product->code}}</td>
                            <td>{{$chart->product->price}}</td>
                            <td>{{$chart->product->quantity}}</td>
                            <td>{{$chart->product->price * $chart->product->quantity}}</td>
                            <td>
                                <a href="{{route('products.show',$chart)}}" class="btn btn-success"><i class="fas fa-search"></i></a>
                                <form method="POST" style="display: inline;" {{-- action="{{route('charts.destroy',$chart->id)}}" --}} >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('هل انت متاكد من ازاله المنتج من السله !!!');" ><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <h2 class="bg-warning">سله المستخدم فارغه</h2>
                    @endforelse
                    </tbody>
                </table>
            </div>
            
        </div>

        
        <!--end::Example-->
    </div>

    
</div>



@endsection