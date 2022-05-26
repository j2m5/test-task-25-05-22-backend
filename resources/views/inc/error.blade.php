<div class="alert alert-danger mt-2" role="alert">
    @if(is_array($errors))
        @foreach($errors as $error)
            <div>{{ $error }}</div>
        @endforeach
    @else
        <div>{{ $errors }}</div>
    @endif
</div>
