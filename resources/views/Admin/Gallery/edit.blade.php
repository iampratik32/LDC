@include('Admin.header')
<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Edit Image</h3>
            </div>
            <div class="module-body">
                <form action="/gallery" enctype="multipart/form-data" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div id="here">

                    </div>
                    <input type="hidden" name="id" value="{{$image->id}}">
                    <img src="/storage/{{$image->image}}" id="imgFile" onclick="chooseFile()" style="width: 400px; height: 300px;">
                    <br>
                    @error('Image')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                    @enderror
                    <br><br>
                    <div class="control-group">
                        <label class="control-label" for="Caption">Caption</label>
                        <div class="controls">
                            <input type="text" id="caption" placeholder="Image Caption" class="span8" name="Caption" value="{{$image->caption}}" >
                            <br>
                            @error('Caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Category:</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="Category">
                                @if($image->category=="Gallery")
                                    <option value="Gallery" selected>Gallery</option>
                                @else
                                    <option value="Gallery">Gallery</option>
                                @endif
                                @if($image->category=="Programs")
                                    <option value="Programs" selected>Programs</option>
                                @else
                                    <option value="Programs">Programs</option>
                                @endif
                                @if($image->category=="Needs")
                                    <option value="Needs" selected>Needs</option>
                                @else
                                    <option value="Needs">Needs</option>
                                @endif
                                @if($image->category=="Objectives")
                                    <option value="Objectives" selected>Objectives</option>
                                @else
                                    <option value="Objectives">Objectives</option>
                                @endif
                                    @if($image->category=="Help")
                                    <option value="Help" selected>Help</option>
                                @else
                                    <option value="Help">Help</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Show in Gallery?</label>
                        <div class="controls">
                            <label class="checkbox inline">
                                @if($image->shown)
                                    <input type="checkbox" value="Show" name="Show" checked>
                                @else
                                    <input type="checkbox" value="Show" name="Show">
                                @endif
                                Show
                            </label>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn">Update Image</button>
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
