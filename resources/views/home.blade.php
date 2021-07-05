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
                    <form action="">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td align="center" colspan="2"><h4 class="btn btn-primary rounded-0 pl-5 pr-5 pt-2 pb-2">간단 메뉴얼</h4></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label>지점명변경</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger">적용</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label>오팅채팅방링크넣기</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td><button class="btn btn-danger">적용</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label>카톡변경하기</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td><button class="btn btn-danger">적용</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label>코드명변경하기</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td><button class="btn btn-danger">적용</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label>사이트링크변경하기 / 회원가입에 링크가 적용됩니다</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td><button class="btn btn-danger">적용</button></td>
                                    </tr>
                                </tbody>
                            </table>


                    </form>
                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
