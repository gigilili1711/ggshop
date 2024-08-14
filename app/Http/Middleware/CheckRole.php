<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        // Kiểm tra nếu người dùng đã đăng nhập
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Lấy người dùng đã đăng nhập
        $user = Auth::user();

        // Kiểm tra quyền của người dùng
        if ($user->role !== $role) {
            // Redirect nếu không có quyền
            return redirect('/')->with('error', 'Bạn không có quyền truy cập trang này.');
        }

        // Cho phép tiếp tục nếu có quyền
        return $next($request);
    }
}
