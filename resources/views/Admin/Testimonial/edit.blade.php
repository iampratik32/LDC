@include('Admin.header')

<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Edit this Need</h3>
            </div>
            <div class="module-body">
                <form action="/testimonial" enctype="multipart/form-data" method="POST">
                    @csrf
                    {{ method_field('PUT') }}

                    <div id="here">

                    </div>
                    <input type="hidden" name="id" value="{{$need->id}}">
                    <img src="/storage/{{$need->image}}" id="imgFile" onclick="chooseFile()" style="width: 400px; height: 300px;">
                    <br>
                    @error('Image')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                    @enderror
                    <br><br>
                    <div class="control-group">
                        <label class="control-label" for="Caption">Name</label>
                        <div class="controls">
                            <input type="text" id="caption" placeholder="Testimonial Person Name" class="span8" name="Title" value="{{$need->name}}" >
                            <br>
                            @error('Title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Description: </label>
                        <div class="controls">
                            <textarea class="span8" rows="5" name="Description">{{$need->description}}</textarea>
                            <br>
                            @error('Description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$need}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="Caption">Country</label>
                        <div class="controls">
                            <input type="text" id="caption" placeholder="Testimonial Person Country" class="span8" name="Country" value="{{$need->country}}" >
                            <br>
                            @error('Country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="Caption">Visit Date</label>
                        <div class="controls">
                            <input type="text" id="vDate" placeholder="Visitation Date" class="span8" name="Date" value="{{$need->date}}" >
                            <br>
                            @error('Date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="Caption">Purpose of Visit</label>
                        <div class="controls">
                            <input type="text" id="vPurpose" placeholder="Purpose of Visit" class="span8" name="Purpose" value="{{$need->purpose}}" >
                            <br>
                            @error('Purpose')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn">Edit This Testimonial</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function chooseFile(){
        var input = document.createElement('input');
        input.type = 'file';
        input.name='Image';
        input.style.display='none';
        input.onchange = e => {
            var file = e.target.files[0];
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = readerEvent => {
                var content = readerEvent.target.result; // this is the content!
                document.getElementById('imgFile').src=content;
                document.getElementById('file-input').value=file;
            }
        }
        input.click();
        document.getElementById('here').appendChild(input);
    }
</script>

@include('Admin.footer')

