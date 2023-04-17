<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Redirect,Response;

class FullCalenderDemoController extends Controller
{

    public function index()
    {
        if(request()->ajax())
        {

         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

         $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
        return Response::json($data);
        }
        return view('teacher.newclasses');
    }


    public function create(Request $request)
    {

        $insertArr = [ 'title' => $request->title,
                       'start' => $request->start,
                       'end' => $request->end
                    ];
        $event = Event::insert($insertArr);
        return Response::json($event);
    }


    public function update(Request $request)
    {
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $event  = Event::where($where)->update($updateArr);

         return json($event);
    }


    public function delete(Request $request)
    {
        $event = Event::where('id',$request->id)->delete();

        // var_dump($event);

        return json($event);
    }


}
