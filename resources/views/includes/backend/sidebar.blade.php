
@if (auth()->user()->role == 'admin')
    @include('sidebar.admin')
@elseif (auth()->user()->role == 'guru')
    @include('sidebar.guru')
@endif