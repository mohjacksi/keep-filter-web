@extends('dashboard.layouts.masterDash')
@section('title') بيانات المستخدم - {{$user->title}} @endsection
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
                            <td>#{{$user->id}}</td>
                            <td>{{$user->title}}</td>
                            <td>{{$user->description}}</td>
                        </tr>
                        

                        <tr class="table-active">
                            <th>الكود</th>
                            <th> الكميه لكل كرتونه</th>
                            <th>السعر</th>
                        </tr>
                        <tr>
                            <td>{{$user->code}}</td>
                            <td>{{$user->quantity}}</td>
                            <td>{{$user->price}}</td>
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




{{-- <div class="card card-custom gutter-b">
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
                            <th colspan="{{count($user->Images)}}">الصور</th>
                        </tr>

                        <tr>
                            @foreach ($user->Images as $image)
                                <td>
                                    <img src="{{asset('dashboard/images/products/' . $user->id . '/' . $image->image)}}" width="200px"  alt="{{$user->title}}">
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>

            </div>
            
        </div>

        
        <!--end::Example-->
    </div>

    
</div> --}}



@endsection