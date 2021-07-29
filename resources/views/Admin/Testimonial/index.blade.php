@include('Admin.header')
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>All the Testimonials</h3>
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
                                Name
                            </th>
                            <th>
                                Country
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all as $img)
                            <tr class="odd gradeX">
                                <td>
                                    <a href="/admin/testimonial/{{$img->id}}">View</a>
                                </td>
                                <td>
                                    @if($img->image==null)
                                        No Image
                                    @else
                                        <a href="/storage/{{$img->image}}" target="_blank"><img src="/storage/{{$img->image}}" width="150px" height="150px"></a>
                                    @endif
                                </td>
                                <td>
                                    {{$img->name}}
                                </td>
                                <td>
                                    {{$img->country}}
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
