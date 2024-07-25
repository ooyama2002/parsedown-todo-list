# parsedown-todo-list
`ParsedownTodoList` is an extension of `Parsedown` and `ParsedownExtra`  
Show TodoList checkbox

## Prerequisites:
- Requires Parsedown 1.7.4 or later.

## How to use
```
<?php
require_once("lib/erusev-parsedown-1.7.4/Parsedown.php");
require_once("lib/erusev-parsedown-extra-0.8.1/ParsedownExtra.php");
require_once("lib/ooyama2002-parsedown-todo-list/ParsedownTodoList.php");

$parsedown = new ParsedownTodoList();

echo $parsedown->text("
- [x] todo 1
- [ ] todo 2
");

?>
```
## License
- [MIT](https://opensource.org/license/MIT)
