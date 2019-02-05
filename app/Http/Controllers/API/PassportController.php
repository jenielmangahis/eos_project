<?php


namespace App\Http\Controllers\API;



use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use Validator;
use Auth;
use App\THTest;
class PassportController extends Controller
{
    
    public $successStatus = 200;
    /** 
         * login api 
         * 
         * @return \Illuminate\Http\Response 
         */ 
        public function login(){ 
            if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
                $user = Auth::user(); 
                $success['token'] =  $user->createToken('MyApp')-> accessToken; 
              
                return response()->json(['success' => $success,'status' => 'authenticated','userid' => Auth::user()->getId(),'name' => Auth::user()->getName(),'address' => Auth::user()->getAddress(),'contactno' => Auth::user()->getContactNo(),'email' => Auth::user()->getEmail() ], $this-> successStatus); 
            } 
            else{ 
                return response()->json(['error'=>'Unauthorized'], 401); 
            } 
        }
    /** 
         * Register api 
         * 
         * @return \Illuminate\Http\Response 
         */ 
        public function register(Request $request) 
        { 
            $validator = Validator::make($request->all(), [ 
                'name' => 'required', 
                'email' => 'required|email', 
                'password' => 'required', 
                'c_password' => 'required|same:password', 
            ]);
    if ($validator->fails()) { 
                return response()->json(['error'=>$validator->errors()], 401);            
            }
    $input = $request->all(); 
            $input['password'] = bcrypt($input['password']); 
            $user = User::create($input); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            $success['name'] =  $user->name;
    return response()->json(['success'=>$success,'status' => 'registered'], $this-> successStatus); 
        }
    /** 
         * details api 
         * 
         * @return \Illuminate\Http\Response 
         */ 
        public function details() 
        { 
            $user = Auth::user(); 
            return response()->json(['success' => $user], $this-> successStatus); 
        } 


       
        public function profile($id)
        {
            $user = User::where('id','=',$id)->get();
            return response()->json(['user' => $user]); 

        }

        public function savetemperature(Request $request){

            $temperature = $request->input('temperature');   
            
            $data = array('temperature' => $temperature,'humidity'=>0,'ph'=>0);
           
            $tht =  THTest::create($data);


            
            return response()->json(['temperature'=>$temperature]); 


        }




      

}
