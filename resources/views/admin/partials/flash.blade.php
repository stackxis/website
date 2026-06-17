@if (session('status'))
    <div class="admin-flash" role="status">
        {{ session('status') }}
    </div>
@endif

@if ($errors->any())
    <div class="admin-flash admin-flash--error" role="alert">
        <ul class="list-disc pl-5 space-y-1">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
