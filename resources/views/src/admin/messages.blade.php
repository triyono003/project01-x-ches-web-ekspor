<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <style>
@import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);body {
        background-color: #E9E9E9;
        font-family: 'Calibri', sans-serif !important
    }
        .mt-100 {
            margin-top: 100px
        }
        .mb-100 {
            margin-bottom: 100px
        }
        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color:#E9E9E9 ;
            background-clip: border-box;
            border: 0px solid transparent;
            border-radius: 0px
        }
        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem
        }
        .card .card-title {
            position: relative;
            font-weight: 600;
            margin-top: 20px;
        }
        .comment-widgets {
            position: relative;
            margin-bottom: 10px
        }
        .comment-widgets .comment-row {
            padding: 14px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin: 10px 0;
        }
        .p-2 {
            padding: 0.5rem !important
        }
        .comment-text {
            padding-left: 15px
        }
        .w-100 {
            width: 100% !important
        }
        .m-b-15 {
            margin-bottom: 10px
        }
        .comment-row {
            background-color: #fff;
            border: 2px solid #121211;
            border-radius: 10px;
        }
        .comment-row:hover {
            background: rgba(0, 0, 0, 0.05)
        }
        .comment-user {
            display: flex;
        }
        .comment-user h4 {
            padding-left: 8px;
        }
        .comment-mail {
            display: flex;
        }
        .comment-mail h6 {
            padding-left: 10px;
        }
        .comment-message {
            margin-top: 10px;
        }
        .comment-date {
            margin-top: 5px;
            display: flex;
        }
        .comment-date span {
            padding-left: 5px;
        }
    </style>
    <div class="container" style="witdh: 100%;">
        <div class="row d-flex justify-content-center mt-70">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fa-regular fa-bell fa-shake fa-3x" style="color: #FF8700"></i>
                        <h4 class="card-title">Pesan untuk anda</h4>
                    </div>
                    <div class="comment-widgets">
                        <!-- Comment -->
  @foreach($messages as $message)
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class="comment-text w-100">
<div class="comment-user">
<i class="fa-solid fa-circle-user fa-lg"style="padding-top: 2px;"></i>
<h4 class="font-medium">{{$message->name}}</h4>
</div>
  <div class="comment-mail">
    <i class="fa-regular fa-envelope" style="padding-top: 2px; color: #9A0005;"></i>
  <h6 class="font-medium">{{$message->email}}</h6>
                                </div>
<div class="comment-message">
  <span class="m-b-15 d-block"> {{$message->message}} </span>
                                </div>
                                <div class="comment-date">
                                    <i class="fa-regular fa-calendar" style="padding-top: 2px"></i>
                                    <span class="text-muted">{{$message->created_at}}</span>
                                </div>
                                <div class="comment-footer float-end">
                       

    <form action="/src/admin/contact/{{$message->id}}"method="post">
    @method("delete")
    @csrf
  <button type="submit" class="btn btn-danger btn-xs dt-delete">
  <i class="fa-solid fa-trash-can fa-1x">  </i>
  </button>
  </form>
                                </div>
                            </div>
                        </div>
    @endforeach                  
                        
                        
                        <!--comment-->

                        <!-- Comment -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>