<?php 

/**
 * @author kepchuk <support@game-lab.su>
 * @link https://steamcommunity.com/id/kepchuk/
 */

namespace application\models;

class Ajax
{

    public function selectlang($post)
    {
        setcookie('lang', $post['selectlang']);
        
        return true;
    }
}