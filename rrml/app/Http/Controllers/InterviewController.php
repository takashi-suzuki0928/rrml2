<?php

namespace App\Http\Controllers;
use App\Models\t_interview;
use Illuminate\Http\Request;
use App\Http\Requests\InterviewRequest;
use Carbon\Carbon;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
     public function index()
    {
        //
        return view('reserve.interview_index');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reserve.interview_create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InterviewRequest $request)
    {
        //
        $full_date = Carbon::create(
            $request->baby_bday_y, $request->baby_bday_m, $request->baby_bday_d
        );

        // チェックボックス連結
        if (isset($request->food_alergie) && is_array($request->food_alergie)) {
            $food = implode(",", $request->food_alergie);
        }

        if (isset($request->vegetarian) && is_array($request->vegetarian)) {
            $vegetarian = implode(",", $request->vegetarian);
        }
        else{
            $vegetarian = "";
        }

        // 仮でID類格納
        $request->lodging_id   = 100;
        $request->guest_id     = 200;

        $t_interview = new t_interview;
        $t_interview->lodging_id    = $request->lodging_id;
        $t_interview->guest_id 	    = $request->guest_id;
        $t_interview->answer_01     = $request->hospital;
        $t_interview->answer_02     = $full_date;
        $t_interview->answer_03 	= $request->multiparous;
        $t_interview->answer_04 	= $request->children;
        $t_interview->answer_05 	= $request->sick;
        $t_interview->answer_06 	= $request->sick_content;
        $t_interview->answer_07 	= $request->blood;
        $t_interview->answer_08 	= $request->blood_content;
        $t_interview->answer_09 	= $request->medicine;
        $t_interview->answer_10 	= $request->medicine_content;
        $t_interview->answer_11 	= $request->alergie;
        $t_interview->answer_12 	= $request->alergie_content;
        $t_interview->answer_13 	= $food;
        $t_interview->answer_13_t 	= $request->food_alergie_other;
        $t_interview->answer_14     = $request->have_food_alergie;
        $t_interview->answer_15     = $request->food_alergie_shock;
        $t_interview->answer_16     = $vegetarian;
        $t_interview->answer_16_t   = $request->vegetarian_other;
        
        $t_interview->save();

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
        $inputs = t_interview::find($id);

        return view('reserve.interview_show', compact('inputs'));
        /*
        return view('reserve.interview_show', [
            'inputs' => $inputs,
        ]);
        */


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        /*
        // DBから取得
        $inputs = Product::find($request->name('interview_id'));
        //    $inputs['interview_id']






        $inputs = $request->all();
        return view('reserve.interview_edit', [
            'inputs' => $inputs,
        ]);
        */




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
