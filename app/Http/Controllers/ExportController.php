<?php

namespace App\Http\Controllers;

use App\Course;
use App\Facades\Export;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Array_;
use phpDocumentor\Reflection\Types\Object_;
use Psy\Formatter\Formatter;

class ExportController extends Controller {
	public function __construct() {

	}

	public function welcome() {
		return view( 'hello' );
	}

	/**
	 * View all students found in the database
	 */
	public function viewStudents() {
		$students = Student::all();

		return view( 'students', compact( [ 'students' ] ) );
	}

	/**
	 * Exports all student data to a CSV file
	 */
	public function exportStudentsToCSV( Request $request ) {

		$selected_ids = $request->get( 'students' );
		$students     = Student::whereIn( 'id', $selected_ids )->get();

		$records = $this->filterStudentData( $students );
		Export::toCSV( $records, 'export_' . date( 'Ymd' ) . '.csv' );
	}

	/**
	 * Exports the total amount of students that are taking each course to a CSV file
	 */
	public function exporttCourseAttendenceToCSV() {

		$attendence = [];
		$records    = Student::join( 'courses', 'students.course_id', '=', 'courses.id' )
		                     ->select( 'course_name', DB::raw( 'count(*) as total' ) )
		                     ->groupBy( 'course_name' )
		                     ->get();
		$attendence = $records->toArray();
		Export::toCSV( $attendence, 'export_course_attendence_' . date( 'Ymd' ) . '.csv' );
	}

	//public function search( Request $request, String $query ) {
	public function search( Request $request ) {

		$query    = $request->get( 'query' );
		$students = Student::where( 'email', $query )
		                   ->orWhere( 'firstname', 'like', '%' . $query . '%' )
		                   ->orWhere( 'surname', 'like', '%' . $query . '%' )
		                   ->orWhereHas( 'course', function ( $q ) use ( $query ) {
			                   $q->where( 'course_name', 'like', '%' . $query . '%' )
			                     ->orwhere( 'university', 'like', '%' . $query . '%' );
		                   } )->get();

		return view( 'students', compact( [ 'students' ] ) );
	}

	/**
	 * Generate Array of students data from resultset
	 *
	 * @param \Illuminate\Database\Eloquent\Collection $students
	 *
	 * @return
	 */
	private function filterStudentData( \Illuminate\Database\Eloquent\Collection $students ) {
		$records = [];
		if ( count( $students ) > 0 ) {
			$records[] = [
				'name'       => "Student Name",
				'address'    => "Address",
				'email'      => "Email",
				'university' => "University",
				'course'     => "Course Attended",
			];

			foreach ( $students as $student ) {
				$records[] = [
					'name'       => $student->firstname . ' ' . $student->surname,
					'address'    => isset( $student->address->houseNo ) ? 'House No ' . $student->address->houseNo . '\n' . $student->address->line_1 . '\n' . $student->address->line_2 . '\n' . $student->address->city . ' ' . $student->address->postcode : '-',
					'email'      => $student->email,
					'university' => $student->course->university,
					'course'     => $student->course->course_name,
				];
			}
		}

		return $records;
	}
}
