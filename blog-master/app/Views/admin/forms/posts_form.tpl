{include file="admin/blocks/head.tpl"}

<div class="container">
    <form action="/admin/posts/{$action}" method="post">

        <div class="form-group">
            <input
                    type="text"
                    class="form-control"
                    name="title"
                    placeholder="Заголовок"
                    value="{$post.title}"
                    required
            >
        </div>

        <div class="form-group">
            <select name="category_id" class="form-control" required>

                {foreach $categories as $category}

                    <option
                            value="{$category.id}"
                            {if $post.id == $category.id}
                                selected
                            {/if}
                    >
                        {$category.name}
                    </option>

                {/foreach}


            </select>
        </div>

        <div class="form-group">
            <textarea name="content" rows="5" class="form-control">{$post.content}</textarea>
        </div>

        <input type="text" hidden name="user_id" value="{$user.id}">
        <input type="text" hidden name="id" value="{$post.id}">

        <button class="btn btn-primary" type="submit">Отправить</button>

    </form>
</div>

{include file="global/footer.tpl"}