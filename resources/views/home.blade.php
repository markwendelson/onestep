@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <tbody>
                            <tr>
                                <td align="center" colspan="2"><h4 class="btn btn-primary rounded-0 pl-5 pr-5 pt-2 pb-2">간단 메뉴얼</h4></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label>지점명변경</label>
                                        <input type="text" class="form-control" name="branch" id="branch" value="{{$settings->where('name','branch')->first()->value;}}">
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-danger" id="btn-update-branch">적용</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label>오픈채팅방링크넣기</label>
                                        <input type="text" class="form-control" name="chat_room_link" id="chat_room_link" value="{{$settings->where('name','chat_room_link')->first()->value;}}">
                                    </div>
                                </td>
                                <td><button class="btn btn-danger" id="btn-update-chat-room-link">적용</button></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label>카톡변경하기</label>
                                        <input type="text" class="form-control" name="kakaotalk" id="kakaotalk" value="{{$settings->where('name','kakaotalk')->first()->value;}}">
                                    </div>
                                </td>
                                <td><button class="btn btn-danger" id="btn-update-kakaotalk">적용</button></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label>코드명변경하기</label>
                                        <input type="text" class="form-control" name="codename" id="codename" value="{{$settings->where('name','codename')->first()->value;}}">
                                    </div>
                                </td>
                                <td><button class="btn btn-danger" id="btn-update-codename">적용</button></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label>사이트링크변경하기 / <span style="color:red">회원가입에 링크가 적용됩니다</span></label>
                                        <input type="text" class="form-control" name="link" id="link" value="{{$settings->where('name','link')->first()->value;}}">
                                    </div>
                                </td>
                                <td><button class="btn btn-danger" id="btn-update-link">적용</button></td>
                            </tr>
                        </tbody>
                    </table>


                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(function() {
        $('#btn-update-branch').on("click", function() {
            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "/update-branch",
                data: {branch:$('#branch').val()},
                success: function(res) {
                    console.log(res);
                },
                error: function(res) {
                    console.log(res.responseJSON);
                }
            })
        })

        $('#btn-update-link').on("click", function() {
            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "/update-link",
                data: {link:$('#link').val()},
                success: function(res) {
                    console.log(res);
                },
                error: function(res) {
                    console.log(res.responseJSON);
                }
            })
        })

        $('#btn-update-chat-room-link').on("click", function() {
            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "/update-chat-room-link",
                data: {chat_room_link:$('#chat_room_link').val()},
                success: function(res) {
                    console.log(res);
                },
                error: function(res) {
                    console.log(res.responseJSON);
                }
            })
        })

        $('#btn-update-kakaotalk').on("click", function() {
            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "/update-kakaotalk",
                data: {kakaotalk:$('#kakaotalk').val()},
                success: function(res) {
                    console.log(res);
                },
                error: function(res) {
                    console.log(res.responseJSON);
                }
            })
        })

        $('#btn-update-codename').on("click", function() {
            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "/update-codename",
                data: {codename:$('#codename').val()},
                success: function(res) {
                    console.log(res);
                },
                error: function(res) {
                    console.log(res.responseJSON);
                }
            })
        })
    })

</script>
@endsection
