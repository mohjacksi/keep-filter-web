<button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#CreateModal"> <i class="fas fa-plus"></i> اضافه</button>

<div class="modal fade" id="CreateModal" tabindex="-1" role="dialog" aria-labelledby="CreateModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">اضافه نوع منتج جديد</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
				<!--begin::Form-->
                <form class="form" method="POST" enctype="multipart/form-data" action="{{route('type_category.store')}}" >
                    @csrf
                    <div class="card-body">
                        <div class="form-row" >
                            <div class="form-group col-md-12">
                                <label>اسم القسم</label>
                                <input name="name" type="text"  value="{{ old('name') }}" class="form-control form-control-solid" placeholder="اسم القسم" required />
                                @error('name')
                                <span class="form-text text-danger" >{{$message}}</span>
                                @enderror
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