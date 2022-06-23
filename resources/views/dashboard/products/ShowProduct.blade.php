@extends('dashboard.layouts.masterDash')
@section('title') بيانات المنتج - {{$product->title}} @endsection
@section('content')
    
<br><br><br>
<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">بيانات عامه</h3>
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
                            <th>معرف الاعلان</th>
                            <th>عنوان الاعلان</th>
                            <th>وصف الاعلان</th>
                        </tr>
                        <tr>
                            <td>#{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                        </tr>
                        

                        <tr class="table-active">
                            <th>الكود</th>
                            <th> الكميه لكل كرتونه</th>
                            <th>السعر</th>
                        </tr>
                        <tr>
                            <td>{{$product->code}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price}}</td>
                        </tr>
                        <tr class="table-active">
                            <th>تاريخ الاضافه</th>
                            <th>اخر تعديل</th>
                            <th></th>
                        </tr>

                        <tr>
                            <td>{{$product->created_at->format('Y-m-d')}}</td>
                            <td>{{$product->updated_at->format('Y-m-d')}}</td>
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
            <h3 class="card-label">التصنيفات والاقسام ونوع العرض.</h3>
        </div>
    </div>
    <div class="card-body">
        <!--begin::Example-->
        <div class="example mb-12">
            <div class="table-responsive">
                <table class="table table-bordered mb-6">
                    <tbody>
                        <tr class="table-active">
                            <th>التصنيف</th>
                            <th>السيارات</th>
                            <th>نوع العرض</th>
                        </tr>

                        <tr>
                            <td>{{$product->TypeCategory->name}}</td>
                            <td>
                                @foreach ($product->Cars as $car)
                                    <p> {{$car->name}} </p>
                                @endforeach
                            </td>

                            <td>
                                @foreach ($product->Filters as $filter)
                                    <p> {{$filter->name}} </p>
                                @endforeach
                            </td>
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
            <h3 class="card-label">الصور</h3>
        </div>
    </div>
    <div class="card-body">
        <!--begin::Example-->
        <div class="example mb-12">
            <div class="table-responsive">
                <table class="table table-bordered mb-6">
                    <tbody>
                        <tr class="table-active">
                            <th colspan="{{count($product->Images)}}">الصور</th>
                        </tr>

                        <tr>
                            @foreach ($product->Images as $image)
                                <td>
                                    <img src="{{asset('dashboard/images/products/' . $product->id . '/' . $image->image)}}" width="200px"  alt="{{$product->title}}">
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>

            </div>
            
        </div>

        
        <!--end::Example-->
    </div>

    
</div>



@endsection