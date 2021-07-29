@include('Admin.header')

<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Edit this Help</h3>
            </div>
            <div class="module-body">
                <form action="/help" enctype="multipart/form-data" method="POST">
                    @csrf
                    {{ method_field('PUT') }}

                    <input type="hidden" name="id" value="{{$help->id}}">

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Description: </label>
                        <div class="controls">
                            <textarea class="span8" rows="5" name="Description">{{$help->description}}</textarea>
                            <br>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn">Edit This Help</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@include('Admin.footer')
