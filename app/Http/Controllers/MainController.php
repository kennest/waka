<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;

class MainController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('pages.index');
    }

    public function pusher()
    {
        $options = array(
            'cluster' => 'eu',
            'encrypted' => true
        );
        $pusher = new Pusher(
            '9849132e1f27d01ac2fc',
            '9eb714d010840abde021',
            '432972',
            $options
        );

        $data['message'] = 'Oulai Kennest';
        $pusher->trigger('my-channel', 'my-event', $data);
        return view('pages.index');
    }
}
