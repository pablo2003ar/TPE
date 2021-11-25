{literal}
    <ul class="list-group" id="comment-list">
        <li class="list-group-item d-flex justify-content-between align-items-start" v-for="comment in comments">

            <div class="ms-2 me-auto">
                <div class="fw-bold">{{ comment.usuario }}</div>
                {{ comment.descripcion }}
                
            </div>
            <div class="text-center">
                <div class="badge bg-success rounded-pill display-block mb-2">{{ comment.puntaje }}</div>
            {/literal}
            {if isset($smarty.session.USER_ID)}
                {if $smarty.session.USER_ROL eq 'ADMIN'}
                    <div>
                        <button v-on:click="deleteComment" class="btn btn-dark" id=""
                            v-bind:data-id="comment.id">Eliminar</button>
                    </div>

                {/if}
            {/if}
            {literal}
            </div>
        </li>
    </ul>
{/literal}