<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\crmlandingmail;
class crmmail extends Controller
{
    function sendmail(Request $request,$name,$email,$mobileno){
        $previousUrl = url()->previous();
        $content = [
            'name' => $name,
            'email' => $email,
            'mobileno' => $mobileno
        ];
        $view = "crmmail";
    
            Mail::to('aman.kumar@crmlanding.in')->send(new crmlandingmail($content, $view));
            Mail::to('sales@crmlanding.in')->send(new crmlandingmail($content, $view));
            return redirect()->to($previousUrl);
    }
    function sendmailcarrer(Request $request,$name,$email,$position,$mobileno){
        $name =  
        $content = [
            'name' => $name,
            'email' => $email,
            'position'=>$position,
            'mobileno' => $mobileno
        ];
        $viewcareer = "crmcareer";
    
            Mail::to('oshin.barotia@crmlanding.in')->send(new crmlandingmail($content, $viewcareer));
            return redirect()->to('https://crmlanding.in/career');

    }
}
