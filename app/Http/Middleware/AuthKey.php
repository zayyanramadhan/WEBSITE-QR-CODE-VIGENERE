<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Services\vinegere;

class AuthKey
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
      $token = $request->header('APP_KEY');
      ini_set('date.timezone', 'Asia/Jakarta');
      $t=time();
      $settoken="RuangBaca<~>".$t;
      $settoken_vine_dos=vinegere::call_decode_vinegere($token);
      //$settoken_vine_dos = $token;
      $gettoken = explode( "<~>", $settoken_vine_dos );
      try {
        if ($gettoken[0] == 'RuangBaca') {
          $cek=($t-$gettoken[1]);
          if ($cek<=300 && $cek>=0) {
            return $next($request);
          }
          else {
            return response()->json(['message' => 'App Key Not Found'],401);
          }
        }
        else {
          return response()->json(['message' => 'App Key Not Found'],401);
        }
      } catch (\Exception $e) {
        return response()->json(['message' => 'App Key Not Found'],401);
      }
    }
}
