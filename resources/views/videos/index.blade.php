@extends('welcome')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('videos.create') }}"> Create New video</a>
            </div>
        </div>
    </div>

    <form action="{{ route('videos.search') }}" method="GET">

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Video Name Starting With:</strong>
                    <input type="text" name="name_starting" class="form-control" placeholder="Name"  value="{{ app('request')->input('name_starting') ? app('request')->input('name_starting') : ''}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Video Name Ending With:</strong>
                    <input type="text" name="name_ending" class="form-control" placeholder="Name" value="{{ app('request')->input('name_ending') ? app('request')->input('name_ending') : ''}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @php($i = 0)

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($videos as $video)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $video->name }}</td>
                <td>{{ $video->description }}</td>
                <td>
                    <form action="{{ route('videos.destroy',$video->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('videos.edit',$video->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $videos->links() !!}

@endsection
