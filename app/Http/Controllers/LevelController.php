<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function PassLevel1(Request $request)
    {
        if(isset($request->level))
        {
            if($request->flag == 'FLAG : peripheral nervous system' && $request->level == 0)
            {
                return view('level1');
            }
            else
            {
                return view('level0');
            }
        }
        else
        {
            return "error";
        }
    }

    public function PassLevel2(Request $request)
    {
        if(isset($request->level))
        {
            if($request->flag == 'FLAG : cryptanalytic' && $request->level == 1 )
            {
                return view('level2');
            }
            else
            {
                return view('level1');
            }
        }
        else
        {
            return "error";
        }
    }

    public function PassLevel3(Request $request)
    {
        if(isset($request->level))
        {
            if($request->flag == 'FLAG : 49759220d3e3c616fdc048900297a167' && $request->level == 2 )
            {
                setcookie('Secret', 'FLAG : d926b38d2ae98c634fe9c6217ab3950d' , time() + 5, "/level3");
                return view('level3');
            }
            else
            {
                return view('level2');
            }
        }
        else
        {
            return "error";
        }
    }

    public function PassLevel4(Request $request)
    {
        if(isset($request->level))
        {
            if($request->flag == 'FLAG : d926b38d2ae98c634fe9c6217ab3950d' && $request->level == 3 )
            {
                return view('level4');
            }
            else
            {
                return view('level3');
            }
        }
        else
        {
            return "error";
        }
    }

    public function PassLevel5(Request $request)
    {
        if(isset($request->level))
        {
            if($request->flag == 'FLAG : 555' && $request->level == 4 )
            {
                return view('level5');
            }
            else
            {
                return view('level4');
            }
        }
        else
        {
            return "error";
        }
    }

    public function PassLevel6(Request $request)
    {
        if(isset($request->level))
        {
            if($request->flag == 'FLAG : 666' && $request->level == 5 )
            {
                return view('level6');
            }
            else
            {
                return view('level5');
            }
        }
        else
        {
            return "error";
        }
    }

    public function PassLevel7(Request $request)
    {
        if(isset($request->level))
        {
            if($request->flag == 'FLAG : 777' && $request->level == 6 )
            {
                return view('level7');
            }
            else
            {
                return view('level6');
            }
        }
        else
        {
            return "error";
        }
    }

    public function PassLevel8(Request $request)
    {
        if(isset($request->level))
        {
            if($request->flag == 'FLAG : 888' && $request->level == 7 )
            {
                return view('level8');
            }
            else
            {
                return view('level7');
            }
        }
        else
        {
            return "error";
        }
    }

    public function PassLevel9(Request $request)
    {
        if(isset($request->level))
        {
            if($request->flag == 'FLAG : Th1s_1s_thE_lEVel08_Fl@g' && $request->level == 8 )
            {
                return view('level9');
            }
            else
            {
                return view('level8');
            }
        }
        else
        {
            return "error";
        }
    }

    public function PassLevel10(Request $request)
    {
        if(isset($request->level))
        {
            if($request->flag == 'FLAG : HACK_ME_IF_YOU_CAN' && $request->level == 9 )
            {
                return view('level10');
            }
            else
            {
                return view('level9');
            }
        }
        else
        {
            return "error";
        }
    }

    public function PassLevel11(Request $request)
    {
        if(isset($request->level))
        {
            if($request->flag == 'flag:CA273885E5ACB162BF1FEBE4478B59FB7BD634832214E0DA847C8DAB2DD8679B' && $request->level == 10 )
            {
                return view('level11');
            }
            else
            {
                return view('level10');
            }
        }
        else
        {
            return "error";
        }
    }

    public function PassLevel12(Request $request)
    {
        if(isset($request->level))
        {
            if($request->flag == 'FLAG : 540ea3b043e54' && $request->level == 11 )
            {
                return view('congratulation');
            }
            else
            {
                return view('level11');
            }
        }
        else
        {
            return "error";
        }
    }
}
