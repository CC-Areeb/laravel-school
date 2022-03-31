<form action="/edit" method="post">
    <table class="table table-light table-striped">
        <thead>
            <tr>
                <th>Student Id</th>
                <th>Attendance Id</th>
                <th>Attendance marked at</th>
                <th>Delete or update</th>
                <th>Updated at</th>
            </tr>
        </thead>

        {{$slot}}
    </table>
</form>