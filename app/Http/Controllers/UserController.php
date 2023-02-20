<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use App\Models\User_ap;
use Illuminate\Http\Request;
use Illuminate\validation\Rule;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'first_name' => ['required', 'min:3', 'max:13'],
            'last_name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:7'],
            'gender' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $incomingFields['password'] = password_hash($incomingFields['password'], PASSWORD_BCRYPT);

        User_ap::create($incomingFields);
        return 'file has been registered';
    }

    public function showCorrectHomepage()
    {
        if (auth()->check()) {
            $specialists = Specialization::all();
            $specialists = $specialists->toArray();

            return view('profile', ['specialists' => $specialists]);
        } else {
            return view('welcome');
        }

    }

    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'user_email' => 'required',
            'user_password' => 'required',
        ]);

        if (auth()->attempt(['email' => $incomingFields['user_email'], 'password' => $incomingFields['user_password']])) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'you have sucessfully loged in');
        } else {
            return redirect('/')->with('success', 'login failed, no such user in the database');
        }

    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'you have sucessfully loged out ');
    }

    public function search(Request $request)
    {
        $specialistId = $request->query('specialist');
        $q = $request->query('q');

        $this->searchDoctor($specialistId, $q);

    }

    // private function searchDoctor($specialistId, $name)
    // {

    //     $doctors = User_ap::where('status', 'Active')
    //         ->where('type', 'doctor')
    //         ->where(function ($q) use ($name) {
    //             $q->where('first_name', 'like', '%' . $name . '%')
    //                 ->orWhere('last_name', 'like', '%' . $name . '%');
    //         })

    //         ->get();
    //     dd($doctors);
    //     exit;
    //     //inner join with link table.
    // }

    private function searchDoctor($specialistId, $name)
{
    $doctors = User_ap::select('users.*')
        ->join('link_doctors_specialization', 'users.id', '=', 'link_doctors_specialization.doctor_id')

        ->where('link_doctors_specialization.specialization_id', $specialistId)
        ->where('status', 'Active')
        ->where('type', 'doctor')
        ->where(function ($q) use ($name) {
            $q->where('first_name', 'like', '%' . $name . '%')
              ->orWhere('last_name', 'like', '%' . $name . '%');
        })
        ->get();

    dd($doctors);
    exit;
}


}
