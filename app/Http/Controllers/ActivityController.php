<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allActivity'] = Activity::all();
        //dd($data);
        return  view('activity', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('create');
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
            $activity = new Activity();
            $activity->title = $request->title;
            $activity->description = $request->description;
            $activity->start_date = $request->start_date;
            $activity->finish_date = $request->finish_date;
            $activity->save();

            // return response()->json(['activity' => $activity, 'message' => 'Success'], 201);
            return redirect()->intended(route('activity.index'))->with('success', 'Success');
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
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
        $settings = Activity::find($id);
        if ($settings->delete()) {
            // return  response()->json(['success'=>'Success'],201);
            return redirect()->intended(route('activity.index'))->with('success', 'Success');
        } else {
            return response()->json(['error', 'Error!'],500);
        }
    }
}
