<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IssueReturn;
use App\Models\Student;
use Auth;

class LibraryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Module Data
        $this->title = trans_choice('module_issue_return', 1);
        $this->route = 'student.library';
        $this->view = 'student.library';
        $this->path = 'library';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['view']      = $this->view;
        $data['path']      = $this->path;

        $student = Student::where('id', Auth::guard('student')->user()->id)->first();

        //Course form reg
        if(isset($enroll) && isset($session)){
            // Get the student's pin registration status.
            $isPinReg = Student::where('id', $student)->first()->is_pin_reg;

            $data['isPinReg'] = $isPinReg; // Pass the isPinReg value to the view.

            // ... previous code ...
        }

        if(isset($student->member)){
            $data['rows'] = IssueReturn::where('member_id', $student->member->id)
                            ->orderBy('id', 'desc')
                            ->get();
        }

        return view($this->view.'.index', $data);
    }
}
