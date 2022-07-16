@extends('header')


@section('content')
    <p>主要內容</p>

    <div class="row">
        <div class="col-sm-4">
        <form action="process" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">姓名</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">電話</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        @for ($i = 0; $i < 5; $i++)
            <p>$i =  {{ $i }}</p>
        @endfor



        </div>
    </div>
@endsection
