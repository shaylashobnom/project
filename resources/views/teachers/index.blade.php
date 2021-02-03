@extends('teachers.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Teacher </h2>
            </div>
            <div style="margin-top: 10px;">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('teachers.create')}}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
    
            <th>Teacher ID</th>
            <th>Teacher Name</th>
            <th>Teacher Mobile</th>
            <th>Teacher Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
            
                <td>{{ $teacher->teacherId }}</td>
                <td>{{ $teacher->teacher_name }}</td>
                <td>{{ $teacher->teacher_mobile }}</td>
                <td>{{ $teacher->teacher_email }}</td>

                <td>
                    <form action="{{route('teachers.destroy', $teacher->id)}}" method="POST">


                        <a href="{{route('teachers.edit', $teacher->id)}}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection