<?php

namespace App\Http\Middleware;

use Closure;
use App\Kelas;

class NewMateri
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $slug_kelas = $request->segment(3);
        $kelas = Kelas::where('slug_kelas', $slug_kelas)->first();

        if ($kelas->status ==  'publish') {
            return $next($request);
        } else {
            return redirect()->route('user.kelas.materi');
        }
    }
}
