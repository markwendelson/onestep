<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function updateBranch(Request $request)
    {
        return \DB::table('settings')
                ->where('name', 'branch')
                ->update(['value' => $request->branch]);
    }

    public function updateLink(Request $request)
    {
        return \DB::table('settings')
                ->where('name', 'link')
                ->update(['value' => $request->link]);
    }

    public function updateChatRoomLink(Request $request)
    {
        return \DB::table('settings')
                ->where('name', 'chat_room_link')
                ->update(['value' => $request->chat_room_link]);
    }

    public function updateKakaoTalk(Request $request)
    {
        return \DB::table('settings')
                ->where('name', 'kakaotalk')
                ->update(['value' => $request->kakaotalk]);
    }

    public function updateCodeName(Request $request)
    {
        return \DB::table('settings')
                ->where('name', 'codename')
                ->update(['value' => $request->codename]);
    }
}
