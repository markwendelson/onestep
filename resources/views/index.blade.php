

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<link href="css/import.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
<title>{{ config('app.name') }}</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head><!--popup 소스-->


<body>

<script>
    function fnMove(seq){
        var offset = $("#content" + seq).offset();
        $('html, body').animate({scrollTop : offset.top}, 400);
    }
</script>

<div class="container">
    <div class="col-md-8 mx-auto">
        <nav class="navbar navbar-light bg-light" style="background-color: teal!important">
            <div class="container-fluid pt-2 pb-2">
                <a class="navbar-brand" href="#" style="font-size:4em; color:white;">{{ config('app.name').' '.$settings->where('name','branch')->first()->value}} </a>
                <a class="right" href="{{$settings->where('name','link')->first()->value ?? '#'}}" target="_blank" style="font-size:4em; color:white;">회원가입</a>
            </div>
        </nav>

        <div class="col-md-12 text-center pt-5" style="display:block;background:url(images/img_bg.jpg) no-repeat; background-size:cover;height:1127px;">
            <div class="col-md-12 mx-auto" style="display:block;color:white;">
                <span style="font-size: 2.5em;">안전한 마진거래 플래폼 OPEN</span>
            </div>
            <div class="col-md-12 mx-auto mt-4" style="display:block;color:white;">
                <span style="font-size: 3.25em;">FX마진거래 , 빠르고 쉽게 간편하게</span>
            </div>
            <div class="col-md-12 mx-auto mt-4" style="display:block;color:white;">
                <span style="font-size: 4.75em;">빠르고 정확한</span>
                <span class="text-success" style="font-size: 4.75em;">{{ config('app.name') }}</span>
                <span style="font-size: 5.75em;">{{$settings->where('name','branch')->first()->value}}</span>
            </div>
            <div class="col-md-12 mx-auto mt-4" style="display:block;color:white;">
                <span style="font-size: 3.75em;" class="text-warning">가입하시면 리딩방안내드립니다</span>
            </div>
            <div class="col-md-12 mx-auto mt-4" style="display:block;color:white;">
                <span style="font-size: 2.75em;">수많은 전문가가 실시간 리딩 해드리고 있어서</span>
            </div>
            <div class="col-md-12 mx-auto mt-4" style="display:block;color:white;">
                <span style="font-size: 3.25em;">전문가와 함께 수익 보실수 있습니다.</span>
            </div>
            <div class="col-md-8 mx-auto mt-5 mb-5">
                <div class="form-group-lg">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="{{asset('images/kakaotalk-icon.png')}}" height="60">
                        </span>
                        <input type="text" class="form-control" style="font-size: 2.5em" value="{{$settings->where('name','kakaotalk')->first()->value}}">
                    </div>
                </div>
            </div>
            <div class="col-md-8 mx-auto mt-5 mb-5">
                <div class="form-group-lg">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="{{asset('images/kakaotalk-icon.png')}}" height="60">
                        </span>
                        <input type="text" class="form-control" style="font-size: 2.5em" value="{{$settings->where('name','chat_room_link')->first()->value}}">
                    </div>
                </div>
            </div>
            <div class="col-md-12 mx-auto mt-4" style="display:block;color:white;">
                <span style="font-size: 3.25em;">가입코드 [ {{$settings->where('name','codename')->first()->value}} ] 필수기재</span>
            </div>
        </div>
    </div>

	{{-- <div class="footer">
		<div class="imgBox mb0" onClick="fnMove('2')"><img src="images/img07.jpg" alt="화살표" class="imgBox3" /></div>
	</div> --}}


</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</body>
</html>
