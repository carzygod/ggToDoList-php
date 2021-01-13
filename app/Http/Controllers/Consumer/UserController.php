<?php

namespace App\Http\Controllers\Consumer;

use App\Http\Controllers\Controller;
use App\Models\Role;
/**model
 * 🔥引用的model
 */
use App\Models\User;
use App\Models\Pages;
use App\Models\Msgs;
use App\Models\Record;
use App\Models\Stars;
use App\Models\Likes;
//model
use App\Rules\PhoneRule;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * 获取用户信息
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function info(Request $request): JsonResponse
    {
        $user = $request->user() ?? new User();
        $user->roles = $user->roles()->get();

        return $this->success($user);
    }

    /**
     * 用户资料修改
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'password' => ['sometimes', 'required', 'string', 'min:6'],
            'phone' => ['sometimes', 'required', 'unique:users', new PhoneRule()],
            'nickname' => ['sometimes', 'required', 'string', 'max:12', 'min:2'],
            'avatar' => ['sometimes', 'required', 'url',],
        ]);

        if ($validator->fails()) {
            return $this->setData($validator->errors())->forbidden();
        }

        $user = Auth::user() ?? new User();
        $user->fill($request->all());
        if ($request->has('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        return $this->success($user->save());
    }


    /**
     * 🔥用户使用接口
     */

     //❤新增stars
    public function newStar(Request $request): JsonResponse
    {
        $user=$request->user();
        $uid=$user->id;
        $ret=0;
        $dataCheckOut=Stars::where(['uid'=> $uid,'mid'=>$request->input('pid')])->first();
        if(empty($dataCheckOut)){
            $stars=new Stars();
            $pages=Pages::find($request->input('pid'));//查找文章
            $stars->uid=$uid;
            $stars->mid=$request->input('pid');
            $stars->save();
            //处理文章表
            $newStar=$pages->stars+1;
            $pages->update(['stars'=>$newStar]);
            $ret=0;
        }else{
            $ret='alread stars';
        }
        return $this->success($ret);
    }

    //💔取关stars
    public function killStar(Request $request): JsonResponse
    {
        $user=$request->user();
        $uid=$user->id;
        $ret=0;
        $dataCheckOut=Stars::where(['uid'=> $uid,'mid'=>$request->input('pid')])->first();
        if(empty($dataCheckOut)){
            $ret='not stars yet';
        }else{
            $stars=$dataCheckOut;
            $pages=Pages::find($request->input('pid'));//查找文章
            $stars->delete();
            //处理文章表
            $newStar=$pages->stars-1;
            $pages->update(['stars'=>$newStar]);
            $ret=0;
        }
        return $this->success($ret);
    }



    //❤新增喜欢
    public function newLikes(Request $request): JsonResponse
    {
        $user=$request->user();
        $uid=$user->id;
        $ret=0;
        $dataCheckOut=Likes::where(['uid'=> $uid,'mid'=>$request->input('pid')])->first();
        if(empty($dataCheckOut)){
            $stars=new Likes();
            $pages=Pages::find($request->input('pid'));//查找文章
            $stars->uid=$uid;
            $stars->mid=$request->input('pid');
            $stars->save();
            //处理文章表
            $newStar=$pages->likes+1;
            $pages->update(['likes'=>$newStar]);
            $ret=0;
        }else{
            $ret='alread stars';
        }
        return $this->success($ret);
    }

    //💔取关喜欢
    public function killLikes(Request $request): JsonResponse
    {
        $user=$request->user();
        $uid=$user->id;
        $ret=0;
        $dataCheckOut=Likes::where(['uid'=> $uid,'mid'=>$request->input('pid')])->first();
        if(empty($dataCheckOut)){
            $ret='not stars yet';
        }else{
            $stars=$dataCheckOut;
            $pages=Pages::find($request->input('pid'));//查找文章
            $stars->delete();
            //处理文章表
            $newStar=$pages->likes-1;
            $pages->update(['likes'=>$newStar]);
            $ret=0;
        }
        return $this->success($ret);
    }


    /**
     * 🔥留言相关功能性接口
     */

     public function newMsg(Request $request): JsonResponse
{
    $frome=$request->user()->id;
    $to=$request->input('to');
    $mid=$request->input('mid');
    //新增留言
    $msg=new Msgs();
    $msg->uid=$frome;
    $msg->formId=$frome;
    $msg->toId=$to;
    $msg->mid=$mid;
    $msg->msg=$request->input('data');
    $msg->likes=0;
    $msg->stars=0;
    $msg->isShowed=1;
    $ret=$msg->save();
   return $this->success($ret);
}

    //🔥获取文章列表
    public function getPagesList(Request $request): JsonResponse{
        $pages=new Pages();
        $pages=$pages->paginate(5);
        $ret=array();
        foreach($pages as $page){

            $writer=User::find($page->uid);
            $msg=Msgs::where('mid',$page->id)->count();
            $newpage=new Pages;
            $newpage->id=$page->id;
            $newpage->avatar=$writer->head;
            $newpage->userName=$writer->nickname;
            $newpage->essayUrl=$page->mpUrl;
            $newpage->comment=$page->msg;
            $newpage->likeNum=$page->likes;
            $newpage->subCommentNum=$msg;
            //获取关注情况
            $tmpwhere=array();
            $tmpwhere[]=array('uid',$request->user()->id);
            $tmpwhere[]=array('mid',$page->id);
            $likestatus=Likes::where($tmpwhere)->first();
            $starstatus=Stars::where($tmpwhere)->first();
            if(empty($likestatus)){
                $newpage->isLike='false';
            }else{
                $newpage->isLike=true;
            }
            if(empty( $starstatus)){
                $newpage->isCollect=false;
            }else{
                $newpage->isCollect=true;
            }
            //
            $ret[]=$newpage;
        }
        $result=new Pages;
        $result->list=$ret;
        $result->pageNum=$pages->lastPage();
        $result->next_page_url=$pages->nextPageUrl();
        return $this->success($result);
        }

}
