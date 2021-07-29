@include('Admin.header')
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <a href="/admin/objectives"><strong>Back</strong></a>
                <strong class="nav pull-right">Viewing {{$objective->title}}</strong>
            </div>
            <div class="module-body">
                <br>
                <strong>Title: </strong>{{$objective->title}}<br>
                <strong>Description: </strong>
                @if($objective->description!=null)
                    {!! nl2br(e($objective->description)) !!}
                @else
                    N/A
                @endif
                <br>
                <br>

                <form style="margin-top: 15px;" action="/objective/" class="form-horizontal row-fluid" enctype="multipart/form-data" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="hidden" value="{{$objective->id}}" name="id">
                    <button type="submit" class="btn btn-large btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    <a href="/admin/objective/edit/{{$objective->id}}" class="btn btn-large btn-info">Edit</a>
                </form>

            </div>
        </div>
    </div>
</div>
@include('Admin.footer')
