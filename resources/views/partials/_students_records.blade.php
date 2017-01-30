<div class="row">
    <div class="col-md-12 text-center"><h5><strong>Total Records:-</strong> {!! count($students) !!}</h5></div>
</div>
<div class="row">
    <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>University</th>
            <th>Course</th>
        </tr>
        </thead>
        <tbody>
        @if(count($students) > 0)
            @foreach($students as $student)
                <tr>
                    <td><input name="students[]" type="checkbox" value="{!! $student->id !!}"
                               class="js-select-students"></td>
                    <td>{!! $student->firstname. ' '.$student->surname !!}</td>
                    <td>
                        {!! isset($student->address->houseNo) ? 'House No '.$student->address->houseNo : '-' !!} <br />
                        {!! isset($student->address->line_1) ? $student->address->line_1 : '-' !!} <br />
                        {!! isset($student->address->line_2) ? $student->address->line_2 : '-' !!} <br />
                        {!! isset($student->address->city) ? $student->address->city : '-' !!}  {!! isset($student->address->postcode) ? $student->address->postcode : '-' !!}
                    </td>
                    <td>{!! $student->email !!}</td>
                    <td>{!! $student->course->university !!}</td>
                    <td>{!! $student->course->course_name !!}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5" align="center">Seems nothing here.</td>
            </tr>
        @endif
        </tbody>
    </table>
</div>