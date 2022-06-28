@extends('dashboard.layouts.masterDash')
@section('title') تحديث بيانات -> {{$product->title}} @endsection
@section('css')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

        <style>
                    input[type="file"] {
            display: block;
            }
            .imageThumb {
            max-height: 75px;
            border: 2px solid;
            padding: 1px;
            cursor: pointer;
            }
            .pip {
            display: inline-block;
            margin: 10px 10px 0 0;
            }
            .remove {
            display: block;
            background: #444;
            border: 1px solid black;
            color: white;
            text-align: center;
            cursor: pointer;
            }
            .remove:hover {
            background: white;
            color: black;
            }

        </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@endsection
@section('content')
<div class="card card-custom">
    <div class="card-header">
     <h3 class="card-title">
       تحديث بيانات -> {{$product->title}}
     </h3>
    </div>
   <!--begin::Form-->
        <form class="form" enctype="multipart/form-data" method="POST" action="{{route('products.store')}}" >
            @csrf
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
                        <div class="alert-text"> <h3> تم اضافه الصور بنجاح  </h3> </div>
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
                        <div class="alert-text"> <h3> تم حذف الصوره بنجاح </h3> </div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                @endif
                <div class="form-row" >
                    <div class="form-group col-md-8">
                        <label>العنوان</label>
                        <input name="name" type="text"  value="{{ $product->title }}" class="form-control form-control-solid" placeholder="عنوان المنتج" required />
                        @error('name')
                        <span class="form-text text-danger" >{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>الكميه في الكرتونه</label>
                        <input name="quantity" type="number" min="1" value="{{ $product->quantity }}" class="form-control form-control-solid" placeholder="الكميه في الكرتونه" required />
                        @error('quantity')
                        <span class="form-text text-danger" >{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-row" >
                    <div class="form-group col-md-6">
                        <label>السعر</label>
                        <input name="price" type="number" min="0" value="{{ $product->price }}" class="form-control form-control-solid" placeholder="السعر" required />
                        @error('price')
                        <span class="form-text text-danger" >{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label>الكود</label>
                        <input name="code" type="text"  value="{{ $product->code }}" class="form-control form-control-solid" placeholder="الكود   " required />
                        @error('code')
                        <span class="form-text text-danger" >{{$message}}</span>
                        @enderror
                    </div>

                </div>

                
                <div class="form-row" >
                    <div class="form-group col-md-6">
                        <label>التصنيف</label>
                        <select name="type_category_id" title="اختر التصنيف المناسب "  required class="selectpicker  form-control-solid form-control"  data-live-search="true">
                            @foreach ($type_category as $category)
                                <option value="{{$category->id}}" {{ $product->type_category_id == $category->id ? 'selected' : ''}} >{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('type_category_id')
                        <span class="form-text text-danger" >{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label>نوع العرض</label>
                        <select name="filter_category_id[]" title="اختر نوع العرض المناسب "  required class="selectpicker  form-control-solid form-control" multiple data-live-search="true">
                            @foreach ($filter_category as $category)
                                <option value="{{$category->id}}" {{ $product->filter_category_id == $category->id ? 'selected' : ''}} >{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('filter_category_id[]')
                        <span class="form-text text-danger" >{{$message}}</span>
                        @enderror
                    </div>

                </div>

                <div class="form-row" >
                    <div class="form-group col-md-12">
                        <label>نوع السياره</label>
                            <select name="car_category_id[]" title="اختر السيارات المناسبه"  required class="selectpicker  form-control-solid form-control" multiple data-live-search="true">
                                @foreach ($car_category as $category)
                                    <option value="{{$category->id}}"  {{$product->cars[$loop->index]->id == $category->id ? 'selected' : ''}} >{{$category->name}}</option>
                                @endforeach
                            </select>
                        @error('car_category_id[]')
                        <span class="form-text text-danger" >{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-row" >
                    <div class="form-group col-md-12">
                        <label>وصف المنتج</label>
                        <textarea name="description" rows="5" class="form-control form-control-solid" placeholder="وصف المنتج" required >{{ $product->description }}</textarea>
                        @error('description')
                        <span class="form-text text-danger" >{{$message}}</span>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success mr-2">حفظ</button>
            </div>
        </form>
    <!--end::Form-->
</div>


<br><br><br>
<div class="card card-custom">
    <div class="card-header">
     <h3 class="card-title">
        تحديث الصور
    </h3>
    </div>
   <!--begin::Form-->
   
   
   
        <div class="card-body">
            <div style="display: flex;">
            @foreach ($product->Images as $image)
                <form class="form"  enctype="multipart/form-data" method="POST" action="{{route('product.deleteImage')}}" style="margin: 5px; border: 1px solid rgb(68, 67, 67);" >
                    @csrf
                    @method('PUT')

                    <div class="imgContainer">
                        <img class="" width="150px" height="150px" src="{{asset('dashboard/images/products/' . $product->id . '/' . $image->image)}}"   alt="{{$product->title}}">
                    </div>

                    <input type="hidden" name="img_id" value="{{$image->id}}">

                    @if(count($product->images) > 3)
                        <div>
                            <button onclick="return confirm('تحذير عند حذف الصوره لا يمكن استرجاعها مره اخري')" style="width:150px" type="submit" class="btn btn-danger btn-xs" >إزاله</button>

                        </div>
                    @endif
                </form>
                @endforeach
            </div>
        </div>
    <form class="form" enctype="multipart/form-data" method="POST" action="{{route('products.insertImage')}}" >
        @csrf
        <div class="card-body">
                    <div class="form-row" >
                        <div class="form-group col-md-12">
                            <div class="field" >
                                <h3>اختر صور واضحه للمنتج</h3>
                                <input type="file" id="files" name="images[]" multiple required />
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="product_id" value="{{$product->id}}">
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success mr-2">حفظ</button>
            </div>
        </form>
    <!--end::Form-->
</div>
@endsection

@section('js')
    <script>
                    $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function(e) {
                var files = e.target.files,
                    filesLength = files.length;
                for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {
                    var file = e.target;
                    $("<span class=\"pip\">" +
                        "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                        "<br/><span class=\"remove\">إزاله</span>" +
                        "</span>").insertAfter("#files");
                    $(".remove").click(function(){
                        $(this).parent(".pip").remove();
                    });
                    });
                    fileReader.readAsDataURL(f);
                }
                console.log(files);
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
            });
    </script>
@endsection