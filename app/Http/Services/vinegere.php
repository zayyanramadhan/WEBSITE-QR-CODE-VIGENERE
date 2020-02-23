<?php

namespace App\Http\Services;

class vinegere
{
    //ACCI 93 Karakter
    private function acii93(){
      $ACCI93[0] ="a";
      $ACCI93[1] ="b";
      $ACCI93[2] ="c";
      $ACCI93[3] ="d";
      $ACCI93[4] ="e";
      $ACCI93[5] ="f";
      $ACCI93[6] ="g";
      $ACCI93[7] ="h";
      $ACCI93[8] ="i";
      $ACCI93[9] ="j";
      $ACCI93[10]="k";
      $ACCI93[11]="l";
      $ACCI93[12]="m";
      $ACCI93[13]="n";
      $ACCI93[14]="o";
      $ACCI93[15]="p";
      $ACCI93[16]="q";
      $ACCI93[17]="r";
      $ACCI93[18]="s";
      $ACCI93[19]="t";
      $ACCI93[20]="u";
      $ACCI93[21]="v";
      $ACCI93[22]="w";
      $ACCI93[23]="x";
      $ACCI93[24]="y";
      $ACCI93[25]="z";
      $ACCI93[26]="A";
      $ACCI93[27]="B";
      $ACCI93[28]="C";
      $ACCI93[29]="D";
      $ACCI93[30]="E";
      $ACCI93[31]="F";
      $ACCI93[32]="G";
      $ACCI93[33]="H";
      $ACCI93[34]="I";
      $ACCI93[35]="J";
      $ACCI93[36]="K";
      $ACCI93[37]="L";
      $ACCI93[38]="M";
      $ACCI93[39]="N";
      $ACCI93[40]="O";
      $ACCI93[41]="P";
      $ACCI93[42]="Q";
      $ACCI93[43]="R";
      $ACCI93[44]="S";
      $ACCI93[45]="T";
      $ACCI93[46]="U";
      $ACCI93[47]="V";
      $ACCI93[48]="W";
      $ACCI93[49]="X";
      $ACCI93[50]="Y";
      $ACCI93[51]="Z";
      $ACCI93[52]="0";
      $ACCI93[53]="1";
      $ACCI93[54]="2";
      $ACCI93[55]="3";
      $ACCI93[56]="4";
      $ACCI93[57]="5";
      $ACCI93[58]="6";
      $ACCI93[59]="7";
      $ACCI93[60]="8";
      $ACCI93[61]="9";
      $ACCI93[62]=" ";
      $ACCI93[63]="!";
      $ACCI93[64]="#";
      $ACCI93[65]="$";
      $ACCI93[66]="%";
      $ACCI93[67]="&";
      $ACCI93[68]="'";
      $ACCI93[69]="(";
      $ACCI93[70]=")";
      $ACCI93[71]="*";
      $ACCI93[72]="+";
      $ACCI93[73]=",";
      $ACCI93[74]="-";
      $ACCI93[75]=".";
      $ACCI93[76]="/";
      $ACCI93[77]=":";
      $ACCI93[78]=";";
      $ACCI93[79]="<";
      $ACCI93[80]="=";
      $ACCI93[81]=">";
      $ACCI93[82]="?";
      $ACCI93[83]="@";
      $ACCI93[84]="[";
      $ACCI93[85]="]";
      $ACCI93[86]="^";
      $ACCI93[87]="_";
      $ACCI93[88]="`";
      $ACCI93[89]="{";
      $ACCI93[90]="|";
      $ACCI93[91]="}";
      $ACCI93[92]="~";
      $vjson = json_encode($ACCI93);
      $vjson = json_decode($vjson);
      return $vjson;
    }

    //Mengambil nilai Karakter ACII93
    private function nilai_karakter($karakter){
      $char93 = $this->acii93();
      foreach ($char93 as $kode => $char) {
        if ($char==$karakter) {
          $nilai=$kode;
          return $nilai;
        }
      }
    }

    //Mengambil Karakter ACII93
    private function acii93_karakter($nilai_acii93){
      $char93 = $this->acii93();
      foreach ($char93 as $kode => $char) {
        if ($kode==$nilai_acii93) {
          $karakter=$char;
          return $karakter;
        }
      }
    }

    //Mengambil Karakter, Panjang Karakter, Nilai Karakter
    private function getchar($getchar){
      $length=strlen($getchar);
      $Rchar['length']=$length;
      $call=new vinegere();
      for ($i=0; $i < $length; $i++) {
        $Rchar['char'][$i] =substr($getchar,$i,1);
        $Rchar['nilai'][$i]=$call->nilai_karakter($Rchar['char'][$i]);
      }
      $cjson = json_encode($Rchar);
      $cjson = json_decode($cjson);
      return $cjson;
    }

    //Algoritma Vinegere Encode
    private function encode_vinegere($getplaintext){
      $kode='ruangbaca';
      $call=new vinegere();
      $plaintext=$call->getchar($getplaintext);
      $kodetext=$call->getchar($kode);
      $p_plain=$plaintext->length;
      $p_kode=$kodetext->length;
      $cek=0;
      $p=0;
      $p_pair=$p_plain;
      $new_kode='';

      while ($cek == 0) {
        if ($p_plain<$p_kode) {
          $plus_kode=substr($kode,0,$p_plain);
          $new_kode=$new_kode.$plus_kode;
          $cek=1;
        }
        else{
          $p_pair=($p_pair-$p_kode);
          if($p_pair<$p_kode){
          $new_kode=$new_kode.$kode;
          $plus_kode=substr($kode,0,$p_pair);
          $new_kode=$new_kode.$plus_kode;
          $cek=1;
          }
          else if ($p_pair == 0) {
            $new_kode=$new_kode.$kode;
            $cek=1;
          }
          else if ($p_pair > 0) {
            $new_kode=$new_kode.$kode;
          }
        }
      }
      $newkodetext=$call->getchar($new_kode);
      $ciphertext='';
      for ($i=0; $i < $p_plain ; $i++) {
        $nilai_plaintext=$plaintext->nilai[$i];
        $nilai_kode=$newkodetext->nilai[$i];
        $hasil=($nilai_plaintext+$nilai_kode);
        if ($hasil>92) {
          $hasil=($hasil-93);
          $ciphertext=$ciphertext.$call->acii93_karakter($hasil);
        }
        else {
          $ciphertext=$ciphertext.$call->acii93_karakter($hasil);
        }
      }
      return $ciphertext;
    }

    //Algoritma Vinegere Decode
    private function decode_vinegere($getchipertext){
      $kode='ruangbaca';
      $call=new vinegere();
      $chipertext=$call->getchar($getchipertext);
      $kodetext=$call->getchar($kode);
      $p_chiper=$chipertext->length;
      $p_kode=$kodetext->length;
      $cek=0;
      $p=0;
      $p_pair=$p_chiper;
      $new_kode='';

      while ($cek == 0) {
        if ($p_chiper<$p_kode) {
          $plus_kode=substr($kode,0,$p_chiper);
          $new_kode=$new_kode.$plus_kode;
          $cek=1;
        }
        else{
          $p_pair=($p_pair-$p_kode);
          if($p_pair<$p_kode){
          $new_kode=$new_kode.$kode;
          $plus_kode=substr($kode,0,$p_pair);
          $new_kode=$new_kode.$plus_kode;
          $cek=1;
          }
          else if ($p_pair == 0) {
            $new_kode=$new_kode.$kode;
            $cek=1;
          }
          else if ($p_pair > 0) {
            $new_kode=$new_kode.$kode;
          }
        }
      }
      $newkodetext=$call->getchar($new_kode);
      $plaintext="";
      for ($i=0; $i < $p_chiper ; $i++) {
        $nilai_chipertext=$chipertext->nilai[$i];
        $nilai_kode=$newkodetext->nilai[$i];
        $hasil=($nilai_chipertext-$nilai_kode);
        if ($hasil<0) {
          $hasil=($hasil+93);
          $plaintext=$plaintext.$call->acii93_karakter($hasil);
        }
        else {
          $plaintext=$plaintext.$call->acii93_karakter($hasil);
        }
      }
      return $plaintext;
    }

    public static function call_encode_vinegere($get){
      $call=new vinegere();
      $result=$call->encode_vinegere($get);
      return $result;
    }

    public static function call_decode_vinegere($get){
      $call=new vinegere();
      $result=$call->decode_vinegere($get);
      return $result;
    }

}
