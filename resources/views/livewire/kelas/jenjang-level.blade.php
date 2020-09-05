<div class="form-row mb-4">
    <div class="form-group col-md-4">
        <label for="nama_kelas">Nama Kelas <span class="required">*</span></label>
        <input name="nama_kelas" type="text" class="form-control" placeholder="Kelas HTML Dasar">
        @error('nama_kelas')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group col-md-4">
        <label for="jenjang">Jenjang <span class="required">*</span></label>
        <select name="jenjang" class="form-control" wire:model="jenjang">
            <option value="">Pilih Jenjang . . .</option>
            <option value="sd">SD</option>
            <option value="smp">SMP</option>
            <option value="sma">SMA</option>
            <option value="kuliah">Kuliah</option>
            <option value="umum">Umum</option>
        </select>
        @error('jenjang')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group col-md-4">
        <label for="level">Level <span class="required">*</span></label>
        <select name="level" class="form-control">
            @if (!$jenjang)
                <option value="">Pilih Level . . .</option>
            @endif
            @if ($jenjang == 'sd')
                @foreach ($levelSD as $jenjang)
                    <option value="{{ $jenjang }}">{{ $jenjang }}</option>
                @endforeach
            @endif
            @if ($jenjang == 'smp')
                @foreach ($levelSMP as $jenjang)
                    <option value="{{ $jenjang }}">{{ $jenjang }}</option>
                @endforeach
            @endif
            @if ($jenjang == 'sma')
                @foreach ($levelSMA as $jenjang)
                    <option value="{{ $jenjang }}">{{ $jenjang }}</option>
                @endforeach
            @endif
            @if ($jenjang == 'kuliah')
                @foreach ($levelKuliah as $jenjang)
                    <option value="{{ $jenjang }}">{{ $jenjang }}</option>
                @endforeach
            @endif
            @if ($jenjang == 'umum')
                @foreach ($levelUmum as $jenjang)
                    <option value="{{ $jenjang }}">{{ $jenjang }}</option>
                @endforeach
            @endif
        </select>
        @error('level')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
