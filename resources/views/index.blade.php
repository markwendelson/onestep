

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<link href="css/import.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
<title>{{ config('app.name') }}</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />

<style>
    .clearfix {
        height: 100px;
    }

    @media (min-width: 1200px){
        .h1, h1 {
            font-size: 4.5rem;
        }

        .h2, h2 {
            font-size: 2.5rem;
        }

        .kakaotalk {
            font-size: 3.5em;
        }

        .kakaotalkb {
            font-size: 4.5em;
        }

    }

    @media (width: 280px){
        .kakaotalk {
            font-size: 2.42em!important;
            padding-left:10px!important;
            padding-top:20px!important;
        }
        .codename {
            font-size: 1.7em!important;
            text-align:center!important;
        }
    }
    @media (width: 360px){
        .codename {
            font-size: 2.25em!important;
            text-align:center!important;
        }
    }

    @media (min-width: 768px) and (max-width: 1242px) {
        .label2 {
            font-size: 1.48em!important;
        }
        .kakaotalkb {
            font-size: 2em!important;
            padding-top: 30px!important;
        }
        .codename {
            font-size: 1.8em!important;
        }
        .kakaotalk {
            font-size: 3em!important;
        }
    }

    .label1 {
        color:maroon;
        text-align:left;
        /* padding-top:10px; */
        padding-right:10px;
    }

    .kakaotalk {
        font-size: 3.5em;
        color:maroon;
        text-align:left;
        padding-top:10px;
        padding-left:20px;
    }

    .kakaotalkb {
        font-size: 3.5em;
        color:maroon;
        text-align:left;
        padding-top:15px;
        padding-left:20px;
    }

    .codename {
        font-size: 3.25em;
        text-align:left;
        padding-top:15px;
    }
</style>
</head><!--popup 소스-->


<body>

<script>
    function fnMove(seq){
        var offset = $("#content" + seq).offset();
        $('html, body').animate({scrollTop : offset.top}, 400);
    }
</script>

<div class="container-fluid">
    <div class="col-md-8 mx-auto">
        {{-- <nav class="navbar navbar-light bg-light" style="background-color: teal!important">
            <div class="container-fluid pt-2 pb-2">
                <a class="navbar-brand" href="#" style="font-size:4em; color:white;">{{$settings->where('name','branch')->first()->value}} </a>
                <a class="right" href="{{$settings->where('name','link')->first()->value ?? '#'}}" target="_blank" style="font-size:4em; color:white;">회원가입</a>
            </div>
        </nav> --}}

        <div class="col-md-12 text-center pt-5" style="display:block;background:url(images/img_bg.png) no-repeat; background-size:cover;">

            <div class="col-md-12 mx-auto mt-4" style="display:block;color:white;">
                <h1 class="text-warning">대박나는 하루 되세요 !!!</h1>
            </div>

            {{-- video --}}
            <div class="col-md-8 mx-auto mt-5">
                <video
                    id="my-video"
                    class="video-js vjs-big-play-centered form-control"
                    controls
                    preload="auto"
                    width="640"
                    height="327"
                    poster="#"
                    data-setup="{}"
                >
                    <source src="{{asset('videos/undefined.mp4')}}" type="video/mp4" />
                    <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank"
                        >supports HTML5 video</a
                    >
                    </p>
                </video>
            </div>
            {{-- end video --}}

            <div class="col-md-8 mx-auto mt-5 mb-5">
                <div class="form-group-lg" style="background-color: white">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img class="img-responsive" src="{{asset('images/kakaotalk-icon.png')}}" height="80">
                        </span>
                        <h2 class="label1 my-auto">카톡<br>상담</h2>
                        <span class="form-control kakaotalk">{{$settings->where('name','kakaotalk')->first()->value}}</span>
                    </div>
                </div>
            </div>

            <div class="col-md-8 mx-auto mt-5 mb-5">
                <div class="form-group-lg" style="background-color: white">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img class="img-responsive" src="{{asset('images/kakaotalk-icon.png')}}" height="80">
                        </span>
                        <a href="{{$settings->where('name','chat_room_link')->first()->value ?? '#'}}" class="form-control kakaotalk" style="color:maroon;font-size: 3.5em;text-align:left;padding-top:15px;padding-left:20px;" target="_blank">오픈채팅방 입장</a>
                    </div>
                </div>
            </div>

            <div class="col-md-10 mx-auto mt-4" style="display:block;color:white;">
                <div class="row ml-5 mr-5">
                    <div class="col-md-4" style="background-color:rgb(4, 167, 18);">
                        <a href="{{$settings->where('name','link')->first()->value}}" class="form-control bg-transparent border-0 text-white" style="font-size: 2.5vw;text-align:center;" target="_blank">회원가입</a>
                    </div>
                    <div class="col-md-8 my-auto">
                        <span class="w-100 bg-transparent border-0 text-white codename">가입코드 [ {{$settings->where('name','codename')->first()->value}} ] 필수기재</span>
                    </div>
                </div>

                <div class="row ml-5 mr-5">
                    <div class="col-md-12">
                        <ul style="font-size: 3.5em;text-align:left;padding-top:15px;padding-left:0!important">
                            <li>1.	선인증 후 진행</li>
                            <li>2.	수수료 안심 후불제 ( 환전액 20% )</li>
                            <li>3.	대리베팅 NO , 직접베팅</li>
                            <li>4.	출발금액의 10배이상 , 수익창출</li>
                            <li>5.	누구나 가능 ( 간보기 금지 )</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 ml-5 mr-5 mb-5 mt-5">
                    <div class="row">
                        <div class="col-md-4 my-auto">
                            <h2 class="label2" style="color: red;">소액투자 목돈 만들기</h2>
                            <h2 class="label2" style="color: yellow;">유출픽 재테크</h2>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group-lg" style="background-color: white;">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <img class="img-responsive" src="{{asset('images/kakaotalk-icon.png')}}" height="100">
                                    </span>
                                    <h2 class="label1 my-auto">카톡<br>상담</h2>
                                    <span class="form-control kakaotalkb">{{$settings->where('name','kakaotalk')->first()->value}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>

	{{-- <div class="footer">
		<div class="imgBox mb0" onClick="fnMove('2')"><img src="images/img07.jpg" alt="화살표" class="imgBox3" /></div>
	</div> --}}


</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
</body>
</html>
