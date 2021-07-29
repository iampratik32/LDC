@include('Admin.header')
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>All the Objectives</h3>
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
                                Title
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
                                    <a href="/admin/objective/{{$img->id}}">View</a>
                                </td>
                                <td>
                                    {{$img->title}}
                                </td>
                                <td>
                                    {!! nl2br(e($img->description)) !!}
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
