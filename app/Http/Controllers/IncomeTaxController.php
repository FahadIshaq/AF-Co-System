<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\IncomeTax;
use App\Models\Job;
use Illuminate\Http\Request;

class IncomeTaxController extends Controller
{
    public function index(){
        $name = auth()->user()->name;
        $email = auth()->user()->email;
        $phone = auth()->user()->phone;
        $cnic = auth()->user()->cnic;

        return view('/registration/incometax' , ['name'=>$name, 'email'=>$email, 'phone'=>$phone, 'cnic'=>$cnic]);
    }
    public function register(Request $request){
        
        $user_id = auth()->user()->id;
        $tax_year = $request->input('tax_year');
        $nationality = $request->input('nationality');
        $address = $request->input('address');

        print_r($user_id);
        
        $userIncomeTax = new IncomeTax();
        $userIncomeTax->user_id = $user_id;
        $userIncomeTax->tax_year = $tax_year;
        $userIncomeTax->nationality = $nationality;
        $userIncomeTax->address = $address;
        $userIncomeTax->save();

        // IncomeTax::create(['user_id'=>$user_id, 'tax_year'=>$tax_year, 'nationality'=>$nationality, 'address'=>$address]);

        $business_name = $request->input('business_name');
        $business_address = $request->input('business_address');
        $gross_income = $request->input('gross_income');
        $expenditures = $request->input('expenditures');

        $userBusiness = new Business();
        $userBusiness->user_id = $user_id;
        $userBusiness->name = $business_name;
        $userBusiness->address = $business_address;
        $userBusiness->gross_income = $gross_income;
        $userBusiness->expenditures = $expenditures;
        $userBusiness->save();

        // Business::create(['user_id'=>$user_id, 'name'=>$business_name, 'address'=>$business_address, 'gross_income'=>$gross_income, 'expenditures'=>$expenditures]);

        $company_name = $request->input('company_name');
        $company_address = $request->input('company_address');
        $salary = $request->input('salary');

        $userJob = new Job();
        $userJob->user_id = $user_id;
        $userJob->company_name = $company_name;
        $userJob->company_address = $company_address;
        $userJob->salary = $salary;
        $userJob->save();

        // Job::create(['user_id'=>$user_id, 'company_name'=>$company_name, 'company_address'=>$company_address, 'salary'=>$salary]);

        return redirect('profile/profile');
    }
}
