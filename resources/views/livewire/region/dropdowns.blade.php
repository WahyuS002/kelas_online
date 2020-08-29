<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label>Provinsi</label>
            <select class="form-control" name="prov_id" wire:model="province">
                <option value="">Pilih Provinsi...</option>
                @foreach($provinces as $province)
                    <option value={{ $province->id }}>{{ $province->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Kabupaten/Kota</label>            
                <select class="form-control" name="kota_id" wire:model="regency">                        
                <option value="">Pilih Kab/Kota...</option>
                @foreach($regencies as $regency)
                    <option value={{ $regency->id }}>{{ $regency->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Kecamatan</label>            
                <select class="form-control" name="kec_id" wire:model="district">            
                <option>Pilih Kecamatan...</option>
                @foreach($districts as $district)
                    <option value={{ $district->id }}>{{ $district->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Kelurahan</label>
            <select class="form-control" name="kel_id" wire:model="village">
                <option>Pilih Kelurahan...</option>
                @foreach($villages as $village)
                    <option value={{ $village->id }}>{{ $village->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>