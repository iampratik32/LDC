@include('Admin.header')
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>All the Help</h3>
            </div>
            <div class="module-body">
                <div class="module-body table">
                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                           width="100%">
                        <thead>
                        <tr>
                            <th>
                                Action
                            </th>
                            <th>
                                Description
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all as $img)
                            <tr class="odd gradeX">
                                <td>
                                    <a href="/admin/help/{{$img->id}}">View</a>
                                </td>
                                <td>
                                    @if(strlen($img->description)>150)
                                        {!! nl2br(e(substr($img->description,0,150))) !!} ...
                                    @else
                                        {!! nl2br(e($img->description)) !!}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.content-->
</div><!--/.span9-->
@include('Admin.footer')
