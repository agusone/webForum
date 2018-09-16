@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">CREATE THREAD</div>

                <div class="card-body">
                    <form action="{{Route('forum/store')}}" mothod="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="form-group">
                             <input type="text" name="title" class="form-control" placeholder="title.." >
                         </div>

                         <div class="form-group">
                             <input type="text" name="Descriptipn" class="form-control" placeholder="Description.." >
                         </div>
 
                            <button type="submit" class="btn btn-dark btn-block" > Post! </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
