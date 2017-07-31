<?php

/*
 * PHP分页类   
 * @package Page   
 * @Created 2015-05-16
 * @Created By Aaron
 * Example:
       $myPage=new Pager(1300,intval($CurrentPage));   
       $pageStr= $myPage->GetPagerContent();   
       echo $pageStr;   
 */
namespace app\libs;
use Yii;
class P
{
    private $pageSize = 10;
    private $pageIndex;
    private $totalNum;

    private $totalPagesCount;

    private $pageUrl;
    private static $_instance;

    public function __construct($url,$p_totalNum, $p_pageIndex, $p_pageSize = 10, $p_initNum = 3, $p_initMaxNum = 5)
    {
        if (!isset ($p_totalNum) || !isset($p_pageIndex)) {
            die ("pager initial error");
        }

        $this->totalNum = $p_totalNum;//总条数
        $this->pageIndex = $p_pageIndex;//当前页
        $this->pageSize = $p_pageSize;//每页数量
        $this->initNum = $p_initNum;
        $this->initMaxNum = $p_initMaxNum;
        $this->totalPagesCount = ceil($p_totalNum / $p_pageSize);//总页数
        $this->pageUrl = $url;//地址

        $this->_initPagerLegal();
    }


    /*
     *设置页面参数合法性
     *@return void
    */
    private function _initPagerLegal()
    {
        if ((!is_numeric($this->pageIndex)) || $this->pageIndex < 1) {
            $this->pageIndex = 1;
        } elseif ($this->pageIndex > $this->totalPagesCount) {
            $this->pageIndex = $this->totalPagesCount;
        }


    }

    public function GetPager()
    {
        $str='<div class="page-list">';
        $str.='<ul class="pagination">';
        $str.="<li><a  href='{$this->pageUrl}=1'>&laquo;</a> </li>";
//        if ($this->pageIndex == '1'||$this->pageIndex <1) {
//            $str.="<li><a href='{$this->pageUrl}=1' aria-label='Previous'>";
//        } else {
//            $str .= "<li><a href='{$this->pageUrl}=" . ($this->pageIndex-1) . "' aria-label='Previous'>" ;
//        }
//        $str.=' <span aria-hidden="true">&laquo;</span></a> </li>';
//        $str.=' <span aria-hidden="true">&lt;</span></a> </li>';

//        $str.=' <li>&lt;</li>';
//中间页码
        if ($this->totalPagesCount <= 10) {
            for($i=1;$i<= $this->totalPagesCount;$i++){
//                $page = Yii::$app->request->get('p', 1);
                if($i==$this->pageIndex){
                    $str.="<li class='active'>";
                }else{
                    $str.="<li>";
                }
                $str.="<a href='{$this->pageUrl}=" .$i."'>$i</a>";
                $str.='</li>';
            }
        }
        else{
            if($this->pageIndex-4<=0){
                for($i=1;$i<= 10;$i++){
                    if($i==$this->pageIndex){
                        $str.="<li class='active'>";
                    }else{
                        $str.="<li>";
                    }
                    $str.="<a href='{$this->pageUrl}=" .$i."'>$i</a>";
                    $str.='</li>';
                }
            }elseif($this->pageIndex>4 && $this->pageIndex<$this->totalPagesCount-5){
                for($i=$this->pageIndex-4;$i<= $this->pageIndex+5;$i++){
                    $page = Yii::$app->request->get('p', 1);
                    if($i==$page){
                        $str.="<li class='active'>";
                    }else{
                        $str.="<li>";
                    }
                    $str.="<a href='{$this->pageUrl}=" .$i."'>$i</a>";
                    $str.='</li>';
                }
            }elseif($this->pageIndex>=$this->totalPagesCount-5){
                for($i=$this->totalPagesCount-9;$i<= $this->totalPagesCount;$i++){
                    if($i==$this->pageIndex){
                        $str.="<li class='active'>";
                    }else{
                        $str.="<li>";
                    }
                    $str.="<a href='{$this->pageUrl}=" .$i."'>$i</a>";
                    $str.='</li>';
                }
            }

//            for($i=$this->totalPagesCount-9;$i<= $this->totalPagesCount;$i++){
//                $page = Yii::$app->request->get('p', 1);
//                if($i==$page){
//                    $str.="<li class='active'>";
//                }else{
//                    $str.="<li>";
//                }
//                $str.="<a href='{$this->pageUrl}=" .$i."'>$i</a>";
//                $str.='</li>';
//            }
        }

        //下一页 末页
//        if ($this->pageIndex == $this->totalPagesCount||$this->pageIndex >$this->totalPagesCount) {
//            $str .=  "<li><a href='{$this->pageUrl}=" . ($this->totalPagesCount ) . "' aria-label='Next' >";
//        } else {
//            $str .=  "<li><a href='{$this->pageUrl}=" . ($this->pageIndex+1) . "' aria-label='Next' > ";
////
//        }
////        $str .= "<span>&gt;</span></a></li>";
////
//        $str .= "<span aria-hidden='true'>&gt;</span></a></li>";
        $str .= "<li><a href='{$this->pageUrl}=" . ($this->totalPagesCount ) . "'>&raquo;</a></li>";
        $str .= "</div>";
        return $str;
    }

}

?>