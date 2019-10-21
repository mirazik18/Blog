{include file="admin/blocks/head.tpl"}

<div class="container">

    <div class="mb-3 text-right">
        <a href="/admin/categories/create" class="btn btn-success">Создать Категорию</a>
    </div>

    {foreach $categories as $category}

        <div class="card card-body mb-3 d-flex flex-row align-content-start justify-content-start">

            <div>

                <div class="mb-1">

                    <strong>{$category.name}</strong>

                </div>

            </div>

            <div class="btn-group btn-group-sm ml-auto mb-auto">
                <a href="/admin/categories/update/{$category.id}" class="btn btn-secondary">
                    Изменить
                </a>
                <a href="/admin/categories/delete/{$category.id}" class="btn btn-danger">
                    Удалить
                </a>

            </div>

        </div>

    {/foreach}

</div>

{include file="global/footer.tpl"}
