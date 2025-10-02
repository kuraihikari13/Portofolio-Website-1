<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Models\ShopModel;
use App\Models\EmployeeAttendance;
use App\Models\Attendance;
use App\Models\EmployeeAttendanceCheck;

use Carbon\Carbon;


class EmployeeController extends Controller
{
    public function insertEmployee(Request $request)
    {
        $email = $request->session()->get('email');
        $shop = ShopModel::select("*")->whereEmail($email)->first();
        
        $employee_insert = Employee::create([
            'shop_id' => $shop['shop_id'],
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect('employee');
    }

    public function updateEmployee(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $employee->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect('employee');
    }

    public function deleteEmployee($id)
    {
        $employee = Employee::findOrFail($id);

        $employee->delete();

        return redirect('employee');
    }

    public function attendance(Request $request)
    {
        $email = $request->session()->get('email');
        $shop = ShopModel::select("*")->whereEmail($email)->first();

        $today = Carbon::now()->format('Y-m-d');

        $check_attendance = EmployeeAttendance::select("*")->whereRaw('shop_id = ?', $shop['shop_id'])->whereRaw('date_clock_in = ?', $today)->first();

        if ($check_attendance == NULL)
        {
            $insert = EmployeeAttendance::create([
                'shop_id' => $shop['shop_id'],
                'date_clock_in' => $today,
            ]);

            $check_attendance = EmployeeAttendance::select("*")->whereRaw('shop_id = ?', $shop['shop_id'])->whereRaw('date_clock_in = ?', $today)->first();

            $attendance_id = $check_attendance['id'];
        }
        else
        {
            $attendance_id = $check_attendance['id'];
        }

        $true = $request->true;
        $false = $request->false;

        if($true != NULL)
        {
            foreach($true as $key)
            {
                $insert_true = EmployeeAttendanceCheck::create([
                    'shop_id' => $shop['shop_id'],
                    'employee_id' => $key,
                ]);
                $insert_attendance = Attendance::create([
                    'attendance_id' => $attendance_id,
                    'employee_id' => $key,
                ]);
            }
        }
            
        if($false != NULL)
        {
            foreach($false as $key)
            {
                $delete_check = EmployeeAttendanceCheck::select("*")->whereRaw('employee_id = ?', $key);
                $delete_check->delete();
                $delete_attendance = Attendance::select("*")->whereRaw('employee_id = ?', $key)->whereRaw('attendance_id = ?', $attendance_id);
                $delete_attendance->delete();
            }
        }
            

        return redirect('clock-in');

    }

}
