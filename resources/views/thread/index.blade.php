@extends ('layouts.front')

@section('content')
<br>

    <h2>Threads</h2>
    <hr>
    <br>


<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">PHP</h5>
                 <small>3 days ago</small>
         </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                 <small>Donec id elit non mi porta.</small>
     </a>

<br>
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
             <h5 class="mb-1">Node Js</h5>
                 <small class="text-muted">3 days ago</small>
         </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                 <small class="text-muted">Donec id elit non mi porta.</small>
    </a>
</div>
@endsection