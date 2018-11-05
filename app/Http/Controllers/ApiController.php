<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ApiController extends Controller
{
    private $records = [
        ['name' => 'なんくるホテル', 'pref_name' => 'okinawa', 'description' => '沖縄を代表するホテル。'],
        ['name' => 'サムホテル', 'pref_name' => 'okinawa', 'description' => 'ドン・キホーテの床を作成した男のホテル'],
        ['name' => 'サムギョプサル', 'pref_name' => 'okinawa', 'description' => '美味しい料理。'],
        ['name' => '札幌ホテル', 'pref_name' => 'hokkaido', 'description' => 'さっぽろをだいひょうするホテル'],
        ['name' => 'カニホテル', 'pref_name' => 'hokkaido', 'description' => '美味しいカニが出るホテル'],
        ['name' => 'ジンギスカン', 'pref_name' => 'hokkaido', 'description' => '美味しい料理'],
        ['name' => '東京さいたまホテル', 'pref_name' => 'tokyo', 'description' => '実はさいたまにあるホテル'],
        ['name' => '東京湾わんホテル', 'pref_name' => 'tokyo', 'description' => 'しまむーが運営するホテル'],
        ['name' => '妙なホテル', 'pref_name' => 'tokyo', 'description' => '妙な雰囲気のホテル'],
    ];

    public function __construct()
    {
        $this->records = collect($this->records);
    }


    public function search($prefName)
    {
        if ($prefName == 'all') {
            return $this->records;
        }
        return $this->records->filter(function ($hotel) use ($prefName) {
            return $prefName == $hotel['pref_name'];
        });
    }

    public function detail($id)
    {
        $hotel = $this->records->get($id);
        if (!$hotel) {
            throw new NotFoundHttpException('OMG');
        }
        return $hotel;
    }
}
