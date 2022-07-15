<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public $baseUrl; //external source
    public function __construct(){
        $this->user = new User();
        $this->baseUrl = 'https://app.smartsmssolutions.com/io/api/client/v1/sms/';
        $this->services = new ServicesController();
    }

    public function createSms(Request $request){
        $apiToken = $this->user->getToken($request->token);
        $from = $request->from;
        $to = $request->to;
        $body = $request->body;
        $dnd = $request->dnd;
        $filteredPhoneNumbers = $this->services->getPhoneInfo($to);
        if(!empty($apiToken)){
           /* $client = new Client();
            $options = [
                'multipart' => [
                    [
                        'name' => 'token',
                        'contents' => 'your-apix-token' //my OWN API, Not customer's
                    ],
                    [
                        'name' => 'sender',
                        'contents' => $from
                    ],
                    [
                        'name' => 'to',
                        'contents' => $to
                    ],
                    [
                        'name' => 'message',
                        'contents' => $body
                    ],
                    [
                        'name' => 'type',
                        'contents' => 'mesasge-type'
                    ],
                    [
                        'name' => 'routing',
                        'contents' => 'routing'
                    ],
                    [
                        'name' => 'ref_id',
                        'contents' => 'unique-ref-id'
                    ],
                    [
                        'name' => 'simserver_token',
                        'contents' => 'simserver-token'
                    ],
                    [
                        'name' => 'dlr_timeout',
                        'contents' => 'dlr-timeout'
                    ],
                    [
                        'name' => 'schedule',
                        'contents' => 'time-in-future'
                    ]
                ]];*/
            /*$request = new Request('POST', 'https://app.smartsmssolutions.com/io/api/client/v1/sms/');
            $res = $client->sendAsync($request, $options)->wait();
            echo $res->getBody();
            */
            return response()->json([
                'api_token'=>$apiToken->api_token,
                'status'=>'success',
                'message'=>'Valid API token.',
                'request'=>$request->all(),
                'filteredNumbers'=>$filteredPhoneNumbers
            ]);
        }else{
            return response()->json(['status'=>'error','message'=>'Invalid API Token']);
        }
    }
}
