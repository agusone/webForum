@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">CREATE THREAD</div>

                <div class="card-body">
                    <form action="{{Route('forum.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="form-group">
                             <input type="text" name="title" class="form-control" placeholder="title.." >
                         </div>

                         <div class="form-group">
                             <textarea type="text" name="description" class="form-control" placeholder="Description.." > </textarea>
                         </div>
                         

                         <div class="form-group">
                             <input type="file" name="image" class="form-control" >
                         </div>
 
 
                            <button type="submit" class="btn btn-dark btn-block" > Post! </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
        CKEDITOR.replace( 'description' );
</script>
@endsection