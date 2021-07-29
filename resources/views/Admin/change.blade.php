@include('Admin.header')
<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Change Password</h3>
            </div>
            <div class="module-body">
                <br>
                @if($errors->any())
                    <div class="alert alert-error">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Error!</strong> {{$errors->first()}}
                    </div>
                @endif

                <form action="/admin/change" enctype="multipart/form-data" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="control-group">
                        <label class="control-label" for="Caption">Current Password</label>
                        <div class="controls">
                            <input type="password" id="oldPassword" placeholder="Current Password" class="span3" name="OldPass">
                            <br>
                            @error('OldPass')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="Caption">New Password</label>
                        <div class="controls">
                            <input type="password" id="newPassword" placeholder="New Password" class="span3" name="password">
                            <br>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="Caption">Verify Password</label>
                        <div class="controls">
                            <input type="password" id="vPassword" placeholder="Verify Password" class="span3" name="password_confirmation">
                            <br>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn">Change Password</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@include('Admin.footer')
