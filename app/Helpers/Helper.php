<?php

namespace App\Helpers;


class Helper {
    public static function getMenu($menus){
        $html = '';
        foreach ($menus as $key => $menu ){
            $html .= '
                <tr>
                    <td>' . $menu->id . '</td>
                    <td>' . $menu->name . '</td>
                    <td>' . $menu->description . '</td>
                    <td>' . $menu->created_at . '</td>
                    <td>' . $menu->updated_at . '</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/public/menu/edit/'. $menu->id .'">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" onClick="removeProd('. $menu->id .', \'/public/menu/destroy/\')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            ';
        }
        return $html;
    }
}