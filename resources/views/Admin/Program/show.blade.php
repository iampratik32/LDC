@include('Admin.header')
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <a href="/admin/programs"><strong>Back</strong></a>
                <strong class="nav pull-right">Viewing {{$program->title}}</strong>
            </div>
            <div class="module-body">

                <strong>Title: </strong>{{$program->title}}<br>
                <strong>Description: </strong>
                @if($program->description!=null)
                    {!! nl2br(e($program->description)) !!}
                @else
                    N/A
                @endif
                <br>


                <form style="margin-top: 15px;" action="/programmes/" class="form-horizontal row-fluid" enctype="multipart/form-data" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="hidden" value="{{$program->id}}" name="id">
                    <button type="submit" class="btn btn-large btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    <a href="/admin/program/edit/{{$program->id}}" class="btn btn-large btn-info">Edit</a>
                </form>

            </div>
        </div>
    </div>
</div>
@include('Admin.footer')
