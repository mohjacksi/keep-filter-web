<button type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#editModal-{{$typeCategory->id}}"> <i class="fas fa-edit"></i></button>

<div class="modal fade" id="editModal-{{$typeCategory->id}}" tabindex="-1" role="dialog" aria-labelledby="editModal-{{$typeCategory->id}}" aria-hidden="true">	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">تحديث البيانات</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
				<!--begin::Form-->
                <form class="form" method="POST" enctype="multipart/form-data" action="{{route('type_category.update',$typeCategory)}}" >
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-row" >
                            <div class="form-group col-md-12">
                                <label>اسم القسم</label>
                                <input name="name" type="text"  value="{{ $typeCategory->name }}" class="form-control form-control-solid" placeholder="اسم القسم" required />
                                @error('name')
                                <span class="form-text text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
					<div class="card-footer">
						<button type="submit" class="btn btn-success mr-2">حفظ</button>
						<button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">الغاء</button>
					</div>
				</form>
				<!--end::Form-->
		</div>
	</div>
</div>