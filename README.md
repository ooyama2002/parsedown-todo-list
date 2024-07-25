# parsedown-todo-list
`ParsedownTodoList` is an extension of [Parsedown](https://github.com/erusev/parsedown) and [ParsedownExtra](https://github.com/erusev/parsedown-extra)  
Show TodoList checkbox

## Prerequisites:
- Requires Parsedown 1.7.4 or later.

## How to use
```
<?php
require_once("Parsedown.php");
require_once("ParsedownExtra.php");
require_once("ParsedownTodoList.php");

$parsedown = new ParsedownTodoList();

echo $parsedown->text("
- [x] todo 1
- [ ] todo 2
");

?>
```
![output](https://github.com/user-attachments/assets/2b311aff-0bb9-4c33-a0db-013f846758a1)

## License
- [MIT](https://opensource.org/license/MIT)
