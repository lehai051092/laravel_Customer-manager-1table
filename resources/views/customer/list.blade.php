@extends('home')
@section('content')
    <form>
        @csrf
        <a href="{{route('users.formAdd')}}" class="btn btn-primary">ADD</a>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $key => $customer)
                <tr>
                    <th scope="row"><?php echo ++$key?></th>
                    <td><?php echo $customer->name?></td>
                    <td><?php echo $customer->age?></td>
                    <td><?php echo $customer->email?></td>
                    <td><a href="{{route('users.update', $customer->id)}}" class="btn btn-primary">EDIT</a></td>
                    <td><a href="{{route('users.delete', $customer->id)}}" class="btn btn-primary" onclick="return confirm('You want delete {{$customer->name}}??')">DELETE</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>
@endsection
