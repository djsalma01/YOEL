<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Event;
use Alert;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event=Event::Latest()->get();
        return response()->json($event,status:200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //code...
        
        $validator=Validator::make($request->all(),[
            'title'=>'required',
            'description'=>'required',
            'start'=>'required',
            'end'=>'required',
            'allday'=>'required',
            'color'=>'required',
            'textColor'=>'required',
        ]);
        if($validator->failed()){
                 Alert::error('Error!',$validator->messages()->first());
                 return redirect()->back();
   
        }else{
            if(empty($request->event_id)){
            Event::create($request->all());
            Alert::success("success","Event created successfully");
            return redirect()->back();
            }else{
                Event::where('id',$request->event_id)->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'start'=>$request->start,
                'end'=>$request->end,
                'color'=>$request->color,
                'textColor'=>$request->textColor

                ]);
                Alert::success("success","Event Updated successfully");
                return redirect()->back();

            }


        }
    } catch (\Exception $e) {

        Alert::error('Error',$e->getMessage());
        return redirect()->back();
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
