<aside>
    <div>
        <p>Filtrar por genero:</p>
        <form action="filtrarPelicula" method="POST">
            <select name="select_genero">
                {foreach from=$allGeneros item=genero};
                <option value="{$genero->id_genero}">{$genero->tipo}</option>
                {/foreach}
            </select>
        <button type="submit">Filtrar</button>
        <button><a href="{BASE_URL}tabla">Mostrar Todas</a></button>
        </form>
    </div>
</aside>