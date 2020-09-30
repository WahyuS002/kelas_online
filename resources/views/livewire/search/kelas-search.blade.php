<div>
    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search..." wire:model="query">

    @if ($query)
        @if ($kelas)
            <div class="position-absolute z-10 bg-white w-full shadow-lg mt-1">
                @foreach ($kelas as $k)
                <a href="#">{{ $k['nama_kelas'] }}</a>
                @endforeach
            </div>
        @else
            <div class="position-absolute z-10 list-item bg-white w-full">No Result</div>
        @endif
    @endif

</div>
