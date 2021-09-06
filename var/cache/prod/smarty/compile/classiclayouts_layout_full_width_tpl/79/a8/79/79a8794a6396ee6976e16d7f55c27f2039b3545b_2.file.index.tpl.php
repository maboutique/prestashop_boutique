<?php
/* Smarty version 3.1.39, created on 2021-09-06 15:04:46
  from 'C:\MAMP\htdocs\presta\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613611ee0449a6_54121729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79a8794a6396ee6976e16d7f55c27f2039b3545b' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\presta\\themes\\classic\\templates\\index.tpl',
      1 => 1630932269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613611ee0449a6_54121729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_761758088613611ee034fa7_67392500', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_952926452613611ee038e25_44550722 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1779550914613611ee040b20_11562254 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1818158564613611ee03cca2_59696538 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1779550914613611ee040b20_11562254', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_761758088613611ee034fa7_67392500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_761758088613611ee034fa7_67392500',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_952926452613611ee038e25_44550722',
  ),
  'page_content' => 
  array (
    0 => 'Block_1818158564613611ee03cca2_59696538',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1779550914613611ee040b20_11562254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_952926452613611ee038e25_44550722', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1818158564613611ee03cca2_59696538', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
