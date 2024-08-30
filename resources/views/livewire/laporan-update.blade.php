<div>
   <select wire:change="updatestatus($event.target.value)" wire:model="status" class="form-control">
        <option value="pending">Pending</option>
        <option value="procecing">Procecing</option>
        <option value="done">Done</option>
    </select>
</div>
