<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('user/register');
    }

    public function check(Request $request)
    {
        $request->validate([
            'last_name' => ['required', 'string', 'max:32'],
            'first_name' => ['required', 'string', 'max:32'],
            'last_name_kana' => ['required', 'string', 'max:32'],
            'first_name_kana' => ['required', 'string', 'max:32'],
            'first_name_kana' => ['required', 'string', 'max:32'],
            'email' => ['required', 'string', 'email', 'max:255', 'confirmed', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

		$inputs = $request->all();
		
		//セッションに書き込む
		$request->session()->put("user_form_input", $inputs);

        return redirect('confirm');
    }


    public function confirm(Request $request)
    {
        $inputs = $request->session()->get("user_form_input");
        //$inputs = $request->all();
        // 格納用に加工
        $inputs['zipcode'] = substr($inputs['zipcode'], 0, 3) . "-" . substr($inputs['zipcode'], 3, 4);
        // 建物名
        if(empty($inputs['extended_address'])){
            $inputs['extended_address'] = "なし";
        }
        $inputs['zipcode'] = substr($inputs['zipcode'], 0, 3) . "-" . substr($inputs['zipcode'], 3, 4);

        return view('User/confirm', [
            'inputs' => $inputs,
        ]);
    }




    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $user = User::create([
            /*
            'last_name' => $request->family_name,               // 姓
            'first_name' => $request->first_name,               // 名
            'last_name_kana' => $request->family_name_kana,     // 姓(カナ)
            'first_name_kana' => $request->first_name_kana,     // 名(カナ)
            'bday_y' . '-' . 'bday_m' . '-' . 'bday_d' => $request->birth_date, // 生年月日
            'zipcode' => $request->postcode,                    // 郵便番号
            'prefecture' => $request->address_pref,             // 都道府県
            'locality' => $request->address_city,               // 市区町村・番地
            'extended_address' => $request->address_bld,        // 建物・部屋番号
            'tel' => $request->tel,                             // 電話番号
            // 通常会員
            UserType_normal => $request->user_type,           // 会員種別
            // ★フォーマット不明
            ”12345678ABCDEFG” => $request->introduction_code,   // 紹介コード
            */
            'last_name' => $request->name,               // 姓
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
