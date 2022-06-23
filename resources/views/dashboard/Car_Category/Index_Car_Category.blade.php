@extends('dashboard.layouts.masterDash')
@section('title') قسم السيارات @endsection
@section('content')
@section('content')
<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">قسم السيارات</h3>
        </div>
        <div class="card-toolbar">
            <!--begin::Button-->
            @include('dashboard.Car_category.Create_Car_Category_Modal')
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        @if (Session::has('update'))
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
                <table class="table table-hover mb-6">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الاسم</th>
                            <th scope="col">الصوره</th>

                            <th scope="col">تاريخ الاضافه</th>
                            <th scope="col">اجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($carCategories as  $index=>$carCategory)
                        <tr>
                            <td>{{$index +1}}</td>
                            <td>{{$carCategory->name}}</td>
                            <td><img src="{{asset('dashboard/images/categories/car_images/'.$carCategory->img)}}" width="100px" height="100px" alt="{{$carCategory->name}}"></td>
                            <td>{{$carCategory->created_at->format('Y-m-d')}}</td>
                            <td>
                                <a href="{{route('car_category.show' , $carCategory)}}" class="btn btn-success"><i class="fas fa-search"></i></a>
                                <form method="POST" style="display: inline;" action="{{route('car_category.destroy',$carCategory->id)}}" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('هل انت متاكد من حذف القسم وكل المنتجات الخاصه به');" ><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <h2 class="bg-warning">لم يتم اضافه اي بيانات اضف الان من اعلي يسار الشاشه</h2>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!--end::Example-->
    </div>
</div>
@endsection
@endsection