<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- /// Google Analytics Code // -->
    <!-- /// Google Analytics Code // -->

    <title>Best Choice Chat</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/rateit.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/front_my.css') }}">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.css') }}">

    <!-- Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

</head>
<body class="cnt-home">

<div class="container">
    <div class="chat_wrap p-10">

        <div class="chat_main">

            {{-- <div class="media">
                <div class="media-left">
                    <a href="javascript:;">
                        <img class="media-object" src="{{ asset('img/kefu.jpeg') }}">
                    </a>
                </div>
                <div class="media-body">
                    <div class="msg_head">
                        <span class="media-heading d-line-block">self</span> <span class="msg_date">02-11 23:11:11</span>
                    </div>
                    <div class="msg_content">
                        Cras sit amet nibh libero, in
                    </div>
                </div>
            </div>


            <div class="media">
                <div class="media-body text-right">
                    <div class="msg_head">
                        <span class="media-heading d-line-block">self</span> <span class="msg_date">02-11 23:11:11</span>
                    </div>
                    <div class="msg_content">
                        Cras sit amet nibh libero,
                    </div>
                </div>
                <div class="media-right">
                    <a href="javascript:;">
                        <img class="media-object" src="{{ asset('img/77.jpeg') }}">
                    </a>
                </div>
            </div>

            @for ($auto = 1; $auto <= 10; $auto++)
            <div class="media">
                <div class="media-left">
                    <a href="javascript:;">
                        <img class="media-object" src="{{ asset('img/kefu.jpeg') }}">
                    </a>
                </div>
                <div class="media-body">
                    <div class="msg_head">
                        <span class="media-heading d-line-block">self</span> <span class="msg_date">02-11 23:11:11</span>
                    </div>
                    <div class="msg_content">
                        Cras sit amet nibh libero, in
                    </div>
                </div>
            </div>
            @endfor --}}

        </div> <!-- /.chat_main -->

        <div class="chat_tool">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type your message..." id="search">
                <span class="input-group-btn">
                    <button class="btn btn-info" type="button" id="chatSend"><i class="fa fa-paper-plane"></i> Send</button>
                </span>
            </div><!-- /input-group -->
        </div>
    </div>
</div>


<script src="{{ asset('frontend/assets/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/tmpl.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/js.cookie.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script type="text/x-tmpl" id="chat_left">
    <div class="media">
        <div class="media-left">
            <a href="javascript:;">
                <img class="media-object" src="{%=o.avatar%}">
            </a>
        </div>
        <div class="media-body">
            <div class="msg_head">
                <span class="media-heading d-line-block">{%=o.username%}</span> <span class="msg_date">{%=o.date%}</span>
            </div>
            <div class="msg_content">
                {%=o.content%}
            </div>
        </div>
    </div>
</script>
<script type="text/x-tmpl" id="chat_right">
    <div class="media">
        <div class="media-body text-right">
            <div class="msg_head">
                <span class="media-heading d-line-block">{%=o.username%}</span> <span class="msg_date">{%=o.date%}</span>
            </div>
            <div class="msg_content">
                {%=o.content%}
            </div>
        </div>
        <div class="media-right">
            <a href="javascript:;">
                <img class="media-object" src="{%=o.avatar%}">
            </a>
        </div>
    </div>
</script>

@if (Auth::user())
<script>
    const username = '{{ Auth::user()->name}}'
    const avatar = '{{ url('upload/user_images/' . Auth::user()->profile_photo_path) }}'
</script>
@else
<script>
    const username = ''
    const avatar = ''
</script>
@endif
<script>
    const ws = new WebSocket(`ws://${document.domain}:9502`)
    ws.onopen = function () {
        const obj = {
            mode: 'user_login',
        }
        const obj_str = JSON.stringify(obj)
        ws.send(obj_str)
    }
    ws.onmessage = function (e) {
        console.log("message from server:" + e.data)
        const chat_main = $('.chat_main')

        const data = JSON.parse(e.data)
        switch (data.type) {
            case 'init':
                toastr.success('Connect to BestChoice Support');
                break;
            case 'user_say':
                $('#chatSend').prop('disabled', false)
                chat_main.append(tmpl('chat_right', data.data))

                // scroll to bottom
                scrollBottom()
                break
            case 'admin_say':
                chat_main.append(tmpl('chat_left', data.data))

                // scroll to bottom
                scrollBottom()
                break
            default:
        }
    }

    function sendMsg() {
        const btn = $('#chatSend')
        const search = $('#search')
        const val = search.val().trim()
        if (!val) {
            alert('Please enter the message')
            return
        }
        const obj = {
            mode: 'user_say',
            msg: val,
            username: username,
            avatar: avatar,
        }
        const obj_str = JSON.stringify(obj)
        ws.send(obj_str)
        search.val(null)
        btn.prop('disabled', true)
    }

    $('#chatSend').click(function () {
        sendMsg()
    })
    $("#search").on('keyup', function (e) {
        if (e.key === 'Enter' || e.keyCode === 13) {
            sendMsg()
        }
    });

    // scroll to bottom
    function scrollBottom() {
        const chat_main = $('.chat_main')
        chat_main.scrollTop(chat_main[0].scrollHeight)
    }
    setTimeout(() => {
        scrollBottom()
    }, 300)
</script>

</body>
</html>
