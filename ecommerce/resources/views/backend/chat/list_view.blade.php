@extends('admin.admin_master_new')

@section('admin')
<!-- Content Wrapper. Contains page content -->
<div class="container-full">

    <!-- Main content -->
    <section class="content">

        <div style="margin-top: 20px;">
            <div class="chat_wrap p-10">

                <div class="chat_main">

                </div> <!-- /.chat_main -->

                <div class="chat_tool">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type message..." id="search">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button" id="chatSend"><i class="fa fa-paper-plane"></i> Send</button>
                        </span>
                    </div><!-- /input-group -->
                </div>
            </div>
        </div>

    </section>
</div>
@endsection

@section('foot_js')
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

<script>
    const ws = new WebSocket(`ws://${document.domain}:9502`)
    ws.onopen = function () {
        const obj = {
            mode: 'admin_login',
        }
        const obj_str = JSON.stringify(obj)
        ws.send(obj_str)
    }
    ws.onmessage = function (e) {
        console.log("message from server：" + e.data)
        const chat_main = $('.chat_main')

        const data = JSON.parse(e.data)
        switch (data.type) {
            case 'init':
                toastr.success('Connect to BestChoice Support');
                break;
            case 'user_say':
                chat_main.append(tmpl('chat_left', data.data))

                // scroll to bottom
                scrollBottom()
                break
            case 'admin_say':
                $('#chatSend').prop('disabled', false)
                chat_main.append(tmpl('chat_right', data.data))

                // scroll to bottom
                scrollBottom()
                break
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
            mode: 'admin_say',
            msg: val,
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
@endsection
