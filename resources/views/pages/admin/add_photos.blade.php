@extends('layouts.admin')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <div class="main-page">
	    <div class="forms validation">
            <div class="row">
                <div class="col-md-6 validation-grids validation-grids-right">
                    <div class="inline-form widget-shadow">
					    <div class="form-title"><h4>Forma za unos fotografija</h4></div>

                        <div class="form-body">
                            <form action="{{route('admin.upload.image')}}" method = "POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="chooseCategory">Kategorija:</label>
                                    <select name = "categories">
                                        <option value = "0">Izaberi...</option>
                                        @foreach($categories as $category)
                                            <option value = "{{$category->id_category}}">{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <hr>
                                <div class="form-group has-feedback">
                                    <label for="chooseImage">Izaberi fotografiju:</label>
                                    <input type="file" class="form-control-file" name="new_image" >
                                </div>
                                <hr>


                                <div class="bottom">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value = "Unesi">
                                    </div>
                                </div>
                            </form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
@endsection