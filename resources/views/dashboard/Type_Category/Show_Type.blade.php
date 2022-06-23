@extends('dashboard.layouts.masterDash')
@section('title') منتجات قسم  - "{{$typeCategory->name}}" @endsection
@section('content')
    
<br><br><br>
<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">المنتجات التابعه للقسم - {{$typeCategory->name}}</h3>
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
                            <th scope="col">ID</th>
                            <th scope="col">عنوان الاعلان</th>
                            <th scope="col">الوصف</th>
                            <th scope="col">الكود</th>
                            <th scope="col">الكميه</th>
                            <th scope="col">السعر</th>
                            <th scope="col">التصنيف</th>
                            <th scope="col">السيارات</th>
                            <th scope="col">نوع العرض</th>
                            <th scope="col">الصوره الرئيسيه</th>
                            <th scope="col">تاريخ الاضافه</th>
                            <th scope="col">اجراءات</th>
                        </tr>
                        @forelse ($typeCategory->Products as  $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->code}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->TypeCategory->name}}</td>
                            <td>                                
                                @foreach ($product->Cars as $car)
                                    {{$car->name}} -  
                                @endforeach
                            </td>
                            <td>                                
                                @foreach ($product->Filters as $filter)
                                    {{$filter->name}} -  
                                @endforeach
                            </td>
                            <td><img src="{{asset('dashboard/images/products/' . $product->id . '/' . $product->First_Image()->first()->image)}}" width="100px"  alt="{{$product->title}}"></td>

                            <td>{{$product->created_at->format('Y-m-d')}}</td>
                            <td>
                                    <a href="{{route('products.show',$product)}}" class="btn btn-success"><i class="fas fa-search"></i></a>
                                    <a href="{{route('products.edit',$product)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <form method="POST" style="display: inline;" action="{{route('products.destroy',$product)}}" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('تنبيه !!! سوف يتم حذف كل البيانات التابعه لهذا المنتج');" ><i class="fas fa-trash"></i></button>
                                    </form>
                            </td>
                        </tr>
                    @empty
                        <h2 class="bg-warning">لا يوجد اي منتجات تابعه لهذا القسم اضف الان <a href="{{route('products.index')}}" class="btn btn-success"></a></h2>
                    @endforelse
                        </tr>
                    </tbody>
                </table>

            </div>
            
        </div>

        
        <!--end::Example-->
    </div>

    
</div>



@endsection