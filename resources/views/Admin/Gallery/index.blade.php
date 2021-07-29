@include('Admin.header')

<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Gallery Images</h3>
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
                                Image
                            </th>
                            <th>
                                Category
                            </th>
                            <th>
                                Position
                            </th>
                            <th>
                                Shown in Gallery?
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all as $img)
                            <tr class="odd gradeX">w
                                <td>
                                    <a href="/admin/gallery/{{$img->id}}">View</a>
                                </td>
                                <td>
                                    <a href="/storage/{{$img->image}}" target="_blank"><img src="/storage/{{$img->image}}" style="width: 200px; height: 150px;"></a>
                                </td>
                                <td>
                                    {{$img->category}}
                                </td>
                                <td>
                                    {{$img->placement}}
                                </td>
                                <td>
                                    @if($img->shown)
                                        Shown
                                    @else
                                        Not Shown
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
