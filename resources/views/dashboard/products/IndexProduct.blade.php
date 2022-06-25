@extends('dashboard.layouts.masterDash')
@section('title') المنتجات @endsection
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
<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">المنتجات</h3>
        </div>
        <div class="card-toolbar">
            <!--begin::Button-->
            @include('dashboard.products.createProductModal')
            <!--end::Button-->
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
                <table class="table table-hover mb-6">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
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
                    </thead>
                    <tbody>
                    @forelse ($products as  $index=>$product)
                        <tr>
                            <td>{{$index +1}}</td>
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

@section('js')
    {{-- <script>
        function previewMultiple(event){
        var saida = document.getElementById("adicionafoto");
        var quantos = saida.files.length;
        for(i = 0; i < quantos; i++){
            var urls = URL.createObjectURL(event.target.files[i]);
            document.getElementById("galeria").innerHTML += '<img src="'+urls+'">';
        }
    }
    </script> --}}

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
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
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