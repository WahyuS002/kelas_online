<div>
    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search..." wire:model="query">

    @if ($query)
    <div class="search-dropdown">
        <div class="row">
            @if ($kelas)
            @foreach ($kelas as $k)
            <div class="col-1 mr-2">
                <img src="{{ asset('storage/kelas/laravel.png') }}" width="27" height="27">
            </div>
            <div class="col-10">
                <a href="kelas/{{ $k['slug_kelas'] }}/detail">
                    {{ $k['nama_kelas'] }}
                </a>
            </div>
            @endforeach
            @else
            <p>No Result</p>
            @endif
        </div>
    </div>
    @endif


    {{-- @if ($query)
        @if ($kelas)
        <div class="position-absolute z-10 bg-white w-full shadow-lg mt-1">
            @foreach ($kelas as $k)
            <a href="#">{{ $k['nama_kelas'] }}</a>
            @endforeach
        </div>
        @else
        <div class="position-absolute z-10 list-item bg-white w-full">No Result</div>
        @endif
        @endif --}}

    </div>
