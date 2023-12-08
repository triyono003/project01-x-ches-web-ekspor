<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>list admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <style>
        td:last-child {
            text-align: center;
        }
        .input-group input:focus {
            outline: none !important;;
            box-shadow: none;
        }
        h6 {
            margin-top: 10%;
            text-align: center;
            color: #FFA600;
            text-shadow: 0.3px 0.3px 0.3px #0C0C0C;
        }
    </style>
    <div class="container" style="width: 100%;">
        <div class="col-12 col-xl-8 mb-lg-0 mx-auto" style="margin-top: 15%;">
            <i class="fa-solid fa-user fa-bounce fa-4x" style="width: 100%;"></i>
            <br>
            <h6>Privasikan data anda dari siapapun</h6>
            <div class="card" style="margin-top: 5%">
                <div class="card-header" style="display: flex;">
                    <h5 class="col-5">Admin list</h5>
                    <div class="col-md-5">
                        <div class="input-group col-7">
                            <input class="form-control border-end-0 border rounded-pill" type="search" placeholder="search" id="example-search-input">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Hapus</th>
                                </tr>
                            </thead>
<tbody>
  @foreach($user as $users)
  <tr>
  <td>{{$users->id}}</td>
<td><img src="{{asset('storage/'.$users->image)}}" style="border-radius: 50%;" width="50"></td>
  <td>{{$users->username}}</td>
  <td>{{$users->email}}</td>
  <td>{{$users->password}}</td>

<td>
<button type="button" class="btn btn-warning btn-xs dt-edit">
<i class="fa-solid fa-pen-to-square fa-1x"></i>
</button>
</td>
<td>
  <form action="/src/admin/list_admin/{{$users->id}}"method="post">
    @method("delete")
    @csrf
  <button type="submit" class="btn btn-danger btn-xs dt-delete">
  <i class="fa-solid fa-trash-can fa-1x">  </i>
  </button>
  </form>
</td>
                                    
</tr>
@endforeach

</tbody>
  </table>
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Row information</h4>
                                    </div>
                                    <div class="modal-body">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        //Only needed for the filename of export files.
        //Normally set in the title tag of your page.
        document.title = 'Simple DataTable';
        // DataTable initialisation
        $('#example').DataTable(
            {
                "dom": '<"dt-buttons"Bf><"clear">lirtp',
                "paging": false,
                "autoWidth": true,
                "columnDefs": [{
                    "orderable": false, "targets": 5
                }],
                "buttons": [
                    'colvis',
                    'copyHtml5',
                    'csvHtml5',
                    'excelHtml5',
                    'pdfHtml5',
                    'print'
                ]
            }
        );
        //Add row button
        $('.dt-add').each(function () {
            $(this).on('click', function(evt) {
                //Create some data and insert it
                var rowData = [];
                var table = $('#example').DataTable();
                //Store next row number in array
                var info = table.page.info();
                rowData.push(info.recordsTotal+1);
                //Some description
                rowData.push('New Order');
                //Random date
                var date1 = new Date(2016, 01, 01);
                var date2 = new Date(2018, 12, 31);
                var rndDate = new Date(+date1 + Math.random() * (date2 - date1)); //.toLocaleDateString();
                rowData.push(rndDate.getFullYear()+'/'+(rndDate.getMonth()+1)+'/'+rndDate.getDate());
                //Status column
                rowData.push('NEW');
                //Amount column
                rowData.push(Math.floor(Math.random() * 2000) + 1);
                //Inserting the buttons ???
                rowData.push('<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button><button type="button" class="btn btn-danger btn-xs dt-delete"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>');
                //Looping over columns is possible
                //var colCount = table.columns()[0].length;
                //for(var i=0; i < colCount; i++){			}

                //INSERT THE ROW
                table.row.add(rowData).draw(false);
                //REMOVE EDIT AND DELETE EVENTS FROM ALL BUTTONS
                $('.dt-edit').off('click');
                $('.dt-delete').off('click');
                //CREATE NEW CLICK EVENTS
                $('.dt-edit').each(function () {
                    $(this).on('click', function(evt) {
                        $this = $(this);
                        var dtRow = $this.parents('tr');
                        $('div.modal-body').innerHTML = '';
                        $('div.modal-body').append('Row index: '+dtRow[0].rowIndex+'<br/>');
                        $('div.modal-body').append('Number of columns: '+dtRow[0].cells.length+'<br/>');
                        for (var i = 0; i < dtRow[0].cells.length; i++) {
                            $('div.modal-body').append('Cell (column, row) '+dtRow[0].cells[i]._DT_CellIndex.column+', '+dtRow[0].cells[i]._DT_CellIndex.row+' => innerHTML : '+dtRow[0].cells[i].innerHTML+'<br/>');
                        }
                        $('#myModal').modal('show');
                    });
                });
                $('.dt-delete').each(function () {
                    $(this).on('click',
                        function(evt) {
                            $this = $(this);
                            var dtRow = $this.parents('tr');
                            if (confirm("Are you sure to delete this row?")) {
                                var table = $('#example').DataTable();
                                table.row(dtRow[0].rowIndex-1).remove().draw(false);
                            }
                        });
                });
            });
        });
        //Edit row buttons
        $('.dt-edit').each(function () {
            $(this).on('click', function(evt) {
                $this = $(this);
                var dtRow = $this.parents('tr');
                $('div.modal-body').innerHTML = '';
                $('div.modal-body').append('Row index: '+dtRow[0].rowIndex+'<br/>');
                $('div.modal-body').append('Number of columns: '+dtRow[0].cells.length+'<br/>');
                for (var i = 0; i < dtRow[0].cells.length; i++) {
                    $('div.modal-body').append('Cell (column, row) '+dtRow[0].cells[i]._DT_CellIndex.column+', '+dtRow[0].cells[i]._DT_CellIndex.row+' => innerHTML : '+dtRow[0].cells[i].innerHTML+'<br/>');
                }
                $('#myModal').modal('show');
            });
        });
        //Delete buttons
        $('.dt-delete').each(function () {
            $(this).on('click',
                function(evt) {
                    $this = $(this);
                    var dtRow = $this.parents('tr');
                    if (confirm("Are you sure to delete this row?")) {
                        var table = $('#example').DataTable();
                        table.row(dtRow[0].rowIndex-1).remove().draw(false);
                    }
                });
        });
        $('#myModal').on('hidden.bs.modal', function (evt) {
            $('.modal .modal-body').empty();
        });
    });
</script>
</body>
</html>