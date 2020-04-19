<div class="col-md-6 col-sm-12">
    <h3>Add Task</h3>
    {if $errorsText != ''}
        <div class="alert alert-danger" role="alert">
            {$errorsText}
        </div>
    {/if}
    <div class="task-form">
        <form action="index.php" method="post">
            <input name="mod" type="hidden" value="add-task">

            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control" placeholder="Email" {if isset($data['email']) } value="{$data['email']}"{/if}>
            </div>
            <div class="form-group">
                <label>User</label>
                <input name="user" type="text" class="form-control" placeholder="User"{if isset($data['user']) } value="{$data['user']}"{/if}>
            </div>
            <div class="form-group">
                <label>Task</label>
                <input name="task" type="text" class="form-control" placeholder="Task" {if isset($data['task']) } value="{$data['task']}"{/if}>
            </div>
            <button type="submit" class="btn btn-black">Send</button>
        </form>
    </div>
</div>