<?php
/**
 * Created by PhpStorm.
 * User: amos
 * Date: 16-12-20
 * Time: 下午5:45
 */
/*
 * 若使用强制类型申明，则所有函数必须指定返回类型，且返回值与返回类型相同，若不同，则产生TypeError
 * 若不指定强制类型申明，则返回值会被转换为指定的返回类型
 */
declare(strict_types=1);//指定强制类型
/*
 * 新特性1：NULL合并运算
 */
function point1():bool{
    echo $_GET['a']??'hello world';
    echo "<br />";
    echo isset($_GET['a']) ? $_GET['a'] : 'hello world';
    return true;

}


/*
 * 新特性2：指定函数返回类型
 */

function point2():string {
    return "hello";
}
//try{
//    point1();
//    echo point2();
//}catch()


