{if (isset($mess) and $mess == 'save')}
    <div class="alert alert-success" role="alert">
        Your form is saved!
    </div>
{/if}

<a href="index.php?mod=fadd-task" class="btn btn-primary">Add Task</a><br><br>

<h4>All Tasks: {$nav['total']}</h4>

<table class="table">
    <tr>
        <th>#</th>
        <th>Email
            <a href="index.php?by=email&order=desc"><i class="fa fa-arrow-up {if ($nav['order'] == '&by=email&order=desc')}red{/if}"></i></a>
            <a href="index.php?by=email&order=asc"><i class="fas fa-arrow-down {if ($nav['order'] == '&by=email&order=asc')}red{/if}"></i></a>
        </th>
        <th>User
            <a href="index.php?by=user&order=desc"><i class="fa fa-arrow-up {if ($nav['order'] == '&by=user&order=desc')}red{/if}"></i></a>
            <a href="index.php?by=user&order=asc"><i class="fas fa-arrow-down {if ($nav['order'] == '&by=user&order=asc')}red{/if}"></i></a>
        </th>
        <th>Task</th>
        <th>Edit</th>
        <th>Done
            <a href="index.php?by=isdone&order=desc"><i class="fa fa-arrow-up {if ($nav['order'] == '&by=isdone&order=desc')}red{/if}"></i></a>
            <a href="index.php?by=isdone&order=asc"><i class="fas fa-arrow-down {if ($nav['order'] == '&by=isdone&order=asc')}red{/if}"></i></a>
        </th>
        {if $auth == 1}<th></th>{/if}
    </tr>
    {foreach from=$tasks item=task}
    <tr>
        <td>{$task['id']}</td>
        <td>{$task['email']|escape}</td>
        <td>{$task['user']|escape}</td>
        <td>{$task['txt']|escape}</td>
        <td>{$task['isEdit']}</td>
        <td>{$task['isDone']}</td>
        {if $auth == 1}<td><a href="index.php?mod=fedit-task&id={$task['id']}">Edit</a></td>{/if}
    </tr>
    {/foreach}
</table>

{if $nav['maxPages'] > 1}
    <nav aria-label="...">
        <ul class="pagination">

            {if $nav['currentPage'] == 1}
            <li class="page-item disabled">
                <span class="page-link" >Previous</span>
            </li>
            {else}
            <li class="page-item">
                <a class="page-link" href="index.php?page={($nav['currentPage']-1)}{$nav['order']}">Previous</a>
            </li>
            {/if}

            {for $i=1 to $nav['maxPages']}
                {if $nav['currentPage'] == $i}
                    <li class="page-item active">
                        <a class="page-link" href="index.php?page={$i}{$nav['order']}">{$i} <span class="sr-only">(current)</span></a>
                    </li>
                    {else}
                    <li class="page-item"><a class="page-link" href="index.php?page={$i}{$nav['order']}">{$i}</a></li>
                {/if}

            {/for}

            {if $nav['currentPage'] < $nav['maxPages']}
            <li class="page-item">
                <a class="page-link" href="index.php?page={($nav['currentPage']+1)}{$nav['order']}">Next</a>
            </li>
            {else}
                <li class="page-item disabled">
                    <span class="page-link">Next</span>
                </li>
            {/if}
        </ul>
    </nav>

{/if}