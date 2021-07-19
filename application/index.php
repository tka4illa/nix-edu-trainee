<?php
class Route
{
    public function prepare_link($address){
        $address = parse_url($address);
        $address_path = $address['path'];
        $address_path = explode('/', $address_path);
        var_dump($address_path);
        return $address_path[3];//Тут меняем в зависимости от того, какая глубина воложенности каталогов

    }
    public function start($key){
        $controller_name = 'controller_'.$key;
        include $controller_name;

        $model_name = 'model_'.$key;
        include $model_name;

        $view_name = 'view_'.$key;
        include $view_name;
    }
}
class Controller
{
    public function move ($address = 'index.php'){
        $link_handler = new Route;
        $link = $link_handler->prepare_link($address);
        //$clean_link = $link_handler->clean_shit($link);
        $link_handler->start($link);
    }
}
class View
{

}
class controller_index extends Controller
{
    public function go_to ($link){
        Controller::move($link);
    }
}

$unprepared_link = $_SERVER['REQUEST_URI'];

$handler = new controller_index;
$handler->go_to($unprepared_link);
