<?php
class HtmlHelper{
    static function formOpen($method='get', $action=''){
        echo '<form class="forms-sample" method="'.$method.'" action="'.$action.'">';
    }

    static function formClose(){
        echo '</form>';
    }

    static function input($wrapBefore = '', $wrapAfter='', $type='text', $name, $class='', $id='', $placeholder='', $value=''){
       echo $wrapBefore;
       echo '<input type="'.$type.'" name="'.$name.'" class="'.$class.'" id="'.$id.'" placeholder="'.$placeholder.'" value="'.$value.'"/>';
       echo $wrapAfter;
       
    }

    // static function <select name="" id=""></select>($wrapBefore = '', $wrapAfter='', $type='text', $name, $class='', $id='', $placeholder='', $value=''){
    //     echo $wrapBefore;
    //     echo '<select type="" name="'.$name.'" class="'.$class.'" id="'.$id.'" placeholder="'.$placeholder.'" value="'.$value.'"</select>';
    //     echo $wrapAfter;
    // }

    static function submit($label, $class=''){
        echo '<button type="submit" class="'.$class.'">'.$label.'</button>';
    }
}