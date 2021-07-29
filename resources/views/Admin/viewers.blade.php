@include('Admin.header')

<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>View Counter</h3>
            </div>
            <div class="module-body">
            <strong style="margin-right: 10px;">Total Viewers:</strong>{{$tv}}<br><br>
                <h5>
                    Top Viewers by Country
                </h5>
                <div class="module-body table">
                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                           width="100%">
                        <thead>
                        <tr>
                            <th>
                                Country
                            </th>
                            <th>
                                Count
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tc as $img)
                            <tr class="odd gradeX">
                                <td>
                                    {{$img->os}}
                                </td>
                                <td>
                                    {{$img->total}}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <br>
                <h5>
                    Last 50 viewers
                </h5>
                <div class="module-body table">
                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                           width="100%">
                        <thead>
                        <tr>
                            <th>
                                Visit Time
                            </th>
                            <th>
                                Country
                            </th>
                            <th>
                                City
                            </th>
                            <th>
                                Browser
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($visitors as $img)
                            <tr class="odd gradeX">
                                <td>
                                    {{$img->created_at}}
                                </td>
                                <td>
                                    {{$img->country_name}}
                                </td>
                                <td>
                                    {{$img->city}}
                                </td>
                                <td>
                                    {{$img->browser}}
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