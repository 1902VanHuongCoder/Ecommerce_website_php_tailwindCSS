<?php $this->layout("layouts/admin", ["title" => "Admin Dashboard"]) ?>

<?php $this->start("page") ?>
<div class="w-[95%] mx-auto h-[100%]">
    <div class="text-center py-4">
        <h2 class="text-[#333] font-bold text-xl">Add products</h2>
    </div>
    <div id="all_products" class="w-full overflow-x-scroll overflow-y-scroll">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Phone</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Address</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Create at</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <?php foreach ($customers as $customer) : ?>
                    <tr>
                        <th class="px-6 py-4 font-medium text-gray-900"><?= $this->e($customer->id) ?></th>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $this->e($customer->name) ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $this->e($customer->email) ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $this->e($customer->phone) ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $this->e($customer->address) ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $this->e($customer->created_at) ?></td>
                        <td class="flex justify-end gap-4 px-6 py-4 font-medium whitespace-nowrap">
                            <form class="form-inline ml-1" action="/admin/delete/user/<?= $customer->id ?>" method="POST">
                                <button type="submit" class="text-primary-700 bg-[#DC143C] px-[14px] py-2 text-[#fff]" name="delete-product">
                                    <i alt="Delete"></i> Delete User
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<!-- ALERT BOX -->
<?php $this->stop() ?>