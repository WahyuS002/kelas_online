<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label>Provinsi <span class="required">*</span></label>
            <select class="form-control" name="prov_id" wire:model="province">
                <option value="">Pilih Provinsi...</option>
                @foreach($provinces as $province)
                    <option value={{ $province->id }}>{{ $province->name }}</option>
                @endforeach
            </select>
            @error('prov_id')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Kabupaten/Kota <span class="required">*</span></label>
                <select class="form-control" name="kota_id" wire:model="regency">
                <option value="">Pilih Kab/Kota...</option>
                @foreach($regencies as $regency)
                    <option value={{ $regency->id }}>{{ $regency->name }}</option>
                @endforeach
            </select>
            @error('kota_id')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Kecamatan <span class="required">*</span></label>
                <select class="form-control" name="kec_id" wire:model="district">
                <option value="">Pilih Kecamatan...</option>
                @foreach($districts as $district)
                    <option value={{ $district->id }}>{{ $district->name }}</option>
                @endforeach
            </select>
            @error('kec_id')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Kelurahan <span class="required">*</span></label>
            <select class="form-control" name="kel_id" wire:model="village">
                <option value="">Pilih Kelurahan...</option>
                @foreach($villages as $village)
                    <option value={{ $village->id }}>{{ $village->name }}</option>
                @endforeach
            </select>
            @error('kel_id')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
</div>