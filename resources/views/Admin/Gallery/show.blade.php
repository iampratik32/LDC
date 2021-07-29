@include('Admin.header')
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <a href="/admin/gallery"><strong>Back</strong></a>
                <strong class="nav pull-right">Viewing Image</strong>
            </div>
            <div class="module-body">
                <a href="/storage/{{$image->image}}" target="_blank"><img src="/storage/{{$image->image}}" style="width: 500px" height="300px"></a>
                <br><br><br>
                <strong>Caption: </strong>{{$image->caption}}<br>
                <strong>Category: </strong>{{$image->category}}<br>
                <strong>Shown to Users: </strong>
                @if($image->shown)
                    Shown
                @else
                    Not Shown
                @endif
                <br>
                <br>

                <form style="margin-top: 15px;" action="/gallery/" class="form-horizontal row-fluid" enctype="multipart/form-data" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="hidden" value="{{$image->id}}" name="id">
                    <button type="submit" class="btn btn-large btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    <a href="/admin/gallery/edit/{{$image->id}}" class="btn btn-large btn-info">Edit</a>
                </form>

            </div>
        </div>
    </div>
</div>
@include('Admin.footer')
