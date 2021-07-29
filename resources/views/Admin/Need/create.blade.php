@include('Admin.header')

<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Add A New Need</h3>
            </div>
            <div class="module-body">
                <form action="/need" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="control-group">
                        <label class="control-label" for="Caption">Title</label>
                        <div class="controls">
                            <input type="text" id="caption" placeholder="Need Title" class="span8" name="Title" value="{{ old('Title') }}" >
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
                            <textarea class="span8" rows="5" name="Description">{{old('Description')}}</textarea>
                            <br>
                            @error('Description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn">Add Need</button>
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

