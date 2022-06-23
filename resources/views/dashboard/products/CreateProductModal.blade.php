<button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#CreateModal"> <i class="fas fa-plus"></i> اضافه</button>

<div class="modal fade" id="CreateModal" tabindex="-1" role="dialog" aria-labelledby="CreateModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">اضافه منتج جديد</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
				<!--begin::Form-->
                <form class="form" enctype="multipart/form-data" method="POST" action="{{route('products.store')}}" >
                    @csrf
                    <div class="card-body">
                        
                        <div class="form-row" >
                            <div class="form-group col-md-8">
                                <label>العنوان</label>
                                <input name="name" type="text"  value="{{ old('name') }}" class="form-control form-control-solid" placeholder="عنوان المنتج" required />
                                @error('name')
                                <span class="form-text text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label>الكميه في الكرتونه</label>
                                <input name="quantity" type="number" min="1" value="{{ old('quantity') }}" class="form-control form-control-solid" placeholder="الكميه في الكرتونه" required />
                                @error('quantity')
                                <span class="form-text text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="form-row" >
                            <div class="form-group col-md-6">
                                <label>السعر</label>
                                <input name="price" type="number" min="0" value="{{ old('price') }}" class="form-control form-control-solid" placeholder="السعر" required />
                                @error('price')
                                <span class="form-text text-danger" >{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>الكود</label>
                                <input name="code" type="text"  value="{{ old('code') }}" class="form-control form-control-solid" placeholder="الكود   " required />
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
                                        <option value="{{$category->id}}" {{old('type_category_id') == $category->id ? 'selected' : ''}} >{{$category->name}}</option>
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
                                        <option value="{{$category->id}}" {{old('filter_category_id[]') == $category->id ? 'selected' : ''}} >{{$category->name}}</option>
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
                                            <option value="{{$category->id}}" {{old('car_category_id[]') == $category->id ? 'selected' : ''}} >{{$category->name}}</option>
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
                                <textarea name="description"  value="{{ old('description') }}" class="form-control form-control-solid" placeholder="وصف المنتج" required ></textarea>
                                @error('description')
                                <span class="form-text text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>


                        <hr>
                            <div class="form-row" >
                                <div class="form-group col-md-12">
                                    <div class="field" >
                                        <h3>اختر صور واضحه للمنتج</h3>
                                        <input type="file" id="files" name="images[]" multiple required />
                                    </div>
                                </div>
                            </div>
                        <hr>

                        

    
                    </div>
					<div class="card-footer">
						<button type="submit" class="btn btn-success mr-2">اضافه</button>
						<button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">الغاء</button>
					</div>
				</form>
				<!--end::Form-->
		</div>
	</div>
</div>