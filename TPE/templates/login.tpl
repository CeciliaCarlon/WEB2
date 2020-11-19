{include file="header.tpl"}
{include file="botonera.tpl"}
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
                    <p><a href="{BASE_URL}formularioRegistrarse">Registrarse</a></p>
                </div>     
             </form>
        </section>        
    </article>
{include file="footer.tpl"}