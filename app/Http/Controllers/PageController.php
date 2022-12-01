<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

//use App\Mail\ContactRequest;
//use App\Mail\ObjectRequest;
//use App\Mail\StudioRequest;
//use App\Assets\ViberApi;
//use DiDom\Document;
use Butschster\Head\Facades\Meta;
use Nette\Utils\Json;


class PageController extends Controller
{
    protected $meta;

    public function __contruct(MetaInterface $meta)
    {
        $this->meta = $meta;
    }


    public function index(Request $request) {
        $data = [];

        return view('page.view', compact('data'));
    }

    public function generateCode(Request $request) {
        $data = $request->all();
        $data['bgColorArr'] = explode(',', preg_replace('/[^\d,]/', '', $data['bgColor']));
        $data['fillColorArr'] = explode(',', preg_replace('/[^\d,]/', '', $data['fillColor']));
        $contentCode = view("partials.qrcode",compact('data'))->render();

        return $contentCode;
    }
}
