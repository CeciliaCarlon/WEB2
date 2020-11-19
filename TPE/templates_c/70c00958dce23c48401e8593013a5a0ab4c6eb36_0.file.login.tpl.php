<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 00:06:50
  from 'C:\xampp\htdocs\TPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb6fa8a6cf570_97367015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70c00958dce23c48401e8593013a5a0ab4c6eb36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\login.tpl',
      1 => 1605384190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:botonera.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb6fa8a6cf570_97367015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <article>
        <h2>Iniciar Sesion</h2>
        <section class="formulario">
            <form action="verificarUser" method="POST" id="formulario">
                <div class="formulario_contenido">
                    <input type="text" id="mail" name="input_email" placeholder="Mail"/>
                </div>
                <div class="formulario_contenido">
                    <input type="password" id="contraseña" name="input_contraseña" placeholder="Contraseña"/>
                </div>
                <div class="formulario_contenido">
                    <button id="enviar" type="submit">Iniciar Sesion <i class="fas fa-user"></i></button>
                </div>   
                <div class="formulario_contenido">
                    <p>¿No estas registrado?</p>
                    <p><a href="<?php echo BASE_URL;?>
formularioRegistrarse">Registrarse</a></p>
                </div>     
             </form>
        </section>        
    </article>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
