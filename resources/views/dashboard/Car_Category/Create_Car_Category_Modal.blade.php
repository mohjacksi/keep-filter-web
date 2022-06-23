<button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#CreateModal"> <i class="fas fa-plus"></i> اضافه</button>

<div class="modal fade" id="CreateModal" tabindex="-1" role="dialog" aria-labelledby="CreateModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">اضافه سياره جديده</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
				<!--begin::Form-->
                <form class="form" method="POST" enctype="multipart/form-data" action="{{route('car_category.store')}}" >
                    @csrf
                    <div class="card-body">
                        
                        <div class="form-row" >
                            <div class="form-group col-md-6">
                                <label>اسم السياره</label>
                                <input name="name" type="text"  value="{{ old('name') }}" class="form-control form-control-solid" placeholder="اسم السياره" required />
                                @error('name')
                                <span class="form-text text-danger" >{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>اختر صوره</label>
                                <input name="img" type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" required>
                                <img id="blah" alt="your image" width="100" height="100" />

                            </div>

                            
                        </div>
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