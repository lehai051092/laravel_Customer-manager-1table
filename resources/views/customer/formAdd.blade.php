@extends('home')
@section('content')
    <form method="post" action="{{route('users.create')}}">
        @csrf
        <table class="table table-dark">
            <thead>
            <tr>
                <td>
                    <div class="form-group">
                        NAME
                        <input type="text" name="name">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        AGE
                        <input type="text" name="age">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        EMAIL
                        <input type="email" name="email">
                    </div>
                </td>
            </tr>
            </thead>
        </table>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection

