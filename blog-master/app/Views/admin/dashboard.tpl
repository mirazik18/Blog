{include file="admin/blocks/head.tpl"}

<div class="container">

    <div class="mb-3 text-right">
        <a href="/admin/posts/create" class="btn btn-success">Создать пост</a>
    </div>

    {foreach $posts as $post}

        <div class="card card-body mb-3 d-flex flex-row align-content-start justify-content-start">

            <div>

                <div class="mb-1">

                <span class="badge badge-secondary">
                    {$post.category.name}
                </span>

                    <strong>{$post.title}</strong>

                </div>

                <small class="text-muted">
                    <a href="/admin/users/{$post.author.id}">{$post.author.name}</a>, {$post.date}
                </small>

            </div>

            <div class="btn-group btn-group-sm ml-auto mb-auto">

                <a href="/posts/{$post.id}" class="btn btn-primary" target="_blank">
                    Просмотреть
                </a>
                <a href="/admin/posts/update/{$post.id}" class="btn btn-secondary">
                    Изменить
                </a>
                <a href="/admin/posts/delete/{$post.id}" class="btn btn-danger">
                    Удалить
                </a>

            </div>

        </div>

    {/foreach}

</div>

{include file="global/footer.tpl"}
