<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2009 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// |         lanfengye <zibin_5257@163.com>
// +----------------------------------------------------------------------

class Page {
    
    public $prePage='';
    public $nextPage='';
    // 分页栏每页显示的页数
    public $rollPage = 5;
    // 页数跳转时要带的参数
    public $parameter  ;
    // 分页URL地址

    public $url     =   '';
    // 默认列表每页显示行数
    public $listRows = 20;
    // 起始行数
    public $firstRow    ;
    // 分页总页面数
    public $totalPages  ;
    // 总行数
    protected $totalRows  ;
    // 当前页数
    public $nowPage    ;
    // 分页的栏的总页数
    protected $coolPages   ;
    // 分页显示定制
    protected $config  =    array('header'=>'条记录','prev'=>'上一页','next'=>'下一页','first'=>'首页','last'=>'尾页','theme'=>"%first% %upPage% %linkPage% %downPage%");
    // 默认分页变量名
    protected $varPage;

    /**
     * 架构函数
     * @access public
     * @param array $totalRows  总的记录数
     * @param array $listRows  每页显示记录数
     * @param array $parameter  分页跳转的参数
	 
	  totalPages:总页数
	  nowPage   :当前页数
	  upRow     ：上一页
	  downRow   ：下一页
	  parameter :分页跳转的参数
	  
	  rollPage  :分页栏每页显示的页数
	 nowCoolPage:当前页数在第几个5页内
	  coolPages ：第几个5页中
	 
	 totalRows  :总的记录数
	  listRows  :每页显示记录数(每页的数据)
	  firstRow  :下一页数据的起始行数
	  
	  varPage   :p
     */
    public function __construct($totalRows,$listRows='',$parameter='',$url='') {
        $this->totalRows    =   $totalRows;
        $this->parameter    =   $parameter;
        $this->varPage      =   C('VAR_PAGE') ? C('VAR_PAGE') : 'p' ;
        if(!empty($listRows)) {
            $this->listRows =   intval($listRows);
        }
        $this->totalPages   =   ceil($this->totalRows/$this->listRows);     //总页数
        $this->coolPages    =   ceil($this->totalPages/$this->rollPage);
        $this->nowPage      =   !empty($_GET[$this->varPage])?intval($_GET[$this->varPage]):1;
        if($this->nowPage<1){
            $this->nowPage  =   1;
        }elseif(!empty($this->totalPages) && $this->nowPage>$this->totalPages) {
            $this->nowPage  =   $this->totalPages;
        }
        $this->firstRow     =   $this->listRows*($this->nowPage-1);
    }

    public function setConfig($name,$value) {
        if(isset($this->config[$name])) {
            $this->config[$name]    =   $value;
        }
    }

    /**
     * 分页显示输出
     * @access public
     */

	 public function show($goval)
	 {
       
	   if(0 == $this->totalRows) return '';
        $p              =   $this->varPage;
        $nowCoolPage    =   ceil($this->nowPage/$this->rollPage);

        // 分析分页参数
        if($this->url){
            $depr       =   C('URL_PATHINFO_DEPR');
            $url        =   rtrim(U('/'.$this->url,'',false),$depr).$depr.'__PAGE__';
        }
		else
		{
            if($this->parameter && is_string($this->parameter)) 
			{
                parse_str($this->parameter,$parameter);
            }
			elseif(empty($this->parameter))
			{
                unset($_GET[C('VAR_URL_PARAMS')]);
                if(empty($_GET)) 
				{
                    $parameter  =   array();
                }
				else
				{
                    $parameter  =   $_GET;
                }
            }
            $parameter[$p]  =   '__PAGE__';
            $url            =   U('',$parameter);
        }
		
		$this->nowPage=$goval;
        //上下翻页字符串
        $upRow          =   $this->nowPage-1;//上一页
        $downRow        =   $this->nowPage+1;//下一页
        if ($upRow>0){
            $upPage     =   "<li><a href='#' class='toPageNum' onclick='toPage(this.name)' name='$upRow' >".$this->config['prev']."</a></li>";
            $this->prePage= '"'."href='#' name='$upRow' class='toPageNum'";
        }
		else
		{
            $upPage     =   "<li class='disabled'><a href='#' >".$this->config['prev']."</a></li>";
            $this->prePage='disabled" href="#" ';
        }

        if ($downRow <= $this->totalPages)
		{
            $downPage   =   "<li><a href='#' class='toPageNum' onclick='toPage(this.name)' name='$downRow'>".$this->config['next']."</a></li>";
            $this->nextPage='"'."href='#' name='$downRow' class='toPageNum'";
        }
		else
		{
            $downPage   =    "<li class='disabled'><a>".$this->config['next']."</a></li>";
            $this->nextPage='disabled" href="#" ';
        }
        // << < > >>
        if($nowCoolPage == 1){
            $theFirst   =   '';
            $prePage    =   '';
        }else{
            $preRow     =   $this->nowPage-$this->rollPage;
            $prePage    =   "<li><a href='#' class='toPageNum' onclick='toPage(this.name)' name='$preRow' >上".$this->rollPage."页</a></li>";
            $theFirst   =   "<li><a href='#'  class='toPageNum' onclick='toPage(this.name)' name='1'>".$this->config['first']."</a></li>";
        }
        if($nowCoolPage == $this->coolPages){
            $nextPage   =   '';
            $theEnd     =   '';
        }
		else
		{
            $nextRow    =   $this->nowPage+$this->rollPage;
            $theEndRow  =   $this->totalPages;
            $nextPage   =   "<li><a href='#' class='toPageNum' onclick='toPage(this.name)' name='$nextRow'>下".$this->rollPage."页</a></li>";
            $theEnd     =   "<li><a href='#' class='toPageNum' onclick='toPage(this.name)' name='$theEndRow' >".$this->config['last']."</a></li>";
        }
        // 1 2 3 4 5
		/*
		*/
        $linkPage = "";
        for($i=1;$i<=$this->rollPage;$i++)
		{
            //$page       =   ($nowCoolPage-1)*$this->rollPage+$i;
            $page    = $this->nowPage+$i-($this->nowPage>3?3:$this->nowPage);
            if($page!=$this->nowPage)
			{
                if($page<=$this->totalPages)
				{
                    $linkPage .= "<li><a href='#' class='toPageNum' onclick='toPage(this.name)' name='$page'>".$page."</a></li>";
                }
				else
				{
                    break;
                }
            }
			else
			{
                if($this->totalPages != 1)
				{
                    $linkPage .= "<li><a heft='#'  class='cur toPageNum' onclick='toPage(this.name)' name='$page' >".$page."</a></li>";
                }
            }
        }
        $pageStr     =   str_replace(
          array('%header%','%nowPage%','%totalRow%','%totalPage%','%upPage%','%downPage%','%first%','%prePage%','%linkPage%','%nextPage%','%end%'),
         array($this->config['header'],$this->nowPage,$this->totalRows,$this->totalPages,$upPage,$downPage,$theFirst,$prePage,$linkPage,$nextPage,$theEnd),$this->config['theme']);
        //dump($pageStr);
		return $pageStr;
    }
	public function show1($goval)
	 {
       
	   if(0 == $this->totalRows) return '';
        $p              =   $this->varPage;
        $nowCoolPage    =   ceil($this->nowPage/$this->rollPage);

        // 分析分页参数
        if($this->url){
            $depr       =   C('URL_PATHINFO_DEPR');
            $url        =   rtrim(U('/'.$this->url,'',false),$depr).$depr.'__PAGE__';
        }
		else
		{
            if($this->parameter && is_string($this->parameter)) 
			{
                parse_str($this->parameter,$parameter);
            }
			elseif(empty($this->parameter))
			{
                unset($_GET[C('VAR_URL_PARAMS')]);
                if(empty($_GET)) 
				{
                    $parameter  =   array();
                }
				else
				{
                    $parameter  =   $_GET;
                }
            }
            $parameter[$p]  =   '__PAGE__';
            $url            =   U('',$parameter);
        }
		
		$this->nowPage=$goval;
        //上下翻页字符串
        $upRow          =   $this->nowPage-1;//上一页
        $downRow        =   $this->nowPage+1;//下一页
        if ($upRow>0){
            $upPage     =   "<li><a href='#' class='toPageNum' onclick='toPage1(this.name)' name='$upRow' >".$this->config['prev']."</a></li>";
            $this->prePage= '"'."href='#' name='$upRow' class='toPageNum'";
        }
		else
		{
            $upPage     =   "<li class='disabled'><a href='#' >".$this->config['prev']."</a></li>";
            $this->prePage='disabled" href="#" ';
        }

        if ($downRow <= $this->totalPages)
		{
            $downPage   =   "<li><a href='#' class='toPageNum' onclick='toPage1(this.name)' name='$downRow'>".$this->config['next']."</a></li>";
            $this->nextPage='"'."href='#' name='$downRow' class='toPageNum'";
        }
		else
		{
            $downPage   =    "<li class='disabled'><a>".$this->config['next']."</a></li>";
            $this->nextPage='disabled" href="#" ';
        }
        // << < > >>
        if($nowCoolPage == 1){
            $theFirst   =   '';
            $prePage    =   '';
        }else{
            $preRow     =   $this->nowPage-$this->rollPage;
            $prePage    =   "<li><a href='#' class='toPageNum' onclick='toPage1(this.name)' name='$preRow' >上".$this->rollPage."页</a></li>";
            $theFirst   =   "<li><a href='#'  class='toPageNum' onclick='toPage1(this.name)' name='1'>".$this->config['first']."</a></li>";
        }
        if($nowCoolPage == $this->coolPages){
            $nextPage   =   '';
            $theEnd     =   '';
        }
		else
		{
            $nextRow    =   $this->nowPage+$this->rollPage;
            $theEndRow  =   $this->totalPages;
            $nextPage   =   "<li><a href='#' class='toPageNum' onclick='toPage1(this.name)' name='$nextRow'>下".$this->rollPage."页</a></li>";
            $theEnd     =   "<li><a href='#' class='toPageNum' onclick='toPage1(this.name)' name='$theEndRow' >".$this->config['last']."</a></li>";
        }
        // 1 2 3 4 5
		/*
		*/
        $linkPage = "";
        for($i=1;$i<=$this->rollPage;$i++)
		{
            //$page       =   ($nowCoolPage-1)*$this->rollPage+$i;
            $page    = $this->nowPage+$i-($this->nowPage>3?3:$this->nowPage);
            if($page!=$this->nowPage)
			{
                if($page<=$this->totalPages)
				{
                    $linkPage .= "<li><a href='#' class='toPageNum' onclick='toPage1(this.name)' name='$page'>".$page."</a></li>";
                }
				else
				{
                    break;
                }
            }
			else
			{
                if($this->totalPages != 1)
				{
                    $linkPage .= "<li><a heft='#'  class='cur toPageNum' onclick='toPage1(this.name)' name='$page' >".$page."</a></li>";
                }
            }
        }
        $pageStr     =   str_replace(
          array('%header%','%nowPage%','%totalRow%','%totalPage%','%upPage%','%downPage%','%first%','%prePage%','%linkPage%','%nextPage%','%end%'),
         array($this->config['header'],$this->nowPage,$this->totalRows,$this->totalPages,$upPage,$downPage,$theFirst,$prePage,$linkPage,$nextPage,$theEnd),$this->config['theme']);
        //dump($pageStr);
		return $pageStr;
    }
}