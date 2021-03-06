@extends('dashboard.layouts.masterDash')
@section('title') قسم انواع الفلاتر@endsection
@section('content')
@section('content')
<div class="card card-custom gutter-b">
    <br><br><br>
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">قسم انواع الفلاتر</h3>
        </div>
        <div class="card-toolbar">
            <!--begin::Button-->
            @include('dashboard.Filter_Category.Create_Filter_Category_Modal')
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
                            <th scope="col">تاريخ الاضافه</th>
                            <th scope="col">اجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($filterCategories as  $index=>$filterCategory)
                        <tr>
                            <td>{{$index +1}}</td>
                            <td>{{$filterCategory->name}}</td>
                            <td>{{$filterCategory->created_at->format('Y-m-d')}}</td>
                            <td>
                                @include('dashboard.Filter_Category.Edit_Filter_Category_Modal')
                                <a href="{{route('filter_category.show',$filterCategory)}}"  class="btn btn-info" ><i class="fa fa-search" ></i> </a>
                                <form method="POST" style="display: inline;" action="{{route('filter_category.destroy',$filterCategory->id)}}" >
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