@include('Admin.header')
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Re-order Image</h3>
            </div>
            <div class="module-body">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Caption</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody style="margin: 10px; padding: 10px;" id="thisTable">
                        @foreach(\Illuminate\Support\Facades\DB::table('galleries')->orderBy('placement')->get() as $g)
                            <tr class="odd gradeX" data-index="{{$g->id}}" data-position="{{$g->placement}}">
                                <td>
                                    <img src="/storage/{{$g->image}}" style="width: 100px; height: 100px;">
                                </td>
                                <td>
                                    {{$g->caption}}
                                </td>
                                <td>
                                    {{$g->category}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <br>
                <button class="btn" onclick="save()">Save</button>
                <button class="btn" onclick="refresh()">Cancel</button>

            </div>
        </div>
    </div>
</div>

@include('Admin.footer')

<script type="text/javascript">
    $(document).ready(function (){
       $('table tbody').sortable({
          update: function (event,ui){
              console.log(this);
              $(this).children().each(function (index){
                 console.log(this);
                 if($(this).attr('data-position') != index){
                     $(this).attr('data-position',index).addClass('updated')
                 }
              });
          }
       });
    });

    function save(){
        var table = document.getElementById('thisTable');
        var id = [];
        var pos = [];
        for (var r = 0, n = table.rows.length; r < n; r++) {
            id.push((table.rows[r]).getAttribute("data-index"));
            pos.push((table.rows[r]).getAttribute("data-position"));
        }
        $.ajax({
            url:"/reorder",
            method:"POST",
            data:{id:id,pos:pos, _token: '{{csrf_token()}}'},
            success:function (data){

            }
        });
        // console.log(dict);

    }
    function refresh(){
        location.reload();
    }

</script>
