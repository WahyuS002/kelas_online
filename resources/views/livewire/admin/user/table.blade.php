<div class="table-responsive mb-4 mt-4">
    <table class="multi-table table table-striped table-bordered table-hover non-hover" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Role</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admin as $a)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a->name }}</td>
                <td>{{ $a->role }}</td>
                <td>{{ $a->kategori_kelas->kategori }}</td>
                <td class="text-center">
                    <div class="dropdown custom-dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                            <a class="dropdown-item" href="#">View</a>
                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
