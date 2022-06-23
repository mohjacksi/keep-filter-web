<button type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#editModal-{{$user->id}}"> <i class="fas fa-edit"></i></button>

<div class="modal fade" id="editModal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="editModal-{{$user->id}}" aria-hidden="true">	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">تحديث بيانات المستخدم - {{$user->name}}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
				<!--begin::Form-->
                <form class="form" method="POST" enctype="multipart/form-data" action="{{route('users.update',$user)}}" >
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-row" >
                            <div class="form-group col-md-6">
                                <label>اسم المستخدم</label>
                                <input name="name" type="text"  value="{{ $user->name }}" class="form-control form-control-solid" placeholder="اسم المستخدم" onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)" required />
                                @error('name')
                                <span class="form-text text-danger" >{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>رقم الهاتف</label>
                                <input name="phone" type="number " min="0"  value="{{ $user->phone }}" class="form-control form-control-solid" placeholder="رقم الهاتف" required />
                                @error('phone')
                                <span class="form-text text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row" >
                            <div class="form-group col-md-12">
                                <label>الموقع</label>
                                <input name="location" type="text"  value="{{ $user->location }}" class="form-control form-control-solid" placeholder="العنوان" required />
                                @error('location')
                                <span class="form-text text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                       
                    </div>
                    <input type="hidden" name="type" value="user">
					<div class="card-footer">
						<button type="submit" class="btn btn-success mr-2">حفظ</button>
						<button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">الغاء</button>
					</div>
				</form>
				<!--end::Form-->
		</div>
	</div>
</div>