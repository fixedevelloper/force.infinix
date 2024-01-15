<?php


namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;
use App\Models\ActivationLevel;
use App\Models\Lottory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

    function dashboard(){
        $arrays = [];
        $lottos = Lottory::all();
        foreach ($lottos as $lotto) {
            $vals = json_decode($lotto->numbers, true);
            if (is_array($vals)) {
                for ($i = 0; $i < sizeof($vals); $i++) {
                    $arrays[] = $vals[$i];
                }
            }

        }
        $values=[];
        $s_values=[];
        for ($i=1;$i<=30;$i++){
            $values[]=[
                "item"=>$i,
                "value"=> count(array_filter($arrays,function($value) use ($i) {return $i == $value;}))
            ];
            $s_values[]=count(array_filter($arrays,function($value) use ($i) {return $i == $value;}))
            ;
        }

        $array_column = array_column($values, 'value');
        array_multisort($array_column, SORT_DESC, $values);
        logger($values);
        return view('backend.dashboard',[
            "values"=>$values
        ]);
    }
    function my_tirage(){
        $address_session=Session::get("address_");
        $participants=Lottory::query()->where(['address'=>$address_session])->orderByDesc('id')->get();
        return view('backend.my_tirage',[
            "participants"=>$participants
        ]);
    }
    function particpant(){
        $participants=Lottory::query()->orderByDesc('id')->get();;
        return view('backend.particpant',[
            "participants"=>$participants
        ]);
    }
    function sendLottory(Request $request){
        logger($request->get("numbers"));
        $lottery=new Lottory();
        $lottery->address=$request->get("address");
        $lottery->numbers=json_encode($request->get("numbers"));
        $lottery->date=date("Y-m-d");
        $lottery->save();
        return response()->json(['data' =>  $lottery, 'status'=> true]);
    }
    function register_ajax(Request $request){
        $user=new User();
        $user->name=$request->get("address");
        $user->address=$request->get("address");
        $user->address_parent=$request->get("address_parent");
        $user->total_team=0;
        $user->save();
        $activate=new ActivationLevel();
        $activate->address=$request->get("address");
        $activate->save();
        return response()->json(['data' =>  $user, 'status'=> true]);
    }
    function login_next(Request $request){
        $id=$request->get("id");
        $address=$request->get("address");
        Session::put("id_connect",$id);
        Session::put("address_connect",$address);
        return response()->json(['data' =>  [], 'status'=> true]);
    }
    function activate_level(Request $request){
        $activate=ActivationLevel::query()->firstWhere(['address'=>$request->get("address")]);
        switch ($request->get("level")){
            case 1:
                $activate->level1=true;
                break;
            case 2:
                $activate->level2=true;
                break;
            case 3:
                $activate->level3=true;
                break;
            case 4:
                $activate->level4=true;
                break;
            case 5:
                $activate->level5=true;
                break;
            case 6:
                $activate->level6=true;
                break;
            case 7:
                $activate->level7=true;
                break;
            case 8:
                $activate->level8=true;
                break;
            case 9:
                $activate->level9=true;
                break;
            case 10:
                $activate->level10=true;
                break;

        }
        $activate->save();
    }
}
