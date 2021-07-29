@include('Admin.header')

<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Add New Image</h3>
            </div>
            <div class="module-body">
                <form action="/gallery" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div id="here">

                    </div>
                    <img src="/images/empty.png" id="imgFile" onclick="chooseFile()" style="width: 400px; height: 300px;">
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
                            <input type="text" id="caption" placeholder="Image Caption" class="span8" name="Caption" value="{{ old('Caption') }}" >
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
                                <option value="Gallery">Gallery</option>
                                <option value="Programs">Programs</option>
                                <option value="Needs">Needs</option>
                                <option value="Objectives">Objectives</option>
                                <option value="Help">Help</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Show Image in Gallery?</label>
                        <div class="controls">
                            <label class="checkbox inline">
                                <input type="checkbox" value="Show" name="Show" checked>
                                Show
                            </label>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn">Add Image</button>
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

