<?php
if (class_exists('ParsedownExtra')) {
    class_alias('ParsedownExtra', 'ParsedownTodoListParentAlias');
} else {
    class_alias('Parsedown', 'ParsedownTodoListParentAlias');
}

/**
 * ParsedownTodoList
 * https://github.com/ooyama2002/parsedown-todo-list
 * (c) ooyama2002@gmail.com
 */
class ParsedownTodoList extends ParsedownTodoListParentAlias
{
    function __construct()
    {
        array_unshift($this->InlineTypes['['], 'Checkbox');
    }

    protected function inlineCheckbox($Excerpt)
    {
        if (strlen($Excerpt['text']) < 4) {
            return;
        }
        if ($Excerpt['text'][0] != "[" || !($Excerpt['text'][1] == " " || $Excerpt['text'][1] == "x") || $Excerpt['text'][2] != "]" || $Excerpt['text'][3] != " ") {
            return;
        }

        $Inline = array(
            'extent' => 3,
            'element' => array(
                'name' => 'input',
                'attributes' => array(
                    'type' => 'checkbox',
                    'disabled' => 'disabled',
                ),
            ),
        );

        if ($Excerpt['text'][1] == "x") {
            $Inline['element']['attributes']['checked'] = 'checked';
        }

        return $Inline;
    }
}
?>