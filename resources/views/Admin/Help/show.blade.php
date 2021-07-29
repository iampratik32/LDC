@include('Admin.header')
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <a href="/admin/helps"><strong>Back</strong></a>
            </div>
            <div class="module-body">
                <br>
                <strong>Description: </strong>
                @if($help->description!=null)
                    {!! nl2br(e($help->description)) !!}
                @else
                    N/A
                @endif
                <br>
                <br>

                <form style="margin-top: 15px;" action="/help/" class="form-horizontal row-fluid" enctype="multipart/form-data" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="hidden" value="{{$help->id}}" name="id">
                    <button type="submit" class="btn btn-large btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    <a href="/admin/help/edit/{{$help->id}}" class="btn btn-large btn-info">Edit</a>
                </form>

            </div>
        </div>
    </div>
</div>
@include('Admin.footer')
