{foreach from=$comentarios item=com}
              <div class="comment">
              {if $com->getUsuario()->getImagen() != null}
                <img src="./{$com->getUsuario()->getImagen()}">
                {/if}
                 {if $com->getUsuario()->getImagen() == null}
                <img src="./imgUsus/pepito.png">
                {/if}
               <div class="comment-content"><p class="author"><strong>{$com->getUsuario()->getNick()}</strong></p>
                <span>
                    {$com->getTexto()} 
                </span>
           </div>
              {if $com->getUsuario()->getNick() == $usuLogNick}
           <a class="btn" href="{$url_base}propuesta/borrarComEnPagina/{$propuesta->getNombre()}/{$com->getId()}">
                         <i class="icon-trash"></i></a>
         {/if}
         <a class="btn" onclick="javascript:likeComentario('{$usuLogNick}',{$com->getId()});">
<i class="fa fa-thumbs-up"></i> <span id="{$usuLogNick}{$com->getId()}">{$com->getLikes()}</span></a>
          </div>
 
      {/foreach}