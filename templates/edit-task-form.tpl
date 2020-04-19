<div class="col-md-6 col-sm-12">
    <h3>Edit Task</h3>

    <div class="task-form">
        <form action="index.php" method="post">
            <input name="mod" type="hidden" value="edit-task">
            <input name="id" type="hidden"  value="{$task['id']}">
            <input name="task2" type="hidden"  value="{$task['txt']}">

            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" disabled class="form-control" placeholder="Email" {if isset($task['email']) } value="{$task['email']}"{/if}>
            </div>
            <div class="form-group">
                <label>User</label>
                <input name="user" type="text" disabled class="form-control" placeholder="User"{if isset($task['user']) } value="{$task['user']}"{/if}>
            </div>
            <div class="form-group">
                <label>Task</label>
                <input name="task" type="text" class="form-control" placeholder="Task" {if isset($task['txt']) } value="{$task['txt']}"{/if}>
            </div>
            <div class="form-group">
                <label>Done</label>
                <select name="isdone" class="form-control">
                    <option value="1" {if ($task['isDone']==1)}selected{/if}>Yes</option>
                    <option value="0" {if ($task['isDone']==0)}selected{/if}>No</option>
                </select>
            </div>


            <button type="submit" class="btn btn-black">Save</button>
        </form>
    </div>
</div>