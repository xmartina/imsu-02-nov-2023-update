<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\StudentAssignment;
use App\Models\StudentEnroll;
use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\Student;
use App\Models\Event;
use App\Models\Fee;
use Carbon\Carbon;
use Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Module Data
        $this->title = trans_choice('module_dashboard', 1);
        $this->route = 'student.dashboard';
        $this->view = 'student';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['title'] = $this->title;
        $data['route'] = $this->route;
        $data['view'] = $this->view;


        $student_id = Auth::guard('student')->user()->id;
        $current_session = Session::where('status', '1')->where('current', '1')->first();

        if(isset($current_session)){
            $enroll = StudentEnroll::where('student_id', $student_id)
                            ->where('session_id', $current_session->id)
                            ->where('status', '1')
                            ->first();

            if(isset($enroll)){
                $session = $enroll->session_id;
                $semester = $enroll->semester_id;
            }
        }

        //Course form reg
        if(isset($enroll) && isset($session)){
            // Get the student's pin registration status.
            $isPinReg = Student::where('id', $student_id)->first()->is_pin_reg;

            // Display different content to students depending on their pin registration status.
            // Check if the pin registration status is 1.
            if ($isPinReg === 1) {
                null;
            } else if ($isPinReg === 2) { ?>
<script>
    // Create a new modal element.
    const modal = document.createElement('div');
    modal.classList.add('modal');

    // Create a modal header.
    const modalHeader = document.createElement('div');
    modalHeader.classList.add('modal-header');
    modalHeader.textContent = 'This modal cannot be closed.';

    // Create a modal body.
    const modalBody = document.createElement('div');
    modalBody.classList.add('modal-body');
    modalBody.textContent = 'This is the modal body.';

    // Create a modal footer.
    const modalFooter = document.createElement('div');
    modalFooter.classList.add('modal-footer');

    // Create a close button.
    const closeButton = document.createElement('button');
    closeButton.classList.add('btn');
    closeButton.classList.add('btn-primary');
    closeButton.textContent = 'Close';

    // Prevent the close button from closing the modal.
    closeButton.addEventListener('click', function(event) {
        event.preventDefault();
    });

    // Append the modal header, body, and footer to the modal element.
    modal.appendChild(modalHeader);
    modal.appendChild(modalBody);
    modal.appendChild(modalFooter);

    // Append the close button to the modal footer.
    modalFooter.appendChild(closeButton);

    // Append the modal element to the body element.

    document.body.appendChild(modal);

    // Show the modal.
    modal.classList.add('show');
</script>
<?php
                // Run code if the pin registration status is 2.
            } else {
               echo 'Error';
            }
        }

        // Assignments
        if(isset($enroll) && isset($session) && isset($semester)){
        $assignments = StudentAssignment::with('studentEnroll')->whereHas('studentEnroll', function ($query) use ($student_id, $session, $semester){
            $query->where('student_id', $student_id);
            $query->where('session_id', $session);
            $query->where('semester_id', $semester);
        });
        $assignments->with('assignment')->whereHas('assignment', function ($query){
            $query->where('start_date', '<=', Carbon::today());
        });

        $data['assignments'] = $assignments->orderBy('id', 'desc')->limit(10)->get();
        }


        // Fees
        if(isset($enroll) && isset($session) && isset($semester)){
        $fees = Fee::with('studentEnroll')->whereHas('studentEnroll', function ($query) use ($student_id, $session, $semester){
            $query->where('student_id', $student_id);
            $query->where('session_id', $session);
            $query->where('semester_id', $semester);
        });

        $data['fees'] = $fees->where('status', '<=', '1')
                        ->orderBy('assign_date', 'desc')
                        ->limit(10)
                        ->get();
        }


        // Events
        $data['events'] = Event::where('status', '1')->orderBy('id', 'asc')->get();

        $data['latest_events'] = Event::where('status', '1')
                            ->where('end_date', '>=', Carbon::today())
                            ->orderBy('start_date', 'asc')
                            ->limit(10)
                            ->get();


        return view($this->view.'.index', $data);
    }
}
