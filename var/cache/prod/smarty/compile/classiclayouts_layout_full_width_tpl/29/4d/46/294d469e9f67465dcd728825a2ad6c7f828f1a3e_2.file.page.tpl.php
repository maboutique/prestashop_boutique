<?php
/* Smarty version 3.1.39, created on 2021-09-06 15:04:46
  from 'C:\MAMP\htdocs\presta\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613611ee0ae138_41925314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '294d469e9f67465dcd728825a2ad6c7f828f1a3e' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\presta\\themes\\classic\\templates\\page.tpl',
      1 => 1630932269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613611ee0ae138_41925314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1734782468613611ee058229_32136751', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_169650736613611ee05ff29_10987754 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1769037734613611ee05c0a0_51575146 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169650736613611ee05ff29_10987754', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1064013888613611ee09e731_85265906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1355815718613611ee0a25b6_64973320 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_398595850613611ee09a8b6_37387154 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1064013888613611ee09e731_85265906', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1355815718613611ee0a25b6_64973320', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_929404257613611ee0aa2b4_67785425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1021267958613611ee0a6431_71446699 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_929404257613611ee0aa2b4_67785425', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1734782468613611ee058229_32136751 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1734782468613611ee058229_32136751',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1769037734613611ee05c0a0_51575146',
  ),
  'page_title' => 
  array (
    0 => 'Block_169650736613611ee05ff29_10987754',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_398595850613611ee09a8b6_37387154',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1064013888613611ee09e731_85265906',
  ),
  'page_content' => 
  array (
    0 => 'Block_1355815718613611ee0a25b6_64973320',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1021267958613611ee0a6431_71446699',
  ),
  'page_footer' => 
  array (
    0 => 'Block_929404257613611ee0aa2b4_67785425',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1769037734613611ee05c0a0_51575146', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_398595850613611ee09a8b6_37387154', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1021267958613611ee0a6431_71446699', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
