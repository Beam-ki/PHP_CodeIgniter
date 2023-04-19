<?php

class Hello extends BaseController
{
    public function index()
    {
        //$view_params 변수는 반드시 필요하진 않다.
        //뷰가 매개변수를 사용하지 않는다면 $this -> load ->view("hellview");
        //위 와 같이호출해도 충분하다.
        //뷰 스키립트에서  $view_params 로 부터 $변수=$값을 추찰한다.
        //이 예제에서는뷰페이지에서 3개의 변수를 생성한다
        //$mega_title, 값:'CodeIgniter -Hello World',
        //$title  값 'welcome to CodeIgniter'
        //$message 값: 'hello World'

        $view_params= array(
            'mega_title' =>'CodeIgniter-Hello World',
            'title' =>'Welcome to CodeIgniter',
            'message'=>'hello World'
        );
        $this ->load->view('hellowview,$view_params');
    }
}
