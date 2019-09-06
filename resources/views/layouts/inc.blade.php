@if (Session::has('message'))
    <div class="alert alert-danger text-center">
        {{ Session::get('message') }}
    </div>        
@endif