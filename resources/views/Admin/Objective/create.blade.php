@include('Admin.header')
<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Add A New Objective</h3>
            </div>
            <div class="module-body">
                <form action="/objective" method="POST">
                    @csrf
                    <div class="control-group">
                        <label class="control-label" for="Caption">Title</label>
                        <div class="controls">
                            <input type="text" id="caption" placeholder="Objective Title" class="span8" name="Title" value="{{ old('Title') }}" >
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
                            <button type="submit" class="btn">Add Objective</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@include('Admin.footer')

