@include('Admin.header')
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <a href="/admin/testimonial"><strong>Back</strong></a>
                <strong class="nav pull-right">Viewing {{$need->name}}'s Testimonial</strong>
            </div>
            <div class="module-body">
                @if($need->image!=null)
                    <img src="/storage/{{$need->image}}" style="max-height: 250px; max-width: 250px; width: auto; height: auto">
                @else
                    <b>No Image</b>
                @endif
                <br><br>
                <strong>Name: </strong>{{$need->name}}<br>
                    <strong>Country: </strong>{{$need->country}}<br>
                    <strong>Purpose of Visit: </strong>{{$need->purpose}}<br>
                    <strong>Visit Date: </strong>
                    @if($need->date!=null)
                        {{$need->date}}
                    @else
                        No Date Added
                    @endif
                <br><strong>Description: </strong><br>
                @if($need->description!=null)
                    {!! nl2br(e($need->description)) !!}
                @else
                    N/A
                @endif
                <br>
                <br>

                <form style="margin-top: 15px;" action="/testimonial/" class="form-horizontal row-fluid" enctype="multipart/form-data" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="hidden" value="{{$need->id}}" name="id">
                    <button type="submit" class="btn btn-large btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    <a href="/admin/testimonial/edit/{{$need->id}}" class="btn btn-large btn-info">Edit</a>
                </form>

            </div>
        </div>
    </div>
</div>
@include('Admin.footer')
