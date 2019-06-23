<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\student;
use App\admin;

class login_controller extends Controller
{
    //
    public function auth(Request $req)
    {
    	$usera = $req->input('user');
    	$passa = $req->input('pass');
    	$p = student::where('username','=',$usera)
                    ->where('password','=',$passa)
                    ->get();

    	 

    	if(count($p)>0)
    	{  
            $usn = student::where('username','=',$usera)
                    ->where('password','=',$passa)
                    ->value('usn');
                    Session::put('usn',$usn);
    		echo "<script>
    			window.location = '/home';
    			</script>
    		";
    		
    	}
        else{
            echo "
            <script>
            alert('Username or Password incorrect');
            window.location = '/';
            </script>
            ";          
        }
    	
    		
    }
    public function admin_auth(Request $req)
    {
    	$usera = $req->input('user');
    	$passa = $req->input('pass');
    	$sql = admin::where('username','=',$usera)->where('password','=',$passa)->get();


    	if(count($sql)>0)
    	{  
            $sql = admin::where('username','=',$usera)->where('password','=',$passa)->value('id');
            Session::put('id',$sql);
    		echo "<script>
    			window.location = '/admin_home/';
    			</script>
    		";
    		
    	}
    	else
	    {
			echo "
    		<script>
    		alert('Username or Password incorrect');
    		window.location = '/admin';
    		</script>
    		";   
         }   
    }
    public function delete($id)
    {
        $res = student::where('id','=',$id)->delete();
        if(isset($res))
        {
            echo "
                <script>
                alert('Record Deleted');
                window.location = '/view_records';</script>
            ";
        }
        else
        {
            echo "
                <script>
                alert('Deletion Failed');
                window.location = '/view_records';</script>
            ";
        }
    }
    public function insert(Request $res)
    {
        $usn = $res->input('usn');
        $sql = student::where('usn','=',$usn)->get();
        if(count($sql)>0)
        {
                echo "<script>
                    alert('Duplicate USN');
                    window.location = '/insert_records';
                    </script>
                ";
        }
        else
        {
            $stu = new student();
            $stu->username = $res->input('name');
            $stu->password = $res->input('usn');
            $stu->usn = $res->input('usn');
            $stu->branch = $res->input('branch');
            $stu->address = $res->input('address');
            $stu->email = $res->input('email');
            $stu->ca = $res->input('ca');
            $stu->tch = $res->input('tch');
            $stu->perc = ($stu->ca/$stu->tch)*100;
            if($stu->save())
            {
                echo "<script>
                        alert('Record inserted');
                        window.location = '/admin_home';
                        </script>
                ";
            }
            else
            {
                 echo "<script>
                        alert('Failed');
                        window.location = '/insert_records';
                        </script>
                ";
            }
        }
    }
    public function update($id)
    {
        $res = student::where('id','=',$id)->get();
        return view('update',compact('res'));
    }
    public function edit(Request $res)
    {
        $stu = new student();
        $n  = $res->input('name');
        $u = $res->input('usn');
        $b = $res->input('branch');
        $a = $res->input('address');
        $e = $res->input('email');
        $c = $res->input('ca');
        $t = $res->input('tch');
        $perc = ($c/$t)*100;
        $update = student::where('usn','=',$u)->update(['username'=>$n,'usn'=>$u,'branch'=>$b,'address'=>$a,'email'=>$e,'ca'=>$c, 'tch'=>$t,'perc'=>$perc]);
        if($update)
        {
            echo "<script>
                    alert('Record Updated');
                    window.location = '/admin_home';
                    </script>
            ";
        }
        else
        {
             echo "<script>
                    alert('Failed');
                    window.location = '/admin_home';
                    </script>
            ";
        }
    }
    public function home()
    {
        $usn = Session::get('usn');
        $res = student::where('usn','=',$usn)->get();
        return view('student_home',compact('res'));
    }
    public function attendance()
    {   
        $usn = Session::get('usn');
         $res = student::where('usn','=',$usn)->get();
        return view('attendance',compact('res'));
    }
    public function logout()
    {
        Session::forget('usn');
        echo "<script>alert('Logged out sucessfully')</script>";
        return view('index');
    }
     public function logout_admin()
    {
        Session::forget('id');
        Session::forget('usn');
        echo "<script>alert('Logged out sucessfully')</script>";
        return view('admin_login');
    }
    public function admin_home()
    {
        $id = Session::get('id');
        if($id)
        {   $res = admin::where('id','=',$id)->get();
            return view('admin_home',compact('res'));
        }
        else
        {
            echo "<script>
                    window.location = '/NF';
            </script>";
        }
    }
    public function security()
    {
        $usn = Session::get('usn');
        $res = student::where('usn','=',$usn)->get();
        return view('security',compact('res'));
    }
        public function security_admin()
    {
        $id = Session::get('id');
        $res = admin::where('id','=',$id)->get();
        return view('security_admin',compact('res'));
    }
    public function change_password()
    {
        $usn = Session::get('usn');
        $res = student::where('usn','=',$usn)->get();
        return view('change_password',compact('res'));
    }
    public function change_password_admin()
    {
        $id = Session::get('id');
        $res = admin::where('id','=',$id)->get();
        return view('change_password_admin',compact('res'));
    }
    public function c_pass(Request $req)
    {
        $usn = Session::get('usn');
        $p = $req->input('newpass');
        $pa = $req->input('newpassa');
        $cp = $req->input('cp');
        $password = student::where('usn','=',$usn)->value('password');
        if($cp == $password)
        {
        if($p == $pa)
        {
           $usn = Session::get('usn');
           $update = student::where('usn','=',$usn)->update(['password'=>$p]);
           if($update>0)
           {
                echo "
                    <script>
                    alert('Password Changed');
                    window.location = '/security';</script>
                ";
           }
           else
           {
                 echo "
                    <script>
                    alert('Failed');
                    window.location = '/security';</script>
                ";
           }
        }
        else
        {
            echo "
                <script>alert('passwords do not match');
                        window.location = '/change_password';
                        </script>
            ";
        }
         } 
        else
        {
            echo "
                <script>
                alert('Password Incorrect');
                window.location = '/home';
                </script>
            ";
        }  
    }
     public function c_pass_admin(Request $req)
    {
        $id = Session::get('id');
        $p = $req->input('newpass');
        $pa = $req->input('newpassa');
        $cp = $req->input('cp');
        $password = admin::where('id','=',$id)->value('password');
        if($cp == $password)
        {
        if($p == $pa)
        {
           $id = Session::get('id');
           // $update = admin::where('id','=',$id)->update(['password'=>$p]);
           $update = admin::where('id','=',$id)->update(['password'=>$p]);
           if($update>0)
           {
                echo "
                    <script>
                    alert('Password Changed');
                    window.location = '/security_admin';</script>
                ";
           }
           else
           {
                 echo "
                    <script>
                    alert('Failed');
                    window.location = '/security_admin';</script>
                ";
           }
        }
        else
        {
            echo "
                <script>alert('passwords do not match');
                        window.location = '/change_password_admin';
                        </script>
            ";
        }
        } 
        else
        {
            echo "
                <script>
                alert('Password Incorrect');
                window.location = '/security_admin';
                </script>
            ";
        }  
    }
    public function insert_marks($usn)
    {
        Session::put('usn',$usn);
        return view('insert_marks');
    }
    public function marks(Request $res){
        $usn = Session::get('usn');
        $m1 = $res->input('mark1');
        $m2 = $res->input('mark2');
        $m3 = $res->input('mark3');
        $m4 = $res->input('mark4');
        $m5 = $res->input('mark5');
        $m6 = $res->input('mark6');
        $tot = ($m1 + $m2 + $m3 + $m4 + $m5 + $m6);
        $mperc = ($tot/600)*100;
        $update = student::where('usn','=',$usn)->update(['mark1'=>$m1, 'mark2'=>$m2, 'mark3'=>$m3, 'mark4'=>$m4, 'mark5'=>$m5, 'mark6'=>$m6, 'mperc'=>$mperc, 'mtotal'=>$tot]); 
        Session::forget('usn');
        if($update)
        {
            echo "
            <script>
            alert('Marks Added')
            window.location = '/choose_student'
            </script>";
        }
        else
        {
            echo "
            <script>
            alert('Failed')
            window.location = '/choose_student'
            </script>";
        }
    }
    public function marks_details($usn)
    {
        Session::put('usn',$usn);
        $res = student::where('usn','=',$usn)->get();
        return view('marks_details',compact('res'));
    }
    public function update_marks($id){
        $res = student::where('id','=',$id)->get();
        return view('update_marks',compact('res'));
    }
    public function mupdate(Request $res){
        $usn = Session::get('usn');
        $m1 = $res->input('mark1');
        $m2 = $res->input('mark2');
        $m3 = $res->input('mark3');
        $m4 = $res->input('mark4');
        $m5 = $res->input('mark5');
        $m6 = $res->input('mark6');
        $tot = ($m1 + $m2 + $m3 + $m4 + $m5 + $m6);
        $mperc = ($tot/600)*100;
        $update = student::where('usn','=',$usn)->update(['mark1'=>$m1, 'mark2'=>$m2, 'mark3'=>$m3, 'mark4'=>$m4, 'mark5'=>$m5, 'mark6'=>$m6, 'mperc'=>$mperc, 'mtotal'=>$tot]); 
        if($update)
        {
            echo "
            <script>
            alert('Marks Updated')
            window.location = '/marks_details/{$usn}'
            </script>";
        }
        else
        {
            echo "
            <script>
            alert('Failed')
            window.location = '/choose_student'
            </script>";
        }
    }
    public function student_marks(){
        $usn = Session::get('usn');
        $res = student::where('usn','=',$usn)->get();
        return view('student_marks',compact('res'));
    }
}
?>