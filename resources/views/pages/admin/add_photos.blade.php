@extends('layouts.admin')
@section('links')
<link rel="stylesheet" type="text/css" href="{{url('')}}/admin_template/css/msdropdown/dd.css" />
@endsection
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <div class="main-page">
	    <div class="forms validation">
            <div class="row">
                <div class="col-md-6 validation-grids">
                    <div class="inline-form widget-shadow">
					    <div class="form-title"><h4>Forma za unos fotografija</h4></div>

                        <div class="form-body">
                            <form action="{{route('admin.upload.image')}}" method = "POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="chooseCategory">Kategorija:</label>
                                    <select name = "categories" class = "form-control">
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

                <div class="col-md-2 validation-grids validation-grids-right float-right ">
                    <div class="inline-form widget-shadow">
					    <div class="form-title"><h4>Forma za unos fotografija koje pripadaju projektu</h4></div>

                        <div class="form-body">
                            <form action="{{route('admin.upload.project.photos')}}" method = "POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="chooseProject">Projekat:</label>
                                    <select class = "form-control" name = "projects">
                                        <option value = "0">Izaberi...</option>
                                        @foreach($projects as $project)
                                            <option class = "mini" value = "{{$project->id_project}}" data-image = "{{url($project->img_url)}}"></option>
                                        @endforeach
                                    </select>
                                </div>
                                <hr>
                                <div class="form-group has-feedback">
                                    <label for="chooseImage">Izaberi fotografiju:</label>
                                    <!-- <input type="file" class="form-control-file" name="new_image" > -->
                                    <input multiple="multiple" name="photos[]" type="file"> 
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

    <script language="javascript">
$(document).ready(function(e) {
try {
$("body select").msDropDown();
} catch(e) {
alert(e.message);
}
});
</script>
@endsection