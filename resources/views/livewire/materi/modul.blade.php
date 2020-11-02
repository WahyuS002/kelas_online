<div class="col-7 card-margin ml-5">

    @if ($log)
    <div class="d-flex justify-content-between align-self-center">
        <h4>Change Log</h4>
        <button class="btn btn-info mb-3" wire:click="materiClick">Lihat Materi</button>
    </div>
    @else
    <div class="d-flex justify-content-between align-middle">
        <h4>Modul Materi</h4>
        <button class="btn btn-info mb-3" wire:click="logClick">Lihat Log Kelas</button>
    </div>
    @endif

    @if (!$log)
    <div class="card">

        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-dark">Progress Belajar <strong>{{ $progress }}%</strong></p>
                    <div class="progress">
                        <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: {{ $progress }}%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($materi as $m)
        <div class="card-body">
            <div class="row d-flex align-items-center">

                <div class="col-1 text-center">{{ $loop->iteration }}</div>

                @auth
                @if (auth()->user()->checkPesertaKelas($slug_kelas))
                    <a href="{{ route('materi.show', ["slug_kelas" => $slug_kelas, "urutan" => $m->urutan]) }}" class="col-8 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play-circle"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon></svg><b class="ml-3 align-middle">{{ $m->judul }}.</b></a>
                @else
                    <p class="col-8 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg><b class="ml-3 align-middle">{{ $m->judul }}.</b></p>
                @endif
                @endauth
                @guest
                <a href="{{ route('login') }}" class="col-8 text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play-circle"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon>
                    </svg>
                    <b class="ml-3 align-middle">{{ $m->judul }}.</b>
                </a>
                @endguest

                <div class="col-3 text-center">

                    <div class="text-muted d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                        <b class="ml-3 align-middle">(06:23)</b>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif


    @if ($log)
    <div class="timeline-line">

        <div class="item-timeline">
            <p class="t-time">10:00</p>
            <div class="t-dot t-dot-primary">
            </div>
            <div class="t-text">
                <p>Updated Server Logs</p>
                <p class="t-meta-time">25 Sept 2020</p>
            </div>
        </div>

        <div class="item-timeline">
            <p class="t-time">12:45</p>
            <div class="t-dot t-dot-success">
            </div>
            <div class="t-text">
                <p>Backup Files EOD</p>
                <p class="t-meta-time">12 Aug 2020</p>
            </div>
        </div>

        <div class="item-timeline">
            <p class="t-time">14:00</p>
            <div class="t-dot t-dot-warning">
            </div>
            <div class="t-text">
                <p>Send Mail to HR and Admin</p>
                <p class="t-meta-time">11 June 2020</p>
            </div>
        </div>

        <div class="item-timeline">
            <p class="t-time">16:00</p>
            <div class="t-dot t-dot-info">
            </div>
            <div class="t-text">
                <p>Conference call with Marketing Manager.</p>
                <p class="t-meta-time">8 Mar 2020</p>
            </div>
        </div>

        <div class="item-timeline">
            <p class="t-time">17:00</p>
            <div class="t-dot t-dot-danger">
            </div>
            <div class="t-text">
                <p>Collected documents from <a href="javascript:void(0);">Sara</a></p>
                <p class="t-meta-time">11 Sept 2020</p>
            </div>
        </div>

        <div class="item-timeline">
            <p class="t-time">16:00</p>
            <div class="t-dot t-dot-dark">
            </div>
            <div class="t-text">
                <p>Server rebooted successfully</p>
                <p class="t-meta-time">15 Jule 2020</p>
            </div>
        </div>

    </div>
    @endif
</div>