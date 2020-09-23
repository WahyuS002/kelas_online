<?php

namespace App\Http\Middleware;

use Closure;
use App\Kelas;

class KelasEdit
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

        if ($kelas) {
            if ($kelas->status == 'review' || $kelas->status == 'publish' || $kelas->status == 'private') {
                return redirect()->route('user.kelas')->with('toast_warning', 'Kelas Tidak Bisa Diedit');
            }
            return $next($request);
        } else {
            return redirect()->route('user.kelas')->with('toast_error', 'Kelas Tidak Ada');
        }
    }
}
