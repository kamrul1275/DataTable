<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;

use App\DataTables\UserDataTable;
use App\Exports\StudentExport;
use Yajra\DataTables\Services\DataTable;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreStudentRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    //  return $dataTable->render('users');
    $users = User::get();

         return view('home', compact('users'));
    }





    public function anyData()
    {
        return Datatables::of(User::query())->make(true);
    }












public function userAdd()
{
   return view('createUser');
}




public function get_store_data(Request $request)
{
    $student = new User();
    $student->name = $request->name;
    $student->email = $request->email;
    $student->password = Hash::make('$request');
    $student->save();
    return redirect()->back()->with('success','Data submited successfully!');
}











    public function get_user_data()
    {
        return Excel::download(new StudentExport, 'students.xlsx');
    }




}
