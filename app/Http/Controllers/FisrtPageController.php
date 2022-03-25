<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Entries;
use App\Models\Users;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FisrtPageController extends Controller
{
    public function index()
    {
        $entries = Entries::with('employee')->get();

        return view('index')->with(compact('entries'));
    }

    //Users
    public function users()
    {
        $users = Users::all();
        return view('users')->with(compact('users'));
    }

    public function add_user(Request $request)
    {
        if ($request->method() == 'POST') {
            $validator = $request->validate([
                'username' => 'required',
                'password' => 'required'
            ]);
            $username = $request->input('username');
            $password = $request->input('password');
            $name = $request->input('stud_name');
            DB::insert('insert into users (username,password) values(?,?)', [$username, $password]);
            return redirect('users')->with('success', 'User has been updated successfully.');
        } else {
            return view('addUser');
        }
    }

    public function delete_users($id)
    {
        $user = Users::find($id);
        Users::where('id', $id)->delete();
        return redirect('users')->with('success', 'Users has been updated successfully.');
    }

    public function update_users(Request $request, $id)
    {
        $user = Users::find($id);
        if ($request->method() == 'POST') {
            $validator = $request->validate([
                'username' => 'required',
                'password' => 'required'
            ]);
            $userUp = Users::find($id);
            $userUp->username = $request->input('username');
            $userUp->password = $request->input('password');
            $userUp->timestamps = false;
            $userUp->update();
            return redirect('users')->with('success', 'User has been updated successfully.');
        } else {
            return view('userUpdate')->with(compact('user'));
        }
    }

    //Entries
    public function entries()
    {
        $entries = Entries::all();
        return view('entries')->with(compact('entries'));
    }

    public function add_entrie(Request $request)
    {
        if ($request->method() == 'POST') {
            $validator = $request->validate([
                'employee_id' => 'required',
                'date' => 'required',
                'check_in' => 'required',
                'check_out' => 'required',
            ]);
            $employee_id = $request->input('employee_id');
            $date = $request->input('date');
            $newDate = date("Y-m-d", strtotime($date));
            $check_in = $request->input('check_in');
            $check_out = $request->input('check_out');
            $created_at = date('Y-m-d');
            DB::insert('insert into entries (employee_id,date,check_in,check_out,created_at) values(?,?,?,?,?)', [$employee_id, $newDate, $check_in, $check_out, $created_at]);
            return redirect('entries')->with('success', 'Entrie has been updated successfully.');
        } else {
            $employees = Employees::all();
            return view('addEntrie')->with(compact('employees'));
        }
    }

    public function delete_entries($id)
    {
        Entries::where('id', $id)->delete();
        return redirect('entries')->with('success', 'Entries has been updated successfully.');
    }

    public function update_entries(Request $request, $id)
    {
        $entrie = Entries::find($id);

        if ($request->method() == 'POST') {
            $validator = $request->validate([
                'employee_id' => 'required',
                'date' => 'required',
                'check_in' => 'required',
                'check_out' => 'required',
            ]);
            $entrieUp = Entries::find($id);

            $entrieUp->employee_id = $request->input('employee_id');
            $date = $request->input('date');
            $newDate = date("Y-m-d", strtotime($date));
            $entrieUp->date = $newDate;
            $entrieUp->check_in = $request->input('check_in');
            $entrieUp->check_out = $request->input('check_out');
            $entrieUp->update();
            return redirect('entries')->with('success', 'Entrie has been updated successfully.');
        } else {
            $employees = Employees::all();
            return view('entriesUpdate')->with(compact('entrie', 'employees'));
        }
    }

    //Employees
    public function employees()
    {
        $employees = Employees::all();
        return view('employees')->with(compact('employees'));
    }

    public function add_employer(Request $request)
    {

        if ($request->method() == 'POST') {

            $validator = $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
            ]);

            $first_name = $request->input('first_name');
            $last_name = $request->input('last_name');
            $created_at = date('Y-m-d');
            DB::insert('insert into employees (first_name,last_name,created_at) values(?,?,?)', [$first_name, $last_name, $created_at]);
            return redirect('employees')->with('success', 'Employees has been updated successfully.');
        } else {
            return view('addEmployee');
        }
    }

    public function delete_employees($id)
    {
        Employees::where('id', $id)->delete();
        return redirect('employees')->with('success', 'Employees has been updated successfully.');
    }

    public function update_employees(Request $request, $id)
    {
        $employer = Employees::find($id);

        if ($request->method() == 'POST') {
            $validator = $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
            ]);
            $employerUp = Employees::find($id);
            $employerUp->first_name = $request->input('first_name');
            $employerUp->last_name = $request->input('last_name');
            $employerUp->update();
            return redirect('employees')->with('success', 'Employee has been updated successfully.');
        } else {
            return view('employeeUpdate')->with(compact('employer'));
        }
    }
}
