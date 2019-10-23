@extends('home')
@section('content')
    <form method="post" action="{{route('users.update', $customer->id)}}">
        @csrf
        <table class="table table-dark">
            <thead>
            <tr>
                <td>
                    <div class="form-group">
                        NAME
                        <input type="text" name="name" value="{{$customer->name}}">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        AGE
                        <input type="text" name="age" value="{{$customer->age}}">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        EMAIL
                        <input type="email" name="email" value="{{$customer->email}}">
                    </div>
                </td>
            </tr>
            </thead>
        </table>

        <button type="submit" class="btn btn-primary">EDIT</button>
    </form>
@endsection
