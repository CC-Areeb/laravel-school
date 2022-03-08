@extends('layouts.admin_teacher')

@section('teacher')
<form class="row g-3 needs-validation mx-5 mt-5" novalidate>
@csrf
<div class="search_by_id col-md-6">
    <label for="all_students" class="form-label fs-3">See student by id</label>
    <div class="input-group has-validation">
        <input type="text" class="form-control" name="all_students" id="all_students" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
            Please enter a valid id.
        </div>
    </div>
</div>
<button type="submit" class="single_search_btn btn btn-outline-primary col-md-4 fs-2">Search</button>
</form>
<br><br>



<form action="" method="post" class="">
    @csrf
    <button type="submit" class="single_search_btn btn btn-outline-primary col-md-4 fs-2">Grade students</button>
</form>




<br><br>

<div class="mx-5">
<button type="" class="grade_btn btn btn-outline-primary col-md-4 fs-2 mb-5">Student Grades</button>

<div class="show_grades">
    <table class="grade_table table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last name</th>
                <th scope="col">Physics</th>
                <th scope="col">Chemistry</th>
                <th scope="col">Maths</th>
                <th scope="col">Biology</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>test 1</td>
                <td>test 1</td>
                <td>test 1</td>
                <td>test 1</td> 
                </tr>
    
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>test 2</td>
                <td>test 2</td>
                <td>test 2</td>
                <td>test 2</td>
                </tr>
                
                <tr>
                <th scope="row">3</th>
                <td >Larry</td>
                <td >Bird</td>
                <td>test 3</td>
                <td>test 3</td>
                <td>test 3</td>
                <td>test 3</td>

                </tr>
        </tbody>
        </table>
    </div>
</div>
@endsection